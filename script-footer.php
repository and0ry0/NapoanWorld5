<script>
(function(){
    var n = document.createElement('link');
    n.async = true;
    n.defer = true;
    n.type = 'text/css';
    n.rel  = 'stylesheet';
    n.href = '/wp-content/plugins/contact-form-7/includes/css/styles.css';
    var s = document.getElementsByTagName('script');
    var c = s[s.length - 1];
    c.parentNode.insertBefore(n, c);
})(document);
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(function(){
    // 空のp/spanタグは消す
    $(".article-inner span:empty").remove();
    $(".article-inner p:empty").remove();

    $('ul.post-platforms').each(function(){
        $(this).html(
            $(this).children().sort(function(a, b) {
                return parseInt($(a).attr('data-sort'), 10) - parseInt($(b).attr('data-sort'), 10);
            })
        );
    });

    /* ページ内ジャンプをクリックした際の滑らかスクロール */
    $('a[href^=#]').click(function(){
        var speed = 500;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $("html, body").animate({scrollTop:position}, speed, "swing");
        var scrollTargetId = target.attr("id");
        setTimeout(function(){
            location.hash = scrollTargetId;
            return false;
        },500);
    });
    /*
    var startPos = 0,winScrollTop = 0;
    $(window).on('scroll',function(){
        winScrollTop = $(this).scrollTop();
        if (winScrollTop >= startPos) {
            if(winScrollTop >= 200){
                $('header#napoan_header').addClass('hide');
            }
        } else {
            $('header#napoan_header').removeClass('hide');
        }
        startPos = winScrollTop;
    });
    */
});
</script>