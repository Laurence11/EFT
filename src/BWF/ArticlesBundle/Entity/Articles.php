<?php

namespace BWF\ArticlesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articles
 *
 * @ORM\Table(name="articles", indexes={@ORM\Index(name="fk_articles_categories1_idx", columns={"categorie"})})
 * @ORM\Entity
 */
class Articles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_en", type="string", length=255, nullable=true)
     */
    private $nomEn;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="text", nullable=false)
     */
    private $texte;

    /**
     * @var string
     *
     * @ORM\Column(name="texte_en", type="text", nullable=true)
     */
    private $texteEn;
    
    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=100, nullable=true)
     */
    private $image;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var boolean
     *
     * @ORM\Column(name="vedette", type="boolean", nullable=false)
     */
    private $vedette;

    /**
     * @var boolean
     *
     * @ORM\Column(name="presentationAccueil", type="boolean", nullable=false)
     */
    private $presentationaccueil;

    /**
     * @var \Categories
     *
     * @ORM\ManyToOne(targetEntity="\BWF\SiteBundle\Entity\Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categorie", referencedColumnName="id")
     * })
     */
    private $categorie;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Articles
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set nomEn
     *
     * @param string $nomEn
     * @return Articles
     */
    public function setNomEn($nomEn)
    {
        $this->nomEn = $nomEn;

        return $this;
    }

    /**
     * Get nomEn
     *
     * @return string 
     */
    public function getNomEn()
    {
        return $this->nomEn;
    }

    /**
     * Set texte
     *
     * @param string $texte
     * @return Articles
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string 
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set texteEn
     *
     * @param string $texteEn
     * @return Articles
     */
    public function setTexteEn($texteEn)
    {
        $this->texteEn = $texteEn;

        return $this;
    }

    /**
     * Get texteEn
     *
     * @return string 
     */
    public function getTexteEn()
    {
        return $this->texteEn;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Articles
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set vedette
     *
     * @param boolean $vedette
     * @return Articles
     */
    public function setVedette($vedette)
    {
        $this->vedette = $vedette;

        return $this;
    }

    /**
     * Get vedette
     *
     * @return boolean 
     */
    public function getVedette()
    {
        return $this->vedette;
    }

    /**
     * Set presentationaccueil
     *
     * @param boolean $presentationaccueil
     * @return Articles
     */
    public function setPresentationaccueil($presentationaccueil)
    {
        $this->presentationaccueil = $presentationaccueil;

        return $this;
    }

    /**
     * Get presentationaccueil
     *
     * @return boolean 
     */
    public function getPresentationaccueil()
    {
        return $this->presentationaccueil;
    }

    /**
     * Set categorie
     *
     * @param \BWF\SiteBundle\Entity\Categories $categorie
     * @return Articles
     */
    public function setCategorie(\BWF\SiteBundle\Entity\Categories $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \BWF\SiteBundle\Entity\Categories 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
}

