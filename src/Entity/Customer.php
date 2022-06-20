<?php

namespace App\Entity;

use App\Repository\CustomerRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @ORM\Column(type="string", length=255)
     */
    private $Customer_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Customer_mail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Customer_phone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Customer_address;

    /**
     * @ORM\OneToMany(targetEntity=Order::class, mappedBy="Customer_ID")
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

    public function getCustomerName(): ?string
    {
        return $this->Customer_name;
    }

    public function setCustomerName(string $Customer_name): self
    {
        $this->Customer_name = $Customer_name;

        return $this;
    }

    public function getCustomerMail(): ?string
    {
        return $this->Customer_mail;
    }

    public function setCustomerMail(string $Customer_mail): self
    {
        $this->Customer_mail = $Customer_mail;

        return $this;
    }

    public function getCustomerPhone(): ?string
    {
        return $this->Customer_phone;
    }

    public function setCustomerPhone(string $Customer_phone): self
    {
        $this->Customer_phone = $Customer_phone;

        return $this;
    }

    public function getCustomerAddress(): ?string
    {
        return $this->Customer_address;
    }

    public function setCustomerAddress(string $Customer_address): self
    {
        $this->Customer_address = $Customer_address;

        return $this;
    }

    public function addID(Order $iD): self
    {
        if (!$this->ID->contains($iD)) {
            $this->ID[] = $iD;
            $iD->setCustomerID($this);
        }

        return $this;
    }

    public function removeID(Order $iD): self
    {
        if ($this->ID->removeElement($iD)) {
            // set the owning side to null (unless already changed)
            if ($iD->getCustomerID() === $this) {
                $iD->setCustomerID(null);
            }
        }

        return $this;
    }
}
