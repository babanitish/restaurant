<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

         /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','poster_url','shop_id','category_id'];

   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'produits';

   /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
