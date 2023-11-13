<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
class Project extends Model
{
    use HasFactory, BelongsTo, SoftDeletes;

    protected $guarded = [];
}
