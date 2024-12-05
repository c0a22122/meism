<?php
require_once(dirname(__FILE__) . '/../../../wp-load.php');
$channel_data = get_option('lsp_channel_data', []);
$channel_ids = array_column($channel_data, 'id');
$channel_ids_to_process = array_slice($channel_ids, 0, 50);
$channel_count = count($channel_ids_to_process);
echo "処理するチャンネルIDの数: $channel_count\n";
error_log("RSS取得開始");
$live_streams = get_latest_live_streams($channel_ids_to_process);
error_log("RSS取得完了");
if (!empty($live_streams)) {
    echo "page-api01: 実行成功 - " . count($live_streams) . " 件のライブストリームを取得しました。";
} else {
    echo "page-api01: 実行成功 - 取得したライブストリームはありませんでした。";
}
