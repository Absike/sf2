<?php

namespace Ens\JobeetBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/hello/Fabien');

        $this->assertTrue($crawler->filter('html:contains("Hello Fabien")')->count() > 0);
    }
    
    
    public function testJobForm() {
        $client = static::createClient();

        $crawler = $client->request('GET', '/job/new');
        $this->assertEquals('Ens\JobeetBundle\Controller\JobController::newAction', $client->getRequest()->attributes->get('_controller'));

        $form = $crawler->selectButton('Preview your job')->form(array(
            'job[company]' => 'Sensio Labs',
            'job[url]' => 'http://www.sensio.com/',
            'job[file]' => __DIR__ . '/../../../../../web/bundles/ensjobeet/images/sensio-labs.gif',
            'job[position]' => 'Developer',
            'job[location]' => 'Atlanta, USA',
            'job[description]' => 'You will work with symfony to develop websites for our customers.',
            'job[how_to_apply]' => 'Send me an email',
            'job[email]' => 'for.a.job@example.com',
            'job[is_public]' => false,
                ));

        $client->submit($form);
        $this->assertEquals('Ens\JobeetBundle\Controller\JobController::createAction', $client->getRequest()->attributes->get('_controller'));
    }
}
