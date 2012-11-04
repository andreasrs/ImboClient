<?php
    namespace Imbo;

    class ClientTest extends \PHPUnit_Framework_TestCase {

        public function setUp() {

        }

        public function tearDown() {

        }

        public function testConstruct() {
           $imboClient = new Client();
           $this->assertTrue(true);
        }

    }

