<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Script extends Model
{
    use HasFactory;

    protected $table = "scripts";

    public $timestamps = false;

/*     protected $primaryKey = ["id_saison", 'id_personnage']
 */
    //RelationShip :

}
