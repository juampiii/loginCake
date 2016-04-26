<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class TeachersController extends AppController
{


    //display view

    public function index()
    {
        $ProfessorId = '77151519C';


        $subjects = TableRegistry::get('subjects');
        $query2 = $subjects->query();
        $query2->where(['TeachersId' => $ProfessorId]);
        $this->set(array('subjects' => $query2));


        $this->render('listSubjects');


    }

    public function login()
    {
        if ($this->request->is('post')){
            $user = $this->Auth->identify();
            if($user){
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
        }


        //Si el usuario no se ha identificado
        $this->Flash->error('Tu nombre o contraseña es incorrecta');
    }


    //Add a new teacher

    public function add()
    {
        $teacher = $this->Teachers->newEntity();
        if ($this->request->is('post')) {
            $teacher = $this->Teachers->patchEntity($teacher, $this->request->data);
            if ($this->Teachers->save($teacher)) {
                $this->Flash->success(__('The teacher has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The teacher could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('teacher'));
        $this->set('_serialize', ['teacher']);
    }

}
