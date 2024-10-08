<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

class Task extends Model
{
    use HasFactory;

    public function project() {
        return $this->belongsTo(project::class);
    }

    public function users(){
        return $this->belongsToMany(User::class, 'task_user', 'task_id', 'user_id');
    }
    
    public function creator(){
        return $this->belongsTo(User::class, 'created_by_id');
    }

    public function completer(){
        return $this->belongsTo(User::class, 'completed_by_id');
    }
}
