<?php

namespace Kinomitech\ConfmgrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @var \DateTime
     *
     * @ORM\Column(name="camera_date_created", type="datetime")
     */
    private $cameraDateCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="camera_date_modified", type="datetime")
     */
    private $cameraDateModified;


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
     * Set cameraDateCreated
     *
     * @param \DateTime $cameraDateCreated
     * @return ConfmgrCameraReadyPapers
     */
    public function setCameraDateCreated($cameraDateCreated)
    {
        $this->cameraDateCreated = $cameraDateCreated;

        return $this;
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
     * Set cameraDateModified
     *
     * @param \DateTime $cameraDateModified
     * @return ConfmgrCameraReadyPapers
     */
    public function setCameraDateModified($cameraDateModified)
    {
        $this->cameraDateModified = $cameraDateModified;

        return $this;
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
