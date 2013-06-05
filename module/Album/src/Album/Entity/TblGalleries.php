<?php

namespace Album\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblGalleries
 *
 * @ORM\Table(name="tbl_galleries")
 * @ORM\Entity
 */
class TblGalleries
{
    /**
     * @var integer
     *
     * @ORM\Column(name="gal_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $galId;

    /**
     * @var string
     *
     * @ORM\Column(name="gal_name", type="string", length=100, nullable=false)
     */
    private $galName;

    /**
     * @var string
     *
     * @ORM\Column(name="gal_statut", type="text", nullable=true)
     */
    private $galStatut;

    /**
     * @var string
     *
     * @ORM\Column(name="gal_address1", type="text", nullable=true)
     */
    private $galAddress1;

    /**
     * @var string
     *
     * @ORM\Column(name="gal_address2", type="text", nullable=true)
     */
    private $galAddress2;

    /**
     * @var integer
     *
     * @ORM\Column(name="gal_zipcode", type="integer", nullable=true)
     */
    private $galZipcode;

    /**
     * @var string
     *
     * @ORM\Column(name="gal_city", type="string", length=100, nullable=true)
     */
    private $galCity;

    /**
     * @var string
     *
     * @ORM\Column(name="gal_country", type="string", length=100, nullable=true)
     */
    private $galCountry;

    /**
     * @var integer
     *
     * @ORM\Column(name="gal_phone_number", type="integer", nullable=true)
     */
    private $galPhoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="gal_mail", type="string", length=100, nullable=true)
     */
    private $galMail;

    /**
     * @var string
     *
     * @ORM\Column(name="gal_website", type="string", length=100, nullable=true)
     */
    private $galWebsite;

    /**
     * @var \Album\Entity\TblScreenUsers
     *
     * @ORM\ManyToOne(targetEntity="Album\Entity\TblScreenUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sur_id", referencedColumnName="sur_id")
     * })
     */
    private $sur;



    /**
     * Get galId
     *
     * @return integer 
     */
    public function getGalId()
    {
        return $this->galId;
    }

    /**
     * Set galName
     *
     * @param string $galName
     * @return TblGalleries
     */
    public function setGalName($galName)
    {
        $this->galName = $galName;
    
        return $this;
    }

    /**
     * Get galName
     *
     * @return string 
     */
    public function getGalName()
    {
        return $this->galName;
    }

    /**
     * Set galStatut
     *
     * @param string $galStatut
     * @return TblGalleries
     */
    public function setGalStatut($galStatut)
    {
        $this->galStatut = $galStatut;
    
        return $this;
    }

    /**
     * Get galStatut
     *
     * @return string 
     */
    public function getGalStatut()
    {
        return $this->galStatut;
    }

    /**
     * Set galAddress1
     *
     * @param string $galAddress1
     * @return TblGalleries
     */
    public function setGalAddress1($galAddress1)
    {
        $this->galAddress1 = $galAddress1;
    
        return $this;
    }

    /**
     * Get galAddress1
     *
     * @return string 
     */
    public function getGalAddress1()
    {
        return $this->galAddress1;
    }

    /**
     * Set galAddress2
     *
     * @param string $galAddress2
     * @return TblGalleries
     */
    public function setGalAddress2($galAddress2)
    {
        $this->galAddress2 = $galAddress2;
    
        return $this;
    }

    /**
     * Get galAddress2
     *
     * @return string 
     */
    public function getGalAddress2()
    {
        return $this->galAddress2;
    }

    /**
     * Set galZipcode
     *
     * @param integer $galZipcode
     * @return TblGalleries
     */
    public function setGalZipcode($galZipcode)
    {
        $this->galZipcode = $galZipcode;
    
        return $this;
    }

    /**
     * Get galZipcode
     *
     * @return integer 
     */
    public function getGalZipcode()
    {
        return $this->galZipcode;
    }

    /**
     * Set galCity
     *
     * @param string $galCity
     * @return TblGalleries
     */
    public function setGalCity($galCity)
    {
        $this->galCity = $galCity;
    
        return $this;
    }

    /**
     * Get galCity
     *
     * @return string 
     */
    public function getGalCity()
    {
        return $this->galCity;
    }

    /**
     * Set galCountry
     *
     * @param string $galCountry
     * @return TblGalleries
     */
    public function setGalCountry($galCountry)
    {
        $this->galCountry = $galCountry;
    
        return $this;
    }

    /**
     * Get galCountry
     *
     * @return string 
     */
    public function getGalCountry()
    {
        return $this->galCountry;
    }

    /**
     * Set galPhoneNumber
     *
     * @param integer $galPhoneNumber
     * @return TblGalleries
     */
    public function setGalPhoneNumber($galPhoneNumber)
    {
        $this->galPhoneNumber = $galPhoneNumber;
    
        return $this;
    }

    /**
     * Get galPhoneNumber
     *
     * @return integer 
     */
    public function getGalPhoneNumber()
    {
        return $this->galPhoneNumber;
    }

    /**
     * Set galMail
     *
     * @param string $galMail
     * @return TblGalleries
     */
    public function setGalMail($galMail)
    {
        $this->galMail = $galMail;
    
        return $this;
    }

    /**
     * Get galMail
     *
     * @return string 
     */
    public function getGalMail()
    {
        return $this->galMail;
    }

    /**
     * Set galWebsite
     *
     * @param string $galWebsite
     * @return TblGalleries
     */
    public function setGalWebsite($galWebsite)
    {
        $this->galWebsite = $galWebsite;
    
        return $this;
    }

    /**
     * Get galWebsite
     *
     * @return string 
     */
    public function getGalWebsite()
    {
        return $this->galWebsite;
    }

    /**
     * Set sur
     *
     * @param \Album\Entity\TblScreenUsers $sur
     * @return TblGalleries
     */
    public function setSur(\Album\Entity\TblScreenUsers $sur = null)
    {
        $this->sur = $sur;
    
        return $this;
    }

    /**
     * Get sur
     *
     * @return \Album\Entity\TblScreenUsers 
     */
    public function getSur()
    {
        return $this->sur;
    }
}
