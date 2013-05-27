<?php

namespace Album\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Table(name="user_provider")
 * @ORM\Entity
 *
 */
class User_Providers {
	/**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
	protected $user_id;
	protected $user_provider;
	protected $provider;

	public function getUser_id()
	{
		return $this->user_id;
	}
	public function setUser_id($user_id)
	{
		$this->user_id = $user_id;
	}

	public function getUser_provider()
	{
		return $this->user_provider;
	}
	public function setUser_provider($user_provider)
	{
		$this->user_provider = $user_provider;
	}

	public function getProvider()
	{
		return $this->provider;
	}
	public function setProvider($provider)
	{
		$this->provider = $provider;
	}

    /**
     * Get user_id
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->user_id;
    }
}
