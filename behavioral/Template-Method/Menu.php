<?php

class Menu
{
   private String $id;
   private String $name;
   private int $price;
   private String $description;

   public function __construct(String $id, String $name, int $price, String $description)
   {
      $this->id = $id;
      $this->name = $name;
      $this->price = $price;
      $this->description = $description;
   }

   public function setid(String $id)
   {
      $this->id = $id;
   }

   public function setName(String $name)
   {
      $this->name = $name;
   }

   public function setPrice(int $price)
   {
      $this->price = $price;
   }

   public function setDescription(String $description)
   {
      $this->description = $description;
   }

   public function getid(): String
   {
      return $this->id;
   }

   public function getName(): String
   {
      return $this->name;
   }

   public function getPrice(): int
   {
      return $this->price;
   }

   public function getDescription(): String
   {
      return $this->description;
   }
}
