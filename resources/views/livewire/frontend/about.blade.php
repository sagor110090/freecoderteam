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
                            About Page
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
                                About Page
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
    <section id="about" class="pt-16 md:pt-20 lg:pt-28">
        <div class="container">
            <div class="border-body-color/[.15] border-b pb-16 dark:border-white/[.15] md:pb-20 lg:pb-28">
                <div class="-mx-4 flex flex-wrap items-center">
                    <div class="w-full px-4 lg:w-1/2">
                        <div class="wow fadeInUp w-full" data-wow-delay=".1s"
                            style="max-width: 570px; margin-bottom: 44px">
                            <h2
                                class="mb-4 text-3xl font-bold !leading-tight text-black dark:text-white sm:text-4xl md:text-[45px]">
                                Crafted for Startups, SaaS, and Business Sites
                            </h2>
                            <p class="text-body-color text-base !leading-relaxed md:text-lg">
                                Our focus is on delivering high-quality, secure solutions tailored to the unique needs
                                of startups, SaaS, and business sites. We offer interactive discussions and insights on
                                optimizing and protecting your digital assets.
                            </p>
                        </div>
                        <div class="wow fadeInUp mb-12 max-w-[570px] lg:mb-0" data-wow-delay=".15s">
                            <div class="mx-[-12px] flex flex-wrap">
                                <div class="w-full px-3 sm:w-1/2 lg:w-full xl:w-1/2">
                                    <p class="text-body-color mb-5 flex items-center text-lg font-medium">
                                        <span
                                            class="bg-primary text-primary mr-4 flex h-[30px] w-[30px] items-center justify-center rounded-md bg-opacity-10">
                                            <svg width="16" height="13" viewBox="0 0 16 13" class="fill-current">
                                                <path
                                                    d="M5.8535 12.6631C5.65824 12.8584 5.34166 12.8584 5.1464 12.6631L0.678505 8.1952C0.483242 7.99994 0.483242 7.68336 0.678505 7.4881L2.32921 5.83739C2.52467 5.64193 2.84166 5.64216 3.03684 5.83791L5.14622 7.95354C5.34147 8.14936 5.65859 8.14952 5.85403 7.95388L13.3797 0.420561C13.575 0.22513 13.8917 0.225051 14.087 0.420383L15.7381 2.07143C15.9333 2.26669 15.9333 2.58327 15.7381 2.77854L5.8535 12.6631Z">
                                                </path>
                                            </svg>
                                        </span>
                                        High-Quality Web Design
                                    </p>
                                    <p class="text-body-color mb-5 flex items-center text-lg font-medium">
                                        <span
                                            class="bg-primary text-primary mr-4 flex h-[30px] w-[30px] items-center justify-center rounded-md bg-opacity-10">
                                            <svg width="16" height="13" viewBox="0 0 16 13" class="fill-current">
                                                <path
                                                    d="M5.8535 12.6631C5.65824 12.8584 5.34166 12.8584 5.1464 12.6631L0.678505 8.1952C0.483242 7.99994 0.483242 7.68336 0.678505 7.4881L2.32921 5.83739C2.52467 5.64193 2.84166 5.64216 3.03684 5.83791L5.14622 7.95354C5.34147 8.14936 5.65859 8.14952 5.85403 7.95388L13.3797 0.420561C13.575 0.22513 13.8917 0.225051 14.087 0.420383L15.7381 2.07143C15.9333 2.26669 15.9333 2.58327 15.7381 2.77854L5.8535 12.6631Z">
                                                </path>
                                            </svg>
                                        </span>
                                        Advanced Laravel Development
                                    </p>
                                    <p class="text-body-color mb-5 flex items-center text-lg font-medium">
                                        <span
                                            class="bg-primary text-primary mr-4 flex h-[30px] w-[30px] items-center justify-center rounded-md bg-opacity-10">
                                            <svg width="16" height="13" viewBox="0 0 16 13" class="fill-current">
                                                <path
                                                    d="M5.8535 12.6631C5.65824 12.8584 5.34166 12.8584 5.1464 12.6631L0.678505 8.1952C0.483242 7.99994 0.483242 7.68336 0.678505 7.4881L2.32921 5.83739C2.52467 5.64193 2.84166 5.64216 3.03684 5.83791L5.14622 7.95354C5.34147 8.14936 5.65859 8.14952 5.85403 7.95388L13.3797 0.420561C13.575 0.22513 13.8917 0.225051 14.087 0.420383L15.7381 2.07143C15.9333 2.26669 15.9333 2.58327 15.7381 2.77854L5.8535 12.6631Z">
                                                </path>
                                            </svg>
                                        </span>
                                        Comprehensive SEO Strategies
                                    </p>
                                </div>
                                <div class="w-full px-3 sm:w-1/2 lg:w-full xl:w-1/2">
                                    <p class="text-body-color mb-5 flex items-center text-lg font-medium">
                                        <span
                                            class="bg-primary text-primary mr-4 flex h-[30px] w-[30px] items-center justify-center rounded-md bg-opacity-10">
                                            <svg width="16" height="13" viewBox="0 0 16 13"
                                                class="fill-current">
                                                <path
                                                    d="M5.8535 12.6631C5.65824 12.8584 5.34166 12.8584 5.1464 12.6631L0.678505 8.1952C0.483242 7.99994 0.483242 7.68336 0.678505 7.4881L2.32921 5.83739C2.52467 5.64193 2.84166 5.64216 3.03684 5.83791L5.14622 7.95354C5.34147 8.14936 5.65859 8.14952 5.85403 7.95388L13.3797 0.420561C13.575 0.22513 13.8917 0.225051 14.087 0.420383L15.7381 2.07143C15.9333 2.26669 15.9333 2.58327 15.7381 2.77854L5.8535 12.6631Z">
                                                </path>
                                            </svg>
                                        </span>
                                        Scalable and Secure Applications
                                    </p>
                                    <p class="text-body-color mb-5 flex items-center text-lg font-medium">
                                        <span
                                            class="bg-primary text-primary mr-4 flex h-[30px] w-[30px] items-center justify-center rounded-md bg-opacity-10">
                                            <svg width="16" height="13" viewBox="0 0 16 13"
                                                class="fill-current">
                                                <path
                                                    d="M5.8535 12.6631C5.65824 12.8584 5.34166 12.8584 5.1464 12.6631L0.678505 8.1952C0.483242 7.99994 0.483242 7.68336 0.678505 7.4881L2.32921 5.83739C2.52467 5.64193 2.84166 5.64216 3.03684 5.83791L5.14622 7.95354C5.34147 8.14936 5.65859 8.14952 5.85403 7.95388L13.3797 0.420561C13.575 0.22513 13.8917 0.225051 14.087 0.420383L15.7381 2.07143C15.9333 2.26669 15.9333 2.58327 15.7381 2.77854L5.8535 12.6631Z">
                                                </path>
                                            </svg>
                                        </span>
                                        Customizable Solutions
                                    </p>
                                    <p class="text-body-color mb-5 flex items-center text-lg font-medium">
                                        <span
                                            class="bg-primary text-primary mr-4 flex h-[30px] w-[30px] items-center justify-center rounded-md bg-opacity-10">
                                            <svg width="16" height="13" viewBox="0 0 16 13"
                                                class="fill-current">
                                                <path
                                                    d="M5.8535 12.6631C5.65824 12.8584 5.34166 12.8584 5.1464 12.6631L0.678505 8.1952C0.483242 7.99994 0.483242 7.68336 0.678505 7.4881L2.32921 5.83739C2.52467 5.64193 2.84166 5.64216 3.03684 5.83791L5.14622 7.95354C5.34147 8.14936 5.65859 8.14952 5.85403 7.95388L13.3797 0.420561C13.575 0.22513 13.8917 0.225051 14.087 0.420383L15.7381 2.07143C15.9333 2.26669 15.9333 2.58327 15.7381 2.77854L5.8535 12.6631Z">
                                                </path>
                                            </svg>
                                        </span>
                                        Exceptional Customer Support
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 lg:w-1/2">
                        <div class="wow fadeInUp relative mx-auto aspect-[25/24] max-w-[500px] lg:mr-0"
                            data-wow-delay=".2s">
                            <img alt="about-image" src="images/about-image-dark.svg" decoding="async"
                                data-nimg="fill" class="mx-auto max-w-full lg:mr-0" loading="lazy"
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
                </div>
            </div>
        </div>
    </section>
    <section class="py-16 md:py-20 lg:py-28">
        <div class="container">
            <div class="-mx-4 flex flex-wrap items-center">
                <div class="w-full px-4 lg:w-1/2">
                    <div class="wow fadeInUp relative mx-auto mb-12 aspect-[25/24] max-w-[500px] text-center lg:m-0"
                        data-wow-delay=".15s">
                        <img alt="about image" src="../images/about-image-2-dark.svg" decoding="async"
                            data-nimg="fill" loading="lazy"
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
                <div class="w-full px-4 lg:w-1/2">
                    <div class="wow fadeInUp max-w-[470px]" data-wow-delay=".2s">
                        <div class="mb-9">
                            <h3
                                class="mb-4 text-xl font-bold text-black dark:text-white sm:text-2xl lg:text-xl xl:text-2xl">
                                Bug-Free Code
                            </h3>
                            <p
                                class="text-base font-medium leading-relaxed text-body-color sm:text-lg sm:leading-relaxed">
                                We prioritize writing clean and efficient code to ensure your applications run smoothly
                                and without errors. Our rigorous testing processes guarantee a high-quality product.
                            </p>
                        </div>
                        <div class="mb-9">
                            <h3
                                class="mb-4 text-xl font-bold text-black dark:text-white sm:text-2xl lg:text-xl xl:text-2xl">
                                Premier Support
                            </h3>
                            <p
                                class="text-base font-medium leading-relaxed text-body-color sm:text-lg sm:leading-relaxed">
                                Our dedicated support team is here to assist you every step of the way. We offer timely
                                and effective support to address any issues and ensure your business operations are
                                uninterrupted.
                            </p>
                        </div>
                        <div class="mb-1">
                            <h3
                                class="mb-4 text-xl font-bold text-black dark:text-white sm:text-2xl lg:text-xl xl:text-2xl">
                                Full-Stack Expertise
                            </h3>
                            <p
                                class="text-base font-medium leading-relaxed text-body-color sm:text-lg sm:leading-relaxed">
                                Leveraging the power of Laravel and other modern technologies, we deliver comprehensive
                                full-stack solutions tailored to your business needs. From frontend to backend, we've
                                got you covered.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
