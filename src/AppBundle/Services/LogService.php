<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 7/14/16
 * Time: 1:21 PM
 */

namespace AppBundle\Services;


use AppBundle\Entity\Log;
use Monolog\Handler\AbstractProcessingHandler;
use Symfony\Component\DependencyInjection\Container;
use Monolog\Logger;


class LogService extends AbstractProcessingHandler
{

    private $container;
    public function __construct(Container $container, $level = Logger::DEBUG, $bubble = true){
        $this->container = $container;
        parent::__construct($level, $bubble);
    }
    /**
     * Writes the record down to the log of the implementing handler
     *
     * @param  array $record
     * @return void
     */
    protected function write(array $record)
    {$log = new Log();
        $log->setChannel($record['channel']);
        $log->setLevel($record['level']);
        $log->setLevelname($record['level_name']);
        $log->setMessage($record['message']);
        $log->setContext(json_encode($record['context']));
        $log->setExtra(json_encode($record['extra']));
        $log->setFormatted($record['formatted']);

        $em=$this->container->get('doctrine.orm.entity_manager');
        $em->persist($log);
        $em->flush();
    }
}