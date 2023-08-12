<?php
/*Template Name: Main*/
?>


<?php get_header()?>

<section class="slider-content">
    <div id="owl-demo" class="owl-carousel owl-theme">
        <div class="item">
            <img src="<?php echo get_field( 'image' ); ?>" width="1903" height="523" alt="<?php echo get_field( 'alt' ); ?>">
            <div class="info-slider">
                <div class="info-slider-text">
                    <span class="title-slider">初回入金2 000円以上で200％ボー</span>
                    <span class="other-text-slider">ナスがもらえる！</span>
                </div>
                <div class="info-slider-button">
                    <a href="/go.html" rel="nofollow sponsored" class="info-slider-button-link">
                        <span class="slider-button-link-text">今すぐサインアップ!</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="<?php echo get_field( 'second-image' ); ?>" width="1903" height="523" alt="<?php echo get_field( 'second-alt' ); ?>">
            <div class="info-slider">
                <div class="info-slider-text">
                    <span class="title-slider">まったりとお花見をしながら</span>
                    <span class="other-text-slider">高額の勝利金をゲット！</span>
                </div>
                <div class="info-slider-button">
                    <a href="/go.html" rel="nofollow sponsored" class="info-slider-button-link">
                        <span class="slider-button-link-text">今すぐサインアップ!</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-block-games">
    <div class="section-block-content">
        <div class="section-block-slots-content">
            <div class="section-block-slots">
                <?php
                    if ($items = get_posts(array('numberposts' => 50, 'post_type' => 'Slots'))) {
                        foreach($items as $item) {
                            echo '<div class="slot-item">';
                                echo '<div class="slot-item-image">';
                                    echo get_the_post_thumbnail($item->ID);
                                echo '</div>'; 
                                echo '<div class="slot-item-content">';
                                    echo '<div class="slot-item-buttons">';
                                        echo '<h3 class="slot-item-title">'.$item->post_title.'</h3>';
                                        echo '<a href="/go.html" rel="nofollow sponsored" class="slot-item-play">演奏する</a>';
                                        echo '<a href="/go.html" rel="nofollow sponsored" class="slot-item-demo">デモ</a>';
                                    echo '</div>';
                                echo '</div>';   
                            echo '</div>';
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</section>
<section class="section-block-text">
    <div class="section-block-content">
        <div class="block-content-text">
            <?php echo the_content(); ?>
        </div>
    </div>
</section>
<section class="section-block-jackpots">
    <div class="section-block-content">
        <div class="jackpots-slide-item">
            <div class="slide-jackpots-title">
                <h2 class="jackpots-title-h2">Red Tigerジャックポット</h2>
            </div>
            <div class="slide-jackpots-content">
                <div class="jackpots-content-item">
                    <a href="#" class="jkackpot-link cold">
                        <div class="block-ikon-title">
                            <div class="ikon-cash money" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/icon-money.svg)"></div>
                        </div>
                        <div class="block-ikon-content">
                            <div class="ikon-border" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/dots-blue.svg)"></div>
                            <span class="jackpot-ikon-name">Big Fat Drop</span>
                            <span class="block-ikon-footer">
                                <span class="footer-ikon-currency">RUB</span>
                                <span class="footer-ikon-pay big"></span>
                            </span>
                        </div>
                    </a>
                </div>
                <div class="jackpots-content-item">
                    <a href="#" class="jkackpot-link orange">
                        <div class="block-ikon-title">
                            <div class="ikon-cash clock" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/icon-clock.svg)"></div>
                        </div>
                        <div class="block-ikon-content">
                            <div class="ikon-border" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/dots-orange.svg)"></div>
                            <span class="jackpot-ikon-name">Daily Must Jackpot</span>
                            <span class="block-ikon-footer">
                                <span class="footer-ikon-currency">RUB</span>
                                <span class="footer-ikon-pay must"></span>
                            </span>
                        </div>
                    </a>
                </div>
                <div class="jackpots-content-item">
                    <a href="#" class="jkackpot-link green">
                        <div class="block-ikon-title">
                            <div class="ikon-cash rabbit" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/icon-rabbit.svg)"></div>
                        </div>
                        <div class="block-ikon-content">
                            <div class="ikon-border" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/dots-green.svg)"></div>
                            <span class="jackpot-ikon-name">Rapid Drop</span>
                            <span class="block-ikon-footer">
                                <span class="footer-ikon-currency">RUB</span>
                                <span class="footer-ikon-pay rapid"></span>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="counter-jacpots">
    <div class="section-block-content">
        <div class="counter-jacpots-content" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/border.svg)">
            <h2 class="counter-jacpots-h2">ジャックポット CASINO-X</h2>
            <span class="counter-jacpots-text">RUB 417,623,388.85</span>
        </div>
    </div>
