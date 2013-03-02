<?php
/**
 * User model for SkillSquar.es.
 *
 * @package       CakePHP
 * @subpackage    skillsquares
 */
class User extends Model {
  /**
   * Turn on application scaffolding
   */
  public $scaffold;

  public $hasMany = array(
      'UserScore' => array(
          'className' => 'Score',
      )
  );

}