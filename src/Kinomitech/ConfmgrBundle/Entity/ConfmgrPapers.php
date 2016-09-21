<?php

namespace Kinomitech\ConfmgrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(name="paper_title", type="string", length=255, nullable=true)
     */
    private $paperTitle;

    /**
     * @var int
     *
     * @ORM\Column(name="paper_owner", type="integer")
     */
    private $paperOwner;

    /**
     * @var int
     *
     * @ORM\Column(name="paper_abstract", type="integer", nullable=true)
     */
    private $paperAbstract;

    /**
     * @var int
     *
     * @ORM\Column(name="paper_full_paper", type="integer", nullable=true)
     */
    private $paperFullPaper;

    /**
     * @var int
     *
     * @ORM\Column(name="paper_camera_ready", type="integer", nullable=true)
     */
    private $paperCameraReady;
    
    /**
     * @var int
     *
     * @ORM\Column(name="paper_theme", type="integer")
     */
    private $paperTheme;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="paper_date_created", type="datetime", nullable=true)
     */
    private $paperDateCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="paper_date_modified", type="datetime", nullable=true)
     */
    private $paperDateModified;
    

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
     * Set paperOwner
     *
     * @param integer $paperOwner
     * @return ConfmgrPapers
     */
    public function setPaperOwner($paperOwner)
    {
        $this->paperOwner = $paperOwner;

        return $this;
    }

    /**
     * Get paperOwner
     *
     * @return integer 
     */
    public function getPaperOwner()
    {
        return $this->paperOwner;
    }

    /**
     * Set paperAbstract
     *
     * @param integer $paperAbstract
     * @return ConfmgrPapers
     */
    public function setPaperAbstract($paperAbstract)
    {
        $this->paperAbstract = $paperAbstract;

        return $this;
    }

    /**
     * Get paperAbstract
     *
     * @return integer 
     */
    public function getPaperAbstract()
    {
        return $this->paperAbstract;
    }

    /**
     * Set paperFullPaper
     *
     * @param integer $paperFullPaper
     * @return ConfmgrPapers
     */
    public function setPaperFullPaper($paperFullPaper)
    {
        $this->paperFullPaper = $paperFullPaper;

        return $this;
    }

    /**
     * Get paperFullPaper
     *
     * @return integer 
     */
    public function getPaperFullPaper()
    {
        return $this->paperFullPaper;
    }

    /**
     * Set paperCameraReady
     *
     * @param integer $paperCameraReady
     * @return ConfmgrPapers
     */
    public function setPaperCameraReady($paperCameraReady)
    {
        $this->paperCameraReady = $paperCameraReady;

        return $this;
    }

    /**
     * Get paperCameraReady
     *
     * @return integer 
     */
    public function getPaperCameraReady()
    {
        return $this->paperCameraReady;
    }
    
    /**
     * Get paperTheme
     *
     * @return integer 
     */
    public function getPaperTheme()
    {
        return $this->paperTheme;
    }

    /**
     * Set paperDateCreated
     *
     * @param \DateTime $paperDateCreated
     * @return ConfmgrPapers
     */
    public function setPaperDateCreated($paperDateCreated)
    {
        $this->paperDateCreated = $paperDateCreated;

        return $this;
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
     * Set paperDateModified
     *
     * @param \DateTime $paperDateModified
     * @return ConfmgrPapers
     */
    public function setPaperDateModified($paperDateModified)
    {
        $this->paperDateModified = $paperDateModified;

        return $this;
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
}
