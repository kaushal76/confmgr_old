<?php

namespace Kinomitech\ConfmgrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * ConfmgrFullPaperReviews
 *
 * @ORM\Table(name="confmgr_full_paper_reviews")
 * @ORM\Entity(repositoryClass="Kinomitech\ConfmgrBundle\Repository\ConfmgrFullPaperReviewsRepository")
 */
class ConfmgrFullPaperReviews
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
     * @ORM\Column(name="fp_review_text", type="text")
     */
    private $fpReviewText;

    /**
     * @var int
     *
     * @ORM\Column(name="fp_review_score", type="integer")
     */
    private $fpReviewScore;

    /**
     * @var fpReviewRecommendation the Recommendation related this review
     * 
     * @ORM\ManyToOne(targetEntity="ConfmgrReviewOutcomes")
     * @ORM\JoinColumn(name="fp_review_recommendation_id", referencedColumnName="id")
     */
    private $fpReviewRecommendation;

    /**
     * @var datetime
     * 
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $fpReviewFileDateCreated;

    /**
     * @var datetime
     * 
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    private $fpReviewFileDateModified;


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
     * Set fpReviewText
     *
     * @param string $fpReviewText
     * @return ConfmgrFullPaperReviews
     */
    public function setFpReviewText($fpReviewText)
    {
        $this->fpReviewText = $fpReviewText;

        return $this;
    }

    /**
     * Get fpReviewText
     *
     * @return string 
     */
    public function getFpReviewText()
    {
        return $this->fpReviewText;
    }

    /**
     * Set fpReviewScore
     *
     * @param integer $fpReviewScore
     * @return ConfmgrFullPaperReviews
     */
    public function setFpReviewScore($fpReviewScore)
    {
        $this->fpReviewScore = $fpReviewScore;

        return $this;
    }

    /**
     * Get fpReviewScore
     *
     * @return integer 
     */
    public function getFpReviewScore()
    {
        return $this->fpReviewScore;
    }

    /**
     * Set fpReviewRecommendation
     *
     * @param integer $fpReviewRecommendation
     * @return ConfmgrFullPaperReviews
     */
    public function setFpReviewRecommendation($fpReviewRecommendation)
    {
        $this->fpReviewRecommendation = $fpReviewRecommendation;

        return $this;
    }

    /**
     * Get fpReviewRecommendation
     *
     * @return integer 
     */
    public function getFpReviewRecommendation()
    {
        return $this->fpReviewRecommendation;
    }

    /**
     * Get fpReviewFileDateCreated
     *
     * @return \DateTime 
     */
    public function getFpReviewFileDateCreated()
    {
        return $this->fpReviewFileDateCreated;
    }

    /**
     * Get fpReviewFileDateModified
     *
     * @return \DateTime 
     */
    public function getFpReviewFileDateModified()
    {
        return $this->fpReviewFileDateModified;
    }
}
