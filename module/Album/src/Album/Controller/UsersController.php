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
            $users = $this->getEntityManager()->getRepository('Album\Entity\User')->findAll();
//			$status = $this->getEntityManager()->getRepository('Album\Entity\Status')->findAll();
//        var_dump($users);
		return new ViewModel( array (
                    'you' => $users
                    ));
    }
	public function userproviderAction()
	{

	}
	public function addAction()
        {
            $request = $this->getRequest();
            
            if($request->isPost())
            {
                $postData = (array) $request->getPost();
                var_dump($postData);
            }
                if (isset($postData))
                {
                    $newPerson = new \Album\Entity\User();


                    $newPerson->setUsername($postData['username']);
                    $newPerson->setDisplayName($postData['displayname']);
                    $newPerson->setPassword($postData['password']);
                    $newPerson->setEmail($postData['email']);
                    $newPerson->setState($postData['state']);

                    $em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
                    $em->persist($newPerson);
                    $em->flush();

                    $this->flashMessenger()->addMessage('<div class="alert alert-success">Success</div>');
                    $this->redirect()->toRoute('users', array('controller' => 'users', 'action' => 'index'));
                }

        }


    public function deleteAction(){
        $id = $this->params('id');

		$user = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default')->find('Album\Entity\User', $id);
		if(null == $user){
			$this->redirect()->toRoute('users', array('controller' => 'users', 'action' => 'index'));
		}

		$em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
		$em->remove($user);
		$em->flush();

		$this->flashMessenger()->addMessage('<div class="alert alert-success">Success</div>');
		return $this->redirect()->toRoute('users', array('controller' => 'users', 'action' => 'index'));
    }

    public function updateAction(){
       $request = $this->getRequest();
        
        if($request->isPost())
        {
            $postData = (array) $request->getPost();
//          
            $id = $postData['userId'];
            $user = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default')->find('Album\Entity\User', $id);
            
            if(null == $user)
            {
                $this->redirect()->toRoute('users', array('controller ' => 'Users', 'action' => 'index'));
                
            }
            if(isset($postData))
            {
//                var_dump($user);

                $user->setUsername($postData['username']);
                $user->setEmail($postData['email']);
                $user->setDisplayName($postData['displayname']);
                $user->setPassword($postData['password']);
                $user->setState($postData['state']);

                $em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
                $em->persist($user);
                $em->flush();

                $this->flashMessenger()->addMessage('<div class="alert alert-success">Success</div>');
                $this->redirect()->toRoute('users', array('controller' => 'users', 'action' => 'index'));
            }
            
        }

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

    }
}

?>
