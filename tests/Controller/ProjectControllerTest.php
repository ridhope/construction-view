<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProjectControllerTest extends WebTestCase
{
    public function testGetAllProjects()
    {
        $client = static::createClient();
        $client->request('GET', '/api/projects');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertJson($client->getResponse()->getContent());
    }

    public function testGetProjectById()
    {
        $client = static::createClient();
        $client->request('GET', '/api/projects/1');

        if ($client->getResponse()->getStatusCode() === 404) {
            $this->assertJson($client->getResponse()->getContent());
            $this->assertStringContainsString('Project not found', $client->getResponse()->getContent());
        } else {
            $this->assertEquals(200, $client->getResponse()->getStatusCode());
            $this->assertJson($client->getResponse()->getContent());
        }
    }

    public function testIndex()
    {
        $client = static::createClient();
        $client->request('GET', '/projects');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertStringContainsString('projects', $client->getResponse()->getContent());
    }

    public function testShow()
    {
        $client = static::createClient();
        $client->request('GET', '/projects/1');

        if ($client->getResponse()->getStatusCode() === 404) {
            $this->assertStringContainsString('Project not found', $client->getResponse()->getContent());
        } else {
            $this->assertEquals(200, $client->getResponse()->getStatusCode());
            $this->assertStringContainsString('project', $client->getResponse()->getContent());
        }
    }
}