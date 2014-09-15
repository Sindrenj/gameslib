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
        //1. Get the games from the database:
        $games = GameslibStorage::getAll();
       
//        //2. Define the header for the table:
//        $header = array(
//            'image' => t('Image:'), 
//            'title' => t('Title:'),
//            'genre' => t('Genre:')
//        );
//        //3. Populate the rows for the table:
//        $rows = array();
//        foreach( $games as $game ) { 
//            $img = array(
//              '#markup' =>  t('<img src="' . $game->image . '"/>'),
//            );
//
//             $rows[] = array(
//               'data' => array(
//                    $img,
//                    $game->title,
//                    $game->genre
//                 )
//              );
//        }
        $content = "";
        foreach( $games as $game ) {
           $content .= "<tr><td><img src='" . $game->image  . "' height='50px' width='100px'/></td>
                        <td>" . $game->title  . "</td>
                        <td>" . $game->genre . "</td></tr>";  
        }
        
        
        //4. Create the table with $header & $rows:
//        $table = array(
//            '#type' => 'table',
//            '#header' => $header,
//            '#rows' => $rows,
//            '#attributes' => array(
//                'id' => 'games-table',
//            ),
//        );
        
        
        
        $table = array(
            '#markup' => 
            t("<table class='responsive-enabled tableresponsive-processed'>
                <thead>
                    <tr><th></th><th>Title:</th><th>Genre</th></tr>
                    <tbody>
                       
                        " . $content . "                                 
                        

                    </tbody>
                </thead>
            </table>")
        );  

        
        //5.Assign a rendered table to the view:
        return drupal_render($table); 
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
