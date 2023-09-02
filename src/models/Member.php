<?php

namespace LMS\models;

use mysqli;

class Member {
    private string $member_id;
    private string $name;
    private string $gender;
    private string $date_of_birth;
    private mysqli $connection;
  
    public function __construct()
    {
        
        $this->connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
    }
    public static function index()
    {•

        $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
        $sql = "SELECT * FROM member";
        $result = $connection->query($sql);
        if ($result->num_rows > 0)
            return $result->fetch_all(MYSQLI_ASSOC);
        else
            return null;
    }


    public static function details(int $member_id)
    {
        $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
        $sql = "SELECT * FROM member  WHERE member_id=$member_id ";
        $result = $connection->query($sql);
        if ($result->num_rows > 0)
            return $result->fetch_assoc();
        else
            return null;
    }

    public function save()
    {
        $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
         $sql = "INSERT INTO member(member_id, name, gender, date_of_birth) VALUES('$this->member_id', '$this->name','$this->gender','$this->date_of_birth')";
         $connection->query($sql);
         header("location:member.php");
     }

     public function update($member)
     {
         $member_id =$member['member_id'];
         $name =$member['name'];
         $gender =$member['gender'];
         $date_of_birth =$member['date_of_birth'];

         $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
         $sql = "UPDATE member SET member_id='$member_id', name='$name', gender='$gender', date_of_birth='$date_of_birth'  WHERE member_id=$member_id";
         $connection->query($sql);
         header('location:member.php');
     }

     public function delete(int $member_id)
     {
         $sql = "DELETE FROM member WHERE member_id=$member_id";
         $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
         $connection->query($sql);
         header("location:member.php");
     }

     public function count_member()
     {
         $sql = "SELECT COUNT(id) FROM member";
         $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
         $result = $connection->query($sql);
         return $result->fetch_array();
     }
}
