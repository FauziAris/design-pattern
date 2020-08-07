<?php

abstract class MenuTemplate
{

   abstract public function showId(String $id): String;
   abstract public function showName(String $name): String;
   abstract public function showPrice(int $price): String;
   abstract public function showDescription(String $description): String;

   public final function showMenu(Menu $menu)
   {
      $id = $this->showId($menu->getid());
      $name = $this->showName($menu->getName());
      $price = $this->showPrice($menu->getPrice());
      $description = $this->showDescription($menu->getDescription());
      echo "
      <fieldset>
      <legend>$id - $name</legend>
      Harga: $price <br>
      <p>Deskripsi: </p>
      <p>$description</p>
      </fieldset>
      ";
   }
}
