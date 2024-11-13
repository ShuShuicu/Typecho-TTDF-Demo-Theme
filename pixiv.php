<?php
/**
 * Pixiv
 * @package custom
 * @author 鼠子(ShuShuicu)
 * @link https://blog.miomoe.cn/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
Get::Need('header.php'); 
?>
          <div class="p-5 md:col-span-4 post-container">
            <h2 class="text-5xl font-bold leading-tight"><?php GetPost::Title(); ?></h2>
            <div class="my-2 h-1 rounded bg-indigo-500"></div>

    <style>
        #inputer {
            width: 90%;
            height: 30px;
        }
        #button {
            height: 30px;
        }
    </style>
    <script>
function checkInput() {
    text = document.getElementById("inputer").value;
    type_pic = document.getElementsByName("tp");
    for(var i=0; i<3; i++) {
        if(type_pic[i].checked) {
            type = type_pic[i].value;
        }
    }
    image_e = document.getElementById('image');
    image_e.src = "https://i0.wp.com/pixiv.re/" + text + "." + type;
}
    </script>
                <div class="space-y-6 px-5 py-2 md:col-span-4">
            <div>
        <div class="leading-relaxed">
        <p>在框内输入作品ID（如82775556）再按“查询”按钮即可查看对应作品</p>
        <p>对于一个ID有多张图片的，请用pid+图片序号的格式输入（例：78286152-2：id为78286152的作品的第2张图）</p>
        <p>（图片为动态产生，准确档案类型会以Content-Type header发送）</p>
        <hr>
        <input type="text" class="i" size="10" autofocus="" id="inputer" placeholder="输入pid" required="required">
        <button id="button" type="button" class="btn" onclick="checkInput()">查询</button>
        <br>
        <p>图片格式：</p>
        <input type="radio" name="tp" id="type_pic" value="png" checked="checked">png
        <input type="radio" name="tp" id="type_pic" value="jpg">jpg
        <input type="radio" name="tp" id="type_pic" value="gif">gif
        <hr>
        <img id="image" src="<?php GetTheme::Url(); ?>/screenshot.png" width="500" alt="图片不存在或无法查看图片（确定pid存在且图片格式正确）"/>
        </div>
        </div>
        </div>
<?php
Get::Need('footer.php');  
?>