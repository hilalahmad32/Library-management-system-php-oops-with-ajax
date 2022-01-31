<?php
class Database
{
    private $localhost = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "php_library_system";

    private $conn = false;
    private $mysqli = "";
    private $result = array();

    public function __construct()
    {
        if (!$this->conn) {
            $this->mysqli = new mysqli($this->localhost, $this->username, $this->password, $this->database);
            $this->conn = true;
            if ($this->mysqli->connect_error) {
                array_push($this->result, $this->mysqli->connect_error);
                return false;
            }
        } else {
            return true;
        }
    }
    // insert data
    public function insert($table, $params = array())
    {
        if ($this->tableExists($table)) {
            $table_column = implode(', ', array_keys($params));
            $table_value = implode("', '", array_values($params));
            $sql = "INSERT INTO $table ($table_column) VALUES ('$table_value')";
            if ($this->mysqli->query($sql)) {
                array_push($this->result, true);
                return true;
            } else {
                array_push($this->result, $this->mysqli->error);
                return false;
            }
        } else {
            return false;
        }
    }

    // select data
    public function select($table, $row = "*", $join = null, $where = null , $order = null,$limit = null)
    {
        if ($this->tableExists($table)) {
            $sql = "SELECT $row FROM $table";
            if ($join != null) {
                $sql .= " JOIN $join";
            }
            if ($order != null) {
                $sql .= " ORDER BY $order";
            }
            if ($where != null) {
                $sql .= " WHERE $where";
            }
            if ($limit != null) {
                $sql .= " LIMIT $limit";
            }
            $query = $this->mysqli->query($sql);
            if ($query) {
                $this->result = $query->fetch_all(MYSQLI_ASSOC);
                return true;
            } else {
                array_push($this->result, $this->mysqli->error);
                return false;
            }
        } else {
            return false;
        }
    }

    // edit data

    public function edit($table, $row = "*",$join=null, $where = null)
    {
        if ($this->tableExists($table)) {
            $sql = "SELECT $row FROM $table";
            if ($join != null) {
                $sql .= " JOIN $join";
            }
            if ($where != null) {
                $sql .= " WHERE $where";
            }
            
            $query = $this->mysqli->query($sql);
            if ($query) {
                $this->result = $query->fetch_all(MYSQLI_ASSOC);
                return true;
            } else {
                array_push($this->result, $this->mysqli->error);
                return false;
            }
        } else {
            return false;
        }
    }
    // update data

    public function update($table,$params= array(),$where= null)
    {
        if($this->tableExists($table)){  
            $arg=array();
            foreach($params as $key=>$val){
                $arg[]="$key ='{$val}'";
            }
            $sql="UPDATE $table SET ".implode(', ',$arg);
            if($where != null) {
                $sql .= " WHERE $where";
            }
            if($this->mysqli->query($sql)){  
                array_push($this->result,true);
                return true;
            }else{  
                array_push($this->result,false);
                return false;
            }
        }else{  
            return false;
        }
    }
    // delete data
    public function delete($table,$where=null)
    {
        if($this->tableExists($table)){  
            $sql="DELETE FROM $table";
            if($where != null){  
                $sql .= " WHERE $where";
            }
            if($this->mysqli->query($sql)){  
                array_push($this->result,true);
                return true;
            }else{  
                array_push($this->result,$this->mysqli->error);
                return false;
            }
        }else{  
            return false;
        }
    }


    // check table exist or  not

    private function tableExists($table)
    {
        $sql = "SHOW TABLES FROM $this->database LIKE  '$table'";
        $tableInDb = $this->mysqli->query($sql);
        if ($tableInDb) {
            if ($tableInDb->num_rows == 1) {
                return true;
            } else {
                array_push($this->result, $table . " Does not exist");
                return false;
            }
        } else {
            return false;
        }
    }

    public function getResult()
    {
        $val = $this->result;
        $this->result = array();
        return $val;
    }

    public function __destruct()
    {
        if ($this->conn) {
            if ($this->mysqli->close()) {
                $this->conn = false;
                return true;
            }
        } else {
            return false;
        }
    }
}
