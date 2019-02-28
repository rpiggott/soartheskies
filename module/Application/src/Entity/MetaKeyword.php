<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * MetaKeyword
 *
 * @ORM\Table(name="meta_keyword", uniqueConstraints={@ORM\UniqueConstraint(name="meta_keyword_reference_unique", columns={"reference"})})
 * @ORM\Entity
 */
class MetaKeyword
{
    /**
     * @var int
     *
     * @ORM\Column(name="reference", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="meta_keyword_reference_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="effective_date", type="datetimetz", nullable=true, options={"default"="now()","comment"="UTC"})
     */
    private $effectiveDate = 'now()';

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
     * @return MetaKeyword
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
     * Set effectiveDate.
     *
     * @param \DateTime|null $effectiveDate
     *
     * @return MetaKeyword
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
     * @return MetaKeyword
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
