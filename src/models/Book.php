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

    public function create($book)
     {
         $id =$book['id'];
         $title =$book['title'];
         $edition =$book['edition'];
         $author =$book['author'];
         $publication =$book['publication'];
         $isbn10 =$book['isbn10'];
         $isbn13 =$book['isbn13'];
         $pages =$book['pages'];
         $price =$book['price'];
     

         $sql = "INSERT INTO book(id, title, edition, author, publication, isbn10, isbn13, pages, price) VALUES('$id', '$title','$edition','$author','$publication','$isbn10','$isbn13','$pages','$price')";
         $this->connection->query($sql);
         header("location:book.php");
     }

     public function update($book)
     {
         $id =$book['id'];
         $title =$book['title'];
         $edition =$book['edition'];
         $author =$book['author'];
         $publication =$book['publication'];
         $isbn10 =$book['isbn10'];
         $isbn13 =$book['isbn13'];
         $pages =$book['pages'];
         $price =$book['price'];

         $sql = "UPDATE book SET id='$id', title='$title', edition='$edition', author='$author' , publication='$publication', isbn10='$isbn10', isbn13='$isbn13', pages='$pages', price='$price' WHERE id=$id";
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
     }

    public function __destruct()
    {
        $this->connection->close();
    }
}