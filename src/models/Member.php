<?php

namespace LMS\Models;

use mysqli;

class Member {
    private string $memberId;
    private string $name;
    private string $gender;
    private string $dateOfBirth;
    private mysqli $connection;
    public function __construct($member)
    {
        $this->memberId = $member['member_id'];
        $this->name = $member['name'];
        $this->gender = $member['gender'];
        $this->dateOfBirth = $member['date_of_birth'];
        $this->connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
    }
    public static function index()
    {
        echo "index()";
    }

    public function save()
    {
        $sql = "INSERT INTO member() VALUES()";
        $this->connection->query($sql);
        header("Location:member.php");
    }
}