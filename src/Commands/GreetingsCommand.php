<?php

namespace Pangaea\ConsoleCommands\Commands;

use Pangaea\ConsoleCommands\Console\Command;

class GreetingsCommand extends Command
{
    protected string $name = 'greetings';

    protected string $description = 'Sample Description';

    protected array $help = [
        'greetings {arg1} {arg2, arg3} [param1=1] [param2={1,3,5}] {arg4}',
        ' Displays all arguments and options passed to the command in an unlimited number',
        '  in a format that is easy for the user to read.'
    ];

    protected function run()
    {
        $this->writeln([
            'Called command: ' . $this->name,
        ]);

        if (!empty($this->arguments())) {
            $this->writeln([
                '',
                'Arguments:',
            ]);
        }

        foreach ($this->arguments() as $argument) {
            $this->writeln('    -  ' . $argument);
        }

        if (!empty($this->options())) {
            $this->writeln('Options:');
        }

        foreach ($this->options() as $name => $value) {
            $this->writeln('    -  ' . $name);

            if (is_array($value)) {
                foreach ($value as $item) {
                    $this->writeln('        -  ' . $item);
                }
            } else {
                $this->writeln('        -  ' . $value);
            }
        }
    }
}

