<?php

namespace Album\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblArtEntiry
 *
 * @ORM\Table(name="tbl_art_entiry")
 * @ORM\Entity
 */
class TblArtEntiry
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ent_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $entId;

    /**
     * @var string
     *
     * @ORM\Column(name="tal_name", type="string", length=200, nullable=false)
     */
    private $talName;

    /**
     * @var string
     *
     * @ORM\Column(name="ent_name", type="string", length=200, nullable=false)
     */
    private $entName;

    /**
     * @var string
     *
     * @ORM\Column(name="ent_desc", type="text", nullable=true)
     */
    private $entDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="ent_refid", type="string", length=200, nullable=true)
     */
    private $entRefid;

    /**
     * @var string
     *
     * @ORM\Column(name="ent_quote", type="string", length=200, nullable=true)
     */
    private $entQuote;

    /**
     * @var integer
     *
     * @ORM\Column(name="gal_price", type="integer", nullable=true)
     */
    private $galPrice;

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
     * Get entId
     *
     * @return integer 
     */
    public function getEntId()
    {
        return $this->entId;
    }

    /**
     * Set talName
     *
     * @param string $talName
     * @return TblArtEntiry
     */
    public function setTalName($talName)
    {
        $this->talName = $talName;
    
        return $this;
    }

    /**
     * Get talName
     *
     * @return string 
     */
    public function getTalName()
    {
        return $this->talName;
    }

    /**
     * Set entName
     *
     * @param string $entName
     * @return TblArtEntiry
     */
    public function setEntName($entName)
    {
        $this->entName = $entName;
    
        return $this;
    }

    /**
     * Get entName
     *
     * @return string 
     */
    public function getEntName()
    {
        return $this->entName;
    }

    /**
     * Set entDesc
     *
     * @param string $entDesc
     * @return TblArtEntiry
     */
    public function setEntDesc($entDesc)
    {
        $this->entDesc = $entDesc;
    
        return $this;
    }

    /**
     * Get entDesc
     *
     * @return string 
     */
    public function getEntDesc()
    {
        return $this->entDesc;
    }

    /**
     * Set entRefid
     *
     * @param string $entRefid
     * @return TblArtEntiry
     */
    public function setEntRefid($entRefid)
    {
        $this->entRefid = $entRefid;
    
        return $this;
    }

    /**
     * Get entRefid
     *
     * @return string 
     */
    public function getEntRefid()
    {
        return $this->entRefid;
    }

    /**
     * Set entQuote
     *
     * @param string $entQuote
     * @return TblArtEntiry
     */
    public function setEntQuote($entQuote)
    {
        $this->entQuote = $entQuote;
    
        return $this;
    }

    /**
     * Get entQuote
     *
     * @return string 
     */
    public function getEntQuote()
    {
        return $this->entQuote;
    }

    /**
     * Set galPrice
     *
     * @param integer $galPrice
     * @return TblArtEntiry
     */
    public function setGalPrice($galPrice)
    {
        $this->galPrice = $galPrice;
    
        return $this;
    }

    /**
     * Get galPrice
     *
     * @return integer 
     */
    public function getGalPrice()
    {
        return $this->galPrice;
    }

    /**
     * Set show
     *
     * @param \Album\Entity\TblShowArt $show
     * @return TblArtEntiry
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
     * @return TblArtEntiry
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
     * @return TblArtEntiry
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
