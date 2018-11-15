<?php
function my_sql_connection($host, $user, $password, $db){
    $con=mysqli_connect($host, $user, $password, $db);

    if (mysqli_connect_errno())
        echo "Failed to connect to MySQL: " . mysqli_connect_error();

    return $con;
}

// INSERT DB
function my_sql_insert($table, $data)
{
    global $connection;                             //coonnect DB
    $sql = "INSERT INTO" . " " . $table;            //
    $col = " (";
    $val = "";
    foreach ($data as $column => $value) {
        $col .= $column . ",";
        $val .= "'" . $value . "' ,";
    }
    $str1 = substr($col, 0, -1);                    // delete last symbol from string, in our case is comma
    $str2 = substr($val, 0, -1);
    $str1 .= ") VALUES (";
    $str2 .= ")";
    $sql .= $str1 . $str2;                          //query string

    $rez = mysqli_query($connection, $sql);
                                                    //checking our query
    if (mysqli_affected_rows($connection) > 0){
        echo 'Row was insert with succes <br>';
        return $rez;
    } else {
        echo'Error <br>';
    }
}

//UPDATE
// works only when we want to update ONE ROW
function my_sql_update($table, $new_data = array(), $condition=array()){
    global $connection;

    $sql = "UPDATE " . $table . " SET ";
    
    $total = count($new_data);
    $counter = 0;
    foreach ($new_data as $column => $value) {      //handle new data
        $counter++;
        if($counter == $total){
            $sql.= $column . "= '" . $value . "' ";
        } else{
            $sql.= $column . "= '" . $value . "',";
        }       
    }

    $sql .= " WHERE ";

    foreach($condition as $column => $value) {      //handle condtinions
        $sql .= $column . " = " . $value;
    }

    $rez = mysqli_query($connection, $sql);

    if (mysqli_affected_rows($connection) > 0){
        echo 'Row was update with succes <br>';
        return $rez;
    } else {
        echo'Error <br>';
    }

}

//DELETE by id
function my_sql_delete($table, $condition = array()){
    global $connection;
    $sql = "DELETE FROM" . " " . $table . " WHERE " . key($condition). " = " . $condition['id'];

    $rez =  mysqli_query($connection, $sql);

    if (mysqli_affected_rows($connection) > 0){
        echo 'Row was delete with succes <br>';
        return $rez;
    } else {
        echo'Error <br>';
    }

}

//Select one row
function my_sql_select_one($columns, $table, $conditions){
    global $connection;
    $sql = "SELECT ". $columns . "
            FROM " . $table . " ";

    $where = array();
    foreach($conditions as $column => $value) {
        $where[] = "`" . $column . "` = '" . $value . "'";
    }

    $sql .= " WHERE " . implode(" AND ", $where);
    $sql .= " LIMIT 1";
    $res = mysqli_query($connection, $sql);
    while($one = mysqli_fetch_assoc($res)){
        $rez[] = $one;
    }

    return $rez[0] ;
}

//Select all
function my_sql_select($columns, $table){
    global $connection;
    $sql = "SELECT ". $columns . "
            FROM " . $table . " ";
    $res = mysqli_query($connection, $sql);
    while($one = mysqli_fetch_assoc($res)){
        $rez[] = $one;
    }

    return $rez; 
}
?>