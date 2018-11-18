<?php

namespace FormBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * admin
 *
 * @ORM\Table(name="admin")
 * @ORM\Entity(repositoryClass="FormBundle\Repository\adminRepository")
 */
class admin
{

    /**
     * @var
     *
     * @ORM\OneToMany(targetEntity="FormBundle\Entity\user",mappedBy="admin")
     */
    private $user;

    /**
     * @var
     *
     * @ORM\OneToMany(targetEntity="FormBundle\Entity\formateur",mappedBy="admin")
     */
    private $formateur;

    /**
     * @var
     *
     * @ORM\OneToMany(targetEntity="FormBundle\Entity\produit",mappedBy="admin")
     */
    private $produit;
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
     * @ORM\Column(name="pwd", type="string", length=255)
     */
    private $pwd;


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
     * @return admin
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
     * @return admin
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
     * Set pwd
     *
     * @param string $pwd
     *
     * @return admin
     */
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;

        return $this;
    }

    /**
     * Get pwd
     *
     * @return string
     */
    public function getPwd()
    {
        return $this->pwd;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
        $this->formateur = new \Doctrine\Common\Collections\ArrayCollection();
        $this->produit = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add user
     *
     * @param \FormBundle\Entity\user $user
     *
     * @return admin
     */
    public function addUser(\FormBundle\Entity\user $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \FormBundle\Entity\user $user
     */
    public function removeUser(\FormBundle\Entity\user $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add formateur
     *
     * @param \FormBundle\Entity\formateur $formateur
     *
     * @return admin
     */
    public function addFormateur(\FormBundle\Entity\formateur $formateur)
    {
        $this->formateur[] = $formateur;

        return $this;
    }

    /**
     * Remove formateur
     *
     * @param \FormBundle\Entity\formateur $formateur
     */
    public function removeFormateur(\FormBundle\Entity\formateur $formateur)
    {
        $this->formateur->removeElement($formateur);
    }

    /**
     * Get formateur
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFormateur()
    {
        return $this->formateur;
    }

    /**
     * Add produit
     *
     * @param \FormBundle\Entity\produit $produit
     *
     * @return admin
     */
    public function addProduit(\FormBundle\Entity\produit $produit)
    {
        $this->produit[] = $produit;

        return $this;
    }

    /**
     * Remove produit
     *
     * @param \FormBundle\Entity\produit $produit
     */
    public function removeProduit(\FormBundle\Entity\produit $produit)
    {
        $this->produit->removeElement($produit);
    }

    /**
     * Get produit
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProduit()
    {
        return $this->produit;
    }
}
