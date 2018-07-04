<?php

namespace query_builder;

/**
 * Query Builder class, for types of creation, making the models a bit cleaner.
 * Be sure to pay attention to the block level comments for the functions inside as some functions expect certain formats.
 */
class Builder{
    private $query = "";
    public function __construct(){}

    /**
     * Starts the creation of of a select query statement
     *
     * @param string $columns comma separated values of the column names to select.
     * @return object
     */
    public function select($columns){
        //
    }
    /**
     * from identifyer, set to table name, used mostly with select()
     *
     * @param string $table table name as a string to use
     * @return object
     */
    public function from($table){
        //
    }

    /**
     * Adds Where clause to the query
     *
     * @param string $values String of comma separated values
     * @return object
     */
    public function where($values){
        //
    }

    /**
     * Adds limit calculation 
     *
     * @param integer $count Number of records to return
     * @param integer $offset Number of records to offset by
     * @return object
     */
    public function limit($count, $offset=0){
        //
    }

    /**
     * Creates insert statement
     * columns must have same length of values as values does
     * values must be in order of columns (this is not smart enough to know where you want the values to go)
     *
     * @param string $table Table name to insert into
     * @param array $columns Array of columns names
     * @param array $values Array of values to assign to the column
     * @param array $options Optional Array of values to add to the insert
     * 
     * @return object
     */
    public function insert($table,$columns,$values,$options=[]){
        //
    }

    /**
     * Starts the delete statement
     * Use with the where() or it will clear the table.
     * 
     * @param string $table
     * @return object
     */
    public function delete($table){
        //
    }

    /**
     * starts the update statement, use with where()
     *
     * @param string $table table String Name of table to do update on
     * @param array $col_vals Array of key value pairs --> ["column_name"=>"value",...]
     * @return object
     */
    public function update($table,$col_vals){
        //
    }

    /**
     * Does drop statement. You may use with alter();
     *
     * @param string $type what is being dropped
     * @param array $options Array of values should be formatted in the following way: ["temporary"=>true,"ifexists"=>false,...] to ensure proper use in the statement.
     * @param string $values Comma separated string of values to drop
     * @return void
     */
    public function drop($type,$options=[],$values){
        //
    }

    /**
     * builds alter statement
     *
     * @param string $type What kind of alter are you doing
     * @param string $table_name table to alter
     * @return object
     */
    public function alter($type,$table_name){
        //
    }

    /**
     * builds a create statement
     *
     * @param string $tableName The new table name to create
     * @param string $values comma separated value of the columns to create - may make this broken out.
     * @return object
     */
    public function create($tableName,$values){
        //
    }
}