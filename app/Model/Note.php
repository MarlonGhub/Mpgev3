<?php
App::uses('AppModel', 'Model');
/**
 * Note Model
 *
 * @property Job $Job
 */
class Note extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'note' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'job_id' => array(
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
		'Job' => array(
			'className' => 'Job',
			'foreignKey' => 'job_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

    public function savewithjob($data) {
        /* get envelope name */
        $db = ClassRegistry::init('Envelope');
        $envelope = $db->getname($data['Job']['envelope_id']);
        
        /* create array to save into notes */
        $note['job_id'] = $data['Job']['id'];

        /* store the envelope type with the notes to prevent confusion */
        $note['note']   = $envelope;
        $note['note']  .= '<br/>';
        $note['note']  .= $data['Job']['note'];

        $this->create();
        if (!$this->save($note)){
            throw new NotFoundException(__('Unable to save Notes'));
        }

    }
}
