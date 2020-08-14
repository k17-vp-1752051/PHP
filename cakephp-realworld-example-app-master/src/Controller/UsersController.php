<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class UsersController extends AppController
{
    function search() {
        $data = $this->Users->find("all")
          ->select(['username', 'email'])
          ->limit(5)
          ->page(2);
        die (json_encode($data));
    }

    function index() {
        $datas = $this->Users->find("all")
          ->select(['username', 'email'])
          ->limit(5)
          ->page(1);
        $this->set(compact('datas'));
    }
}
