<?php

namespace Kinomitech\ConfmgrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * ConfmgrCameraReadyPapers
 *
 * @ORM\Table(name="confmgr_camera_ready_papers")
 * @ORM\Entity(repositoryClass="Kinomitech\ConfmgrBundle\Repository\ConfmgrCameraReadyPapersRepository")
 */
class ConfmgrCameraReadyPapers
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
     * @var int
     *
     * @ORM\Column(name="camera_approval", type="integer", nullable=true)
     */
    private $cameraApproval;

   /**
     * @var datetime
     * 
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $cameraDateCreated;

   /**
     * @var datetime
     * 
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    private $cameraDateModified;
    
     /**
     * @var cameraPaper the paper this camera paper attached to
     * 
     * @ORM\ManyToOne(targetEntity="ConfmgrPapers", inversedBy="paperCameraReadyPapers")
     * @ORM\JoinColumn(name="camera_paper_id", referencedColumnName="id")
     */
    private $cameraPaper;
    
    /**
     * @var cameraFiles the files for the camera ready paper
     * 
     * @ORM\OneToMany(targetEntity="ConfmgrCameraReadyFiles", mappedBy="crFileCameraPaper")
     */
    private $cameraFiles;


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
     * Set cameraApproval
     *
     * @param integer $cameraApproval
     * @return ConfmgrCameraReadyPapers
     */
    public function setCameraApproval($cameraApproval)
    {
        $this->cameraApproval = $cameraApproval;

        return $this;
    }

    /**
     * Get cameraApproval
     *
     * @return integer 
     */
    public function getCameraApproval()
    {
        return $this->cameraApproval;
    }

    /**
     * Get cameraDateCreated
     *
     * @return \DateTime 
     */
    public function getCameraDateCreated()
    {
        return $this->cameraDateCreated;
    }

    /**
     * Get cameraDateModified
     *
     * @return \DateTime 
     */
    public function getCameraDateModified()
    {
        return $this->cameraDateModified;
    }
}
