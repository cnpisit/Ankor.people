<?php

namespace Album\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblLikeArt
 *
 * @ORM\Table(name="tbl_like_art")
 * @ORM\Entity
 */
class TblLikeArt
{
    /**
     * @var integer
     *
     * @ORM\Column(name="la_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $laId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="la_value", type="boolean", nullable=true)
     */
    private $laValue;

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
     * Get laId
     *
     * @return integer 
     */
    public function getLaId()
    {
        return $this->laId;
    }

    /**
     * Set laValue
     *
     * @param boolean $laValue
     * @return TblLikeArt
     */
    public function setLaValue($laValue)
    {
        $this->laValue = $laValue;
    
        return $this;
    }

    /**
     * Get laValue
     *
     * @return boolean 
     */
    public function getLaValue()
    {
        return $this->laValue;
    }

    /**
     * Set sur
     *
     * @param \Album\Entity\TblScreenUsers $sur
     * @return TblLikeArt
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

    /**
     * Set ent
     *
     * @param \Album\Entity\TblArtEntiry $ent
     * @return TblLikeArt
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
     * @return TblLikeArt
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
     * @return TblLikeArt
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
}
