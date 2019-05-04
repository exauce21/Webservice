ge<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity @Table(name="profil")
 **/
class Profil
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $nom;
    
    /**
     * Many Profil have Many Ingenieur.
     * @ManyToMany(targetEntity="Profil", mappedBy="ingenieur")
     */
    private $ingenieur;
    
    public function __construct()
    {
        $this->users = new ArrayCollection();
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