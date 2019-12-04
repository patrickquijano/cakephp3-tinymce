<?php

namespace TinyMCE\Test\TestCase\View\Helper;

use Cake\TestSuite\TestCase;
use Cake\View\View;
use TinyMCE\View\Helper\TinyMCEHelper;

class TinyMCEHelperTest extends TestCase {

    /**
     * @var \TinyMCE\View\Helper\TinyMCEHelper
     */
    public $TinyMCE;

    /**
     * @return void
     */
    public function setUp() {
        parent::setUp();
        $view = new View();
        $this->TinyMCE = new TinyMCEHelper($view);
    }

    /**
     * @return void
     */
    public function tearDown() {
        unset($this->TinyMCE);
        parent::tearDown();
    }

    /**
     * @return void
     */
    public function testInitialization() {
        $this->markTestIncomplete('Not implemented yet.');
    }

}
