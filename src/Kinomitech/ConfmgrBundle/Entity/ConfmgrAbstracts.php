<?php

namespace Kinomitech\ConfmgrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

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
     * @var abstractReviewOutcome the review outcome for this abstract
     * 
     * @ORM\ManyToOne(targetEntity="ConfmgrReviewOutcomes")
     * @ORM\JoinColumn(name="abstract_review_outcome_id", referencedColumnName="id")
     */
    private $abstractReviewOutcome;
    
    /**
     * @var abstractReview the reviews for the abstract
     * 
     * @ORM\OneToMany(targetEntity="ConfmgrAbstractReviews", mappedBy="abstractReviewAbstract")
     */
    protected $abstractReviews;

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
     * @var abstractPaper the paper this Abstract attached to
     * 
     * @ORM\ManyToOne(targetEntity="ConfmgrPapers", inversedBy="paperAbstracts")
     * @ORM\JoinColumn(name="abstract_paper_id", referencedColumnName="id")
     */
    private $abstractPaper;
  

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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->abstractReviews = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set abstractReviewOutcome
     *
     * @param \Kinomitech\ConfmgrBundle\Entity\ConfmgrReviewOutcomes $abstractReviewOutcome
     * @return ConfmgrAbstracts
     */
    public function setAbstractReviewOutcome(\Kinomitech\ConfmgrBundle\Entity\ConfmgrReviewOutcomes $abstractReviewOutcome = null)
    {
        $this->abstractReviewOutcome = $abstractReviewOutcome;

        return $this;
    }

    /**
     * Get abstractReviewOutcome
     *
     * @return \Kinomitech\ConfmgrBundle\Entity\ConfmgrReviewOutcomes 
     */
    public function getAbstractReviewOutcome()
    {
        return $this->abstractReviewOutcome;
    }

    /**
     * Add abstractReviews
     *
     * @param \Kinomitech\ConfmgrBundle\Entity\ConfmgrAbstractReviews $abstractReviews
     * @return ConfmgrAbstracts
     */
    public function addAbstractReview(\Kinomitech\ConfmgrBundle\Entity\ConfmgrAbstractReviews $abstractReviews)
    {
        $this->abstractReviews[] = $abstractReviews;

        return $this;
    }

    /**
     * Remove abstractReviews
     *
     * @param \Kinomitech\ConfmgrBundle\Entity\ConfmgrAbstractReviews $abstractReviews
     */
    public function removeAbstractReview(\Kinomitech\ConfmgrBundle\Entity\ConfmgrAbstractReviews $abstractReviews)
    {
        $this->abstractReviews->removeElement($abstractReviews);
    }

    /**
     * Get abstractReviews
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAbstractReviews()
    {
        return $this->abstractReviews;
    }

    /**
     * Set abstractPaper
     *
     * @param \Kinomitech\ConfmgrBundle\Entity\ConfmgrPapers $abstractPaper
     * @return ConfmgrAbstracts
     */
    public function setAbstractPaper(\Kinomitech\ConfmgrBundle\Entity\ConfmgrPapers $abstractPaper = null)
    {
        $this->abstractPaper = $abstractPaper;

        return $this;
    }

    /**
     * Get abstractPaper
     *
     * @return \Kinomitech\ConfmgrBundle\Entity\ConfmgrPapers 
     */
    public function getAbstractPaper()
    {
        return $this->abstractPaper;
    }
}
