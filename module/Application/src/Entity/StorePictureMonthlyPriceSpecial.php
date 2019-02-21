<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StorePictureMonthlyPriceSpecial
 *
 * @ORM\Table(name="store_picture_monthly_price_special", uniqueConstraints={@ORM\UniqueConstraint(name="store_picture_monthly_price_special_reference_unique", columns={"reference"})})
 * @ORM\Entity
 */
class StorePictureMonthlyPriceSpecial
{
    /**
     * @var int
     *
     * @ORM\Column(name="reference", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="store_picture_monthly_price_special_reference_seq", allocationSize=1, initialValue=1)
     */
    private $reference;

    /**
     * @var int|null
     *
     * @ORM\Column(name="store_picture_monthly_reference", type="bigint", nullable=true)
     */
    private $storePictureMonthlyReference;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="begin_date", type="datetime", nullable=true)
     */
    private $beginDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="end_date", type="datetime", nullable=true)
     */
    private $endDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="price", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $price;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_date", type="datetime", nullable=true, options={"default"="now()"})
     */
    private $createdDate = 'now()';

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
     * Set storePictureMonthlyReference.
     *
     * @param int|null $storePictureMonthlyReference
     *
     * @return StorePictureMonthlyPriceSpecial
     */
    public function setStorePictureMonthlyReference($storePictureMonthlyReference = null)
    {
        $this->storePictureMonthlyReference = $storePictureMonthlyReference;

        return $this;
    }

    /**
     * Get storePictureMonthlyReference.
     *
     * @return int|null
     */
    public function getStorePictureMonthlyReference()
    {
        return $this->storePictureMonthlyReference;
    }

    /**
     * Set beginDate.
     *
     * @param \DateTime|null $beginDate
     *
     * @return StorePictureMonthlyPriceSpecial
     */
    public function setBeginDate($beginDate = null)
    {
        $this->beginDate = $beginDate;

        return $this;
    }

    /**
     * Get beginDate.
     *
     * @return \DateTime|null
     */
    public function getBeginDate()
    {
        return $this->beginDate;
    }

    /**
     * Set endDate.
     *
     * @param \DateTime|null $endDate
     *
     * @return StorePictureMonthlyPriceSpecial
     */
    public function setEndDate($endDate = null)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate.
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set price.
     *
     * @param string|null $price
     *
     * @return StorePictureMonthlyPriceSpecial
     */
    public function setPrice($price = null)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price.
     *
     * @return string|null
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set createdDate.
     *
     * @param \DateTime|null $createdDate
     *
     * @return StorePictureMonthlyPriceSpecial
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
     * @return StorePictureMonthlyPriceSpecial
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
