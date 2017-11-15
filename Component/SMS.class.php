<?php

namespace Component;

use Think\Model;

class SMS extends Model {

    private $url = 'http://121.199.50.122:8888/sms.aspx?action=send';
    private $userId = '1132';
    private $account = 'SCZMGK';
    private $password = 'XheU0zznkzfT';
    private $mobile = '';
    private $SMScontent = '';
    private $SMStime = '';

    public function __construct($SMScontent, $SMStime, $mobile) {
        $this->SMScontent = $SMScontent;
        $this->SMStime = $SMStime;
        if (!$mobile) {
            //$this->mobile = '13558758764';
            $this->mobile = '18584073303,15708416713,13558758764';
        } else {
            $this->mobile = $mobile;
        }
    }

    public function sendSMS() {
        $postData = [
            'userid' => $this->userId,
            'account' => $this->account,
            'password' => $this->password,
            'mobile' => $this->mobile,
            'content' => $this->SMScontent,
            'sendTime' => $this->SMStime,
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        $result = curl_exec($ch);
        curl_close($ch);
    }

}
