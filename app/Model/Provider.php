<?php
/**
 * Provider model for SkillSquar.es.
 *
 * @package       CakePHP
 * @subpackage    skillsquares
 */
class Provider extends Model {

  /**
   * Turn on application scaffolding
   */
  public $scaffold;

  public $hasMany = array(
      'Test' => array(
          'className'  => 'Test',
          'conditions' => array('Test.is_active' => '1'),
          'order'      => 'Test.created DESC'
      )
  );

}