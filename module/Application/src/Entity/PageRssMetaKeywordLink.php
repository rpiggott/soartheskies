<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PageRssMetaKeywordLink
 *
 * @ORM\Table(name="page_rss_meta_keyword_link", uniqueConstraints={@ORM\UniqueConstraint(name="page_rss_meta_keyword_link_reference_unique", columns={"reference"})})
 * @ORM\Entity
 */
class PageRssMetaKeywordLink
{
    /**
     * @var int
     *
     * @ORM\Column(name="reference", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="page_rss_meta_keyword_link_reference_seq", allocationSize=1, initialValue=1)
     */
    private $reference;

    /**
     * @var int|null
     *
     * @ORM\Column(name="meta_keyword_reference", type="bigint", nullable=true)
     */
    private $metaKeywordReference;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="add_date", type="datetime", nullable=true, options={"default"="now()"})
     */
    private $addDate = 'now()';

    /**
     * @var int|null
     *
     * @ORM\Column(name="add_membership_reference", type="bigint", nullable=true)
     */
    private $addMembershipReference;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="remove_date", type="datetime", nullable=true, options={"default"="now()"})
     */
    private $removeDate = 'now()';

    /**
     * @var int|null
     *
     * @ORM\Column(name="remove_membership_reference", type="bigint", nullable=true)
     */
    private $removeMembershipReference;


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
     * Set metaKeywordReference.
     *
     * @param int|null $metaKeywordReference
     *
     * @return PageRssMetaKeywordLink
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
     * Set addDate.
     *
     * @param \DateTime|null $addDate
     *
     * @return PageRssMetaKeywordLink
     */
    public function setAddDate($addDate = null)
    {
        $this->addDate = $addDate;

        return $this;
    }

    /**
     * Get addDate.
     *
     * @return \DateTime|null
     */
    public function getAddDate()
    {
        return $this->addDate;
    }

    /**
     * Set addMembershipReference.
     *
     * @param int|null $addMembershipReference
     *
     * @return PageRssMetaKeywordLink
     */
    public function setAddMembershipReference($addMembershipReference = null)
    {
        $this->addMembershipReference = $addMembershipReference;

        return $this;
    }

    /**
     * Get addMembershipReference.
     *
     * @return int|null
     */
    public function getAddMembershipReference()
    {
        return $this->addMembershipReference;
    }

    /**
     * Set removeDate.
     *
     * @param \DateTime|null $removeDate
     *
     * @return PageRssMetaKeywordLink
     */
    public function setRemoveDate($removeDate = null)
    {
        $this->removeDate = $removeDate;

        return $this;
    }

    /**
     * Get removeDate.
     *
     * @return \DateTime|null
     */
    public function getRemoveDate()
    {
        return $this->removeDate;
    }

    /**
     * Set removeMembershipReference.
     *
     * @param int|null $removeMembershipReference
     *
     * @return PageRssMetaKeywordLink
     */
    public function setRemoveMembershipReference($removeMembershipReference = null)
    {
        $this->removeMembershipReference = $removeMembershipReference;

        return $this;
    }

    /**
     * Get removeMembershipReference.
     *
     * @return int|null
     */
    public function getRemoveMembershipReference()
    {
        return $this->removeMembershipReference;
    }
}
