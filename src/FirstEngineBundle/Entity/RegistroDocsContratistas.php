<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RegistroDocsContratistas
 *
 * @ORM\Table(name="registro_docs_contratistas")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\RegistroDocsContratistasRepository")
 */
class RegistroDocsContratistas
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
     * @ORM\Column(name="IdEmpPrincipalDocs", type="integer")
     */
    private $idEmpPrincipalDocs;

    /**
     * @var int
     *
     * @ORM\Column(name="IdSubcontratacionEmpresas", type="integer")
     */
    private $idSubcontratacionEmpresas;

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
     * @var string
     *
     * @ORM\Column(name="NombreArchivo", type="string", length=255)
     */
    private $nombreArchivo;


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
     * Set idEmpPrincipalDocs
     *
     * @param integer $idEmpPrincipalDocs
     * @return RegistroDocsContratistas
     */
    public function setIdEmpPrincipalDocs($idEmpPrincipalDocs)
    {
        $this->idEmpPrincipalDocs = $idEmpPrincipalDocs;

        return $this;
    }

    /**
     * Get idEmpPrincipalDocs
     *
     * @return integer 
     */
    public function getIdEmpPrincipalDocs()
    {
        return $this->idEmpPrincipalDocs;
    }

    /**
     * Set idSubcontratacionEmpresas
     *
     * @param integer $idSubcontratacionEmpresas
     * @return RegistroDocsContratistas
     */
    public function setIdSubcontratacionEmpresas($idSubcontratacionEmpresas)
    {
        $this->idSubcontratacionEmpresas = $idSubcontratacionEmpresas;

        return $this;
    }

    /**
     * Get idSubcontratacionEmpresas
     *
     * @return integer 
     */
    public function getIdSubcontratacionEmpresas()
    {
        return $this->idSubcontratacionEmpresas;
    }

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return RegistroDocsContratistas
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
     * @return RegistroDocsContratistas
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
     * Set nombreArchivo
     *
     * @param string $nombreArchivo
     * @return RegistroDocsContratistas
     */
    public function setNombreArchivo($nombreArchivo)
    {
        $this->nombreArchivo = $nombreArchivo;

        return $this;
    }

    /**
     * Get nombreArchivo
     *
     * @return string 
     */
    public function getNombreArchivo()
    {
        return $this->nombreArchivo;
    }
}
