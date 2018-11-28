<?php

use PHPUnit\Framework\TestCase;
use smeetsmeister\printdealApiBundle\Client;

class ClientTest extends TestCase
{
    /**
     * I know its a bit of a dummy test, but we at least have a test :)
     */
    public function testClientObject()
    {
        $client = new Client("", "");
        $this->assertInstanceOf(Client::class, $client);
    }
}