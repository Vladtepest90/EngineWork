<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PasesVehiculos
 *
 * @ORM\Table(name="pases_vehiculos")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\PasesVehiculosRepository")
 */
class PasesVehiculos
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
     * @ORM\Column(name="IdFuncionarioUEP", type="integer")
     */
    private $idFuncionarioUEP;

    /**
     * @var int
     *
     * @ORM\Column(name="IdRegistroVehiculo", type="integer")
     */
    private $idRegistroVehiculo;

    /**
     * @var int
     *
     * @ORM\Column(name="IdAcreditacionVehiculos", type="integer")
     */
    private $idAcreditacionVehiculos;

    /**
     * @var int
     *
     * @ORM\Column(name="IdServiciosContratados", type="integer")
     */
    private $idServiciosContratados;

    /**
     * @var int
     *
     * @ORM\Column(name="IdEstadoAcreditacion", type="integer")
     */
    private $idEstadoAcreditacion;

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
     * @var \DateTime
     *
     * @ORM\Column(name="FechaVencimiento", type="date")
     */
    private $fechaVencimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="Comentarios", type="string", length=255)
     */
    private $comentarios;


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
     * Set idFuncionarioUEP
     *
     * @param integer $idFuncionarioUEP
     * @return PasesVehiculos
     */
    public function setIdFuncionarioUEP($idFuncionarioUEP)
    {
        $this->idFuncionarioUEP = $idFuncionarioUEP;

        return $this;
    }

    /**
     * Get idFuncionarioUEP
     *
     * @return integer 
     */
    public function getIdFuncionarioUEP()
    {
        return $this->idFuncionarioUEP;
    }

    /**
     * Set idRegistroVehiculo
     *
     * @param integer $idRegistroVehiculo
     * @return PasesVehiculos
     */
    public function setIdRegistroVehiculo($idRegistroVehiculo)
    {
        $this->idRegistroVehiculo = $idRegistroVehiculo;

        return $this;
    }

    /**
     * Get idRegistroVehiculo
     *
     * @return integer 
     */
    public function getIdRegistroVehiculo()
    {
        return $this->idRegistroVehiculo;
    }

    /**
     * Set idAcreditacionVehiculos
     *
     * @param integer $idAcreditacionVehiculos
     * @return PasesVehiculos
     */
    public function setIdAcreditacionVehiculos($idAcreditacionVehiculos)
    {
        $this->idAcreditacionVehiculos = $idAcreditacionVehiculos;

        return $this;
    }

    /**
     * Get idAcreditacionVehiculos
     *
     * @return integer 
     */
    public function getIdAcreditacionVehiculos()
    {
        return $this->idAcreditacionVehiculos;
    }

    /**
     * Set idServiciosContratados
     *
     * @param integer $idServiciosContratados
     * @return PasesVehiculos
     */
    public function setIdServiciosContratados($idServiciosContratados)
    {
        $this->idServiciosContratados = $idServiciosContratados;

        return $this;
    }

    /**
     * Get idServiciosContratados
     *
     * @return integer 
     */
    public function getIdServiciosContratados()
    {
        return $this->idServiciosContratados;
    }

    /**
     * Set idEstadoAcreditacion
     *
     * @param integer $idEstadoAcreditacion
     * @return PasesVehiculos
     */
    public function setIdEstadoAcreditacion($idEstadoAcreditacion)
    {
        $this->idEstadoAcreditacion = $idEstadoAcreditacion;

        return $this;
    }

    /**
     * Get idEstadoAcreditacion
     *
     * @return integer 
     */
    public function getIdEstadoAcreditacion()
    {
        return $this->idEstadoAcreditacion;
    }

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return PasesVehiculos
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
     * @return PasesVehiculos
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

    /**
     * Set fechaVencimiento
     *
     * @param \DateTime $fechaVencimiento
     * @return PasesVehiculos
     */
    public function setFechaVencimiento($fechaVencimiento)
    {
        $this->fechaVencimiento = $fechaVencimiento;

        return $this;
    }

    /**
     * Get fechaVencimiento
     *
     * @return \DateTime 
     */
    public function getFechaVencimiento()
    {
        return $this->fechaVencimiento;
    }

    /**
     * Set comentarios
     *
     * @param string $comentarios
     * @return PasesVehiculos
     */
    public function setComentarios($comentarios)
    {
        $this->comentarios = $comentarios;

        return $this;
    }

    /**
     * Get comentarios
     *
     * @return string 
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }
}
