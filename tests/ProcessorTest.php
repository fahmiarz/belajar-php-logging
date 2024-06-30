<?php

namespace fahmi_arzalega\belajar\PHP\MVC;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Processor\GitProcessor;
use Monolog\Processor\HostnameProcessor;
use Monolog\Processor\MemoryUsageProcessor;
use Monolog\Test\TestCase;

class ProcessorTest extends TestCase
{

    public function testProcessorRecord()
    {
        $logger = new Logger(ProcessorTest::class);
        $logger->pushHandler(new StreamHandler("php://stderr"));
        $logger->pushProcessor(new GitProcessor());
        $logger->pushProcessor(new MemoryUsageProcessor());
        $logger->pushProcessor(new HostnameProcessor());
        $logger->pushProcessor(function ($record) {
            $record["extra"]["FA"] =[
                "app" => "Belajar PHP Logging",
                "author" => "Fahmi Arzalega"
            ];
            return $record;
        });
        $logger->info("Hello World", ["username"=>"fahmi"]);
        $logger->info("Hello World");
        $logger->info("Hello World lagi");

        self::assertNotNull($logger);
    }
}