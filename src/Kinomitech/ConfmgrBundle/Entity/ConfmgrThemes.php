<?php

namespace Kinomitech\ConfmgrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;

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
     * @ORM\OneToMany(targetEntity="ConfmgrPapers", mappedBy="paperTheme")
     */
    protected $themePapers;

    /**
     * @var datetime
     * 
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $themeDateCreated;

    /**
     * @var datetime
     * 
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    private $themeDateModified;
    
    
    
    public function __construct() {
        $this->themePapers = new ArrayCollection();
    }
    

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
     * Get themeDateCreated
     *
     * @return \DateTime 
     */
    public function getThemeDateCreated()
    {
        return $this->themeDateCreated;
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
