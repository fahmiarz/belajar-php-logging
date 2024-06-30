<?php

namespace fahmi_arzalega\belajar\PHP\MVC;

use Monolog\Logger;
use PHPUnit\Framework\TestCase;

class LoggerTest extends TestCase
{
    public function testLogger()
    {
        $logger = new Logger("Fahmi Arzalega");

        self::assertNotNull($logger);
    }

    public function testLoggerWithName()
    {
        $logger = new Logger(LoggerTest::class);
        self::assertNotNull($logger);
    }


}