<?php

namespace ClubFromage\Model\business;

class avis
{
    private $_avis;
    private $_note;

    /*==================GETTEURS==================*/
    /**
     * @return mixed
     */
    public function getAvis()
    {
        return $this->_avis;
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->_note;
    }


    /*==================SETTEURS==================*/
    /**
     * @param mixed $avis
     */
    public function setAvis($avis)
    {
        $this->_avis = $avis;
    }

    /**
     * @param mixed $note
     */
    public function setNote($note)
    {
        $this->_note = $note;
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