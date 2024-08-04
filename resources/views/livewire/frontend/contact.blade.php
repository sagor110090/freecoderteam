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
                            Contact Page
                        </h1>
                        <p
                            class="text-body-color text-base font-medium leading-relaxed"
                        >
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
                                Contact Page
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
    <section id="contact" class="overflow-hidden py-16 md:py-20 lg:py-28">
        <div class="container">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4 lg:w-7/12 xl:w-8/12">
                    <div
                        class="wow fadeInUp bg-primary/[3%] dark:bg-dark mb-12 rounded-md px-8 py-11 sm:p-[55px] lg:mb-5 lg:px-8 xl:p-[55px]"
                        data-wow-delay=".15s "
                    >
                        <h2
                            class="mb-3 text-2xl font-bold text-black dark:text-white sm:text-3xl lg:text-2xl xl:text-3xl"
                        >
                            Need Help? Open a Ticket
                        </h2>
                        <p class="text-body-color mb-12 text-base font-medium">
                            Our support team will get back to you ASAP via
                            email.
                        </p>
                        <form>
                            <div class="-mx-4 flex flex-wrap">
                                <div class="w-full px-4 md:w-1/2">
                                    <div class="mb-8">
                                        <label
                                            for="name"
                                            class="text-dark mb-3 block text-sm font-medium dark:text-white"
                                        >
                                            Your Name
                                        </label>
                                        <input
                                            type="text"
                                            placeholder="Enter your name"
                                            class="text-body-color placeholder-body-color shadow-one focus:border-primary dark:shadow-signUp w-full rounded-md border border-transparent px-6 py-3 text-base outline-none focus-visible:shadow-none dark:bg-[#242B51]"
                                        />
                                    </div>
                                </div>
                                <div class="w-full px-4 md:w-1/2">
                                    <div class="mb-8">
                                        <label
                                            for="email"
                                            class="text-dark mb-3 block text-sm font-medium dark:text-white"
                                        >
                                            Your Email
                                        </label>
                                        <input
                                            type="email"
                                            placeholder="Enter your email"
                                            class="text-body-color placeholder-body-color shadow-one focus:border-primary dark:shadow-signUp w-full rounded-md border border-transparent px-6 py-3 text-base outline-none focus-visible:shadow-none dark:bg-[#242B51]"
                                        />
                                    </div>
                                </div>
                                <div class="w-full px-4">
                                    <div class="mb-8">
                                        <label
                                            for="message"
                                            class="text-dark mb-3 block text-sm font-medium dark:text-white"
                                        >
                                            Your Message
                                        </label>
                                        <textarea
                                            name="message"
                                            rows="5"
                                            placeholder="Enter your Message"
                                            class="text-body-color placeholder-body-color shadow-one focus:border-primary dark:shadow-signUp w-full resize-none rounded-md border border-transparent px-6 py-3 text-base outline-none focus-visible:shadow-none dark:bg-[#242B51]"
                                        ></textarea>
                                    </div>
                                </div>
                                <div class="w-full px-4">
                                    <button
                                        class="bg-primary hover:shadow-signUp rounded-md px-9 py-4 text-base font-medium text-white transition duration-300 ease-in-out hover:bg-opacity-80"
                                    >
                                        Submit Ticket
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-5/12 xl:w-4/12">
                    <div
                        class="wow fadeInUp bg-primary/[3%] dark:bg-primary/10 relative z-10 rounded-md p-8 sm:p-11 lg:p-8 xl:p-11"
                        data-wow-delay=".2s"
                    >
                        <h3
                            class="mb-4 text-2xl font-bold leading-tight text-black dark:text-white"
                        >
                            Subscribe to receive future updates
                        </h3>
                        <p
                            class="border-body-color text-body-color mb-11 border-b border-opacity-25 pb-11 text-base font-medium leading-relaxed dark:border-white dark:border-opacity-25"
                        >
                            Lorem ipsum dolor sited Sed ullam corper consectur
                            adipiscing Mae ornare massa quis lectus.
                        </p>
                        <form>
                            <input
                                type="text"
                                name="name"
                                placeholder="Enter your name"
                                class="border-body-color text-body-color placeholder-body-color focus:border-primary mb-4 w-full rounded-md border border-opacity-10 px-6 py-3 text-base font-medium outline-none focus:border-opacity-100 focus-visible:shadow-none dark:border-white dark:border-opacity-10 dark:bg-[#242B51] focus:dark:border-opacity-50"
                            />
                            <input
                                type="email"
                                name="email"
                                placeholder="Enter your email"
                                class="border-body-color text-body-color placeholder-body-color focus:border-primary mb-4 w-full rounded-md border border-opacity-10 px-6 py-3 text-base font-medium outline-none focus:border-opacity-100 focus-visible:shadow-none dark:border-white dark:border-opacity-10 dark:bg-[#242B51] focus:dark:border-opacity-50"
                            />
                            <input
                                type="submit"
                                class="duration-80 bg-primary hover:shadow-signUp mb-4 w-full cursor-pointer rounded-md border border-transparent px-6 py-3 text-center text-base font-medium text-white outline-none transition ease-in-out hover:bg-opacity-80 focus-visible:shadow-none"
                                value="Subscribe"
                            />
                            <p
                                class="text-body-color text-center text-base font-medium leading-relaxed"
                            >
                                No spam guaranteed, So please don’t send any
                                spam mail.
                            </p>
                        </form>
                        <div class="absolute left-0 top-0 z-[-1]">
                            <svg
                                width="370"
                                height="596"
                                viewBox="0 0 370 596"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <mask
                                    id="mask0_88:141"
                                    style="mask-type: alpha"
                                    maskUnits="userSpaceOnUse"
                                    x="0"
                                    y="0"
                                    width="370"
                                    height="596"
                                >
                                    <rect
                                        width="370"
                                        height="596"
                                        rx="2"
                                        fill="#1D2144"
                                    ></rect>
                                </mask>
                                <g mask="url(#mask0_88:141)">
                                    <path
                                        opacity="0.15"
                                        d="M15.4076 50.9571L54.1541 99.0711L71.4489 35.1605L15.4076 50.9571Z"
                                        fill="url(#paint0_linear_88:141)"
                                    ></path>
                                    <path
                                        opacity="0.15"
                                        d="M20.7137 501.422L44.6431 474.241L6 470.624L20.7137 501.422Z"
                                        fill="url(#paint1_linear_88:141)"
                                    ></path>
                                    <path
                                        opacity="0.1"
                                        d="M331.676 198.309C344.398 204.636 359.168 194.704 358.107 180.536C357.12 167.363 342.941 159.531 331.265 165.71C318.077 172.69 318.317 191.664 331.676 198.309Z"
                                        fill="url(#paint2_linear_88:141)"
                                    ></path>
                                    <g opacity="0.3">
                                        <path
                                            d="M209 89.9999C216 77.3332 235.7 50.7999 258.5 45.9999C287 39.9999 303 41.9999 314 30.4999C325 18.9999 334 -3.50014 357 -3.50014C380 -3.50014 395 4.99986 408.5 -8.50014C422 -22.0001 418.5 -46.0001 452 -37.5001C478.8 -30.7001 515.167 -45 530 -53"
                                            stroke="url(#paint3_linear_88:141)"
                                        ></path>
                                        <path
                                            d="M251 64.9999C258 52.3332 277.7 25.7999 300.5 20.9999C329 14.9999 345 16.9999 356 5.49986C367 -6.00014 376 -28.5001 399 -28.5001C422 -28.5001 437 -20.0001 450.5 -33.5001C464 -47.0001 460.5 -71.0001 494 -62.5001C520.8 -55.7001 557.167 -70 572 -78"
                                            stroke="url(#paint4_linear_88:141)"
                                        ></path>
                                        <path
                                            d="M212 73.9999C219 61.3332 238.7 34.7999 261.5 29.9999C290 23.9999 306 25.9999 317 14.4999C328 2.99986 337 -19.5001 360 -19.5001C383 -19.5001 398 -11.0001 411.5 -24.5001C425 -38.0001 421.5 -62.0001 455 -53.5001C481.8 -46.7001 518.167 -61 533 -69"
                                            stroke="url(#paint5_linear_88:141)"
                                        ></path>
                                        <path
                                            d="M249 40.9999C256 28.3332 275.7 1.79986 298.5 -3.00014C327 -9.00014 343 -7.00014 354 -18.5001C365 -30.0001 374 -52.5001 397 -52.5001C420 -52.5001 435 -44.0001 448.5 -57.5001C462 -71.0001 458.5 -95.0001 492 -86.5001C518.8 -79.7001 555.167 -94 570 -102"
                                            stroke="url(#paint6_linear_88:141)"
                                        ></path>
                                    </g>
                                </g>
                                <defs>
                                    <linearGradient
                                        id="paint0_linear_88:141"
                                        x1="13.4497"
                                        y1="63.5059"
                                        x2="81.144"
                                        y2="41.5072"
                                        gradientUnits="userSpaceOnUse"
                                    >
                                        <stop stop-color="white"></stop>
                                        <stop
                                            offset="1"
                                            stop-color="white"
                                            stop-opacity="0"
                                        ></stop>
                                    </linearGradient>
                                    <linearGradient
                                        id="paint1_linear_88:141"
                                        x1="28.1579"
                                        y1="501.301"
                                        x2="8.69936"
                                        y2="464.391"
                                        gradientUnits="userSpaceOnUse"
                                    >
                                        <stop stop-color="white"></stop>
                                        <stop
                                            offset="1"
                                            stop-color="white"
                                            stop-opacity="0"
                                        ></stop>
                                    </linearGradient>
                                    <linearGradient
                                        id="paint2_linear_88:141"
                                        x1="338"
                                        y1="167"
                                        x2="349.488"
                                        y2="200.004"
                                        gradientUnits="userSpaceOnUse"
                                    >
                                        <stop stop-color="white"></stop>
                                        <stop
                                            offset="1"
                                            stop-color="white"
                                            stop-opacity="0"
                                        ></stop>
                                    </linearGradient>
                                    <linearGradient
                                        id="paint3_linear_88:141"
                                        x1="369.5"
                                        y1="-53"
                                        x2="369.5"
                                        y2="89.9999"
                                        gradientUnits="userSpaceOnUse"
                                    >
                                        <stop stop-color="white"></stop>
                                        <stop
                                            offset="1"
                                            stop-color="white"
                                            stop-opacity="0"
                                        ></stop>
                                    </linearGradient>
                                    <linearGradient
                                        id="paint4_linear_88:141"
                                        x1="411.5"
                                        y1="-78"
                                        x2="411.5"
                                        y2="64.9999"
                                        gradientUnits="userSpaceOnUse"
                                    >
                                        <stop stop-color="white"></stop>
                                        <stop
                                            offset="1"
                                            stop-color="white"
                                            stop-opacity="0"
                                        ></stop>
                                    </linearGradient>
                                    <linearGradient
                                        id="paint5_linear_88:141"
                                        x1="372.5"
                                        y1="-69"
                                        x2="372.5"
                                        y2="73.9999"
                                        gradientUnits="userSpaceOnUse"
                                    >
                                        <stop stop-color="white"></stop>
                                        <stop
                                            offset="1"
                                            stop-color="white"
                                            stop-opacity="0"
                                        ></stop>
                                    </linearGradient>
                                    <linearGradient
                                        id="paint6_linear_88:141"
                                        x1="409.5"
                                        y1="-102"
                                        x2="409.5"
                                        y2="40.9999"
                                        gradientUnits="userSpaceOnUse"
                                    >
                                        <stop stop-color="white"></stop>
                                        <stop
                                            offset="1"
                                            stop-color="white"
                                            stop-opacity="0"
                                        ></stop>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
