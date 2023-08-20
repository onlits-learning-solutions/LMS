<?php

namespace LMS\src\models\user;

class user
{
    private $connection =null;

    public function __construct()
    {
        $this->connection = new \mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
    }

    public function authenticate($user)
    {
        $user_id = $user['user_id'];
        $password = $user['password'];

        $sql = "SELECT user_id FROM user where user_id='$user_id' AND password='$password'";

        $result = $this->connection->query($sql);

        if($result->num_rows > 0){
            return 1;
         } else{
            return 0;
    }
}
public function __destruct()
{
    if ($this->connection != NULL)
        $this->connection->close();
}
}