<?php

namespace Kinomitech\ConfmgrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * ConfmgrCameraReadyFiles
 *
 * @ORM\Table(name="confmgr_camera_ready_files")
 * @ORM\Entity(repositoryClass="Kinomitech\ConfmgrBundle\Repository\ConfmgrCameraReadyFilesRepository")
 */
class ConfmgrCameraReadyFiles
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
     * @ORM\Column(name="cr_file_purpose", type="string", length=255)
     */
    private $crFilePurpose;

    /**
     * @var string
     *
     * @ORM\Column(name="cr_file_upload", type="string", length=255)
     */
    private $crFileUpload;

    /**
     * @var datetime
     * 
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $crFileDateCreated;

    /**
     * @var datetime
     * 
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    private $crFileDateModified;
    
    /**
     * @var crFileCameraPaper the camera ready paper related this files
     * 
     * @ORM\ManyToOne(targetEntity="ConfmgrCameraReadyPapers", inversedBy="cameraFiles")
     * @ORM\JoinColumn(name="cr_file_camera_ready_paper_id", referencedColumnName="id")
     */
    private $crFileCameraPaper;



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
     * Set crFilePurpose
     *
     * @param string $crFilePurpose
     * @return ConfmgrCameraReadyFiles
     */
    public function setCrFilePurpose($crFilePurpose)
    {
        $this->crFilePurpose = $crFilePurpose;

        return $this;
    }

    /**
     * Get crFilePurpose
     *
     * @return string 
     */
    public function getCrFilePurpose()
    {
        return $this->crFilePurpose;
    }

    /**
     * Set crFileUpload
     *
     * @param string $crFileUpload
     * @return ConfmgrCameraReadyFiles
     */
    public function setCrFileUpload($crFileUpload)
    {
        $this->crFileUpload = $crFileUpload;

        return $this;
    }

    /**
     * Get crFileUpload
     *
     * @return string 
     */
    public function getCrFileUpload()
    {
        return $this->crFileUpload;
    }

    /**
     * Get crFileDateCreated
     *
     * @return \DateTime 
     */
    public function getCrFileDateCreated()
    {
        return $this->crFileDateCreated;
    }

    /**
     * Get crFileDateModified
     *
     * @return \DateTime 
     */
    public function getCrFileDateModified()
    {
        return $this->crFileDateModified;
    }
}
