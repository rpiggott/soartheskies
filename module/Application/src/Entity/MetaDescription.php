<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MetaDescription
 *
 * @ORM\Table(name="meta_description", uniqueConstraints={@ORM\UniqueConstraint(name="meta_description_reference_unique", columns={"reference"})})
 * @ORM\Entity
 */
class MetaDescription
{
    /**
     * @var int
     *
     * @ORM\Column(name="reference", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="meta_description_reference_seq", allocationSize=1, initialValue=1)
     */
    private $reference;

    /**
     * @var int|null
     *
     * @ORM\Column(name="meta_section_reference", type="bigint", nullable=true)
     */
    private $metaSectionReference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="meta_description", type="text", nullable=true)
     */
    private $metaDescription;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="effective_date", type="datetime", nullable=true, options={"comment"="UTC"})
     */
    private $effectiveDate;


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
     * Set metaSectionReference.
     *
     * @param int|null $metaSectionReference
     *
     * @return MetaDescription
     */
    public function setMetaSectionReference($metaSectionReference = null)
    {
        $this->metaSectionReference = $metaSectionReference;

        return $this;
    }

    /**
     * Get metaSectionReference.
     *
     * @return int|null
     */
    public function getMetaSectionReference()
    {
        return $this->metaSectionReference;
    }

    /**
     * Set metaDescription.
     *
     * @param string|null $metaDescription
     *
     * @return MetaDescription
     */
    public function setMetaDescription($metaDescription = null)
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }

    /**
     * Get metaDescription.
     *
     * @return string|null
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }

    /**
     * Set effectiveDate.
     *
     * @param \DateTime|null $effectiveDate
     *
     * @return MetaDescription
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
}
