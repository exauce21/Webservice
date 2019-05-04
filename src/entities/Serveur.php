<?php
use Doctrine\ORM\Annotation as ORM;

/**
 * @Entity @Table(name="serveur")
 **/
class Serveur
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $nom;
    /** @Column(type="string") **/
    private $adresseip;
    /** @Column(type="integer") **/
    private $salle;
    /**
     * Many Serveurs have Many Services.
     * @ManyToMany(targetEntity="Service", mappedBy="serveur")
     */
    private $service;

    /**
     * Many Serveurs have Many Ingenieur.
     * @ManyToMany(targetEntity="Ingenieur", inversedBy="serveurs")
     * @JoinTable(name="ingenieur_serveur")
     */
    private $ingenieur;
    
    public function __construct()
    {

    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getAdresseip()
    {
        return $this->adresseip;
    }
    public function setAdresseip($adresseip)
    {
        $this->adresseip = $adresseip;
    }

    public function getSalle()
    {
        return $this->salle;
    }
    public function setSalle($salle)
    {
        $this->salle = $salle;
    }

    public function getService()
    {
        return $this->service;
    }
    public function setService($service)
    {
        $this->service = $service;
    }

    public function getIngenieur()
    {
        return $this->ingenieur;
    }
    public function setIngenieur($ingenieur)
    {
        $this->ingenieur = $ingenieur;
    }
}

?>