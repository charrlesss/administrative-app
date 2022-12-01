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
  <div id="company-facility" class="swiper-wrapper "></div>
</div>

<div class="swiper-pagination"></div>
<div class="swiper-button-prev"></div>
<div class="swiper-button-next"></div>
<div class="swiper-scrollbar"></div>


<script>
const company_facility = document.querySelector('#company-facility')
    const url = "<?php echo $GLOBALS['url'].'/assets/img/'; ?>"
       $.ajax({ 
              type: "GET",
              url: "/freight/get-company-facility",             
              dataType: "json",                  
              success: function(res){ 
                  res.facility.forEach(data => {
                      company_facility.insertAdjacentHTML("afterbegin",
                      ` <a href="/freight/administrative/visitor-dashboard/company-facility/${data.facility.facility_id}" class="swiper-slide  cursor-pointer flex justify-center pl-2 hover:opacity-[0.6]">
                              <img class=" object-cover w-full rounded-t-lg h-auto w-auto md:rounded-none md:rounded-l-lg" src="${url}${data.facility.facility_image}" alt="${data.facility.facility_image}">
                              </div>
                          </a>
                          `)
                    });
                }
            })

</script>


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


