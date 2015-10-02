<?php

namespace Th3Mouk\PlanningBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('Th3MoukPlanningBundle:Default:index.html.twig', array('name' => $name));
    }
}
