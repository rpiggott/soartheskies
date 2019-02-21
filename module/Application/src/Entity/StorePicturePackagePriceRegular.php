<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StorePicturePackagePriceRegular
 *
 * @ORM\Table(name="store_picture_package_price_regular", uniqueConstraints={@ORM\UniqueConstraint(name="store_picture_package_price_regular_reference_unique", columns={"reference"})})
 * @ORM\Entity
 */
class StorePicturePackagePriceRegular
{
    /**
     * @var int
     *
     * @ORM\Column(name="reference", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="store_picture_package_price_regular_reference_seq", allocationSize=1, initialValue=1)
     */
    private $reference;

    /**
     * @var int|null
     *
     * @ORM\Column(name="store_picture_package_reference", type="bigint", nullable=true)
     */
    private $storePicturePackageReference;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="effective_date", type="datetime", nullable=true)
     */
    private $effectiveDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="price", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $price;

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
     * Set storePicturePackageReference.
     *
     * @param int|null $storePicturePackageReference
     *
     * @return StorePicturePackagePriceRegular
     */
    public function setStorePicturePackageReference($storePicturePackageReference = null)
    {
        $this->storePicturePackageReference = $storePicturePackageReference;

        return $this;
    }

    /**
     * Get storePicturePackageReference.
     *
     * @return int|null
     */
    public function getStorePicturePackageReference()
    {
        return $this->storePicturePackageReference;
    }

    /**
     * Set effectiveDate.
     *
     * @param \DateTime|null $effectiveDate
     *
     * @return StorePicturePackagePriceRegular
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
     * Set price.
     *
     * @param string|null $price
     *
     * @return StorePicturePackagePriceRegular
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
     * Set membershipReference.
     *
     * @param int|null $membershipReference
     *
     * @return StorePicturePackagePriceRegular
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
