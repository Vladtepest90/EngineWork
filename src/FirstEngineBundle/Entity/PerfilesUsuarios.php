<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PerfilesUsuarios
 *
 * @ORM\Table(name="perfiles_usuarios")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\PerfilesUsuariosRepository")
 */
class PerfilesUsuarios
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
     * @var string
     *
     * @ORM\Column(name="Codigo", type="string", length=255)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaINgreso", type="datetime")
     */
    private $fechaINgreso;

    /**
     * @var string
     *
     * @ORM\Column(name="FechaActualizar", type="string", length=255)
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
     * Set codigo
     *
     * @param string $codigo
     * @return PerfilesUsuarios
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return PerfilesUsuarios
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set fechaINgreso
     *
     * @param \DateTime $fechaINgreso
     * @return PerfilesUsuarios
     */
    public function setFechaINgreso($fechaINgreso)
    {
        $this->fechaINgreso = $fechaINgreso;

        return $this;
    }

    /**
     * Get fechaINgreso
     *
     * @return \DateTime 
     */
    public function getFechaINgreso()
    {
        return $this->fechaINgreso;
    }

    /**
     * Set fechaActualizar
     *
     * @param string $fechaActualizar
     * @return PerfilesUsuarios
     */
    public function setFechaActualizar($fechaActualizar)
    {
        $this->fechaActualizar = $fechaActualizar;

        return $this;
    }

    /**
     * Get fechaActualizar
     *
     * @return string 
     */
    public function getFechaActualizar()
    {
        return $this->fechaActualizar;
    }
}
