<?php

namespace Album\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblComments
 *
 * @ORM\Table(name="tbl_comments")
 * @ORM\Entity
 */
class TblComments
{
    /**
     * @var integer
     *
     * @ORM\Column(name="co_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $coId;

    /**
     * @var string
     *
     * @ORM\Column(name="co_comment", type="text", nullable=true)
     */
    private $coComment;

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
     * Get coId
     *
     * @return integer 
     */
    public function getCoId()
    {
        return $this->coId;
    }

    /**
     * Set coComment
     *
     * @param string $coComment
     * @return TblComments
     */
    public function setCoComment($coComment)
    {
        $this->coComment = $coComment;
    
        return $this;
    }

    /**
     * Get coComment
     *
     * @return string 
     */
    public function getCoComment()
    {
        return $this->coComment;
    }

    /**
     * Set sur
     *
     * @param \Album\Entity\TblScreenUsers $sur
     * @return TblComments
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
     * @return TblComments
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
     * @return TblComments
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
     * @return TblComments
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
