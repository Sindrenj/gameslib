<?php

/**
 * @file
 * Contains \Drupal\gamesregister\Controller\GamesController.
 */

namespace Drupal\GamesRegister\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;

class GamesController extends ControllerBase {

    public function games() {
        return "Games!";
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
