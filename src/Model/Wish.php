<?php
/**
 * Created by PhpStorm.
 * User: donatas
 * Date: 18.4.5
 * Time: 23.43
 */

namespace App\Model;


abstract class JsonSerialize {

    public function jsonSerialize() {
        $class = get_class($this);
        $json = array();
        $properties = get_class_vars($class);
        $keys = array_keys($properties);
        $plength = count($keys);
        for($i=0;$i<$plength;$i++){
            $method =  "get".$keys[$i];
            if(method_exists ($this,$method)){
                $json[$keys[$i]] = $this->$method();
            }
        }
        return $json;
    }

}
class Wish extends JsonSerialize
{
    public $testas = 1;
//    ---------------------Variables-------------------
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $img;

    /**
     * @var string
     */
    protected $category;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var \DateTime
     */
    protected $date;

    /**
     * @var string
     */
    protected $place;

//    -------------------------Methods----------------

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
         $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
         $this->name = $name;
    }

    /**
     * @return string
     */
    public function getImg(): string
    {
        return $this->img;
    }

    /**
     * @param string $img
     */
    public function setImg(string $img): void
    {
         $this->img = $img;
    }

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @param string $category
     */
    public function setCategory(string $category): void
    {
         $this->category = $category;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
         $this->description = $description;
    }

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate(\DateTime $date): void
    {
         $this->date = $date;
    }

    /**
     * @return string
     */
    public function getPlace(): string
    {
        return $this->place;
    }

    /**
     * @param string $place
     */
    public function setPlace(string $place): void
    {
         $this->place = $place;
    }

}


