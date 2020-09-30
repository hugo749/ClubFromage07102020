<?php

namespace ClubFromage\Model\business;

class fromage
{
    private $_id;
    private $_nom;
    private $_affinage;
    private $_DateDeCrea;
    private $_Image;
    private $_recette;
    private $_histoire;


/*==================GETTEURS==================*/
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
    public function getAffinage()
    {
        return $this->_affinage;
    }

    /**
     * @return mixed
     */
    public function getDateDeCrea()
    {
        return $this->_DateDeCrea;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->_Image;
    }

    /**
     * @return mixed
     */
    public function getRecette()
    {
        return $this->_recette;
    }

    /**
     * @return mixed
     */
    public function getHistoire()
    {
        return $this->_histoire;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
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

    /**
     * @param mixed $affinage
     */
    public function setAffinage($affinage)
    {
        $this->_affinage = $affinage;
    }

    /**
     * @param mixed $DateDeCrea
     */
    public function setDateDeCrea($DateDeCrea)
    {
        $this->_DateDeCrea = $DateDeCrea;
    }

    /**
     * @param mixed $Image
     */
    public function setImage($Image)
    {
        $this->_Image = $Image;
    }

    /**
     * @param mixed $recette
     */
    public function setRecette($recette)
    {
        $this->_recette = $recette;
    }

    /**
     * @param mixed $histoire
     */
    public function setHistoire($histoire)
    {
        $this->_histoire = $histoire;
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
