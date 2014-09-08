<?php

/**
 * @file
 * Contains \Drupal\gameslib\Controller\GamesController.
 */

namespace Drupal\gameslib\Controller;

use Drupal\Core\Controller\ControllerBase;

class GamesController extends ControllerBase {

    public function games() {
        return "<a href='register'>Register a game..</a>";
    }

    public function register() {
        return "Register games!";
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
