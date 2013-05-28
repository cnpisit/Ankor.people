<?php
namespace Album\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Table(name="status")
 * @ORM\Entity
 *
 */

class Status{
	/**
     * @var integer
     *
     * @ORM\Column(name="st_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */

	protected $st_id;
	protected $st_com;
	protected $user_id;


	public function getSt_id()
	{
		return $this->st_id;
	}

	public function setSt_id($st_id)
	{
		$this->st_id = $st_id;
	}

	public function getSt_com()
	{
		return $this->st_com;
	}

	public function setSt_com($st_com)
	{
		$this->st_com = $st_com;
	}

	public function getUser_id()
	{
		return $this->user_id;
	}

	public function setUser_id()
	{
		$this->user_id = $user_id;
	}
}
?>
