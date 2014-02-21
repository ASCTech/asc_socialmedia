<div id="asc-sharing-wrapper">
	<div id="asc-sharing-icons">
		<a href="http://www.facebook.com/sharer.php?u=<?php print $variables['url'] ?>&t=<?php print $variables['title'] ?>" id="asc-facebook-share" class="asc-sharing-link" title="Share on Facebook" />Share on Facebook</a>|
		<a href="http://twitter.com/share?url=<?php print $variables['url'] ?>&text=<?php print $variables['title'] ?>" id="asc-twitter-share" class="asc-sharing-link" title="Share on Twitter"/>Share on Twitter</a>|
		<a href="http://www.tumblr.com/share/link?url=<?php print $variables['url'] ?>&name=<?php print $variables['title'] ?>&description=<?php print $variables['description'] ?>" id="asc-tumblr-share" class="asc-sharing-link" title="Share on Tumblr">Share on Tumblr</a>|
		<a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php print $variables['url'] ?>&title=<?php print $variables['title'] ?>&summary=<?php print $variables['description'] ?>" id="asc-linkedin-share" class="asc-sharing-link" title="Share on LinkedIn">Share on LinkedIn</a>|
		<a href="https://plus.google.com/share?url=<?php print $variables['url'] ?>" id="asc-googleplus-share" class="asc-sharing-link" title="Share on Google Plus">Share on Google Plus</a>
  </div>
	<div id="asc-sharing-sharprint">
		<a id="asc-print-share" href="javascript:if(window.print)window.print()">Print</a>
		<a id="asc-mail-share" href="mailto:?subject=Shared link from <?php print variable_get('site_name') ?>&body=<?php print $variables['title'] . ' ' . $variables['url'] ?>">Mail to friend</a>
	</div>
</div>
