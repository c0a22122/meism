<?php

function habakiri_child_theme_setup()
{
	class Habakiri extends Habakiri_Base_Functions
	{
		public function wp_enqueue_scripts()
		{
			parent::wp_enqueue_scripts();

			wp_enqueue_script(
				'inview',
				get_stylesheet_directory_uri() . '/js/jquery.inview.js',
				array('jquery'),
				null
			);
		/*	wp_enqueue_script(
				'click-effects',
				get_stylesheet_directory_uri() . '/js/click-effects.js',
				array('jquery'),
				null

			);
			*/
			wp_enqueue_script(
				'wow',
				'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js',
				array('jquery'),
				null
			);
			wp_enqueue_script(
				'master',
				get_stylesheet_directory_uri() . '/js/master.js',
				array('jquery'),
				null
			);
			wp_enqueue_script(
				'swiper',
				'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js',
				array('jquery'),
				null
			);
			wp_enqueue_script(
				'wow',
				'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js',
				array('jquery'),
				null
			);
			wp_enqueue_script(
				'google',
				'https://apis.google.com/js/platform.js',
				array('jquery'),
				null
			);
			wp_enqueue_style('base', get_stylesheet_directory_uri() . '/css/base.css');
			wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.css');
			wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
			wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
			wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
		}
	}
}
add_action('after_setup_theme', 'habakiri_child_theme_setup');


