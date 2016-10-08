<?php

namespace Kinomitech\ConfmgrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

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
     * @return abstractReviewAbstract
     */
    public function getAbstractReviewAbstract()
    {
        return $this->abstractReviewAbstract;
    }

    /**
     * @param abstractReviewAbstract $abstractReviewAbstract
     */
    public function setAbstractReviewAbstract($abstractReviewAbstract)
    {
        $this->abstractReviewAbstract = $abstractReviewAbstract;
    }

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
     * @var datetime
     * 
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $abstractReviewDateCreated;

    /**
     * @var datetime
     * 
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    private $abstractReviewDateModified;


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
     * Get abstractReviewDateCreated
     *
     * @return \DateTime 
     */
    public function getAbstractReviewFileDateCreated()
    {
        return $this->abstractReviewDateCreated;
    }

    /**
     * Get abstractReviewDateModified
     *
     * @return \DateTime 
     */
    public function getAbstractReviewFileDateModified()
    {
        return $this->abstractReviewDateModified;
    }
}
