<?php

namespace Album\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblScreenuserTalents
 *
 * @ORM\Table(name="tbl_screenuser_talents")
 * @ORM\Entity
 */
class TblScreenuserTalents
{
    /**
     * @var integer
     *
     * @ORM\Column(name="st_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $stId;

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
     * Get stId
     *
     * @return integer 
     */
    public function getStId()
    {
        return $this->stId;
    }

    /**
     * Set sur
     *
     * @param \Album\Entity\TblScreenUsers $sur
     * @return TblScreenuserTalents
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
     * @return TblScreenuserTalents
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
