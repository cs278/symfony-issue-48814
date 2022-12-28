<?php

namespace App;

use Sentry\State\HubInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class TestCommand extends Command
{
    protected static $defaultName = 'test';

    public function __construct(private ?HubInterface $hub)
    {
        parent::__construct();
    }

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        dump($this->hub);

        return 0;
    }
}