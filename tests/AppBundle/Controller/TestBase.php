<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 4/21/16
 * Time: 2:47 PM
 */

namespace tests\AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\DependencyInjection\Container;
use Doctrine\Common\Annotations\AnnotationRegistry;

AnnotationRegistry::registerFile("../../../vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/DoctrineAnnotations.php");

class TestBase extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Application
     */
    protected $application;
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    protected $entityManager;
    /**
     * @var \AppKernel
     */
    protected $kernel;
    /**
     * @var Container
     */
    protected $container;
    protected function setUp()
    {
        $this->kernel = new \AppKernel("test", true);
        $this->kernel->boot();
        $this->application = new Application($this->kernel);
        $this->application->setAutoExit(false);
        // Store the container and the entity manager in test case properties
        $this->container = $this->kernel->getContainer();
        $this->entityManager = $this->container->get("doctrine")->getManager();
        if(is_null($this->entityManager)){
            print("upssss entitiy manager is null :(");
        }
        parent::setUp();
    }
    public function tearDown()
    {
        // Shutdown the kernel.
        $this->kernel->shutdown();
        parent::tearDown();
    }
}
