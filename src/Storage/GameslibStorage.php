<?php

namespace Drupal\gameslib\Storage;

use Drupal\gameslib\Entity\Game;

class GameslibStorage {

    public static function getAll() {
        //Get the connection from the database:
        $db = \Drupal::database();
        //The sql-code:
        $result = $db->queryRange('SELECT id, title, description, image FROM game', 1, 10);
        //Create an array of the games:
        $games = array();
        foreach ($result as $key => $game) {
            $games[$key] = new Game($game->id, $game->title, $game->description, $game->image);
        }

        return $games;
    }

    public static function add(Game $game) {
        $db = \Drupal::database();
        //Map data to the fields in the database:
        $fields = array(
            'title' => $game->title,
            'genre' => $game->genre,
            'description' => $game->description,
            'image' => $game->image,
            'authoId' => $game->authorId
        );
        //Insert the data;
        $db->db_insert('games')
                ->fields($fields)
                ->execute();         
    }
}
