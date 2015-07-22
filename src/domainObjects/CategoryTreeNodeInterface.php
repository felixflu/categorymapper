<?php

use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * Interface CategoryTreeNodeInterface: The contract for a node in the tree.
 */
interface CategoryTreeNodeInterface
{
    /**
     * Adds a child node.
     *
     * @param CategoryTreeNodeInterface $child Child node.
     */
    public function addChild(CategoryTreeNodeInterface $child);

    /**
     * Inserts a child node before a given node.
     *
     * @param CategoryTreeNodeInterface $child         Node to add.
     * @param string                    $nextSiblingId The node before.
     */
    public function insertChildBeforeSibling(CategoryTreeNodeInterface $child, $nextSiblingId);

    /**
     * Removes a child node.
     *
     * @param CategoryTreeNodeInterface $child Node to remove.
     */
    public function removeChild(CategoryTreeNodeInterface $child);

    /**
     * Removes all children.
     */
    public function clearChildren();

    /**
     * Returns all children.
     *
     * @return CategoryTreeNodeInterface[]|array The children array.
     */
    public function getChildren();

    /**
     * Getter for Description.
     *
     * @return string Description.
     */
    public function getDescription();

    /**
     * Setter for description.
     *
     * @param string $description Description.
     */
    public function setDescription($description);

    /**
     * Getter for category id.
     *
     * @return string Category id.
     */
    public function getCategoryId();

    /**
     * Setter for category id.
     *
     * @param string $categoryId Category id.
     */
    public function setCategoryId($categoryId);

    /**
     * Getter for nested left index.
     *
     * @return int Nested left index.
     */
    public function getNestedLeftIndex();

    /**
     * Setter for nested left index.
     *
     * @param int $nestedLeftIndex Nested left index.
     */
    public function setNestedLeftIndex($nestedLeftIndex);

    /**
     * Getter for nested right index.
     *
     * @return int Nested right index.
     */
    public function getNestedRightIndex();

    /**
     * Setter for nested right index.
     *
     * @param int $nestedRightIndex Nested right index.
     */
    public function setNestedRightIndex($nestedRightIndex);

    /**
     * Getter for sort index.
     *
     * @return int Sort index.
     */
    public function getSortIndex();

    /**
     * Setter for sort index.
     *
     * @param int $sortIndex Sort index.
     */
    public function setSortIndex($sortIndex);

    /**
     * Getter for parent node.
     *
     * @return CategoryTreeNodeInterface Parent node.
     */
    public function getParent();

    /**
     * Setter for parent node.
     *
     * @param CategoryTreeNodeInterface $parent Parent node.
     */
    public function setParent(CategoryTreeNodeInterface $parent);

    /**
     * Gets the id of the parent node.
     *
     * @return string Id of the parent node.
     */
    public function getParentId();

    /**
     * Gets the id of the root node.
     *
     * @return string Id of the root node.
     */
    public function getRootId();

    /**
     * Sorts an array of tree nodes.
     *
     * @param array $nodes Array to sort.
     *
     * @return CategoryTreeNodeInterface[] Sorted array of tree nodes.
     */
    public static function sortTreeNodes(array $nodes);

    /**
     * Inserts a node into a given array.
     *
     * @param CategoryTreeNodeInterface $node          Node to add.
     * @param string                    $nextSiblingId Position to add.
     * @param array                     $siblings      Given array.
     *
     * @return CategoryTreeNodeInterface[] Array with the inserted node.
     */
    public static function insertNodeIntoArray(CategoryTreeNodeInterface $node, $nextSiblingId, array $siblings);

    /**
     * Removes a node from a given array.
     *
     * @param CategoryTreeNodeInterface $removeNode Node to remove.
     * @param array                     $nodes      Given array.
     *
     * @return CategoryTreeNodeInterface[] Array without the removed node.
     */
    public static function removeNodeFromArray(CategoryTreeNodeInterface $removeNode, array $nodes);
}
