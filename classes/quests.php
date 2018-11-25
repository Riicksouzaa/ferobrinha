<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 10/11/2018
 * Time: 14:07
 */

class Quests
{
    private $quests;
    
    public function __construct ()
    {
        $this->loadFromFile(Website::getWebsiteConfig()->getValue('Quests_path'));
    }
    
    private function loadFromFile ($file)
    {
        if (Website::fileExists($file)) {
            $xml = simplexml_load_file($file, "SimpleXMLElement", LIBXML_NOEMPTYTAG);
            $json = json_encode($xml);
            $quests = json_decode($json, TRUE)['quest'];
            $q = [];
            foreach ($quests as $key => $quest) {
                $questt = $quest['@attributes'];
                unset($quest['@attributes']);
                $q[$questt['name']] = array_merge($questt, $quest);
            }
            $this->setQuests($q);
        } else {
            new Error_Critic('#O-1', "<b>ERROR: #O-1:</b> Class::Quests - Quest file not exists in {$file}.");
        }
    }
    
    /**
     * @param mixed $quests
     * @return Quests
     */
    private function setQuests ($quests)
    {
        $this->quests = $quests;
        return $this;
    }
    
    public function getQuestByName ($name)
    {
        return $this->getTransformedArray()[$name];
    }
    
    private function getTransformedArray ()
    {
        $q = $this->quests;
        $qq = [];
        foreach ($q as $k => $v) {
            unset($v['mission']);
            $mission = $this->getMissionsByName($k);
            $v['mission'] = $mission;
            if (isset($v['comment'])) {
                unset($v['comment']);
            }
            $qq[$k] = $v;
            foreach ($mission as $km => $vm) {
                unset($vm['missionstate']);
                unset($v['mission'][$km]['missionstate']);
                unset($qq[$k]['mission'][$km]['missionstate']);
                $missionstate = $this->getMissionStateByQuestAndMission($k, $km);
                $vm['missionstate'] = $missionstate;
                $v['mission'][$km]['missionstate'] = $missionstate;
                $qq[$k]['mission'][$km]['missionstate'] = $missionstate;
            }
        }
        return $qq;
    }
    
    private function getMissionsByName ($name)
    {
        $missions = $this->getQuestsByName($name);
        $m = [];
        if (is_array($missions['mission'])) {
            foreach ($missions['mission'] as $key => $value) {
                $mission = $value['@attributes'];
                unset($value['@attributes']);
                if (!is_array($mission) || !is_array($value)) {
                    $mission = [];
                    $value = [];
                }
                $m[$mission['name']] = array_merge($mission, $value);
            }
        }
        return $m;
    }
    
    private function getQuestsByName ($name)
    {
        $quest = $this->getQuests();
        return $quest[$name];
    }
    
    /**
     * @return mixed
     */
    private function getQuests ()
    {
        return $this->quests;
    }
    
    private function getMissionStateByQuestAndMission ($name, $mission)
    {
        $missionstates = $this->getMissionsByName($name);
        $ms = [];
        if (is_array($missionstates[$mission]['missionstate'])) {
            foreach ($missionstates[$mission]['missionstate'] as $key => $value) {
                $missionstate = $value['@attributes'];
                unset($value['@attributes']);
                $ms[$missionstate['id']] = $missionstate;
            }
        }
        return $ms;
    }
}