<?php

namespace App\Entity;

use App\Repository\SupplierRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SupplierRepository::class)
 */
class Supplier
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
    private $Supplier_name;

    /**
     * @ORM\OneToMany(targetEntity=Car::class, mappedBy="Supplier_ID")
     */
    private $ID;

    public function __construct()
    {
        $this->ID = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSupplierName(): ?string
    {
        return $this->Supplier_name;
    }

    public function setSupplierName(string $Supplier_name): self
    {
        $this->Supplier_name = $Supplier_name;

        return $this;
    }

    public function addID(Car $iD): self
    {
        if (!$this->ID->contains($iD)) {
            $this->ID[] = $iD;
            $iD->setSupplierID($this);
        }

        return $this;
    }

    public function removeID(Car $iD): self
    {
        if ($this->ID->removeElement($iD)) {
            // set the owning side to null (unless already changed)
            if ($iD->getSupplierID() === $this) {
                $iD->setSupplierID(null);
            }
        }

        return $this;
    }
}
