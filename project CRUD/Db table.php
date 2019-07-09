<?php

class DbTable
{
    protected static $table;

    static function DbConnect()
    {
        define("DB_SERVER", "localhost");
        define("DB_USER", "webuser");
        define("DB_PASS", "secretpassword");
        define("DB_NAME", "globe_bank");
        $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        return $connection;
    }


    static function findAll()
    {
        $db = static::DbConnect();
        $sql = "SELECT * FROM " . static::$table;
        //echo $sql;
        $result = mysqli_query($db, $sql);
        $records = [];
        while ($record = mysqli_fetch_assoc($result)) {
            $records[] = $record; // push the record into $records array
        }
        return $records;
    }

    static function delete($id)
    {
        $db = static::DbConnect();
        $sql = "DELETE FROM " . static::$table;
        $sql .= " where id= " . $id;
        $result = mysqli_query($db, $sql);

        // For DELETE statements, $result is true/false
        return $result;
    }


}