/*カスタマイザー追加*/
function my_theme_customize_register($wp_customize)
{

	$wp_customize->add_section('wps_contact_section', array(
		'title' => 'ヘッダー問い合わせ', //セクションのタイトル
		'priority' => 93, //セクションの位置
		'description' => 'ヘッダーの問い合わせ項目を設定してください。', //セクションの説明
	));

	// 電話番号
	$wp_customize->add_setting('wps_tel_text', array(
		'default'   => '',
		'type'      => 'option',
		'transport' => 'postMessage',
		'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('wps_tel_text', array(
		'settings'  => 'wps_tel_text',
		'label'     => '電話番号',
		'section'   => 'wps_contact_section',
		'type'      => 'text',
		'description' => '表示する電話番号を入力してください。',
	));

	// 営業時間
	$wp_customize->add_setting('wps_hours_text', array(
		'default'   => '',
		'type'      => 'option',
		'transport' => 'postMessage',
		'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('wps_hours_text', array(
		'settings'  => 'wps_hours_text',
		'label'     => '営業時間',
		'section'   => 'wps_contact_section',
		'type'      => 'text',
		'description' => '営業時間を入力してください。',
	));

	// 問い合わせ文字
	$wp_customize->add_setting('wps_contact_text', array(
		'default'   => '',
		'type'      => 'option',
		'transport' => 'postMessage',
		'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control('wps_contact_text', array(
		'settings'  => 'wps_contact_text',
		'label'     => '問い合わせリンク文字',
		'section'   => 'wps_contact_section',
		'type'      => 'text',
		'description' => '問い合わせリンク文字を入力してください。',
	));

	// 問い合わせリンク
	$wp_customize->add_setting('wps_contact_link', array(
		'default'   => '',
		'type'      => 'option',
		'transport' => 'postMessage',
		'sanitize_callback' => 'esc_url',
	));

	$wp_customize->add_control('wps_contact_link', array(
		'settings'  => 'wps_contact_link',
		'label'     => '問い合わせリンク',
		'section'   => 'wps_contact_section',
		'type'      => 'text',
		'description' => '問い合わせリンクを入力してください。',
	));

	// 問い合わせ背景
	$wp_customize->add_setting(
		'wps_contact_color',
		array(
			'sanitize_callback' => 'sanitize_hex_color',
			'default' => '#0070E0',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize, 'wps_contact_color', array(
			'label' => __('問い合わせボタン背景色', 'color'),
			'section' => 'wps_contact_section',
			'settings' => 'wps_contact_color',
		))
	);

	// 問い合わせ背景(ホバー)
	$wp_customize->add_setting(
		'wps_contact_color_hover',
		array(
			'sanitize_callback' => 'sanitize_hex_color',
			'default' => '#337ab7',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize, 'wps_contact_color_hover', array(
			'label' => __('問い合わせボタン背景色(ホバー)', 'color'),
			'section' => 'wps_contact_section',
			'settings' => 'wps_contact_color_hover',
		))
	);

	// 問い合わせリンク文字色
	$wp_customize->add_setting(
		'wps_contact_text_color',
		array(
			'sanitize_callback' => 'sanitize_hex_color',
			'default' => '#fff',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize, 'wps_contact_text_color', array(
			'label' => __('問い合わせリンク文字色', 'color'),
			'section' => 'wps_contact_section',
			'settings' => 'wps_contact_text_color',
		))
	);

	// 問い合わせリンク文字色(ホバー)
	$wp_customize->add_setting(
		'wps_contact_text_color_hover',
		array(
			'sanitize_callback' => 'sanitize_hex_color',
			'default' => '#fff',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize, 'wps_contact_text_color_hover', array(
			'label' => __('問い合わせリンク文字色(ホバー)', 'color'),
			'section' => 'wps_contact_section',
			'settings' => 'wps_contact_text_color_hover',
		))
	);

	$wp_customize->add_section('wps_main_header_section', array(
		'title' => 'メインヘッダー画像', //セクションのタイトル
		'priority' => 95, //セクションの位置
		'description' => 'トップページのヘッダー画像をアップロードしてください。', //セクションの説明
	));

	/*ヘッダー画像*/
	$wp_customize->add_setting('wps_main_header_img_pc', array(
		'sanitize_callback' => 'esc_url_raw',
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'wps_main_header_img_pc', array(
		'label' => 'PCヘッダー画像', //設定項目のタイトル
		'section' => 'wps_main_header_section', //追加するセクションのID
		'settings' => 'wps_main_header_img_pc', //追加する設定項目のID
		'description' => 'PC用のヘッダー画像を設定してください。推奨画像サイズ: 1920×530px', //設定項目の説明
	)));

	/*ヘッダー画像SP*/
	$wp_customize->add_setting('wps_main_header_img_sp', array(
		'sanitize_callback' => 'esc_url_raw',
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'wps_main_header_img_sp', array(
		'label' => 'スマホヘッダー画像', //設定項目のタイトル
		'section' => 'wps_main_header_section', //追加するセクションのID
		'settings' => 'wps_main_header_img_sp', //追加する設定項目のID
		'description' => 'スマホ用のヘッダー画像を設定してください。推奨画像サイズ: 768×250px', //設定項目の説明
	)));

	// キャッチフレーズ
	$wp_customize->add_setting('wps_main_header_text', array(
		'default'   => '',
		'type'      => 'option',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('wps_main_header_text', array(
		'settings'  => 'wps_main_header_text',
		'label'     => 'キャッチフレーズ',
		'section'   => 'wps_main_header_section',
		'type'      => 'textarea',
		'description' => 'ヘッダー画像上に表示するキャッチフレーズを入力してください。（HTML可）',
	));

	$wp_customize->add_section('wps_sub_header_section', array(
		'title' => 'サブヘッダー画像', //セクションのタイトル
		'priority' => 96, //セクションの位置
		'description' => '各ページのヘッダー画像をアップロードしてください。', //セクションの説明
	));

	/*サブヘッダー画像*/
	$wp_customize->add_setting('wps_sub_header_img_pc', array(
		'sanitize_callback' => 'esc_url_raw',
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'wps_sub_header_img_pc', array(
		'label' => 'PCヘッダー画像', //設定項目のタイトル
		'section' => 'wps_sub_header_section', //追加するセクションのID
		'settings' => 'wps_sub_header_img_pc', //追加する設定項目のID
		'description' => 'PC用のヘッダー画像を設定してください。推奨画像サイズ: 1920×530px', //設定項目の説明
	)));

	/*ヘッダー画像SP*/
	$wp_customize->add_setting('wps_sub_header_img_sp', array(
		'sanitize_callback' => 'esc_url_raw',
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'wps_sub_header_img_sp', array(
		'label' => 'スマホヘッダー画像', //設定項目のタイトル
		'section' => 'wps_sub_header_section', //追加するセクションのID
		'settings' => 'wps_sub_header_img_sp', //追加する設定項目のID
		'description' => 'スマホ用のヘッダー画像を設定してください。推奨画像サイズ: 768×250px', //設定項目の説明
	)));
}
add_action('customize_register', 'my_theme_customize_register');


//SVG許可
function cc_mime_types($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function get_the_wps_main_header_img_pc_url()
{
	return esc_url(get_theme_mod('wps_main_header_img_pc'));
}
function get_the_wps_main_header_img_sp_url()
{
	return esc_url(get_theme_mod('wps_main_header_img_sp'));
}
function get_the_wps_sub_header_img_pc_url()
{
	return esc_url(get_theme_mod('wps_sub_header_img_pc'));
}
function get_the_wps_sub_header_img_sp_url()
{
	return esc_url(get_theme_mod('wps_sub_header_img_sp'));
}

/*-------------------------------------------*/
/*	カラー設定
/*-------------------------------------------*/
function theme_customize_css()
{
	$wps_contact_color = get_theme_mod('wps_contact_color');
	$wps_contact_color_hover = get_theme_mod('wps_contact_color_hover');
	$wps_contact_text_color = get_theme_mod('wps_contact_text_color');
	$wps_contact_text_color_hover = get_theme_mod('wps_contact_text_color_hover');
?>
	<style type="text/css">
		.inquiriesbtn {
			background: <?php echo get_theme_mod('wps_contact_color'); ?>;
			color: <?php echo get_theme_mod('wps_contact_text_color'); ?>;
		}

		.inquiriesbtn:hover {
			background: <?php echo get_theme_mod('wps_contact_color_hover'); ?>;
			color: <?php echo get_theme_mod('wps_contact_text_color_hover'); ?>;
		}
	</style>
<?php }

add_action('wp_head', 'theme_customize_css');

/*-------------------------------------------
/* 管理画面用CSS
/*-------------------------------------------*/
add_editor_style('edit-style.css');
function load_custom_wp_admin_style()
{
	wp_register_style('custom_wp_admin_css', get_stylesheet_directory_uri() . '/admin-style.css', false, '1.0.0');
	wp_enqueue_style('custom_wp_admin_css');
}
add_action('admin_enqueue_scripts', 'load_custom_wp_admin_style');

/**
 * ダッシュボードウィジェットを削除します。
 */
function remove_dashboard_widget()
{
	remove_action('welcome_panel', 'wp_welcome_panel');
	remove_action('try_gutenberg_panel', 'wp_try_gutenberg_panel');
	remove_meta_box('dashboard_activity', 'dashboard', 'normal'); // アクティビティ
	remove_meta_box('dashboard_primary', 'dashboard', 'side'); // WordPressニュース
}
add_action('wp_dashboard_setup', 'remove_dashboard_widget');

/**
 * 作成者アーカイブを無効化します。(WordPressのサイトアドレスURL/?author=1 などでアクセスされた際にURLにユーザー名が表示される機能も無効にします)
 */
function author_archive_404($query)
{
	if (!is_admin() && is_author()) {
		$query->set_404();
		status_header(404);
		nocache_headers();
	}
}
add_filter('parse_query', 'author_archive_404');

add_action(
	'widgets_init',
	function () {
		register_sidebar(array(
			'id' => 'widget_under',
			'name' => '記事下（CTA）',
			'description' => '記事下のウィジェットエリアです。',
			'before_widget' => '<div id="%1$s" class="widget sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="sidebar-widget__title h4">',
		));
	}
);

function my_tiny_mce_before_init($init_array)
{
	$init_array['valid_elements']          = '*[*]';
	$init_array['extended_valid_elements'] = '*[*]';

	return $init_array;
}
add_filter('tiny_mce_before_init', 'my_tiny_mce_before_init');


//更新通知を管理者権限のみに表示
function update_nag_admin_only()
{
	if (!current_user_can('administrator')) {
		remove_action('admin_notices', 'update_nag', 3);
	}
}
add_action('admin_init', 'update_nag_admin_only');

//srcset無効
add_filter('wp_calculate_image_srcset_meta', '__return_null');

//Wow
add_action('wp_footer', 'add_meta_to_footer');
function add_meta_to_footer()
{
	echo '
<script>
    new WOW().init();
</script>
';
}

//ショートコードを使ったphpファイルの呼び出し方法
function my_php_Include($params = array())
{
	extract(shortcode_atts(array('file' => 'default'), $params));
	ob_start();
	include(STYLESHEETPATH . "/$file.php");
	return ob_get_clean();
}
add_shortcode('myphp', 'my_php_Include');


function check_if_live($video_ids) {
	
	if (empty($video_ids)) {
		error_log("動画IDが空です。動画IDが正しく収集されているか確認してください。");
		return ['error' => '動画IDが空です。動画IDが正しく収集されているか確認してください。'];
}

	$status = [];
	$api_keys = YOUTUBE_API_KEYS; // wp-config.phpから取得
	$api_url_base = "https://www.googleapis.com/youtube/v3/videos?part=liveStreamingDetails&id=";
	$batch_size = 50;
	$collected_ids = [];

	foreach ($video_ids as $video_id) {
			$collected_ids[] = $video_id;

			if (count($collected_ids) === $batch_size) {
					error_log("収集された動画ID: " . implode(',', $collected_ids));
					process_batch($collected_ids, $api_keys, $api_url_base, $status);
					$collected_ids = [];
			}
	}

	if (count($collected_ids) > 0) {
			process_batch($collected_ids, $api_keys, $api_url_base, $status);
	}

	if (empty($status)) {
			error_log("全てのAPIキーでクォータ上限に達しました。");
			return ['error' => '全てのAPIキーでクォータ上限に達しました。'];
	}

	return $status;
}

function process_batch($collected_ids, $api_keys, $api_url_base, &$status) {
	$video_ids_string = implode(',', $collected_ids);
	error_log("チェックする動画IDリスト: " . $video_ids_string);

	foreach ($api_keys as $index => $api_key) {
			error_log("使用中のAPIキー番号: " . ($index + 1));

			$api_url = $api_url_base . $video_ids_string . "&key=" . $api_key;
			$response = wp_remote_get($api_url);

			if (!is_wp_error($response)) {
					$response_data = json_decode(wp_remote_retrieve_body($response), true);

					// items が存在し、かつ空でないかを確認
					if (isset($response_data['items']) && !empty($response_data['items'])) {
							error_log("items の中身: " . print_r($response_data['items'], true)); // items の中身をログに出力
							foreach ($response_data['items'] as $video) {
									$video_id = $video['id'];
									if (isset($video['liveStreamingDetails']['activeLiveChatId']) &&
											isset($video['liveStreamingDetails']['actualStartTime'])) {
											$status[$video_id] = 'live';
									} else {
											$status[$video_id] = 'not_live';
									}
							}
							return; // 正常にデータが取得できたら処理を終了
					} else if (isset($response_data['error']['errors'][0]['reason']) && 
										 $response_data['error']['errors'][0]['reason'] === 'quotaExceeded') {
							error_log("クォータ上限に達しました: " . wp_remote_retrieve_response_code($response) . " (APIキー: $api_key)");
							continue; // 次のAPIキーを試す
					} else {
							// items が存在しない、もしくは空である場合のログ
							error_log("items が空、または存在しません (APIキー: $api_key)");
					}
			} else {
					error_log('APIリクエストにエラーが発生: ' . wp_remote_retrieve_response_code($response) . " (APIキー: $api_key)");
					continue; // 次のAPIキーを試す
			}
	}
}


if (!defined('WP_USE_THEMES')) {
	define('WP_USE_THEMES', true);
}

// ライブストリームを取得する関数
function get_latest_live_streams($channel_ids_to_process = []) {
	// キャッシュキーと有効期限の設定
	$cache_key = 'latest_live_streams';
	$cache_expiration = 7200; // 2時間（秒単位）
	$start_time = microtime(true); // 処理開始時間の取得

	// 既存のキャッシュデータを取得
	$existing_live_streams = get_transient($cache_key);
	if ($existing_live_streams === false || !is_array($existing_live_streams)) {
			$existing_live_streams = [];
	}

	// キャッシュデータを動画IDをキーにした配列に変換
	$existing_live_streams_by_id = [];
	foreach ($existing_live_streams as $stream) {
			$existing_live_streams_by_id[$stream['videoId']] = $stream;
	}

	// チャンネルデータの取得
	if (empty($channel_ids_to_process)) {
			error_log("チャンネルIDが指定されていません。");
			return $existing_live_streams; // キャッシュを返す
	}

	error_log("取得するチャンネルID: " . implode(", ", $channel_ids_to_process));

	$live_streams = [];
	$max_entries = 3; // 最大取得エントリー数
	$batch_size = 10; // 一度に処理するチャンネル数

	// チャンネルIDをバッチに分割
	$batches = array_chunk($channel_ids_to_process, $batch_size);

	// curl_multiを使用して全てのリクエストを並行処理
	$multi_handle = curl_multi_init();
	$curl_handles = [];

	foreach ($batches as $batch_index => $batch_channel_ids) {
			error_log("処理中のバッチ: " . ($batch_index + 1));

			foreach ($batch_channel_ids as $channel_id) {
					$rss_url = "https://www.youtube.com/feeds/videos.xml?channel_id=$channel_id";
					$curl_handle = curl_init($rss_url);
					curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($curl_handle, CURLOPT_FOLLOWLOCATION, true);
					$curl_handles[$channel_id] = $curl_handle;
					curl_multi_add_handle($multi_handle, $curl_handle);
					error_log("RSSリクエストを設定しました: " . $rss_url);
			}
	}

	// 全リクエストを並行処理
	do {
			$status = curl_multi_exec($multi_handle, $active);
			if ($status > 0) {
					error_log("cURL multi exec error: " . curl_multi_strerror($status));
			}
	} while ($active > 0);

	// 各チャンネルのレスポンスを処理
	foreach ($curl_handles as $channel_id => $curl_handle) {
			$response = curl_multi_getcontent($curl_handle);
			curl_multi_remove_handle($multi_handle, $curl_handle);
			curl_close($curl_handle);

			if ($response === false) {
					error_log("cURLリクエストが失敗しました: チャンネルID: " . $channel_id);
					continue;
			}

			error_log("チャンネルID " . $channel_id . " のRSSレスポンスを取得しました。");

			$rss_feed = simplexml_load_string($response);
			if ($rss_feed === false) {
					error_log("RSSフィードのパースに失敗しました: チャンネルID: " . $channel_id);
					continue;
			}

			if (isset($rss_feed->entry)) {
					$channel_name = (string)$rss_feed->title;
					error_log("チャンネル名: " . $channel_name . " から動画エントリーを取得中。");

					// 上から指定された件数のエントリーをチェック
					$video_ids = [];
					$entry_count = 0; // エントリー数のカウント

					foreach ($rss_feed->entry as $entry) {
							// 最大取得エントリー数を超えた場合はループを抜ける
							if ($entry_count >= $max_entries) {
									break;
							}

							$updated_time = (string)$entry->updated; // <updated>の情報
							$video_id = (string)$entry->children('yt', true)->videoId;

							// UTCから日本時間に変換
							$updated_timestamp = strtotime($updated_time);
							$current_time = time(); // 現在のUNIXタイムスタンプ

							// 12時間以内かどうかをチェック
							if (($current_time - $updated_timestamp) <= 12 * 3600) {
									$video_ids[] = $video_id; // 動画IDを収集
									$entry_count++; // エントリー数を増加
							}
					}

					// デバッグ用に動画IDをログに出力
					error_log("チャンネル " . $channel_name . " から収集した動画ID: " . implode(", ", $video_ids));

					// ライブ配信かどうかをチェック（このチェックは1回のみ）
					$live_video_status = check_if_live($video_ids);
					error_log("check_if_live 関数の結果: " . print_r($live_video_status, true));

					foreach ($video_ids as $i => $video_id) {
							// ライブ配信が見つかった場合
							if (isset($live_video_status[$video_id]) && $live_video_status[$video_id] === 'live') {
									$entry = $rss_feed->entry[$i]; // エントリーを再取得
									$thumbnail_url = (string)$entry->children('media', true)->group->thumbnail->attributes()['url'];
									$live_streams[] = [
											'videoId' => $video_id,
											'title' => (string)$entry->title,
											'link' => (string)$entry->link['href'],
											'thumbnail' => $thumbnail_url,
											'channel_name' => $channel_name,
									];
									error_log("ライブ配信を追加しました: " . $video_id . " (" . $entry->title . ")");
							}
					}
			}
	}
	curl_multi_close($multi_handle); // マルチハンドルをクローズ

	// 処理の終了時に経過時間を計算してログに出力
	$end_time = microtime(true);
	$execution_time = $end_time - $start_time;
	error_log("処理にかかった時間: " . $execution_time . " 秒");

	// 既存のキャッシュデータと新しいデータを動画IDベースでマージ
	foreach ($live_streams as $stream) {
			$existing_live_streams_by_id[$stream['videoId']] = $stream;
	}

	// キャッシュに保存
	$merged_live_streams = array_values($existing_live_streams_by_id); // 動画IDベースでユニークな配列に変換
	set_transient($cache_key, $merged_live_streams, $cache_expiration); // キャッシュを上書き保存
	error_log("キャッシュに保存されました: " . json_encode($merged_live_streams, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

	return $merged_live_streams;
}


// キャッシュをクリアし、ライブ配信中のものは保持、終了しているものは削除
function clear_latest_live_streams_cache() {
	$cache_key = 'latest_live_streams';
	$live_streams = get_transient($cache_key); // キャッシュを取得

	// 新しいキャッシュ用の配列を初期化
	$updated_live_streams = [];

	if ($live_streams !== false && !empty($live_streams)) {
			$video_ids = array_column($live_streams, 'videoId'); // キャッシュされた動画IDを取得

			// ライブ配信中かどうかを確認
			$live_status = check_if_live($video_ids);

			// ライブ配信中の動画を残し、終了している動画は削除
			foreach ($live_streams as $stream) {
					if (isset($live_status[$stream['videoId']]) && $live_status[$stream['videoId']] === 'live') {
							$updated_live_streams[] = $stream; // ライブ配信中のものを保持
					} else {
							error_log("終了した動画のキャッシュを削除しました: " . $stream['videoId']);
					}
			}
	}

	// キャッシュをライブ中のストリームで上書き
	if (!empty($updated_live_streams)) {
			set_transient($cache_key, $updated_live_streams, 7200); // 2時間キャッシュを保持
			error_log("ライブ配信中のキャッシュが更新されました。");
	} else {
			delete_transient($cache_key); // すべての動画が終了していた場合、キャッシュを削除
			error_log("すべての動画が終了していたため、キャッシュを削除しました。");
	}
}

// ライブ配信中の人数を取得する関数
function get_live_stream_count() {
	$live_streams = get_latest_live_streams(); // ライブ配信データを取得
	return count($live_streams); // ライブ配信中の人数をカウント
}

// ショートコードを作成
function display_channel_data() {
	$live_count = get_live_stream_count();
	ob_start(); // バッファリングを開始

	// プラグインオプションからチャンネルデータを取得
	$channel_data = get_option('lsp_channel_data', []);

	if (is_array($channel_data) && count($channel_data) > 0) {
		$channels = [];

		foreach ($channel_data as $fields) {
			if (isset($fields['id']) && isset($fields['name']) && isset($fields['furigana'])) {
				$channels[] = [
					'id' => esc_html($fields['id']),
					'name' => esc_html($fields['name']),
					'furigana' => esc_html($fields['furigana'])
				];
			}
		}

		// フリガナで50音順にソート
		usort($channels, function ($a, $b) {
			return strcmp($a['furigana'], $b['furigana']);
		});

		$per_page = 18;
		$total_channels = count($channels);
		$total_pages = ceil($total_channels / $per_page);
		$current_page = max(1, get_query_var('paged', 1));

		$start_index = ($current_page - 1) * $per_page;
		$current_channels = array_slice($channels, $start_index, $per_page);

		// 出力内容
		echo '<p class="side_count">登録配信者数： <span>' . esc_html($total_channels) . '名</span></p>';
		echo '<p class="side_count">ライブ中の人数： <span>' . esc_html($live_count) . '名</span></p>';
	}

	return ob_get_clean(); // バッファの内容を返す
}

add_shortcode('channel_list', 'display_channel_data');function auto_post_slug( $slug, $post_ID, $post_status, $post_type ) {
    // URLスラッグに特定のパターンが含まれている場合
    if ( preg_match( '/(%[0-9a-f]{2})+/', $slug ) ) {
        // 投稿のタイプ（post_type）をURIエンコードし、投稿IDをつなげて新しいスラッグに設定
        $slug = utf8_uri_encode( $post_type ) . '-' . $post_ID;
    }
    // 新しいスラッグを返す
    return $slug;
}

// wp_unique_post_slugフィルターに自動生成関数を追加
add_filter( 'wp_unique_post_slug', 'auto_post_slug', 10, 4 );

