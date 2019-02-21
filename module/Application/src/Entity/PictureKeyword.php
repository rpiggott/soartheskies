<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PictureKeyword
 *
 * @ORM\Table(name="picture_keyword", uniqueConstraints={@ORM\UniqueConstraint(name="picture_keyword_reference_unique", columns={"reference"})})
 * @ORM\Entity
 */
class PictureKeyword
{
    /**
     * @var int
     *
     * @ORM\Column(name="reference", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="picture_keyword_reference_seq", allocationSize=1, initialValue=1)
     */
    private $reference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="keyword", type="text", nullable=true)
     */
    private $keyword;

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
     * Set keyword.
     *
     * @param string|null $keyword
     *
     * @return PictureKeyword
     */
    public function setKeyword($keyword = null)
    {
        $this->keyword = $keyword;

        return $this;
    }

    /**
     * Get keyword.
     *
     * @return string|null
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Set addedDate.
     *
     * @param \DateTime|null $addedDate
     *
     * @return PictureKeyword
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
     * @return PictureKeyword
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
