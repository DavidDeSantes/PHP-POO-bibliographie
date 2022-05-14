<?php

class Livre
{
    private string $title;
    private int $pages;
    private int $parution;
    private float $price;
    private Auteur $auteur;
    // Construct
    public function __construct(string $title, int $parution, int $pages, float $price, Auteur $auteur)
    {
        $this->title = $title;
        $this->pages = $pages;
        $this->parution = $parution;
        $this->price = $price;
        $this->auteur = $auteur;
        $this->auteur->addBook($this);
    }
    // Getter
    public function getTitle()
    {
        return $this->title;
    }

    public function getParution()
    {
        return $this->parution;
    }

    public function getPages()
    {
        return $this->pages;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getAuteur()
    {
        return $this->auteur;
    }
    // Function other
    public function __toString()
    {
        return $this->title . "(" . $this->parution . ")" . " " . ":" . " " . $this->pages . " " . "Pages" . " / " . $this->price . " " . "€"."<br>";
    }
    // Setter
    public function setTitle($newTitle)
    {
        $this->title = $newTitle;
    }

    public function setprice($newPrice)
    {
        $this->price = $newPrice;
    }
}
