<?php

namespace Kinomitech\ConfmgrBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('KinomitechConfmgrBundle:Default:index.html.twig');
    }
    
    /**
     * @Route("/{name}/{count}")
     */
    public function GreetingAction($name, $count)
    {
        return $this->render('KinomitechConfmgrBundle:Default:greeting.html.twig', array('name'=>$name, 'count'=>$count));
    }
}
