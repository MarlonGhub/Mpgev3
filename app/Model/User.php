<?php
App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
/**
 * User Model
 *
 * @property Group $Group
 * @property Emailgroup $Emailgroup
 * @property EmailgroupsNotification $EmailgroupsNotification
 * @property Job $Job
 * @property Emailgroup $Emailgroup
 */
class User extends AppModel {

    public $dispalyField = "username";

	public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $passwordHasher = new SimplePasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash(
                $this->data[$this->alias]['password']
            );
        }
        return true;

        }


/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'password' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'group_id' => array(
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
		'Group' => array(
			'className' => 'Group',
			'foreignKey' => 'group_id',
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
		'Emailgroup' => array(
			'className' => 'Emailgroup',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'EmailgroupsNotification' => array(
			'className' => 'EmailgroupsNotification',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Job' => array(
			'className' => 'Job',
			'foreignKey' => 'user_id',
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
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Emailgroup' => array(
			'className' => 'Emailgroup',
			'joinTable' => 'emailgroups_users',
			'foreignKey' => 'user_id',
			'associationForeignKey' => 'emailgroup_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

    /**
     * return formatted user name given a user id
     * @param string id
     * @return string user fname . user lname
     */
    public function resolveName($id) {
        $user = $this->resolveUser($id);
        $name = $user['User']['fname'].' '.$user['User']['lname'];
        return $name;
    }

    /**
     * compilelist of all users
     * @return array array k => fname.lname
     *
     * Because the return is in 2 arrays, 2 foreach loops are required in the
     * view to access user id and names
     */
    public function compilelist(){
        /*initialize variables */
        $username = array();
        $userfullname = array();

        $this->recursive = -1;
        $conditions = array();
        $fields = array('User.id', 'User.fname', 'User.lname');
        $options = array('conditions' => $conditions, 'fields' => $fields);
        $userlist = $this->find('all', $options);

        foreach ($userlist as $user){
            $userid = $user['User']['id'];
            $username = $user['User']['fname'].' '.$user['User']['lname'];
            $userfullname[] = array($userid => $username);
        }
        return($userfullname);
    }
}
