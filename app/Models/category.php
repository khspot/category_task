<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'

    ];

    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }
    public function throughitems()
    {
        return $this->through('Subcategories')->has('items');
    }
}
