<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class publish extends Model
{
    use HasFactory, SoftDeletes;
    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $table = 'publishes';

    protected $fillable = [
        'name',
        'detail',
        'picture',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
    protected static function boot()
    {
        parent::boot();

        // static::creating(function ($model) {
        //     $model->created_by = Auth::user()->email;
        //     $model->updated_by = Auth::user()->email;
        // });

        // static::updating(function ($model) {
        //     $model->updated_by = Auth::user()->email;
        // });

        // static::deleting(function ($model) {
        //     $model->deleted_by = Auth::user()->email;
        //     $model->save();
        // });
    }
}

