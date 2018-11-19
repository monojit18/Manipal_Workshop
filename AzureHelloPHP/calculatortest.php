<?php
require 'calculator.php';
 
class CalculatorTests extends PHPUnit\Framework\TestCase
{
    private $id;
    
 
    protected function setUp()
    {
        $this->calculator = new Calculator();
    }
 
    protected function tearDown()
    {
        $this->calculator = NULL;
    }
 
     /**
     * @covers BankAccount::getBalance
     */
    public function testAdd()
    {
        
        $result = $this->calculator->add(1, 2);        
        $this->assertEquals(3, $result);
    }
 
}