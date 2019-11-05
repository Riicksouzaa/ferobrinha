<?php
/**
 * Created by PhpStorm.
 * User: Ricardo Souza
 * Date: 04/11/2019
 * Time: 18:15
 */

class Mynewshop extends ObjectData
{
    private $items;
    private $valor;
    private $chart;
    private $pp;
    private $db;

    public function __construct()
    {
        $this->db = Website::getDBHandle();
    }


    public function getItems()
    {
        $this->db->prepare("SELECT * FROM mynewshop");
    }

}