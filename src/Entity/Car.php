<?php

namespace App\Entity;

use App\Repository\CarRepository;
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
     * @ORM\Column(type="integer")
     */
    private $Car_ID;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Car_name;

    /**
     * @ORM\Column(type="integer")
     */
    private $Car_price;

    /**
     * @ORM\ManyToOne(targetEntity=Supplier::class, inversedBy="cars")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Supplier;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCarID(): ?int
    {
        return $this->Car_ID;
    }

    public function setCarID(int $Car_ID): self
    {
        $this->Car_ID = $Car_ID;

        return $this;
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

    public function getCarPrice(): ?int
    {
        return $this->Car_price;
    }

    public function setCarPrice(int $Car_price): self
    {
        $this->Car_price = $Car_price;

        return $this;
    }

    public function getSupplier(): ?Supplier
    {
        return $this->Supplier;
    }

    public function setSupplier(?Supplier $Supplier): self
    {
        $this->Supplier = $Supplier;

        return $this;
    }
}