</section>
<section class="counter-news-section">
    <div class="section-block-content">
        <div class="news-section-block" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/border.svg)">
            <div class="new-slide-item">
                <div class="new-slide-content">
                    <div class="new-slide-title">
                        <a href="#" class="slider-new-link">
                            <div class="ikon-new-cup" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/cup.svg)"></div>
                            <h3 class="new-title-name">ナイトトーナメント</h3>
                        </a>
                    </div>
                    <div class="new-slide-info">
                        <div class="new-slide-info-img" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/slide-new-1.svg)"></div>
                        <div class="slide-info-block">
                            <div class="slide-info-block-text">
                                <div class="info-blok-1">
                                    <span class="info-blok-title">景品</span>
                                    <span class="info-blok-content">30000 RUB</span>
                                </div>
                                <div class="info-blok-2">
                                    <span class="info-blok-title">プログレッシブ賞金プール</span>
                                    <span class="info-blok-content progress"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="new-slide-table">
                        <div class="table-column-left">
                            <div class="column-left-content">
                                <div class="column-left-item">
                                    <div class="column-left-item-1">
                                        <span class="item-text title"># 名前</span>
                                    </div>
                                    <div class="column-left-item-2">
                                        <span class="item-text title">眼鏡</span>
                                    </div>
                                </div>
                                <div class="column-left-item">
                                    <div class="column-left-item-1">
                                        <span class="item-text">1 shutzhitsu</span>
                                    </div>
                                    <div class="column-left-item-2">
                                        <span class="item-text">215085</span>
                                    </div>
                                </div>
                                <div class="column-left-item">
                                    <div class="column-left-item-1">
                                        <span class="item-text">2 kaiten1104</span>
                                    </div>
                                    <div class="column-left-item-2">
                                        <span class="item-text">93921</span>
                                    </div>
                                </div>
                                <div class="column-left-item">
                                    <div class="column-left-item-1">
                                        <span class="item-text">3 farid808</span>
                                    </div>
                                    <div class="column-left-item-2">
                                        <span class="item-text">44594</span>
                                    </div>
                                </div>
                                <div class="column-left-item">
                                    <div class="column-left-item-1">
                                        <span class="item-text">4 morf</span>
                                    </div>
                                    <div class="column-left-item-2">
                                        <span class="item-text">41938</span>
                                    </div>
                                </div>
                                <div class="column-left-item">
                                    <div class="column-left-item-1">
                                        <span class="item-text">5 bigbang</span>
                                    </div>
                                    <div class="column-left-item-2">
                                        <span class="item-text">30782</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-column-right">
                            <div class="column-left-content">
                                <div class="column-left-item">
                                    <div class="column-left-item-1">
                                        <span class="item-text title"># 名前</span>
                                    </div>
                                    <div class="column-left-item-2">
                                        <span class="item-text title">眼鏡</span>
                                    </div>
                                </div>
                                <div class="column-left-item">
                                    <div class="column-left-item-1">
                                        <span class="item-text">6 perobou</span>
                                    </div>
                                    <div class="column-left-item-2">
                                        <span class="item-text">23070</span>
                                    </div>
                                </div>
                                <div class="column-left-item">
                                    <div class="column-left-item-1">
                                        <span class="item-text">7 miira123</span>
                                    </div>
                                    <div class="column-left-item-2">
                                        <span class="item-text">23000</span>
                                    </div>
                                </div>
                                <div class="column-left-item">
                                    <div class="column-left-item-1">
                                        <span class="item-text">8 slist</span>
                                    </div>
                                    <div class="column-left-item-2">
                                        <span class="item-text">22767</span>
                                    </div>
                                </div>
                                <div class="column-left-item">
                                    <div class="column-left-item-1">
                                        <span class="item-text">9 shmelya</span>
                                    </div>
                                    <div class="column-left-item-2">
                                        <span class="item-text">22652</span>
                                    </div>
                                </div>
                                <div class="column-left-item">
                                    <div class="column-left-item-1">
                                        <span class="item-text">10 vector</span>
                                    </div>
                                    <div class="column-left-item-2">
                                        <span class="item-text">22639</span>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="new-slide-item">
                <div class="new-slide-content">
                    <div class="new-slide-title">
                        <a href="#" class="slider-new-link">
                            <div class="ikon-new-cup" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/star.svg)"></div>
                            <h3 class="new-title-name">今月のゲーム</h3>
                        </a>
                    </div>
                    <div class="new-slide-info">
                        <div class="slot-item-image">
                            <div class="new-slide-info-img" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/slide-new-3.svg)"></div>
                        </div>
                        <div class="slot-item-content">
                            <div class="slot-item-buttons slide-news">
                                <h3 class="slot-item-title">Beat the Beast: Quetzalcoatl’s Trial</h3>
                                <a href="/go.html" rel="nofollow sponsored" class="slot-item-play">演奏する</a>
                                <a href="/go.html" rel="nofollow sponsored" class="slot-item-demo">デモ</a>
                            </div>
                        </div>
                    </div>
                    <div class="new-slide-info">
                        <div class="slot-item-image">
                            <div class="new-slide-info-img" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/slide-new-4.svg)"></div>
                        </div>
                        <div class="slot-item-content">
                            <div class="slot-item-buttons slide-news">
                                <h3 class="slot-item-title">Dragon Tribe</h3>
                                <a href="/go.html" rel="nofollow sponsored" class="slot-item-play">演奏する</a>
                                <a href="/go.html" rel="nofollow sponsored" class="slot-item-demo">デモ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="new-slide-item">
                <div class="new-slide-content">
                    <div class="new-slide-title">
                        <a href="#" class="slider-new-link">
                            <div class="ikon-new-cup" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/cup.svg)"></div>
                            <h3 class="new-title-name">トーナメント「スポーツオールラウンド」</h3>
                        </a>
                    </div>
                    <div class="new-slide-info">
                        <div class="new-slide-info-img" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/slide-new-2.svg)"></div>
                        <div class="slide-info-block">
                            <div class="slide-info-block-text">
                                <div class="info-blok-1">
                                    <span class="info-blok-title">景品</span>
                                    <span class="info-blok-content">25000 RUB</span>
                                </div>
                                <div class="info-blok-2">
                                    <span class="info-blok-title">プログレッシブ賞金プール</span>
                                    <span class="info-blok-content sport"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="new-slide-table">
                        <div class="table-column-left">
                            <div class="column-left-content">
                                <div class="column-left-item">
                                    <div class="column-left-item-1">
                                        <span class="item-text title"># 名前</span>
                                    </div>
                                    <div class="column-left-item-2">
                                        <span class="item-text title">眼鏡</span>
                                    </div>
                                </div>
                                <div class="column-left-item">
                                    <div class="column-left-item-1">
                                        <span class="item-text">1 yutora</span>
                                    </div>
                                    <div class="column-left-item-2">
                                        <span class="item-text">238908</span>
                                    </div>
                                </div>
                                <div class="column-left-item">
                                    <div class="column-left-item-1">
                                        <span class="item-text">2 erikei</span>
                                    </div>
                                    <div class="column-left-item-2">
                                        <span class="item-text">184780</span>
                                    </div>
                                </div>
                                <div class="column-left-item">
                                    <div class="column-left-item-1">
                                        <span class="item-text">3 genabubi</span>
                                    </div>
                                    <div class="column-left-item-2">
                                        <span class="item-text">165768</span>
                                    </div>
                                </div>
                                <div class="column-left-item">
                                    <div class="column-left-item-1">
                                        <span class="item-text">4 adam_g222</span>
                                    </div>
                                    <div class="column-left-item-2">
                                        <span class="item-text">152552</span>
                                    </div>
                                </div>
                                <div class="column-left-item">
                                    <div class="column-left-item-1">
                                        <span class="item-text">5 interista7</span>
                                    </div>
                                    <div class="column-left-item-2">
                                        <span class="item-text">133708</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-column-right">
                            <div class="column-left-content">
                                <div class="column-left-item">
                                    <div class="column-left-item-1">
                                        <span class="item-text title"># 名前</span>
                                    </div>
                                    <div class="column-left-item-2">
                                        <span class="item-text title">眼鏡</span>
                                    </div>
                                </div>
                                <div class="column-left-item">
                                    <div class="column-left-item-1">
                                        <span class="item-text">6 reductor</span>
                                    </div>
                                    <div class="column-left-item-2">
                                        <span class="item-text">76208</span>
                                    </div>
                                </div>
                                <div class="column-left-item">
                                    <div class="column-left-item-1">
                                        <span class="item-text">7 yrfgtyug</span>
                                    </div>
                                    <div class="column-left-item-2">
                                        <span class="item-text">59706</span>
                                    </div>
                                </div>
                                <div class="column-left-item">
                                    <div class="column-left-item-1">
                                        <span class="item-text">8 tirrah</span>
                                    </div>
                                    <div class="column-left-item-2">
                                        <span class="item-text">58728</span>
                                    </div>
                                </div>
                                <div class="column-left-item">
                                    <div class="column-left-item-1">
                                        <span class="item-text">9 masto999</span>
                                    </div>
                                    <div class="column-left-item-2">
                                        <span class="item-text">55809</span>
                                    </div>
                                </div>
                                <div class="column-left-item">
                                    <div class="column-left-item-1">
                                        <span class="item-text">10 hammer</span>
                                    </div>
                                    <div class="column-left-item-2">
                                        <span class="item-text">49777</span>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer()?>