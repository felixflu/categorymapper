<?php
/**
 * #PHPHEADER_OXID_ESHOP_ADMIN#
 */

namespace src\controller;

use oxAdminView;

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

        return $this->_sThisTemplate;
    }
}