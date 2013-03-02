<?php
/**
 * Test model for SkillSquar.es.
 *
 * @package       CakePHP
 * @subpackage    skillsquares
 */
class Test extends Model {

  /**
   * Turn on application scaffolding
   */
  public $scaffold;

  public $hasAndBelongsToMany = array('Skill');

  public $belongsTo = 'Provider';

}