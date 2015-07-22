<?php

namespace src\tests\unit;

use Oxcategories;
use OxidEsales\TestingLibrary\UnitTestCase;
use src\domainObjects\CategoryTreeNode;

/**
 * Class CategoryTreeNodeTest
 *
 * @package src\tests\unit
 */
class CategoryTreeNodeTest extends UnitTestCase
{
    /**
     * Test adding a child.
     */
    public function testAddChild()
    {
        $parent = $this->createTreeNode('1');
        $child  = $this->createTreeNode('2');

        $parent->addChild($child);
    }

    /**
     * Test getting the description.
     */
    public function testGetDescription()
    {
        $entity = $this->createEntity('bla');
        $entity->setOxdesc('description');
        $node = new CategoryTreeNode($entity);

        $this->assertEquals('description', $node->getDescription());
    }

    /**
     * Test setting the description.
     */
    public function testSetDescription()
    {
        $node = $this->createTreeNode('bla');
        $node->setDescription('blafoo');

        $this->assertEquals('blafoo', $node->getDescription());
    }

    /**
     * Test getting the CategoryId.
     */
    public function testGetCategoryId()
    {
        $node = $this->createTreeNode('bla');

        $this->assertEquals('bla', $node->getCategoryId());
    }

    /**
     * Test setting the CategoryId.
     */
    public function testSetCategoryId()
    {
        $node = $this->createTreeNode('bla');
        $node->setCategoryId('blafoo');

        $this->assertEquals('blafoo', $node->getCategoryId());
    }

    /**
     * Test getting the NestedLeftIndex.
     */
    public function testGetNestedLeftIndex()
    {
        $node = $this->createTreeNode('bla');
        $node->setNestedLeftIndex(4);

        $this->assertEquals(4, $node->getNestedLeftIndex());
    }

    /**
     * Test setting the NestedLeftIndex.
     */
    public function testSetNestedLeftIndex()
    {
        $node = $this->createTreeNode('bla');
        $node->setNestedLeftIndex(4);

        $this->assertEquals(4, $node->getNestedLeftIndex());
    }

    /**
     * Test getting the NestedRightIndex.
     */
    public function testGetNestedRightIndex()
    {
        $node = $this->createTreeNode('bla');
        $node->setNestedRightIndex(4);

        $this->assertEquals(4, $node->getNestedRightIndex());
    }

    /**
     * Test setting the NestedRightIndex.
     */
    public function testSetNestedRightIndex()
    {
        $node = $this->createTreeNode('bla');
        $node->setNestedRightIndex(4);

        $this->assertEquals(4, $node->getNestedRightIndex());
    }

    /**
     * Test getting the SortIndex.
     */
    public function testGetSortIndex()
    {
        $node = $this->createTreeNode('bla');
        $node->setSortIndex(444);

        $this->assertEquals(444, $node->getSortIndex());
    }

    /**
     * Test setting the SortIndex.
     */
    public function testSetSortIndex()
    {
        $node = $this->createTreeNode('bla');
        $node->setSortIndex(555);

        $this->assertEquals(555, $node->getSortIndex());
    }

    /**
     * Test setting and getting of parent node.
     */
    public function testSetGetParent(  )
    {
        $childNode = $this->createTreeNode('child');
        $parentNode = $this->createTreeNode('parent');

        $childNode->setParent($parentNode);

        $this->assertEquals($parentNode, $childNode->getParent());
    }

    /**
     * Test setting and getting of parent node.
     */
    public function testGetParentId(  )
    {
        $childNode = $this->createTreeNode('child');
        $parentNode = $this->createTreeNode('parent');

        $childNode->setParent($parentNode);

        $this->assertEquals('parent', $childNode->getParentId());
    }

    /**
     * Test getting the root id.
     */
    public function testGetRootId(  )
    {
        $childNode = $this->createTreeNode('child');
        $parentNode = $this->createTreeNode('parent');

        $childNode->setParent($parentNode);

        $this->assertEquals('parent', $childNode->getRootId());
    }





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
     * Helper method to create entities for testing.
     *
     * @param string $id The id of the entity.
     *
     * @return Oxcategories
     */
    protected function createEntity($id)
    {
        $entity = new Oxcategories();
        $entity->setOxid($id);

        return $entity;
    }

    /**
     * Helper method to create tree nodes.
     *
     * @param string $id The id of the entity.
     *
     * @return CategoryTreeNode The new created tree node with an entity with id.
     */
    protected function createTreeNode($id)
    {
        $entity   = $this->createEntity($id);
        $treeNode = new CategoryTreeNode($entity);

        return $treeNode;
    }
}
