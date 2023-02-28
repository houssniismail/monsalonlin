<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blandes extends Model
{
    use HasFactory;
    protected $table ='bande';
    protected $primaryKey ='id';
    protected $fillable=['nom', 'image', 'membres', 'pays', 'date_de_création'];
}
