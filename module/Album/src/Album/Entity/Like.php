<?php

namespace Album\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Like
 *
 * @ORM\Table(name="like")
 * @ORM\Entity
 */
class Like
{
    /**
     * @var integer
     *
     * @ORM\Column(name="like_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $likeId;

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
     * @var \Album\Entity\Status
     *
     * @ORM\ManyToOne(targetEntity="Album\Entity\Status")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="st_id", referencedColumnName="st_id")
     * })
     */
    private $st;



    /**
     * Get likeId
     *
     * @return integer 
     */
    public function getLikeId()
    {
        return $this->likeId;
    }

    /**
     * Set user
     *
     * @param \Album\Entity\User $user
     * @return Like
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

    /**
     * Set st
     *
     * @param \Album\Entity\Status $st
     * @return Like
     */
    public function setSt(\Album\Entity\Status $st = null)
    {
        $this->st = $st;
    
        return $this;
    }

    /**
     * Get st
     *
     * @return \Album\Entity\Status 
     */
    public function getSt()
    {
        return $this->st;
    }
}
