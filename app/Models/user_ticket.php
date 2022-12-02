<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_ticket extends Model
{
    use HasFactory;

     protected $filable=[
        'user_id',
        'tickets_id',
];
public function users()
{
    return $this->BelongsTo(User::class, 'id');
}
public function tickets()
{
    return $this->BelongsTo(Tickets::class, 'id');
}
}
