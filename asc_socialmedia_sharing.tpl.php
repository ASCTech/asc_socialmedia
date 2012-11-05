<div id="asc-sharing-wrapper">
<div id="asc-sharing-dropdown" style="float: left;">
  <div id="asc-sharing-button">share <div id="plus">+</div></div>
  <div id="asc-sharing-icons">
  <a href="http://www.facebook.com/sharer.php?u=<?php print $variables['url'] ?>&t=<?php print $variables['title'] ?>" id="asc-facebook-share" class="asc-sharing-link" title="Share on Facebook" target="_blank" /></a>
  <a href="http://twitter.com/share?url=<?php print $variables['url'] ?>&text=<?php print $variables['title'] ?>" id="asc-twitter-share" class="asc-sharing-link" title="Share on Twitter" target="_blank"/></a>
  <!-- <a href="http://pinterest.com/pin/create/button/?url=<?php print $variables['url'] ?>&media=<?php print $vars['picture'] ?>&description=<?php print $vars['title'] ?>" title="Pin It" id="asc-pinterest-share" class="asc-sharing-link" target="_blank"></a> --> 
  <a href="http://www.tumblr.com/share/link?url=<?php print $variables['url'] ?>&name=<?php print $variables['title'] ?>&description=<?php print $variables['description'] ?>" id="asc-tumblr-share" class="asc-sharing-link" title="Share on Tumblr" target="_blank"></a>
  <!-- <a href="" id="asc-blogger-share" class="asc-sharing-link" title="Share on Blogger" target="_blank"></a> -->
  <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php print $variables['url'] ?>&title=<?php print $variables['title'] ?>&summary=<?php print $variables['description'] ?>" id="asc-linkedin-share" class="asc-sharing-link" title="Share on LinkedIn" target="_blank"></a>
  <a href="https://plus.google.com/share?url=<?php print $variables['url'] ?>" id="asc-googleplus-share" class="asc-sharing-link" title="Share on Google Plus" target="_blank"></a>
  </div>
</div>
<div id="asc-sharing-sharprint">
  <a id="asc-print-share" href="javascript:if(window.print)window.print()"></a>
  <a id="asc-mail-share" href="mailto:?subject=Shared link from <?php print variable_get('site_name') ?>&body=<?php print $variables['title'] . ' ' . $variables['url'] ?>"></a>
</div>
</div>
