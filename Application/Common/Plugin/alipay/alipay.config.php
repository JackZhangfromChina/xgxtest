<?php
/* *
 * 配置文件
 * 版本：3.5
 * 日期：2016-06-25
 * 说明：
 * 以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己网站的需要，按照技术文档编写,并非一定要使用该代码。
 * 该代码仅供学习和研究支付宝接口使用，只是提供一个参考。

 * 安全校验码查看时，输入支付密码后，页面呈灰色的现象，怎么办？
 * 解决方法：
 * 1、检查浏览器配置，不让浏览器做弹框屏蔽设置
 * 2、更换浏览器或电脑，重新登录查询。
 */
 
//↓↓↓↓↓↓↓↓↓↓请在这里配置您的基本信息↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
//合作身份者ID，签约账号，以2088开头由16位纯数字组成的字符串，查看地址：https://openhome.alipay.com/platform/keyManage.htm?keyType=partner
$alipay_config['partner']		='2088911824498415';

//收款支付宝账号，以2088开头由16位纯数字组成的字符串，一般情况下收款账号就是签约账号
$alipay_config['seller_id']	= $alipay_config['partner'];

//商户的私钥,此处填写原始私钥去头去尾，RSA公私钥生成：https://doc.open.alipay.com/doc2/detail.htm?spm=a219a.7629140.0.0.nBDxfy&treeId=58&articleId=103242&docType=1
$alipay_config['private_key']	= 'MIICXAIBAAKBgQCzn7Dyn3Zmr3XCo3WURjJXbeZGaeV2LLYT/+AoXafr5KXMyU/n
DUn4DeOPsgdupsoKvit3j/N+PNkH5wk6Q/3tSxkV4MRghDaVD+hoZxvtYfbXKTrz
BVg3L64pPl5RWg7igS2soKPLTvBKYimY0R7nleRvAf0Bq96luPGKYVy8TwIDAQAB
AoGBAJ3bOouO3mQR0QDz3DIpmrZBK/03tWOsmXtsBJgU7q0drSQSyzi38gigVBuF
joiM5cSZKeQSSx/m46jRPsfI1w9ICZcc/ADS0uIljoAY39dxqmZq3AIiqAXuBofy
OoS2tm2RZ1+YTh2ilz03A/JZrc34br04jeys74tneHziODgBAkEA6XeictEI0GVA
WNgTEAsXlYaEw/MTm1BNy0zbLbTTFWEcmEjglkJX93nGQfftuQVmlthulM1PCrN4
lcTLN6HITwJBAMT1uWW/0+6GvOeHAMMf0lslKfJPEse2wWAFqVvIN1Yukdbcf6Bf
bIm1NzvHJXdnrTrsqsqFzVAAKYTtDP0kzAECQCXfITvsyrg7ZHfE/TqiAf5gZtL+
cFTGbwgmfHtqlL8oFKJjWAMn2essFswGsspLpPudOjrrHwJGYK4y0SBCHyMCQGJ0
UpDCKzZ4s8UofwEKzyQwl59AV6rteAx/yADRPJgf/1bgMgwAp0jPBSUkj134vWdP
FrDV4aOz8Q05UdzYoAECQDp6sih1+WsU+nVh0cTU6487clDcsz97UtxY1RnQfkgW
yWK4jYDcD4xle+OYsjVY+vsEi4bV90eoStvJ7B5IJfA=';

//支付宝的公钥，查看地址：https://openhome.alipay.com/platform/keyManage.htm?keyType=partner
$alipay_config['alipay_public_key']= 'MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCnxj/9qwVfgoUh/y2W89L6BkRAFljhNhgPdyPuBV64bfQNN1PjbCzkIM6qRdKBoLPXmKKMiFYnkd6rAoprih3/PrQEB/VsW8OoM8fxn67UDYuyBTqA23MML9q1+ilIZwBC2AQ2UBVOrFXfFl75p6/B5KsiNG9zpgmLCUYuLkxpLQIDAQAB';

// 服务器异步通知页面路径  需http://格式的完整路径，不能加?id=123这类自定义参数，必须外网可以正常访问
$alipay_config['notify_url'] = "http://localhost/Common/Plugin/notify_url.php";

// 页面跳转同步通知页面路径 需http://格式的完整路径，不能加?id=123这类自定义参数，必须外网可以正常访问
$alipay_config['return_url'] = "http://localhost/Common/Plugin/return_url.php";

//签名方式
$alipay_config['sign_type']    = strtoupper('RSA');

//字符编码格式 目前支持utf-8
$alipay_config['input_charset']= strtolower('utf-8');

//ca证书路径地址，用于curl中ssl校验
//请保证cacert.pem文件在当前文件夹目录中
$alipay_config['cacert']    = getcwd().'\\cacert.pem';

//访问模式,根据自己的服务器是否支持ssl访问，若支持请选择https；若不支持请选择http
$alipay_config['transport']    = 'http';

// 支付类型 ，无需修改
$alipay_config['payment_type'] = "1";
		
// 产品类型，无需修改
$alipay_config['service'] = "alipay.wap.create.direct.pay.by.user";

//↑↑↑↑↑↑↑↑↑↑请在这里配置您的基本信息↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑


?>