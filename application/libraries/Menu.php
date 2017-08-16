<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Menu{
    private $arrayMenu;
    public function __construct($arr) {
        $this->arrayMenu = $arr;
    }
    public function construirMenu(){
        $ret_menu = "<nav><ul>";
        foreach ($this->arrayMenu as $opcion){
        $ret_menu .= "<li>".$opcion."</li>"; 
      };
      $ret_menu .="</ul></nav>";
      return $ret_menu;
    }
}
?>
