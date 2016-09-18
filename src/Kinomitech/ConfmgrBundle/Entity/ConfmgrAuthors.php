<?php

namespace Kinomitech\ConfmgrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     *
     * @ORM\Column(name="author_title", type="string", length=255)
     */
    private $authorTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="author_first_name", type="string", length=255)
     */
    private $authorFirstName;

    /**
     * @var string
     *
     * @ORM\Column(name="author_surname", type="string", length=255)
     */
    private $authorSurname;

    /**
     * @var string
     *
     * @ORM\Column(name="author_affiliation", type="string", length=255, nullable=true)
     */
    private $authorAffiliation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="author_date_created", type="datetime")
     */
    private $authorDateCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="author_date_modified", type="datetime")
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
     * Set authorDateCreated
     *
     * @param \DateTime $authorDateCreated
     * @return ConfmgrAuthors
     */
    public function setAuthorDateCreated($authorDateCreated)
    {
        $this->authorDateCreated = $authorDateCreated;

        return $this;
    }

    /**
     * Get authorDateCreated
     *
     * @return \DateTime 
     */
    public function getAuthorDateCreated()
    {
        return $this->authorDateCreated;
    }

    /**
     * Set authorDateModified
     *
     * @param \DateTime $authorDateModified
     * @return ConfmgrAuthors
     */
    public function setAuthorDateModified($authorDateModified)
    {
        $this->authorDateModified = $authorDateModified;

        return $this;
    }

    /**
     * Get authorDateModified
     *
     * @return \DateTime 
     */
    public function getAuthorDateModified()
    {
        return $this->authorDateModified;
    }
}
