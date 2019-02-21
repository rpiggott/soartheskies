<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MembershipPasswordChange
 *
 * @ORM\Table(name="membership_password_change", uniqueConstraints={@ORM\UniqueConstraint(name="membership_password_change_reference_unique", columns={"reference"})})
 * @ORM\Entity
 */
class MembershipPasswordChange
{
    /**
     * @var int
     *
     * @ORM\Column(name="reference", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="membership_password_change_reference_seq", allocationSize=1, initialValue=1)
     */
    private $reference;

    /**
     * @var int|null
     *
     * @ORM\Column(name="membership_reference", type="bigint", nullable=true)
     */
    private $membershipReference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="temporary_password", type="text", nullable=true)
     */
    private $temporaryPassword;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="create_date", type="datetime", nullable=true, options={"comment"="UTC"})
     */
    private $createDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="expire_date", type="datetime", nullable=true, options={"comment"="UTC"})
     */
    private $expireDate;


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
     * Set membershipReference.
     *
     * @param int|null $membershipReference
     *
     * @return MembershipPasswordChange
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
     * Set temporaryPassword.
     *
     * @param string|null $temporaryPassword
     *
     * @return MembershipPasswordChange
     */
    public function setTemporaryPassword($temporaryPassword = null)
    {
        $this->temporaryPassword = $temporaryPassword;

        return $this;
    }

    /**
     * Get temporaryPassword.
     *
     * @return string|null
     */
    public function getTemporaryPassword()
    {
        return $this->temporaryPassword;
    }

    /**
     * Set createDate.
     *
     * @param \DateTime|null $createDate
     *
     * @return MembershipPasswordChange
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

    /**
     * Set expireDate.
     *
     * @param \DateTime|null $expireDate
     *
     * @return MembershipPasswordChange
     */
    public function setExpireDate($expireDate = null)
    {
        $this->expireDate = $expireDate;

        return $this;
    }

    /**
     * Get expireDate.
     *
     * @return \DateTime|null
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }
}
