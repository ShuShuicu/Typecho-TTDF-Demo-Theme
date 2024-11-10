<?php 
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
// 引入header
Get::Need('header.php');
?>


          <div class="p-5 md:col-span-4 post-container">
            <h2 class="text-5xl font-bold leading-tight"><?php GetPost::Title(); ?></h2>
            <div class="my-2 h-1 rounded bg-indigo-500"></div>

            <div class="space-y-6 px-5 py-2 md:col-span-4">
            <div>
              <h4 class="mb-2 text-lg font-semibold text-indigo-700">
                  <span class="text-sm text-gray-500">
                    · <?php GetPost::Date(); ?>
                  </span>
                  <hr>
              </h4>
              <p class="leading-relaxed">
                <?php GetPost::Content(); ?>
              </p>
              <hr>
            </div>
          </div>

<?php 
Get::Need('comments.php'); 
// 引入footer
Get::Need('footer.php'); 
?>