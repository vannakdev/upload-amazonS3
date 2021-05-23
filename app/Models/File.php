<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class File extends Model
{
    use HasFactory;

    public static function booted() {
        static::creating(function ($file) {
            $file->uuid = Str::uuid();
        });
    }
    protected $fillable = [
        'name','size','path'
    ];
}
