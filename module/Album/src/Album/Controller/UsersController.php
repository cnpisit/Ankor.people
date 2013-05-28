<?php
namespace Album\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Doctrine\ORM\EntityManager;
use Album\Entity\Users;
use Album\Entity\Status;
use Album\Entity\User_Providers;
// <-- Add this import
//use Album\Form\UserForm;

class UsersController extends AbstractActionController
{
    public $userTable;
    protected $entityManager;


    protected function setEntityManager(EntityManager $em)
    {
        return $this->entityManager = $em;
    }

    protected function getEntityManager()
    {
      if (null === $this->entityManager) {
        $this->setEntityManager($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
      }
      return $this->entityManager;
    }


    public function indexAction() {
		$userdatas = array();

            $users = $this->getEntityManager()->getRepository('Album\Entity\Users')->findAll();
			$status = $this->getEntityManager()->getRepository('Album\Entity\Status')->findAll();


//			var_dump($status);
//		foreach ($users as $user)
//		{
//			$userdatas[] = $user;
//		}

//		return new ViewModel($userdatas);
    var_dump($users);
    }
	public function userproviderAction()
	{

	}
	public function addAction(){

    }

    public function deleteAction(){

    }

    public function editAction(){

    }
}

?>
