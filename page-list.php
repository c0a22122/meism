<?php get_header(); ?>

<div class="sub-page-contents">
	<script src="https://apis.google.com/js/platform.js"></script>
	<?php /*
	<script src="https://www.youtube.com/iframe_api"></script>

	<script>
		// Google APIがロードされた後にSubscribeボタンを初期化する
		window.onload = function() {
			if (typeof gapi !== 'undefined') {
				gapi.load('auth2', function() {
					console.log('Google API platform loaded');
				});
			}
		};
	</script>
*/ ?>
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<main id="main" role="main">
					<h1 class="page_title">登録配信者一覧(50音順)</h1>
					<?php
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

						$per_page = 15;
						$total_channels = count($channels);
						$total_pages = ceil($total_channels / $per_page);
						$current_page = max(1, get_query_var('paged', 1));

						$start_index = ($current_page - 1) * $per_page;
						$current_channels = array_slice($channels, $start_index, $per_page);
					?>
<p>現在登録されている配信者の数: <?php echo $total_channels; ?>名</p>
						<div class="top-flex-box">
							<?php
							// ソートされたチャンネルを表示
							foreach ($current_channels as $channel) {
							?>
								<div class="list-flex-inner">
									<div class="g-ytsubscribe" data-channelid="<?php echo $channel['id']; ?>" data-layout="full" data-count="default"></div>
								</div>
							<?php
							}
							?>
						</div>

						<?php
						// ページネーションの表示
						$pagination_args = array(
							'base' => get_pagenum_link(1) . '%_%',
							'format' => 'page/%#%',
							'current' => $current_page,
							'total' => $total_pages,
							'mid_size' => '1',
							'prev_text' => __('&laquo;', 'text-domain'),
							'next_text' => __('&raquo;', 'text-domain'),
						);
						?>
						<div class="custom-pagination">
							<?php echo paginate_links($pagination_args); ?>
						</div>

					<?php
					} else {
						echo '<p>登録されたチャンネルはありません。チャンネルを追加してください。</p>';
					}
					?>


					<!-- end .top-flex-box -->
				</main>
				<!-- end #main -->
			</div>
			<div class="col-md-3">
				<?php get_sidebar(); ?>
				<!-- end .col-md-3 -->
			</div>
		</div>
		<!-- end .row -->
	</div>
	<!-- end .container -->
</div>
<!-- end .sub-page-contents -->
<?php get_footer(); ?>