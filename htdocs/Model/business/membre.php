<?php

namespace ClubFromage\Model\business;

 class membre
 {
    private $_id;
    private $_nom;
    private $_pseudo;
    private $_mail;
    private $_mdp;
    private $_datedeconnexion;
    private $_dateentrer;
    private $_descriptionrole;
    private $_present;


     /*==================SETTEURS==================*/
     /**
      * @param mixed $id
      */
     public function setId($id)
     {
         $this->_id = $id;
     }

     /**
      * @param mixed $nom
      */
     public function setNom($nom)
     {
         $this->_nom = $nom;
     }

     /**
      * @param mixed $pseudo
      */
     public function setPseudo($pseudo)
     {
         $this->_pseudo = $pseudo;
     }

     /**
      * @param mixed $mail
      */
     public function setMail($mail)
     {
         $this->_mail = $mail;
     }

     /**
      * @param mixed $mdp
      */
     public function setMdp($mdp)
     {
         $this->_mdp = $mdp;
     }

     /**
      * @param mixed $datedeconnexion
      */
     public function setDatedeconnexion($datedeconnexion)
     {
         $this->_datedeconnexion = $datedeconnexion;
     }

     /**
      * @param mixed $dateentrer
      */
     public function setDateentrer($dateentrer)
     {
         $this->_dateentrer = $dateentrer;
     }

     /**
      * @param mixed $descriptionrole
      */
     public function setDescriptionrole($descriptionrole)
     {
         $this->_descriptionrole = $descriptionrole;
     }

     /**
      * @param mixed $present
      */
     public function setPresent($present)
     {
         $this->_present = $present;
     }


    /*==================GETTEURS==================*/
     /**
      * @return mixed
      */
     public function getId()
     {
         return $this->_id;
     }

     /**
      * @return mixed
      */
     public function getNom()
     {
         return $this->_nom;
     }

     /**
      * @return mixed
      */
     public function getPseudo()
     {
         return $this->_pseudo;
     }

     /**
      * @return mixed
      */
     public function getMail()
     {
         return $this->_mail;
     }

     /**
      * @return mixed
      */
     public function getMdp()
     {
         return $this->_mdp;
     }

     /**
      * @return mixed
      */
     public function getDatedeconnexion()
     {
         return $this->_datedeconnexion;
     }

     /**
      * @return mixed
      */
     public function getDateentrer()
     {
         return $this->_dateentrer;
     }

     /**
      * @return mixed
      */
     public function getDescriptionrole()
     {
         return $this->_descriptionrole;
     }

     /**
      * @return mixed
      */
     public function getPresent()
     {
         return $this->_present;
     }


     /*==================CONSTRUCTEUR==================*/
     public function __construct(array $data)
     {
         $this->hydrate($data);
     }
     public function hydrate(array $donnees)
     {

         foreach ($donnees as $key=>$value)
         {
             $method='set'.ucfirst($key);

             if (method_exists($this,$method))
             {
                 $this->$method($value);
             }
         }
     }

 }
