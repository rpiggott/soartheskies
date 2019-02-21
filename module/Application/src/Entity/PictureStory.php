<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PictureStory
 *
 * @ORM\Table(name="picture_story", uniqueConstraints={@ORM\UniqueConstraint(name="picture_story_reference_unique", columns={"reference"})})
 * @ORM\Entity
 */
class PictureStory
{
    /**
     * @var int
     *
     * @ORM\Column(name="reference", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="picture_story_reference_seq", allocationSize=1, initialValue=1)
     */
    private $reference;

    /**
     * @var int|null
     *
     * @ORM\Column(name="picture_reference", type="bigint", nullable=true)
     */
    private $pictureReference;

    /**
     * @var int|null
     *
     * @ORM\Column(name="membership_reference", type="bigint", nullable=true)
     */
    private $membershipReference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="story", type="text", nullable=true)
     */
    private $story;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="story_date", type="datetime", nullable=true, options={"comment"="UTC"})
     */
    private $storyDate;


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
     * Set pictureReference.
     *
     * @param int|null $pictureReference
     *
     * @return PictureStory
     */
    public function setPictureReference($pictureReference = null)
    {
        $this->pictureReference = $pictureReference;

        return $this;
    }

    /**
     * Get pictureReference.
     *
     * @return int|null
     */
    public function getPictureReference()
    {
        return $this->pictureReference;
    }

    /**
     * Set membershipReference.
     *
     * @param int|null $membershipReference
     *
     * @return PictureStory
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
     * Set story.
     *
     * @param string|null $story
     *
     * @return PictureStory
     */
    public function setStory($story = null)
    {
        $this->story = $story;

        return $this;
    }

    /**
     * Get story.
     *
     * @return string|null
     */
    public function getStory()
    {
        return $this->story;
    }

    /**
     * Set storyDate.
     *
     * @param \DateTime|null $storyDate
     *
     * @return PictureStory
     */
    public function setStoryDate($storyDate = null)
    {
        $this->storyDate = $storyDate;

        return $this;
    }

    /**
     * Get storyDate.
     *
     * @return \DateTime|null
     */
    public function getStoryDate()
    {
        return $this->storyDate;
    }
}
