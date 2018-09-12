<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 10/09/18
 * Time: 14:02
 */

/**
 * Class Database
 * PDO Database class. Connects to database, creates prepared statement, bind values, returns results.
 */
class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;
    private $dbh;
    private $stmt;
    private $error;

    /**
     * Database constructor.
     */
    public function __construct()
    {
       $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
       $options = [
           PDO::ATTR_PERSISTENT => true,
           PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
       ];

       try{
           $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
       } catch(PDOException $e) {
           $this->error = $e->getMessage();
           echo $this->error;
       }
    }


}