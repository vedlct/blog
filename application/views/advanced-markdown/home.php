
 
   <!-- Start Slider Area -->
<div class="slider-area page-title-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="slider-wrapper-2">
                <div id="particles-js">
                    <div class="slider-fixed-text container">
					<h1>Advanced Markdown tips</h1>
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
            <div class="single-blog-item post tag-getting-started">
               <div class="details-img">
                    <img src="../../casper.ghost.org/v1.0.0/images/advanced.jpg" alt="Advanced Markdown tips">
               </div>
               <div class="blog-details">
                  <div class="kg-card-markdown"><p>There are lots of powerful things you can do with the Ghost editor</p>
<p>If you've gotten pretty comfortable with <a href="../the-editor/index.html">all the basics</a> of writing in Ghost, then you may enjoy some more advanced tips about the types of things you can do with Markdown!</p>
<p>As with the last post about the editor, you'll want to be actually editing this post as you read it so that you can see all the Markdown code we're using.</p>
<h2 id="specialformatting">Special formatting</h2>
<p>As well as bold and italics, you can also use some other special formatting in Markdown when the need arises, for example:</p>
<ul>
<li><s>strike through</s></li>
<li><mark>highlight</mark></li>
<li>*escaped characters*</li>
</ul>
<h2 id="writingcodeblocks">Writing code blocks</h2>
<p>There are two types of code elements which can be inserted in Markdown, the first is inline, and the other is block. Inline code is formatted by wrapping any word or words in back-ticks, <code>like this</code>. Larger snippets of code can be displayed across multiple lines using triple back ticks:</p>
<pre><code>.my-link {
    text-decoration: underline;
}
</code></pre>
<p>If you want to get really fancy, you can even add syntax highlighting using <a href="http://prismjs.com/">Prism.js</a>.</p>
<h2 id="fullbleedimages">Full bleed images</h2>
<p>One neat trick which you can use in Markdown to distinguish between different types of images is to add a <code>#hash</code> value to the end of the source URL, and then target images containing the hash with special styling. For example:</p>
<p><img src="../../casper.ghost.org/v1.0.0/images/walking.jpg#full" alt="walking"></p>
<p>which is styled with...</p>
<pre><code>img[src$=&quot;#full&quot;] {
    max-width: 100vw;
}
</code></pre>
<p>This creates full-bleed images in the Casper theme, which stretch beyond their usual boundaries right up to the edge of the window. Every theme handles these types of things slightly differently, but it's a great trick to play with if you want to have a variety of image sizes and styles.</p>
<h2 id="referencelists">Reference lists</h2>
<p><strong>The quick brown <a href="https://en.wikipedia.org/wiki/Fox" title="Wikipedia: Fox">fox</a>, jumped over the lazy <a href="https://en.wikipedia.org/wiki/Dog" title="Wikipedia: Dog">dog</a>.</strong></p>
<p>Another way to insert links in markdown is using reference lists. You might want to use this style of linking to cite reference material in a Wikipedia-style. All of the links are listed at the end of the document, so you can maintain full separation between content and its source or reference.</p>
<h2 id="creatingfootnotes">Creating footnotes</h2>
<p>The quick brown fox<sup class="footnote-ref"><a href="#fn1" id="fnref1">[1]</a></sup> jumped over the lazy dog<sup class="footnote-ref"><a href="#fn2" id="fnref2">[2]</a></sup>.</p>
<p>Footnotes are a great way to add additional contextual details when appropriate. Ghost will automatically add footnote content to the very end of your post.</p>
<h2 id="fullhtml">Full HTML</h2>
<p>Perhaps the best part of Markdown is that you're never limited to just Markdown. You can write HTML directly in the Ghost editor and it will just work as HTML usually does. No limits! Here's a standard YouTube embed code as an example:</p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/Cniqsc9QfDo?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
<hr class="footnotes-sep">
<section class="footnotes">
<ol class="footnotes-list">
<li id="fn1" class="footnote-item"><p>Foxes are red <a href="#fnref1" class="footnote-backref">↩︎</a></p>
</li>
<li id="fn2" class="footnote-item"><p>Dogs are usually not red <a href="#fnref2" class="footnote-backref">↩︎</a></p>
</li>
</ol>
</section>
</div> 
              </div>
               <div class="blog-meta-wrapper">
                  <div class="blog-meta">
                     <div class="tag-clouds">
                        <a href="../tag/getting-started/index.html">Getting Started</a>
                     </div>
                  </div>
                  <div class="share-icon">
                     <span>share on</span>
                     <ul class="social-icon">
                        <li>
                           <a href="http://twitter.com/share?text=Advanced%20Markdown%20tips&amp;url=https://appix.themeix.com/advanced-markdown/" onclick="window.open(this.href, 'twitter-share', 'width=550,height=235');return false;" class="sharebutton twitter"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                           <a href="https://www.facebook.com/sharer/sharer.php?u=https://appix.themeix.com/advanced-markdown/" onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;" class="sharebutton facebook"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                           <a href="https://plus.google.com/share?url=https://appix.themeix.com/advanced-markdown/" onclick="window.open(this.href, 'google-plus-share', 'width=490,height=530');return false;" class="sharebutton google"><i class="fa fa-google-plus"></i></a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="clearfix"></div>
               <div class="blog-navigation">
                  <div class="previous-blog-post">
                     <a href="../themes/index.html"><i class="fa fa-angle-left"></i>Previous Article </a>
                  </div>
                  <div class="next-blog-post">
                     <a href="../private-sites/index.html">Next Article <i class="fa fa-angle-right"></i></a>
                  </div>
               </div>
               <div class="clearfix"></div>
               <!-- start about the author -->
