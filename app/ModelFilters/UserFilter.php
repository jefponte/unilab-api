<?php

namespace App\ModelFilters;

class UserFilter extends DefaultModelFilter
{
    protected $sortable = ['created_at'];

    public function name($name)
    {
        if (env('DB_CONNECTION') === 'pgsql') {
            $this->where('name', 'ILIKE', "%$name%");
        } else {
            $this->whereRaw("LOWER(name) LIKE ?", ['%' . strtolower($name) . '%']);
        }
    }

    public function email($email)
    {
        if (env('DB_CONNECTION') === 'pgsql') {
            $this->where('email', 'ILIKE', "%$email%");
        } else {
            $this->whereRaw("LOWER(email) LIKE ?", ['%' . strtolower($email) . '%']);
        }
    }

    public function login($login)
    {
        if (env('DB_CONNECTION') === 'pgsql') {
            $this->where('login', 'ILIKE', "%$login%");
        } else {
            $this->whereRaw("LOWER(login) LIKE ?", ['%' . strtolower($login) . '%']);
        }
    }

    public function id($id)
    {
        $this->where('id', $id);
    }
}
