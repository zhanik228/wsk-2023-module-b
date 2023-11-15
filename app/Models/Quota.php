<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quota extends Model
{
    use HasFactory;

    public function quotaLimit() {
        return $this->hasOne(Limit::class, 'quota_id', 'id');
    }
}
