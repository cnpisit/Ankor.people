<?php

namespace Album\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblContentFormat
 *
 * @ORM\Table(name="tbl_content_format")
 * @ORM\Entity
 */
class TblContentFormat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pho_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $phoId;

    /**
     * @var string
     *
     * @ORM\Column(name="pho_name", type="string", length=100, nullable=false)
     */
    private $phoName;

    /**
     * @var string
     *
     * @ORM\Column(name="pho_desc", type="text", nullable=true)
     */
    private $phoDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="pho_images", type="text", nullable=true)
     */
    private $phoImages;

    /**
     * @var string
     *
     * @ORM\Column(name="pho_url", type="text", nullable=true)
     */
    private $phoUrl;

    /**
     * @var \Album\Entity\TblArts
     *
     * @ORM\ManyToOne(targetEntity="Album\Entity\TblArts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="art_id", referencedColumnName="art_id")
     * })
     */
    private $art;

    /**
     * @var \Album\Entity\TblGalleries
     *
     * @ORM\ManyToOne(targetEntity="Album\Entity\TblGalleries")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gal_id", referencedColumnName="gal_id")
     * })
     */
    private $gal;

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
     * Get phoId
     *
     * @return integer 
     */
    public function getPhoId()
    {
        return $this->phoId;
    }

    /**
     * Set phoName
     *
     * @param string $phoName
     * @return TblContentFormat
     */
    public function setPhoName($phoName)
    {
        $this->phoName = $phoName;
    
        return $this;
    }

    /**
     * Get phoName
     *
     * @return string 
     */
    public function getPhoName()
    {
        return $this->phoName;
    }

    /**
     * Set phoDesc
     *
     * @param string $phoDesc
     * @return TblContentFormat
     */
    public function setPhoDesc($phoDesc)
    {
        $this->phoDesc = $phoDesc;
    
        return $this;
    }

    /**
     * Get phoDesc
     *
     * @return string 
     */
    public function getPhoDesc()
    {
        return $this->phoDesc;
    }

    /**
     * Set phoImages
     *
     * @param string $phoImages
     * @return TblContentFormat
     */
    public function setPhoImages($phoImages)
    {
        $this->phoImages = $phoImages;
    
        return $this;
    }

    /**
     * Get phoImages
     *
     * @return string 
     */
    public function getPhoImages()
    {
        return $this->phoImages;
    }

    /**
     * Set phoUrl
     *
     * @param string $phoUrl
     * @return TblContentFormat
     */
    public function setPhoUrl($phoUrl)
    {
        $this->phoUrl = $phoUrl;
    
        return $this;
    }

    /**
     * Get phoUrl
     *
     * @return string 
     */
    public function getPhoUrl()
    {
        return $this->phoUrl;
    }

    /**
     * Set art
     *
     * @param \Album\Entity\TblArts $art
     * @return TblContentFormat
     */
    public function setArt(\Album\Entity\TblArts $art = null)
    {
        $this->art = $art;
    
        return $this;
    }

    /**
     * Get art
     *
     * @return \Album\Entity\TblArts 
     */
    public function getArt()
    {
        return $this->art;
    }

    /**
     * Set gal
     *
     * @param \Album\Entity\TblGalleries $gal
     * @return TblContentFormat
     */
    public function setGal(\Album\Entity\TblGalleries $gal = null)
    {
        $this->gal = $gal;
    
        return $this;
    }

    /**
     * Get gal
     *
     * @return \Album\Entity\TblGalleries 
     */
    public function getGal()
    {
        return $this->gal;
    }

    /**
     * Set sur
     *
     * @param \Album\Entity\TblScreenUsers $sur
     * @return TblContentFormat
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
