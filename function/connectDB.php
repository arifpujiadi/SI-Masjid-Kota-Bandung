<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "simasjid";

// Create connection
$conn = mysql_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
    mysql_select_db($database);
}

function querySelect($param, $table, $where, $limit){
    $results = array();
    $query = "SELECT " . $param . " ";
    $query .= "FROM " . $table ." ";
    if($where != null) $query .= "WHERE " . $where . " ";
    if($limit != null) $query .= "LIMIT " . $limit . "; ";
  
    $query = mysql_query($query);

    if(mysql_num_rows($query) > 0){
        $x = 0;
        while($row = mysql_fetch_assoc($query)){
            foreach($row as $key=>$value){
                $results[$x][$key] = $value;
            }
            $x++;
        }
        
    }
    return $results;
}

function queryInsert($table, $values){   
    $query = "INSERT INTO " . $table;
    $query .= " VALUES(".$values.")";
    
    if(mysql_query($query)){
        return true;
    }else{
        return false;
    }
}

function queryUpdate($table, $set, $where = null){
    $query = "UPDATE " . $table;
    $query .= " SET " . $set;
    if($where != null) $query .= " WHERE " . $where;
    
    if(mysql_query($query)){
        return true;
    }else{
        return false;
    }
}

function queryDelete($table, $where = null){
    $query = "DELETE FROM ".$table;
    if($where != null) $query .= " WHERE ".$where;
    if(mysql_query($query)){
        return true;
    }else{
        return false;
    }
}

?>