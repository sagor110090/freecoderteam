<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;

new #[Layout("layouts.frontend")] class extends Component {
    //
}; ?>

<div>
    <section class="relative z-10 overflow-hidden pt-28 lg:pt-[150px]">
        <div class="container">
            <div class="-mx-4 flex flex-wrap items-center">
                <div class="w-full px-4 md:w-8/12 lg:w-7/12">
                    <div class="mb-8 max-w-[570px] md:mb-0 lg:mb-12">
                        <h1
                            class="mb-5 text-2xl font-bold text-black dark:text-white sm:text-3xl"
                        >
                            Our Services
                        </h1>
                        <p
                            class="text-body-color text-base font-medium leading-relaxed"
                        >
                            We provide a range of services designed to help your
                            business grow and succeed. From web development to
                            digital marketing, we have you covered.
                        </p>
                    </div>
                </div>
                <div class="w-full px-4 md:w-4/12 lg:w-5/12">
                    <div class="text-end">
                        <ul class="flex items-center md:justify-end">
                            <li class="flex items-center">
                                <a
                                    class="text-body-color hover:text-primary pr-1 text-base font-medium"
                                    href="../index.html"
                                >
                                    Home
                                </a>
                                <span
                                    class="border-body-color mr-3 block h-2 w-2 rotate-45 border-r-2 border-t-2"
                                ></span>
                            </li>
                            <li class="text-primary text-base font-medium">
                                Services
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <span class="absolute left-0 top-0 z-[-1]">
                <svg
                    width="287"
                    height="254"
                    viewBox="0 0 287 254"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        opacity="0.1"
                        d="M286.5 0.5L-14.5 254.5V69.5L286.5 0.5Z"
                        fill="url(#paint0_linear_111:578)"
                    ></path>
                    <defs>
                        <linearGradient
                            id="paint0_linear_111:578"
                            x1="-40.5"
                            y1="117"
                            x2="301.926"
                            y2="-97.1485"
                            gradientUnits="userSpaceOnUse"
                        >
                            <stop stop-color="#4A6CF7"></stop>
                            <stop
                                offset="1"
                                stop-color="#4A6CF7"
                                stop-opacity="0"
                            ></stop>
                        </linearGradient>
                    </defs>
                </svg>
            </span>
            <span class="absolute right-0 top-0 z-[-1]">
                <svg
                    width="628"
                    height="258"
                    viewBox="0 0 628 258"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        opacity="0.1"
                        d="M669.125 257.002L345.875 31.9983L524.571 -15.8832L669.125 257.002Z"
                        fill="url(#paint0_linear_0:1)"
                    ></path>
                    <path
                        opacity="0.1"
                        d="M0.0716344 182.78L101.988 -15.0769L142.154 81.4093L0.0716344 182.78Z"
                        fill="url(#paint1_linear_0:1)"
                    ></path>
                    <defs>
                        <linearGradient
                            id="paint0_linear_0:1"
                            x1="644"
                            y1="221"
                            x2="429.946"
                            y2="37.0429"
                            gradientUnits="userSpaceOnUse"
                        >
                            <stop stop-color="#4A6CF7"></stop>
                            <stop
                                offset="1"
                                stop-color="#4A6CF7"
                                stop-opacity="0"
                            ></stop>
                        </linearGradient>
                        <linearGradient
                            id="paint1_linear_0:1"
                            x1="18.3648"
                            y1="166.016"
                            x2="105.377"
                            y2="32.3398"
                            gradientUnits="userSpaceOnUse"
                        >
                            <stop stop-color="#4A6CF7"></stop>
                            <stop
                                offset="1"
                                stop-color="#4A6CF7"
                                stop-opacity="0"
                            ></stop>
                        </linearGradient>
                    </defs>
                </svg>
            </span>
        </div>
    </section>
    <div>
        <section class="relative z-10 overflow-hidden pt-28 lg:pt-[150px]">
            <div class="container">
                <div class="-mx-4 flex flex-wrap">
                    <!-- Card 1 -->
                    <div class="mb-8 w-full px-4 md:w-1/2 lg:w-1/3">
                        <div
                            class="rounded-lg bg-white p-6 shadow-lg dark:bg-gray-800"
                        >
                            <div class="mb-4">
                                <img
                                    src="../images/services/web-development.svg"
                                    alt="Web Development"
                                    class="h-48 w-full rounded-lg object-cover"
                                />
                            </div>
                            <h3
                                class="mb-3 text-xl font-bold text-black dark:text-white"
                            >
                                Web Development
                            </h3>
                            <p
                                class="text-body-color text-base font-medium leading-relaxed"
                            >
                                We build responsive, user-friendly websites
                                tailored to your business needs.
                            </p>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="mb-8 w-full px-4 md:w-1/2 lg:w-1/3">
                        <div
                            class="rounded-lg bg-white p-6 shadow-lg dark:bg-gray-800"
                        >
                            <div class="mb-4">
                                <img
                                    src="../images/services/digital-marketing.svg"
                                    alt="Digital Marketing"
                                    class="h-48 w-full rounded-lg object-cover"
                                />
                            </div>
                            <h3
                                class="mb-3 text-xl font-bold text-black dark:text-white"
                            >
                                Digital Marketing
                            </h3>
                            <p
                                class="text-body-color text-base font-medium leading-relaxed"
                            >
                                Our digital marketing services help you reach a
                                wider audience and boost your online presence.
                            </p>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="mb-8 w-full px-4 md:w-1/2 lg:w-1/3">
                        <div
                            class="rounded-lg bg-white p-6 shadow-lg dark:bg-gray-800"
                        >
                            <div class="mb-4">
                                <img
                                    src="../images/services/technical-support.svg"
                                    alt="Technical Support"
                                    class="h-48 w-full rounded-lg object-cover"
                                />
                            </div>
                            <h3
                                class="mb-3 text-xl font-bold text-black dark:text-white"
                            >
                                Technical Support
                            </h3>
                            <p
                                class="text-body-color text-base font-medium leading-relaxed"
                            >
                                We provide ongoing technical support to ensure
                                your website runs smoothly.
                            </p>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="mb-8 w-full px-4 md:w-1/2 lg:w-1/3">
                        <div
                            class="rounded-lg bg-white p-6 shadow-lg dark:bg-gray-800"
                        >
                            <div class="mb-4">
                                <img
                                    src="../images/services/seo.svg"
                                    alt="SEO Optimization"
                                    class="h-48 w-full rounded-lg object-cover"
                                />
                            </div>
                            <h3
                                class="mb-3 text-xl font-bold text-black dark:text-white"
                            >
                                SEO Optimization
                            </h3>
                            <p
                                class="text-body-color text-base font-medium leading-relaxed"
                            >
                                Our SEO services will improve your website’s
                                visibility and ranking on search engines.
                            </p>
                        </div>
                    </div>
                    <!-- Card 5 -->
                    <div class="mb-8 w-full px-4 md:w-1/2 lg:w-1/3">
                        <div
                            class="rounded-lg bg-white p-6 shadow-lg dark:bg-gray-800"
                        >
                            <div class="mb-4">
                                <img
                                    src="../images/services/custom-solutions.svg"
                                    alt="Custom Solutions"
                                    class="h-48 w-full rounded-lg object-cover"
                                />
                            </div>
                            <h3
                                class="mb-3 text-xl font-bold text-black dark:text-white"
                            >
                                Custom Solutions
                            </h3>
                            <p
                                class="text-body-color text-base font-medium leading-relaxed"
                            >
                                We provide custom solutions tailored to your
                                unique business requirements.
                            </p>
                        </div>
                    </div>
                    <!-- Card 6 -->
                    <div class="mb-8 w-full px-4 md:w-1/2 lg:w-1/3">
                        <div
                            class="rounded-lg bg-white p-6 shadow-lg dark:bg-gray-800"
                        >
                            <div class="mb-4">
                                <img
                                    src="../images/services/consulting.svg"
                                    alt="Consulting Services"
                                    class="h-48 w-full rounded-lg object-cover"
                                />
                            </div>
                            <h3
                                class="mb-3 text-xl font-bold text-black dark:text-white"
                            >
                                Consulting Services
                            </h3>
                            <p
                                class="text-body-color text-base font-medium leading-relaxed"
                            >
                                Our consulting services help you strategize and
                                implement the best solutions for your business.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@assets
    
@endassets

@script
    
@endscript
