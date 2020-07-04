<?php

namespace Zhengbingdong\EasyQqInfo;

/**
 * 根据QQ号码解析信息
 * Class DateTools
 */

class GeInfo{

	public static function get($qq)
	{
		$data = array(
			'code' => 1,
			'data' => '',
			'msg'  => ''
		);
		if(trim($qq) == ''){
			$data['msg'] = '请输入您要解析的QQ号';

			return $data;
		}
		$url = 'http://api.qianduanwang.vip/api/doc/get?qq='.$qq;
		$info = self::httpGet($url);
		$info = json_decode($info, true);

		if($info['code'] == 1){
			$data['msg'] = $info['message'];
			
		} else{
			$data['code'] = 0;
			$data['data'] = array(
				'imgurl' => $info['data']['imgurl'],
				'name' => $info['data']['name'],
			);
		}

		return $data;
	}

	/**
	 * @desc PHP get请求之发送数组
	 * @param $url
	 * @param array $param
	 * @return mixed
	 * @throws Exception
	 */
	public static function httpGet($url)
	{

	    //初始化一个 cURL 对象
	    $ch  = curl_init();
	    //设置你需要抓取的URL
	    curl_setopt($ch, CURLOPT_URL, $url);
	    // 设置cURL 参数，要求结果保存到字符串中还是输出到屏幕上。
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	    //是否获得跳转后的页面
	    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	    $result = curl_exec($ch);
	    curl_close($ch);
	    return $result;

	}
}
