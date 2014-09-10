<?php

/**
 * @file
 * Contains \Drupal\gameslib\Form\DemoForm.
 * @author Sindre Njøsen
 */

namespace Drupal\gameslib\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class GamesForm extends FormBase {

    /**
     * {@inheritdoc}.
     */
    public function getFormId() {
        return 'register_game';
    }

    /**
     * {@inheritdoc}.
     */
    public function buildForm(array $form, FormStateInterface $form_state) {

        $form['name'] = array(
            '#type' => 'textfield',
            '#title' => $this->t('Title:')
        );
               
        $form['genre'] = array(
            '#type' => 'select',
            '#title' => $this->t('Category:'),
            '#options' => array(
                0 => t('Action'),
                1 => t('Adventure'),
                2 => t('Simulation'),
                3 => t('Strategy'),
                4 => t('MMORPG'),
                5 => t('Other')
            ),
            '#default_value' => 'Action',
        );
        
        $form['image'] = array(
            '#type' => 'textfield',
            '#title' => $this->t('Image:'),
            '#default_value' => 'http://',
            '#description' => 'The url to a image that describes the game.'
        );
        
        $form['description'] = array(
            '#type' => 'textarea',
            '#title' => $this->t('Description'),
            '#default_value' => 'Describe the game with some words..',
        );
                
        $form['register'] = array(
            '#type' => 'submit',
            '#value' => $this->t('Register'),
        );

        return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function validateForm(array &$form,  FormStateInterface $form_state) {
    }

    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form,  FormStateInterface $form_state) {
        //$id, $title, $description = 'None..', $image = null, $authorId = null
        $game = new Game(
                null, 
                $form_state['values']['name'],
                $form_state['value']['description'],
                $form_state['value']['image'],
                \Drupal::currentUser()->id
        );
        //Add the data to the database:
        GameslibStorage::add( $game );
        //Tell the user that the record were successfully saved to the database:
        drupal_set_message($this->t('Your game "@title" has been added to the library.', 
                array('@title' => $form_state['values']['name'])));
    }

}
