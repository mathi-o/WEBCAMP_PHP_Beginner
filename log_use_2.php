<?php
require_once(__DIR__ . "/WEBCAMP_Log.php");

use WEBCAMP\Log;
$obj = new Log();
$obj ->test();

//「use 名前空間名\クラス名;」で書いておき、使用するときは「new クラス名()」