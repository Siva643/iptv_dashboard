<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\User;
use App\Models\VideoView;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

class VideoController extends Controller
{
    public function videoView(Request $request)
    {
        $videoId = $request->videoId;

        if (blank($videoId)) {
            return response()->json([
                "success" => false,
                "message" => "Video Id missing"
            ]);
        }

        $user = $request->user();

        VideoView::create([
            "user_id" => $user->id,
            "video_id" => $videoId
        ]);

        return response()->json([
            "success" => true,
            "message" => "Done"
        ]);
    }

    public function viewCount()
    {
        $views_count = VideoView::count();

        $login_count = Information::first()->login_count;

        return response()->json([
            "success" => true,
            "message" => "Views count",
            "views_count" => $views_count,
            "login_count" => $login_count
        ]);
    }
}
