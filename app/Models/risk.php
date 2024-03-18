<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class risk extends Model
{
    use HasFactory, SoftDeletes;
    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $table = 'risk_management';

    protected $fillable = [
        'year',
        'risk_id',
        'group_name',
        'count',
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
