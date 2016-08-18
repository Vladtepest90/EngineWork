<?php

namespace FirstEngineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FirstEngineBundle\Entity\EmpresaPrincipal;

class EprincipalController extends Controller
{
	public function indexAction(){
		$repository = $this->getDoctrine()->getRepository('FirstEngineBundle:EmpresaPrincipal');
		$eprincipal = $repository->findAll();
		
		return $this->render("FirstEngineBundle:Default:eprincipal.html.twig", array('eprincipal' => $eprincipal));
	}
	public function insertAction(){
		$eprincipal = new EmpresaPrincipal();
		
		//aquí se llama a los campos, o puedes utilizar el request handler, 
		//para generar la lógica del controller
		
		
		$em = $this->getDoctrine()->getManager();
		$em->persist($eprincipal);
		$em->flush(); //con esta sentencia se realiza el insert.
		
	}
	public function editAction($id,$nombre,$rut,$codigosii, $rubro, $dircomer){
		
		$em = $this->getDoctrine()->getManager();
		
		$eprincipal = $em->getRepository('FirstEngineBundle:EmpresaPrincipal')->find($id);
		
		$eprincipal->setNombre($nombre);
		$eprincipal->setRut($rut);
		$eprincipal->setCodigoSII($codigosii);
		$eprincipal->setRubro($rubro);
		$eprincipal->setDireccionComercial($dircomer);
		
		
		//guarda los cambios o update en la tabla.
		$em->flush();
	}
	
	public function removeAction($id){
		$em = $this->getDoctrine()->getManager();
		
		$eprincipal = $em->getRepository('FirstEngineBundle:EmpresaPrincipal')->find($id);
		
		$em->remove($eprincipal);
		
		//remueve la fila de la tabla
		$em->flush();
	}
}
