<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class UsersController extends AppController
{
    function search($page) {
        $data = $this->Users->find("all")
          ->select(['username', 'email'])
          ->limit(2)
          ->page($page);
        die (json_encode($data));
    }

    function index() {
        $datas = $this->Users->find("all")
          ->select(['username', 'email'])
          ->limit(2)
          ->page(1);
        $this->set(compact('datas'));
    }
}
