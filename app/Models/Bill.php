<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    
         /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','sous_total'];

   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bills';

   /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
