<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateUserCommand extends Command
{
    protected static $defaultName = 'database:check';

    protected function configure()
    {
        $this->setDescription('Checks database and created them, if not exists')
            ->setHelp('');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        return 0;
    }
}