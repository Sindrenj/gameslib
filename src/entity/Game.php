<?php

namespace Drupal\gameslib\Entity;

class Game {
    public $id;
    public $title;
    public $genre;
    public $description;
    public $image;
    public $authorId;
    
    public function __construct($id = null, $title, $genre, $description = 'None..', $image = null, $authorId = 1) {
        $this->id = $id;
        $this->title = $title;
        $this->genre = $genre;
        $this->description = $description;
        $this->image = $image;
        $this->authorId = $authorId;
    }
}
