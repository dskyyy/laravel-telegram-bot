<?php

namespace BlackRiver\TelegramBot\Contracts;

interface Command
{
    /**
     * Handle the command.
     *
     * @param  string $command
     * @param  string $message
     */
    public function handle($command, $message);
}
