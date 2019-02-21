<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PictureFeel
 *
 * @ORM\Table(name="picture_feel", uniqueConstraints={@ORM\UniqueConstraint(name="picture_feel_reference_unique", columns={"reference"})})
 * @ORM\Entity
 */
class PictureFeel
{
    /**
     * @var int
     *
     * @ORM\Column(name="reference", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="picture_feel_reference_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="feel", type="text", nullable=true)
     */
    private $feel;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="feel_date", type="datetime", nullable=true, options={"default"="now()","comment"="UTC"})
     */
    private $feelDate = 'now()';


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
     * @return PictureFeel
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
     * @return PictureFeel
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
     * Set feel.
     *
     * @param string|null $feel
     *
     * @return PictureFeel
     */
    public function setFeel($feel = null)
    {
        $this->feel = $feel;

        return $this;
    }

    /**
     * Get feel.
     *
     * @return string|null
     */
    public function getFeel()
    {
        return $this->feel;
    }

    /**
     * Set feelDate.
     *
     * @param \DateTime|null $feelDate
     *
     * @return PictureFeel
     */
    public function setFeelDate($feelDate = null)
    {
        $this->feelDate = $feelDate;

        return $this;
    }

    /**
     * Get feelDate.
     *
     * @return \DateTime|null
     */
    public function getFeelDate()
    {
        return $this->feelDate;
    }
}
