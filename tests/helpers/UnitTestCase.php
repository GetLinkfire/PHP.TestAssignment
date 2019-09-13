<?php

namespace Test\Linkfire\Assignment\Helpers;

use Phalcon\Di;
use Phalcon\Test\UnitTestCase as PhalconTestCase;

abstract class UnitTestCase extends PhalconTestCase
{
    public function setUp() : void
    {
        try {
            parent::setUp();
            // Load any additional services that might be required during testing
            $di = Di::getDefault();

            // Get any DI components here. If you have a config, be sure to pass it to the parent

            $this->setDi($di);
        } catch (\Exception $e) {
            throw $e;
        }
    }
}
