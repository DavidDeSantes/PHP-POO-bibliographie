<?php

class Auteur
{
    private string $name;
    private string $surName;
    private array $bibliographie;
    // Construct
    public function __construct(string $name, string $surName)
    {
        $this->name = $name;
        $this->surName = $surName;
        $this->bibliographie = [];
    }
    // Getter 
    public function getName()
    {
        return $this->name;
    }

    public function getSurName()
    {
        return $this->surname;
    }
    // function other 
    public function addBook(Livre $book)
    {
        $this->bibliographie[] = $book;
    }

    public function displayBibliographie()
    {
        foreach ($this->bibliographie as $livre) {
            echo $livre;
        }
    }

    public function __toString()
    {
        return $this->name . " " . $this->surName;
    }
    // Setter 
    public function setname($newName)
    {
        $this->name = $newName;
    }

    public function setSurName($newSurName)
    {
        $this->surName = $newSurName;
    }
}
