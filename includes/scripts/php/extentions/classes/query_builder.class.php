<?php

namespace query_builder;

class Builder{
    private $query = "";
    public function __construct(){}
    public function select($columns){
        //
    }
    public function from($table){
        //
    }
    public function insert($columns,$values){
        //
    }
    public function delete(){
        //
    }
    public function update($table,$col_vals){
        //
    }
    public function drop($type,$options=[],$values){
        //
    }
    public function alter($type,$how,$key_values){
        //
    }
    public function create($values){
        //
    }
}