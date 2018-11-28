<?php

namespace smeetsmeister\printdealApiBundle;

class Client
{
    /**
     * Url used for contacting the printdealAPI
     */
    const URL = "https://api.printdeal.com";

    private $userId;
    private $secret;

    /**
     * Client constructor.
     * @param $userId
     * @param $secret
     */
    public function __construct(string $userId, string $secret)
    {
        $this->userId = $userId;
        $this->secret = $secret;
    }
}