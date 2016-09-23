<?php

namespace Kinomitech\ConfmgrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuthorPaper
 *
 * @ORM\Table(name="confmgr_author_paper")
 * @ORM\Entity(repositoryClass="Kinomitech\ConfmgrBundle\Repository\ConfmgrAuthorPaperRepository")
 */
class ConfmgrAuthorPaper
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
     * @ORM\ManyToOne(targetEntity="ConfmgrAuthors", inversedBy="authorPaperAssociation")
     * @ORM\JoinColumn(name="ap_author_id", referencedColumnName="id")
     */
    private $apAuthor;

    /**
     * @ORM\ManyToOne(targetEntity="ConfmgrPapers", inversedBy="paperAuthorAssociation")
     * @ORM\JoinColumn(name="ap_paper_id", referencedColumnName="id")
     */
    private $apPaper;

    /**
     * @var int
     *
     * @ORM\Column(name="ap_position", type="integer")
     */
    private $apPosition;


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
     * Set apAuthor
     *
     * @param integer $apAuthor
     * @return AuthorPaper
     */
    public function setApAuthor($apAuthor)
    {
        $this->apAuthor = $apAuthor;

        return $this;
    }

    /**
     * Get apAuthor
     *
     * @return integer 
     */
    public function getApAuthor()
    {
        return $this->apAuthor;
    }

    /**
     * Set apPaper
     *
     * @param integer $apPaper
     * @return AuthorPaper
     */
    public function setApPaper($apPaper)
    {
        $this->apPaper = $apPaper;

        return $this;
    }

    /**
     * Get apPaper
     *
     * @return integer 
     */
    public function getApPaper()
    {
        return $this->apPaper;
    }

    /**
     * Set apPosition
     *
     * @param integer $apPosition
     * @return AuthorPaper
     */
    public function setApPosition($apPosition)
    {
        $this->apPosition = $apPosition;

        return $this;
    }

    /**
     * Get apPosition
     *
     * @return integer 
     */
    public function getApPosition()
    {
        return $this->apPosition;
    }
}