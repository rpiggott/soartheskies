<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MembershipProfile
 *
 * @ORM\Table(name="membership_profile", uniqueConstraints={@ORM\UniqueConstraint(name="membership_profile_reference_unique", columns={"reference"})})
 * @ORM\Entity
 */
class MembershipProfile
{
    /**
     * @var int
     *
     * @ORM\Column(name="reference", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="membership_profile_reference_seq", allocationSize=1, initialValue=1)
     */
    private $reference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_address", type="text", nullable=true)
     */
    private $emailAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="username", type="text", nullable=true)
     */
    private $username;

    /**
     * @var string|null
     *
     * @ORM\Column(name="password", type="text", nullable=true)
     */
    private $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="account_state", type="text", nullable=true)
     */
    private $accountState;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="account_created", type="datetime", nullable=true, options={"default"="now()"})
     */
    private $accountCreated = 'now()';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="account_validated", type="datetime", nullable=true)
     */
    private $accountValidated;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="account_closed", type="datetime", nullable=true)
     */
    private $accountClosed;


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
     * Set emailAddress.
     *
     * @param string|null $emailAddress
     *
     * @return MembershipProfile
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
     * Set username.
     *
     * @param string|null $username
     *
     * @return MembershipProfile
     */
    public function setUsername($username = null)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username.
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password.
     *
     * @param string|null $password
     *
     * @return MembershipProfile
     */
    public function setPassword($password = null)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password.
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set accountState.
     *
     * @param string|null $accountState
     *
     * @return MembershipProfile
     */
    public function setAccountState($accountState = null)
    {
        $this->accountState = $accountState;

        return $this;
    }

    /**
     * Get accountState.
     *
     * @return string|null
     */
    public function getAccountState()
    {
        return $this->accountState;
    }

    /**
     * Set accountCreated.
     *
     * @param \DateTime|null $accountCreated
     *
     * @return MembershipProfile
     */
    public function setAccountCreated($accountCreated = null)
    {
        $this->accountCreated = $accountCreated;

        return $this;
    }

    /**
     * Get accountCreated.
     *
     * @return \DateTime|null
     */
    public function getAccountCreated()
    {
        return $this->accountCreated;
    }

    /**
     * Set accountValidated.
     *
     * @param \DateTime|null $accountValidated
     *
     * @return MembershipProfile
     */
    public function setAccountValidated($accountValidated = null)
    {
        $this->accountValidated = $accountValidated;

        return $this;
    }

    /**
     * Get accountValidated.
     *
     * @return \DateTime|null
     */
    public function getAccountValidated()
    {
        return $this->accountValidated;
    }

    /**
     * Set accountClosed.
     *
     * @param \DateTime|null $accountClosed
     *
     * @return MembershipProfile
     */
    public function setAccountClosed($accountClosed = null)
    {
        $this->accountClosed = $accountClosed;

        return $this;
    }

    /**
     * Get accountClosed.
     *
     * @return \DateTime|null
     */
    public function getAccountClosed()
    {
        return $this->accountClosed;
    }
}
