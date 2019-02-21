<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MetaSection
 *
 * @ORM\Table(name="meta_section", uniqueConstraints={@ORM\UniqueConstraint(name="meta_section_reference_unique", columns={"reference"})})
 * @ORM\Entity
 */
class MetaSection
{
    /**
     * @var int
     *
     * @ORM\Column(name="reference", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="meta_section_reference_seq", allocationSize=1, initialValue=1)
     */
    private $reference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="meta_section", type="text", nullable=true)
     */
    private $metaSection;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_date", type="datetime", nullable=true, options={"comment"="UTC"})
     */
    private $createdDate;


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
     * Set metaSection.
     *
     * @param string|null $metaSection
     *
     * @return MetaSection
     */
    public function setMetaSection($metaSection = null)
    {
        $this->metaSection = $metaSection;

        return $this;
    }

    /**
     * Get metaSection.
     *
     * @return string|null
     */
    public function getMetaSection()
    {
        return $this->metaSection;
    }

    /**
     * Set createdDate.
     *
     * @param \DateTime|null $createdDate
     *
     * @return MetaSection
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
}
