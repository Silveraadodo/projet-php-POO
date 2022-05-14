<?php
//Front controller
//Url localhost:8000
require_once("../vendor/autoload.php");

//Chargement Automatique

use App\Models\RP;
$rp =new RP();
$rp->setLogin("rp3");
$rp->setPassword("rp");
$rp->insert();
echo "<pre>";
RP::selectAll();
var_dump(RP::selectById(1));
echo "</pre>";