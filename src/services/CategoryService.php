<?php

namespace src\services;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

/**
 * Class CategoryService
 *
 * @package src\services
 */
class CategoryService
{

    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * The standard constructor.
     */
    public function __construct()
    {
        $this->init();
    }

    /**
     * Simple list all method.
     *
     * @return array
     */
    public function getAllCategories(){
        return $this->em->getRepository('Oxcategories')->findAll();
    }
    /**
     * Initializes the entity manager.
     *
     * @throws \Doctrine\ORM\ORMException
     */
    private function init()
    {
        $paths  = array(__DIR__ . "/../../config/orm");
        $config = Setup::createYAMLMetadataConfiguration($paths, true);
        $config->setFilterSchemaAssetsExpression('/^(oxcategories)$/');

        $conn = array(
            'driver'   => 'pdo_mysql',
            'host'     => 'localhost',
            'user'     => 'root',
            'password' => 'root',
            'dbname'   => 'ce_db_with_demodata',

        );

        $this->em = EntityManager::create($conn, $config);
    }
}