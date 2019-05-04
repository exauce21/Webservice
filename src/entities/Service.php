<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity @Table(name="service")
 **/
class Service
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $nom;
    /** @Column(type="integer") **/
    private $port;
    /** @Column(type="integer") **/
    private $etat;
     /**
     * Many service have one serveur. This is the owning side.
     * @ManyToOne(targetEntity="serveur", inversedBy="service")
     * @JoinColumn(name="serveur_id", referencedColumnName="id")
     */
    private $serveur;
   
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

    public function getPort()
    {
        return $this->port;
    }
    public function setPort($port)
    {
        $this->port = $port;
    }

    public function getEtat()
    {
        return $this->etat;
    }
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }
    
    public function getServeur()
    {
        return $this->serveur;
    }
    public function setServeur($serveur)
    {
        $this->serveur = $serveur;
    }
   
}

?>