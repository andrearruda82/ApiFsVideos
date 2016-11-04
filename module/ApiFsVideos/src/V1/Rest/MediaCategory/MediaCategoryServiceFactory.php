<?php

namespace ApiFsVideos\V1\Rest\MediaCategory;

use Interop\Container\ContainerInterface;
use Interop\Container\Exception\ContainerException;
use Zend\ServiceManager\Exception\ServiceNotCreatedException;
use Zend\ServiceManager\Exception\ServiceNotFoundException;
use Zend\ServiceManager\Factory\FactoryInterface;

class MediaCategoryServiceFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $mediaCategoryRepository = $container->get('ApiFsVideos\\V1\\Rest\\MediaCategory\\MediaCategoryRepository');
        $tableGateway = $container->get('ApiFsVideos\\V1\\Rest\\MediaCategory\\TableGateway');

        return new MediaCategoryService($mediaCategoryRepository, $tableGateway);
    }
}