<?php

namespace LMS\src\models;

use LMS\models\DatabaseContext;
use mysqli;

class Book
{
    private string $id;
    private string $title;
    private string $edition;
    private string $author;
    private string $publication;
    private string $isbn10;
    private string $isbn13;
    private string $pages;
    private string $price;

    private mysqli $connection;

    public function __construct(array $book)
    {
        
        $this->id = $book['id'];
        $this->title = $book['title'];
        $this->edition = $book['edition'];;
        $this->author = $book['author'];
        $this->publication = $book['publication'];;
        $this->isbn10 = $book['isbn10'];
        $this->isbn13 = $book['isbn13'];;
        $this->pages = $book['pages'];
        $this->price = $book['price'];
    }

    public static function getBookId(): string
    {
        $connection = DatabaseContext::getConnection();
        $sql = "SELECT id FROM book ORDER BY id DESC LIMIT 1";
        $result = $connection->query($sql);
        if($result->num_rows > 0)
        {
            $row = $result->fetch_row();
            $book_id = substr($row[0], 1, 4);
            $book_id++;
            if($book_id < 10)
                return "B000$book_id";
            elseif($book_id < 100)
                return "B00$book_id";
        } else {
            return "B0001";
        }
    }

    public static function index(): array
    {
        $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
        $sql = "SELECT * FROM book";
        $result = $connection->query($sql);
        if ($result->num_rows > 0)
            return $result->fetch_all(MYSQLI_ASSOC);
        else
            return null;
    }

    public static function details(int $id)
    {
        $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
        $sql = "SELECT * FROM book  WHERE id=$id ";
        $result = $connection->query($sql);
        if ($result->num_rows > 0)
            return $result->fetch_assoc();
        else
            return null;
    }

    public function save()
    {
        $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
        // $book_id = Book::getBookId();
        $sql = "INSERT INTO book(id, title, edition, author, publication, isbn10, isbn13, pages, price) VALUES('$this->id', '$this->title','$this->edition','$this->author','$this->publication','$this->isbn10','$this->isbn13','$this->pages','$this->price')";
        $connection->query($sql);
        header("location:book.php");
    }


    public static function update($book)
    {
        $id = $book['id'];
        $title = $book['title'];
        $edition = $book['edition'];
        $author = $book['author'];
        $publication = $book['publication'];
        $isbn10 = $book['isbn10'];
        $isbn13 = $book['isbn13'];
        $pages = $book['pages'];
        $price = $book['price'];

        $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
        $sql = "UPDATE book SET title='$title', edition='$edition', author='$author' , publication='$publication', isbn10='$isbn10', isbn13='$isbn13', pages='$pages', price='$price' WHERE id='$id";
        $connection->query($sql);
        header('location:book.php');
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM book WHERE id=$id";
        $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
        $connection->query($sql);
        header("location:book.php");
    }

    public function count_book()
    {
        $sql = "SELECT COUNT(id) FROM book";
        $connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
        $result = $connection->query($sql);
        return $result->fetch_array();
    }
}