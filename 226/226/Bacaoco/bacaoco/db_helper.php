<?php

include "database.php";

class DBHelper extends Database
{

    function __construct($conn)
    {
        $this->conn = $conn;
    }

    function add_samplehere($firstname, $lastname, $dob, $nationality)
    {
        return $this->query("INSERT INTO tblsamplehere(id, firstname, lastname, dob, nationality)
                                VALUES (NULL, '$firstname', '$lastname', '$dob', '$nationality')");
    }
    
    function get_samplehere()
    {
        $sql = "SELECT * FROM tblsamplehere";
        return $this->query($sql);
    }

    function login($username, $password)
    {
        $sql = "SELECT * FROM tbluseraccount WHERE username = \"$username\" and password = \"$password\"";
        $rs = $this->query($sql);
        if ($rs->num_rows > 0) {
            while ($row = $rs->fetch_assoc()) {
                return $row["username"];
            }
        }
        return false;
    }

    function register($username, $password, $firstname, $lastname)
    {
        $sql = "INSERT INTO tbluseraccount (username, password, firstname, lastname) VALUES (\"$username\", \"$password\", \"$firstname\", \"$lastname\")";
        return $this->query($sql);
    }

    function update_user($firstname, $lastname, $username,  $password)
    {
        $sql = "UPDATE tbluseraccount SET firstname = \"$firstname\", lastname = \"$lastname\", password = \"$password\" WHERE username = \"$username\"";
        return $this->query($sql);
    }

    function get_user($username)
    {
        $sql = "SELECT firstname, lastname FROM tbluseraccount WHERE username = \"$username\"";
        $rs = $this->query($sql);
        $row = $rs->fetch_row();
        return array("firstname" => $row[0], "lastname" => $row[1]);
    }
}