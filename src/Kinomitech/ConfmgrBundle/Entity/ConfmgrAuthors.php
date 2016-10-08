<?php

namespace Kinomitech\ConfmgrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ConfmgrAuthors
 *
 * @ORM\Table(name="confmgr_authors")
 * @ORM\Entity(repositoryClass="Kinomitech\ConfmgrBundle\Repository\ConfmgrAuthorsRepository")
 */
class ConfmgrAuthors
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
     * @Assert\NotBlank()
     *
     * @ORM\Column(name="author_title", type="string", length=255)
     */
    private $authorTitle;

    /**
     * @var string
     * @Assert\NotBlank()
     *
     * @ORM\Column(name="author_first_name", type="string", length=255)
     */
    private $authorFirstName;

    /**
     * @var string
     * @Assert\NotBlank()
     * @ORM\Column(name="author_surname", type="string", length=255)
     */
    private $authorSurname;

    /**
     * @var string
     * @Assert\NotBlank()
     *
     * @ORM\Column(name="author_affiliation", type="string", length=255, nullable=true)
     */
    
    private $authorAffiliation;
    
    /**
     * @var authorPaperAssociation the papers for the author
     *
     * 
     * @ORM\OneToMany(targetEntity="ConfmgrAuthorPaper", mappedBy="apAuthor")
     */
    private $authorPaperAssociations;

    /**
     *
     * 
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $authorDateCreated;

    /**
     *
     * 
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    private $authorDateModified;


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
     * Set authorTitle
     *
     * @param string $authorTitle
     * @return ConfmgrAuthors
     */
    public function setAuthorTitle($authorTitle)
    {
        $this->authorTitle = $authorTitle;

        return $this;
    }

    /**
     * Get authorTitle
     *
     * @return string 
     */
    public function getAuthorTitle()
    {
        return $this->authorTitle;
    }

    /**
     * Set authorFirstName
     *
     * @param string $authorFirstName
     * @return ConfmgrAuthors
     */
    public function setAuthorFirstName($authorFirstName)
    {
        $this->authorFirstName = $authorFirstName;

        return $this;
    }

    /**
     * Get authorFirstName
     *
     * @return string 
     */
    public function getAuthorFirstName()
    {
        return $this->authorFirstName;
    }

    /**
     * Set authorSurname
     *
     * @param string $authorSurname
     * @return ConfmgrAuthors
     */
    public function setAuthorSurname($authorSurname)
    {
        $this->authorSurname = $authorSurname;

        return $this;
    }

    /**
     * Get authorSurname
     *
     * @return string 
     */
    public function getAuthorSurname()
    {
        return $this->authorSurname;
    }

    /**
     * Set authorAffiliation
     *
     * @param string $authorAffiliation
     * @return ConfmgrAuthors
     */
    public function setAuthorAffiliation($authorAffiliation)
    {
        $this->authorAffiliation = $authorAffiliation;

        return $this;
    }

    /**
     * Get authorAffiliation
     *
     * @return string 
     */
    public function getAuthorAffiliation()
    {
        return $this->authorAffiliation;
    }

    /**
     * Get authorDateCreated
     *
     * @return \datetime
     */
    public function getAuthorDateCreated()
    {
        return $this->authorDateCreated;
    }


    /**
     * Get authorDateModified
     *
     * @return \datetime
     */
    public function getAuthorDateModified()
    {
        return $this->authorDateModified;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->authorPaperAssociations = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add authorPapers
     *
     * @param \Kinomitech\ConfmgrBundle\Entity\ConfmgrAuthorPaper $authorPaperAssociations
     * @return ConfmgrAuthors
     */
    public function addAuthorPaperAssociations(\Kinomitech\ConfmgrBundle\Entity\ConfmgrAuthorPaper $authorPaperAssociations)
    {
        $this->authorPaperAssociations[] = $authorPaperAssociations;

        return $this;
    }

    /**
     * Remove authorPapers
     *
     * @param \Kinomitech\ConfmgrBundle\Entity\ConfmgrAuthorPaper $authorPaperAssociations
     */
    public function removeAuthorPaperAssociations(\Kinomitech\ConfmgrBundle\Entity\ConfmgrAuthorPaper $authorPaperAssociations)
    {
        $this->authorPaperAssociations->removeElement($authorPaperAssociations);
    }
    
    public function __toString()
    {
        return (string) $this->getAuthorFirstName();
    }

    /**
     * Get authorPaperAssociations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAuthorPaperAssociations()
    {
        return $this->authorPaperAssociations;
    }
}
