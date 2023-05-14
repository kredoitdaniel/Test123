<?php
    class Book {
        /*
            Access Modifiers:

                1. public       = can be accessed anywhere inside or outside of a class
                2. private      = can be accessed ONLY inside of the class 
                3. protected
        */
        // $this = help access properties and methods plus object operator '->'

        # properties
        private $title;
        private $author;
        private $editor;
        public $num_pages;
        private $price;


        # methods 
        public function displayDetails(){
            echo "Title: " . $this->title . "<br>";
            echo "Author: " . $this->author . "<br>";
            // echo $this->editor . "<br>";
            // echo $this->num_pages . "<br>";
            // echo $this->price . "<br>";
        }

        private function editorValue(){
            echo $this->editor;
        }


        # Setters
        public function setTitle($new_title)
        {
            $this->title = $new_title;
        }

        public function setAuthor($new_author)
        {
            $this->author = $new_author;
        }

        public function setPrice($new_price)
        {
            $this->price = $new_price;
        }


        # Getters
        public function getTitle()
        {
            return $this->title;
        }

        public function getAuthor()
        {
            return $this->author;
        }

        public function getPrice()
        {
            return $this->price;
        }
    }



    // Instantiating a class
    /*
        $math is an instance of a class Book
        $math is an object that can access public properties and methods of the class Book
    */
    $math = new Book;

    // $math->title = 'Algebra';
    // $math->author = 'David Jackson';
    // echo "Title: " . $math->title . "<br>";
    // echo "Author: " . $math->author . "<br>";


    echo "<br>";
    // $prog is an object
    $prog = new Book;
    // $prog->displayDetails();


    echo "<br>";
    // $chemistry is object
    $chemistry = new Book;
    # Setters
    $chemistry->setTitle('Chemistry');
    $chemistry->setAuthor('Michael Jordan');
    $chemistry->setPrice(5);
    

    # Getters
    // echo "Title: " . $chemistry->getTitle() . "<br>";
    // echo "Author: " . $chemistry->getAuthor() . "<br>";
    // echo "Price: " . $chemistry->getPrice();






    // ERROR: Cannot access private property
    // $math->editor = 'John Smith';

    // ERROR: Cannot call private method
    // $math->editorValue();

?>