<?php

declare(strict_types=1);

namespace Tbbc\MoneyBundle\Entity;

/**
 * Class DoctrineStorageRatio.
 */
class DoctrineStorageRatio
{
    private mixed $id = null;

    public function __construct(private ?string $currencyCode = null, private ?float $ratio = null)
    {
    }

    public function getId(): mixed
    {
        return $this->id;
    }

    public function setCurrencyCode(string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    public function setRatio(float $ratio): self
    {
        $this->ratio = $ratio;

        return $this;
    }

    public function getRatio(): ?float
    {
        return $this->ratio;
    }
}
