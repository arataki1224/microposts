<?php

namespace App\Http\Controllers;

class UserFollowController extends Controller
{
    // フォローアクション　User.phpのfollowメソッドを利用
    public function store($id)
    {
        // 認証済みのユーザ（閲覧者）が、idのユーザをフォローする
        \Auth::user()->follow($id);
        
        return back();
    }
    
    // アンフォローのアクション
    public function destroy($id)
    {
        // 認証済みのユーザがidのユーザをアンフォロー
        \Auth::user()->unfollow($id);
        
        return back();
    }
}
