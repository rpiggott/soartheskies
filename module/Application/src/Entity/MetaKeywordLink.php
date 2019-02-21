<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MetaKeywordLink
 *
 * @ORM\Table(name="meta_keyword_link", uniqueConstraints={@ORM\UniqueConstraint(name="meta_keyword_link_reference_unique", columns={"reference"})})
 * @ORM\Entity
 */
class MetaKeywordLink
{
    /**
     * @var int
     *
     * @ORM\Column(name="reference", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="meta_keyword_link_reference_seq", allocationSize=1, initialValue=1)
     */
    private $reference;

    /**
     * @var int|null
     *
     * @ORM\Column(name="meta_description_reference", type="bigint", nullable=true)
     */
    private $metaDescriptionReference;

    /**
     * @var int|null
     *
     * @ORM\Column(name="meta_keyword_reference", type="bigint", nullable=true)
     */
    private $metaKeywordReference;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="create_date", type="datetime", nullable=true, options={"comment"="UTC"})
     */
    private $createDate;


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
     * Set metaDescriptionReference.
     *
     * @param int|null $metaDescriptionReference
     *
     * @return MetaKeywordLink
     */
    public function setMetaDescriptionReference($metaDescriptionReference = null)
    {
        $this->metaDescriptionReference = $metaDescriptionReference;

        return $this;
    }

    /**
     * Get metaDescriptionReference.
     *
     * @return int|null
     */
    public function getMetaDescriptionReference()
    {
        return $this->metaDescriptionReference;
    }

    /**
     * Set metaKeywordReference.
     *
     * @param int|null $metaKeywordReference
     *
     * @return MetaKeywordLink
     */
    public function setMetaKeywordReference($metaKeywordReference = null)
    {
        $this->metaKeywordReference = $metaKeywordReference;

        return $this;
    }

    /**
     * Get metaKeywordReference.
     *
     * @return int|null
     */
    public function getMetaKeywordReference()
    {
        return $this->metaKeywordReference;
    }

    /**
     * Set createDate.
     *
     * @param \DateTime|null $createDate
     *
     * @return MetaKeywordLink
     */
    public function setCreateDate($createDate = null)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get createDate.
     *
     * @return \DateTime|null
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }
}
