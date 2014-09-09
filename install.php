<?php
function hook_schema() {
    $schema['games'] = array(
        'description' => "A schema that represents the game-entities in the gameslib-module."
        'fields' => array(
          'gId' => array(
              'description' => 'The primary-key and functioning identifier for a game-entity.',
              'type' => 'serial',
              'unsigned' => 'true',
              'not null' => 'true'
          ),
          
    );
}