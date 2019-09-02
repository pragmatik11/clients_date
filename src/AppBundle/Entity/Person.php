<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Person
 *
 * @ORM\Table(name="person")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PersonRepository")
 */
class Person
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
     * @ORM\Column(name="FirstName", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="LastName", type="string", length=255)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="Descrition", type="string", length=255)
     */
    private $descrition;



    /**
     * @ORM\OneToMany(targetEntity="Address", mappedBy="person")
     */
    private $addresss;

    public function __construct()
    {
        $this->addresss = new ArrayCollection();
    }

    /**
     * @ORM\OneToMany(targetEntity="Email", mappedBy="person")
     */
    private $emails;

    public function __construct1()
    {
        $this->emails = new ArrayCollection();
    }
    /**
     * @ORM\OneToMany(targetEntity="Phone", mappedBy="person")
     */
    private $phones;

    public function __construct2()
    {
        $this->phones = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getAddresss()
    {
        return $this->addresss;
    }

    /**
     * @param mixed $addresss
     */
    public function setAddresss($addresss)
    {
        $this->addresss = $addresss;
    }

    /**
     * @return mixed
     */
    public function getEmails()
    {
        return $this->emails;
    }

    /**
     * @param mixed $emails
     */
    public function setEmails($emails)
    {
        $this->emails = $emails;
    }

    /**
     * @return mixed
     */
    public function getPhones()
    {
        return $this->phones;
    }

    /**
     * @param mixed $phones
     */
    public function setPhones($phones)
    {
        $this->phones = $phones;
    }



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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Person
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Person
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set descrition
     *
     * @param string $descrition
     *
     * @return Person
     */
    public function setDescrition($descrition)
    {
        $this->descrition = $descrition;

        return $this;
    }

    /**
     * Get descrition
     *
     * @return string
     */
    public function getDescrition()
    {
        return $this->descrition;
    }
}

