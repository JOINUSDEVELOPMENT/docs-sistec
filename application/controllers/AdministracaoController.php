<?php

class AdministracaoController extends Zend_Controller_Action
{

	public function init(){
			$this->view->navigation()->menu()->setPartial('meus-modulos/partes/menu/sistec.phtml');
	}
	
    public function indexAction()
    {
    	
        // action body
    }
    
    public function usuariosAction()
    {
    	
    }


}

