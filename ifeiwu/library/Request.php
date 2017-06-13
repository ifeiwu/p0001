<?php
namespace ifeiwu; class Request { protected $controller; protected $action; private static $_instance; public static function getInstance() { if (!(self::$_instance instanceof self)) { self::$_instance = new self(); } return self::$_instance; } private function __construct() { } public function get($name = null, $default = null) { return $this->input($_GET, $name, $default); } public function post($name = null, $default = null) { return $this->input($_POST, $name, $default); } public function all($name = null, $default = null) { return $this->input($_REQUEST, $name, $default); } public function has($data) { foreach ($data as $key) { if ($this->all($key) == '') { return false; } } return true; } protected function input(&$data, $name, $default) { if (empty($name)) { return isset($data[$name]) ? $data[$name] : $default; } if (is_array($data)) { foreach ($data as $key => $value) { $data[$key] = $this->input($value); } } else { if (is_string($data)) { $data = addslashes($data); } else { if (is_numeric($data)) { $data = intval($data); } } } return $data; } public function method() { $method = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET'; if (isset($_SERVER['HTTP_X_HTTP_METHOD_OVERRIDE'])) { $method = $_SERVER['HTTP_X_HTTP_METHOD_OVERRIDE']; } else if (isset($_REQUEST['_method'])) { $method = $_REQUEST['_method']; } return strtoupper($method); } public function scheme() { return $this->isSsl() ? 'https' : 'http'; } public function host() { return $_SERVER['HTTP_HOST']; } public function domain() { return $this->scheme() . '://' . $this->host(); } public function root($isfull = false) { $root = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/') . '/'; return $isfull === true ? $this->domain() . $root : $root; } public function url($isfull = false) { if (isset($_SERVER['HTTP_X_REWRITE_URL'])) { $url = $_SERVER['HTTP_X_REWRITE_URL']; } elseif (isset($_SERVER['REQUEST_URI'])) { $url = $_SERVER['REQUEST_URI']; } elseif (isset($_SERVER['ORIG_PATH_INFO'])) { $url = $_SERVER['ORIG_PATH_INFO'] . (!empty($_SERVER['QUERY_STRING']) ? '?' . $_SERVER['QUERY_STRING'] : ''); } else { $url = ''; } return $isfull === true ? $this->domain() . $url : $url; } public function baseUrl($isfull = false) { $url = $this->url(); $base_url = strpos($url, '?') ? strstr($url, '?', true) : $url; return $isfull === true ? $this->domain() . $base_url : $base_url; } public function query() { return $_SERVER['QUERY_STRING']; } public function isAjax() { return (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtoupper($_SERVER['HTTP_X_REQUESTED_WITH']) == 'XMLHTTPREQUEST') ? true : false; } public function isGet() { return $this->method() == 'GET' ? true : false; } public function isPost() { return $this->method() == 'POST' ? true : false; } public function isMobile() { if (isset($_SERVER['HTTP_VIA']) && stristr($_SERVER['HTTP_VIA'], 'wap')) { return true; } elseif (isset($_SERVER['HTTP_ACCEPT']) && strpos(strtoupper($_SERVER['HTTP_ACCEPT']), 'VND.WAP.WML')) { return true; } elseif (isset($_SERVER['HTTP_X_WAP_PROFILE']) || isset($_SERVER['HTTP_PROFILE'])) { return true; } elseif (isset($_SERVER['HTTP_USER_AGENT']) && preg_match('/(blackberry|configuration\/cldc|hp |hp-|htc |htc_|htc-|iemobile|kindle|midp|mmp|motorola|mobile|nokia|opera mini|opera |Googlebot-Mobile|YahooSeeker\/M1A1-R2D2|android|iphone|ipod|mobi|palm|palmos|pocket|portalmmm|ppc;|smartphone|sonyericsson|sqh|spv|symbian|treo|up.browser|up.link|vodafone|windows ce|xda |xda_)/i', $_SERVER['HTTP_USER_AGENT'])) { return true; } else { return false; } } public function isSsl() { if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == '1' || strtolower($_SERVER['HTTPS']) == 'on')) { return true; } elseif (isset($_SERVER['REQUEST_SCHEME']) && $_SERVER['REQUEST_SCHEME'] == 'https') { return true; } elseif (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443') { return true; } elseif (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') { return true; } return false; } public function ip() { if (isset($_SERVER)) { if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) { $realip = $_SERVER["HTTP_X_FORWARDED_FOR"]; $realip = explode(",", $realip); $realip = $realip[0]; $realip = empty($realip) ? ($_SERVER["REMOTE_ADDR"]) : ($realip); } elseif (isset($_SERVER["HTTP_CLIENT_IP"])) { $realip = $_SERVER["HTTP_CLIENT_IP"]; } else { $realip = $_SERVER["REMOTE_ADDR"]; } } else { if (getenv("HTTP_X_FORWARDED_FOR")) { $realip = getenv("HTTP_X_FORWARDED_FOR"); $realip = explode(",", $realip); $realip = $realip[0]; $realip = empty($realip) ? ($_SERVER["REMOTE_ADDR"]) : ($realip); } elseif (getenv("HTTP_CLIENT_IP")) { $realip = getenv("HTTP_CLIENT_IP"); } else { $realip = getenv("REMOTE_ADDR"); } } return $realip; } public function getIpInfo($ip) { $res = json_decode(file_get_contents('http://ip.taobao.com/service/getIpInfo.php?ip=' . $ip), true); if (!empty($res) && $res['code'] == 0) { return $res['data']; } else { return ''; } } public function controller($name = '') { if ($name) { $this->controller = $name; } else { return $this->controller; } } public function action($name = '') { if ($name) { $this->action = $name; } else { return $this->action; } } } 