<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'category_id', 'amount', 'date', 'note'];

    // Relasi ke model Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
