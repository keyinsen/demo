<?php
namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
//    显示请求功能列表
    public function index(){
      return view('demo');
    }

    //个人注册 通过curl模拟url访问接口
    public function register(Request $request){

$url = "http://60.190.230.35:56400/User/register";
//打包json数据
//$data = $request->input();
        $data['user']='asdas';//用户数据
     //   $data['merchantNo']="2013245";//测试
//        $data['orderDate'] =date("Ymd");
//        $data['identityType'] ="1";
//        $data['orderNo'] =date('Ymd') . str_pad(mt_rand(1, 99999), 10, '0', STR_PAD_LEFT);
    //同步回调地址
  //  $data['returnUrl'] = 'https://www.baidu.com/';
//   异步回调地址
  //  $data['notifyUrl'] = 'https://www.baidu.com/';
  //  $data = json_encode($data);

// 使用存管方公钥加密
        $public = public_path();
        $publickeyFile ="$public\\bank\\bank.cer";
//        $publickeyFile=str_replace('\\','/',$publickeyFile);
// 加载公钥
        $publickey = openssl_pkey_get_public(file_get_contents($publickeyFile));
      //  echo $publickeyFile;exit;
// 存管方公钥+参数 进行加密
        $public_encryptedData = '';
        $public_encryptedData=$this->pubkeyEncrypt($data,$publickey);
      //  openssl_public_encrypt($data, $encryptedData, $publickey);
//        var_dump(base64_encode($encryptedData));exit;
//私钥签名
// 将公钥加密的密文 进行私钥加密 生成签名
        $public = public_path();
        $privatekeyFile ="$public\\cfca\\jfrj.pfx";
      //  $privatekeyFile=str_replace('\\','/',$privatekeyFile);
     //   $passphrase = 'test';
//echo $privatekeyFile;exit;
// 摘要及签名的算法
    //    $digestAlgo = 'sha512';
      //  $algo = OPENSSL_ALGO_SHA1;
// 加载私钥
        $privatekey = $this->openssl_get_privatekey(file_get_contents($privatekeyFile));
// 生成签名
        $signature=$this->redSignkey($public_encryptedData,$publickey);
        echo $signature;exit;
//// 生成摘要
//        $digest = openssl_digest($data, $digestAlgo);
//
//// 签名
//        $signature = '';
//        openssl_sign($digest, $signature, $privatekey, $algo);
//        $signature = base64_encode($signature);
//        var_dump($signature);


$reqData="{
'sign':'',
'data':$data,
'merchantNo':$merchantNo,
'certInfo':''
}";
        return view("register")->with('url',$url)->with('reqData',$reqData);
//        //获取注册表单数据
//        $a ="{ 'name': 'qttc','url' : 'www.jb51.net'}";
//    	$data = $request->all();
//        $data = json_encode($data);
//
//        $curl = curl_init();
//        //设置提交的url
//        curl_setopt($curl, CURLOPT_URL,"http://60.190.230.35:56400/user/register");
//        //设置头文件的信息作为数据流输出
//        curl_setopt($curl, CURLOPT_HEADER, 0);
//        //设置获取的信息以文件流的形式返回，而不是直接输出。
//        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//        //设置post方式提交
//        curl_setopt($curl, CURLOPT_POST, 1);
//        //设置post数据
//        $post_data = $data;
//        curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
//        //执行命令
//        $data = curl_exec($curl);
//        //关闭URL请求
//        curl_close($curl);
//        //获得数据并返回
//        return $data;
    }

    //公钥加密  请求的参数+对方的公钥=密文
    function pubkeyEncrypt($source_data, $pu_key) {
        openssl_public_encrypt($source_data,$encrypted,$pu_key);//公钥加密
        return $encrypted;
    }

    //得到的密文通过自己的私钥进行私钥加密 也就是签名
    function redSignkey($data,$pi_key)
    {
        //拼接签名路径
        openssl_sign($data,$encrypted,$pi_key);//私钥加密
     //   $encrypted = base64_encode($encrypted);//加密后的内容通常含有特殊字符，需要编码转换下，在网络间通过url传输时要注意base64编码是否是url安全的
        return $encrypted;
    }

    //私钥加密的数据 通过对方的公钥解密
    function oprd($data,$pi_key)
    {
        //拼接签名路径
        openssl_private_decrypt($data,$decrypted,$pi_key);//私钥解密
        return $decrypted;
    }

    //私钥解密的数据进行公钥解密，用自己的公钥解密
    function opud($data,$pu_key)
    {
        //拼接签名路径
      $redata= openssl_verify($data, false, $pu_key);//公钥解密
      //  openssl_public_decrypt($encrypted,$decrypted,$pu_key);//公钥解密
        return $redata;
    }

    function callBack(){
        $data = $_REQUEST;

    }
    //绑定银行卡
    public function bindCard(Request $request){
        //获取注册表单数据
        $data = $request->all();
        $curl = curl_init();
        //设置提交的url
        curl_setopt($curl, CURLOPT_URL,"http://60.190.230.35:56398/bindCard");
        //设置
        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_POST, 1);
        $post_data = $data;
        curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
        $data = curl_exec($curl);
        curl_close($curl);
        return $data;
    }
}
