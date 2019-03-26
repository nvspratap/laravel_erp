<?php

namespace App\Repositories\UserActions;

interface UserActionRepository
{
    public function all();

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function show($id);

    public function restore($id);
}