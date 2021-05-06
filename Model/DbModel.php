<?php

class DbModel
{

    public $connection;

    function __construct()
    {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $this->connection =  mysqli_connect("localhost", "root", "",'test_assesment_shubham');
    }

    function close_database_connection()
    {
        mysqli_close($this->connection);
    }

    function runSelectQuery($query){

        return $this->connection->query($query);
    }

}


?>