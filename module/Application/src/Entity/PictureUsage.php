<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PictureUsage
 *
 * @ORM\Table(name="picture_usage", uniqueConstraints={@ORM\UniqueConstraint(name="picture_usage_reference_unique", columns={"reference"})})
 * @ORM\Entity
 */
class PictureUsage
{
    /**
     * @var int
     *
     * @ORM\Column(name="reference", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="picture_usage_reference_seq", allocationSize=1, initialValue=1)
     */
    private $reference;

    /**
     * @var int|null
     *
     * @ORM\Column(name="picture_reference", type="bigint", nullable=true)
     */
    private $pictureReference;

    /**
     * @var int|null
     *
     * @ORM\Column(name="membership_reference", type="bigint", nullable=true)
     */
    private $membershipReference;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="usage_date", type="datetime", nullable=true, options={"comment"="UTC"})
     */
    private $usageDate;


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
     * Set pictureReference.
     *
     * @param int|null $pictureReference
     *
     * @return PictureUsage
     */
    public function setPictureReference($pictureReference = null)
    {
        $this->pictureReference = $pictureReference;

        return $this;
    }

    /**
     * Get pictureReference.
     *
     * @return int|null
     */
    public function getPictureReference()
    {
        return $this->pictureReference;
    }

    /**
     * Set membershipReference.
     *
     * @param int|null $membershipReference
     *
     * @return PictureUsage
     */
    public function setMembershipReference($membershipReference = null)
    {
        $this->membershipReference = $membershipReference;

        return $this;
    }

    /**
     * Get membershipReference.
     *
     * @return int|null
     */
    public function getMembershipReference()
    {
        return $this->membershipReference;
    }

    /**
     * Set usageDate.
     *
     * @param \DateTime|null $usageDate
     *
     * @return PictureUsage
     */
    public function setUsageDate($usageDate = null)
    {
        $this->usageDate = $usageDate;

        return $this;
    }

    /**
     * Get usageDate.
     *
     * @return \DateTime|null
     */
    public function getUsageDate()
    {
        return $this->usageDate;
    }
}
