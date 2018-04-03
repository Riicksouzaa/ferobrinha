<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 18/03/2018
 * Time: 02:11
 */

class Mounts
{
    private $mountsbyid;
    private $mountsbycliid;
    private $key;

    /**
     * Mounts constructor.
     * @param $path
     */
    public function __construct ($path)
    {
        if ($path) {
            $this->loadFromFile($path);
        }
    }

    private function loadFromFile ($file)
    {

        if (Website::fileExists($file)) {
            $xml = simplexml_load_file($file, "SimpleXMLElement", LIBXML_NOCDATA);
            $json = json_encode($xml);
            $mounts = json_decode($json, TRUE)['mount'];
            $news = [];
            $cliid = [];
            $i = 0;
            foreach ($mounts as $mount) {
                $mount = $mount['@attributes'];
                $news[$mount['id']] = $mount;
                $news[$mount['id']]['key'] = (int)abs(10002001 + ($mount['id'] / 31));
                $news[$mount['id']]['storage'] = (1 << ($mount['id'] - 1) % 31);
                $cliid[$mount['clientid']] = $mount;
                $cliid[$mount['clientid']]['key'] = (int)abs(10002001 + ($mount['id'] / 31));
                $cliid[$mount['clientid']]['storage'] = (1 << ($mount['id'] - 1) % 31);
                $keys[$news[$mount['id']]['key']][$i] = $mount;
                $keys[$news[$mount['id']]['key']][$i]['key'] = (int)abs(10002001 + ($mount['id'] / 31));
                $keys[$news[$mount['id']]['key']][$i]['value'] = (1 << ($mount['id'] - 1) % 31);
                $i++;
            }
            $this->key = $keys;
            $this->setMountsById($news);
            $this->setMountsbycliid($cliid);
        } else {
            new Error_Critic('#M-1', "<b>ERROR: #M-1:</b> Class::Mounts - Mount File not exists in {$file}.");
        }
    }

    /**
     * @return mixed
     */
    public function getMountsByKey ($key)
    {
        $key = (int)$key;
        $mounts = $this->key;
        return $mounts[$key];
    }

    /**
     * @param mixed $mounts
     */
    private function setMountsById ($mounts)
    {
        $this->mountsbyid = $mounts;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getMountsById ($id)
    {
        $id = (int)$id;
        $mounts = $this->getMounts();
        return $mounts[$id];
    }

    /**
     * @return mixed
     */
    private function getMounts ()
    {
        return $this->mountsbyid;
    }

    public function getMountsByClientId ($client_id)
    {
        $id = (int)$client_id;
        $mounts = $this->getMountsbycliid();
        return $mounts[$id];
    }

    /**
     * @return mixed
     */
    private function getMountsbycliid ()
    {
        return $this->mountsbycliid;
    }

    /**
     * @param mixed $mountsbycliid
     */
    private function setMountsbycliid ($mountsbycliid)
    {
        $this->mountsbycliid = $mountsbycliid;
    }

    public function getAllMountsByPlayerId($player_id){
        $player = new Player();
        $player->loadById($player_id);

        $p = [];
        for ($i = 1; $i <= 10; $i++){
            $var = (10000000 + 2001);
            $var = $var + $i;
            if ($player->getStorage($var) != null) {
                $p[] = $player->getStorage($var);
            }
        }
        if($p != NULL){
            var_dump($p);
        }
    }


}