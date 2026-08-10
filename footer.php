<?php
/**
 * Footer
 *
 * @package YYThemes
 */

if ( !yy_import( 'footer' ) ) {
?>
<div class="yy-footer">
    <div class="yy-group">
        <div class="container text-center">
            <div class="d-flex justify-content-center">
                <span>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <a href="<?php echo esc_attr( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a></span>
                <?php
                if ( ! yy_get( 'delete_theme_copyright' ) ) {
                    echo '<a href="https://www.xenice.com/" target="_blank">theme by xenice</a>';
                }
                if ( 'zh_CN' === get_locale() ) {
                    $icp = yy_get( 'icp_number' );
                    if ( $icp ) {
                        echo '<a href="https://beian.miit.gov.cn/" target="_blank">' . esc_html( $icp ) . '</a>';
                    }

                    // 公安网备案号显示
                    $wa_an = yy_get('wa_an_number');
                    if ( $wa_an ) {
                        echo '<span style="margin: 0 10px; display: inline-flex; align-items: center;">';
                        echo '|';
                        echo '<a href="https://beian.mps.gov.cn/#/query/webSearch" target="_blank" rel="noopener noreferrer" style="margin-left: 8px; display: inline-flex; align-items: center;">';
                        // 图标（可选，后台 wa_an_icon 设置）
                        $wa_an_icon = yy_get('wa_an_icon');
                        if ( $wa_an_icon ) {
                            echo '<img src="' . esc_url( $wa_an_icon ) . '" alt="公安备案图标" style="height: 16px; width: auto; margin-right: 5px;">';
                        }
                        // 兼容旧数据：如果备案号填的是图片URL则显示图片，否则显示文字
                        if ( filter_var( $wa_an, FILTER_VALIDATE_URL ) ) {
                            echo '<img src="' . esc_url( $wa_an ) . '" alt="公安备案图标" style="height: 16px; width: auto;">';
                        } else {
                            echo esc_html( $wa_an );
                        }
                        echo '</a></span>';
                    }
                }
                ?>
            </div>
        </div>
    </div><!-- yy-group -->
</div><!-- yy-footer -->
<?php
}
?>
<?php wp_footer(); ?>
</div><!-- yy-site -->
</body>
</html>