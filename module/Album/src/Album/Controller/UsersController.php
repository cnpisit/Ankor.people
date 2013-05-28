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
<<<<<<< HEAD
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
=======
		
        $users = $this->getEntityManager()->getRepository('Album\Entity\User')->findAll();
        
        return new ViewModel(array ('fuck' =>$users));

    }
	public function userproviderAction()
	{

	}
	public function addAction(){

    }
>>>>>>> 8aee110862b2be340c58d04a6626fe85f1b0b912

    public function deleteAction(){

    }
<<<<<<< HEAD

    public function editAction(){

=======
    public function updateAction(){

    }

    public function editAction()
    {
        $id = $this->params('id');
        $shop = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default')->find('\Album\Entity\User', $id);

        if(null == $shop)
        {
            $this->redirect()->toRoute('users', array('controller' => 'users', 'action' => 'index'));
        }
//        var_dump($shop);
        return new ViewModel(array(
            'user' => $shop,
            'submitText' => 'Update',
         ));
>>>>>>> 8aee110862b2be340c58d04a6626fe85f1b0b912
    }
}

?>
