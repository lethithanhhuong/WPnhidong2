<footer class="footer">
		<section class="grid__xl footer2">
			<div class="box">
				<div class="d__fl">
					<div id="text-5" class="widget widget--foot widget_text">
						<div class="textwidget">
						<?php
							if (is_active_sidebar('footer-lien-ket')) {
								dynamic_sidebar('footer-lien-ket');
							}
							?>
						

							<p><strong>Liên kết mạng xã hội</strong>:</p>
							<ul class="foot__social">
								<?php echo(mona_get_option('mona_sticky_header_facebook','') !=''? '<li><a href="'.mona_get_option('mona_sticky_header_facebook','').'" target="_blank" class="square-30fa" ><i class="fa fa-facebook"></i></a></li>':'');?>
								<?php echo(mona_get_option('mona_sticky_header_youtube','') !=''? '<li><a href="'.mona_get_option('mona_sticky_header_youtube','').'" target="_blank" class="square-30fa" ><i class="fa fa-youtube-play"></i></a></li>':'');?>
							</ul>
						</div>
					</div>
					<div id="text-4" class="widget widget--foot widget_text">
						<div class="textwidget">

						<?php
							if (is_active_sidebar('footer-giai-phap')) {
								dynamic_sidebar('footer-giai-phap');
							}
							?>
							
						</div>
					</div>
					<div id="custom_html-2" class="widget_text widget widget--foot widget_custom_html">
						<div class="widget__title"><span>Fanpage</span></div>
						<div class="textwidget custom-html-widget">
						<?php
								if (is_active_sidebar('footer-nhan-tin')) {
									dynamic_sidebar('footer-nhan-tin');
								}
								?>
							
						</div>
					</div>
					<div class="footer2__h3">Bệnh viện Nhi Đồng 2</div>
				</div>
			</div>
			<p class="footer2_copyright"><span>Copyright 2022 © <strong>Bệnh viện Nhi Đồng 2</strong></span></p>
		</section>
		<!-- ======== -->
		
		<div class="modal_wrap" id="modal_metu_2" style="display: none;">
			<div class="modal__content">
				<span class="modal__close">×</span>
				<div class="metu_menu__form">
					<div class="form__page form__page__goi_lai" style="display: none1;">
						<div class="wpcf7__head">
						<p><img style="width: 30%;" src="<?php echo site_url(); ?>/template/images/logo-nhidong2.png" alt=""></p>
							<div class="h_5"><strong>ĐĂNG KÝ KHÁM CHẤT LƯỢNG CAO</strong></div>
						</div>
						<div role="form" class="wpcf7" id="wpcf7-f17744-o1" lang="vi" dir="ltr">
							<?php  echo do_shortcode('[contact-form-7 id="155" title="Form liên hệ 1"]') ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="metu">
			<ul>
				<!-- <li><a 1href="javascript:void(Tawk_API.toggle())" class="chat_animation"> <i class="chat-sms"
							title="Tư vấn ngay"></i> Tư vấn ngay</a></li> -->
				<li><a href="<?php echo mona_option('dia_chi_footer'); ?>" rel="nofollow" target="_blank"><i
							class="ticon-zalo-circle2"></i>Liên hệ</a></li>
				<li class="phone-mobile"><a class="modal__click1" btn-id="modal_metu_1" href="tel:<?php echo mona_option('phone_footer'); ?>"> <span
							class="phone_animation animation-shadow"> <i class="icon-phone-w"></i> </span> <span
							class="btn_phone_txt">Gọi điện</span> </a></li>
				<li><a href="<?php echo mona_option('phone_footer_fax'); ?> " rel="nofollow" target="_blank"><i
							class="ticon-messenger"></i>Messenger</a></li>
				<li>  <a href="<?php echo esc_url(home_url('/')); ?>" title="https://dev-mobile.droh.co/webapp-nd2/" btn-id="modal_metu_2"><i class="ticon-heart"></i>Đăng ký Khám</a></li>
				<li class="to-top-pc" style="margin-top: 15px;"><a href="#top" rel="nofollow"> <i class="ticon-angle-up" title="Quay lên trên"></i>
					</a></li>
			</ul>
		</div>



	</footer>


	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
		$(".wp-caption").width("auto");
window.onscroll = function() {myFunction()};
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
  <script>
    AOS.init({
		once: true,
		disable: true,
		offset: 0,
  delay: 0,

	});
  </script>



	<script type='text/javascript' src='<?php echo site_url(); ?>/template/js/jquery.min.js'></script>
	<script src="<?php echo site_url(); ?>/template/js/swiper/swiper.min.js"></script>
	<script type='text/javascript' src='<?php echo site_url(); ?>/template/js/wprmenu.js' id='mobile-menu-script-js'></script>
	<script type='text/javascript' src='<?php echo site_url(); ?>/template/js/main.js' id="main-script-js" type="module"></script>
	<script type='text/javascript' src='<?php echo site_url(); ?>/template/js/old-master/owl.carousel.min.js' id='owl-carousel-js'></script>
	<script type='text/javascript' src='<?php echo site_url(); ?>/template/js/main_frontp.js' id="main_frontp-script-js"></script>
	<script type='text/javascript' src='<?php echo site_url(); ?>/template/js/UI-Effects-Slide/effect-slide.min.js'></script>
	<script type='text/javascript' src='<?php echo site_url(); ?>/template/js/dist/js/lightgallery-all.min.js'></script>


    <?php wp_footer(); ?>
</body>

</html>