<?php

use Livewire\Volt\Component;

new class extends Component {
    public $testimonials = [];

    public function mount()
    {
        $this->testimonials = App\Models\Testimonial::all();
    }
}; ?>

<section class="bg-primary/[.03] relative z-10 py-16 md:py-20 lg:py-28" x-data="carousel()" x-init="init()">
    <div class="container">
        <div class="w-full mx-auto text-center" style="max-width: 570px; margin-bottom: 100px">
            <h2 class="mb-4 text-3xl font-bold !leading-tight text-black dark:text-white sm:text-4xl md:text-[45px]">
                What Our Clients Say
            </h2>
            <p class="text-body-color text-base !leading-relaxed md:text-lg">
                Hear from our satisfied clients who have experienced the transformative impact of our services. We
                take pride in delivering exceptional results that drive business success.
            </p>
        </div>
        <div>
            <div class="relative w-full mx-auto" x-data="carousel()" x-init="init()">
                <div class="overflow-hidden rounded-lg shadow-lg">
                    <!-- Slides -->
                    <div class="flex gap-4 transition-transform duration-500 ease-in-out"
                        :style="{ transform: `translateX(-${currentIndex * 100 / itemsPerSlide}%)` }">
                        <template x-for="(slide, index) in slides" :key="index">
                            <div :class="{ 'w-full sm:w-1/3': true }" class="flex-shrink-0">
                                <div class="shadow-one rounded-md bg-white p-8 dark:bg-[#1D2144] lg:px-5 xl:px-8">
                                    <div class="flex items-center mb-5 space-x-1">
                                        <template x-for="i in slide.rating" :key="i">
                                            <span class="text-yellow">
                                                <svg width="18" height="16" viewBox="0 0 18 16" class="fill-current">
                                                    <path
                                                        d="M9.09815 0.361679L11.1054 6.06601H17.601L12.3459 9.59149L14.3532 15.2958L9.09815 11.7703L3.84309 15.2958L5.85035 9.59149L0.595291 6.06601H7.0909L9.09815 0.361679Z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </template>
                                    </div>
                                    <p
                                        class="pb-8 mb-8 text-base leading-relaxed border-b border-body-color text-body-color border-opacity-10 dark:border-white dark:border-opacity-10 dark:text-white h-28" x-text="slide.designation">

                                    </p>
                                    <div class="flex items-center">
                                        <div
                                            class="relative mr-4 h-[50px] w-full max-w-[50px] overflow-hidden rounded-full">
                                            <img alt="Musharof Chy" sizes="100vw"
                                                :src="slide.image"
                                                decoding="async" data-nimg="fill" loading="lazy"
                                                style="
                                                        position: absolute;
                                                        height: 100%;
                                                        width: 100%;
                                                        left: 0;
                                                        top: 0;
                                                        right: 0;
                                                        bottom: 0;
                                                        color: transparent;
                                                    " />
                                        </div>
                                        <div class="w-full">
                                            <h5
                                                class="mb-1 text-lg font-semibold text-dark dark:text-white lg:text-base xl:text-lg" x-text="slide.name">
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <div class="absolute inset-0 flex items-center justify-between px-4">
                    <button @click="prevSlide"
                        class="p-2 bg-opacity-50 rounded-full hover:bg-opacity-75 dark:bg-[#1D2144] dark:bg-opacity-50 dark:hover:bg-opacity-75">
                        &#8592;
                    </button>
                    <button @click="nextSlide"
                        class="p-2 bg-opacity-50 rounded-full hover:bg-opacity-75 dark:bg-[#1D2144] dark:bg-opacity-50 dark:hover:bg-opacity-75">
                        &#8594;
                    </button>
                </div>

                <!-- Indicators -->
                <div class="absolute bottom-0 flex p-4 space-x-2 transform -translate-x-1/2 left-1/2">
                    <template x-for="(slide, index) in slideIndicators" :key="index">
                        <div @click="goToSlide(index)"
                            :class="{ 'bg-white': currentIndex === index, 'bg-gray-500': currentIndex !== index }"
                            class="w-3 h-3 rounded-full cursor-pointer"></div>
                    </template>
                </div>
            </div>
        </div>
    </div>
    <div class="absolute right-0 top-5 z-[-1]">
        <svg width="238" height="531" viewBox="0 0 238 531" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect opacity="0.3" x="422.819" y="-70.8145" width="196" height="541.607" rx="2"
                transform="rotate(51.2997 422.819 -70.8145)" fill="url(#paint0_linear_83:2)"></rect>
            <rect opacity="0.3" x="426.568" y="144.886" width="59.7544" height="541.607" rx="2"
                transform="rotate(51.2997 426.568 144.886)" fill="url(#paint1_linear_83:2)"></rect>
            <defs>
                <linearGradient id="paint0_linear_83:2" x1="517.152" y1="-251.373" x2="517.152" y2="459.865"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#4A6CF7"></stop>
                    <stop offset="1" stop-color="#4A6CF7" stop-opacity="0"></stop>
                </linearGradient>
                <linearGradient id="paint1_linear_83:2" x1="455.327" y1="-35.673" x2="455.327" y2="675.565"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#4A6CF7"></stop>
                    <stop offset="1" stop-color="#4A6CF7" stop-opacity="0"></stop>
                </linearGradient>
            </defs>
        </svg>
    </div>
    <div class="absolute bottom-5 left-0 z-[-1]">
        <svg width="279" height="106" viewBox="0 0 279 106" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g opacity="0.5">
                <path
                    d="M-57 12L50.0728 74.8548C55.5501 79.0219 70.8513 85.7589 88.2373 79.3692C109.97 71.3821 116.861 60.9642 156.615 63.7423C178.778 65.291 195.31 69.2985 205.911 62.3533C216.513 55.408 224.994 47.7682 243.016 49.1572C255.835 50.1453 265.278 50.8936 278 45.3373"
                    stroke="url(#paint0_linear_72:302)"></path>
                <path
                    d="M-57 1L50.0728 63.8548C55.5501 68.0219 70.8513 74.7589 88.2373 68.3692C109.97 60.3821 116.861 49.9642 156.615 52.7423C178.778 54.291 195.31 58.2985 205.911 51.3533C216.513 44.408 224.994 36.7682 243.016 38.1572C255.835 39.1453 265.278 39.8936 278 34.3373"
                    stroke="url(#paint1_linear_72:302)"></path>
                <path
                    d="M-57 23L50.0728 85.8548C55.5501 90.0219 70.8513 96.7589 88.2373 90.3692C109.97 82.3821 116.861 71.9642 156.615 74.7423C178.778 76.291 195.31 80.2985 205.911 73.3533C216.513 66.408 224.994 58.7682 243.016 60.1572C255.835 61.1453 265.278 61.8936 278 56.3373"
                    stroke="url(#paint2_linear_72:302)"></path>
                <path
                    d="M-57 35L50.0728 97.8548C55.5501 102.022 70.8513 108.759 88.2373 102.369C109.97 94.3821 116.861 83.9642 156.615 86.7423C178.778 88.291 195.31 92.2985 205.911 85.3533C216.513 78.408 224.994 70.7682 243.016 72.1572C255.835 73.1453 265.278 73.8936 278 68.3373"
                    stroke="url(#paint3_linear_72:302)"></path>
            </g>
            <defs>
                <linearGradient id="paint0_linear_72:302" x1="256.267" y1="53.6717" x2="-40.8688"
                    y2="8.15715" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#4A6CF7" stop-opacity="0"></stop>
                    <stop offset="1" stop-color="#4A6CF7"></stop>
                </linearGradient>
                <linearGradient id="paint1_linear_72:302" x1="256.267" y1="42.6717" x2="-40.8688"
                    y2="-2.84285" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#4A6CF7" stop-opacity="0"></stop>
                    <stop offset="1" stop-color="#4A6CF7"></stop>
                </linearGradient>
                <linearGradient id="paint2_linear_72:302" x1="256.267" y1="64.6717" x2="-40.8688"
                    y2="19.1572" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#4A6CF7" stop-opacity="0"></stop>
                    <stop offset="1" stop-color="#4A6CF7"></stop>
                </linearGradient>
                <linearGradient id="paint3_linear_72:302" x1="256.267" y1="76.6717" x2="-40.8688"
                    y2="31.1572" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#4A6CF7" stop-opacity="0"></stop>
                    <stop offset="1" stop-color="#4A6CF7"></stop>
                </linearGradient>
            </defs>
        </svg>
    </div>
    <script>
        function carousel() {
            return {
                currentIndex: 0,
                itemsPerSlide: 1,
                slides: @json($testimonials),
                get slideIndicators() {
                    return Array(Math.ceil(this.slides.length / this.itemsPerSlide)).fill(null);
                },
                init() {
                    this.updateItemsPerSlide();
                    window.addEventListener('resize', () => this.updateItemsPerSlide());
                    this.startAutoSlide();
                },
                updateItemsPerSlide() {
                    this.itemsPerSlide = window.innerWidth >= 640 ? 3 :
                        1; // 3 items per slide on screens wider than 640px (sm breakpoint)
                    this.currentIndex = 0; // Reset to the first slide when changing the number of items per slide
                },
                prevSlide() {
                    const maxIndex = this.slides.length - this.itemsPerSlide;
                    this.currentIndex = (this.currentIndex > 0) ? this.currentIndex - 1 : maxIndex;
                },
                nextSlide() {
                    const maxIndex = this.slides.length - this.itemsPerSlide;
                    this.currentIndex = (this.currentIndex < maxIndex) ? this.currentIndex + 1 : 0;
                },
                goToSlide(index) {
                    this.currentIndex = index;
                },
                startAutoSlide() {
                    setInterval(() => {
                        this.nextSlide();
                    }, 5000); // Slide change interval in milliseconds
                }
            }
        }
    </script>
</section>
