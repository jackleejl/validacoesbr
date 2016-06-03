<?php

use JackLee\ValidacoesBR\Telefone;

class TelefoneTest extends \PHPUnit_Framework_TestCase
{

    protected function setUp()
    {
        
    }

    protected function tearDown()
    {
        
    }

    public function testTelefonesValidos()
    {
        $this->assertTrue(Telefone::valida('(11) 986475122'));

        $this->assertTrue(Telefone::valida('87 86231452'));

        $this->assertTrue(Telefone::valida('95 96231452'));
    }

    public function testTelefonesInvalidos()
    {
        $this->assertFalse(Telefone::valida('4322'));

        $this->assertFalse(Telefone::valida('(98) 90000-08653'));

        $this->assertFalse(Telefone::valida('(85)9008653'));
    }

}
