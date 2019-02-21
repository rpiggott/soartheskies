<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MembershipLogin
 *
 * @ORM\Table(name="membership_login", uniqueConstraints={@ORM\UniqueConstraint(name="membership_login_reference_unique", columns={"reference"})})
 * @ORM\Entity
 */
class MembershipLogin
{
    /**
     * @var int
     *
     * @ORM\Column(name="reference", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="membership_login_reference_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="ip_address", type="text", nullable=true)
     */
    private $ipAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="login_result", type="text", nullable=true)
     */
    private $loginResult;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="login_date", type="datetime", nullable=true, options={"default"="now()","comment"="UTC"})
     */
    private $loginDate = 'now()';


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
     * @return MembershipLogin
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
     * Set ipAddress.
     *
     * @param string|null $ipAddress
     *
     * @return MembershipLogin
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
     * Set loginResult.
     *
     * @param string|null $loginResult
     *
     * @return MembershipLogin
     */
    public function setLoginResult($loginResult = null)
    {
        $this->loginResult = $loginResult;

        return $this;
    }

    /**
     * Get loginResult.
     *
     * @return string|null
     */
    public function getLoginResult()
    {
        return $this->loginResult;
    }

    /**
     * Set loginDate.
     *
     * @param \DateTime|null $loginDate
     *
     * @return MembershipLogin
     */
    public function setLoginDate($loginDate = null)
    {
        $this->loginDate = $loginDate;

        return $this;
    }

    /**
     * Get loginDate.
     *
     * @return \DateTime|null
     */
    public function getLoginDate()
    {
        return $this->loginDate;
    }
}
