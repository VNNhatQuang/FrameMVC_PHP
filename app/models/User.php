<?php

include_once "Database.php";

class User {

    protected $connection;

    public function __construct() {
        $db = new Database;
        $db->Connect();
        $this->connection = $db->connection;
        $db->connection = null;
    }



    
    
    /**
     * Get all users
     *
     * @return stdClass[]
     */
    public function getAll() {
        $statement = $this->connection->prepare("SELECT * FROM users");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    /**
     * Store User to database
     *
     * @param mixed $array
     * @return boolean
     */
    public function store(mixed $array) {
        $statement = $this->connection->prepare("INSERT INTO users(userName, password) VALUE(?,?)");
        $statement->bindParam(1, $array['userName']);
        $statement->bindParam(2, $array['password']);
        $result = $statement->execute();
        return $result;
    }

    /**
     * Update user to database
     *
     * @param mixed $array
     * @return boolean
     */
    public function update(mixed $array) {
        $statement = $this->connection->prepare("UPDATE users SET password=? WHERE userName=?");
        $statement->bindParam(1, $array['password']);
        $statement->bindParam(2, $array['userName']);
        $result = $statement->execute();
        return $result;
    }

    /**
     * Delete user
     *
     * @param string|int $key
     * @return boolean
     */
    public function destroy($key) {
        $statement = $this->connection->prepare("DELETE FROM users WHERE userName=?");
        $statement->bindParam(1, $key);
        $result = $statement->execute();
        return $result;
    }


    /**
     * Check Id is Exits in users table
     *
     * @param string|int $key
     * @return boolean
     */
    public function IdExits($key) {
        $statement = $this->connection->prepare("SELECT userName FROM users WHERE userName=?");
        $statement->bindParam(1, $key);
        $statement->execute();
        if($statement->fetchAll())
            return true;
        return false;
    }


    /**
     * Get user by Id
     *
     * @param string|int $key
     * @return stdClass
     */
    public function getUserById($key) {
        $statement = $this->connection->prepare("SELECT * FROM users WHERE userName=?");
        $statement->bindParam(1, $key);
        $statement->execute();
        $result = $statement->fetchObject();
        return $result;
    }




    public function __destruct() {
        $this->connection = null;
    }


}