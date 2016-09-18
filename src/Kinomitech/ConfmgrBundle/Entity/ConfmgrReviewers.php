<?php

namespace Kinomitech\ConfmgrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConfmgrReviewers
 *
 * @ORM\Table(name="confmgr_reviewers")
 * @ORM\Entity(repositoryClass="Kinomitech\ConfmgrBundle\Repository\ConfmgrReviewersRepository")
 */
class ConfmgrReviewers
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
     * @ORM\Column(name="reviewer_title", type="string", length=255)
     */
    private $reviewerTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="reviewer_first_name", type="string", length=255)
     */
    private $reviewerFirstName;

    /**
     * @var string
     *
     * @ORM\Column(name="reviewer_surname", type="string", length=255)
     */
    private $reviewerSurname;

    /**
     * @var string
     *
     * @ORM\Column(name="reviewer_affiliation", type="string", length=255)
     */
    private $reviewerAffiliation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="reviewer_date_created", type="datetime")
     */
    private $reviewerDateCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="reviewer_date_modified", type="datetime")
     */
    private $reviewerDateModified;


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
     * Set reviewerTitle
     *
     * @param string $reviewerTitle
     * @return ConfmgrReviewers
     */
    public function setReviewerTitle($reviewerTitle)
    {
        $this->reviewerTitle = $reviewerTitle;

        return $this;
    }

    /**
     * Get reviewerTitle
     *
     * @return string 
     */
    public function getReviewerTitle()
    {
        return $this->reviewerTitle;
    }

    /**
     * Set reviewerFirstName
     *
     * @param string $reviewerFirstName
     * @return ConfmgrReviewers
     */
    public function setReviewerFirstName($reviewerFirstName)
    {
        $this->reviewerFirstName = $reviewerFirstName;

        return $this;
    }

    /**
     * Get reviewerFirstName
     *
     * @return string 
     */
    public function getReviewerFirstName()
    {
        return $this->reviewerFirstName;
    }

    /**
     * Set reviewerSurname
     *
     * @param string $reviewerSurname
     * @return ConfmgrReviewers
     */
    public function setReviewerSurname($reviewerSurname)
    {
        $this->reviewerSurname = $reviewerSurname;

        return $this;
    }

    /**
     * Get reviewerSurname
     *
     * @return string 
     */
    public function getReviewerSurname()
    {
        return $this->reviewerSurname;
    }

    /**
     * Set reviewerAffiliation
     *
     * @param string $reviewerAffiliation
     * @return ConfmgrReviewers
     */
    public function setReviewerAffiliation($reviewerAffiliation)
    {
        $this->reviewerAffiliation = $reviewerAffiliation;

        return $this;
    }

    /**
     * Get reviewerAffiliation
     *
     * @return string 
     */
    public function getReviewerAffiliation()
    {
        return $this->reviewerAffiliation;
    }

    /**
     * Set reviewerDateCreated
     *
     * @param \DateTime $reviewerDateCreated
     * @return ConfmgrReviewers
     */
    public function setReviewerDateCreated($reviewerDateCreated)
    {
        $this->reviewerDateCreated = $reviewerDateCreated;

        return $this;
    }

    /**
     * Get reviewerDateCreated
     *
     * @return \DateTime 
     */
    public function getReviewerDateCreated()
    {
        return $this->reviewerDateCreated;
    }

    /**
     * Set reviewerDateModified
     *
     * @param \DateTime $reviewerDateModified
     * @return ConfmgrReviewers
     */
    public function setReviewerDateModified($reviewerDateModified)
    {
        $this->reviewerDateModified = $reviewerDateModified;

        return $this;
    }

    /**
     * Get reviewerDateModified
     *
     * @return \DateTime 
     */
    public function getReviewerDateModified()
    {
        return $this->reviewerDateModified;
    }
}
