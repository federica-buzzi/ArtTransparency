<?php

namespace App\Entity;

use App\Repository\JobRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=JobRepository::class)
 */
class Job
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $country;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $role;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $startingSalary;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $yearStartingSalary;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $endingSalary;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $typeContract;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $yearsExperience;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $degreesRequired;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="jobs")
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(?string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getStartingSalary(): ?float
    {
        return $this->startingSalary;
    }

    public function setStartingSalary(?float $startingSalary): self
    {
        $this->startingSalary = $startingSalary;

        return $this;
    }

    public function getYearStartingSalary(): ?int
    {
        return $this->yearStartingSalary;
    }

    public function setYearStartingSalary(?int $yearStartingSalary): self
    {
        $this->yearStartingSalary = $yearStartingSalary;

        return $this;
    }

    public function getEndingSalary(): ?float
    {
        return $this->endingSalary;
    }

    public function setEndingSalary(?float $endingSalary): self
    {
        $this->endingSalary = $endingSalary;

        return $this;
    }

    public function getTypeContract(): ?string
    {
        return $this->typeContract;
    }

    public function setTypeContract(?string $typeContract): self
    {
        $this->typeContract = $typeContract;

        return $this;
    }

    public function getYearsExperience(): ?int
    {
        return $this->yearsExperience;
    }

    public function setYearsExperience(?int $yearsExperience): self
    {
        $this->yearsExperience = $yearsExperience;

        return $this;
    }

    public function getDegreesRequired(): ?string
    {
        return $this->degreesRequired;
    }

    public function setDegreesRequired(?string $degreesRequired): self
    {
        $this->degreesRequired = $degreesRequired;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
