<?php

namespace App\Http\Controllers;

use App\User;

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
        return Category::findOrFail($id);
    }
}