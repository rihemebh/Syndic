<?php

namespace App\Entity;

use App\Repository\WorkerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WorkerRepository::class)
 */
class Worker
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
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $age;

    /**
     * @ORM\Column(type="date")
     */
    private $birthday;

    /**
     * @ORM\Column(type="integer")
     */
    private $cin;

    /**
     * @ORM\Column(type="integer")
     */
    private $num_tel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adr;

    /**
     * @ORM\Column(type="date")
     */
    private $date_recrut;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contract_type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $job;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getBirthday(): ?\DateTimeInterface
    {
        return $this->birthday;
    }

    public function setBirthday(\DateTimeInterface $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    public function getCin(): ?int
    {
        return $this->cin;
    }

    public function setCin(int $cin): self
    {
        $this->cin = $cin;

        return $this;
    }

    public function getNumTel(): ?int
    {
        return $this->num_tel;
    }

    public function setNumTel(int $num_tel): self
    {
        $this->num_tel = $num_tel;

        return $this;
    }

    public function getAdr(): ?string
    {
        return $this->adr;
    }

    public function setAdr(string $adr): self
    {
        $this->adr = $adr;

        return $this;
    }

    public function getDateRecrut(): ?\DateTimeInterface
    {
        return $this->date_recrut;
    }

    public function setDateRecrut(\DateTimeInterface $date_recrut): self
    {
        $this->date_recrut = $date_recrut;

        return $this;
    }

    public function getContractType(): ?string
    {
        return $this->contract_type;
    }

    public function setContractType(string $contract_type): self
    {
        $this->contract_type = $contract_type;

        return $this;
    }

    public function getJob(): ?string
    {
        return $this->job;
    }

    public function setJob(string $job): self
    {
        $this->job = $job;

        return $this;
    }
}
