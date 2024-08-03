<?php
namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjectRepository::class)]
#[ORM\Table(name: 'Projects')]
class Project
{
    #[ORM\Id]
    #[ORM\Column(type: 'text', unique: true)]
    private ?string $projectid = null;

    #[ORM\Column(length: 200)]
    private ?string $projectname = null;

    #[ORM\Column(length: 500)]
    private ?string $projectlocation = null;

    #[ORM\Column(length: 50)]
    #[ORM\Check(constraint: "projectstage IN ('Concept', 'Design & Documentation', 'Pre-Construction', 'Construction')")]
    private ?string $projectstage = null;

    #[ORM\Column(length: 50)]
    private ?string $projectcategory = null;

    #[ORM\Column(length: 200, nullable: true)]
    private ?string $othercategory = null;

    #[ORM\Column(type: 'date')]
    private ?\DateTimeInterface $constructionstartdate = null;

    #[ORM\Column(type: 'text')]
    private ?string $projectdetails = null;

    #[ORM\Column(type: 'text')]
    private ?string $projectcreatorid = null;

    // Getters and setters...

    public function getProjectid(): ?string
    {
        return $this->projectid;
    }

    public function setProjectid(?string $projectid): self
    {
        $this->projectid = $projectid;
        return $this;
    }

    public function getProjectname(): ?string
    {
        return $this->projectname;
    }

    public function setProjectname(?string $projectname): self
    {
        $this->projectname = $projectname;
        return $this;
    }

    public function getProjectlocation(): ?string
    {
        return $this->projectlocation;
    }

    public function setProjectlocation(?string $projectlocation): self
    {
        $this->projectlocation = $projectlocation;
        return $this;
    }

    public function getProjectstage(): ?string
    {
        return $this->projectstage;
    }

    public function setProjectstage(?string $projectstage): self
    {
        $this->projectstage = $projectstage;
        return $this;
    }

    public function getProjectcategory(): ?string
    {
        return $this->projectcategory;
    }

    public function setProjectcategory(?string $projectcategory): self
    {
        $this->projectcategory = $projectcategory;
        return $this;
    }

    public function getOthercategory(): ?string
    {
        return $this->othercategory;
    }

    public function setOthercategory(?string $othercategory): self
    {
        $this->othercategory = $othercategory;
        return $this;
    }

    public function getConstructionstartdate(): ?\DateTimeInterface
    {
        return $this->constructionstartdate;
    }

    public function setConstructionstartdate(?\DateTimeInterface $constructionstartdate): self
    {
        $this->constructionstartdate = $constructionstartdate;
        return $this;
    }

    public function getProjectdetails(): ?string
    {
        return $this->projectdetails;
    }

    public function setProjectdetails(?string $projectdetails): self
    {
        $this->projectdetails = $projectdetails;
        return $this;
    }

    public function getProjectcreatorid(): ?string
    {
        return $this->projectcreatorid;
    }

    public function setProjectcreatorid(?string $projectcreatorid): self
    {
        $this->projectcreatorid = $projectcreatorid;
        return $this;
    }
}