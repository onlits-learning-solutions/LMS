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

    public function __construct( $transaction)
    {
        $this->date = date("Y-m-d");
        $this->time = date("h:i:s");
        $this->book_id = $transaction['book_id'];
        $this->member_id = $transaction['member_id'];
        $this->return_by_date = $transaction['return_by_date'];
        
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

    public static function details(int $transaction_id)
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
        $sql = "INSERT INTO transaction( date, time, book_id, member_id, return_by_date) VALUES( '$this->date','$this->time','$this->book_id','$this->member_id','$this->return_by_date')";
        $connection->query($sql);
        header("location:transaction.php");
    }

    public function update($transaction)
     {
         $transaction_id =$transaction['transaction_id'];
         $date =$transaction['date'];
         $time =$transaction['time'];
         $date_of_birth =$transaction['date_of_birth'];
         $book_id =$transaction['book_id'];
         $member_id =$transaction['member_id'];
         $return_by_date =$transaction['return_by_date'];
         $actual_return_date =$transaction['actual_return_date'];
         $fine =$transaction['fine'];

         $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
         $sql = "UPDATE member SET transaction_id='$transaction_id', name='$date', gender='$time', date_of_birth='$date_of_birth' , book_id='$book_id' , member_id='$member_id' , return_by_date='$return_by_date' , actual_return_date='$actual_return_date' , fine='$fine'  WHERE transaction_id=$transaction_id";
         $connection->query($sql);
         header('location:transaction.php');
     }

     public function delete(int $transaction_id)
     {
         $sql = "DELETE FROM transaction WHERE transaction_id=$transaction_id";
         $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
         $connection->query($sql);
         header("location:transaction.php");
     }
     public static function count_transaction()
     {
         $sql = "SELECT COUNT(transaction_id) FROM transaction WHERE actual_return_date IS NULL";
         $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
         $result = $connection->query($sql);
         return $result->fetch_array();
     }
}