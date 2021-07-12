<?php

namespace Pangaea\ConsoleCommands\Console\Interfaces;

/**
 * Interface for all console classes
 *
 * @package Pangaea\ConsoleCommands\Console\Interfaces
 */
interface ConsoleInterface
{
    /**
     * Processing input and running a command
     * Centrally responsible for handling exceptions thrown during
     * attempts to execute / execute a command and launch the body directly
     * console command
     *
     * @return int
     */
    function handle(): int;

    /**
     * Registration of all commands in the specified directories
     *
     * @param  array|string $paths Directories in which to search
     * @return void
     */
    function load($paths);

    /**
     * Displaying information about all registered commands in the console
     *
     */
    function getListOfAllCommands();

    /**
     * Shutting down the console
     *
     * @param int $status
     * @return void
     */
    function terminate(int $status = 0);
}