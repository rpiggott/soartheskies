<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PictureProfile
 *
 * @ORM\Table(name="picture_profile", uniqueConstraints={@ORM\UniqueConstraint(name="picture_profile_reference_unique", columns={"reference"})})
 * @ORM\Entity
 */
class PictureProfile
{
    /**
     * @var int
     *
     * @ORM\Column(name="reference", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="picture_profile_reference_seq", allocationSize=1, initialValue=1)
     */
    private $reference;

    /**
     * @var int|null
     *
     * @ORM\Column(name="image_height", type="bigint", nullable=true)
     */
    private $imageHeight;

    /**
     * @var int|null
     *
     * @ORM\Column(name="image_width", type="bigint", nullable=true)
     */
    private $imageWidth;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="added_date", type="datetime", nullable=true, options={"default"="now()","comment"="UTC"})
     */
    private $addedDate = 'now()';

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
     * Set imageHeight.
     *
     * @param int|null $imageHeight
     *
     * @return PictureProfile
     */
    public function setImageHeight($imageHeight = null)
    {
        $this->imageHeight = $imageHeight;

        return $this;
    }

    /**
     * Get imageHeight.
     *
     * @return int|null
     */
    public function getImageHeight()
    {
        return $this->imageHeight;
    }

    /**
     * Set imageWidth.
     *
     * @param int|null $imageWidth
     *
     * @return PictureProfile
     */
    public function setImageWidth($imageWidth = null)
    {
        $this->imageWidth = $imageWidth;

        return $this;
    }

    /**
     * Get imageWidth.
     *
     * @return int|null
     */
    public function getImageWidth()
    {
        return $this->imageWidth;
    }

    /**
     * Set addedDate.
     *
     * @param \DateTime|null $addedDate
     *
     * @return PictureProfile
     */
    public function setAddedDate($addedDate = null)
    {
        $this->addedDate = $addedDate;

        return $this;
    }

    /**
     * Get addedDate.
     *
     * @return \DateTime|null
     */
    public function getAddedDate()
    {
        return $this->addedDate;
    }

    /**
     * Set membershipReference.
     *
     * @param int|null $membershipReference
     *
     * @return PictureProfile
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
