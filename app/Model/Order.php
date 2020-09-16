<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";

    public function project()
    {
        return $this->belongsTo('App\Model\Project', 'id', 'project_id');
    }
}
