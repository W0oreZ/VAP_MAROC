<?php

namespace App\Models\Annonce;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PasswordHistory.
 */
class Annonce extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'annonces';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];
}
