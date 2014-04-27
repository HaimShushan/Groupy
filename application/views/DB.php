<?php

class DB {


    public $username = "a1779405_grp";
    public $password = "grp123";
    public $hostname = "mysql16.000webhost.com";
//$_db_connect = mysql_connect("mysql16.000webhost.com", "a1779405_grp", "grp123");
    public function  createConnection()
    {

        //connection to the database
        $dbhandle = mysql_connect($this->hostname, $this->username, $this->password)
        or die("Unable to connect to MySQL");
        echo "Connected to MySQL<br>";

    }

}

?>