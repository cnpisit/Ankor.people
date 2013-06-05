<?php

namespace Album\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblArts
 *
 * @ORM\Table(name="tbl_arts")
 * @ORM\Entity
 */
class TblArts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="art_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $artId;

    /**
     * @var string
     *
     * @ORM\Column(name="art_name", type="string", length=100, nullable=true)
     */
    private $artName;

    /**
     * @var string
     *
     * @ORM\Column(name="art_desc", type="text", nullable=true)
     */
    private $artDesc;

    /**
     * @var integer
     *
     * @ORM\Column(name="art_refid", type="integer", nullable=false)
     */
    private $artRefid;

    /**
     * @var string
     *
     * @ORM\Column(name="art_quote", type="string", length=1, nullable=true)
     */
    private $artQuote;

    /**
     * @var string
     *
     * @ORM\Column(name="art_lasttransaction", type="text", nullable=true)
     */
    private $artLasttransaction;

    /**
     * @var float
     *
     * @ORM\Column(name="art_dimh", type="float", nullable=true)
     */
    private $artDimh;

    /**
     * @var float
     *
     * @ORM\Column(name="art_diml1", type="float", nullable=true)
     */
    private $artDiml1;

    /**
     * @var float
     *
     * @ORM\Column(name="art_diml2", type="float", nullable=true)
     */
    private $artDiml2;

    /**
     * @var \Album\Entity\TblScreenuserTalents
     *
     * @ORM\ManyToOne(targetEntity="Album\Entity\TblScreenuserTalents")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="st_id", referencedColumnName="st_id")
     * })
     */
    private $st;

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
     * @var \Album\Entity\TblTalents
     *
     * @ORM\ManyToOne(targetEntity="Album\Entity\TblTalents")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tal_id", referencedColumnName="tal_id")
     * })
     */
    private $tal;



    /**
     * Get artId
     *
     * @return integer 
     */
    public function getArtId()
    {
        return $this->artId;
    }

    /**
     * Set artName
     *
     * @param string $artName
     * @return TblArts
     */
    public function setArtName($artName)
    {
        $this->artName = $artName;
    
        return $this;
    }

    /**
     * Get artName
     *
     * @return string 
     */
    public function getArtName()
    {
        return $this->artName;
    }

    /**
     * Set artDesc
     *
     * @param string $artDesc
     * @return TblArts
     */
    public function setArtDesc($artDesc)
    {
        $this->artDesc = $artDesc;
    
        return $this;
    }

    /**
     * Get artDesc
     *
     * @return string 
     */
    public function getArtDesc()
    {
        return $this->artDesc;
    }

    /**
     * Set artRefid
     *
     * @param integer $artRefid
     * @return TblArts
     */
    public function setArtRefid($artRefid)
    {
        $this->artRefid = $artRefid;
    
        return $this;
    }

    /**
     * Get artRefid
     *
     * @return integer 
     */
    public function getArtRefid()
    {
        return $this->artRefid;
    }

    /**
     * Set artQuote
     *
     * @param string $artQuote
     * @return TblArts
     */
    public function setArtQuote($artQuote)
    {
        $this->artQuote = $artQuote;
    
        return $this;
    }

    /**
     * Get artQuote
     *
     * @return string 
     */
    public function getArtQuote()
    {
        return $this->artQuote;
    }

    /**
     * Set artLasttransaction
     *
     * @param string $artLasttransaction
     * @return TblArts
     */
    public function setArtLasttransaction($artLasttransaction)
    {
        $this->artLasttransaction = $artLasttransaction;
    
        return $this;
    }

    /**
     * Get artLasttransaction
     *
     * @return string 
     */
    public function getArtLasttransaction()
    {
        return $this->artLasttransaction;
    }

    /**
     * Set artDimh
     *
     * @param float $artDimh
     * @return TblArts
     */
    public function setArtDimh($artDimh)
    {
        $this->artDimh = $artDimh;
    
        return $this;
    }

    /**
     * Get artDimh
     *
     * @return float 
     */
    public function getArtDimh()
    {
        return $this->artDimh;
    }

    /**
     * Set artDiml1
     *
     * @param float $artDiml1
     * @return TblArts
     */
    public function setArtDiml1($artDiml1)
    {
        $this->artDiml1 = $artDiml1;
    
        return $this;
    }

    /**
     * Get artDiml1
     *
     * @return float 
     */
    public function getArtDiml1()
    {
        return $this->artDiml1;
    }

    /**
     * Set artDiml2
     *
     * @param float $artDiml2
     * @return TblArts
     */
    public function setArtDiml2($artDiml2)
    {
        $this->artDiml2 = $artDiml2;
    
        return $this;
    }

    /**
     * Get artDiml2
     *
     * @return float 
     */
    public function getArtDiml2()
    {
        return $this->artDiml2;
    }

    /**
     * Set st
     *
     * @param \Album\Entity\TblScreenuserTalents $st
     * @return TblArts
     */
    public function setSt(\Album\Entity\TblScreenuserTalents $st = null)
    {
        $this->st = $st;
    
        return $this;
    }

    /**
     * Get st
     *
     * @return \Album\Entity\TblScreenuserTalents 
     */
    public function getSt()
    {
        return $this->st;
    }

    /**
     * Set sur
     *
     * @param \Album\Entity\TblScreenUsers $sur
     * @return TblArts
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
     * Set tal
     *
     * @param \Album\Entity\TblTalents $tal
     * @return TblArts
     */
    public function setTal(\Album\Entity\TblTalents $tal = null)
    {
        $this->tal = $tal;
    
        return $this;
    }

    /**
     * Get tal
     *
     * @return \Album\Entity\TblTalents 
     */
    public function getTal()
    {
        return $this->tal;
    }
}
