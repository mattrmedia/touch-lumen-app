<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Helpers\Helpers;

class CategoryController extends Controller
{
    /**
     * Retrieve the category for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);
        $featured = $category->tiles->where('featured', 1)->first();
        $tiles = $category->tiles->where('featured', 0);

        return view('categories.show', ['category' => $category, 'tiles' => $tiles, 'featured' => $featured]);
    }

}
