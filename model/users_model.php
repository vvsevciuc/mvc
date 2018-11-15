<?php
function getAllUsers(){
    $users = my_sql_select('*','main');
    return $users;
}

function getOneUser($columns, $table, $condition){
    $news = my_sql_select_one($columns, $table, $condition);
    return $news;
}

function insertOneUser($table, $data){
    $insert = my_sql_insert($table, $data); //call function for insert
    return $insert;
}

function deleteOneUser($table, $condition){
    $delete = my_sql_delete($table, $condition); //call function for delete
    return $delete;
}

function updateOneUser($table, $new_data, $condition){
    $update = my_sql_update($table, $new_data, $condition); //call function for update
    return $update;
}
?>