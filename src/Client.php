<?php
/**
 * Created by PhpStorm.
 * User: mahamadou
 * Date: 22/09/16
 * Time: 16:03
 */

namespace VoApi;


class Client
{
    /**
     * @var integer
     */
    private $id;
    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $date_naissance;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $telephone;

    /**
     * @var integer
     */
    private $adresse_postal;

    /**
     * @var string
     */
    private $pays;

    /**
     * @var integer
     */
    private $Coiffeur_id;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return string
     */
    public function getDateNaissance()
    {
        return $this->date_naissance;
    }

    /**
     * @param string $date_naissance
     */
    public function setDateNaissance($date_naissance)
    {
        $this->date_naissance = $date_naissance;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return int
     */
    public function getAdressePostal()
    {
        return $this->adresse_postal;
    }

    /**
     * @param int $adresse_postal
     */
    public function setAdressePostal($adresse_postal)
    {
        $this->adresse_postal = $adresse_postal;
    }

    /**
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * @param string $pays
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
    }

    /**
     * @return int
     */
    public function getCoiffeurId()
    {
        return $this->Coiffeur_id;
    }

    /**
     * @param int $Coiffeur_id
     */
    public function setCoiffeurId($Coiffeur_id)
    {
        $this->Coiffeur_id = $Coiffeur_id;
    }


}