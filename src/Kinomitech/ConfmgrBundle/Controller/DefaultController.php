<?php

namespace Kinomitech\ConfmgrBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     *
     */
    public function indexAction()
    {
        return $this->render('KinomitechConfmgrBundle:Default:index.html.twig');
    }
    
    /**
     *
     */
    public function GreetingAction($name, $count)
    {
        return $this->render('KinomitechConfmgrBundle:Default:greeting.html.twig', array('name'=>$name, 'count'=>$count));
    }
}
