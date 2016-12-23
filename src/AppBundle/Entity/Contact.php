<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 *
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ContactRepository")
 * @ORM\Table("Contact")
 * @ORM\HasLifecycleCallbacks()
 */
class Contact {

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string The name of the contact.
     * @ORM\Column(name="email")
     * @Assert\Type(type="string")
     */
    private $email;

    /**
     * @var string The name of the contact.
     * @ORM\Column(name="address")
     * @Assert\Type(type="string")
     */
    private $address;

    /**
     * @var string The phone of the contact.
     * @ORM\Column(name="phone")
     * @Assert\Type(type="string")
     */
    private $phone;

    /**
     * @var string The name of the contact.
     * @ORM\Column(name="name", nullable=true)
     * @Assert\Type(type="string")
     */
    private $name;

    /**
     * @var string The profession of the contact.
     * @ORM\Column(name="profession", nullable=true)
     * @Assert\Type(type="string")
     */
    private $profession;

    /**
     * @var string The activities of the contact.
     * @ORM\Column(name="activities", nullable=true)
     * @Assert\Type(type="string")
     */
    private $activities;

    /**
     * @var string The website url of the contact.
     * @ORM\Column(name="website")
     * @Assert\Url()
     */
    protected $website;

    /**
     * @ORM\ManyToOne(targetEntity="Jac\UserBundle\Entity\User", inversedBy="contacts")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false)
     */
    private $user;


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
     * Set email
     *
     * @param string $email
     *
     * @return Contact
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Contact
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Contact
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return Contact
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set user
     *
     * @param \Jac\UserBundle\Entity\User $user
     *
     * @return Contact
     */
    public function setUser(\Jac\UserBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Jac\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Contact
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
     * Set profession
     *
     * @param string $profession
     *
     * @return Contact
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
     * Set activities
     *
     * @param string $activities
     *
     * @return Contact
     */
    public function setActivities($activities)
    {
        $this->activities = $activities;

        return $this;
    }

    /**
     * Get activities
     *
     * @return string
     */
    public function getActivities()
    {
        return $this->activities;
    }
}
