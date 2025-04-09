<?php

namespace Core\Classes;

use \PDO;
use \PDOStatement;
use \PDOException;

class Db
{
    private $connected;
    private PDOStatement $stmt;
    private static $instance = null;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    public static function getInctance() 
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getConnection (array $db_config)
    {
        $dsn = "mysql:host={$db_config['host']};dbname={$db_config['dbname']};charset={$db_config['charset']}";

        try {
            $this->connected = new PDO($dsn, $db_config['username'], $db_config['password'], $db_config['options']);
            return $this;
        } catch (PDOException $e) {
            showError(500);
            die;
        }
    }

    public function query($query, $params = [])
    {
        try {
            $this->stmt = $this->connected->prepare($query);
            $this->stmt->execute($params);
        } catch (\Throwable $th) {
            return false;
        }

        return $this;
    }

    public function findAll()
    {
        return $this->stmt->fetchAll();
    }

    public function find()
    {
        return $this->stmt->fetch();
    }

    public function findOrFail() {
        $res = $this->find();

        if (empty($res)) {
            return showError(404);
        }
        return $res;
    }
}
