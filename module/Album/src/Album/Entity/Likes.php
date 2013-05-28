<?php
namespace Album\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Table(name="like")
 * @ORM\Entity
 *
 */
class Likes {
	/**
     * @var integer
     *
     * @ORM\Column(name="like_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
	protected $like_id;
	protected $st_id;
	protected $user_id;

	public function getLike_id()
	{
		return $this->like_id;
	}

	public function setLike_id($like_id)
	{
		$this->like_id = $like_id;
	}

	public function getSt_id()
	{
		return $this->st_id;
	}

	public function setSt_id($st_id)
	{
		$this->st_id = $st_id;
	}

	public function getUser_id()
	{
		return $this->user_id;
	}

	public function setUser_id($user_id)
	{
		$this->user_id = $user_id;
	}

}

?>
