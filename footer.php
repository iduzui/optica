<footer id="footer">
  &copy;<?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.版权所有.</br>Powered by <a href="http://typecho.org" target="_blank">Typecho</a>. Theme by <a href="http://1000yun.cn">Optica</br>
<a href=http://www.miibeian.gov.cn><?php $this->options->icp() ?></a></br>
</footer>
<?php $this->footer(); ?>
<script>if(top.location!==self.location){top.location=self.location};</script>
<script src="<?php $this->options->themeUrl('jquery-2.1.1.min.js'); ?>" data-no-instant></script>
<script>if($(window).scrollTop()>200){$(".navbar").addClass("active")}$(window).scroll(function(){if($(window).scrollTop()<200){$(".navbar").removeClass("active")}else{$(".navbar").addClass("active")}if($(window).scrollTop()==0){$(".gotop>.icon-arrow_carrot_right").addClass("top")}else{$(".gotop>.icon-arrow_carrot_right").removeClass("top")}});$(".selector").on("click",function(){$(".pop-menu.west,.glass").toggleClass("active")});$(".glass").on("click",function(){$(".pop-menu.west,.glass").removeClass("active")});$(".body-text>p>img").on("click",function(){$(this).toggleClass("active")});$(".gotop").on("click",function(){$("html,body").animate({scrollTop:0},"slow")});</script>
<?php if ($this->options->Ic == 'o'): ?>
<script src="<?php $this->options->themeUrl('ic.min.js'); ?>" data-no-instant></script>
<script data-no-instant>InstantClick.init(<?php $this->options->Iccfg() ?>);</script>
<?php endif; ?>
</body>
</html>