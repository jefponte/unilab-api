<?php

namespace App\ModelFilters;

class UserFilter extends DefaultModelFilter
{
    protected $sortable = ['created_at'];

    public function name($name)
    {
        $this->where('name', 'ILIKE', "%$name%");
    }
    public function email($email)
    {
        $this->where('email', 'ILIKE', "%$email%");
    }
    public function login($login)
    {
        $this->where('login', 'ILIKE', "%$login%");
    }

    public function id($id)
    {
        $this->where('id', $id);
    }
}
