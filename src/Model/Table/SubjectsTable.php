<?php
namespace App\Model\Table;

use App\Model\Entity\Subject;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Subjects Model
 *
 */
class SubjectsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('subjects');
        $this->displayField('Code');
        $this->primaryKey('Code');
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
            ->allowEmpty('Code', 'create');

        $validator
            ->allowEmpty('TeachersId');

        $validator
            ->allowEmpty('Name');

        $validator
            ->integer('ECTS')
            ->requirePresence('ECTS', 'create')
            ->notEmpty('ECTS');

        $validator
            ->boolean('Imparted')
            ->requirePresence('Imparted', 'create')
            ->notEmpty('Imparted');

        return $validator;
    }
}
