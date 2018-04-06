<?php
/**
 * Created by PhpStorm.
 * User: donatas
 * Date: 18.4.6
 * Time: 15.10
 */

namespace App\Model;


class Demo extends Wish
{
    public function __construct()
    {
        $this->setId(1);
        $this->setName('');
        $this->setImg('');
    }

}