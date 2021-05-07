<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Houses extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'bedrooms', 'bathrooms', 'storeys', 'garages'];

    protected $hidden = ['created_at', 'updated_at'];

    /**
     * Scope a query to find house by parameters from find request.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed  $form
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFilterFind(Builder $query, $form): Builder
    {
        $query->select('id');
        if($form['condition']) $query = $query->where($form['condition']);
        return $query;
    }
}
