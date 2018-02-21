<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Helpers\Helpers;

class TopicyController extends Controller
{
    /**
     * Retrieve the category for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $topic = Topic::findOrFail($id);

        return view('topic.show', ['topic' => $topic]);
    }

}
