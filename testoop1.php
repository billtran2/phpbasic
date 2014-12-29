<?php

//Test use PHP and MySQL

class book
{
    private $title;
    private $isbn;
    private $copies;

    public function  __construct($isbn)
    {
        $this->setIsbn($isbn);
    }
    public function getIsbn()
    {
        echo "<p>ISBN : $this->isbn</p>";
    }
    function setIsbn($isbn)
    {
        $this->isbn=$isbn;
    }
    public function getTitle() {
        //$this->title = "Easy PHP Websites with the Zend Framework";
        print "Title: ".$this->title."<br />";
    }
    public function setTitle($title)
    {
        $this->title=$title;
        //print "Title: ".$this->title."<br />";

    }
    public function getNumberCopies() {
        $this->copies = "5";
        print "Number copies available: ".$this->copies."<br />";
    }

}
echo "OOP for PHP <br />";
echo "----------------------------------------- <br />";
$book = new book("0615303889");
$book->setTitle("Beginning PHP and MySQL");
$book->getTitle();
$book->getNumberCopies();
$book->getIsbn();
$book->setIsbn('123');


?>
