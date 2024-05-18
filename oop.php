<?php
class Book {
    // Private properties for title and availableCopies
    private $title;
    private $availableCopies;

    // Constructor to initialize properties
    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // Method to get the title
    public function getTitle() {
        return $this->title;
    }

    // Method to get the number of available copies
    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    // Method to borrow a book
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        }
        return false;
    }

    // Method to return a book
    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    // Private property for name
    private $name;

    // Constructor to initialize properties
    public function __construct($name) {
        $this->name = $name;
    }

    // Method to get the member's name
    public function getName() {
        return $this->name;
    }

    // Method for the member to borrow a book
    public function borrowBook($book) {
        $book->borrowBook();
    }

    // Method for the member to return a book
    public function returnBook($book) {
        $book->returnBook();
    }
}

// Creating 2 books with the specified properties
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Creating 2 members with the specified properties
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Members borrowing books
$member1->borrowBook($book1);
$member2->borrowBook($book2);

// Print available copies of the books
echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}\n";
echo "Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()}\n";
?>