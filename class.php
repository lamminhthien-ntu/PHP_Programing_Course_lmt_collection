<?php
class Book {
    var $title ;
    var $author;
    var $pages;
}

$book1 = new Book;
$book1->title = "Harry Porter" ;
$book1->author = "JK Rowling";
$book1->pages = 400;

$book2 = new Book;
$book2->title = "Lord Of the Rings" ;
$book2->author = "Tolkien";
$book2->pages = 700;

echo $book1->title . "<br>";
echo $book1->author. "<br>";
echo $book1->pages."<br>";

echo "</br>";

echo $book2->title . "<br>";
echo $book2->author. "<br>";
echo $book2->pages."<br>";

?>