<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'item',
    ];

    public function list()
    {
        return $this->belongsTo(ListModel::class, 'list_id');
    }
}
