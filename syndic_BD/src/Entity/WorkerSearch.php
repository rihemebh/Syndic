<?php

namespace App\Entity;

use App\Repository\SearchRepository;



class WorkerSearch
{
    /**
     * @var string|null
     */
    private $Name;
    /**
     * @var int|null
     */

    private $cin;
    /**
     * @var String|null
     */

    private $job;

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }

    /**
     * @param String|null $Name
     */
    public function setName(string $Name): void
    {
        $this->Name = $Name;
    }

    /**
     * @return int|null
     */
    public function getCin(): ?int
    {
        return $this->cin;
    }

    /**
     * @param int|null $cin
     */
    public function setCin(int $cin): void
    {
        $this->cin = $cin;
    }

    /**
     * @return String|null
     */
    public function getJob(): ?string
    {
        return $this->job;
    }

    /**
     * @param String|null $job
     */
    public function setJob(string $job): void
    {
        $this->job = $job;
    }





}
