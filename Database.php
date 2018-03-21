<?php
/**
 * Created by PhpStorm.
class Database
{
    public function dbconnect($address,$username,$password)
    {
        $conn=mysql_connect($address,$username,$password);
        if (!$conn)
        {
            die('Could not connect: ' . mysqli_error($conn));
        }
    }
}
?>