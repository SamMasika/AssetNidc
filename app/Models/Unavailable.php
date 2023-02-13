<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unavailable extends Model
{
    use HasFactory;


    protected $table='unavailables';
    protected $fillable=[
        'asset_name',
        'user_id ',
        'depart_id ',
        'category',
        'status',
        'remark',
        'specification',
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class,'depart_id','id');
    }
}
