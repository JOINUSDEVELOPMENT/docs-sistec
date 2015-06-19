<?php

class CalendarioController extends Zend_Controller_Action
{

	public function init(){
			$this->view->navigation()->menu()->setPartial('meus-modulos/partes/menu/sistec.phtml');
	}
	
	
    public function indexAction()
    {
    }
    
 

}

