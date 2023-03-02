<ul class="social-nav">
    <li class="share-it">
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_the_permalink()); ?>&t=<?php the_title(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=500');
                return false;" class="item facebook">
            <i class="fa fa-facebook"></i>
        </a>
    </li>
    <li class="share-it"><a href="https://plus.google.com/share?url=<?php echo urlencode(get_the_permalink()); ?>&amp;title=<?php wp_title('') ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=500');
            return false;" class="item google"><i class="fa fa-google-plus"></i></a></li>
    <li class="share-it"><a href="https://www.linkedin.com/cws/share?url=<?php echo urlencode(get_the_permalink()); ?>&title=<?php the_title(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=500');
            return false;" class="item linkedin"><i class="fa fa-linkedin"></i></a></li>
    <li class="share-it">
        <a href="http://www.twitter.com/share?url=<?php echo urlencode(get_the_permalink()); ?>" class="item twitter" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=500');
                return false;">
            <i class="fa fa-twitter"></i>
        </a>
    </li>

</ul>

