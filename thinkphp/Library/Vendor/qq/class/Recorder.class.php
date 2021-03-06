<?php

/* PHP SDK
 * @version 2.0.0
 * @author connect@qq.com
 * @copyright (c) 2013, Tencent Corporation. All rights reserved.
 */

require_once(CLASS_PATH . "ErrorCase.class.php");

class Recorder {

    private static $data;
    private $inc;
    private $error;

    public function __construct() {
        $this->error = new ErrorCase();

        //-------读取配置文件
        $incFileContents = file_get_contents(ROOT . "comm/inc.php");
        $this->inc = json_decode($incFileContents);
        $config = C("qq_config");
        $this->inc->appid = $config['id'];
        $this->inc->appkey = $config['key'];
        $this->inc->callback = C("URL_DOMAIN") . 'Qqlogin/callback/';
        $this->inc->scope = "get_user_info";


        if (empty($this->inc)) {
            $this->error->showError("20001");
        }

        if (empty($_SESSION['QC_userData'])) {
            self::$data = array();
        } else {
            self::$data = $_SESSION['QC_userData'];
        }
    }

    public function write($name, $value) {
        self::$data[$name] = $value;
    }

    public function read($name) {
        if (empty(self::$data[$name])) {
            return null;
        } else {
            return self::$data[$name];
        }
    }

    public function readInc($name) {
        if (empty($this->inc->$name)) {
            return null;
        } else {
            return $this->inc->$name;
        }
    }

    public function delete($name) {
        unset(self::$data[$name]);
    }

    function __destruct() {
        $_SESSION['QC_userData'] = self::$data;
    }

}
