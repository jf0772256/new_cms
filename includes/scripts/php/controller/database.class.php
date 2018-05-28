<?php
/**
 * Database Class that conducts operations on the database.
 */
class Database
{
    /**
     * Database Connection Object
     *
     * @var object
     */
    private $db_con = null;
    /**
     * Constructor Class function for database 
     *
     * @param string $host Database 
     * @param string $database
     * @param string $user
     * @param string $password
     */
    protected function __construct($host,$database,$user,$password){
        define('HOST',$host);
        define('DB_NAME',$database);
        define('DB_USER',$user);
        define('DB_PASSWORD',$password);
    }
    protected function check_db_connection(){
        return $this->db_con->ping();
    }
    protected function write_data($sql, $params){
        //
    }
    protected function read_data($sql,$params){
        //
    }
}


?>