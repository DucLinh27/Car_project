<?php

namespace App\Entity;

use App\Repository\CustomerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CustomerRepository::class)
 */
class Customer
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
    private $Customer_ID;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Customer_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Customer_email;

    /**
     * @ORM\Column(type="integer")
     */
    private $Phone_number;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Address;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCustomerID(): ?int
    {
        return $this->Customer_ID;
    }

    public function setCustomerID(int $Customer_ID): self
    {
        $this->Customer_ID = $Customer_ID;

        return $this;
    }

    public function getCustomerName(): ?string
    {
        return $this->Customer_name;
    }

    public function setCustomerName(string $Customer_name): self
    {
        $this->Customer_name = $Customer_name;

        return $this;
    }

    public function getCustomerEmail(): ?string
    {
        return $this->Customer_email;
    }

    public function setCustomerEmail(string $Customer_email): self
    {
        $this->Customer_email = $Customer_email;

        return $this;
    }

    public function getPhoneNumber(): ?int
    {
        return $this->Phone_number;
    }

    public function setPhoneNumber(int $Phone_number): self
    {
        $this->Phone_number = $Phone_number;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->Address;
    }

    public function setAddress(string $Address): self
    {
        $this->Address = $Address;

        return $this;
    }
}
