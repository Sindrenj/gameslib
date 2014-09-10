<?php

/**
 * @file
 * Contains \Drupal\gameslib\Controller\GamesController.
 */

namespace Drupal\gameslib\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\gameslib\Storage\GameslibStorage;

class GamesController extends ControllerBase {
   
    public function games() {
        $games = GameslibStorage::getAll();
        
        return $games;        
    }

    public function register() {
    }

    public function delete() {
        return "Delete games!";
    }

    public function update() {
        return "update games!";
    }

    /**
     * {@inheritdoc}
     */
    public function access(AccountInterface $account) {
        return $account->hasPermission('access content');
    }
}
