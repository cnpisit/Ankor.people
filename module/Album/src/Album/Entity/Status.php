<?php

namespace Album\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Status
 *
 * @ORM\Table(name="status")
 * @ORM\Entity
 */
class Status
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
     * @var string
     *
     * @ORM\Column(name="st_com", type="string", length=200, nullable=false)
     */
    private $stCom;

    /**
     * @var \Album\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="Album\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;



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
     * Set stCom
     *
     * @param string $stCom
     * @return Status
     */
    public function setStCom($stCom)
    {
        $this->stCom = $stCom;
    
        return $this;
    }

    /**
     * Get stCom
     *
     * @return string 
     */
    public function getStCom()
    {
        return $this->stCom;
    }

    /**
     * Set user
     *
     * @param \Album\Entity\User $user
     * @return Status
     */
    public function setUser(\Album\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \Album\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
