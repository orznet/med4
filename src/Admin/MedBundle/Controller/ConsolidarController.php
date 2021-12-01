<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Admin\MedBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


/**
 * Base controller
 * @Route("/admin/panel")
 */
class ConsolidarController extends Controller {
   
    
     /**
     * Mostrar Home
     * @Route("/", name="admin_consolidar_index")
     * @Method("GET")
     */
    public function indexAction() {
    return $this->render('Consolidar/index.html.twig');
    } 
    
         /**
     * Mostrar Home
     * @Route("/auto", name="consolidar_index")
     * @Method("GET")
     * @Template("Consolidar/result.html.twig")
     */
    public function heterocursosAction() {
        
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $q = "update evaluacion as a
        left join plangestion as p ON a.id = p.docente_id
        left join docente as d ON a.id = d.id
        set a.auto = p.autoevaluacion
        where d.periodo = 20171 and p.autoevaluacion is not null";
        $total = $connection->executeUpdate($q);
        
        return array(
       'result' => $total,
       );
       } 
   
}
