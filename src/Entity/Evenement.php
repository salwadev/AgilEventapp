<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EvenementRepository::class)
 */
class Evenement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;



    /**
     * @ORM\ManyToOne(targetEntity=Category::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @ORM\ManyToOne(targetEntity=Controle::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $controle;

    /**
     * @ORM\ManyToOne(targetEntity=Concerne::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $concerne;

    /**
     * @ORM\ManyToOne(targetEntity=Frequence::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $frequence;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date;
    /**
    * @ORM\ManyToOne(targetEntity=Semaine::class)
    */
    private $semaine;

   /**
    * @ORM\ManyToOne(targetEntity=Jour::class)
    */
    private $jour;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getSemaine(): ?Semaine
       {
           return $this->semaine;
       }

       public function setSemaine(?Semaine $semaine): self
       {
           $this->semaine = $semaine;

           return $this;
       }

       public function getJour(): ?Jour
       {
           return $this->jour;
       }

       public function setJour(?Jour $jour): self
       {
           $this->jour = $jour;

           return $this;
       }
    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getControle(): ?Controle
    {
        return $this->controle;
    }

    public function setControle(?Controle $controle): self
    {
        $this->controle = $controle;

        return $this;
    }

    public function getConcerne(): ?Concerne
    {
        return $this->concerne;
    }

    public function setConcerne(?Concerne $concerne): self
    {
        $this->concerne = $concerne;

        return $this;
    }

    public function getFrequence(): ?Frequence
    {
        return $this->frequence;
    }

    public function setFrequence(?Frequence $frequence): self
    {
        $this->frequence = $frequence;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }
}
