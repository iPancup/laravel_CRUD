<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    protected $fillable = [ 'judul','penerbit', 'tahunTerbit','pengarang'];
}
