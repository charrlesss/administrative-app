<?php
	$__images__ = [
		$GLOBALS['url']."/assets/img/chat-logo.jpg",
		$GLOBALS['url']."/assets/img/drag.png",
		$GLOBALS['url']."/assets/img/drop.jpg",
		$GLOBALS['url']."/assets/img/home.png",
		$GLOBALS['url']."/assets/img/logo.png"
	];
?>
<div class="swiper w-[1000px] h-[200px] bg-gray-100 p-5 xl:mt-0 mt-5 " >
  <div class="swiper-wrapper">
		<?php 
			$i = 0;
			while($i < count($__images__))
			{
		?>
			<a 
			href="#"
			class="swiper-slide  cursor-pointer flex justify-center pl-2 hover:opacity-[0.6]" >
				<img
				class="w-auto h-[165px] "
				 src="<?php echo $__images__[$i]?>"
				alt="facility"
				>
			</a>
		<?php 
			$i++;
			}
		?>
  </div>
</div>
<div class="swiper-pagination"></div>
<div class="swiper-button-prev"></div>
<div class="swiper-button-next"></div>
<div class="swiper-scrollbar"></div>

<script type="module">
  import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.esm.browser.min.js'

  const swiper = new Swiper('.swiper', {
    speed:1500,
  slidesPerView:1,
  loop: true,
  centeredSlides: true,
  autoplay:true,
  pagination: {
    el: '.swiper-pagination',
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  scrollbar: {
    el: '.swiper-scrollbar',
  },
  breakpoints:{
    1280:{
      slidesPerView:4
    },
    1024:{
      slidesPerView:3
    },
    768:{
      slidesPerView:2
    },
    640:{
      slidesPerView:1
    }
  }
});
</script>
