<?php

namespace AdminBundle\Controller;

use AdminBundle\Entity\Colis;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class AdminController extends Controller
{
    /**
     * @Route("/admin2", name="admin2")
     */
    public function indexAction()
    {
        return $this->render('AdminBundle:Default:index.html.twig');
    }
 
    public function getParent()
    {
        return 'FOSUserBundle';
    }

    /**
     * @Route("/coliss", name="coliss")
     */
    public function colisAction()
    {

    $colis = $this->getDoctrine()
        ->getRepository(colis::class)
        ->findAll();

    if (!$colis) {
        throw $this->createNotFoundException(
            'No product found for id '.$productId
        );
    }
   
        return $this->render('AdminBundle:Default:colis.html.twig',array('colis' => $colis));

    }
     
    /**
     * @Route("/colis/delete/{id}", name="delete")
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $colis = $em->getRepository("AdminBundle:Colis")->findOneBy(array('id' => $id));
        
        if ($colis) {
            $em->remove($colis);
            $em->flush();
        }
        return $this->redirect($this->generateUrl('colis'));
        
    }

    /**
     * @Route("/coliss/edit/{id}", name="edit")
     */
    public function editAction($id)
    {
        
       
        $colis = $this->getColisRepository()->find($id);
       
        
    
        return $this->redirect($this->generateUrl('colis'));
    }
    

}