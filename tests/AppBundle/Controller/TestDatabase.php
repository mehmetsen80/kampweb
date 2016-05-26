<?php
/**
 * Created by PhpStorm.
 * User: msen
 * Date: 3/10/16
 * Time: 4:54 PM
 */

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\DependencyInjection\Container;
use Doctrine\Common\Annotations\AnnotationRegistry;

AnnotationRegistry::registerFile("/var/www/kampweb/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/DoctrineAnnotations.php");

class TestDatabase extends \PHPUnit_Framework_TestCase
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
    public function testDatabaseConnection(){
        try {
            $this->entityManager->getConnection()->connect();
            echo EOL, EOL, "Database Connection is OK!", EOL, EOL;
            $this->generateEntities();
            $this->generateSchema();
        } catch (\Exception $e) {
            echo $e->getMessage(), EOL;
        }
    }
    protected function generateEntities(){
        $input = new ArrayInput(array('command' => 'doctrine:generate:entities', 'name' => 'AppBundle/Entity/Person'));
        $output = new BufferedOutput();
        $this->application->run($input, $output);
        echo $output->fetch(), EOL;
    }
    protected function generateSchema()
    {
        $input = new ArrayInput(array('command' => 'doctrine:schema:update', '--force' => true));
        $output = new BufferedOutput();
        $this->application->run($input, $output);
        echo $output->fetch(), EOL;
    }
}