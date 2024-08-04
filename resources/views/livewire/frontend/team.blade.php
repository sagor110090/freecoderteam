<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;

new #[Layout("layouts.frontend")] class extends Component {
    //
}; ?>

<!-- Team Section -->
<div>
    <section class="relative z-10 overflow-hidden pt-28 lg:pt-[150px]">
        <div class="container">
            <div class="-mx-4 flex flex-wrap items-center">
                <div class="w-full px-4 md:w-8/12 lg:w-7/12">
                    <div class="mb-8 max-w-[570px] md:mb-0 lg:mb-12">
                        <h1
                            class="mb-5 text-2xl font-bold text-black dark:text-white sm:text-3xl"
                        >
                            Meet Our Team
                        </h1>
                        <p
                            class="text-body-color text-base font-medium leading-relaxed"
                        >
                            Our team of experienced professionals is dedicated
                            to helping your business succeed. Get to know the
                            people behind our success.
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
                                Team
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
                    <!-- Team Member 1 -->
                    <div class="mb-8 w-full px-4 md:w-1/2 lg:w-1/3">
                        <div
                            class="rounded-lg bg-white p-6 shadow-lg dark:bg-gray-800"
                        >
                            <div class="mb-4">
                                <img
                                    src="../images/team/member1.jpg"
                                    alt="Team Member 1"
                                    class="h-48 w-full rounded-lg object-cover"
                                />
                            </div>
                            <h3
                                class="mb-3 text-xl font-bold text-black dark:text-white"
                            >
                                John Doe
                            </h3>
                            <p
                                class="text-body-color text-base font-medium leading-relaxed"
                            >
                                CEO & Founder
                            </p>
                            <p
                                class="text-body-color text-base font-medium leading-relaxed"
                            >
                                John is a visionary leader with over 20 years of
                                experience in the industry.
                            </p>
                        </div>
                    </div>
                    <!-- Team Member 2 -->
                    <div class="mb-8 w-full px-4 md:w-1/2 lg:w-1/3">
                        <div
                            class="rounded-lg bg-white p-6 shadow-lg dark:bg-gray-800"
                        >
                            <div class="mb-4">
                                <img
                                    src="../images/team/member2.jpg"
                                    alt="Team Member 2"
                                    class="h-48 w-full rounded-lg object-cover"
                                />
                            </div>
                            <h3
                                class="mb-3 text-xl font-bold text-black dark:text-white"
                            >
                                Jane Smith
                            </h3>
                            <p
                                class="text-body-color text-base font-medium leading-relaxed"
                            >
                                Chief Technology Officer
                            </p>
                            <p
                                class="text-body-color text-base font-medium leading-relaxed"
                            >
                                Jane leads our tech team with a focus on
                                innovation and excellence.
                            </p>
                        </div>
                    </div>
                    <!-- Team Member 3 -->
                    <div class="mb-8 w-full px-4 md:w-1/2 lg:w-1/3">
                        <div
                            class="rounded-lg bg-white p-6 shadow-lg dark:bg-gray-800"
                        >
                            <div class="mb-4">
                                <img
                                    src="../images/team/member3.jpg"
                                    alt="Team Member 3"
                                    class="h-48 w-full rounded-lg object-cover"
                                />
                            </div>
                            <h3
                                class="mb-3 text-xl font-bold text-black dark:text-white"
                            >
                                Michael Johnson
                            </h3>
                            <p
                                class="text-body-color text-base font-medium leading-relaxed"
                            >
                                Marketing Manager
                            </p>
                            <p
                                class="text-body-color text-base font-medium leading-relaxed"
                            >
                                Michael is responsible for our marketing
                                strategies and campaigns.
                            </p>
                        </div>
                    </div>
                    <!-- Team Member 4 -->
                    <div class="mb-8 w-full px-4 md:w-1/2 lg:w-1/3">
                        <div
                            class="rounded-lg bg-white p-6 shadow-lg dark:bg-gray-800"
                        >
                            <div class="mb-4">
                                <img
                                    src="../images/team/member4.jpg"
                                    alt="Team Member 4"
                                    class="h-48 w-full rounded-lg object-cover"
                                />
                            </div>
                            <h3
                                class="mb-3 text-xl font-bold text-black dark:text-white"
                            >
                                Emily Davis
                            </h3>
                            <p
                                class="text-body-color text-base font-medium leading-relaxed"
                            >
                                Lead Developer
                            </p>
                            <p
                                class="text-body-color text-base font-medium leading-relaxed"
                            >
                                Emily is an expert in web development and leads
                                our development team.
                            </p>
                        </div>
                    </div>
                    <!-- Team Member 5 -->
                    <div class="mb-8 w-full px-4 md:w-1/2 lg:w-1/3">
                        <div
                            class="rounded-lg bg-white p-6 shadow-lg dark:bg-gray-800"
                        >
                            <div class="mb-4">
                                <img
                                    src="../images/team/member5.jpg"
                                    alt="Team Member 5"
                                    class="h-48 w-full rounded-lg object-cover"
                                />
                            </div>
                            <h3
                                class="mb-3 text-xl font-bold text-black dark:text-white"
                            >
                                Chris Brown
                            </h3>
                            <p
                                class="text-body-color text-base font-medium leading-relaxed"
                            >
                                Project Manager
                            </p>
                            <p
                                class="text-body-color text-base font-medium leading-relaxed"
                            >
                                Chris ensures that all projects are completed on
                                time and within budget.
                            </p>
                        </div>
                    </div>
                    <!-- Team Member 6 -->
                    <div class="mb-8 w-full px-4 md:w-1/2 lg:w-1/3">
                        <div
                            class="rounded-lg bg-white p-6 shadow-lg dark:bg-gray-800"
                        >
                            <div class="mb-4">
                                <img
                                    src="../images/team/member6.jpg"
                                    alt="Team Member 6"
                                    class="h-48 w-full rounded-lg object-cover"
                                />
                            </div>
                            <h3
                                class="mb-3 text-xl font-bold text-black dark:text-white"
                            >
                                Anna Lee
                            </h3>
                            <p
                                class="text-body-color text-base font-medium leading-relaxed"
                            >
                                UI/UX Designer
                            </p>
                            <p
                                class="text-body-color text-base font-medium leading-relaxed"
                            >
                                Anna creates stunning user experiences and
                                interfaces for our clients.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- End Team Section -->
