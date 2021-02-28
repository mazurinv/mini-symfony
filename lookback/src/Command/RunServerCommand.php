<?php

declare(strict_types=1);

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RunServerCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('app:run-server')
            ->setDescription('Runs server.')
            ->setHelp('Runs server for development');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Run local server...');

        // TODO implement the logic
        // for new symfony projects its better to use https://symfony.com/doc/current/setup/symfony_server.html

        return 1;
    }
}
