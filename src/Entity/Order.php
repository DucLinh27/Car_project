<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrderRepository::class)
 * @ORM\Table(name="`order`")
 */
class Order
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $Date_order;

    /**
     * @ORM\ManyToOne(targetEntity=Car::class, inversedBy="ID")
     */
    private $Car_ID;

    /**
     * @ORM\ManyToOne(targetEntity=Customer::class, inversedBy="ID")
     */
    private $Customer_ID;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateOrder(): ?\DateTimeInterface
    {
        return $this->Date_order;
    }

    public function setDateOrder(\DateTimeInterface $Date_order): self
    {
        $this->Date_order = $Date_order;

        return $this;
    }

    public function getCarID(): ?Car
    {
        return $this->Car_ID;
    }

    public function setCarID(?Car $Car_ID): self
    {
        $this->Car_ID = $Car_ID;

        return $this;
    }

    public function getCustomerID(): ?Customer
    {
        return $this->Customer_ID;
    }

    public function setCustomerID(?Customer $Customer_ID): self
    {
        $this->Customer_ID = $Customer_ID;

        return $this;
    }
}
