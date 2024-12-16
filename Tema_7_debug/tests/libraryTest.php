<?php
//php vendor/bin/phpunit --testdox  

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\nivell3_tdd\Libro;
use App\nivell3_tdd\Library;
use App\nivell3_tdd\Genre;


class LibraryTest extends TestCase
{
    public function testAddBook()
    {
        $library = new Library();
        $library->addBook("Poetry in Potion", " Annabel Chase ", "9780441013593", Genre::PARANORMAL,196);

        $addedBook = $library->searchByIsbn("9780441013593");

        $this->assertEquals("Annabel Chase", $addedBook->getAuthor());
        $this->assertNotEquals("9780000000093",  $addedBook->getIsbn());
        $this->assertEquals(196, $addedBook->getNumOfPages());
    }


    //test to remove book
    public function testRemoveBook()
    {
        $library = new Library();
        $library->addBook("Book of Optics", "al- Haytham", "9780441013593", Genre::SCIENCE_FICTION, 412);


        $this->assertTrue($library->removeBook("9780441013593"));
        $this->assertFalse($library->removeBook("nonexistent_isbn"));
    }

    public function testModifyBook()
    {
        $library = new Library();
        $library->addBook("Dune", "Frank Herbert", "9780441013593", Genre::SCIENCE_FICTION, 412);

       
        $this->assertTrue($library->modifyBook("9780441013593", "Messiah", "Frank Herbert Jr.", Genre::FANTASTIC, 500));

        
        $modifiedBook = $library->searchByIsbn("9780441013593");
        $this->assertEquals("Messiah", $modifiedBook->getTitle());
        $this->assertEquals("Frank Herbert Jr.", $modifiedBook->getAuthor());
        $this->assertEquals(500, $modifiedBook->getNumOfPages());
        $this->assertEquals(Genre::FANTASTIC, $modifiedBook->getGenre());

   
        $this->assertFalse($library->modifyBook("0000000000000", "Nonexistent Book", "Unknown Author", Genre::SCIENCE_FICTION, 100));
    }



    public function testGetLargeBooks()
    {
        $library = new Library();

        $library->addBook("Dune", "Frank Herbert", "9780441013593", Genre::SCIENCE_FICTION, 412);
        $library->addBook("War and Peace", "Leo Tolstoy", "9780199232765", Genre::FANTASTIC, 1225);
        $library->addBook("The Hobbit", "J.R.R. Tolkien", "9780261102217", Genre::FANTASTIC, 310);

        $largeBooks = $library->getLargeBooks();

        $this->assertCount(1, $largeBooks);
    }


    public function testSearchByTitle()
    {
        $library = new Library();

        $library->addBook("1984", "George Orwell", "9780451524935", Genre::DYSTOPIA, 328);
        $library->addBook("Frankenstein", "Mary Shelley", "9780441013593", Genre::SCIENCE_FICTION, 412);

        $this->assertFalse($library->searchByTitle("nonexistent_title"));
        $this->assertTrue($library->searchByTitle("Frankenstein"));
    }

    public function testSearchByAuthor()
    {
        $library = new Library();
        $library->addBook("Dune", "Frank Herbert", "9780441013593", Genre::SCIENCE_FICTION, 412);
        $library->addBook("1984", "George Orwell", "9780451524935", Genre::DYSTOPIA, 328);

        $this->assertTrue($library->searchByAuthor("Frank Herbert"));
        $this->assertFalse($library->searchByAuthor("Nonexistent Author"));
    }

    public function testSearchByGenre()
    {
        $library = new Library();
        $library->addBook("The_Lord_of_the_Rings", "Jrr_Tolkien", "9780441013593", Genre::ADVENTURES , 412);

        $this->assertTrue($library->searchByGenre(Genre::ADVENTURES ));
    }

    public function testSearchByIsbn()
    {
        $library = new Library();

        $library->addBook("Pride_and_Prejudice", "Jane Austen", "9780441013593", Genre::TALE, 412);
        $library->addBook("1984", "George Orwell", "9780451524935", Genre::DYSTOPIA, 328);




        $result = $library->searchByIsbn("9780441013593");
        $this->assertInstanceOf(Libro::class, $result);

        $this->assertEquals("Pride_and_Prejudice", $result->getTitle());


        $result = $library->searchByIsbn("Nonexistent");
        $this->assertNull($result);
    }
}
?>