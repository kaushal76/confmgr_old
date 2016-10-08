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
     * userPapers the papers owned by the user
     * 
     * @ORM\OneToMany(targetEntity="ConfmgrPapers", mappedBy="Owner")
     */
    private $userPapers;
    
     /**
     *
     * 
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $userDateCreated;

    /**
     *
     * 
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    private $userDateModified;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $userFirstName;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=255)
     */
    private $userSurname;

    /**
     * @var string
     *
     * @ORM\Column(name="affiliation", type="string", length=255)
     */
    private $userAffiliation;

    public function __construct()
    {
        parent::__construct();
        $this->userPapers = new ArrayCollection();
    }

    /**
     * @return string
     */
    public function getUserFirstName()
    {
        return $this->userFirstName;
    }

    /**
     * @param string $userFirstName
     */
    public function setUserFirstName($userFirstName)
    {
        $this->userFirstName = $userFirstName;
    }

    /**
     * @return string
     */
    public function getUserSurname()
    {
        return $this->userSurname;
    }

    /**
     * @param string $userSurname
     */
    public function setUserSurname($userSurname)
    {
        $this->userSurname = $userSurname;
    }

    /**
     * @return string
     */
    public function getUserAffiliation()
    {
        return $this->userAffiliation;
    }

    /**
     * @param string $userAffiliation
     */
    public function setUserAffiliation($userAffiliation)
    {
        $this->userAffiliation = $userAffiliation;
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
     * @return \datetime
     */
    public function getUserDateCreated()
    {
        return $this->userDateCreated;
    }

    /**
     * Get themeDateModified
     *
     * @return \datetime
     */
    public function getUserDateModified()
    {
        return $this->userDateModified;
    }
}
