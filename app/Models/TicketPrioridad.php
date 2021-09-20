<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicketPrioridad extends Model
{
    protected $connection = 'help';
    protected $table = 'public.ticket_prioridad';

    protected $fillable = ['ticket_id', 'prioridad_id'];
}
