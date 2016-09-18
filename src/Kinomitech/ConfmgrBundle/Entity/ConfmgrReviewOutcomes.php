<?php

namespace Kinomitech\ConfmgrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConfmgrReviewOutcomes
 *
 * @ORM\Table(name="confmgr_review_outcomes")
 * @ORM\Entity(repositoryClass="Kinomitech\ConfmgrBundle\Repository\ConfmgrReviewOutcomesRepository")
 */
class ConfmgrReviewOutcomes
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
     * @ORM\Column(name="ro_title", type="string", length=255)
     */
    private $roTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="ro_description", type="text")
     */
    private $roDescription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ro_date_created", type="datetime")
     */
    private $roDateCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ro_date_modified", type="datetime")
     */
    private $roDateModified;


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
     * Set roTitle
     *
     * @param string $roTitle
     * @return ConfmgrReviewOutcomes
     */
    public function setRoTitle($roTitle)
    {
        $this->roTitle = $roTitle;

        return $this;
    }

    /**
     * Get roTitle
     *
     * @return string 
     */
    public function getRoTitle()
    {
        return $this->roTitle;
    }

    /**
     * Set roDescription
     *
     * @param string $roDescription
     * @return ConfmgrReviewOutcomes
     */
    public function setRoDescription($roDescription)
    {
        $this->roDescription = $roDescription;

        return $this;
    }

    /**
     * Get roDescription
     *
     * @return string 
     */
    public function getRoDescription()
    {
        return $this->roDescription;
    }

    /**
     * Set roDateCreated
     *
     * @param \DateTime $roDateCreated
     * @return ConfmgrReviewOutcomes
     */
    public function setRoDateCreated($roDateCreated)
    {
        $this->roDateCreated = $roDateCreated;

        return $this;
    }

    /**
     * Get roDateCreated
     *
     * @return \DateTime 
     */
    public function getRoDateCreated()
    {
        return $this->roDateCreated;
    }

    /**
     * Set roDateModified
     *
     * @param \DateTime $roDateModified
     * @return ConfmgrReviewOutcomes
     */
    public function setRoDateModified($roDateModified)
    {
        $this->roDateModified = $roDateModified;

        return $this;
    }

    /**
     * Get roDateModified
     *
     * @return \DateTime 
     */
    public function getRoDateModified()
    {
        return $this->roDateModified;
    }
}
