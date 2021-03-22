<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 11/09/2018
 * Time: 21:04
 */

class Events
{
    private $events;

    public function __construct()
    {
        $this->loadFromFile(Website::getWebsiteConfig()->getValue('Events_path'));
    }

    private function loadFromFile($file)
    {
        if (Website::fileExists($file)) {
            $xml = simplexml_load_file($file, "SimpleXMLElement", LIBXML_NOCDATA);
            $json = json_encode($xml);
            $events = json_decode($json, TRUE)['globalevent'];
            foreach ($events as $event) {
                $event = $event['@attributes'];
                if ($event['isevent'] === 'true') {
                    $newEvent[$event['group']][] = $event;
                }
            }
            $this->setEvents($newEvent);
        } else {
            new Error_Critic('#Ev-1', "<b>ERROR: #Ev-1:</b> Class::Events - GlobalEvent File not exists in {$file}.");
        }
    }

    private function setEvents($events)
    {
        $this->events = $events;
        return $this;
    }

    public function getEvents()
    {
        return $this->events;
    }

    public function getArrGroupNames()
    {
        $arr = $this->events;
        $q = [];
        if (!empty($arr)) {
            foreach ($arr as $key => $value) {
                $q[] = $key;
            }
        }
        return $q;
    }

    public function getEventByName($name)
    {
        return $this->events[$name];
    }

    public function getEventByGroup($group)
    {
        return $this->events[$group];
    }

}
