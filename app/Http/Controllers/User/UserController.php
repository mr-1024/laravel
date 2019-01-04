<?php
/**
 * Created by PhpStorm.
 * User: 邹修辉 zouxiuhui@vchangyi.com
 * Date: 2019/1/3
 * Time: 16:58
 */

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Post;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $data = new User();
        // 如果不存在$data->profile 里面不存在user_id属性 不会报错
        // dd(optional($data->profile)->user_id);
        return view('user/index',['userData'=>optional($data->profile)]);
    }
}