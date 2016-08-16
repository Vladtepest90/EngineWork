<?php
namespace FirstEngineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use FirstEngineBundle\Entity\Personas;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class AccessController extends Controller
{
	
	/**
	 * @Method()("/")
	 */
	
	public function loginAction($usuario, $pass)
	{
		return new Response("<html><body>Prueba de login usuario:".$usuario."".$pass."</body></html>");
	}
	
	public function addpersonaAction($nombres, $apellidos, $sexo)
	{
		$persona = new Personas();
		$persona->setNombres($nombres);
		$persona->setApellidos($apellidos);
		$persona->setSexo($sexo);

	
		
		$em = $this->getDoctrine()->getManager();
		$em->persist($persona);
		$em->flush();
		
		return new Response(
				'Id persona:' .$persona->getId().'/ Nombres:'.$persona->getNombres().' '
		);
		
	}
}
