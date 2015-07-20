<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
//$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);
$paths = array(__DIR__ . "/config/yml");
$config = Setup::createYAMLMetadataConfiguration($paths, $isDevMode);

// make doctrine read only tables i want
//$config->setFilterSchemaAssetsExpression('/^(table1|table2|prefixed_.*|.*_suffixed)$/');
$config->setFilterSchemaAssetsExpression('/^(oxcategories)$/');
// or if you prefer yaml or XML
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

// database configuration parameters
$conn = array(
    'driver' => 'pdo_mysql',
    'host' => 'localhost',
    'user'     => 'root',
    'password' => 'root',
    'dbname'   => 'session',

);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);

// register enum for reverse engineering
$conn = $entityManager->getConnection();
$conn->getDataBasePlatform()->registerDoctrineTypeMapping('enum', 'string');