<?php
/*require('Model\business\fromage.php');
require('Model\business\membre.php');
require('Model\business\pays.php');
require('Model\business\avis.php');*/


require 'Model/Autoloader.php';
Autoloader::register();


/*use ClubFromage\Model\business\fromage;
use ClubFromage\Model\business\membre;
use ClubFromage\Model\business\pays;
use ClubFromage\Model\business\avis;*/

/*$fromage = new fromage();
$fromage->setNom("Raclette");
$fromage->getNom();
echo  $fromage->getNom();
echo '<br>';

$membre = new membre();
$membre->setNom("Hugo");
$membre->getNom();
echo $membre->getNom();
echo '<br>';

$nom = new pays();
$nom->setNom("France");
$nom->getNom();
echo $nom->getNom();
echo '<br>';

$avis = new avis();
$avis->setAvis("je suis super content de ce fromage");
$avis->getAvis();
echo $avis->getAvis();*/



$fromage = array("id"=>1,"nom"=>"raclette", "affinage"=>3, "DateDeCrea" => "02/11/2015", "Image"=>"beau", "recette"=>"Pour raclette entre amis", "histoire"=>"viens de la Yaute" );
$fromage1 = new \ClubFromage\Model\business\fromage($fromage);
echo $fromage1->getDateDeCrea();
echo "<br>";
$pays = array("id"=>1, "nom"=>"France");
$pays1= new pays($pays);
echo $pays1->getNom();
echo "<br>";
$avis = array("avis"=>"super bon","note"=>"5/5" );
$avis1= new avis($avis);
echo $avis1->getNote();
echo "<br>";
$membre = array("id"=>1, "nom"=>"Feige", "pseudo"=>"hugue", "mail"=>"uriuerg@rfr.fr", "mdp"=>"21mm12", "datedeco"=>"20/10/2019", "Dateentrer"=>"19/09/2019", "DesscriptionRole"=>"frsgfdrgdsgrsdrg", "pésent"=>"oui" );
$membre1= new membre($membre);
echo $membre1->getMail();
