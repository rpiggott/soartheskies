<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PageRss
 *
 * @ORM\Table(name="page_rss", uniqueConstraints={@ORM\UniqueConstraint(name="page_rss_reference_unique", columns={"reference"})})
 * @ORM\Entity
 */
class PageRss
{
    /**
     * @var int
     *
     * @ORM\Column(name="reference", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="page_rss_reference_seq", allocationSize=1, initialValue=1)
     */
    private $reference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    private $content;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="effective_date", type="datetime", nullable=true, options={"comment"="UTC"})
     */
    private $effectiveDate;

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
     * Set content.
     *
     * @param string|null $content
     *
     * @return PageRss
     */
    public function setContent($content = null)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content.
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set effectiveDate.
     *
     * @param \DateTime|null $effectiveDate
     *
     * @return PageRss
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
     * Set membershipReference.
     *
     * @param int|null $membershipReference
     *
     * @return PageRss
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
