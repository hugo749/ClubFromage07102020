<?php

namespace ClubFromage\Model\business;

class pays
{
    private $_id;
    private $_nom;

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