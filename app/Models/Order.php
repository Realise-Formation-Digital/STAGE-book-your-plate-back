<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'id',
    'deliveryDate',
    'quantity',
    'commentary',
    'userID',
    'plateID',
    'timeStamp'
  ];

  protected $hidden = [

    'timestamps',
    'created_at',
    'updated_at',

  ];

/*   public function user()
  {
    return $this->belongsTo(User::class);
  } */

  public function plats()
  {
    return $this->belongsToMany(Plat::class);
  }
}
