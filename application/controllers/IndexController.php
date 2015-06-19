<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }
    public function pronatecAction()
    {
    	// action body
    }

    public function portariasAction()
    {
    	// action body
    }
    
    public function mapasAction()
    {
    	$this->view->navigation()->menu()->setPartial('meus-modulos/partes/menu/mapas.phtml');
    }

    public function linksAction()
    {
    	// action body
    }
    
    public function macroprocessoAction()
    {
    	$this->view->navigation()->menu()->setPartial('meus-modulos/partes/menu/mapas.phtml');
    }
    public function demandanteAction()
    {
    	$this->view->navigation()->menu()->setPartial('meus-modulos/partes/menu/mapas.phtml');
    }
    public function pactuacaoAction()
    {
    	$this->view->navigation()->menu()->setPartial('meus-modulos/partes/menu/mapas.phtml');
    }
    public function repactuacaoAction()
    {
    	$this->view->navigation()->menu()->setPartial('meus-modulos/partes/menu/mapas.phtml');
    }
    public function aditarpactuacaoAction()
    {
    	$this->view->navigation()->menu()->setPartial('meus-modulos/partes/menu/mapas.phtml');
    }
    public function ofertaturmasAction()
    {
    	$this->view->navigation()->menu()->setPartial('meus-modulos/partes/menu/mapas.phtml');
    }
    public function inscricaoonlineAction()
    {
    	$this->view->navigation()->menu()->setPartial('meus-modulos/partes/menu/mapas.phtml');
    }
    public function prematriculaAction()
    {
    	$this->view->navigation()->menu()->setPartial('meus-modulos/partes/menu/mapas.phtml');
    }
    public function frequenciaAction()
    {
    	$this->view->navigation()->menu()->setPartial('meus-modulos/partes/menu/mapas.phtml');
    }
    
    
    
}

