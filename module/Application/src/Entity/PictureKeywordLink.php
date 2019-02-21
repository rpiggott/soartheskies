<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PictureKeywordLink
 *
 * @ORM\Table(name="picture_keyword_link", uniqueConstraints={@ORM\UniqueConstraint(name="picture_keyword_link_reference_unique", columns={"reference"})})
 * @ORM\Entity
 */
class PictureKeywordLink
{
    /**
     * @var int
     *
     * @ORM\Column(name="reference", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="picture_keyword_link_reference_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="picture_keyword_reference", type="bigint", nullable=true)
     */
    private $pictureKeywordReference;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_date", type="datetime", nullable=true, options={"comment"="UTC"})
     */
    private $createdDate;

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
     * Set pictureReference.
     *
     * @param int|null $pictureReference
     *
     * @return PictureKeywordLink
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
     * Set pictureKeywordReference.
     *
     * @param int|null $pictureKeywordReference
     *
     * @return PictureKeywordLink
     */
    public function setPictureKeywordReference($pictureKeywordReference = null)
    {
        $this->pictureKeywordReference = $pictureKeywordReference;

        return $this;
    }

    /**
     * Get pictureKeywordReference.
     *
     * @return int|null
     */
    public function getPictureKeywordReference()
    {
        return $this->pictureKeywordReference;
    }

    /**
     * Set createdDate.
     *
     * @param \DateTime|null $createdDate
     *
     * @return PictureKeywordLink
     */
    public function setCreatedDate($createdDate = null)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get createdDate.
     *
     * @return \DateTime|null
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set membershipReference.
     *
     * @param int|null $membershipReference
     *
     * @return PictureKeywordLink
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
