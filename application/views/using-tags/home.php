
   <!-- Start Slider Area -->
<div class="slider-area page-title-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="slider-wrapper-2">
                <div id="particles-js">
                    <div class="slider-fixed-text container">
					<h1>Organising your content with tags</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Slider Area -->

                 

<div class="appiex-blog-content section-ptb">
   <div class="container">
      <div class="row">
         <div class="col-sm-12 col-md-8">
            <div class="single-blog-item post tag-getting-started tag-business">
               <div class="details-img">
                    <img src="../../casper.ghost.org/v1.0.0/images/tags.jpg" alt="Organising your content with tags">
               </div>
               <div class="blog-details">
                  <div class="kg-card-markdown"><p>Ghost has a single, powerful organisational taxonomy, called tags.</p>
<p>It doesn't matter whether you want to call them categories, tags, boxes, or anything else. You can think of Ghost tags a lot like Gmail labels. By tagging posts with one or more keyword, you can organise articles into buckets of related content.</p>
<h2 id="basictagging">Basic tagging</h2>
<p>When you write a post, you can assign tags to help differentiate between categories of content. For example, you might tag some posts with <code>News</code> and other posts with <code>Cycling</code>, which would create two distinct categories of content listed on <code>/tag/news/</code> and <code>/tag/cycling/</code>, respectively.</p>
<p>If you tag a post with both <code>News</code> <em>and</em> <code>Cycling</code> - then it appears in both sections.</p>
<p>Tag archives are like dedicated home-pages for each category of content that you have. They have their own pages, their own RSS feeds, and can support their own cover images and meta data.</p>
<h2 id="theprimarytag">The primary tag</h2>
<p>Inside the Ghost editor, you can drag and drop tags into a specific order. The first tag in the list is always given the most importance, and some themes will only display the primary tag (the first tag in the list) by default. So you can add the most important tag which you want to show up in your theme, but also add a bunch of related tags which are less important.</p>
<p><mark><strong>News</strong>, Cycling, Bart Stevens, Extreme Sports</mark></p>
<p>In this example, <strong>News</strong> is the primary tag which will be displayed by the theme, but the post will also still receive all the other tags, and show up in their respective archives.</p>
<h2 id="privatetags">Private tags</h2>
<p>Sometimes you may want to assign a post a specific tag, but you don't necessarily want that tag appearing in the theme or creating an archive page. In Ghost, hashtags are private and can be used for special styling.</p>
<p>For example, if you sometimes publish posts with video content - you might want your theme to adapt and get rid of the sidebar for these posts, to give more space for an embedded video to fill the screen. In this case, you could use private tags to tell your theme what to do.</p>
<p><mark><strong>News</strong>, Cycling, #video</mark></p>
<p>Here, the theme would assign the post publicly displayed tags of <code>News</code>, and <code>Cycling</code> - but it would also keep a private record of the post being tagged with <code>#video</code>.</p>
<p>In your theme, you could then look for private tags conditionally and give them special formatting:</p>
<pre><code>{{#post}}
    {{#has tag=&quot;#video&quot;}}
        ...markup for a nice big video post layout...
    {{else}}
        ...regular markup for a post...
    {{/has}}
{{/post}}
</code></pre>
<p>You can find documentation for theme development techniques like this and many more over on Ghost's extensive <a href="https://themes.ghost.org/">theme documentation</a>.</p>
</div> 
              </div>
               <div class="blog-meta-wrapper">
                  <div class="blog-meta">
                     <div class="tag-clouds">
                        <a href="../tag/getting-started/index.html">Getting Started</a> <a href="../tag/business/index.html">Business</a>
                     </div>
                  </div>
                  <div class="share-icon">
                     <span>share on</span>
                     <ul class="social-icon">
                        <li>
                           <a href="http://twitter.com/share?text=Organising%20your%20content%20with%20tags&amp;url=https://appix.themeix.com/using-tags/" onclick="window.open(this.href, 'twitter-share', 'width=550,height=235');return false;" class="sharebutton twitter"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                           <a href="https://www.facebook.com/sharer/sharer.php?u=https://appix.themeix.com/using-tags/" onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;" class="sharebutton facebook"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                           <a href="https://plus.google.com/share?url=https://appix.themeix.com/using-tags/" onclick="window.open(this.href, 'google-plus-share', 'width=490,height=530');return false;" class="sharebutton google"><i class="fa fa-google-plus"></i></a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="clearfix"></div>
               <div class="blog-navigation">
                  <div class="previous-blog-post">
                     <a href="../managing-users/home.php"><i class="fa fa-angle-left"></i>Previous Article </a>
                  </div>
                  <div class="next-blog-post">
                     <a href="../the-editor/index.html">Next Article <i class="fa fa-angle-right"></i></a>
                  </div>
               </div>
               <div class="clearfix"></div>
               <!-- start about the author -->
<!--<div class="about-author">-->
   <!--<div class="author-box">-->
      <!--<div class="author-img">-->
         <!--<img src="../assets/images/default-user-imagebdd1.jpg?v=0c0c229e70" alt="Author image" />-->
      <!--</div>-->
      <!--<div class="author-details">-->
         <!--<div class="author-name">-->
            <!--<h4 class="john">Ghost</h4>-->
            <!--<ul class="author-link">-->
            <!--</ul>-->
         <!--</div>-->
         <!--<p class="author-bio">Ghost does not currently have automatic image resizing, so it&#x27;s always a good idea to make sure your.</p>-->
      <!--</div>-->
   <!--</div>-->
<!--</div>-->
<!-- end about the author -->               <div class="clearfix"></div>
               <!-- Comments -->
               <div id="disqus_thread"></div>

<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = '../../themeix.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

<script id="dsq-count-scr" src="../../themeix.disqus.com/count.js" async></script>            </div>
         </div>
         <!-- col-md-8 -->
         <div class="col-md-4">
            <div class="sidebar-contents">
               <section class="recent-posts">
  <div class="widget-title">
  	<h3>Recent Posts</h3>
  </div>
  <ul>
    <li><a href="../welcome/index.html">Welcome to Ghost</a></li>
    <li><a href="../the-editor/index.html">Using the Ghost editor</a></li>
    <li><a href="index.html">Organising your content with tags</a></li>
    <li><a href="../managing-users/home.php">Managing Ghost users</a></li>
    <li><a href="../private-sites/index.html">Making your site private</a></li>
  </ul>
</section>
               <div class="twitter-feed">
                  <section class="twitter-widget">
   <div class="widget-title">
	  <h3>Tweet Feed</h3>
   </div>
	<a href="https://twitter.com/themeix_ltd" class="twitter-timeline" data-chrome="nofooter noborders noheader" data-tweet-limit="3"></a>
	<script async src="../../platform.twitter.com/widgets.js" charset="utf-8"></script>
</section>

               </div>
            </div>
         </div>
      </div>
   </div>
</div>

