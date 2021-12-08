<?php

declare(strict_types=1);

namespace Src\Utils;

/**
 * Printer package
 * 
 * @package Src\Utils
 * @author  Thiago <thiagom.devsec@gmail.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */
class Printer
{

    /**
     * Print message
     * 
     * @param string
     * @return void
     */
    private function out(string $message): void
    {
        echo $message;
    }

    /**
     * Add new line
     * 
     * @return void
     */
    private function newLine(): void
    {
        $this->out(PHP_EOL);
    }

    /**
     * CLI display
     * 
     * @param string
     * @return void
     */
    public function display(string $message): void
    {
        $this->newLine();
        $this->out($message);
        $this->newLine();
    }
}
