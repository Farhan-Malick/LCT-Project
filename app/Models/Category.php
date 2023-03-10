<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];
    // get categories
    public function get_categories()
    {
        $category = Category::where(['status' => 1])->get();

        return to_array($category);
    }
    // get event category
    public function get_event_category($id = null)
    {
        $category = Category::where(['id' => $id, 'status' => 1])->first();

        return to_array($category);
    }
}
