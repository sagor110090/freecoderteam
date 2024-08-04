<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts.frontend')] class extends Component {
    //
}; ?>

<div>
    <section class="relative z-10 overflow-hidden pt-28 lg:pt-[150px]">
        <div class="container">
            <div class="-mx-4 flex flex-wrap items-center">
                <div class="w-full px-4 md:w-8/12 lg:w-7/12">
                    <div class="mb-8 max-w-[570px] md:mb-0 lg:mb-12">
                        <h1 class="mb-5 text-2xl font-bold text-black dark:text-white sm:text-3xl">
                            Blog Grid
                        </h1>
                        <p class="text-body-color text-base font-medium leading-relaxed">
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. In varius eros eget sapien consectetur
                            ultrices. Ut quis dapibus libero.
                        </p>
                    </div>
                </div>
                <div class="w-full px-4 md:w-4/12 lg:w-5/12">
                    <div class="text-end">
                        <ul class="flex items-center md:justify-end">
                            <li class="flex items-center">
                                <a class="text-body-color hover:text-primary pr-1 text-base font-medium"
                                    href="../index.html">
                                    Home
                                </a>
                                <span
                                    class="border-body-color mr-3 block h-2 w-2 rotate-45 border-r-2 border-t-2"></span>
                            </li>
                            <li class="text-primary text-base font-medium">
                                Blog Grid
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <span class="absolute left-0 top-0 z-[-1]">
                <svg width="287" height="254" viewBox="0 0 287 254" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.1" d="M286.5 0.5L-14.5 254.5V69.5L286.5 0.5Z" fill="url(#paint0_linear_111:578)">
                    </path>
                    <defs>
                        <linearGradient id="paint0_linear_111:578" x1="-40.5" y1="117" x2="301.926"
                            y2="-97.1485" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#4A6CF7"></stop>
                            <stop offset="1" stop-color="#4A6CF7" stop-opacity="0"></stop>
                        </linearGradient>
                    </defs>
                </svg>
            </span>
            <span class="absolute right-0 top-0 z-[-1]">
                <svg width="628" height="258" viewBox="0 0 628 258" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.1" d="M669.125 257.002L345.875 31.9983L524.571 -15.8832L669.125 257.002Z"
                        fill="url(#paint0_linear_0:1)"></path>
                    <path opacity="0.1" d="M0.0716344 182.78L101.988 -15.0769L142.154 81.4093L0.0716344 182.78Z"
                        fill="url(#paint1_linear_0:1)"></path>
                    <defs>
                        <linearGradient id="paint0_linear_0:1" x1="644" y1="221" x2="429.946"
                            y2="37.0429" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#4A6CF7"></stop>
                            <stop offset="1" stop-color="#4A6CF7" stop-opacity="0"></stop>
                        </linearGradient>
                        <linearGradient id="paint1_linear_0:1" x1="18.3648" y1="166.016" x2="105.377"
                            y2="32.3398" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#4A6CF7"></stop>
                            <stop offset="1" stop-color="#4A6CF7" stop-opacity="0"></stop>
                        </linearGradient>
                    </defs>
                </svg>
            </span>
        </div>
    </section>
    <section class="pb-[120px] pt-[120px]">
        <div class="container">
            <div class="-mx-4 flex flex-wrap justify-center">
                <div class="w-full px-4 md:w-2/3 lg:w-1/2 xl:w-1/3">
                    <div class="wow fadeInUp shadow-one dark:bg-dark relative overflow-hidden rounded-md bg-white"
                        data-wow-delay=".1s">
                        <a class="relative block h-[220px] w-full" href="../index.html">
                            <span
                                class="bg-primary absolute right-6 top-6 z-20 inline-flex items-center justify-center rounded-full px-4 py-2 text-sm font-semibold capitalize text-white">
                                creative
                            </span>
                            <img alt="image" sizes="100vw"
                                srcset="
                                    /_next/image/?url=%2Fimages%2Fblog%2Fblog-01.jpg&amp;w=640&amp;q=75   640w,
                                    /_next/image/?url=%2Fimages%2Fblog%2Fblog-01.jpg&amp;w=750&amp;q=75   750w,
                                    /_next/image/?url=%2Fimages%2Fblog%2Fblog-01.jpg&amp;w=828&amp;q=75   828w,
                                    /_next/image/?url=%2Fimages%2Fblog%2Fblog-01.jpg&amp;w=1080&amp;q=75 1080w,
                                    /_next/image/?url=%2Fimages%2Fblog%2Fblog-01.jpg&amp;w=1200&amp;q=75 1200w,
                                    /_next/image/?url=%2Fimages%2Fblog%2Fblog-01.jpg&amp;w=1920&amp;q=75 1920w,
                                    /_next/image/?url=%2Fimages%2Fblog%2Fblog-01.jpg&amp;w=2048&amp;q=75 2048w,
                                    /_next/image/?url=%2Fimages%2Fblog%2Fblog-01.jpg&amp;w=3840&amp;q=75 3840w
                                "
                                src="../_next/image/indexec53.html?url=%2Fimages%2Fblog%2Fblog-01.jpg&amp;w=3840&amp;q=75"
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
                        </a>
                        <div class="p-6 sm:p-8 md:px-6 md:py-8 lg:p-8 xl:px-5 xl:py-8 2xl:p-8">
                            <h3>
                                <a class="hover:text-primary dark:hover:text-primary mb-4 block text-xl font-bold text-black dark:text-white sm:text-2xl"
                                    href="../index.html">
                                    Best UI components for modern websites
                                </a>
                            </h3>
                            <p
                                class="border-body-color text-body-color mb-6 border-b border-opacity-10 pb-6 text-base font-medium dark:border-white dark:border-opacity-10">
                                Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Cras sit amet dictum neque,
                                laoreet dolor.
                            </p>
                            <div class="flex items-center">
                                <div
                                    class="border-body-color mr-5 flex items-center border-r border-opacity-10 pr-5 dark:border-white dark:border-opacity-10 xl:mr-3 xl:pr-3 2xl:mr-5 2xl:pr-5">
                                    <div class="mr-4">
                                        <div class="relative h-10 w-10 overflow-hidden rounded-full">
                                            <img alt="author" sizes="100vw"
                                                srcset="
                                                    /_next/image/?url=%2Fimages%2Fblog%2Fauthor-01.png&amp;w=640&amp;q=75   640w,
                                                    /_next/image/?url=%2Fimages%2Fblog%2Fauthor-01.png&amp;w=750&amp;q=75   750w,
                                                    /_next/image/?url=%2Fimages%2Fblog%2Fauthor-01.png&amp;w=828&amp;q=75   828w,
                                                    /_next/image/?url=%2Fimages%2Fblog%2Fauthor-01.png&amp;w=1080&amp;q=75 1080w,
                                                    /_next/image/?url=%2Fimages%2Fblog%2Fauthor-01.png&amp;w=1200&amp;q=75 1200w,
                                                    /_next/image/?url=%2Fimages%2Fblog%2Fauthor-01.png&amp;w=1920&amp;q=75 1920w,
                                                    /_next/image/?url=%2Fimages%2Fblog%2Fauthor-01.png&amp;w=2048&amp;q=75 2048w,
                                                    /_next/image/?url=%2Fimages%2Fblog%2Fauthor-01.png&amp;w=3840&amp;q=75 3840w
                                                "
                                                src="../_next/image/indexba19.html?url=%2Fimages%2Fblog%2Fauthor-01.png&amp;w=3840&amp;q=75"
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
                                    </div>
                                    <div class="w-full">
                                        <h4 class="text-dark mb-1 text-sm font-medium dark:text-white">
                                            By
                                            <!-- -->
                                            Samuyl Joshi
                                        </h4>
                                        <p class="text-body-color text-xs">
                                            Graphic Designer
                                        </p>
                                    </div>
                                </div>
                                <div class="inline-block">
                                    <h4 class="text-dark mb-1 text-sm font-medium dark:text-white">
                                        Date
                                    </h4>
                                    <p class="text-body-color text-xs">2025</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 md:w-2/3 lg:w-1/2 xl:w-1/3">
                    <div class="wow fadeInUp shadow-one dark:bg-dark relative overflow-hidden rounded-md bg-white"
                        data-wow-delay=".1s">
                        <a class="relative block h-[220px] w-full" href="../index.html">
                            <span
                                class="bg-primary absolute right-6 top-6 z-20 inline-flex items-center justify-center rounded-full px-4 py-2 text-sm font-semibold capitalize text-white">
                                computer
                            </span>
                            <img alt="image" sizes="100vw"
                                srcset="
                                    /_next/image/?url=%2Fimages%2Fblog%2Fblog-02.jpg&amp;w=640&amp;q=75   640w,
                                    /_next/image/?url=%2Fimages%2Fblog%2Fblog-02.jpg&amp;w=750&amp;q=75   750w,
                                    /_next/image/?url=%2Fimages%2Fblog%2Fblog-02.jpg&amp;w=828&amp;q=75   828w,
                                    /_next/image/?url=%2Fimages%2Fblog%2Fblog-02.jpg&amp;w=1080&amp;q=75 1080w,
                                    /_next/image/?url=%2Fimages%2Fblog%2Fblog-02.jpg&amp;w=1200&amp;q=75 1200w,
                                    /_next/image/?url=%2Fimages%2Fblog%2Fblog-02.jpg&amp;w=1920&amp;q=75 1920w,
                                    /_next/image/?url=%2Fimages%2Fblog%2Fblog-02.jpg&amp;w=2048&amp;q=75 2048w,
                                    /_next/image/?url=%2Fimages%2Fblog%2Fblog-02.jpg&amp;w=3840&amp;q=75 3840w
                                "
                                src="../_next/image/index37b0.html?url=%2Fimages%2Fblog%2Fblog-02.jpg&amp;w=3840&amp;q=75"
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
                        </a>
                        <div class="p-6 sm:p-8 md:px-6 md:py-8 lg:p-8 xl:px-5 xl:py-8 2xl:p-8">
                            <h3>
                                <a class="hover:text-primary dark:hover:text-primary mb-4 block text-xl font-bold text-black dark:text-white sm:text-2xl"
                                    href="../index.html">
                                    9 simple ways to improve your design skills
                                </a>
                            </h3>
                            <p
                                class="border-body-color text-body-color mb-6 border-b border-opacity-10 pb-6 text-base font-medium dark:border-white dark:border-opacity-10">
                                Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Cras sit amet dictum neque,
                                laoreet dolor.
                            </p>
                            <div class="flex items-center">
                                <div
                                    class="border-body-color mr-5 flex items-center border-r border-opacity-10 pr-5 dark:border-white dark:border-opacity-10 xl:mr-3 xl:pr-3 2xl:mr-5 2xl:pr-5">
                                    <div class="mr-4">
                                        <div class="relative h-10 w-10 overflow-hidden rounded-full">
                                            <img alt="author" sizes="100vw"
                                                srcset="
                                                    /_next/image/?url=%2Fimages%2Fblog%2Fauthor-02.png&amp;w=640&amp;q=75   640w,
                                                    /_next/image/?url=%2Fimages%2Fblog%2Fauthor-02.png&amp;w=750&amp;q=75   750w,
                                                    /_next/image/?url=%2Fimages%2Fblog%2Fauthor-02.png&amp;w=828&amp;q=75   828w,
                                                    /_next/image/?url=%2Fimages%2Fblog%2Fauthor-02.png&amp;w=1080&amp;q=75 1080w,
                                                    /_next/image/?url=%2Fimages%2Fblog%2Fauthor-02.png&amp;w=1200&amp;q=75 1200w,
                                                    /_next/image/?url=%2Fimages%2Fblog%2Fauthor-02.png&amp;w=1920&amp;q=75 1920w,
                                                    /_next/image/?url=%2Fimages%2Fblog%2Fauthor-02.png&amp;w=2048&amp;q=75 2048w,
                                                    /_next/image/?url=%2Fimages%2Fblog%2Fauthor-02.png&amp;w=3840&amp;q=75 3840w
                                                "
                                                src="../_next/image/indexe8fb.html?url=%2Fimages%2Fblog%2Fauthor-02.png&amp;w=3840&amp;q=75"
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
                                    </div>
                                    <div class="w-full">
                                        <h4 class="text-dark mb-1 text-sm font-medium dark:text-white">
                                            By
                                            <!-- -->
                                            Musharof Chy
                                        </h4>
                                        <p class="text-body-color text-xs">
                                            Content Writer
                                        </p>
                                    </div>
                                </div>
                                <div class="inline-block">
                                    <h4 class="text-dark mb-1 text-sm font-medium dark:text-white">
                                        Date
                                    </h4>
                                    <p class="text-body-color text-xs">2025</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 md:w-2/3 lg:w-1/2 xl:w-1/3">
                    <div class="wow fadeInUp shadow-one dark:bg-dark relative overflow-hidden rounded-md bg-white"
                        data-wow-delay=".1s">
                        <a class="relative block h-[220px] w-full" href="../index.html">
                            <span
                                class="bg-primary absolute right-6 top-6 z-20 inline-flex items-center justify-center rounded-full px-4 py-2 text-sm font-semibold capitalize text-white">
                                design
                            </span>
                            <img alt="image" sizes="100vw"
                                srcset="
                                    /_next/image/?url=%2Fimages%2Fblog%2Fblog-03.jpg&amp;w=640&amp;q=75   640w,
                                    /_next/image/?url=%2Fimages%2Fblog%2Fblog-03.jpg&amp;w=750&amp;q=75   750w,
                                    /_next/image/?url=%2Fimages%2Fblog%2Fblog-03.jpg&amp;w=828&amp;q=75   828w,
                                    /_next/image/?url=%2Fimages%2Fblog%2Fblog-03.jpg&amp;w=1080&amp;q=75 1080w,
                                    /_next/image/?url=%2Fimages%2Fblog%2Fblog-03.jpg&amp;w=1200&amp;q=75 1200w,
                                    /_next/image/?url=%2Fimages%2Fblog%2Fblog-03.jpg&amp;w=1920&amp;q=75 1920w,
                                    /_next/image/?url=%2Fimages%2Fblog%2Fblog-03.jpg&amp;w=2048&amp;q=75 2048w,
                                    /_next/image/?url=%2Fimages%2Fblog%2Fblog-03.jpg&amp;w=3840&amp;q=75 3840w
                                "
                                src="../_next/image/indexd681.html?url=%2Fimages%2Fblog%2Fblog-03.jpg&amp;w=3840&amp;q=75"
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
                        </a>
                        <div class="p-6 sm:p-8 md:px-6 md:py-8 lg:p-8 xl:px-5 xl:py-8 2xl:p-8">
                            <h3>
                                <a class="hover:text-primary dark:hover:text-primary mb-4 block text-xl font-bold text-black dark:text-white sm:text-2xl"
                                    href="../index.html">
                                    Tips to quickly improve your coding speed.
                                </a>
                            </h3>
                            <p
                                class="border-body-color text-body-color mb-6 border-b border-opacity-10 pb-6 text-base font-medium dark:border-white dark:border-opacity-10">
                                Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Cras sit amet dictum neque,
                                laoreet dolor.
                            </p>
                            <div class="flex items-center">
                                <div
                                    class="border-body-color mr-5 flex items-center border-r border-opacity-10 pr-5 dark:border-white dark:border-opacity-10 xl:mr-3 xl:pr-3 2xl:mr-5 2xl:pr-5">
                                    <div class="mr-4">
                                        <div class="relative h-10 w-10 overflow-hidden rounded-full">
                                            <img alt="author" sizes="100vw"
                                                srcset="
                                                    /_next/image/?url=%2Fimages%2Fblog%2Fauthor-03.png&amp;w=640&amp;q=75   640w,
                                                    /_next/image/?url=%2Fimages%2Fblog%2Fauthor-03.png&amp;w=750&amp;q=75   750w,
                                                    /_next/image/?url=%2Fimages%2Fblog%2Fauthor-03.png&amp;w=828&amp;q=75   828w,
                                                    /_next/image/?url=%2Fimages%2Fblog%2Fauthor-03.png&amp;w=1080&amp;q=75 1080w,
                                                    /_next/image/?url=%2Fimages%2Fblog%2Fauthor-03.png&amp;w=1200&amp;q=75 1200w,
                                                    /_next/image/?url=%2Fimages%2Fblog%2Fauthor-03.png&amp;w=1920&amp;q=75 1920w,
                                                    /_next/image/?url=%2Fimages%2Fblog%2Fauthor-03.png&amp;w=2048&amp;q=75 2048w,
                                                    /_next/image/?url=%2Fimages%2Fblog%2Fauthor-03.png&amp;w=3840&amp;q=75 3840w
                                                "
                                                src="../_next/image/index1501.html?url=%2Fimages%2Fblog%2Fauthor-03.png&amp;w=3840&amp;q=75"
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
                                    </div>
                                    <div class="w-full">
                                        <h4 class="text-dark mb-1 text-sm font-medium dark:text-white">
                                            By
                                            <!-- -->
                                            Lethium Deo
                                        </h4>
                                        <p class="text-body-color text-xs">
                                            Graphic Designer
                                        </p>
                                    </div>
                                </div>
                                <div class="inline-block">
                                    <h4 class="text-dark mb-1 text-sm font-medium dark:text-white">
                                        Date
                                    </h4>
                                    <p class="text-body-color text-xs">2025</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wow fadeInUp -mx-4 flex flex-wrap" data-wow-delay=".15s">
                <div class="w-full px-4">
                    <ul class="flex items-center justify-center pt-8">
                        <li class="mx-1">
                            <a href="#0"
                                class="bg-body-color text-body-color hover:bg-primary flex h-9 min-w-[36px] items-center justify-center rounded-md bg-opacity-[15%] px-4 text-sm transition hover:bg-opacity-100 hover:text-white">
                                Prev
                            </a>
                        </li>
                        <li class="mx-1">
                            <a href="#0"
                                class="bg-body-color text-body-color hover:bg-primary flex h-9 min-w-[36px] items-center justify-center rounded-md bg-opacity-[15%] px-4 text-sm transition hover:bg-opacity-100 hover:text-white">
                                1
                            </a>
                        </li>
                        <li class="mx-1">
                            <a href="#0"
                                class="bg-body-color text-body-color hover:bg-primary flex h-9 min-w-[36px] items-center justify-center rounded-md bg-opacity-[15%] px-4 text-sm transition hover:bg-opacity-100 hover:text-white">
                                2
                            </a>
                        </li>
                        <li class="mx-1">
                            <a href="#0"
                                class="bg-body-color text-body-color hover:bg-primary flex h-9 min-w-[36px] items-center justify-center rounded-md bg-opacity-[15%] px-4 text-sm transition hover:bg-opacity-100 hover:text-white">
                                3
                            </a>
                        </li>
                        <li class="mx-1">
                            <a
                                class="bg-body-color text-body-color flex h-9 min-w-[36px] cursor-not-allowed items-center justify-center rounded-md bg-opacity-[15%] px-4 text-sm">
                                ...
                            </a>
                        </li>
                        <li class="mx-1">
                            <a href="#0"
                                class="bg-body-color text-body-color hover:bg-primary flex h-9 min-w-[36px] items-center justify-center rounded-md bg-opacity-[15%] px-4 text-sm transition hover:bg-opacity-100 hover:text-white">
                                12
                            </a>
                        </li>
                        <li class="mx-1">
                            <a href="#0"
                                class="bg-body-color text-body-color hover:bg-primary flex h-9 min-w-[36px] items-center justify-center rounded-md bg-opacity-[15%] px-4 text-sm transition hover:bg-opacity-100 hover:text-white">
                                Next
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
