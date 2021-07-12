<?php

namespace Pangaea\ConsoleCommands\Console\Interfaces;

/**
 * Interface for all conclusion classes
 *
 * @package Pangaea\ConsoleCommands\Console\Interfaces
 */
interface OutputInterface
{
    /**
     * Output message
     *
     * @param string|iterable $messages
     * @param bool $newline
     */
    public function write($messages, bool $newline = false);

    /**
     * Displaying a message with a row translation at the end
     *
     * @param string|iterable $messages The message as an iterable of strings or a single string
     */
    public function writeln($messages);
}
