<?php

namespace \Drupal\gameslib\Entity;

class Game {
    public $id;
    public $title;
    public $description;
    public $image;
    public $authorId;
    
    public function __construct($id = null, $title, $description = 'None..', $image = null, $authorId = null) {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->$authorId = $authorId;
    }
}
