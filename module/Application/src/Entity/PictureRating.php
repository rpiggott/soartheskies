<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PictureRating
 *
 * @ORM\Table(name="picture_rating", uniqueConstraints={@ORM\UniqueConstraint(name="picture_rating_reference_unique", columns={"reference"})})
 * @ORM\Entity
 */
class PictureRating
{
    /**
     * @var int
     *
     * @ORM\Column(name="reference", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="picture_rating_reference_seq", allocationSize=1, initialValue=1)
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
     * @var int|null
     *
     * @ORM\Column(name="rating", type="bigint", nullable=true)
     */
    private $rating;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="rating_date", type="datetime", nullable=true, options={"comment"="UTC"})
     */
    private $ratingDate;


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
     * @return PictureRating
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
     * @return PictureRating
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
     * Set rating.
     *
     * @param int|null $rating
     *
     * @return PictureRating
     */
    public function setRating($rating = null)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating.
     *
     * @return int|null
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set ratingDate.
     *
     * @param \DateTime|null $ratingDate
     *
     * @return PictureRating
     */
    public function setRatingDate($ratingDate = null)
    {
        $this->ratingDate = $ratingDate;

        return $this;
    }

    /**
     * Get ratingDate.
     *
     * @return \DateTime|null
     */
    public function getRatingDate()
    {
        return $this->ratingDate;
    }
}
