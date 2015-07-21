<?php
/**
 * #PHPHEADER_OXID_ESHOP_ADMIN#
 */

namespace src\controller;

use oxAdminView;
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

        $dic    = new ContainerBuilder();
        $loader = new YamlFileLoader($dic, new FileLocator(__DIR__));
        $loader->load('services.yml');

        return $this->_sThisTemplate;
    }
}