<?php

namespace src\tests\integration;

use OxidEsales\TestingLibrary\UnitTestCase;
use src\controller\CategoryMapperController;

/**
 * Class CategoryMapperControllerTest
 */
class CategoryMapperControllerTest extends UnitTestCase
{
    /**
     * Standard setUp method calls parent first.
     */
    protected function setUp()
    {
        parent::setUp();
    }

    /**
     * Standard tearDown method calls parent last.
     */
    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * your test method...
     */
    public function testRender()
    {
        $controller = new CategoryMapperController();
        $result     = $controller->render();

        $this->assertEquals('test.tpl', $result);
    }

    /**
     * your test method...
     */
    public function testGetAllCategories()
    {
        $controller = new CategoryMapperController();
        $controller->render();

        $this->assertEquals(array(), $controller->getCategories());
    }
}
