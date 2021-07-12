<?php

namespace Pangaea\ConsoleCommands\Console;

use Pangaea\ConsoleCommands\Console\Interfaces\InputInterface;
use Pangaea\ConsoleCommands\Console\Interfaces\OutputInterface;

/**
 * Console Team class
 *
 * @package Pangaea\ConsoleCommands\Console
 */
class Command
{
    protected array $help           = [];
    protected string $name          = '';
    protected string $description   = '';

    protected InputInterface    $input;
    protected OutputInterface   $output;

    public function __construct(InputInterface $input, OutputInterface $output = null)
    {
        $this->input = $input;

        if (!empty($output)) {
            $this->output = $output;
        }
    }

    protected function run() {}

    /**
     * Run user logic command if the {Help} argument was transmitted
     * then the command description will be displayed
     *
     * @return int|void
     */
    public function execute()
    {
        if ($this->hasArgument('help')) {
            $this->writeln([
                'Command help:',
            ]);
            $this->writeln($this->help);
        } else {
            return $this->run() ?? 0;
        }
    }

    public function hasArgument($name): bool
    {
        return $this->input->hasArgument($name);
    }

    public function arguments(): array
    {
        return $this->input->getArguments();
    }

    public function hasOption(string $name): bool
    {
        return $this->input->hasOption($name);
    }

    public function option($key = null)
    {
        if (is_null($key)) {
            return $this->input->getOptions();
        }

        return $this->input->getOption($key);
    }

    public function options()
    {
        return $this->option();
    }

    //--------------------------- Shortcuts ---------------------------//

    public function writeln($messages)
    {
        $this->output->writeln($messages);
    }

    public function write($message, $newline = false)
    {
        $this->output->write($message, $newline);
    }

    //---------------------------- Getters ----------------------------//

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getHelp(): array
    {
        return $this->help;
    }
}
