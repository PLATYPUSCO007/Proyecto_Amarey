<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PruebaTest
 *
 * @author Bautista
 */

use PHPUnit\Framework\TestCase;

class PruebaTest extends TestCase{
    //put your code here
    
    public function test_render(){
        
        require "Slug.php";
        
        $slug = new Slug("Curso de laravel");
        
        echo $slug->render();
        
        $expected = "cursos-de-laravel";
        
        $this->assertEquals($slug->render(), $expected);
    }
}
