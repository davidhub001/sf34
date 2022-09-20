<?php

namespace TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
// use TestBundle\Entity\table1 ;
/**
 * table2
 *
 * @ORM\Table(name="table2")
 * @ORM\Entity(repositoryClass="TestBundle\Repository\table2Repository")
 */
class table2
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

     /**
     * @var string
     *
     * @ORM\Column(name="nom2", type="string", length=255)
     */
    private $nom2;

    /**
     * @var string
     *
     * @ORM\Column(name="t1", type="string", length=255)
     */
    private $t1;

    /**
     * @var int
     *
     * @ORM\OneToOne(targetEntity="TestBundle\Entity\table1",cascade={"persist"})
     */
    private $id_t1;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return table2
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set t1
     *
     * @param string $t1
     *
     * @return table2
     */
    public function setT1($t1)
    {
        $this->t1 = $t1;

        return $this;
    }

    /**
     * Get t1
     *
     * @return string
     */
    public function getT1()
    {
        return $this->t1;
    }

    /**
     * Set nom2
     *
     * @param string $nom2
     *
     * @return table2
     */
    public function setNom2($nom2)
    {
        $this->nom2 = $nom2;

        return $this;
    }

    /**
     * Get nom2
     *
     * @return string
     */
    public function getNom2()
    {
        return $this->nom2;
    }

    /**
     * Set idT1
     *
     * @param \TestBundle\Entity\table1 $idT1
     *
     * @return table2
     */
    public function setIdT1( \TestBundle\Entity\table1 $idT1 = null)
    {
        $this->id_t1 = $idT1;

        return $this;
    }

    /**
     * Get idT1
     *
     * @return \TestBundle\Entity\table1
     */
    public function getIdT1()
    {
        return $this->id_t1;
    }
}
