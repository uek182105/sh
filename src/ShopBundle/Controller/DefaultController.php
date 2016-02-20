<?php

namespace ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use ShopBundle\Entity\Products;
use ShopBundle\Entity\User;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT DISTINCT a.category, a.name, a.quantity, a.img, a.description FROM ShopBundle:Products a');
        $categories = $query->getResult();
        return $this->render('ShopBundle:Default:index.html.twig', array('categories' => $categories));
    }

}
