<div class="flex justify-center items-center px-4 py-8">
    <div class="relative w-full  mx-auto overflow-hidden rounded-2xl shadow-2xl">

        <div class="swiper h-[300px] sm:h-[400px] md:h-[500px] lg:h-[600px] w-full">

            <div class="swiper-wrapper">

                <div class="swiper-slide relative">
                    <img src="./images/sliderimg1.jpg" class="w-full h-full object-contain absolute inset-0">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                </div>

                <div class="swiper-slide relative">
                    <img src="./images/sliderimg2.jpg" class="w-full h-full object-contain absolute inset-0">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                </div>

                <div class="swiper-slide relative">
                    <img src="./images/sliderimg3.jpg" class="w-full h-full object-contain absolute inset-0">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                </div>

            </div>

            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>

    </div>
</div>

<style>
  /* Fix swiper slide height */
  .swiper-slide {
    height: 100% !important;
  }

  .swiper-pagination-bullet {
    width: 10px;
    height: 10px;
    background: white;
    opacity: 0.6;
  }
  .swiper-pagination-bullet-active {
    opacity: 1;
    background: white;
    transform: scale(1.3);
  }

  .swiper-button-prev,
  .swiper-button-next {
    color: white;
    background: rgba(0, 0, 0, 0.35);
    width: 44px;
    height: 44px;
    border-radius: 50%;
    backdrop-filter: blur(4px);
    transition: background 0.3s;
  }
  .swiper-button-prev:hover,
  .swiper-button-next:hover {
    background: rgba(0, 0, 0, 0.6);
  }
  .swiper-button-prev::after,
  .swiper-button-next::after {
    font-size: 16px;
    font-weight: bold;
  }
</style>