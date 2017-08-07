<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/7 0007
 * Time: 上午 12:13
 */

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class TestController extends Controller
{
    //        array:6 [▼
//  "merchantNo" => "M1533950550"  商户号
//  "realName" => "马云支"     真实姓名
//  "mobilePhone" => "18150960110" 手机号
//  "identityCode" => "130825198303165731" 证件号
//  "orderNo" => null 订单流水号
//  "orderDate" => null 订单日期
//  "identityType"=>'1' 证件类型
//"returnUrl"=>'' 回掉地址
// "notifyUrl"=>'' 异步回调地址
//]




//导出为私钥pfx文件和cer公钥文件以及crl吊销列表
//    public function rsa(){
////        echo "此处测试加密";
//        // 测试数据
//        $data = 'If you are still new to things, we’ve provided a few walkthroughs to get you started.';
//// 私钥及密码
//        $app = public_path();
//        $privatekeyFile ="$app\\cfca\\jfrj.pfx";
//        $privatekeyFile=str_replace('\\','/',$privatekeyFile);
////        echo $privatekeyFile;exit;
//
//        $passphrase = '';
//
//// 摘要及签名的算法
//        $digestAlgo = 'sha512';
//        $algo = OPENSSL_ALGO_SHA1;
//// 加载私钥
//        $privatekey = openssl_pkey_get_private(file_get_contents($privatekeyFile), $passphrase);
//// 生成摘要
//        $digest = openssl_digest($data, $digestAlgo);
//// 签名
//        $signature = '';
//        openssl_sign($digest, $signature, $privatekey, $algo);
//        $signature = base64_encode($signature);
//        var_dump($signature);
//    }
    public $privateKey = '';

    public $publicKey = '';

    public function __construct()
    {
        $resource = openssl_pkey_new();
        openssl_pkey_export($resource, $this->privateKey);
        $detail = openssl_pkey_get_details($resource);
        $this->publicKey = $detail['key'];
    }

    public function publicEncrypt($data, $publicKey)
    {
        openssl_public_encrypt($data, $encrypted, $publicKey);
        return $encrypted;
    }

    public function publicDecrypt($data, $publicKey)
    {
        openssl_public_decrypt($data, $decrypted, $publicKey);
        return $decrypted;
    }

    public function privateEncrypt($data, $privateKey)
    {
        openssl_private_encrypt($data, $encrypted, $privateKey);
        return $encrypted;
    }

    public function privateDecrypt($data, $privateKey)
    {
        openssl_private_decrypt($data, $decrypted, $privateKey);
        return $decrypted;
    }

}




$rsa = new TestController();
echo "公钥：\n", $rsa->publicKey, "\n";
echo "私钥：\n", $rsa->privateKey, "\n";

// 使用公钥加密
$str = $rsa->publicEncrypt('hello', $rsa->publicKey);
// 这里使用base64是为了不出现乱码，默认加密出来的值有乱码
$str = base64_encode($str);
echo "公钥加密（base64处理过）：\n", $str, "\n";
$str = base64_decode($str);
$pubstr = $rsa->publicDecrypt($str, $rsa->publicKey);
echo "公钥解密：\n", $pubstr, "\n";
$privstr = $rsa->privateDecrypt($str, $rsa->privateKey);
echo "私钥解密：\n", $privstr, "\n";

// 使用私钥加密
$str = $rsa->privateEncrypt('world', $rsa->privateKey);
// 这里使用base64是为了不出现乱码，默认加密出来的值有乱码
$str = base64_encode($str);
echo "私钥加密（base64处理过）：\n", $str, "\n";
$str = base64_decode($str);
$pubstr = $rsa->publicDecrypt($str, $rsa->publicKey);
echo "公钥解密：\n", $pubstr, "\n";
$privstr = $rsa->privateDecrypt($str, $rsa->privateKey);
echo "私钥解密：\n", $privstr, "\n";