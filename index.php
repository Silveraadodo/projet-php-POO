<?php 
//Front controller
//Url localhost:8000

//Chargement Manuel
require_once("../models/User.php");
require_once("../models/AC.php");
require_once("../models/Professeur.php");
require_once("../models/Etudiant.php");
require_once("../models/RP.php");

 $rp=new RP();
 $rp->setId(1)
     ->setLogin("spenmba")
     ->setPassword("youri");

$rp->setRole("ROLE_RP");
echo $rp->getRole();


 $ac=new AC();
 $ac->setId(1)
     ->setLogin("douvewane")
     ->setPassword("douve");

$ac->setRole("ROLE_AC");
echo $rp->getRole();

$prof=new Professeur();
$prof->setGrade("Directeur");
 $prof->setId(3)
     ->setLogin("moustaphader")
     ->setPassword("der");

$prof->setRole("ROLE_PROFESSEUR");
echo $rp->getRole();

$etu=new Etudiant();
$etu->setAge(20);
 $etu->setId(2)
     ->setLogin("siveraadodo")
     ->setPassword("silvera");

$etu->setRole("ROLE_Etudiant");
echo $etu->getRole();

