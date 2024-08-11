<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;

new #[Layout("layouts.frontend")] class extends Component {
    //
}; ?>

<div>
    <x-frontend.breadcrumb
        :links="[
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'Contact'],
        ]"
        :title="'Services'"
        :description='"Our services include web development, digital marketing, technical support, SEO optimization, custom solutions, and consulting services."'
    ></x-frontend.breadcrumb>
    <div>
        <section class="relative z-10 overflow-hidden pt-28 lg:pt-[150px]">
            <div class="container">
                <div class="flex flex-wrap -mx-4">
                    <!-- Card 1 -->
                    <div class="w-full px-4 mb-8 md:w-1/2 lg:w-1/3">
                        <div
                            class="p-6 bg-white rounded-lg shadow-lg dark:bg-gray-800"
                        >
                            <div class="mb-4">
                                <img
                                    src="../images/services/web-development.svg"
                                    alt="Web Development"
                                    class="object-cover w-full h-48 rounded-lg"
                                />
                            </div>
                            <h3
                                class="mb-3 text-xl font-bold text-black dark:text-white"
                            >
                                Web Development
                            </h3>
                            <p
                                class="text-base font-medium leading-relaxed text-body-color"
                            >
                                We build responsive, user-friendly websites
                                tailored to your business needs.
                            </p>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="w-full px-4 mb-8 md:w-1/2 lg:w-1/3">
                        <div
                            class="p-6 bg-white rounded-lg shadow-lg dark:bg-gray-800"
                        >
                            <div class="mb-4">
                                <img
                                    src="../images/services/digital-marketing.svg"
                                    alt="Digital Marketing"
                                    class="object-cover w-full h-48 rounded-lg"
                                />
                            </div>
                            <h3
                                class="mb-3 text-xl font-bold text-black dark:text-white"
                            >
                                Digital Marketing
                            </h3>
                            <p
                                class="text-base font-medium leading-relaxed text-body-color"
                            >
                                Our digital marketing services help you reach a
                                wider audience and boost your online presence.
                            </p>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="w-full px-4 mb-8 md:w-1/2 lg:w-1/3">
                        <div
                            class="p-6 bg-white rounded-lg shadow-lg dark:bg-gray-800"
                        >
                            <div class="mb-4">
                                <img
                                    src="../images/services/technical-support.svg"
                                    alt="Technical Support"
                                    class="object-cover w-full h-48 rounded-lg"
                                />
                            </div>
                            <h3
                                class="mb-3 text-xl font-bold text-black dark:text-white"
                            >
                                Technical Support
                            </h3>
                            <p
                                class="text-base font-medium leading-relaxed text-body-color"
                            >
                                We provide ongoing technical support to ensure
                                your website runs smoothly.
                            </p>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="w-full px-4 mb-8 md:w-1/2 lg:w-1/3">
                        <div
                            class="p-6 bg-white rounded-lg shadow-lg dark:bg-gray-800"
                        >
                            <div class="mb-4">
                                <img
                                    src="../images/services/seo.svg"
                                    alt="SEO Optimization"
                                    class="object-cover w-full h-48 rounded-lg"
                                />
                            </div>
                            <h3
                                class="mb-3 text-xl font-bold text-black dark:text-white"
                            >
                                SEO Optimization
                            </h3>
                            <p
                                class="text-base font-medium leading-relaxed text-body-color"
                            >
                                Our SEO services will improve your website’s
                                visibility and ranking on search engines.
                            </p>
                        </div>
                    </div>
                    <!-- Card 5 -->
                    <div class="w-full px-4 mb-8 md:w-1/2 lg:w-1/3">
                        <div
                            class="p-6 bg-white rounded-lg shadow-lg dark:bg-gray-800"
                        >
                            <div class="mb-4">
                                <img
                                    src="../images/services/custom-solutions.svg"
                                    alt="Custom Solutions"
                                    class="object-cover w-full h-48 rounded-lg"
                                />
                            </div>
                            <h3
                                class="mb-3 text-xl font-bold text-black dark:text-white"
                            >
                                Custom Solutions
                            </h3>
                            <p
                                class="text-base font-medium leading-relaxed text-body-color"
                            >
                                We provide custom solutions tailored to your
                                unique business requirements.
                            </p>
                        </div>
                    </div>
                    <!-- Card 6 -->
                    <div class="w-full px-4 mb-8 md:w-1/2 lg:w-1/3">
                        <div
                            class="p-6 bg-white rounded-lg shadow-lg dark:bg-gray-800"
                        >
                            <div class="mb-4">
                                <img
                                    src="../images/services/consulting.svg"
                                    alt="Consulting Services"
                                    class="object-cover w-full h-48 rounded-lg"
                                />
                            </div>
                            <h3
                                class="mb-3 text-xl font-bold text-black dark:text-white"
                            >
                                Consulting Services
                            </h3>
                            <p
                                class="text-base font-medium leading-relaxed text-body-color"
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
