<?php

namespace Kinomitech\ConfmgrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConfmgrFullPaperFiles
 *
 * @ORM\Table(name="confmgr_full_paper_files")
 * @ORM\Entity(repositoryClass="Kinomitech\ConfmgrBundle\Repository\ConfmgrFullPaperFilesRepository")
 */
class ConfmgrFullPaperFiles
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
     * @ORM\Column(name="fp_file_purpose", type="string", length=255)
     */
    private $fpFilePurpose;

    /**
     * @var string
     *
     * @ORM\Column(name="fp_file_upload", type="string", length=255)
     */
    private $fpFileUpload;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fp_file_date_created", type="datetime")
     */
    private $fpFileDateCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fp_file_date_modified", type="datetime")
     */
    private $fpFileDateModified;


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
     * Set fpFilePurpose
     *
     * @param string $fpFilePurpose
     * @return ConfmgrFullPaperFiles
     */
    public function setFpFilePurpose($fpFilePurpose)
    {
        $this->fpFilePurpose = $fpFilePurpose;

        return $this;
    }

    /**
     * Get fpFilePurpose
     *
     * @return string 
     */
    public function getFpFilePurpose()
    {
        return $this->fpFilePurpose;
    }

    /**
     * Set fpFileUpload
     *
     * @param string $fpFileUpload
     * @return ConfmgrFullPaperFiles
     */
    public function setFpFileUpload($fpFileUpload)
    {
        $this->fpFileUpload = $fpFileUpload;

        return $this;
    }

    /**
     * Get fpFileUpload
     *
     * @return string 
     */
    public function getFpFileUpload()
    {
        return $this->fpFileUpload;
    }

    /**
     * Set fpFileDateCreated
     *
     * @param \DateTime $fpFileDateCreated
     * @return ConfmgrFullPaperFiles
     */
    public function setFpFileDateCreated($fpFileDateCreated)
    {
        $this->fpFileDateCreated = $fpFileDateCreated;

        return $this;
    }

    /**
     * Get fpFileDateCreated
     *
     * @return \DateTime 
     */
    public function getFpFileDateCreated()
    {
        return $this->fpFileDateCreated;
    }

    /**
     * Set fpFileDateModified
     *
     * @param \DateTime $fpFileDateModified
     * @return ConfmgrFullPaperFiles
     */
    public function setFpFileDateModified($fpFileDateModified)
    {
        $this->fpFileDateModified = $fpFileDateModified;

        return $this;
    }

    /**
     * Get fpFileDateModified
     *
     * @return \DateTime 
     */
    public function getFpFileDateModified()
    {
        return $this->fpFileDateModified;
    }
}
