<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * hcv_reservations
 */
class hcv_reservations
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $confNum;

    /**
     * @var \DateTime
     */
    private $dateOfRsv;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $address1;

    /**
     * @var string
     */
    private $address2;

    /**
     * @var string
     */
    private $phoneNum;

    /**
     * @var array
     */
    private $daysRsvd;

    /**
     * @var integer
     */
    private $numOfPpl;

    /**
     * @var string
     */
    private $price;


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
     * Set confNum
     *
     * @param string $confNum
     * @return hcv_reservations
     */
    public function setConfNum($confNum)
    {
        $this->confNum = $confNum;

        return $this;
    }

    /**
     * Get confNum
     *
     * @return string 
     */
    public function getConfNum()
    {
        return $this->confNum;
    }

    /**
     * Set dateOfRsv
     *
     * @param \DateTime $dateOfRsv
     * @return hcv_reservations
     */
    public function setDateOfRsv($dateOfRsv)
    {
        $this->dateOfRsv = $dateOfRsv;

        return $this;
    }

    /**
     * Get dateOfRsv
     *
     * @return \DateTime 
     */
    public function getDateOfRsv()
    {
        return $this->dateOfRsv;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return hcv_reservations
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
     * @return hcv_reservations
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
     * Set email
     *
     * @param string $email
     * @return hcv_reservations
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
     * Set address1
     *
     * @param string $address1
     * @return hcv_reservations
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;

        return $this;
    }

    /**
     * Get address1
     *
     * @return string 
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set address2
     *
     * @param string $address2
     * @return hcv_reservations
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * Get address2
     *
     * @return string 
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set phoneNum
     *
     * @param string $phoneNum
     * @return hcv_reservations
     */
    public function setPhoneNum($phoneNum)
    {
        $this->phoneNum = $phoneNum;

        return $this;
    }

    /**
     * Get phoneNum
     *
     * @return string 
     */
    public function getPhoneNum()
    {
        return $this->phoneNum;
    }

    /**
     * Set daysRsvd
     *
     * @param array $daysRsvd
     * @return hcv_reservations
     */
    public function setDaysRsvd($daysRsvd)
    {
        $this->daysRsvd = $daysRsvd;

        return $this;
    }

    /**
     * Get daysRsvd
     *
     * @return array 
     */
    public function getDaysRsvd()
    {
        return $this->daysRsvd;
    }

    /**
     * Set numOfPpl
     *
     * @param integer $numOfPpl
     * @return hcv_reservations
     */
    public function setNumOfPpl($numOfPpl)
    {
        $this->numOfPpl = $numOfPpl;

        return $this;
    }

    /**
     * Get numOfPpl
     *
     * @return integer 
     */
    public function getNumOfPpl()
    {
        return $this->numOfPpl;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return hcv_reservations
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }
}
