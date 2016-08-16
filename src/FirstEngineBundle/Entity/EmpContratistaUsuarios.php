<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmpContratistaUsuarios
 *
 * @ORM\Table(name="emp_contratista_usuarios")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\EmpContratistaUsuariosRepository")
 */
class EmpContratistaUsuarios
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="IdEmpresaContratista", type="integer")
     */
    private $idEmpresaContratista;

    /**
     * @var int
     *
     * @ORM\Column(name="IdUsuario", type="integer")
     */
    private $idUsuario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaIngreso", type="datetime")
     */
    private $fechaIngreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaActualizar", type="datetime")
     */
    private $fechaActualizar;
    
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idEmpresaContratista
     *
     * @param integer $idEmpresaContratista
     * @return EmpContratistaUsuarios
     */
    public function setIdEmpresaContratista($idEmpresaContratista)
    {
        $this->idEmpresaContratista = $idEmpresaContratista;

        return $this;
    }

    /**
     * Get idEmpresaContratista
     *
     * @return integer 
     */
    public function getIdEmpresaContratista()
    {
        return $this->idEmpresaContratista;
    }

    /**
     * Set idUsuario
     *
     * @param integer $idUsuario
     * @return EmpContratistaUsuarios
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return integer 
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return EmpContratistaUsuarios
     */
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    /**
     * Get fechaIngreso
     *
     * @return \DateTime 
     */
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }

    /**
     * Set fechaActualizar
     *
     * @param \DateTime $fechaActualizar
     * @return EmpContratistaUsuarios
     */
    public function setFechaActualizar($fechaActualizar)
    {
        $this->fechaActualizar = $fechaActualizar;

        return $this;
    }

    /**
     * Get fechaActualizar
     *
     * @return \DateTime 
     */
    public function getFechaActualizar()
    {
        return $this->fechaActualizar;
    }
}
