<?php

namespace Kinomitech\ConfmgrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConfmgrFullPapers
 *
 * @ORM\Table(name="confmgr_full_papers")
 * @ORM\Entity(repositoryClass="Kinomitech\ConfmgrBundle\Repository\ConfmgrFullPapersRepository")
 */
class ConfmgrFullPapers
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
     * @ORM\Column(name="full_editors_comment", type="text", nullable=true)
     */
    private $fullEditorsComment;

    /**
     * @var int
     *
     * @ORM\Column(name="full_review_outcome", type="integer", nullable=true)
     */
    private $fullReviewOutcome;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="full_date_created", type="datetime")
     */
    private $fullDateCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="full_date_modified", type="datetime")
     */
    private $fullDateModified;
    
    /**
     * @var fullPaper the paper this full paper attached to
     * 
     * @ORM\ManyToOne(targetEntity="ConfmgrPapers", inversedBy="paperFullPapers")
     * @ORM\JoinColumn(name="full_paper_id", referencedColumnName="id")
     */
    private $fullPaper;


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
     * Set fullEditorsComment
     *
     * @param string $fullEditorsComment
     * @return ConfmgrFullPapers
     */
    public function setFullEditorsComment($fullEditorsComment)
    {
        $this->fullEditorsComment = $fullEditorsComment;

        return $this;
    }

    /**
     * Get fullEditorsComment
     *
     * @return string 
     */
    public function getFullEditorsComment()
    {
        return $this->fullEditorsComment;
    }

    /**
     * Set fullReviewOutcome
     *
     * @param integer $fullReviewOutcome
     * @return ConfmgrFullPapers
     */
    public function setFullReviewOutcome($fullReviewOutcome)
    {
        $this->fullReviewOutcome = $fullReviewOutcome;

        return $this;
    }

    /**
     * Get fullReviewOutcome
     *
     * @return integer 
     */
    public function getFullReviewOutcome()
    {
        return $this->fullReviewOutcome;
    }

    /**
     * Set fullDateCreated
     *
     * @param \DateTime $fullDateCreated
     * @return ConfmgrFullPapers
     */
    public function setFullDateCreated($fullDateCreated)
    {
        $this->fullDateCreated = $fullDateCreated;

        return $this;
    }

    /**
     * Get fullDateCreated
     *
     * @return \DateTime 
     */
    public function getFullDateCreated()
    {
        return $this->fullDateCreated;
    }

    /**
     * Set fullDateModified
     *
     * @param \DateTime $fullDateModified
     * @return ConfmgrFullPapers
     */
    public function setFullDateModified($fullDateModified)
    {
        $this->fullDateModified = $fullDateModified;

        return $this;
    }

    /**
     * Get fullDateModified
     *
     * @return \DateTime 
     */
    public function getFullDateModified()
    {
        return $this->fullDateModified;
    }
}
