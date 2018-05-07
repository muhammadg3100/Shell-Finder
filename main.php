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
    function _sfubgg3($a) {
        return (function_exists($a) ? !in_array($a, explode(',', ini_get('disable_functions'))) : false);

    }
}
if (!function_exists('_tj3r')) {
    function _tj3r($a) {
        return (_sfubgg3("is_readable") ? (is_readable($a) ? true : false) : false);

    }
}
if (!function_exists('_sgio3')) {
    function _sgio3($a) {
        return (_sfubgg3('escapeshellarg') ? escapeshellarg($a) : "'".str_replace("'", "\'", $a)."'");

    }
}
if (!function_exists('_3b0u92t')) {
    function _3b0u92t($a) {
        global $config, $stack;
        if (_tj3r($a)) {
            if (_sfubgg3("file_get_contents")) {
                $b = file_get_contents($a);

            } elseif (_sfubgg3("fopen")) {
                $b = "";
                $c = fopen($a, "r");
                if ($c) {
                    while (($d = fgets($c)) !== false) {
                        $b .= $d;

                    }
                    fclose($c);
                } else {
                    return false;

                }

            } else {
                return false;

            }

        } elseif ((_sfubgg3("exec") || _sfubgg3("shell_exec") || _sfubgg3("system") || _sfubgg3("passthru")) && $stack['sgf3'] == "linux") {
            $d = "";
            $c = (_sfubgg3("exec") ? exec("cat " . _sgio3($a), $d) : (_sfubgg3("system")) ? system("cat " . _sgio3($a)) : (_sfubgg3("passthru")) ? passthru("cat " . _sgio3($a)) : shell_exec("cat " . _sgio3($a)));
            $b = (_sfubgg3("exec") ? implode("\n", $d) : $c);
            if (empty($b)) {
                $c = (_sfubgg3("exec") ? exec("tail " . _sgio3($a), $d) : (_sfubgg3("system")) ? system("tail " . _sgio3($a)) : (_sfubgg3("passthru")) ? passthru("cat " . _sgio3($a)) : shell_exec("tail " . _sgio3($a)));
                $b = (_sfubgg3("exec") ? implode("\n", $d) : $c);

            }
            return $b;
        
        } elseif ((_sfubgg3("exec") || _sfubgg3("shell_exec") || _sfubgg3("system") || _sfubgg3("passthru")) && $stack['sgf3'] == "windows") {
            $d = "";
            $c = (_sfubgg3("exec") ? exec("more " . _sgio3($a), $d) : (_sfubgg3("system")) ? system("more " . _sgio3($a)) : (_sfubgg3("passthru")) ? passthru("more " . _sgio3($a)) : shell_exec("more " . _sgio3($a)));
            $b = (_sfubgg3("exec") ? implode("\n", $d) : $c);
            return $b;

        } else {
            return false;

        }
        return $b;
    }
}
if (!function_exists('_ihpyt490')) {
    function _ihpyt490($a) {
        global $config, $stack;
        if (!function_exists('_obgu328')) {
            function _obgu328($a = "", $b = false){
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
            function _sjt30t($a = array(), $b = "") {
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
                (_sjt30t($config['dir'], $b) ? _obgu328("Suspicious DIR ".substr($b, 0, -1)." > %_sht3%", true) : _obgu328());
                _ihpyt490($b . "*");

            } elseif (is_file($b) && _sjt30t($config['type'], basename($b)) && basename($b) != basename(__FILE__)) {
                (_sjt30t($config['file'], basename($b)) ? _obgu328("Suspicious FILE ".($stack['_3ty3'] == "cli" ? $b : "<a href=\"?_view=".realpath($b)."\">".htmlentities($b, ENT_QUOTES)."</a>")." %_sht3%") : _obgu328());
                $c = _3b0u92t(realpath($b));
                if (empty($c) || $c === false) {
                    continue;

                }

                // Line Breaking max 100mb
                if (strlen($c) < $config['max_reading_length']) {
                    $d = explode("\n", $c);
                    foreach($d as $e => $f) {
                        (_sjt30t($config['contains'], $f) ? _obgu328("Contain(s) Malicious String ".($stack['_3ty3'] == "cli" ? $b : "<a href=\"?_view=".realpath($b)."\">".htmlentities($b, ENT_QUOTES)."</a>")." > Line " .  ($e+1) . " > %_sht3%", true) : "");
    
                    }

                } else {
                    (_sjt30t($config['contains'], $c) ? _obgu328("Contain(s) Malicious String ".($stack['_3ty3'] == "cli" ? $b : "<a href=\"?_view=".realpath($b)."\">".htmlentities($b, ENT_QUOTES)."</a>")." > %_sht3%", true) : "");

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
    echo "<html><head><title>Shell Finder</title><style>@import url(https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700);pre {background: #303030;color: #f1f1f1;padding: 10px 16px; border-radius: 2px;border-top: 4px solid #00aeef;-moz-box-shadow: inset 0 0 10px #000;box-shadow: inset 0 0 10px #000;counter-reset: line; white-space: pre-wrap;       /* css-3 */ white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */ white-space: -pre-wrap;      /* Opera 4-6 */white-space: -o-pre-wrap;    /* Opera 7 */ word-wrap: break-word;       /* Internet Explorer 5.5+ */}body { background-color:#F7F7F7; font-family: 'Open Sans', sans-serif; } </style></head><body><center><h1>Shell Finder v1.0</h1><form type=get><input type=text name=_ placeholder='Path' value='".@htmlentities($_GET['_'], ENT_QUOTES)."'/>&nbsp;<input type=submit name=submit/></form></center><hr/><br/>";
    if (isset($_GET['_view'])) {
        echo "Opening File " . htmlentities(urldecode($_GET['_view']), ENT_QUOTES) . ":<br/><br/><div style=\"padding-left: 30px;padding-right: 30px;\"><pre>";
        echo htmlentities(_3b0u92t(urldecode($_GET['_view'])), ENT_QUOTES) . "</pre></div>";

    } else {
        if (@!empty($_GET['_'])) {
            _ihpyt490($_GET['_']);
    
        } else {
            _ihpyt490("{,.}[!.,!..]*");
    
        }
        
    }
    echo "<br/><hr/><center>Copyright Muhammad Gholy X Nikko Enggaliano</center></body></head>";
}
?>
