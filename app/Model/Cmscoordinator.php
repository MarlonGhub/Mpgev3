<?php
App::uses('AppModel', 'Model');
/**
 * Bucket Model
 *
 */
class Cmscoordinator extends AppModel {

/**
 * Use database config
 *
 * @var string
 */
	public $useDbConfig = 'capital';
	public $useTable = 'coordinator_sets';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';

}