<div class="about-author">
   <div class="author-box">
      <div class="author-img">
         <img src="../assets/images/default-user-imagebdd1.jpg?v=0c0c229e70" alt="Author image" />
      </div>
      <div class="author-details">
         <div class="author-name">
            <h4 class="john">Ghost</h4>
            <ul class="author-link">
            </ul>
         </div>
         <p class="author-bio">Ghost does not currently have automatic image resizing, so it&#x27;s always a good idea to make sure your.</p>
      </div>
   </div>
</div>
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
    <li><a href="../using-tags/index.html">Organising your content with tags</a></li>
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
      <!-- footer section -->
      <div class="footer-area section-ptb-3">
         <div class="container">
            <div class="row">
               <div class="col-sm-6 col-md-3">
                  <div class="column">
                     <div class="widget-title">
                        <h3>About Us</h3>
                     </div>
                     <p>Vestibulum quis cursus mi, vitae mollis metus. Nulam eu lects gravida, bibendum enim in, vulputate erat. Vestibulum ullamcorper ornare magna</p>
                     <div class="themeix-social-area">
                        <a class="themeix-tool" href="#">
                           <i class="fa fa-twitter"></i>
                           <div id="colorbox" class="themeix-color twitter-color"></div>
                        </a>
                        <a class="themeix-tool" href="#">
                           <i class="fa fa-facebook"></i>
                           <div id="colorboxs" class="themeix-color facebook-color"></div>
                        </a>
                        <a class="themeix-tool" href="#">
                           <i class="fa fa-google-plus"></i>
                           <div id="colorboxss" class="themeix-color google-color"></div>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-3">
                 <div class="column">
                    <div class="widget-title">
                        <h3>Most Popular Tags</h3>
                    </div>
                    <div class="tag-clouds">
                      <a href="../tag/getting-started/index.html">Getting Started</a> <a href="../tag/themeix/index.html">themeix</a> <a href="../tag/business/index.html">Business</a> <a href="../tag/finance/index.html">Finance</a> <a href="../tag/personal/index.html">Personal</a>
                    </div>
                 </div>
               </div>
               <div class="col-sm-6 col-md-3">
                  <div class="column">
                     <div class="widget-title">
                        <h3>Get Support</h3>
                     </div>
                     <div class="widget-content">
                        <ul>
                           <li><a href="http://facebook.com/themeix">Facebook Page</a></li>
                           <li><a href="http://twitter.com/themeix">Twitter Page</a></li>
                           <li><a href="http://instragram.com/themeix_ltd">instragram page</a></li>
                           <li><a href="http://linkedin.com/themeix">linkedin Page</a></li>
                           <li><a href="http://pinterest.com/themeix">Pinterest Page</a></li>
                           <li><a href="http://dribbble.com/themeix">Dribble Page</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6 col-md-3">
                  <div class="column">
                   <div class="widget-content">
                     <section class="gh-subscribe">
                        <div class="widget-title">
                           <h3>Subscribe Now</h3>
                           <p>Don’t miss our latest realeses and important updates</p>
                        </div>
                       <form method="post" action="https://appix.themeix.com/subscribe/" class="">
    <input class="confirm" type="hidden" name="confirm"  /><input class="location" type="hidden" name="location"  /><input class="referrer" type="hidden" name="referrer"  />

    <div class="form-group">
        <input class="subscribe-email" type="email" name="email"  placeholder="Email" />
    </div>
    <button class="" type="submit"><span>Subscribe</span></button>
    <script type="text/javascript">(function(g,h,o,s,t){h[o]('.location')[s]=h[o]('.location')[s] || g.location.href;h[o]('.referrer')[s]=h[o]('.referrer')[s] || h.referrer;})(window,document,'querySelector','value');</script>
</form>


                       </section>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="footer-overlay blog-footer">
         <div class="blog-footer-overlya">
            <div class="container">
               <div class="col-md-12">
                  <div class="row">
                     <div class="themeix-footer-bottom">
                        <div class="inner-section">
							<!-- start logo -->
							<a class="logo image-logo" href="../index.html"><img src="../content/images/2017/10/logo.png" alt="Appix"></a>
							<!-- end logo -->
                           <ul class="footer-menu">
                              <li><a href="../privacy-policy/home.php">Privacy Policy</a></li>
                              <li><a href="../about/index.html">About Us</a></li>
                              <li><a href="../disclaimer/home.php">Disclaimer</a></li>
                           </ul>
                           <h5>All content Appix <i class="fa fa-copyright"></i> 2017 - All rights reserved - Proudly made with <a href="http://themeforest.com/user/designingmarket">Designing Market</a></h5>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact us -->
      <!-- scrollUP button -->
      <a id="scrollUp" href="#"></a>
      <!-- end scrollUP button -->
   <a id="scrollUp" href="#"></a>
   <script src="../assets/js/pluginsbdd1.js?v=0c0c229e70"></script>
     <script src="../assets/js/mainbdd1.js?v=0c0c229e70"></script>
   
   </body>

<!-- Mirrored from appix.themeix.com/advanced-markdown/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Oct 2017 11:20:23 GMT -->
</html>