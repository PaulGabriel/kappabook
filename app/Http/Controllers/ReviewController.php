<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\User;
use App\Product;

class ReviewController extends Controller
{
    public function postCreateReview(Request $request){


        $this->validate($request, [
            'body' => 'required',
           
        ]);
        $review = new Review();
        $review->body = $request['body'];
        $review->review = $request['review'];
        $review->title = $request['title'];
        $review->username = $request['username'];
        $review->product_id = $request['product_id'];
        
        $request->user()->reviews()->save($review);
       
        return redirect()->back();
    }

    
}
