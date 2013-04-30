<?php
namespace Album\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Doctrine\ORM\EntityManager;
use Album\Entity\Users;          // <-- Add this import
//use Album\Form\UserForm;   

class UsersController extends AbstractActionController
{
    public $userTable;
    protected $entityManager;


    protected function setEntityManager(EntityManager $em)
    {
      $this->entityManager = $em;
      return $this;
    }
    
    protected function getEntityManager()
    {
      if (null === $this->entityManager) {
        $this->setEntityManager($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
      }
      return $this->entityManager;
    }
  
//    public function getUserTable()
//    {
//        if (!$this->userTable) {
//            $sm = $this->getServiceLocator();
//            $this->userTable = $sm->get('Album\Model\UserTable');
//        }
//        return $this->userTable;
//    }
    
    public function indexAction() {
//          return new ViewModel(array(
//            'users' => $this->getUserTable()->fetchAll(),
//        ));
        $repository = $this->getEntityManager()->getRepository('Album\Entity\Users');
        $users      = $repository->findAll();
 
        return array(
            'users' => $users
        );
    }
    
    public function addAction(){
        
    }
    
    public function deleteAction(){
        
    }
    
    public function editAction(){
        
    }
}

?>
