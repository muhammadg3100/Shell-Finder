<?php
/*
    Copyright Muhammad Gholy X Nikko Enggaliano
*/
$config = array();
$config['dir'] = array('/c99/i', '/r57/i', '/gifimg/i', '/idx/i', '/idx_config/i');
$config['type'] = array('/\.htaccess$/i', '/\.php[45]?$/i', '/\.html?$/i', '/\.aspx?$/i', '/\.inc$/i', '/\.cfm$/i', '/\.css$/i');
$config['file'] = array('/db-.*\.php/i', '/(.*?)\.(cache|bak|old)\.php/i', '/class-(snoopy|smtp|feed|pop3|IXR|phpmailer|json|simplepie|phpass|http|oembed|ftp-pure|wp-filesystem-ssh2|wp-filesystem-ftpsockets|ftp|wp-filesystem-ftpext|pclzip|wp-importer|wp-upgrader|wp-filesystem-base|ftp-sockets|wp-filesystem-direct)\.php/i');
$config['contains'] = array('/edoced_46esab/i', '/system/i', '/str_rot13/i', '/gzinflate/i', '/gzinflate*\(str_rot13*\(base64_decode/i', '/passthru *\(/i', '/eval *\(/i', '/shell_exec *\(/i', '/jumping/i', '/r3c0ded/i', '/document\.write *\(unescape *\(/i', '/base64_decode *\(/i', '/system *\(/i',  '/`.+`/', '/phpinfo *\(/i', '/hacked by /i', '/shell/i', '/b374k 2.8 /i', '/1n73ction/i', '/s_func/i',  '/popcash/i', '/miner/i', '/coinhive/i',   '/web[\s-]*shell/i', '/c99/i', '/r57/i', '/indoxploit/i', '/b374k/i', '/Jayalah Indonesiaku/i', '/mailer/i', '/ransome/i',   '/gumblar\.cn/i', '/martuz\.cn/i', '/beladen\.net/i', '/gooqle/i', '/_analist/i', '/anaiytics/i');
$config['max_reading_length'] = (1000 * 100); // 100MB

