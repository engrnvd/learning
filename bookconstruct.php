<?php
 class Books {
        public $bookName;
        public $authorName;
        public $category;

     public function __construct($bookName, $authorName, $category)
     {
         $this->bookName = $bookName;
         $this->authorName = $authorName;
         $this->category = $category;
     }

         public function booksInfo()
         {
         echo "This is books info site.";
         }

         public function bookName()
         {
            echo "Name of my book is $this->bookName";
         }

         public function newBook($newBook, $author)
         {
             echo "Name of new book is {$newBook}, and the author is {$author}.";
         }

 }
 $book = new Books("Daastan Imaaan Faroshon Ki", "Anayat ullah", "History");
 $book->booksInfo();
 echo "<pre>";
 print_r($book);
 $book->bookName();
 echo "<br>";
 $book->newBook("Firdous e iblees", "Anayat ullah");

 $book2 = new Books("Muhmmad Bin Qasim", "Naseem Hajazi", "History");
 echo "<pre>";
 print_r($book2);
 $book2->bookName();
 echo "<br>";
 $book2->newBook("shamsheer beynayam", "Naseem hajazi");
?>