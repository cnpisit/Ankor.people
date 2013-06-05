<?php

namespace Album\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblSocialNetwork
 *
 * @ORM\Table(name="tbl_social_network")
 * @ORM\Entity
 */
class TblSocialNetwork
{
    /**
     * @var integer
     *
     * @ORM\Column(name="sn_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $snId;

    /**
     * @var string
     *
     * @ORM\Column(name="sn_name", type="string", length=100, nullable=false)
     */
    private $snName;

    /**
     * @var string
     *
     * @ORM\Column(name="sn_login", type="string", length=100, nullable=false)
     */
    private $snLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="sn_password", type="string", length=100, nullable=false)
     */
    private $snPassword;

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
     * Get snId
     *
     * @return integer 
     */
    public function getSnId()
    {
        return $this->snId;
    }

    /**
     * Set snName
     *
     * @param string $snName
     * @return TblSocialNetwork
     */
    public function setSnName($snName)
    {
        $this->snName = $snName;
    
        return $this;
    }

    /**
     * Get snName
     *
     * @return string 
     */
    public function getSnName()
    {
        return $this->snName;
    }

    /**
     * Set snLogin
     *
     * @param string $snLogin
     * @return TblSocialNetwork
     */
    public function setSnLogin($snLogin)
    {
        $this->snLogin = $snLogin;
    
        return $this;
    }

    /**
     * Get snLogin
     *
     * @return string 
     */
    public function getSnLogin()
    {
        return $this->snLogin;
    }

    /**
     * Set snPassword
     *
     * @param string $snPassword
     * @return TblSocialNetwork
     */
    public function setSnPassword($snPassword)
    {
        $this->snPassword = $snPassword;
    
        return $this;
    }

    /**
     * Get snPassword
     *
     * @return string 
     */
    public function getSnPassword()
    {
        return $this->snPassword;
    }

    /**
     * Set sur
     *
     * @param \Album\Entity\TblScreenUsers $sur
     * @return TblSocialNetwork
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
