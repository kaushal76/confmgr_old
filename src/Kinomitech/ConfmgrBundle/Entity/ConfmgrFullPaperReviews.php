<?php

namespace Kinomitech\ConfmgrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @var int
     *
     * @ORM\Column(name="fp_review_recommendation", type="integer")
     */
    private $fpReviewRecommendation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fp_review_file_date_created", type="datetime")
     */
    private $fpReviewFileDateCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fp_review_file_date_modified", type="datetime")
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
     * Set fpReviewFileDateCreated
     *
     * @param \DateTime $fpReviewFileDateCreated
     * @return ConfmgrFullPaperReviews
     */
    public function setFpReviewFileDateCreated($fpReviewFileDateCreated)
    {
        $this->fpReviewFileDateCreated = $fpReviewFileDateCreated;

        return $this;
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
     * Set fpReviewFileDateModified
     *
     * @param \DateTime $fpReviewFileDateModified
     * @return ConfmgrFullPaperReviews
     */
    public function setFpReviewFileDateModified($fpReviewFileDateModified)
    {
        $this->fpReviewFileDateModified = $fpReviewFileDateModified;

        return $this;
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
