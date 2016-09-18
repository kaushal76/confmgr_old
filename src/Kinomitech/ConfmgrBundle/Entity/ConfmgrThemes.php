<?php

namespace Kinomitech\ConfmgrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConfmgrThemes
 *
 * @ORM\Table(name="confmgr_themes")
 * @ORM\Entity(repositoryClass="Kinomitech\ConfmgrBundle\Repository\ConfmgrThemesRepository")
 */
class ConfmgrThemes
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
     * @ORM\Column(name="theme_title", type="string", length=255)
     */
    private $themeTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="theme_description", type="text")
     */
    private $themeDescription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="theme_date_created", type="datetime")
     */
    private $themeDateCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="theme_date_modified", type="datetime")
     */
    private $themeDateModified;


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
     * Set themeTitle
     *
     * @param string $themeTitle
     * @return ConfmgrThemes
     */
    public function setThemeTitle($themeTitle)
    {
        $this->themeTitle = $themeTitle;

        return $this;
    }

    /**
     * Get themeTitle
     *
     * @return string 
     */
    public function getThemeTitle()
    {
        return $this->themeTitle;
    }

    /**
     * Set themeDescription
     *
     * @param string $themeDescription
     * @return ConfmgrThemes
     */
    public function setThemeDescription($themeDescription)
    {
        $this->themeDescription = $themeDescription;

        return $this;
    }

    /**
     * Get themeDescription
     *
     * @return string 
     */
    public function getThemeDescription()
    {
        return $this->themeDescription;
    }

    /**
     * Set themeDateCreated
     *
     * @param \DateTime $themeDateCreated
     * @return ConfmgrThemes
     */
    public function setThemeDateCreated($themeDateCreated)
    {
        $this->themeDateCreated = $themeDateCreated;

        return $this;
    }

    /**
     * Get themeDateCreated
     *
     * @return \DateTime 
     */
    public function getThemeDateCreated()
    {
        return $this->themeDateCreated;
    }

    /**
     * Set themeDateModified
     *
     * @param \DateTime $themeDateModified
     * @return ConfmgrThemes
     */
    public function setThemeDateModified($themeDateModified)
    {
        $this->themeDateModified = $themeDateModified;

        return $this;
    }

    /**
     * Get themeDateModified
     *
     * @return \DateTime 
     */
    public function getThemeDateModified()
    {
        return $this->themeDateModified;
    }
}
