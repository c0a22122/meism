<?php

/**
 * Template Name: Rich Front Page
 *
 * Version      : 1.0.0
 * Author       : inc2734
 * Author URI   : http://2inc.org
 * Created      : August 15, 2015
 * Modified     :
 * License      : GPLv2 or later
 * License URI  : license.txt
 */
?>
<?php get_header(); ?>
<?php get_template_part('modules/header'); ?>
<div class="container-fluid">
    <div class="row">
        <main id="main" role="main">
            <article <?php post_class(array('article', 'article--page')); ?>>
                <div class="entry">
                    <div class="entry__content">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 fadeIn wow">
                                    <h2 class="top-section-title ma-20">努力を続ける活動者たちを<br>サポートするプロ集団</h2>
                                    <p class="ma-20">MEISMは「頑張り続ける人達をサポートしたい！」をモットーに、e-Sports業界だけでなく、すべてのストリーマーやそれに関係する活動者さん達に活躍できる場と必要な情報を提供することで、業界を盛り上げていこうと立ち上げた団体です。 </p>
                                    <a href="<?php echo home_url(); ?>/about/" class="linkbtn">VIEW MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="news_bg">
                            <div class="container fadeIn wow">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h2 class="sub-section-title ma-20">NEWS<span>お知らせ</span></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid nopadding fadeIn wow">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <?php get_template_part('top-news'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 fadeIn wow">
                                    <h2 class="sub-section-title ma-20">SERVICE<span>サービス</span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="container ma-40 fadeIn wow">
                            <div class="row row-flex top-service">
                                <div class="col-sm-6">
                                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2024/04/Live2D-Production.jpg">
                                </div>
                                <div class="col-sm-6">
                                    <h3>Live2Dキャラクター制作</h3>
                                    <p>Live2Dキャラクター制作はこれからVTuberとして活動していきたい方たちのために、高クオリティなLive2Dキャラクターを制作します。</p>
                                    <?php /*     <a class="sub_linkbtn mincho" href="<?php echo home_url('service'); ?>/#section1"><span>VIEW MORE</span></a>　 */ ?>
                                </div>
                            </div>
                        </div>
                        <div class="container ma-40 fadeIn wow">
                            <div class="row row-flex top-service">
                                <div class="col-sm-6 col-sm-push-6">
                                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2024/04/game-coaching.jpg">
                                </div>
                                <div class="col-sm-6 col-sm-pull-6">
                                    <h3>ゲームコーチング</h3>
                                    <p>各分野の現役プロ、元プロがあなたにあったカリキュラムを作成します。テンプレ的なコーチングではなく、それぞれの特性や苦手分野などを分析して最短最速でゲームを上達させるお手伝いをします。</p>
                                    <?php /*  <a class="sub_linkbtn mincho" href="<?php echo home_url('service'); ?>/#section2"><span>VIEW MORE</span></a>　 */ ?>
                                </div>
                            </div>
                        </div>
                        <div class="container ma-40 fadeIn wow">
                            <div class="row row-flex top-service">
                                <div class="col-sm-6">
                                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2024/04/Streamer-Support.jpg">
                                </div>
                                <div class="col-sm-6">
                                    <h3>ストリーマーサポート</h3>
                                    <p>準備中</p>
                                    <?php /*    <a class="sub_linkbtn mincho" href="<?php echo home_url('service'); ?>/#section3"><span>VIEW MORE</span></a>　 */ ?>
                                </div>
                            </div>
                        </div>
                        <?php /*
                        <div class="container ma-40">
                            <div class="row row-flex top-service">
                                <div class="col-sm-6 col-sm-push-6">
                                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2024/03/MEISM_header_official_Official.png">
                                </div>
                                <div class="col-sm-6 col-sm-pull-6">
                                    <h3>MEISMガジェット</h3>
                                    <p>準備中</p>
                                </div>
                            </div>
                        </div>
                        */ ?>
                    </div>
                    <div class="top_team_bg">
                        <div class="container fadeIn wow">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h2 class="sub-section-title ma-20">TEAM<span>チーム</span></h2>
                                </div>

                            </div>
                        </div>
                        <div class="container fadeIn wow">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="tabs">

                                        <?php /*
                                    <input id="all" type="radio" name="tab_item">
											<label class="tab_item" for="all">APEX Player</label>

                                        <input id="streamer" type="radio" name="tab_item" checked>
                                        <label class="tab_item" for="streamer">STREAMER</label>
                                        <input id="VTuber" type="radio" name="tab_item">
                                        <label class="tab_item" for="VTuber">VTuber</label>

                                        <?php /*
                                        <div class="tab_content top-flex-box" id="all_content">
                                            <a href="<?php the_field('player_url1'); ?>" class="top-flex-inner">
                                                <img src="<?php the_field('player_image1'); ?>">
                                                <p><?php the_field('player_name1'); ?></p>
                                            </a>
                                            <a href="<?php the_field('player_url2'); ?>" class="top-flex-inner">
                                                <img src="<?php the_field('player_image2'); ?>">
                                                <p><?php the_field('player_name2'); ?></p>
                                            </a>
                                            <a href="<?php the_field('player_url3'); ?>" class="top-flex-inner">
                                                <img src="<?php the_field('player_image3'); ?>">
                                                <p><?php the_field('player_name3'); ?></p>
                                            </a>
                                            <a class="sub_linkbtn mincho" href="<?php echo home_url(); ?>/category/team/apex-player/"><span>VIEW MORE</span></a>
                                        </div>

                                        <div class="tab_content" id="streamer_content">
                                            <div class="top-flex-box">
                                                <?php if (have_rows('streamer')) : ?>
                                                    <?php while (have_rows('streamer')) : the_row(); ?>
                                                        <a href="<?php the_sub_field('streamer_url'); ?>" class=" top-flex-inner">
                                                            <img src="<?php the_sub_field('streamer_image'); ?>">
                                                            <p><?php the_sub_field('streamer_name'); ?></p>
                                                        </a>
                                                    <?php endwhile; ?>
                                                <?php endif; ?>
                                            </div>
                                            <a class="sub_linkbtn mincho" href="<?php echo home_url(); ?>/category/team/streamer/"><span>VIEW MORE</span></a>
                                        </div>

                                        <div class="tab_content" id="VTuber_content">
                                        */ ?>
                                        <div class="top-flex-box">
                                            <?php if (have_rows('vtuber')) : ?>
                                                <?php while (have_rows('vtuber')) : the_row(); ?>
                                                    <a href="<?php the_sub_field('vtuber_url'); ?>" class=" top-flex-inner">
                                                        <img src="<?php the_sub_field('vtuber_image'); ?>">
                                                        <p><?php the_sub_field('vtuber_name'); ?></p>
                                                    </a>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>
                                        <a class="sub_linkbtn mincho" href="<?php echo home_url(); ?>/category/team/vtuber/"><span>VIEW MORE</span></a>
                                        <?php /*
                                              </div>
                                              */ ?>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
					<?php /*
                    <div class="container fadeIn wow">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class="sub-section-title ma-20">CREATER<span>クリエイター</span></h2>
                            </div>

                        </div>
                    </div>
                    <div class="container ma-40">
                        <div class="row">
                            <div class="col-sm-12 fadeIn wow">
                                <div class="top-flex-box">
                                    <?php if (have_rows('creator')) : ?>
                                        <?php while (have_rows('creator')) : the_row(); ?>
                                            <a href="<?php the_sub_field('creator_url'); ?>" class="creater-flex-inner" target="_blank" rel="noopener noreferrer">
                                                <img src="<?php the_sub_field('creator_image'); ?>">
                                                <p><?php the_sub_field('creator_name'); ?></p>
                                            </a>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
					*/ ?>
                </div>
    </div>
    </article>
    </main>
</div>
</div>
<?php get_footer(); ?>