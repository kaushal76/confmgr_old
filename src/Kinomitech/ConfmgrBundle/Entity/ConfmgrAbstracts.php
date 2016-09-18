<?php

namespace Kinomitech\ConfmgrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConfmgrAbstracts
 *
 * @ORM\Table(name="confmgr_abstracts")
 * @ORM\Entity(repositoryClass="Kinomitech\ConfmgrBundle\Repository\ConfmgrAbstractsRepository")
 */
class ConfmgrAbstracts
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="abstract_text", type="text", nullable=true)
     */
    private $abstractText;

    /**
     * @var string
     *
     * @ORM\Column(name="abstract_keywords", type="string", length=255, nullable=true)
     */
    private $abstractKeywords;

    /**
     * @var string
     *
     * @ORM\Column(name="abstract_editors_comment", type="text", nullable=true)
     */
    private $abstractEditorsComment;

    /**
     * @var int
     *
     * @ORM\Column(name="abstract_review_outcome", type="integer", nullable=true)
     */
    private $abstractReviewOutcome;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="abstract_date_created", type="datetime")
     */
    private $abstractDateCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="abstract_date_modified", type="datetime")
     */
    private $abstractDateModified;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set abstractText
     *
     * @param string $abstractText
     * @return ConfmgrAbstracts
     */
    public function setAbstractText($abstractText)
    {
        $this->abstractText = $abstractText;

        return $this;
    }

    /**
     * Get abstractText
     *
     * @return string 
     */
    public function getAbstractText()
    {
        return $this->abstractText;
    }

    /**
     * Set abstractKeywords
     *
     * @param string $abstractKeywords
     * @return ConfmgrAbstracts
     */
    public function setAbstractKeywords($abstractKeywords)
    {
        $this->abstractKeywords = $abstractKeywords;

        return $this;
    }

    /**
     * Get abstractKeywords
     *
     * @return string 
     */
    public function getAbstractKeywords()
    {
        return $this->abstractKeywords;
    }

    /**
     * Set abstractEditorsComment
     *
     * @param string $abstractEditorsComment
     * @return ConfmgrAbstracts
     */
    public function setAbstractEditorsComment($abstractEditorsComment)
    {
        $this->abstractEditorsComment = $abstractEditorsComment;

        return $this;
    }

    /**
     * Get abstractEditorsComment
     *
     * @return string 
     */
    public function getAbstractEditorsComment()
    {
        return $this->abstractEditorsComment;
    }

    /**
     * Set abstractReviewOutcome
     *
     * @param integer $abstractReviewOutcome
     * @return ConfmgrAbstracts
     */
    public function setAbstractReviewOutcome($abstractReviewOutcome)
    {
        $this->abstractReviewOutcome = $abstractReviewOutcome;

        return $this;
    }

    /**
     * Get abstractReviewOutcome
     *
     * @return integer 
     */
    public function getAbstractReviewOutcome()
    {
        return $this->abstractReviewOutcome;
    }

    /**
     * Set abstractDateCreated
     *
     * @param \DateTime $abstractDateCreated
     * @return ConfmgrAbstracts
     */
    public function setAbstractDateCreated($abstractDateCreated)
    {
        $this->abstractDateCreated = $abstractDateCreated;

        return $this;
    }

    /**
     * Get abstractDateCreated
     *
     * @return \DateTime 
     */
    public function getAbstractDateCreated()
    {
        return $this->abstractDateCreated;
    }

    /**
     * Set abstractDateModified
     *
     * @param \DateTime $abstractDateModified
     * @return ConfmgrAbstracts
     */
    public function setAbstractDateModified($abstractDateModified)
    {
        $this->abstractDateModified = $abstractDateModified;

        return $this;
    }

    /**
     * Get abstractDateModified
     *
     * @return \DateTime 
     */
    public function getAbstractDateModified()
    {
        return $this->abstractDateModified;
    }
}
