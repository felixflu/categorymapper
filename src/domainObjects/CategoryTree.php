<?php

namespace src\domainObjects;


use CategoryTreeNodeInterface;

class CategoryTree implements CategoryTreeInterface
{

    /**
     * Add a child category domain entity.
     *
     * @param CategoryTreeNodeInterface $child The child we append at the end of the child list.
     */
    public function addChild(CategoryTreeNodeInterface $child)
    {
        // TODO: Implement addChild() method.
    }

    /**
     * Get all children of the category tree domain entity.
     *
     * @return CategoryTreeNodeInterface[]|array All children as an array.
     */
    public function getRootNodes()
    {
        // TODO: Implement getRootNodes() method.
    }

    /**
     * Finds the CategoryTreeNode of the category with the given id.
     *
     * @param string $categoryId The id of the category to search for.
     *
     * @return null|CategoryTreeNodeInterface
     */
    public function findNodeById($categoryId)
    {
        // TODO: Implement findNodeById() method.
    }
}