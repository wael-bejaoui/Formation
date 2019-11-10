<?php

namespace FormBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="FormBundle\Repository\personRepository")
 * @UniqueEntity(
 *     fields={"login"},
 *     message="L'Email saisie est déja existe"
 * )
 */
class person
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
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Entrer votre nom correct",
     *      maxMessage = "Your first name cannot be longer than {{ limit }} characters"
     * )
     */

    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=255)
     * @Assert\Email(
     *     message = "Ce Email n'est pas valide"
     * )
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="psw", type="string", length=255)
     * @Assert\Length(
     *      min = 8,
     *      max = 50,
     *      minMessage = "Votre mot de passe doit faire au minimum 8 caractères",
     *      maxMessage = "Your first name cannot be longer than {{ limit }} characters"
     * )
     * @Assert\EqualTo(propertyPath="pswc",message="Vous n'avez pas tapez le même mot de passe")
     */
    private $psw;
    /**
     * @Assert\EqualTo(propertyPath="psw",message="Vous n'avez pas tapez le même mot de passe")
     */
    public $pswc;
    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $roles;


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
     * @return person
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
     * @return person
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
     * Set psw
     *
     * @param string $psw
     *
     * @return person
     */
    public function setPsw($psw)
    {
        $this->psw = $psw;

        return $this;
    }

    /**
     * Get psw
     *
     * @return string
     */
    public function getPsw()
    {
        return $this->psw;
    }



    /**
     * Returns the roles granted to the user.
     *
     * <code>
     * public function getRoles()
     * {
     *     return array('ROLE_USER');
     * }
     * </code>
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return (Role|string)[] The user roles
     */
    public function getRoles()
    {

        return ['USER_ROLE'];


    }


    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    /**
     * Returns the username used to authenticate the user.
     *
     * @return string The username
     */
    public function getUsername()
    {
        // TODO: Implement getUsername() method.
    }


    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    /**
     * Returns the password used to authenticate the user.
     *
     * This should be the encoded password. On authentication, a plain-text
     * password will be salted, encoded, and then compared to this value.
     *
     * @return string The password
     */


    /**
     * Set type
     *
     * @param string $type
     *
     * @return person
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;

    }

}
