<?php

namespace FormBundle\Controller;


use FormBundle\Entity\person;
use FormBundle\Form\personType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class securityController extends Controller
{

    /**
     * @Route("/inscription",name="security")
     */
    public function registration(request $request)
    {


        $usr=new person();
        $form=$this->createForm(personType::class,$usr);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid())  /* si le formulaire est bien soumis et elle est valide*/
        {

          // $hash=$encoder->encodePassword($usr, $usr->getPsw());

            if($usr->getRoles()==true) {
                $usr->setRoles("Client");
            }
            elseif($usr->getRoles()==null){
                $usr->setRoles("Formateur");
            }


            $manager=$this->getDoctrine()->getManager();

            $manager->persist($usr);                    /*remplir l'entité person deja crée avec les valeurs passées en formulaire*/

            $manager->flush();                       /*va ajouter dans la base*/

   return $this->redirectToRoute('security_login');
        }

        return $this->render('@Form/default/security.html.twig',[
            'form'=>$form->createView()
        ]);
    }






    /**
     * @Route("/connexion",name="security_login")
     */
    public function login()
    {
        return $this->render("@Form/default/login.html.twig");

    }

    /**
     * @Route("/deconnexion",name="security_logout")
     */
    public function logout()
    {


    }
}
