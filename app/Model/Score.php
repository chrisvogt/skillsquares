<?php
/**
 * Scores model for SkillSquar.es.
 *
 * @package       app.Model
 * @subpackage    skillsquares
 */
class Score extends Model {

  public $belongsTo = array(
    'User' => array(
      'className'    => 'User',
      'foreignKey'   => 'user_id'
    ),
    'Test' => array(
      'className'    => 'Test',
      'foreignKey'   => 'test_id'
    )
  );

  /**
   * Turn on application scaffolding
   */
  public $scaffold;


}