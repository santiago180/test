<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $guarded=[];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function histories()
    {
        return $this->hasMany(History::class, 'project_id');
    }
}
