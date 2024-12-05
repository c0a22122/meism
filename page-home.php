<?php get_header(); ?>

<div class="sub-page-contents">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <main id="main" role="main">

                    <article class="article article--archive">
                        <div class="entry">
                            <?php do_action('habakiri_before_entries'); ?>
                            <div class="entries entries--archive">
                                <div class="top-flex-box">
                                    <?php
                                    // キャッシュされているライブ配信データを取得
                                    $live_streams = get_transient('latest_live_streams');
                                    error_log("取得したキャッシュ: " . print_r($live_streams, true));

                                    // $live_streamsがfalseかどうかをチェック
                                    if ($live_streams === false || !is_array($live_streams)) {
                                        // ライブ配信がない場合や、キャッシュが空の場合に適切な処理
                                        $live_streams = [];
                                    }

                                    // シャッフルして返す
                                    error_log("Before shuffle: " . print_r($live_streams, true));
                                    shuffle($live_streams);
                                    error_log("After shuffle: " . print_r($live_streams, true));

                                    // セキュリティ強化: データをエスケープ
                                    $safe_streams = array_map(function ($stream) {
                                        return array_map('esc_html', $stream);
                                    }, $live_streams);


                                    // パフォーマンス最適化: PHP側で定数を定義
                                    $initial_display_count = 12;
                                    $load_count = 12;
                                    ?>

                                    <div class="live-streams">
                                        <?php if ($live_streams === false): ?>
                                            <div class="loading-message">
                                                <p>ライブ配信情報を取得中です。</p>
                                                <div class="spinner"></div>
                                                <p>少しお待ちください…</p>
                                                <p>自動的にページが更新されます。</p>
                                            </div>
                                            <script>
                                                // 5秒後にページをリロード
                                                setTimeout(function() {
                                                    window.location.reload();
                                                }, 10000);
                                            </script>
                                        <?php elseif (empty($safe_streams)): ?>
                                            <p>現在ライブ配信はありません。</p>
                                        <?php else: ?>
                                            <ul id="stream-list">
                                                <?php foreach (array_slice($safe_streams, 0, $initial_display_count) as $stream): ?>
                                                    <li>
                                                        <a href="<?php echo esc_url($stream['link']); ?>" target="_blank">
                                                            <div class="live-image">
                                                                <img src="https://img.youtube.com/vi/<?php echo esc_attr($stream['videoId']); ?>/hqdefault.jpg" alt="<?php echo esc_attr($stream['title']); ?>" loading="lazy" />
                                                            </div>
                                                            <h3><?php echo $stream['title']; ?></h3>
                                                            <h4><?php echo $stream['channel_name']; ?></h4>
                                                        </a>
                                                        <span class="badge">Live</span>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                            <button id="load-more" aria-live="polite">もっと見る</button>
                                        <?php endif; ?>

                                        <script>
                                            (function() {
                                                const allStreams = <?php echo json_encode($safe_streams); ?>;
                                                let displayedCount = <?php echo $initial_display_count; ?>;
                                                const loadCount = <?php echo $load_count; ?>;

                                                const loadMoreButton = document.getElementById('load-more');
                                                const streamList = document.getElementById('stream-list');

                                                // ボタンの表示設定
                                                loadMoreButton.style.display = allStreams.length > displayedCount ? 'block' : 'none';

                                                loadMoreButton.addEventListener('click', () => {
                                                    let newStreams = '';

                                                    try {
                                                        // 残りのストリームを追加
                                                        for (let i = displayedCount; i < displayedCount + loadCount && i < allStreams.length; i++) {
                                                            newStreams += `
                        <li>
                            <a href="${allStreams[i].link}" target="_blank">
                                <div class="live-image">
                                    <img src="https://img.youtube.com/vi/${allStreams[i].videoId}/hqdefault.jpg" alt="${allStreams[i].title}" loading="lazy" />
                                </div>
                                <h3>${allStreams[i].title}</h3>
                                <h4>${allStreams[i].channel_name}</h4>
                            </a>
                            <span class="badge">Live</span>
                        </li>`;
                                                        }

                                                        streamList.insertAdjacentHTML('beforeend', newStreams);
                                                        displayedCount += loadCount;

                                                        // ボタンが必要かどうかを判断
                                                        if (displayedCount >= allStreams.length) {
                                                            loadMoreButton.style.display = 'none';
                                                        }

                                                        // アクセシビリティのための通知
                                                        loadMoreButton.setAttribute('aria-label', `${displayedCount}個のライブストリームを表示中`);
                                                    } catch (error) {
                                                        console.error('エラーが発生しました:', error);
                                                        loadMoreButton.textContent = 'エラーが発生しました。再試行してください。';
                                                    }
                                                });
                                            })();
                                        </script>
                                    </div>
                                </div>
                                <!-- end .entries -->
                            </div>
                            <?php do_action('habakiri_after_entries'); ?>

                            <?php get_template_part('modules/pagination'); ?>
                            <!-- end .entry -->
                        </div>
                    </article>
                    <!-- end #main -->
                </main>
                <!-- end .col-md-9 -->
            </div>
            <div class="col-md-3">
                <?php get_sidebar(); ?>
                <!-- end .col-md-3 -->
            </div>
            <!-- end .row -->
        </div>
        <!-- end .container -->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 under_text">
                <h2>配信中のVTuberが見つかるプラットフォームVなう!!</h2>
                <p>新しくVTuberを開拓したいけど、YouTubeで検索しても表示される件数に限度はあるし、SNSで探していてもその人がどんな配信をしているか、いつ配信しているかなど調べるのにすごく時間がかかってしまう…<br>
                    そんな人たちの為に「Vなう」を作りました。<br>
                    「Vなう」は“今”配信中のVTuberを紹介するサイトです。<br>
                    「この時間帯はこんな人たちが配信しているんだ！」という発見や、新たな推し探しに最適なサイトです。<br>
                    掲載方法はランダムという仕組みを採用しており、公平にVTuberとリスナーの出会いを提供する事が出来ます。</p>
            </div>
        </div>
    </div>
    <!-- end .sub-page-contents -->
</div>

<?php get_footer(); ?>