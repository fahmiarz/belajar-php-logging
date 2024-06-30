<?php

namespace fahmi_arzalega\belajar\PHP\MVC;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Test\TestCase;

class LoggingTest extends TestCase
{
    public function testLogging()
    {
        $logger = new Logger(LoggingTest::class);

        $logger->pushHandler(new StreamHandler("php://stderr"));
        $logger->pushHandler(new StreamHandler(__DIR__ ."/../application.log"));

        $logger->info("Belajar Pemograman PHP Logging");
        $logger->info("Selamat Datang di Course Programmer Zaman Now");
        $logger->info("Ini informasi aplikasi logging");

        self::assertNotNull($logger);
    }

}