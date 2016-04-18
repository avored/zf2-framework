<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Mage2;
use Symfony\Component\HttpFoundation\Response;
class View {
    
    protected $response;
    public function __construct() {
        $this->response = new Response();
    }

    public function render($templateName = "default") {
        
        $modulePath = "Calendar";
        
        $html = include $path = MODULE_DIR . "/" .$modulePath . "/View/" . $templateName . ".php";
        return $this->response->setContent($html);
        
    }
}