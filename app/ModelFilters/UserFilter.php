<?php

namespace App\ModelFilters;

class UserFilter extends DefaultModelFilter
{
    protected $sortable = ['created_at'];

    public function subject($subject)
    {
        $this->where('subject', 'ILIKE', "%$subject%");
    }

    public function status($status)
    {
        $this->where('status', $status);
    }

    public function queueName($queueName)
    {
        $this->where('queue_name', $queueName);
    }

    public function email($email)
    {
        $this->where('email', 'ILIKE', "%$email%");
    }

    public function id($id)
    {
        $this->where('id', $id);
    }
}
