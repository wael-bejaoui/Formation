<?php

namespace FormBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="FormBundle\Repository\clientRepository")
 */
class client
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=255)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var int
     *
     * @ORM\Column(name="N_carteB", type="integer")
     */
    private $nCarteB;

    /**
     * @var string
     *
     * @ORM\Column(name="interet", type="string", length=255)
     */
    private $interet;

    /**
     * @var string
     *
     * @ORM\Column(name="Profession", type="string", length=255)
     */
    private $profession;

    /**
     * @var string
     *
     * @ORM\Column(name="Etude", type="string", length=255)
     */
    private $etude;

    /**
     * @var string
     *
     * @ORM\Column(name="University", type="string", length=255)
     */
    private $university;


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
     * Set name
     *
     * @param string $name
     *
     * @return client
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return client
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return client
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set nCarteB
     *
     * @param integer $nCarteB
     *
     * @return client
     */
    public function setNCarteB($nCarteB)
    {
        $this->nCarteB = $nCarteB;

        return $this;
    }

    /**
     * Get nCarteB
     *
     * @return int
     */
    public function getNCarteB()
    {
        return $this->nCarteB;
    }

    /**
     * Set interet
     *
     * @param string $interet
     *
     * @return client
     */
    public function setInteret($interet)
    {
        $this->interet = $interet;

        return $this;
    }

    /**
     * Get interet
     *
     * @return string
     */
    public function getInteret()
    {
        return $this->interet;
    }

    /**
     * Set profession
     *
     * @param string $profession
     *
     * @return client
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * Get profession
     *
     * @return string
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Set etude
     *
     * @param string $etude
     *
     * @return client
     */
    public function setEtude($etude)
    {
        $this->etude = $etude;

        return $this;
    }

    /**
     * Get etude
     *
     * @return string
     */
    public function getEtude()
    {
        return $this->etude;
    }

    /**
     * Set university
     *
     * @param string $university
     *
     * @return client
     */
    public function setUniversity($university)
    {
        $this->university = $university;

        return $this;
    }

    /**
     * Get university
     *
     * @return string
     */
    public function getUniversity()
    {
        return $this->university;
    }
}
