<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PointsActivity
 *
 * @ORM\Table(name="points_activity", uniqueConstraints={@ORM\UniqueConstraint(name="points_activity_reference_unique", columns={"reference"})})
 * @ORM\Entity
 */
class PointsActivity
{
    /**
     * @var int
     *
     * @ORM\Column(name="reference", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="points_activity_reference_seq", allocationSize=1, initialValue=1)
     */
    private $reference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="activity", type="text", nullable=true)
     */
    private $activity;

    /**
     * @var int|null
     *
     * @ORM\Column(name="points", type="bigint", nullable=true)
     */
    private $points;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="effective_date", type="datetime", nullable=true, options={"comment"="UTC"})
     */
    private $effectiveDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="membership_reference", type="bigint", nullable=true)
     */
    private $membershipReference;


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
     * Set activity.
     *
     * @param string|null $activity
     *
     * @return PointsActivity
     */
    public function setActivity($activity = null)
    {
        $this->activity = $activity;

        return $this;
    }

    /**
     * Get activity.
     *
     * @return string|null
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Set points.
     *
     * @param int|null $points
     *
     * @return PointsActivity
     */
    public function setPoints($points = null)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points.
     *
     * @return int|null
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set effectiveDate.
     *
     * @param \DateTime|null $effectiveDate
     *
     * @return PointsActivity
     */
    public function setEffectiveDate($effectiveDate = null)
    {
        $this->effectiveDate = $effectiveDate;

        return $this;
    }

    /**
     * Get effectiveDate.
     *
     * @return \DateTime|null
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * Set membershipReference.
     *
     * @param int|null $membershipReference
     *
     * @return PointsActivity
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
}
