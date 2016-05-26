<?php
/**
 * Created by PhpStorm.
 * User: mburakergenc
 * Date: 5/6/16
 * Time: 11:56 AM
 */

namespace tests\AppBundle\Controller;

require_once ("TestBase.php");
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TestSwiftMailer extends WebTestCase
{


    public function testMailAsaWebClientviaController(){
        $client = static::createClient();
        // Enable the profiler for the next request (it does nothing if the profiler is not available)
        $client->enableProfiler();
        $crawler = $client->request('POST', 'http://api/testswiftmailer');
        $mailCollector = $client->getProfile()->getCollector('swiftmailer');
        // Check that an e-mail was sent
        $this->assertEquals(1, $mailCollector->getMessageCount());
        $collectedMessages = $mailCollector->getMessages();
        $message = $collectedMessages[0];
        // Asserting e-mail data
        $this->assertInstanceOf('Swift_Message', $message);
        $this->assertEquals('Sample Subject', $message->getSubject());
        $this->assertEquals('mergenc@na.edu', key($message->getFrom()));
        $this->assertEquals('send@example.com', key($message->getTo()));
        $this->assertEquals('Hello World', $message->getBody());
    }

}