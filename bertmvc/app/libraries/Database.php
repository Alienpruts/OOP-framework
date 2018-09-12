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

    /**
     * Set the statement using the supplied query.
     * @param $sql
     */
    public function query($sql)
    {
        $this->stmt = $this->dbh->prepare($sql);
    }

    /**
     * Bind named parameters to their values.
     * @param $param
     * @param $value
     * @param null $type
     */
    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                default:
                    $type = PDO::PARAM_STR;

            }

            $this->stmt->bindValue($param, $value, $type);
        }
    }


    /**
     * Executes the prepared statement.
     * @return mixed
     */
    public function execute()
    {
        return $this->stmt->execute();
    }

    /**
     * Returns the resultset as an array of objects.
     * @return mixed
     */
    public function resultSet()
    {
        $this->execute();

        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * Returns a single result as an object.
     * @return mixed
     */
    public function single()
    {
        $this->stmt->execute();

        return $this->smtm->fetch(PDO::FETCH_OBJ);
    }

    /**
     * Returns the number of rows in the resultset.
     * @return mixed
     */
    public function rowCount()
    {
        return $this->stmt->rowCount();
    }
}