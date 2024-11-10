<?php 
/**
 * 这里是前端输出中的Footer内容。
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>
            <footer class="space-y-2 py-6 text-sm text-gray-600" style="text-align: center;">
              <p class="font-semibold">
                © 2024
                <a href="<?php Get::Options('siteUrl'); ?>"><?php echo Get::Options('title'); ?></a>
                <span>Powered by <a class="font-medium text-black underline hover:text-black/75" target="_blank" href="https://typecho.org">Typecho</a></span>
                </p>
              <p class="inline-flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" data-slot="icon" class="hi-mini hi-heart inline-block size-5 text-rose-500">
                  <path d="m9.653 16.915-.005-.003-.019-.01a20.759 20.759 0 0 1-1.162-.682 22.045 22.045 0 0 1-2.582-1.9C4.045 12.733 2 10.352 2 7.5a4.5 4.5 0 0 1 8-2.828A4.5 4.5 0 0 1 18 7.5c0 2.852-2.044 5.233-3.885 6.82a22.049 22.049 0 0 1-3.744 2.582l-.019.01-.005.003h-.002a.739.739 0 0 1-.69.001l-.002-.001Z"></path>
                </svg>
                <span>Theme by <a class="font-medium text-black underline hover:text-black/75" target="_blank" href="https://blog.miomoe.cn/">TTDF</a>丨<a class="font-medium text-black underline hover:text-black/75" href="https://github.com/ShuShuicu/Typecho-Theme-Development-Framework" target="_blank">开发框架</a> <?php Get::FrameworkVer(); ?></span>
                <svg t="1731236794953" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="5350" width="20" height="20">
                  <path d="M778.24 163.84c-76.8-40.96-165.888-61.44-269.312-61.44s-192.512 20.48-269.312 61.44h-133.12l23.552 337.92c8.192 113.664 67.584 217.088 162.816 280.576l215.04 144.384 215.04-144.384c96.256-63.488 155.648-166.912 163.84-280.576l23.552-337.92H778.24z m47.104 333.824c-7.168 94.208-56.32 181.248-135.168 233.472l-181.248 120.832L327.68 731.136c-78.848-53.248-129.024-139.264-135.168-233.472L173.056 225.28h136.192v-26.624c58.368-23.552 124.928-34.816 199.68-34.816s141.312 12.288 199.68 34.816V225.28H844.8l-19.456 272.384z" fill="#0649D0" p-id="5351"></path>
                  <path d="M685.056 328.704v-46.08H455.68c2.048-4.096 6.144-9.216 11.264-15.36 5.12-7.168 9.216-12.288 11.264-15.36L419.84 240.64c-31.744 46.08-75.776 87.04-133.12 123.904 4.096 4.096 10.24 11.264 18.432 21.504l17.408 17.408c23.552-15.36 45.056-31.744 63.488-50.176 26.624 25.6 49.152 43.008 67.584 51.2-46.08 15.36-104.448 27.648-175.104 35.84 2.048 5.12 6.144 13.312 9.216 24.576 4.096 11.264 6.144 19.456 7.168 24.576l39.936-7.168v218.112H389.12V680.96h238.592v19.456h54.272V481.28H348.16c60.416-12.288 114.688-27.648 163.84-46.08 49.152 19.456 118.784 34.816 210.944 46.08 5.12-17.408 10.24-34.816 17.408-51.2-62.464-4.096-116.736-12.288-161.792-24.576 38.912-20.48 74.752-46.08 106.496-76.8z m-150.528 194.56h94.208v41.984h-94.208v-41.984z m0 78.848h94.208v41.984h-94.208v-41.984z m-144.384-78.848h94.208v41.984H390.144v-41.984z m0 78.848h94.208v41.984H390.144v-41.984zM424.96 326.656h182.272c-26.624 22.528-57.344 41.984-94.208 57.344-31.744-15.36-61.44-34.816-88.064-57.344z" fill="#0649D0" p-id="5352"></path>
                </svg>
                <span><?php if (Get::Options('icpCode')) { echo '<a href="https://beian.miit.gov.cn/" target="_blank" rel="external nofollow noopener">' . Get::Options('icpCode') . '</a>'; } else { echo '正在努力备案中...'; } ?></span>
            </p>
            </footer>
          </div>
        </div>
      </div> 
    </div>
    <script src="<?php Get::AssetsUrl(); ?>/nprogress.min.js?ver=<?php GetTheme::Ver(); ?>"></script>
    <script src="<?php Get::AssetsUrl(); ?>/jquery-3.7.1.min.js?ver=<?php GetTheme::Ver(); ?>"></script>
    <script src="<?php Get::AssetsUrl(); ?>/jquery.pjax.min.js?ver=<?php GetTheme::Ver(); ?>"></script>
    <script src="<?php Get::AssetsUrl(); ?>/view-image.min.js?ver=<?php GetTheme::Ver(); ?>"></script>
    <script src="<?php Get::AssetsUrl(); ?>/code/prism.js?ver=<?php GetTheme::Ver(); ?>" type="module"></script>
    <script src="<?php Get::AssetsUrl(); ?>/code/clipboard.min.js?ver=<?php GetTheme::Ver(); ?>" type="module"></script>
    <script src="<?php Get::AssetsUrl(); ?>/pjax.js?ver=<?php GetTheme::Ver(); ?>"></script>
    <?php $this->footer(); ?>
</body>
</html>
