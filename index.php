<?php 
/**
 * 欢迎使用Typecho TTDF主题
 * 基于Typecho Theme Development Framework框架开发。
 * @package TTDF
 * @author 鼠子Tomoriゞ
 * @version 1.0.0
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
// 引入header
Get::Need('header.php');
?>

          <div class="p-5 md:col-span-4">
            <h1 class="text-xl font-semibold"><?php echo Get::Options('subTitle'); ?></h1>
            <h2 class="text-5xl font-bold leading-tight"><?php echo Get::Options('title'); ?></h2>
            <div class="my-2 h-1 rounded bg-indigo-500"></div>

            <div class="space-y-6 px-5 py-2 md:col-span-4">
            <?php while ($this->next()): ?>
            <div>
              
              <h4 class="mb-2 text-lg font-semibold text-indigo-700">
                <a href="<?php GetPost::Permalink(); ?>">
                  <?php GetPost::Title(); ?>
                </a>
              </h4>
                <h5 class="mb-1 font-bold">
                  <span class="text-sm">
                    <?php GetPost::Category(); ?>
                      · 
                    <?php GetPost::Tags(); ?>
                  </span> 
                  <span class="text-sm text-gray-500">
                    · <?php GetPost::Date(); ?>
                  </span>
                </h5>
              <p class="leading-relaxed">
                <a href="<?php GetPost::Permalink(); ?>">
                  <?php GetPost::Excerpt(); ?>
                </a>
              </p>
            </div>
            <hr>
            <?php endwhile; ?>

            <p style="text-align: center;">
              <?php $this->pageLink('上一页'); ?>
                第 <?php echo $this->_currentPage > 1 ? $this->_currentPage : 1; ?> 页 / 共 <?php echo ceil($this->getTotal() / $this->parameter->pageSize); ?> 页
              <?php $this->pageLink('下一页','next'); ?>
            </p>
            
          </div>


<?php 
// 引入footer
Get::Need('footer.php'); 
?>