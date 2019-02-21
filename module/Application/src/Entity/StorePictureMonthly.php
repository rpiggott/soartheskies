<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StorePictureMonthly
 *
 * @ORM\Table(name="store_picture_monthly", uniqueConstraints={@ORM\UniqueConstraint(name="store_picture_monthly_reference_unique", columns={"reference"})})
 * @ORM\Entity
 */
class StorePictureMonthly
{
    /**
     * @var int
     *
     * @ORM\Column(name="reference", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="store_picture_monthly_reference_seq", allocationSize=1, initialValue=1)
     */
    private $reference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="text", nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tenure", type="bigint", nullable=true)
     */
    private $tenure;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="available_date", type="datetime", nullable=true)
     */
    private $availableDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="available_membership_reference", type="bigint", nullable=true)
     */
    private $availableMembershipReference;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="discontinued_date", type="datetime", nullable=true)
     */
    private $discontinuedDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="discontinued_membership_reference", type="bigint", nullable=true)
     */
    private $discontinuedMembershipReference;


    /**
     * Get reference.
     *
     * @return int
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set name.
     *
     * @param string|null $name
     *
     * @return StorePictureMonthly
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description.
     *
     * @param string|null $description
     *
     * @return StorePictureMonthly
     */
    public function setDescription($description = null)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set tenure.
     *
     * @param int|null $tenure
     *
     * @return StorePictureMonthly
     */
    public function setTenure($tenure = null)
    {
        $this->tenure = $tenure;

        return $this;
    }

    /**
     * Get tenure.
     *
     * @return int|null
     */
    public function getTenure()
    {
        return $this->tenure;
    }

    /**
     * Set availableDate.
     *
     * @param \DateTime|null $availableDate
     *
     * @return StorePictureMonthly
     */
    public function setAvailableDate($availableDate = null)
    {
        $this->availableDate = $availableDate;

        return $this;
    }

    /**
     * Get availableDate.
     *
     * @return \DateTime|null
     */
    public function getAvailableDate()
    {
        return $this->availableDate;
    }

    /**
     * Set availableMembershipReference.
     *
     * @param int|null $availableMembershipReference
     *
     * @return StorePictureMonthly
     */
    public function setAvailableMembershipReference($availableMembershipReference = null)
    {
        $this->availableMembershipReference = $availableMembershipReference;

        return $this;
    }

    /**
     * Get availableMembershipReference.
     *
     * @return int|null
     */
    public function getAvailableMembershipReference()
    {
        return $this->availableMembershipReference;
    }

    /**
     * Set discontinuedDate.
     *
     * @param \DateTime|null $discontinuedDate
     *
     * @return StorePictureMonthly
     */
    public function setDiscontinuedDate($discontinuedDate = null)
    {
        $this->discontinuedDate = $discontinuedDate;

        return $this;
    }

    /**
     * Get discontinuedDate.
     *
     * @return \DateTime|null
     */
    public function getDiscontinuedDate()
    {
        return $this->discontinuedDate;
    }

    /**
     * Set discontinuedMembershipReference.
     *
     * @param int|null $discontinuedMembershipReference
     *
     * @return StorePictureMonthly
     */
    public function setDiscontinuedMembershipReference($discontinuedMembershipReference = null)
    {
        $this->discontinuedMembershipReference = $discontinuedMembershipReference;

        return $this;
    }

    /**
     * Get discontinuedMembershipReference.
     *
     * @return int|null
     */
    public function getDiscontinuedMembershipReference()
    {
        return $this->discontinuedMembershipReference;
    }
}
