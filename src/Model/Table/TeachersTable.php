<?php
namespace App\Model\Table;

use App\Model\Entity\Teacher;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Teachers Model
 *
 */
class TeachersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     * try
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('teachers');
        $this->displayField('Id');
        $this->primaryKey('Id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmpty('Id', 'create');

        $validator
            ->allowEmpty('Nickname');

        $validator
            ->allowEmpty('Password');

        $validator
            ->allowEmpty('Name');

        $validator
            ->allowEmpty('Surname');

        $validator
            ->allowEmpty('Phone');

        $validator
            ->allowEmpty('Adress');

        return $validator;
    }
}
