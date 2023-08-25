<?php

namespace LMS\src\models;

use mysqli;

class Transaction
{
    
    private string $date;
    private string $time;
    private string $book_id;
    private string $member_id;
    private string $return_by_date;
    private string $actual_return_date;
    private string $fine;
    

    private mysqli $connection;

    public function __construct(string $date, string $time, string $book_id, string $member_id, string $return_by_date, string $actual_return_date, string $fine)
    {
        $this->date = $date;
        $this->time = $time;
        $this->book_id = $book_id;
        $this->member_id = $member_id;
        $this->return_by_date = $return_by_date;
        $this->actual_return_date = $actual_return_date;
        $this->fine = $fine;
        
        $this->connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
    }
    public static function index()
    {
        $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
        $sql = "SELECT * FROM transaction";
        $result = $connection->query($sql);
        if ($result->num_rows > 0)
            return $result->fetch_all(MYSQLI_ASSOC);
        else
            return null;
    }

    public function details(int $transaction_id)
    {
        $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
        $sql = "SELECT * FROM transaction  WHERE transaction_id=$transaction_id ";
        $result = $connection->query($sql);
        if ($result->num_rows > 0)
            return $result->fetch_assoc();
        else
            return null;
    }

    public function save()
    {
        $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
        $sql = "INSERT INTO transaction( date, time, book_id, member_id, return_by_date, actual_return_date, fine) VALUES( '$this->date','$this->time','$this->book_id','$this->member_id','$this->return_by_date','$this->actual_return_date','$this->fine')";
        $connection->query($sql);
        header("location:transaction.php");
    }
    
}