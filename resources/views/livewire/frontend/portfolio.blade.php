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
                            Our Portfolio
                        </h1>
                        <p
                            class="text-body-color text-base font-medium leading-relaxed"
                        >
                            Explore our diverse range of projects that
                            demonstrate our expertise and commitment to
                            excellence. From web applications to mobile apps,
                            our portfolio showcases the depth and breadth of our
                            capabilities.
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
                                Portfolio
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
        <section
            class="relative z-10 overflow-hidden pt-28 lg:pt-[150px]"
            x-data="{
                activeTab: 'all',
                tabs: [
                    { name: 'All', value: 'all' },
                    { name: 'Web Development', value: 'web-development' },
                    { name: 'Mobile Apps', value: 'mobile-apps' },
                    { name: 'UI/UX Design', value: 'ui-ux-design' },
                ],
                projects: [
                    {
                        id: 1,
                        category: 'web-development',
                        name: 'Project 1',
                        image: '../images/portfolio/project1.jpg',
                        description:
                            'A brief description of Project 1, highlighting key features and technologies used.',
                    },
                    {
                        id: 2,
                        category: 'mobile-apps',
                        name: 'Project 2',
                        image: '../images/portfolio/project2.jpg',
                        description:
                            'A brief description of Project 2, highlighting key features and technologies used.',
                    },
                    {
                        id: 3,
                        category: 'ui-ux-design',
                        name: 'Project 3',
                        image: '../images/portfolio/project3.jpg',
                        description:
                            'A brief description of Project 3, highlighting key features and technologies used.',
                    },
                ],
            }"
        >
            <div class="container">
                <div class="mb-8 flex justify-center">
                    <template x-for="tab in tabs" :key="tab.value">
                        <button
                            @click="activeTab = tab.value"
                            x-bind:class="{ 'bg-primary text-green-400': activeTab === tab.value }"
                            class="mx-2 rounded bg-white px-4 py-2 font-bold text-black shadow hover:bg-gray-100"
                            x-text="tab.name"
                        ></button>
                    </template>
                </div>
                <div class="-mx-4 flex flex-wrap">
                    <template
                        x-for="(project, index) in projects"
                        :key="index"
                    >
                        <div
                            class="mb-8 w-full px-4 md:w-1/2 lg:w-1/3"
                            x-show="activeTab === project.category || activeTab === 'all'"
                            x-transition:enter="transition duration-300 ease-out"
                            x-transition:enter-start="scale-90 transform opacity-0"
                            x-transition:enter-end="scale-100 transform opacity-100"
                        >
                            <div
                                class="rounded-lg bg-white p-6 shadow-lg dark:bg-gray-800"
                            >
                                <div class="mb-4">
                                    <img
                                        src="../images/portfolio/project1.jpg"
                                        alt="Project 1"
                                        class="h-48 w-full rounded-lg object-cover"
                                    />
                                </div>
                                <h3
                                    class="mb-3 text-xl font-bold text-black dark:text-white"
                                    x-text="project.name"
                                ></h3>
                                <p
                                    class="text-body-color text-base font-medium leading-relaxed"
                                    x-text="project.description"
                                ></p>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </section>
    </div>
</div>
