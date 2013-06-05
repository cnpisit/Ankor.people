<?php

namespace Album\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblTalents
 *
 * @ORM\Table(name="tbl_talents")
 * @ORM\Entity
 */
class TblTalents
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tal_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $talId;

    /**
     * @var string
     *
     * @ORM\Column(name="tal_name", type="string", length=100, nullable=false)
     */
    private $talName;

    /**
     * @var string
     *
     * @ORM\Column(name="tal_desc", type="string", length=100, nullable=false)
     */
    private $talDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="tal_quote", type="string", length=1, nullable=false)
     */
    private $talQuote;



    /**
     * Get talId
     *
     * @return integer 
     */
    public function getTalId()
    {
        return $this->talId;
    }

    /**
     * Set talName
     *
     * @param string $talName
     * @return TblTalents
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
     * Set talDesc
     *
     * @param string $talDesc
     * @return TblTalents
     */
    public function setTalDesc($talDesc)
    {
        $this->talDesc = $talDesc;
    
        return $this;
    }

    /**
     * Get talDesc
     *
     * @return string 
     */
    public function getTalDesc()
    {
        return $this->talDesc;
    }

    /**
     * Set talQuote
     *
     * @param string $talQuote
     * @return TblTalents
     */
    public function setTalQuote($talQuote)
    {
        $this->talQuote = $talQuote;
    
        return $this;
    }

    /**
     * Get talQuote
     *
     * @return string 
     */
    public function getTalQuote()
    {
        return $this->talQuote;
    }
}
