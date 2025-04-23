<?php

namespace App\Models;

use App\TaskStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'body',
        'feature_image',
        'assigned_to',
        'created_by',
    ];

    protected $casts = [
        'status' => TaskStatus::class,
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function assignedto()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

}
