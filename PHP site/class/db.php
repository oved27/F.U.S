<?php

class db {

    private $affected_rows;
    private $mysqli;
    private $host, $user, $pass, $dbName;

    public function __construct($host, $dbName, $user, $pass) {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->dbName = $dbName;
    }

    public function openConn() {
        $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->dbName);
        if ($this->mysqli->connect_error) {
            die('Connect Error (' . $this->mysqli->connect_errno . ') '
                    . $this->mysqli->connect_error);
        }
    }

    public function closeConn() {
        $this->mysqli->close();
    }

    public function selectQeury($query) {
        $arrayResult = array();
        if ($result = $this->mysqli->query($query)) {
            /* printf("Select returned %d rows.\n", $result->num_rows); */
            while ($obj = $result->fetch_object()) {
                $arrayResult[] = $obj;
                //printf ("%s (%s)\n", $obj->CourierID, $obj->IsActive);
            }

            /* free result set */
            $result->close();
            $this->mysqli->next_result();
        } else {
            throw new Exception("Error select query", 1);
        }
        $this->mysqli->commit();
        return $arrayResult;
    }

    public function updateQeury($query) {
        //$arrayResult = array();
        $this->affected_rows = 0;
        if ($this->mysqli->query($query)) {
            $this->affected_rows = $this->mysqli->affected_rows;
        } else {
            throw new Exception("Error update query", 1);
        }
        /* free result set */
        //$result->close();
        $this->mysqli->next_result();
        $this->mysqli->commit();
        //return $arrayResult;
    }

    public function getAffectedRows() {
        return $this->affected_rows;
    }

    public function printf($arrObj) {
        echo "<pre>";
        print_r($arrObj);
        echo "</pre>";
    }

}

?>