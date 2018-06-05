<?php
/**
 * Created by PhpStorm.
 * User: cloudy064
 * Date: 6/5/2018
 * Time: 5:02 PM
 */

namespace App\Http\Controllers;

use EasyWeChat\OpenPlatform\Application;

class WechatController extends Controller {

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \EasyWeChat\Kernel\Exceptions\BadRequestException
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidArgumentException
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidConfigException
     */
    public function serve() {
        /** @var Application $app */
        $app = app('wechat.official_account');

        $app->server->push(function ($message) {
            return "欢迎关注Binary World! {$message}";
        });

        return $app->server->serve();
    }
}
