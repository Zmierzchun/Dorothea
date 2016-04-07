<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ArticleControllerTest extends WebTestCase
{
    public function testShowarticle()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/showArticle');
    }

}