// Configuratoin
$stack = array();
if (!function_exists('_sfubgg3')) {
    function _sfubgg3(string $a) : bool {
        return (function_exists($a) ? !in_array($a, explode(',', ini_get('disable_functions'))) : false);

    }
}
if (!function_exists('_tj3r')) {
    function _tj3r(string $a)  : bool {
        return (_sfubgg3("is_readable") ? (is_readable($a) ? true : false) : false);

    }
}
if (!function_exists('_sgio3')) {
    function _sgio3(string $a)  : bool {
        return (_sfubgg3('escapeshellarg') ? escapeshellarg($a) : "'".str_replace("'", "\'", $a)."'");

    }
}
if (!function_exists('_ihpyt490')) {
    function _ihpyt490(string $a) : bool {
        global $config, $stack;
        if (!function_exists('_obgu328')) {
            function _obgu328($a = "", $b = false) : bool{
                global $stack, $config;
                if (empty($a)) return false;
                echo "[X] " .preg_replace_callback('/\%(.*?)\%/', function($a) use ($stack, $config, $b) {
                    if ($b == false) return "";
                    return (isset($a[1]) ? (isset($stack[$a[1]]) ? (is_array($stack[$a[1]]) ? "(".count($stack[$a[1]]).")[ " . implode(", ", $stack[$a[1]]) . " ]" : $stack[$a[1]]) : ""): "");
                }, $a) . ($stack['_3ty3'] == "cli" ? PHP_EOL : "<br/>");
                return true;
            }

        }
        if (!function_exists('_sjt30t')) {
            function _sjt30t($a = array(), $b = "") : bool {
                global $stack, $config;
                if (empty($a) || empty($b)) return false;
                unset($stack['_sht3']);
                foreach($a as $c) {
                    $d = array();
                    preg_match_all($c, $b, $d);
                    foreach($d as $e) {
                        if (isset($e[0])) $stack['_sht3'][] = "\"{$e[0]}\"";
                        
                    }
                }
                return (!empty($stack['_sht3']));
            }
        }
        foreach(glob($a, GLOB_MARK|GLOB_BRACE) as $b) {
            // echo $b . PHP_EOL;
            if (is_dir($b)) { 
                (_sjt30t($config['dir'], $b) ? _obgu328("Suspicious DIR .\\".substr($b, 0, -1)." > %_sht3%", true) : _obgu328());
                _ihpyt490($b . "*");

            } elseif (is_file($b) && _sjt30t($config['type'], basename($b)) && basename($b) != basename(__FILE__)) {
                (_sjt30t($config['file'], basename($b)) ? _obgu328("Suspicious FILE .\\".$b." %_sht3%") : _obgu328());
                $c = realpath($b);
                if (_tj3r($c)) {
                    if (_sfubgg3("file_get_contents")) {
                        $d = file_get_contents($c);

                    } elseif (_sfubgg3("fopen")) {
                        $d = "";
                        $e = fopen($c, "r");
                        if ($e) {
                            while (($f = fgets($e)) !== false) {
                                $d .= $f;

                            }
                            fclose($e);
                        } else {
                            continue;

                        }

                    } else {
                        continue;

                    }

                } elseif ((_sfubgg3("exec") || _sfubgg3("shell_exec") || _sfubgg3("system") || _sfubgg3("passthru")) && $stack['sgf3'] == "linux") {
                    $out = "";
                    $e = (_sfubgg3("exec") ? exec("cat " . _sgio3($c), $out) : (_sfubgg3("system")) ? system("cat " . _sgio3($c)) : (_sfubgg3("passthru")) ? passthru("cat " . _sgio3($c)) : shell_exec("cat " . _sgio3($c)));
                    $d = (_sfubgg3("exec") ? implode("\n", $out) : $e);
                    if (empty($d)) {
                        $e = (_sfubgg3("exec") ? exec("tail " . _sgio3($c), $out) : (_sfubgg3("system")) ? system("tail " . _sgio3($c)) : (_sfubgg3("passthru")) ? passthru("cat " . _sgio3($c)) : shell_exec("tail " . _sgio3($c)));
                        $d = (_sfubgg3("exec") ? implode("\n", $out) : $e);

                    }
                
                } elseif ((_sfubgg3("exec") || _sfubgg3("shell_exec") || _sfubgg3("system") || _sfubgg3("passthru")) && $stack['sgf3'] == "windows") {
                    $out = "";
                    $e = (_sfubgg3("exec") ? exec("more " . _sgio3($c), $out) : (_sfubgg3("system")) ? system("more " . _sgio3($c)) : (_sfubgg3("passthru")) ? passthru("more " . _sgio3($c)) : shell_exec("more " . _sgio3($c)));
                    $d = (_sfubgg3("exec") ? implode("\n", $out) : $e);

                } else {
                    continue;

                }

                // Line Breaking max 100mb
                if (strlen($d) < $config['max_reading_length']) {
                    $f = explode("\n", $d);
                    foreach($f as $g => $h) {
                        (_sjt30t($config['contains'], $h) ? _obgu328("Contain(s) Malicious String .\\".$b." > Line " .  ($g+1) . " > %_sht3%", true) : "");
    
                    }

                } else {
                    (_sjt30t($config['contains'], $d) ? _obgu328("Contain(s) Malicious String .\\".$b." > %_sht3%", true) : "");

                }
            }
        }

        return true;
    };
}
if (defined('PHP_OS')) {
    (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN' ? $stack['sgf3'] = "windows" : $stack['sgf3'] = "linux");

} else {
    $stack['sgf3'] = "linux";

}
if (!defined('PHP_EOL')) {
    define('PHP_EOL', "\r\n");

}
if (_sfubgg3('php_sapi_name')) {
    (php_sapi_name() == "cli" ? $stack['_3ty3'] = "cli" : $stack['_3ty3'] = "browser");

} else {
    $stack['_3ty3'] = "cli";
    
}
if ($stack['_3ty3'] == "cli") {
    echo "Shell Finder v1.0 | Muhammad Gholy X Nikko Enggaliano" . PHP_EOL . str_repeat("-", 50) . PHP_EOL . PHP_EOL;
    _ihpyt490("{,.}[!.,!..]*");

} else {
    echo "<style>@import url(https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700);body { background-color:#F7F7F7; font-family: 'Open Sans', sans-serif; } </style><center><h1>Shell Finder v1.0</h1><form type=get><input type=text name=_ placeholder='Path' value='".htmlentities($_GET['_'], ENT_QUOTES)."'/>&nbsp;<input type=submit name=submit/></form></center><hr/><br/>";
    if (@!empty($_GET['_'])) {
        _ihpyt490($_GET['_']);

    } else {
        _ihpyt490("{,.}[!.,!..]*");

    }
    echo "<br/><hr/><center>Copyright Muhammad Gholy X Nikko Enggaliano</center>";
}
?>
