<?php
/**
 * Tests controller
 *
 * Skill tests as provided by the test providers
 *
 * @package       skillsquares
 */
class TestsController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
  public $name = 'Tests';

/**
 * This controller does not use a model
 *
 * @var array
 */
  public $uses = array();

  public $hasAndBelongsToMany = array('Skill');

  /**
   * Turn on application scaffolding
   */
  public $scaffold;

}