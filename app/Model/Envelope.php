<?php
App::uses('AppModel', 'Model');
/**
 * Envelope Model
 *
 * @property Jobtype $Jobtype
 * @property Job $Job
 */
class Envelope extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'jobtype_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Jobtype' => array(
			'className' => 'Jobtype',
			'foreignKey' => 'jobtype_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Job' => array(
			'className' => 'Job',
			'foreignKey' => 'envelope_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

    /**
     * getname function - returns the name of envelope given an id
     * @param string id -> envelope_id
     * @return string envelope name
     */
    public function getname($id) {
        /* limit recursion for minimal data transfer */
        $this->recursive = -1;

        /* find options */
        $conditions = array('Envelope.id' => $id);
        $fields = ('Envelope.name');
        $options = array('conditions' => $conditions, 'fields' => $fields);

        /* find */
        $envelope_name = $this->find('first', $options);

        /* return name as string */
        return $envelope_name['Envelope']['name'];
    }
}
