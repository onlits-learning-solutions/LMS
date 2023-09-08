<?php

namespace LMS\src\models;

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

    public function __construct()
    {
        
        $this->connection = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
    }

    public static function index()
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
        $sql = "UPDATE book SET id='$id', title='$title', edition='$edition', author='$author' , publication='$publication', isbn10='$isbn10', isbn13='$isbn13', pages='$pages', price='$price' WHERE id=$id";
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

	/**
	 * @param mysqli $connection 
	 * @return self
	 */
	public function setConnection(mysqli $connection): self {
		$this->connection = $connection;
		return $this;
	}
}