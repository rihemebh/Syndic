<?php

namespace App\Entity;

use App\Repository\HouseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HouseRepository::class)
 */
class House
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
    private $appart;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $immeuble;

    /**
     * @ORM\Column(type="date")
     */
    private $date_achat;

    /**
     * @ORM\Column(type="float")
     */
    private $dette;

    /**
     * @ORM\Column(type="float")
     */
    private $price1;

    /**
     * @ORM\Column(type="float")
     */
    private $price2;

    /**
     * @ORM\Column(type="float")
     */
    private $price3;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAppart(): ?string
    {
        return $this->appart;
    }

    public function setAppart(string $appart): self
    {
        $this->appart = $appart;

        return $this;
    }

    public function getImmeuble(): ?string
    {
        return $this->immeuble;
    }

    public function setImmeuble(string $immeuble): self
    {
        $this->immeuble = $immeuble;

        return $this;
    }

    public function getDateAchat(): ?\DateTimeInterface
    {
        return $this->date_achat;
    }

    public function setDateAchat(\DateTimeInterface $date_achat): self
    {
        $this->date_achat = $date_achat;

        return $this;
    }

    public function getDette(): ?float
    {
        return $this->dette;
    }

    public function setDette(float $dette): self
    {
        $this->dette = $dette;

        return $this;
    }

    public function getPrice1(): ?float
    {
        return $this->price1;
    }

    public function setPrice1(float $price1): self
    {
        $this->price1 = $price1;

        return $this;
    }

    public function getPrice2(): ?float
    {
        return $this->price2;
    }

    public function setPrice2(float $price2): self
    {
        $this->price2 = $price2;

        return $this;
    }

    public function getPrice3(): ?float
    {
        return $this->price3;
    }

    public function setPrice3(float $price3): self
    {
        $this->price3 = $price3;

        return $this;
    }
}
