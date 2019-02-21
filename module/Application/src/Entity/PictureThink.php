<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PictureThink
 *
 * @ORM\Table(name="picture_think", uniqueConstraints={@ORM\UniqueConstraint(name="picture_think_reference_unique", columns={"reference"})})
 * @ORM\Entity
 */
class PictureThink
{
    /**
     * @var int
     *
     * @ORM\Column(name="reference", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="picture_think_reference_seq", allocationSize=1, initialValue=1)
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
     * @var string|null
     *
     * @ORM\Column(name="think", type="text", nullable=true)
     */
    private $think;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="think_date", type="datetime", nullable=true, options={"comment"="UTC"})
     */
    private $thinkDate;


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
     * @return PictureThink
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
     * @return PictureThink
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
     * Set think.
     *
     * @param string|null $think
     *
     * @return PictureThink
     */
    public function setThink($think = null)
    {
        $this->think = $think;

        return $this;
    }

    /**
     * Get think.
     *
     * @return string|null
     */
    public function getThink()
    {
        return $this->think;
    }

    /**
     * Set thinkDate.
     *
     * @param \DateTime|null $thinkDate
     *
     * @return PictureThink
     */
    public function setThinkDate($thinkDate = null)
    {
        $this->thinkDate = $thinkDate;

        return $this;
    }

    /**
     * Get thinkDate.
     *
     * @return \DateTime|null
     */
    public function getThinkDate()
    {
        return $this->thinkDate;
    }
}
