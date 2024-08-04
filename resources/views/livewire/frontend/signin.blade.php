<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;

new
#[Layout('layouts.frontend')]
class extends Component {
    //
}; ?>

<div>
    <section class="relative z-10 overflow-hidden pb-16 pt-36 md:pb-20 lg:pb-28 lg:pt-[180px]">
        <div class="container">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                    <div
                        class="bg-primary dark:bg-dark mx-auto max-w-[500px] rounded-md bg-opacity-5 px-6 py-10 sm:p-[60px]">
                        <h3 class="mb-3 text-2xl font-bold text-center text-black dark:text-white sm:text-3xl">
                            Sign in to your account
                        </h3>
                        <p class="text-base font-medium text-center text-body-color mb-11">
                            Login to your account for a faster checkout.
                        </p>
                        <button
                            class="text-body-color shadow-one hover:text-primary dark:text-body-color dark:shadow-signUp mb-6 flex w-full items-center justify-center rounded-md bg-white p-3 text-base font-medium dark:bg-[#242B51] dark:hover:text-white">
                            <span class="mr-3">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_95:967)">
                                        <path
                                            d="M20.0001 10.2216C20.0122 9.53416 19.9397 8.84776 19.7844 8.17725H10.2042V11.8883H15.8277C15.7211 12.539 15.4814 13.1618 15.1229 13.7194C14.7644 14.2769 14.2946 14.7577 13.7416 15.1327L13.722 15.257L16.7512 17.5567L16.961 17.5772C18.8883 15.8328 19.9997 13.266 19.9997 10.2216"
                                            fill="#4285F4"></path>
                                        <path
                                            d="M10.2042 20.0001C12.9592 20.0001 15.2721 19.1111 16.9616 17.5778L13.7416 15.1332C12.88 15.7223 11.7235 16.1334 10.2042 16.1334C8.91385 16.126 7.65863 15.7206 6.61663 14.9747C5.57464 14.2287 4.79879 13.1802 4.39915 11.9778L4.27957 11.9878L1.12973 14.3766L1.08856 14.4888C1.93689 16.1457 3.23879 17.5387 4.84869 18.512C6.45859 19.4852 8.31301 20.0005 10.2046 20.0001"
                                            fill="#34A853"></path>
                                        <path
                                            d="M4.39911 11.9777C4.17592 11.3411 4.06075 10.673 4.05819 9.99996C4.0623 9.32799 4.17322 8.66075 4.38696 8.02225L4.38127 7.88968L1.19282 5.4624L1.08852 5.51101C0.372885 6.90343 0.00012207 8.4408 0.00012207 9.99987C0.00012207 11.5589 0.372885 13.0963 1.08852 14.4887L4.39911 11.9777Z"
                                            fill="#FBBC05"></path>
                                        <path
                                            d="M10.2042 3.86663C11.6663 3.84438 13.0804 4.37803 14.1498 5.35558L17.0296 2.59996C15.1826 0.901848 12.7366 -0.0298855 10.2042 -3.6784e-05C8.3126 -0.000477834 6.45819 0.514732 4.8483 1.48798C3.2384 2.46124 1.93649 3.85416 1.08813 5.51101L4.38775 8.02225C4.79132 6.82005 5.56974 5.77231 6.61327 5.02675C7.6568 4.28118 8.91279 3.87541 10.2042 3.86663Z"
                                            fill="#EB4335"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_95:967">
                                            <rect width="20" height="20" fill="white"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                            Sign in with Google
                        </button>
                        <div class="flex items-center justify-center mb-8">
                            <span class="bg-body-color hidden h-[1px] w-full max-w-[70px] sm:block"></span>
                            <p class="w-full px-5 text-base font-medium text-center text-body-color">
                                Or, sign in with your email
                            </p>
                            <span class="bg-body-color hidden h-[1px] w-full max-w-[70px] sm:block"></span>
                        </div>
                        <form>
                            <div class="mb-8">
                                <label for="email" class="block mb-3 text-sm font-medium text-dark dark:text-white">
                                    Your Email
                                </label>
                                <input type="email" name="email" placeholder="Enter your Email"
                                    class="text-body-color placeholder-body-color shadow-one focus:border-primary dark:shadow-signUp w-full rounded-md border border-transparent px-6 py-3 text-base outline-none focus-visible:shadow-none dark:bg-[#242B51]" />
                            </div>
                            <div class="mb-8">
                                <label for="password" class="block mb-3 text-sm font-medium text-dark dark:text-white">
                                    Your Password
                                </label>
                                <input type="password" name="password" placeholder="Enter your Password"
                                    class="text-body-color placeholder-body-color shadow-one focus:border-primary dark:shadow-signUp w-full rounded-md border border-transparent px-6 py-3 text-base outline-none focus-visible:shadow-none dark:bg-[#242B51]" />
                            </div>
                            <div class="flex flex-col justify-between mb-8 sm:flex-row sm:items-center">
                                <div class="mb-4 sm:mb-0">
                                    <label for="checkboxLabel"
                                        class="flex items-center text-sm font-medium cursor-pointer select-none text-body-color">
                                        <div class="relative">
                                            <input type="checkbox" id="checkboxLabel" class="sr-only" />
                                            <div
                                                class="flex items-center justify-center w-5 h-5 mr-4 border rounded box border-body-color border-opacity-20 dark:border-white dark:border-opacity-10">
                                                <span class="opacity-0">
                                                    <svg width="11" height="8" viewBox="0 0 11 8" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M10.0915 0.951972L10.0867 0.946075L10.0813 0.940568C9.90076 0.753564 9.61034 0.753146 9.42927 0.939309L4.16201 6.22962L1.58507 3.63469C1.40401 3.44841 1.11351 3.44879 0.932892 3.63584C0.755703 3.81933 0.755703 4.10875 0.932892 4.29224L0.932878 4.29225L0.934851 4.29424L3.58046 6.95832C3.73676 7.11955 3.94983 7.2 4.1473 7.2C4.36196 7.2 4.55963 7.11773 4.71406 6.9584L10.0468 1.60234C10.2436 1.4199 10.2421 1.1339 10.0915 0.951972ZM4.2327 6.30081L4.2317 6.2998C4.23206 6.30015 4.23237 6.30049 4.23269 6.30082L4.2327 6.30081Z"
                                                            fill="#3056D3" stroke="#3056D3" stroke-width="0.4"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                        Keep me signed in
                                    </label>
                                </div>
                                <div>
                                    <a href="#0" class="text-sm font-medium text-primary hover:underline">
                                        Forgot Password?
                                    </a>
                                </div>
                            </div>
                            <div class="mb-6">
                                <button
                                    class="flex items-center justify-center w-full py-4 text-base font-medium text-white transition duration-300 ease-in-out rounded-md bg-primary hover:shadow-signUp px-9 hover:bg-opacity-80">
                                    Sign in
                                </button>
                            </div>
                        </form>
                        <p class="text-base font-medium text-center text-body-color">
                            Don’t you have an account?
                            <a class="text-primary hover:underline" href="../signup/index.html">
                                Sign up
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute left-0 top-0 z-[-1]">
            <svg width="1440" height="969" viewBox="0 0 1440 969" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0_95:1005" style="mask-type: alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="1440"
                    height="969">
                    <rect width="1440" height="969" fill="#090E34"></rect>
                </mask>
                <g mask="url(#mask0_95:1005)">
                    <path opacity="0.1" d="M1086.96 297.978L632.959 554.978L935.625 535.926L1086.96 297.978Z"
                        fill="url(#paint0_linear_95:1005)"></path>
                    <path opacity="0.1" d="M1324.5 755.5L1450 687V886.5L1324.5 967.5L-10 288L1324.5 755.5Z"
                        fill="url(#paint1_linear_95:1005)"></path>
                </g>
                <defs>
                    <linearGradient id="paint0_linear_95:1005" x1="1178.4" y1="151.853" x2="780.959"
                        y2="453.581" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7"></stop>
                        <stop offset="1" stop-color="#4A6CF7" stop-opacity="0"></stop>
                    </linearGradient>
                    <linearGradient id="paint1_linear_95:1005" x1="160.5" y1="220" x2="1099.45"
                        y2="1192.04" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7"></stop>
                        <stop offset="1" stop-color="#4A6CF7" stop-opacity="0"></stop>
                    </linearGradient>
                </defs>
            </svg>
        </div>
    </section>
</div>
