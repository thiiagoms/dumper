<?php

namespace Src\Database;

use Src\Utils\Env;
use PDO, PDOException;

/**
 * Database connection
 * 
 * @package Src\Database
 * @author  Thiago <thiago.devsec@gmail.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version 1.0
 */
class Database
{
    /**
     * Database host
     * 
     * @var string
     */
    private string $dbHost;

    /**
     * Database Port
     * 
     * @var int
     */
    private int $dbPort;

    /**
     * Database name
     * 
     * @var string
     */
    private string $dbName;

    /**
     * Database user
     * 
     * @var string
     */
    private string $dbUser;

    /**
     * Database password
     * 
     * @var string
     */
    private string $dbPass;

    /**
     * Oject connection
     * 
     * @var PDO
     */
    private PDO $con;

    public function __construct()
    {
        (new Env())->load();
        $this->dbHost = getenv('DATABASE_HOST');
        $this->dbPort = getenv('DATABASE_PORT');
        $this->dbName = getenv('DATABASE_NAME');
        $this->dbUser = getenv('DATABASE_USER');
        $this->dbPass = getenv('DATABASE_PASS');
    }

    /**
     * Open database connection
     * 
     * @return PDO
     */
    public function conection(): PDO
    {
        try {
            $this->con = new PDO('mysql:host=' . $this->dbHost . ';port=' . $this->dbPort . ';dbname=' . $this->dbName, $this->dbUser, $this->dbPass);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $this->con;
        } catch (PDOException $e) {
            echo "[*] Code: {$e->getCode()} - Message: {$e->getMessage()}";
        }
    }
}
