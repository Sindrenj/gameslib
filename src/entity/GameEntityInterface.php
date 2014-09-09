<?php

namespace Drupal\gameslib\Entity;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityTypeInterface;

interface GameEntityInterface extends EntityInterface {
    /**
     * Returns the identifier.
     * 
     * @return int
     *  The entity identifier.
     */
    public function id();
    
    /**
     * Returns the entity UUID (Universally Unique Identifier).
     * 
     * The UUID is unique. Also in other systems.
     * @return String;
     *  The UUID of the entity.
     */
    public function uuid();
    
    /**
     * Returns the name of the game-entity
     * @return String;
     */
    public function getName();
    
    /**
     * Returns the genre of the game-entity
     * @return String;
     */
    public function getGenre();
    
    /**
     * Returns the image of the game-entity
     * @return String;
     */
    public function getImage();
    
    /**
     * Returns the description of the game-entity
     * @return String;
     */
    public function getDescription();
    
    /**
     * The basefields??
     * @return String;
     */
    public static function baseFieldDefinitions(EntityTypeInterface $entity_type);
}
