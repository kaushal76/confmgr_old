<?php

namespace Kinomitech\ConfmgrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @var \DateTime
     *
     * @ORM\Column(name="cr_file_date_created", type="datetime")
     */
    private $crFileDateCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cr_file_date_modified", type="datetime")
     */
    private $crFileDateModified;


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
     * Set crFileDateCreated
     *
     * @param \DateTime $crFileDateCreated
     * @return ConfmgrCameraReadyFiles
     */
    public function setCrFileDateCreated($crFileDateCreated)
    {
        $this->crFileDateCreated = $crFileDateCreated;

        return $this;
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
     * Set crFileDateModified
     *
     * @param \DateTime $crFileDateModified
     * @return ConfmgrCameraReadyFiles
     */
    public function setCrFileDateModified($crFileDateModified)
    {
        $this->crFileDateModified = $crFileDateModified;

        return $this;
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
