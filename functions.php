<?php

/* ▼これは削除しない▼ */

add_action( 'wp_footer', function() {
    if(!get_option('is_enable_child_stylesheet')) return;
    $ver = (function_exists('theme_version_4536')) ? theme_version_4536() : '';
    $mtime = date("ymdHis", filemtime( get_stylesheet_directory().'/style.css'));
    ?>
    <script>
        var loadDeferredStylesChild = function() {
            var addStylesNode = document.getElementById("deferred-styles-4536-child");
            var replacement = document.createElement("div");
            replacement.innerHTML = addStylesNode.textContent;
            document.body.appendChild(replacement)
            addStylesNode.parentElement.removeChild(addStylesNode);
        };
        var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
          window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
        if(raf) raf(function() { window.setTimeout(loadDeferredStylesChild, 0); });
        else window.addEventListener('load', loadDeferredStylesChild);
    </script>
    <noscript id="deferred-styles-4536-child">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/style.css?'.$ver.$mtime; ?>" />
    </noscript>
<?php }, 999 );

/* ▲ここまで削除しない▲ */

/* ▼ここからコード追加▼ */

