<?php
/**
 * #PHPHEADER_OXID_ESHOP_ADMIN#
 */

namespace src\controller;

use oxAdminView;
use src\services\CategoryService;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * Class CategoryMapperController
 *
 * @package src\controller
 */
class CategoryMapperController extends OxAdminView
{

    protected $categories = array();

    /**
     * @var string The template of the controller.
     */
    protected $_sThisTemplate = "test.tpl";

    /**
     *
     */
    public function render()
    {
        parent::render();

        $categoryService  = new CategoryService();
        $this->categories = $categoryService->getAllCategories();


        return $this->_sThisTemplate;
    }

    /**
     * Getter for property.
     *
     * @return array
     */
    public function getCategories()
    {
        return $this->categories;
    }
}