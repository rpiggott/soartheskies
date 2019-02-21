<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GuestBook
 *
 * @ORM\Table(name="guest_book", uniqueConstraints={@ORM\UniqueConstraint(name="guest_book_reference_unique", columns={"reference"})})
 * @ORM\Entity
 */
class GuestBook
{
    /**
     * @var int
     *
     * @ORM\Column(name="reference", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="guest_book_reference_seq", allocationSize=1, initialValue=1)
     */
    private $reference;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="signed_date", type="datetime", nullable=true, options={"default"="now()"})
     */
    private $signedDate = 'now()';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ip_address", type="text", nullable=true)
     */
    private $ipAddress;

    /**
     * @var int|null
     *
     * @ORM\Column(name="membership_reference", type="bigint", nullable=true)
     */
    private $membershipReference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="text", nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_address", type="text", nullable=true)
     */
    private $emailAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="text", nullable=true)
     */
    private $comment;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="approval_date", type="datetime", nullable=true)
     */
    private $approvalDate;


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
     * Set signedDate.
     *
     * @param \DateTime|null $signedDate
     *
     * @return GuestBook
     */
    public function setSignedDate($signedDate = null)
    {
        $this->signedDate = $signedDate;

        return $this;
    }

    /**
     * Get signedDate.
     *
     * @return \DateTime|null
     */
    public function getSignedDate()
    {
        return $this->signedDate;
    }

    /**
     * Set ipAddress.
     *
     * @param string|null $ipAddress
     *
     * @return GuestBook
     */
    public function setIpAddress($ipAddress = null)
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * Get ipAddress.
     *
     * @return string|null
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Set membershipReference.
     *
     * @param int|null $membershipReference
     *
     * @return GuestBook
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

    /**
     * Set name.
     *
     * @param string|null $name
     *
     * @return GuestBook
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set emailAddress.
     *
     * @param string|null $emailAddress
     *
     * @return GuestBook
     */
    public function setEmailAddress($emailAddress = null)
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * Get emailAddress.
     *
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Set comment.
     *
     * @param string|null $comment
     *
     * @return GuestBook
     */
    public function setComment($comment = null)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment.
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set approvalDate.
     *
     * @param \DateTime|null $approvalDate
     *
     * @return GuestBook
     */
    public function setApprovalDate($approvalDate = null)
    {
        $this->approvalDate = $approvalDate;

        return $this;
    }

    /**
     * Get approvalDate.
     *
     * @return \DateTime|null
     */
    public function getApprovalDate()
    {
        return $this->approvalDate;
    }
}
