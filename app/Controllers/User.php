<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class User extends ResourceController
{
    protected $modelName="App\Models\User";
    protected $format="json";

    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    public function show($IdUser = null)
    {
        if (!$this->model->find($IdUser)) {
            return $this->fail('Data tidak ditemukan');
        }
        return $this->respond($this->model->find($IdUser));
    }


    public function create()
    {
        $data = $this->request->getPost();
        $user = new \App\Entities\User();
        $user->fill($data);
        if (!$this->validate($this->model->validationRules, $this->model->validationMessages)) {
            return $this->fail($this->validator->getErrors());
        }
        if ($this->model->save($user)) {
            return $this->respondCreated($data, "User berhasil ditambahkan");
        }
    }

    public function update($IdUser = null)
    {
        $data = $this->request->getRawInput();
        $data['IdUser'] = $IdUser;
        if (!$this->model->find($IdUser)) {
            return $this->fail("Data tidak ditemukan");
        }

        $user = new \App\Entities\User();
        $user->fill($data);
        if (!$this->validate($this->model->validationRules, $this->model->validationMessages)) {
           
            return $this->fail($this->validator->getErrors());
        }
        if ($this->model->save($user)) {
            return $this->respondUpdated($data, "User berhasil diubah");
        }
    }

    public function delete($IdUser = null)
    {
        if (!$this->model->find($IdUser)) {
            return $this->fail("Data tidak ditemukan");
        }

        if ($this->model->delete($IdUser)) {
            return $this->respondDeleted("Data dengan id". $IdUser . " berhasil dihapus");
        }
    }
}
