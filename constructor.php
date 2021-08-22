<?php
class Book {
    var $title ;
    var $author;
    var $pages;

    // function __construct($names) {
    //     echo "New Book Created . Names is $names<br>";
    // }

    function __construct($aTitle, $aAuthor, $aPages) {
        $this->title = $aTitle;
        $this->author = $aAuthor;
        $this->pages = $aPages;
    }

}

// $book1 = new Book("Mike");
// $book1->title = "Harry Porter" ;
// $book1->author = "JK Rowling";
// $book1->pages = 400;

$book1 = new Book("Harry Porter","JK Rowling",400);

// $book2 = new Book("Tom Dale");
// $book2->title = "Lord Of the Rings" ;
// $book2->author = "Tolkien";
// $book2->pages = 700;

$book2 = new Book("Lord of the Rings","Tokkien",700);

echo $book1->title . "<br>";
echo $book1->author. "<br>";
echo $book1->pages."<br>";

echo "</br>";

echo $book2->title . "<br>";
echo $book2->author. "<br>";
echo $book2->pages."<br>";

?>