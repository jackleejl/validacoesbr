<?php

use JackLee\ValidacoesBR\Cep;

class CepTest extends \PHPUnit_Framework_TestCase
{

    protected function setUp()
    {
        
    }

    protected function tearDown()
    {
        
    }

    public function testCepsValidos()
    {
        $this->assertTrue(Cep::valida('05621-000'));

        $this->assertTrue(Cep::valida('04321000'));
    }

    public function testCepsInvalidos()
    {
        $this->assertFalse(Cep::valida('000000000-000'));

        $this->assertFalse(Cep::valida('1234'));
    }

}
