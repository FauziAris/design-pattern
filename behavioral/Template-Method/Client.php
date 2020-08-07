<?php

require_once "./Menu.php";
require_once "./MenuTemplate.php";
require_once "./MenuTemplateShort.php";
require_once "./MenuTemplateLong.php";

$menu = new Menu(
   "M001",
   "Lumpia Semarang",
   45000,
   "Lumpia Semarang merupakan salah satu jajanan yang laris dibeli. 
   Isinya terdiri dari bambu muda (rebung) pilihan yang renyah , udang segar dan telur. 
   Bahan - bahan tersebut diiolah dengan bumbu bawang , merica , 
   dan sentuhan sedikit gula yang diracik sedemikian rupa menjadikannya cita rasa yang khas Semarang."
);

$templateShort = new MenuTemplateShort();
$templateLong = new MenuTemplateLong();

$templateShort->showMenu($menu);

$templateLong->showMenu($menu);
