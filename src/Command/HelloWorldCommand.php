<?php declare(strict_types=1);

namespace Palmyr\App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloWorldCommand extends Command
{

    public function __construct()
    {
        parent::__construct('app:hello_world');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Hello world!!!');

        return self::SUCCESS;
    }
}