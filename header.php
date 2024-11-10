<?php
/**
 * 这里是前端输出中的Header内容。
 */
if (!defined("__TYPECHO_ROOT_DIR__")) {
    exit();
} ?>
<!doctype html>
<html lang="zh-CN">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no"/>
        <meta name="renderer" content="webkit"/>
        <link href="<?php echo Get::Options("faviconUrl") ? Get::Options("faviconUrl") : Get::AssetsUrl() . "/images/favicon.svg"; ?>" rel="icon" />
        <link rel="stylesheet" href="<?php Get::AssetsUrl(); ?>/style.css?ver=<?php GetTheme::Ver(); ?>">
        <link rel="stylesheet" href="<?php Get::AssetsUrl(); ?>/nprogress.min.css?ver=<?php GetTheme::Ver(); ?>">
        <link rel="stylesheet" href="<?php Get::AssetsUrl(); ?>/code/styles/<?php echo $this->options->CodePrettifyCSS; ?>.css?ver=<?php GetTheme::Ver(); ?>">
        <title><?php $archiveTitle = $this->archiveTitle(
            [
                "category" => _t("「%s」分类"),
                "search" => _t("搜索结果"),
                "tag" => _t("「%s」标签"),
                "author" => _t("「%s」发布的文章"),
            ],""," - "
        );
        echo $archiveTitle;
        if ($this->_currentPage > 1) {
            echo "「第" . $this->_currentPage . "页」 - ";
        }
        $title = Get::Options("title");
        echo $title;
        if ($this->is("index") && !empty(Get::Options("subTitle"))) {
            echo " - ";
            $subTitle = Get::Options("subTitle");
            echo $subTitle;
        }
        ?></title>
        <?php $this->header(); ?>
        <!-- Inter web font from bunny.net (GDPR compliant) -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link href="<?php Get::AssetsUrl(); ?>/css2.css?ver=<?php GetTheme::Ver(); ?>" rel="stylesheet"/>
        <!-- Tailwind CSS Play CDN (mainly for development/testing purposes) -->
        <script src="<?php Get::AssetsUrl(); ?>/3.4.js?ver=<?php GetTheme::Ver(); ?>"></script>
        <!-- Tailwind CSS v3 Configuration -->
        <script>
            const defaultTheme = tailwind.defaultTheme;
            const colors = tailwind.colors;
            const plugin = tailwind.plugin;

            tailwind.config = {
                darkMode: "class",
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ["Inter", ...defaultTheme.fontFamily.sans],
                        },
                    },
                },
            };
        </script>
    </head>
<body>
    <div class="min-h-dvh min-w-[320px] bg-white text-gray-800" id="app">
    <div class="container mx-auto max-w-screen-lg p-4 lg:p-8">
        <div class="grid grid-cols-1 md:mt-12 md:grid-cols-6">
          <!-- Personal -->
          <div class="p-5 text-left md:col-span-2 md:text-right" style="text-align: center;">
            <img class="inline-block md:w-2/3" src="<?php echo Get::Options("avatarUrl") ? Get::Options("avatarUrl") : Get::AssetsUrl() . "/images/avatar.webp"; ?>" alt="Avatar">
            <div class="mt-5 space-y-2">
            <p>
              <a class="font-medium text-black underline hover:text-black/75" href="<?php echo Get::Options("siteUrl"); ?>">首页</a>
            </p>
              <?php \Widget\Contents\Page\Rows::alloc()->to($pages); ?>
              <?php while ($pages->next()): ?>
                <p>
                  <a class="font-medium text-black underline hover:text-black/75" <?php if ($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                </p>
              <?php endwhile; ?>

            </div>
          </div>