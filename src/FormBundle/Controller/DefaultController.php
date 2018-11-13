<?php

namespace FormBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('@Form/default/index.html.twig');
    }

    /**
     * @Route("/home", name="home")
     */
    public function home()
    {
        return $this->render('@Form/default/home.html.twig');
    }

    /**
     * @Route("/about", name="about")
     */
    public function about()
    {
        return $this->render('@Form/default/about.html.twig');
    }

    /**
     * @Route("/formation", name="formation")
     */
    public function formation()
    {
        return $this->render('@Form/default/formation.html.twig');
    }

    /**
     * @Route("/soft", name="soft")
     */
    public function soft()
    {
        return $this->render('@Form/default/soft.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('@Form/default/contact.html.twig');
    }
}
