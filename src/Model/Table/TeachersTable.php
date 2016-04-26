<?php
namespace App\Model\Table;


use Cake\ORM\Table;


/**
 * Teachers Model
 */
class TeachersTable extends Table
{
    /*Indicamos que tabla ORM usaremos para nuestra clase*/
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('teachers');
        $this->displayField('Id');
        $this->primaryKey('Id');
    }
}
