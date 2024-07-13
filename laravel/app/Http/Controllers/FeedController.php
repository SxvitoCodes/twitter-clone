<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user = auth()->user();
        $followingIDs = $user->followings()->pluck('user_id');

        $ideas = Idea::whereIn('user_id', $followingIDs)->latest();
        $search = $request->get('search', '');

        if($request->has('search')) {
            $ideas = $ideas->where('tweet', 'like', '%'.$search.'%');
        };
        
        return view('Dashboard', [
            'ideas' => $ideas->paginate(5)
        ]);
    }
}
