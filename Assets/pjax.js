document.addEventListener('DOMContentLoaded', function() {
    // 初始化ViewImage
    if (window.ViewImage) {
        ViewImage.init('.post-container img');
    }
});

// pjax 刷新
$(document).pjax('a[href^="' + window.location.origin + '"]:not(a[target="_blank"], a[no-pjax])', {
    container: '#app',
    fragment: '#app',
    timeout: 8000
}).on('pjax:send', function() {
    NProgress.start(); // 加载动画效果开始
}).on('pjax:complete', function() {
    NProgress.done();

    // 重载
    if (window.ViewImage) {
        ViewImage.init('.post-container img'); 
    }
    
    // 使用 Prism.js 进行代码高亮
    if (typeof Prism !== 'undefined') {
        // 添加行号
        var pres = document.getElementsByTagName('pre');
        for (var i = 0; i < pres.length; i++) {
            if (pres[i].getElementsByTagName('code').length > 0) {
                pres[i].className = 'line-numbers';
            }
        }
        // 重新应用高亮
        Prism.highlightAll(true, null);
    }
});