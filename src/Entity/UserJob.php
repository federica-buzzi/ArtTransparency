<?php

namespace App\Entity;

use App\Repository\UserJobRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserJobRepository::class)
 */
class UserJob
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
    private $role;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $startingSalary;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $contractStartingSalary;

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
    private $contractEndingSalary;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $yearEndingSalary;

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
    private $gender;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ethnicity;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $degreesRequired;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getContractStartingSalary(): ?string
    {
        return $this->contractStartingSalary;
    }

    public function setContractStartingSalary(?string $contractStartingSalary): self
    {
        $this->contractStartingSalary = $contractStartingSalary;

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

    public function getContractEndingSalary(): ?string
    {
        return $this->contractEndingSalary;
    }

    public function setContractEndingSalary(?string $contractEndingSalary): self
    {
        $this->contractEndingSalary = $contractEndingSalary;

        return $this;
    }

    public function getYearEndingSalary(): ?int
    {
        return $this->yearEndingSalary;
    }

    public function setYearEndingSalary(?int $yearEndingSalary): self
    {
        $this->yearEndingSalary = $yearEndingSalary;

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

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getEthnicity(): ?string
    {
        return $this->ethnicity;
    }

    public function setEthnicity(?string $ethnicity): self
    {
        $this->ethnicity = $ethnicity;

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
}
