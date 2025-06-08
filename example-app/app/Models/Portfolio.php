<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\Translatable\HasTranslations;
class Portfolio extends Model
{
    protected $fillable = ['image', 'name', 'style'];
    use SortableTrait;
    protected $casts = [
        'image' => 'array', // Для работы с FileUpload
    ];
    public $sortable = [
        'order_column_name' => 'order',
        'sort_when_creating' => true,
    ];
    use HasTranslations;
    public $translatable = ['name', 'style'];
}