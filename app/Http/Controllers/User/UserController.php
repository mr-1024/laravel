<?php
/**
 * Created by PhpStorm.
 * User: 邹修辉 zouxiuhui@vchangyi.com
 * Date: 2019/1/3
 * Time: 16:58
 */

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Translate;

class UserController extends Controller
{
    public function index()
    {
        $data = new User();
        // 如果不存在$data->profile 里面不存在user_id属性 不会报错
        // dd(optional($data->profile)->user_id);
        return view('user/index',['userData'=>optional($data->profile)]);
    }

    // 翻译君
    public function translate($body = '你知道我对你不仅仅是喜欢')
    {
        // 详情查看 https://laravelacademy.org/post/9521.html
        $result = Translate::translate($body);
        // 更换翻译服务商
        // $result = Translate::setDriver('baidu')->translate($body);

        // 更换翻译语言 可选语言请看配置文件中可定义的几种
        // $from="en";
        // $to="zh";
        // $result = Translate::setFromAndTo($from,$to)->translate($body);
        echo '<h3>'.$body.'</h3>';
        print_r($result);
    }
}