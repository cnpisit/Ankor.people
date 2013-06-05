<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Album\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Doctrine\ORM\EntityManager;
use Album\Entity\TblGalleries;
use Album\Entity\TblArtEntiry;
use Album\Entity\TblLikeArt;
use Album\Entity\TblComments;

class GalleriesController extends AbstractActionController
{
    public $entityManager;
    
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
        $galleries = $this->getEntityManager()->getRepository('Album\Entity\TblGalleries')->findAll();
        
        return new ViewModel ( 
                array( 
                    'galleries' => $galleries
                    )
                );
    }
    public function addAction()
    {
        $request = $this->getRequest();
        
        if ($request->isPost())
        {
            $galleries = (array) $request->getPost();
//            var_dump($galleries);
            
        }
        
        if (isset($galleries))
        {
            $newGal = new \Album\Entity\TblGalleries;
            
            $newGal->setGalName($galleries['galName']);
            $newGal->setGalStatut($galleries['galStatut']);
            $newGal->setGalAddress1($galleries['galAddress']);
            $newGal->setGalAddress2($galleries['galAddress1']);
            $newGal->setGalZipcode($galleries['galZipcode']);
            $newGal->setGalCity($galleries['galCity']);
            $newGal->setGalCountry($galleries['galCountry']);
            $newGal->setGalWebsite($galleries['website']);
            $newGal->setGalMail($galleries['galMail']); 
            $newGal->setGalPhoneNumber($galleries['galPhoneNumber']);
            $newGal->setSur($galleries['sur']);
            
            $em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
            $em->persist($newGal);
            $em->flush();
            
            $this->redirect()->toRoute('galleries', array('controller' => 'Galleries', 'action' => 'index'));
        }
        
    }
    
    
    
    
    
}
?>
