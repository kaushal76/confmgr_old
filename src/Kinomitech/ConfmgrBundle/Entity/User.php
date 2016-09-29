<?php
namespace Kinomitech\ConfmgrBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;


/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var userPapers the papers owned by the user
     * 
     * @ORM\OneToMany(targetEntity="ConfmgrPapers", mappedBy="Owner")
     */
    private $userPapers;
    
     /**
     * @var datetime
     * 
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $userDateCreated;

    /**
     * @var datetime
     * 
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    private $userDateModified;
    
    

    public function __construct()
    {
        parent::__construct();
        $this->userPapers = new ArrayCollection();
    }

    /**
     * Add userPapers
     *
     * @param \Kinomitech\ConfmgrBundle\Entity\ConfmgrPapers $userPapers
     * @return User
     */
    public function addUserPaper(\Kinomitech\ConfmgrBundle\Entity\ConfmgrPapers $userPapers)
    {
        $this->userPapers[] = $userPapers;

        return $this;
    }

    /**
     * Remove userPapers
     *
     * @param \Kinomitech\ConfmgrBundle\Entity\ConfmgrPapers $userPapers
     */
    public function removeUserPaper(\Kinomitech\ConfmgrBundle\Entity\ConfmgrPapers $userPapers)
    {
        $this->userPapers->removeElement($userPapers);
    }

    /**
     * Get userPapers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserPapers()
    {
        return $this->userPapers;
    }
    
       /**
     * Get themeDateCreated
     *
     * @return \DateTime 
     */
    public function getUserDateCreated()
    {
        return $this->userDateCreated;
    }

    /**
     * Get themeDateModified
     *
     * @return \DateTime 
     */
    public function getUserDateModified()
    {
        return $this->userDateModified;
    }
}
