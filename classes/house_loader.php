<?php
/**
 * Created by PhpStorm.
 * User: Ricardo Souza
 * Date: 12/04/2020
 * Time: 14:00
 */

class House_loader
{
    private $baseImagePath;
    private $baseImageName;
    private $houseImagePath;
    private $xmlHousePath;

    public function __construct($baseImagePath = null, $baseImageName = null, $houseImagePath = null, $xmlHousePath = null)
    {
        ini_set("memory_limit", "1024M");
        set_time_limit(6000);

        $this->baseImagePath = ($baseImagePath != null ? $baseImagePath : __DIR__ . "\\..\\images\\fullmap\\bmp\\");
        $this->baseImageName = ($baseImageName != null ? $baseImageName : "EmpireMinimap_");
        $this->houseImagePath = ($houseImagePath != null ? $houseImagePath : __DIR__ . "\\..\\images\\house\\");
        $this->xmlHousePath = ($xmlHousePath != null ? $xmlHousePath : Website::getWebsiteConfig()->getValue("serverPath") . "data/world/" . Website::getServerConfig()->getValue("mapName") . "-house.xml");
    }

    private function generateFloorImages()
    {
        for ($i = 1; $i <= 15; $i++) {
            $base = $this->baseImagePath . $this->baseImageName . "{$i}.bmp";
            $imgs[$i] = imagecreatefrombmp($base);
            // imagepng($imgs[$i], __DIR__."/fullmap/png/{$i}.png");
        }
        return $imgs;
    }

    private function generateHouseImages($house, $imgs)
    {
        $x = (int)$house['entryx'] + 11;
        $y = (int)$house['entryy'] + 11;
        $z = (int)$house['entryz'];

        $img = $imgs[$z];
        $crop = [
            'x' => $x - 24,
            'y' => $y - 24,
            'width' => 48,
            'height' => 48
        ];
        $id = (int)$house['houseid'];
        $houseImageCropped = imagecrop($img, $crop);
        if ($houseImageCropped !== FALSE) {
            imageline($houseImageCropped, 23, 24, 25, 24, imagecolorallocate($houseImageCropped, 0, 0, 0));
            imageline($houseImageCropped, 24, 23, 24, 25, imagecolorallocate($houseImageCropped, 0, 0, 0));
            imagepng($houseImageCropped, $this->houseImagePath . "{$id}.png");
        }
        imagedestroy($houseImageCropped);
    }

    public function iterateHouses()
    {
        $startTime = microtime(TRUE);
        session_start();

        $xmlPath = $this->xmlHousePath;
        $xml = simplexml_load_file($xmlPath);
        $floorImages = $this->generateFloorImages();
        $i = 0;

        foreach ($xml as $house) {
            $this->generateHouseImages($house, $floorImages);
            $i++;
        }
        foreach ($floorImages as $rs) {
            imagedestroy($rs);
        }
        $endTime = microtime(TRUE);
        $loadTime = $endTime - $startTime;

        $response = ["success" => "{$i} imagens de houses geradas em {$loadTime}"];
        echo json_encode($response);
    }

}