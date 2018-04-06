<?php
/**
 * Created by PhpStorm.
 * User: donatas
 * Date: 18.4.5
 * Time: 23.39
 */

namespace App\API;


use App\Model\Wish;
use App\Model\Demo;



class DbData
{

    public function getWishList()
    {
        return $this->selectAll();
    }

    /**
     * @return Wish[]
     */
    protected function selectAll()
    {
        $result = [];
        $data = json_decode(
            file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'Db' . DIRECTORY_SEPARATOR . 'wishData.json'), true
        );
        foreach ($data as $item) {
            $record = new Wish();
            $record->setId($item['id']);
            $record->setName($item['name']);
            $record->setImg($item['img']);
            $record->setCategory($item['category']);
            $record->setDescription($item['description']);
            $record->setDate(new \DateTime($item['date']));
            $record->setPlace($item['place']);
            $result[] =  $record->jsonSerialize();
        }
        return $result;
    }

}