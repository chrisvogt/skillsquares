<?php
/**
 * Skills controller
 *
 * Skills (test categories) actions and methods
 *
 * @package       skillsquares
 */
class SkillsController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
  public $name = 'Skills';

/**
 * This controller does not use a model
 *
 * @var array
 */
  public $uses = array();

  /**
   * Turn on application scaffolding
   */
  public $scaffold;

  public $hasAndBelongsToMany = array('Test');

}