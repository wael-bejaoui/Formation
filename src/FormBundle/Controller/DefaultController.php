<?php

namespace FormBundle\Controller;

use FormBundle\Entity\person;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     *@Route("/", name="homepage")
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

    /**
     * @Route("/delete/{id}", name="delete")
     */
    public function delete($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(person::class)->find($id);
        $em->remove($user);
        $em->flush();
        return $this->redirectToRoute('dashboard');

    }

    /**
     * @Route("/view/{id}", name="view")
     */
    public function view($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(person::class)->find($id);
        return $this->render('@Form/default/view.html.twig',[

            'user'=>$user
        ]);

    }


    /**
     * @Route("/edit", name="edit")
     */
    public function edit($login)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(person::class)->find($login);

        if (!$login) {
            throw $this->createNotFoundException(
                'No product found for id '.$login
            );
        }

        $user->setLogin('New product name!');
        $em->flush();

        return $this->redirectToRoute('dashboard');
    }



    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function dashboard()
    {
        $em= $this->getDoctrine()->getManager();
        $users=$em->getRepository('FormBundle:person')->findAll();
        return $this->render('@Form/default/dashboard.html.twig',[

            'users'=>$users
        ]);
    }
}
