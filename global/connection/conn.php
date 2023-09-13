<?php

class Database
{
    private $localhost;
    private $host;
    private $pass;
    private $dbname;
    private $pdo;


    public function __construct()
    {
        $this->localhost = "localhost";
        $this->host = "root";
        $this->pass = "";
        $this->dbname = "information";

        try {
            $this->pdo = new PDO("mysql:dbname=" . $this->dbname . ";hsot" . $this->localhost, $this->host, $this->pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }


    public function getConnection()
    {
        return $this->pdo;
    }

    public function setConnection($new_connection)
    {
        $this->pdo = $new_connection;
    }

    public function getHost()
    {
        return $this->host;
    }

    public function setHost($new_host)
    {
        $this->host = $new_host;
    }
    public function getPass()
    {
        return $this->pass;
    }
    public function setPass($new_pass)
    {
        $this->host = $new_pass;
    }
    public function getDbname()
    {
        return $this->dbname;
    }
    public function setDbname($new_Dbname)
    {
        $this->dbname = $new_Dbname;
    }
}
