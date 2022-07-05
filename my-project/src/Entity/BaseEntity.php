<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

abstract class BaseEntity
{
    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="created_date", type="datetime", nullable=true)
     */
    private $createdDate;

    /**
     * @var DateTime|null
     * @ORM\Column(name="modified_date", type="datetime", nullable=true)
     */
    private $modifiedDate;

    /**
     * @var bool|null
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = false;

    /**
     * @return DateTime|null
     */
    public function getCreatedDate(): ?DateTime
    {
        return $this->createdDate;
    }

    /**
     * @param DateTime|null $createdDate
     */
    public function setCreatedDate(?DateTime $createdDate): void
    {
        $this->createdDate = $createdDate;
    }

    /**
     * @return DateTime|null
     */
    public function getModifiedDate(): ?DateTime
    {
        return $this->modifiedDate;
    }

    /**
     * @param DateTime|null $modifiedDate
     */
    public function setModifiedDate(?DateTime $modifiedDate): void
    {
        $this->modifiedDate = $modifiedDate;
    }

    /**
     * @return bool|null
     */
    public function getDeleted(): ?bool
    {
        return $this->deleted;
    }

    /**
     * @param bool|null $deleted
     */
    public function setDeleted(?bool $deleted): void
    {
        $this->deleted = $deleted;
    }
}