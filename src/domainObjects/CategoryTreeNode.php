<?php

namespace src\domainObjects;

use CategoryTreeNodeInterface;
use Oxcategories;
use Symfony\Component\Serializer\Normalizer\NormalizableInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * Class CategoryTreeNode represents one node of the category tree.
 *
 * @package src\domainObjects
 */
class CategoryTreeNode implements CategoryTreeNodeInterface
{

    /**
     * @var Oxcategories The entity representing the category.
     */
    protected $categoryEntity;

    /**
     * @var CategoryTreeNode Child categories.
     */
    protected $children = array();

    /**
     * @var CategoryTreeNode The parent category of this element.
     */
    protected $parent = null;

    /**
     * The standard constructor.
     *
     * @param $categoryEntity
     */
    public function __construct($categoryEntity)
    {
        $this->categoryEntity = $categoryEntity;
    }

    /**
     * Adds a child node.
     *
     * @param CategoryTreeNodeInterface $child Child node.
     */
    public function addChild(CategoryTreeNodeInterface $child)
    {
        // TODO: Implement addChild() method.
    }

    /**
     * Inserts a child node before a given node.
     *
     * @param CategoryTreeNodeInterface $child         Node to add.
     * @param string                    $nextSiblingId The node before.
     */
    public function insertChildBeforeSibling(CategoryTreeNodeInterface $child, $nextSiblingId)
    {
        // TODO: Implement insertChildBeforeSibling() method.
    }

    /**
     * Removes a child node.
     *
     * @param CategoryTreeNodeInterface $child Node to remove.
     */
    public function removeChild(CategoryTreeNodeInterface $child)
    {
        // TODO: Implement removeChild() method.
    }

    /**
     * Removes all children.
     */
    public function clearChildren()
    {
        $this->children = array();
    }

    /**
     * Returns all children.
     *
     * @return CategoryTreeNodeInterface[]|array The children array.
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Getter for Description.
     *
     * @return string Description.
     */
    public function getDescription()
    {
        return $this->categoryEntity->getOxdesc();
    }

    /**
     * Setter for description.
     *
     * @param string $description Description.
     */
    public function setDescription($description)
    {
        $this->categoryEntity->setOxdesc($description);
    }

    /**
     * Getter for category id.
     *
     * @return string Category id.
     */
    public function getCategoryId()
    {
        return $this->categoryEntity->getOxid();
    }

    /**
     * Setter for category id.
     *
     * @param string $categoryId Category id.
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryEntity->setOxid($categoryId);
    }

    /**
     * Getter for nested left index.
     *
     * @return int Nested left index.
     */
    public function getNestedLeftIndex()
    {
        return $this->categoryEntity->getOxleft();
    }

    /**
     * Setter for nested left index.
     *
     * @param int $nestedLeftIndex Nested left index.
     */
    public function setNestedLeftIndex($nestedLeftIndex)
    {
        $this->categoryEntity->setOxleft($nestedLeftIndex);
    }

    /**
     * Getter for nested right index.
     *
     * @return int Nested right index.
     */
    public function getNestedRightIndex()
    {
        return $this->categoryEntity->getOxright();
    }

    /**
     * Setter for nested right index.
     *
     * @param int $nestedRightIndex Nested right index.
     */
    public function setNestedRightIndex($nestedRightIndex)
    {
        $this->categoryEntity->setOxright($nestedRightIndex);
    }

    /**
     * Getter for sort index.
     *
     * @return int Sort index.
     */
    public function getSortIndex()
    {
        return $this->categoryEntity->getOxsort();
    }

    /**
     * Setter for sort index.
     *
     * @param int $sortIndex Sort index.
     */
    public function setSortIndex($sortIndex)
    {
        $this->categoryEntity->setOxsort($sortIndex);
    }

    /**
     * Getter for parent node.
     *
     * @return CategoryTreeNodeInterface Parent node.
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Setter for parent node.
     *
     * @param CategoryTreeNodeInterface $parent Parent node.
     */
    public function setParent(CategoryTreeNodeInterface $parent)
    {
        $this->parent = $parent;
    }

    /**
     * Gets the id of the parent node.
     *
     * @return string Id of the parent node.
     */
    public function getParentId()
    {
        return $this->parent->getCategoryId();
    }

    /**
     * Gets the id of the root node.
     *
     * @return string Id of the root node.
     */
    public function getRootId()
    {
        return $this->findRootId($this);
    }

    /**
     * Sorts an array of tree nodes.
     *
     * @param array $nodes Array to sort.
     *
     * @return CategoryTreeNodeInterface[] Sorted array of tree nodes.
     */
    public static function sortTreeNodes(array $nodes)
    {
        // TODO: Implement sortTreeNodes() method.
    }

    /**
     * Inserts a node into a given array.
     *
     * @param CategoryTreeNodeInterface $node          Node to add.
     * @param string                    $nextSiblingId Position to add.
     * @param array                     $siblings      Given array.
     *
     * @return CategoryTreeNodeInterface[] Array with the inserted node.
     */
    public static function insertNodeIntoArray(CategoryTreeNodeInterface $node, $nextSiblingId, array $siblings)
    {
        // TODO: Implement insertNodeIntoArray() method.
    }

    /**
     * Removes a node from a given array.
     *
     * @param CategoryTreeNodeInterface $removeNode Given array.
     * @param array                     $nodes      Node to remove.
     *
     * @return CategoryTreeNodeInterface[] Array without the removed node.
     */
    public static function removeNodeFromArray(CategoryTreeNodeInterface $removeNode, array $nodes)
    {
        // TODO: Implement removeNodeFromArray() method.
    }

    /**
     * Recursive search for the id of the root category.
     *
     * @param CategoryTreeNode $node The node to start with.
     *
     * @return string The id of the root category.
     */
    private function findRootId(CategoryTreeNode $node)
    {
        if ($node->parent == null) {
            return $node->getCategoryId();
        }

        return $this->findRootId($node->parent);
    }
}