<?php

namespace Src\Commands;

/**
 * Generate MySQL Command
 * 
 * @package Src\Commands
 * @version 1.0
 * @author Thiago <thiagom.devsec@gmail.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */
class QueryCommand
{
    /**
     * Build insert query
     * 
     * @param array
     * @param string
     * @return string
     */
    public function genInsert(array $data, string $table): string
    {
        $queryString = "INSERT INTO `{$table}` (";
        $count = 0;

        $fields = array_keys($data);
        $values = array_values($data);

        foreach ($fields as $field) {

            if ($count > 0) {
                $queryString .= ", ";
            }

            $count++;
            $queryString .= "`{$field}`";
        }

        $queryString .= ") VALUES (";
        $count = 0;

        foreach ($values as $value) {
            if ($count > 0) {
                $queryString .= ", ";
            }
            $count++;
            $queryString .= "'{$value}'";
        }

        $queryString .= ");";

        return $queryString;
    }
}
