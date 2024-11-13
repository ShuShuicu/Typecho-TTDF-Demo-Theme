<?php
/**
 * ptions Functions
 * @author 鼠子Tomoriゞ
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
/**
 * ThemeUrl
 * 获取主题目录 用于设置页面配置
 */
define("THEME_URL", str_replace('//usr', '/usr', str_replace(Helper::options()->siteUrl, Helper::options()->rootUrl . '/', Helper::options()->themeUrl)));
$str1 = explode('/themes/', (THEME_URL . '/'));
$str2 = explode('/', $str1[1]);
define("THEME_NAME", $str2[0]);
function themeConfig($form)
{
?>
    <!-- 自定义CSS样式 -->
    <style>
        body {
            font-weight:500;
            background: url(<?php echo GetTheme::AssetsUrl() ?>/images/background.webp)
            no-repeat 0 0;
            background-size: cover;
            background-attachment: fixed;
        }
        .clearfix, .row {
            background-color: #ffffff96;
            border-radius: 8px;
        }
        .typecho-foot {
            padding: 1em 0 3em;
            background-color: #ffffffde;
        }
        .typecho-head-nav .operate a {
            background-color: #202328;
        } 
        .typecho-option-tabs li {
            float: left;
            background-color: #fffbcc;
        }  
    </style>
<?php
    // 副标题
    $subTitle = new Typecho_Widget_Helper_Form_Element_Text(
        'subTitle',
        NULL,
        '基于TTDF框架的TTDF主题',
        _t('副标题'),
        _t('输入一段描述，将会显示在网站首页 title 后方，留空不显示。')
    );
    $form->addInput($subTitle);
    // favicon
    $faviconUrl = new Typecho_Widget_Helper_Form_Element_Text(
        'faviconUrl',
        NULL,
        '' . THEME_URL . '/Assets/images/favicon.svg',
        _t('网站图标'),
        _t('请填入网站图标，没有则显示主题默认图标。')
    );
    $form->addInput($faviconUrl);
    // avatar
    $avatarUrl = new Typecho_Widget_Helper_Form_Element_Text(
        'avatarUrl',
        NULL,
        '' . THEME_URL . '/Assets/images/avatar.webp',
        _t('头像'),
        _t('请填入头像链接，没有则显示客服小祥<del>(坏了,是Go批~)</del>。')
    );
    $form->addInput($avatarUrl);
    // icp
    $icpCode = new Typecho_Widget_Helper_Form_Element_Text(
        'icpCode',
        NULL,
        NULL,
        _t('ICP备案号'),
        _t('请填入ICP备案号，没有则显示空。')
    );
    $form->addInput($icpCode);
}