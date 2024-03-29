<?php

namespace Kinomitech\ConfmgrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * ConfmgrPapers
 *
 * @ORM\Table(name="confmgr_papers")
 * @ORM\Entity(repositoryClass="Kinomitech\ConfmgrBundle\Repository\ConfmgrPapersRepository")
 */
class ConfmgrPapers
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
     * @ORM\Column(name="paper_title", type="string", length=255)
     */
    private $paperTitle;

    /**
     * PaperOwner the owner this paper belongs to
     * 
     * @ORM\ManyToOne(targetEntity="User", inversedBy="userPapers")
     * 
     */
    private $Owner;

    /**
     * paperAbstracts the abstracts for the paper
     * 
     * @ORM\OneToMany(targetEntity="ConfmgrAbstracts", mappedBy="abstractPaper")
     */
    private $paperAbstracts;
    
    /**
     * @ORM\OneToMany(targetEntity="ConfmgrAuthorPaper", mappedBy="apPaper", cascade={"persist"})
     * 
     */
    private $paperAuthorAssociations;

    /**
     * @return mixed
     */
    public function getPaperAuthorAssociations()
    {
        return $this->paperAuthorAssociations;
    }

    /**
     * paperFullPapers the full paper for this paper
     * 
     * @ORM\OneToMany(targetEntity="ConfmgrFullPapers", mappedBy="fullPaper")
     */
    private $paperFullPapers;

    /**
     * paperCameraReadyPapers the camera ready paper for this paper
     * 
     * @ORM\OneToMany(targetEntity="ConfmgrCameraReadyPapers", mappedBy="cameraPaper")
     */
    private $paperCameraReadyPapers;
    
    /**
     * PaperTheme the theme this paper belongs
     * 
     * @ORM\ManyToOne(targetEntity="ConfmgrThemes", inversedBy="themePapers")
     * @ORM\JoinColumn(name="paper_theme_id", referencedColumnName="id")
     */
    private $paperTheme;
    
    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $paperDateCreated;

    /**
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    private $paperDateModified;
    
     /**
     * @Gedmo\Blameable(on="create")
     * @ORM\Column(type="string")
     */
    private $paperCreatedBy;
    /**
     * @Gedmo\Blameable(on="update")
     * @ORM\Column(type="string")
     */
    private $paperUpdatedBy;


    public function __construct() {
        $this->paperAbstracts = new ArrayCollection();
        $this->paperFullPapers = new ArrayCollection();
        $this->paperCameraReadyPapers = new ArrayCollection();
        $this->paperAuthorAssociations = new ArrayCollection();
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
     * Set paperTitle
     *
     * @param string $paperTitle
     * @return ConfmgrPapers
     */
    public function setPaperTitle($paperTitle)
    {
        $this->paperTitle = $paperTitle;

        return $this;
    }

    /**
     * Get paperTitle
     *
     * @return string 
     */
    public function getPaperTitle()
    {
        return $this->paperTitle;
    }
   
    /**
     * Get paperTheme
     *
     * @return PaperTheme
     */
    public function getPaperTheme()
    {
        return $this->paperTheme;
    }


    /**
     * Get paperDateCreated
     *
     * @return \DateTime 
     */
    public function getPaperDateCreated()
    {
        return $this->paperDateCreated;
    }


    /**
     * Get paperDateModified
     *
     * @return \DateTime 
     */
    public function getPaperDateModified()
    {
        return $this->paperDateModified;
    }

    /**
     * Add paperAbstracts
     *
     * @param \Kinomitech\ConfmgrBundle\Entity\ConfmgrAbstracts $paperAbstracts
     * @return ConfmgrPapers
     */
    public function addPaperAbstract(\Kinomitech\ConfmgrBundle\Entity\ConfmgrAbstracts $paperAbstracts)
    {
        $this->paperAbstracts[] = $paperAbstracts;

        return $this;
    }

    /**
     * Remove paperAbstracts
     *
     * @param \Kinomitech\ConfmgrBundle\Entity\ConfmgrAbstracts $paperAbstracts
     */
    public function removePaperAbstract(\Kinomitech\ConfmgrBundle\Entity\ConfmgrAbstracts $paperAbstracts)
    {
        $this->paperAbstracts->removeElement($paperAbstracts);
    }

    /**
     * Get paperAbstracts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPaperAbstracts()
    {
        return $this->paperAbstracts;
    }

    /**
     * Add paperFullPapers
     *
     * @param \Kinomitech\ConfmgrBundle\Entity\ConfmgrFullPapers $paperFullPapers
     * @return ConfmgrPapers
     */
    public function addPaperFullPaper(\Kinomitech\ConfmgrBundle\Entity\ConfmgrFullPapers $paperFullPapers)
    {
        $this->paperFullPapers[] = $paperFullPapers;

        return $this;
    }

    /**
     * Remove paperFullPapers
     *
     * @param \Kinomitech\ConfmgrBundle\Entity\ConfmgrFullPapers $paperFullPapers
     */
    public function removePaperFullPaper(\Kinomitech\ConfmgrBundle\Entity\ConfmgrFullPapers $paperFullPapers)
    {
        $this->paperFullPapers->removeElement($paperFullPapers);
    }

    /**
     * Get paperFullPapers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPaperFullPapers()
    {
        return $this->paperFullPapers;
    }

    /**
     * Add paperCameraReadyPapers
     *
     * @param \Kinomitech\ConfmgrBundle\Entity\ConfmgrCameraReadyPapers $paperCameraReadyPapers
     * @return ConfmgrPapers
     */
    public function addPaperCameraReadyPaper(\Kinomitech\ConfmgrBundle\Entity\ConfmgrCameraReadyPapers $paperCameraReadyPapers)
    {
        $this->paperCameraReadyPapers[] = $paperCameraReadyPapers;

        return $this;
    }

    /**
     * Remove paperCameraReadyPapers
     *
     * @param \Kinomitech\ConfmgrBundle\Entity\ConfmgrCameraReadyPapers $paperCameraReadyPapers
     */
    public function removePaperCameraReadyPaper(\Kinomitech\ConfmgrBundle\Entity\ConfmgrCameraReadyPapers $paperCameraReadyPapers)
    {
        $this->paperCameraReadyPapers->removeElement($paperCameraReadyPapers);
    }

    /**
     * Get paperCameraReadyPapers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPaperCameraReadyPapers()
    {
        return $this->paperCameraReadyPapers;
    }

    /**
     * Set paperTheme
     *
     * @param \Kinomitech\ConfmgrBundle\Entity\ConfmgrThemes $paperTheme
     * @return ConfmgrPapers
     */
    public function setPaperTheme(\Kinomitech\ConfmgrBundle\Entity\ConfmgrThemes $paperTheme = null)
    {
        $this->paperTheme = $paperTheme;

        return $this;
    }
    
    public function __toString()
    {
        return (string) $this->getPaperTitle();
    }
    

    /**
     * Add paperAuthorAssociation
     *
     * @param \Kinomitech\ConfmgrBundle\Entity\ConfmgrAuthorPaper $paperAuthorAssociations
     * @return ConfmgrPapers
     */
    public function addPaperAuthorAssociations(\Kinomitech\ConfmgrBundle\Entity\ConfmgrAuthorPaper $paperAuthorAssociations)
    {
        $this->paperAuthorAssociations[] = $paperAuthorAssociations;

        return $this;
    }

    /**
     * Remove paperAuthorAssociations
     *
     * @param \Kinomitech\ConfmgrBundle\Entity\ConfmgrAuthorPaper $paperAuthorAssociation
     */
    public function removePaperAuthorAssociations(\Kinomitech\ConfmgrBundle\Entity\ConfmgrAuthorPaper $paperAuthorAssociations)
    {
        $this->paperAuthorAssociations->removeElement($paperAuthorAssociations);
    }

    /**
     * @param mixed $paperAuthorAssociations
     */
    public function setPaperAuthorAssociations($paperAuthorAssociations)
    {
        $this->paperAuthorAssociations = $paperAuthorAssociations;
    }

    /**
     * Set Owner
     *
     * @param \Kinomitech\ConfmgrBundle\Entity\User $owner
     * @return ConfmgrPapers
     */
    public function setOwner(\Kinomitech\ConfmgrBundle\Entity\User $owner = null)
    {
        $this->Owner = $owner;

        return $this;
    }

    /**
     * Get Owner
     *
     * @return \Kinomitech\ConfmgrBundle\Entity\User
     */
    public function getOwner()
    {
        return $this->Owner;
    }
    
    
    /**
     * Get createdBy
     *
     *
     */
    public function getPaperCreatedBy()
    {
        return $this->paperCreatedBy;
    }
    
    /**
     * Get updatedBy
     *
     *
     */
    public function getPaperUpdatedBy()
    {
        return $this->paperUpdatedBy;
    } 
            
    
}
