<?php

namespace Album\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblContentFormat1
 *
 * @ORM\Table(name="tbl_content_format1")
 * @ORM\Entity
 */
class TblContentFormat1
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
     * @var \Album\Entity\TblArtEntiry
     *
     * @ORM\ManyToOne(targetEntity="Album\Entity\TblArtEntiry")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ent_id", referencedColumnName="ent_id")
     * })
     */
    private $ent;

    /**
     * @var \Album\Entity\TblShowArt
     *
     * @ORM\ManyToOne(targetEntity="Album\Entity\TblShowArt")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="show_id", referencedColumnName="show_id")
     * })
     */
    private $show;

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
     * @return TblContentFormat1
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
     * @return TblContentFormat1
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
     * @return TblContentFormat1
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
     * @return TblContentFormat1
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
     * Set ent
     *
     * @param \Album\Entity\TblArtEntiry $ent
     * @return TblContentFormat1
     */
    public function setEnt(\Album\Entity\TblArtEntiry $ent = null)
    {
        $this->ent = $ent;
    
        return $this;
    }

    /**
     * Get ent
     *
     * @return \Album\Entity\TblArtEntiry 
     */
    public function getEnt()
    {
        return $this->ent;
    }

    /**
     * Set show
     *
     * @param \Album\Entity\TblShowArt $show
     * @return TblContentFormat1
     */
    public function setShow(\Album\Entity\TblShowArt $show = null)
    {
        $this->show = $show;
    
        return $this;
    }

    /**
     * Get show
     *
     * @return \Album\Entity\TblShowArt 
     */
    public function getShow()
    {
        return $this->show;
    }

    /**
     * Set gal
     *
     * @param \Album\Entity\TblGalleries $gal
     * @return TblContentFormat1
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
     * @return TblContentFormat1
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
