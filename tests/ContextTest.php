<?php

namespace fahmi_arzalega\belajar\PHP\MVC;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Test\TestCase;

class ContextTest extends TestCase
{
    public function testContext()
    {
        $logger = new Logger(ContextTest::class);
        $logger->pushHandler(new StreamHandler("php://stderr"));

        $logger->info("this is log message", ["username" => "fahmi"]);  
        $logger->info("try login user", ["username" => "fahmi"]);
        $logger->info("success login user", ["username" => "fahmi"]);

        self::assertNotNull($logger);

    }


}