<?php

class PronatecController extends Zend_Controller_Action
{

	public function init(){
			$this->view->navigation()->menu()->setPartial('meus-modulos/partes/menu/pronatec.phtml');
	}
	
    public function indexAction()
    {
        // action body
    }
    
    public function usuariosAction()
    {
    	
    }
    
    public function ofertaturmaAction()
    {
    	 
    }
    


}

