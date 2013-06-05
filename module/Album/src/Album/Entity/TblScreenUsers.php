<?php

namespace Album\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblScreenUsers
 *
 * @ORM\Table(name="tbl_screen_users")
 * @ORM\Entity
 */
class TblScreenUsers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="sur_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $surId;

    /**
     * @var string
     *
     * @ORM\Column(name="sur_function", type="string", length=100, nullable=true)
     */
    private $surFunction;

    /**
     * @var string
     *
     * @ORM\Column(name="sur_name", type="string", length=100, nullable=true)
     */
    private $surName;



    /**
     * Get surId
     *
     * @return integer 
     */
    public function getSurId()
    {
        return $this->surId;
    }

    /**
     * Set surFunction
     *
     * @param string $surFunction
     * @return TblScreenUsers
     */
    public function setSurFunction($surFunction)
    {
        $this->surFunction = $surFunction;
    
        return $this;
    }

    /**
     * Get surFunction
     *
     * @return string 
     */
    public function getSurFunction()
    {
        return $this->surFunction;
    }

    /**
     * Set surName
     *
     * @param string $surName
     * @return TblScreenUsers
     */
    public function setSurName($surName)
    {
        $this->surName = $surName;
    
        return $this;
    }

    /**
     * Get surName
     *
     * @return string 
     */
    public function getSurName()
    {
        return $this->surName;
    }
}
