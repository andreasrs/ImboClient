<?php
    namespace Imbo;

    class ModuleTest extends \PHPUnit_Framework_TestCase {

        public function setUp() {

        }

        public function tearDown() {

        }

        public function testConstruct() {
           $imboClient = new Module();
           $this->assertTrue(true);
        }

    }

