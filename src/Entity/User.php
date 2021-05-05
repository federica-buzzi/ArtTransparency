<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User
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
    private $gender;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ethnicity;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $degrees;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $otherSourcesIncome;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $yearsExperience;

    /**
     * @ORM\OneToMany(targetEntity=Job::class, mappedBy="user")
     */
    private $jobs;

    // crée par nous mêmes, ainsi que le constructeur (vérifiez!)
    public function hydrate(array $init)
    {
        foreach ($init as $key => $value) {
            $method = "set" . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    // constructeur modifié pour faire appel à hydrate
    public function __construct($arrayInit = [])
    {
        $this->jobs = new ArrayCollection();
        // appel au hydrate
        $this->hydrate($arrayInit);
    }


    public function getId(): ?int
    {
        return $this->id;
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

    public function getDegrees(): ?string
    {
        return $this->degrees;
    }

    public function setDegrees(?string $degrees): self
    {
        $this->degrees = $degrees;

        return $this;
    }

    public function getOtherSourcesIncome(): ?string
    {
        return $this->otherSourcesIncome;
    }

    public function setOtherSourcesIncome(?string $otherSourcesIncome): self
    {
        $this->otherSourcesIncome = $otherSourcesIncome;

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

    /**
     * @return Collection|Job[]
     */
    public function getJobs(): Collection
    {
        return $this->jobs;
    }

    public function addJob(Job $job): self
    {
        if (!$this->jobs->contains($job)) {
            $this->jobs[] = $job;
            $job->setUser($this);
        }

        return $this;
    }

    public function removeJob(Job $job): self
    {
        if ($this->jobs->removeElement($job)) {
            // set the owning side to null (unless already changed)
            if ($job->getUser() === $this) {
                $job->setUser(null);
            }
        }

        return $this;
    }
}
