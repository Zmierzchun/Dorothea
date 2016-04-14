<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AssetControllerTest extends WebTestCase
{
    public function testGetassetbyid()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/asset/{id}');
    }

    public function testGetassetbytag()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/asset/{tag}');
    }

}
