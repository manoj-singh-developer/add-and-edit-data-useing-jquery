<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('users', $this->paginate($this->Users));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Posts']
        ]);
        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
            $q= "saved";
            $this->set('res',$q);
            $this->response->type('json');
            $this->render('/Common/ajax','ajax');
                
            } else {
                $c= "error";
            $this->set('res',$c);
            $this->response->type('json');
            $this->render('/common/ajax','ajax');
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    
    public function addd()
    {
        
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
            $q= "saved";
            $this->set('res',$q);
            $this->response->type('json');
            $this->render('/Common/ajax','ajax');
                
            } else {
                $c= "error";
            $this->set('res',$c);
            $this->response->type('json');
            $this->render('/common/ajax','ajax');
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }
    
    
    
    
    
    
    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id=null)
    {
         $que=  $this->Users->find()
                ->where(['id'=>$id])
                ->toArray();
   
        $this->set("sex",$que);
        
        $query=  $this->Users->find('all')->toArray();
        //debug($query['country']); exit;
        $quer=  $this->Users->find()
                ->where(['id'=>$id])
                ->toArray();
   
        $this->set("sex",$quer);
        $this->set("country",$query);
        
        
        
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }
    
    public function test2(){
        $query=  $this->Users->find()
                ->where(['id'=>2])
                ->toArray();
   
        $this->set("sex",$query);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    
    public function test(){
     $user = $this->Users->newEntity();
    if($this->request->is('post')){
        //debug($this->request->data); exit;
       $user->id=  $this->request->data['id'];
       $user->username=$this->request->data['username'];
       $user->sex=$this->request->data['sex'];
       $user->country=  $this->request->data['country'];
       if($this->Users->save($user)) {
           
       }
    }
    }
    
    public function test3(){
        $query=  $this->Users->find('all')->toArray();
        //debug($query['country']); exit;
        $quer=  $this->Users->find()
                ->where(['id'=>2])
                ->toArray();
   
        $this->set("sex",$quer);
        $this->set("country",$query);
        
        
    }
}
