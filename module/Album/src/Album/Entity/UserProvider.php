<?php

namespace Album\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserProvider
 *
 * @ORM\Table(name="user_provider")
 * @ORM\Entity
 */
class UserProvider
{
    /**
     * @var string
     *
     * @ORM\Column(name="provider_id", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $providerId;

    /**
     * @var string
     *
     * @ORM\Column(name="provider", type="string", length=255, nullable=false)
     */
    private $provider;

    /**
     * @var \Album\Entity\User
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Album\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;



    /**
     * Set providerId
     *
     * @param string $providerId
     * @return UserProvider
     */
    public function setProviderId($providerId)
    {
        $this->providerId = $providerId;
    
        return $this;
    }

    /**
     * Get providerId
     *
     * @return string 
     */
    public function getProviderId()
    {
        return $this->providerId;
    }

    /**
     * Set provider
     *
     * @param string $provider
     * @return UserProvider
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;
    
        return $this;
    }

    /**
     * Get provider
     *
     * @return string 
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Set user
     *
     * @param \Album\Entity\User $user
     * @return UserProvider
     */
    public function setUser(\Album\Entity\User $user)
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
