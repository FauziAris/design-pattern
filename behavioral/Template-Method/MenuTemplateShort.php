<?php
class MenuTemplateShort extends MenuTemplate
{
   public function showId(String $id): String
   {
      return $id;
   }

   public function showName(String $name): String
   {
      return $name;
   }
   public function showPrice(int $price): String
   {
      return "Rp " . number_format(strval($price), 2, ',', '.');
   }
   public function showDescription(String $description): String
   {
      return substr($description, 0, 100) . "...<a href='#'>Read more</a>";
   }
}
