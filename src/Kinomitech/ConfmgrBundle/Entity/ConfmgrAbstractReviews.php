<?php

namespace Kinomitech\ConfmgrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConfmgrAbstractReviews
 *
 * @ORM\Table(name="confmgr_abstract_reviews")
 * @ORM\Entity(repositoryClass="Kinomitech\ConfmgrBundle\Repository\ConfmgrAbstractReviewsRepository")
 */
class ConfmgrAbstractReviews
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
     * @ORM\Column(name="abstract_review_text", type="text")
     */
    private $abstractReviewText;

    /**
     * @var int
     *
     * @ORM\Column(name="abstract_review_score", type="integer")
     */
    private $abstractReviewScore;

    /**
     * @var abstractReviewRecommendation the Recommendation related this review
     * 
     * @ORM\ManyToOne(targetEntity="ConfmgrReviewOutcomes")
     * @ORM\JoinColumn(name="abstract_review_recommendation_id", referencedColumnName="id")
     */
    private $abstractReviewRecommendation;
    
    /**
     * @var abstractReviewAbstract the abstract related this review
     * 
     * @ORM\ManyToOne(targetEntity="ConfmgrAbstracts", inversedBy="abstractReviews")
     * @ORM\JoinColumn(name="abstract_review_abstract_id", referencedColumnName="id")
     */
    private $abstractReviewAbstract;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="abstract_review_file_date_created", type="datetime")
     */
    private $abstractReviewFileDateCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="abstract_review_file_date_modified", type="datetime")
     */
    private $abstractReviewFileDateModified;


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
     * Set abstractReviewText
     *
     * @param string $abstractReviewText
     * @return ConfmgrAbstractReviews
     */
    public function setAbstractReviewText($abstractReviewText)
    {
        $this->abstractReviewText = $abstractReviewText;

        return $this;
    }

    /**
     * Get abstractReviewText
     *
     * @return string 
     */
    public function getAbstractReviewText()
    {
        return $this->abstractReviewText;
    }

    /**
     * Set abstractReviewScore
     *
     * @param integer $abstractReviewScore
     * @return ConfmgrAbstractReviews
     */
    public function setAbstractReviewScore($abstractReviewScore)
    {
        $this->abstractReviewScore = $abstractReviewScore;

        return $this;
    }

    /**
     * Get abstractReviewScore
     *
     * @return integer 
     */
    public function getAbstractReviewScore()
    {
        return $this->abstractReviewScore;
    }

    /**
     * Set abstractReviewRecommendation
     *
     * @param integer $abstractReviewRecommendation
     * @return ConfmgrAbstractReviews
     */
    public function setAbstractReviewRecommendation($abstractReviewRecommendation)
    {
        $this->abstractReviewRecommendation = $abstractReviewRecommendation;

        return $this;
    }

    /**
     * Get abstractReviewRecommendation
     *
     * @return integer 
     */
    public function getAbstractReviewRecommendation()
    {
        return $this->abstractReviewRecommendation;
    }

    /**
     * Set abstractReviewFileDateCreated
     *
     * @param \DateTime $abstractReviewFileDateCreated
     * @return ConfmgrAbstractReviews
     */
    public function setAbstractReviewFileDateCreated($abstractReviewFileDateCreated)
    {
        $this->abstractReviewFileDateCreated = $abstractReviewFileDateCreated;

        return $this;
    }

    /**
     * Get abstractReviewFileDateCreated
     *
     * @return \DateTime 
     */
    public function getAbstractReviewFileDateCreated()
    {
        return $this->abstractReviewFileDateCreated;
    }

    /**
     * Set abstractReviewFileDateModified
     *
     * @param \DateTime $abstractReviewFileDateModified
     * @return ConfmgrAbstractReviews
     */
    public function setAbstractReviewFileDateModified($abstractReviewFileDateModified)
    {
        $this->abstractReviewFileDateModified = $abstractReviewFileDateModified;

        return $this;
    }

    /**
     * Get abstractReviewFileDateModified
     *
     * @return \DateTime 
     */
    public function getAbstractReviewFileDateModified()
    {
        return $this->abstractReviewFileDateModified;
    }
}
