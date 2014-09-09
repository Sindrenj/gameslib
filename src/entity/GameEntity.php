<?php

namespace Drupal\gameslib\Entity;

//use Drupal\Core\Entity\EntityStorageInterface;
//use Drupal\Core\Field\FieldDefinition;
use Drupal\Core\Entity\ContentEntityBase;
use Drupal\gameslib\GameInterface;

//use Drupal\Core\Entity\EntityTypeInterface;

class GameEntity extends ContentEntityBase implements GameEntityInterface {

    public function id() {
        return $this->get('fbid')->value;
    }

    public function getName() {
        return $this->name->value;
    }

    public function getGenre() {
        return $this->genre->value;
    }

    public function getImage() {
        return $this->image->value;
    }

    public function getDescription() {
        return $this->description->value;
    }

    public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {
        $fields['gameid'] = FieldDefinition::create('integer')
                ->setLabel(t('ID'))
                ->setDescription(t('The id of the game entity'))
                ->setReadOnly(TRUE);
        $fields['uuid'] = FieldDefinition::create('uuid')
                ->setLabel(t('UUID'))
                ->setDescription(t('The UUID og the game entity'))
                ->setReadOnly(TRUE);
        $fields['langcode'] = FieldsDefinition::create('language')
                ->setLabel(t('Language code'))
                ->setDescription('The language code of the game entity');
        $fields['title'] = FieldsDefinition::create('String')
                ->setLabel(t('Name'))
                ->setDescription(t('The title of the game.'))
                ->setTranslatable(TRUE)
                ->setPropertyConstraints('value', array('Length' => array('max' => 32)))
                ->setSettings(array(
            'default_value' => '',
            'max_length' => 255,
            'text_processing' => 0
        ));
        $fields['genre'] = FieldsDefinition::create('String')
                ->setLabel(t('Name'))
                ->setDescription(t('The genre the game belongs to.'))
                ->setTranslatable(TRUE)
                ->setPropertyConstraints('value', array('Length' => array('max' => 32)))
                ->setSettings(array(
            'default_value' => '',
            'max_length' => 255,
            'text_processing' => 0
        ));
        $fields['image'] = FieldsDefinition::create('String')
                ->setLabel(t('Name'))
                ->setDescription(t('The image of the gamecover.'))
                ->setTranslatable(TRUE)
                ->setPropertyConstraints('value', array('Length' => array('max' => 32)))
                ->setSettings(array(
            'default_value' => '',
            'max_length' => 255,
            'text_processing' => 0
        ));
        $fields['description'] = FieldsDefinition::create('String')
                ->setLabel(t('Name'))
                ->setDescription(t('The description of the game.'))
                ->setTranslatable(TRUE)
                ->setPropertyConstraints('value', array('Length' => array('max' => 32)))
                ->setSettings(array(
            'default_value' => '',
            'max_length' => 255,
            'text_processing' => 0
        ));
        
        return $fields;
    }

}
