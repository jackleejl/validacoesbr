<?php

use JackLee\ValidacoesBR\Cpf;

class CpfTest extends \PHPUnit_Framework_TestCase
{

    protected function setUp()
    {
        
    }

    protected function tearDown()
    {
        
    }

    public function testCpfsValidos()
    {
        $this->assertTrue(Cpf::valida('238.176.620-09'));

        $this->assertTrue(Cpf::valida('77608189800'));
    }

    public function testCpfsInvalidos()
    {
        $this->assertFalse(Cpf::valida('000.000.000-00'));

        $this->assertFalse(Cpf::valida('11111111111'));
    }

}
