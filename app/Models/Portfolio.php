<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $guarded = [];
    protected $table = 'portfolio';
    public function category()
    {
        return $this->belongsTo(PortfolioCateg::class, 'category_id', 'id');
    }
    
    
    


}