<?php
App::uses('AppModel', 'Model');
/**
 * Skill Model
 *
 * @property Test $Test
 */
class Skill extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Test' => array(
			'className' => 'Test',
			'joinTable' => 'skills_tests',
			'foreignKey' => 'skill_id',
			'associationForeignKey' => 'test_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
