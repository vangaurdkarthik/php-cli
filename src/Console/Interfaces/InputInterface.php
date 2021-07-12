<?php

namespace Pangaea\ConsoleCommands\Console\Interfaces;

use InvalidArgumentException;

/**
 * Interface for all input classes
 *
 * @package Pangaea\ConsoleCommands\Console\Interfaces
 */
interface InputInterface
{
    /**
     * Parsing Console Arguments
     *
     * @param string $token
     * @return void
     */
    public function parseArgument(string $token);

    /**
     * Parsing transferred to the Console parameters
     *
     * @param string $token
     * @return void
     */
    public function parseOption(string $token);

    /**
     * Returns the name of the command name
     *
     * @return string
     */
    public function getCommandName(): string;

    /**
     *Returns all arguments
     *
     * @return array
     */
    public function getArguments(): array;

    /**
     * Record new argument
     *
     * @param string $name
     */
    public function setArgument(string $name);

    /**
     * Returns True if the argument exists in InputInterface
     *
     * @param string $name
     *
     * @return bool
     */
    public function hasArgument($name): bool;

    /**
     * Returns all parameters
     *
     * @return array
     */
    public function getOptions(): array;

    /**
     * Returns the data named parameter
     *
     * @return string|string[]|bool|null Parameter content
     * @throws InvalidArgumentException When option given doesn't exist
     */
    public function getOption(string $name);

    /**
     * Sets the value for the name parameter
     *
     * @param string|string[]|bool|null $value The option value
     */
    public function setOption(string $name, $value);

    /**
     * Returns True if the parameter exists in InputInterface
     *
     * @param string $name
     * @return bool
     */
    public function hasOption(string $name): bool;
}
