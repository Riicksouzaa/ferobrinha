<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 20/03/2018
 * Time: 10:46
 */

class New_items extends ObjectData
{
    
    private $item;
    
    /**
     * New_items constructor.
     * @param $file
     */
    public function __construct ($file)
    {
        $this->loadFromFile($file);
    }
    
    /**
     * @param $file
     */
    private function loadFromFile ($file)
    {
        if (Website::fileExists($file)) {
            $xml = simplexml_load_file($file);
            $json = json_encode($xml);
            $items = json_decode($json, TRUE)['item'];
            $id = [];
            foreach ($items as $key => $item) {
                $ittem = $item['@attributes'];
                /** @var array $attr */
                $attr = $item['attribute'];
                if (count($attr) == 1) {
                    $attr[0] = $item['attribute']['@attributes'];
                    unset($attr['@attributes']);
                } elseif (count($attr) > 1) {
                    foreach ($attr as $hue => $att) {
                        $q[$hue] = $att['@attributes'];
                    }
                    $attr = $q;
                }
                $ittem['attr'] = $attr;
                $id[$ittem['id']] = $ittem;
                if ($ittem['id'] == NULL && isset($ittem['fromid'])) {
                    for ($ittem['fromid']; $ittem['fromid'] < $ittem['toid']; $ittem['fromid']++) {
                        $ittem['id'] = $ittem['fromid'];
                        $id[$ittem['fromid']] = $ittem;
                    }
                    $ittem['id'] = $ittem['toid'];
                    $id[$ittem['toid']] = $ittem;
                }
                $id[$ittem['id']]['attr'] = $attr;
            }
            $this->setItem($id);
        }
    }
    
    /**
     * @param mixed $item
     */
    private function setItem ($item)
    {
        $this->item = $item;
    }
    
    public function getItemByItemId ($id)
    {
        return $this->getItem()[$id];
    }
    
    /**
     * @return mixed
     */
    private function getItem ()
    {
        return $this->item;
    }
    
    
}