<?php

namespace Src\Utils;

/**
 * Load env values
 * 
 * @package Src\Utils
 * @author  Thiago <thiagom.devsec@gmail.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version 1.0
 */
class Env
{
    /**
     * Env default path location
     * 
     * @var string
     */
    private const ENVPATH = __DIR__ . '/../../.env';

    /**
     * Load env values
     * 
     * @return void
     */
    public function load(): void
    {
        $rows = file(self::ENVPATH, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($rows as $row) {
            if (strpos(trim($row), '#') === 0) {
                continue;
            }

            list($name, $value) =  explode('=', $row, 2);
            $name = trim($name);
            $value = trim($value);

            if (
                !array_key_exists($name, $_SERVER) &&
                !array_key_exists($name, $_ENV)
            ) {
                putenv(sprintf('%s=%s', $name, $value));
            }
        }
    }
}
