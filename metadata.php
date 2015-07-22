<?php

require_once "vendor/autoload.php";
/**
 * Metadata version
 */
$sMetadataVersion = '1.1';

/**
 * Module information
 */
$aModule = array(
    'id'          => 'usfcategorymapper',
    'title'       => 'USF Category Mapper Module',
    'description' => 'Lets you map your categories to google categories',
    'thumbnail'   => '',
    'version'     => '0.0.1',
    'author'      => 'Felix Lehmann',
    'url'         => 'http://usf.com',
    'email'       => 'info@usf.com',
    'extend'      => array(),
    'files'       => array(
        'CategoryMapperController'  => 'usf/categorymapper/src/controller/CategoryMapperController.php',
        'Oxcategories'              => 'usf/categorymapper/src/db/entities/Oxcategories.php',
        'OxCategoryRepository'      => 'usf/categorymapper/src/db/repositories/OxCategoryRepository.php',
        'CategoryService'           => 'usf/categorymapper/src/services/CategoryService.php',
        'CategoryTreeInterface'     => 'usf/categorymapper/src/domainObjects/CategoryTreeInterface.php',
        'CategoryTree'              => 'usf/categorymapper/src/domainObjects/CategoryTree.php',
        'CategoryTreeNodeInterface' => 'usf/categorymapper/src/domainObjects/CategoryTreeNodeInterface.php',
        'CategoryTreeNode'          => 'usf/categorymapper/src/domainObjects/CategoryTreeNode.php',
    ),
    'templates'   => array(),
    'blocks'      => array(
        array(),
    ),
    'settings'    => array(),
    'events'      => array(),
);
