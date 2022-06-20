<?php

namespace App\Entity;

use App\Repository\CarRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CarRepository::class)
 */
class Car
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
    private $Car_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Car_price;

    /**
     * @ORM\ManyToOne(targetEntity=Supplier::class, inversedBy="ID")
     */
    private $Supplier_ID;

    /**
     * @ORM\OneToMany(targetEntity=Order::class, mappedBy="Car_ID")
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

    public function getCarName(): ?string
    {
        return $this->Car_name;
    }

    public function setCarName(string $Car_name): self
    {
        $this->Car_name = $Car_name;

        return $this;
    }

    public function getCarPrice(): ?string
    {
        return $this->Car_price;
    }

    public function setCarPrice(string $Car_price): self
    {
        $this->Car_price = $Car_price;

        return $this;
    }

    public function getSupplierID(): ?Supplier
    {
        return $this->Supplier_ID;
    }

    public function setSupplierID(?Supplier $Supplier_ID): self
    {
        $this->Supplier_ID = $Supplier_ID;

        return $this;
    }

    public function addID(Order $iD): self
    {
        if (!$this->ID->contains($iD)) {
            $this->ID[] = $iD;
            $iD->setCarID($this);
        }

        return $this;
    }

    public function removeID(Order $iD): self
    {
        if ($this->ID->removeElement($iD)) {
            // set the owning side to null (unless already changed)
            if ($iD->getCarID() === $this) {
                $iD->setCarID(null);
            }
        }

        return $this;
    }
}
