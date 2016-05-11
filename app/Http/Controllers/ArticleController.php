<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Article;

class ArticleController extends Controller
{
    /**
     * Display a paginated listing of the Article resources.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Article::paginate();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Just fallback to the paginated list of Articles if an invalid
        // parameter is passed.
        if (is_null($id) || !is_numeric($id))
        {
            return Article::paginate();
        }
        else
        {
            $article = Article::find($id);

            // Handle the case when the Article id doesn't exist.
            if (is_null($article))
            {
                return \Response::json('Article not found', 404);
            }
            else
            {
                // According to
                // https://laravel.com/docs/5.1/eloquent-serialization#basic-usage
                // it looks like it's possible to do (string) $article and for
                // the output to be converted to json. I noticed that the
                // content-header was text/html. In order to get it to be
                // application/json, I used the following.
                return \Response::json($article, 200);
            }
        }
    }
}
