<?php
/**
 * Skill model for SkillSquar.es.
 *
 * @package       CakePHP
 * @subpackage    skillsquares
 */
class Skill extends Model {

  /**
   * Turn on application scaffolding
   */
  public $scaffold;

  public $hasAndBelongsToMany = array('Test');

}