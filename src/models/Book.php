<?php

namespace LMS\src\models;

class Book
{
    private $connection = null;

    public function __construct()
    {
        $this->connection = new \mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
    }

    public function index()
    {
        $sql = "SELECT * FROM book";
        $result = $this->connection->query($sql);
        if ($result->num_rows > 0)
            return $result->fetch_all(MYSQLI_ASSOC);
        else
            return null;
    }

    public function details(int $id)
    {
        $sql = "SELECT * FROM book WHERE id=$id";
        $result = $this->connection->query($sql);
        if ($result->num_rows > 0)
            return $result->fetch_assoc();
        else
            return null;
    }

    /* public function create($library)
     {
         $library_name =$library['library_name'];
         $address =$library['address'];
         $city =$library['city'];
         $state =$library['state'];
         $contact_person =$library['contact_person'];
         $contact_no =$library['contact_no'];
     

         $sql = "INSERT INTO book(library_name,address,city,state,contact_person, contact_no,Email,Website,registration_no,pan_no,GST_no,Bank_name,Account_no,IFSC_code,UPI_ID) VALUES('$library_name', '$address','$city','$state','$contact_person','$contact_no','$Email','$Website','$registration_no','$pan_no','$GST_no','$Bank_name','$Account_no','$IFSC_code','$UPI_ID')";
         $this->connection->query($sql);
         header("location:library.php");
     }

     public function update($book)
     {
         $id = $book['id'];
         $first_name = $book['first_name'];
         $middle_name = $book['middle_name'];
         $last_name = $book['last_name'];
         $contact_no = $book['contact_no'];

         $sql = "UPDATE book SET first_name='$first_name', middle_name='$middle_name', last_name='$last_name', contact_no='$contact_no' WHERE id=$id";
         $this->connection->query($sql);
         header('location:book.php');
     }

     public function delete(int $id)
     {
         $sql = "DELETE FROM book WHERE id=$id";
         $this->connection->query($sql);
         header("location:book.php");
     }

     public function count_book()
     {
         $sql = "SELECT COUNT(id) FROM book";
         $result = $this->connection->query($sql);
         return $result->fetch_array();
     }*/

    public function __destruct()
    {
        $this->connection->close();
    }
}