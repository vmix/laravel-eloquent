<?php
namespace models;

use App\Customer;

class CustomerTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testGet()
    {
        $customers = new Customer();
        codecept_debug($customers->get());
    }
}