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
     * @ORM\Column(type="integer")
     */
    private $Order_ID;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Date_Order;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrderID(): ?int
    {
        return $this->Order_ID;
    }

    public function setOrderID(int $Order_ID): self
    {
        $this->Order_ID = $Order_ID;

        return $this;
    }

    public function getDateOrder(): ?\DateTimeInterface
    {
        return $this->Date_Order;
    }

    public function setDateOrder(\DateTimeInterface $Date_Order): self
    {
        $this->Date_Order = $Date_Order;

        return $this;
    }
}
