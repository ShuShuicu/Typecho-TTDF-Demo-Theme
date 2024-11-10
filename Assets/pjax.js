//** 2024 MioMoe! Copyright By ShuShuicu */
console.log("\n%c %s %c %s %c %s\n", "color: #fff; background: #34495e; padding:5px 0;", "基于TTDF框架", "background: #fadfa3; padding:5px 0;", "https://blog.miomoe.cn", "color: #fff;background: #d6293e; padding:5px 0;", "B站@Tomoriゞ");
document.addEventListener('DOMContentLoaded', function() {
    // 初始化ViewImage
    if (window.ViewImage) {
        ViewImage.init('.post-container img');
    }
});

// 高亮代码
(function(){
    var pres = document.querySelectorAll('pre');
    var lineNumberClassName = 'line-numbers';
    pres.forEach(function (item, index) {
        item.className = item.className == '' ? lineNumberClassName : item.className + ' ' + lineNumberClassName;
    });
})();

// pjax 刷新
$(document).pjax('a[href^="' + window.location.origin + '"]:not(a[target="_blank"], a[no-pjax])', {
    container: '#app',
    fragment: '#app',
    timeout: 8000
}).on('pjax:send', function() {
    NProgress.start(); // 加载动画效果开始
}).on('pjax:complete', function() {
    NProgress.done(); // 加载动画效果结束

    // 重载
    ViewImage();

    if (typeof Prism !== 'undefined') {
        var pres = document.getElementsByTagName('pre');
        for (var i = 0; i < pres.length; i++) {
            if (pres[i].getElementsByTagName('code').length > 0) {
                pres[i].className = 'line-numbers'; // 加入 line-numbers 样式
            }
        }
        Prism.highlightAll(true, null); // 触发代码高亮
    }
});