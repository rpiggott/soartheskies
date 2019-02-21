<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MembershipPoints
 *
 * @ORM\Table(name="membership_points", uniqueConstraints={@ORM\UniqueConstraint(name="membership_points_reference_unique", columns={"reference"})})
 * @ORM\Entity
 */
class MembershipPoints
{
    /**
     * @var int
     *
     * @ORM\Column(name="reference", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="membership_points_reference_seq", allocationSize=1, initialValue=1)
     */
    private $reference;

    /**
     * @var int|null
     *
     * @ORM\Column(name="membership_reference", type="bigint", nullable=true)
     */
    private $membershipReference;

    /**
     * @var int|null
     *
     * @ORM\Column(name="points_activity_reference", type="bigint", nullable=true)
     */
    private $pointsActivityReference;

    /**
     * @var int|null
     *
     * @ORM\Column(name="points", type="bigint", nullable=true)
     */
    private $points;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="points_date", type="datetime", nullable=true, options={"default"="now()","comment"="UTC"})
     */
    private $pointsDate = 'now()';


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
     * Set membershipReference.
     *
     * @param int|null $membershipReference
     *
     * @return MembershipPoints
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
     * Set pointsActivityReference.
     *
     * @param int|null $pointsActivityReference
     *
     * @return MembershipPoints
     */
    public function setPointsActivityReference($pointsActivityReference = null)
    {
        $this->pointsActivityReference = $pointsActivityReference;

        return $this;
    }

    /**
     * Get pointsActivityReference.
     *
     * @return int|null
     */
    public function getPointsActivityReference()
    {
        return $this->pointsActivityReference;
    }

    /**
     * Set points.
     *
     * @param int|null $points
     *
     * @return MembershipPoints
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
     * Set pointsDate.
     *
     * @param \DateTime|null $pointsDate
     *
     * @return MembershipPoints
     */
    public function setPointsDate($pointsDate = null)
    {
        $this->pointsDate = $pointsDate;

        return $this;
    }

    /**
     * Get pointsDate.
     *
     * @return \DateTime|null
     */
    public function getPointsDate()
    {
        return $this->pointsDate;
    }
}
