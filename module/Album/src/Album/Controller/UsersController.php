<?php
namespace Album\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Album\Model\User;          // <-- Add this import
use Album\Form\UserForm;   

class UsersController extends AbstractActionController
{
    public $userTable;


    public function getUserTable()
    {
        if (!$this->userTable) {
            $sm = $this->getServiceLocator();
            $this->userTable = $sm->get('Album\Model\UserTable');
        }
        return $this->userTable;
    }
    
    public function indexAction() {
        return new ViewModel(array(
            'users' => $this->getUserTable()->fetchAll(),
        ));
    }
    
    public function addAction(){
        
    }
    
    public function deleteAction(){
        
    }
    
    public function editAction(){
        
    }
}

?>
