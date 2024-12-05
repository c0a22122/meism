<?php
// WordPressの環境を読み込む
require_once(dirname(__FILE__) . '/../../../wp-load.php');

// キャッシュをクリア
clear_latest_live_streams_cache();
echo "キャッシュが正常にリセットされました。";
?>