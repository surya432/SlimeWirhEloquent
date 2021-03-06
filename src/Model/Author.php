<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model as Model;

class Author extends Model
{
    protected $table = "authors";
    // protected $guarded = [];
    protected $fillable = ['nama'];
    protected $hidden = ['deleted_at'];
    protected $timestamp = ['created_at', 'updated_at', 'deleted_at'];
    public static function beginTransaction()
    {
        self::getConnectionResolver()->connection()->beginTransaction();
    }

    public static function commit()
    {
        self::getConnectionResolver()->connection()->commit();
    }

    public static function rollBack()
    {
        self::getConnectionResolver()->connection()->rollBack();
    }

    function book()
    {
        return $this->hasMany('\App\Model\Book');
    }
    // public function getCreatedAtAttribute($date)
    // {
    //     return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
    // }

    // public function getDeletedAtAttribute($date)
    // {
    //     return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
    // }
    // public function getUpdatedAtAttribute($date)
    // {
    //     return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
    // }
}
