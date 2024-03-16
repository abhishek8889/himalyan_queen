<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reviews;
use Illuminate\Support\Facades\Validator;

class ReviewController extends Controller
{
    public function review(Request $request){
        return view('user.review.index');
    }
    public function submitReview(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'review' => 'required|max:300',
            'star_rating' => 'required',
        ],[
            'name.required' => 'Your name is required',
            'email.required' => 'Your email is required',
            'review.required' => 'Your review is required',
            'star_rating.required' => 'Add your star rating',
        ]);

        $review = Reviews::create([
            'name' => $request->name,
            'email' => $request->email,
            'review' => $request->review,
            'rating' => $request->star_rating,
        ]);
        if($review){
            return response()->json([
                'status' => true,
                'message' => '<strong>Thank you!</strong> Your review has been successfully submitted.'
            ]);
        }
        return response()->json([
            'status' => false,
            'message' => 'There is some error in system please try again.'
        ]);

    }
}
