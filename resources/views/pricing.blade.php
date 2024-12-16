@extends('layouts.master')
@section('title')
    Pricing
@endsection
@section('content')
    <x-breadcrumb title="Pricing" pagetitle="Components" />

    <!-- Start All Card -->
    <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
        <div class="grid grid-cols-1 gap-4">
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Pricing Plan</h2>
                <div class="mx-auto max-w-7xl">
                    <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 xl:grid-cols-3">
                        <div class="py-10 border rounded-md border-black/10 dark:border-darkborder px-7">
                            <h2 class="text-6xl font-semibold dark:text-white"><span class="text-lg">$</span>59<span
                                    class="text-lg text-muted dark:text-darkmuted">/ Month</span></h2>
                            <div class="py-7">
                                <h4 class="text-2xl font-semibold dark:text-white">Personal</h4>
                                <p class="mt-2 text-muted dark:text-darkmuted">Best Choice For Individuals</p>
                            </div>
                            <div class="py-4">
                                <a href="javaScript:;"
                                    class="block w-full py-4 text-lg text-center transition-all duration-300 border rounded btn text-purple border-purple hover:bg-purple hover:text-white">Buy
                                    Now</a>
                            </div>
                            <div class="mt-8 space-y-4">
                                <p class="flex items-center gap-2 mt-0 text-muted dark:text-darkmuted">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 text-purple">
                                        <path fill="currentColor"
                                            d="M11.602 13.7599L13.014 15.1719L21.4795 6.7063L22.8938 8.12051L13.014 18.0003L6.65 11.6363L8.06421 10.2221L10.189 12.3469L11.6025 13.7594L11.602 13.7599ZM11.6037 10.9322L16.5563 5.97949L17.9666 7.38977L13.014 12.3424L11.6037 10.9322ZM8.77698 16.5873L7.36396 18.0003L1 11.6363L2.41421 10.2221L3.82723 11.6352L3.82604 11.6363L8.77698 16.5873Z">
                                        </path>
                                    </svg>
                                    <span class="font-semibold text-black dark:text-white">100TB</span> CDN Bandwidth
                                </p>
                                <p class="flex items-center gap-2 mt-0 text-muted dark:text-darkmuted">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 text-purple">
                                        <path fill="currentColor"
                                            d="M11.602 13.7599L13.014 15.1719L21.4795 6.7063L22.8938 8.12051L13.014 18.0003L6.65 11.6363L8.06421 10.2221L10.189 12.3469L11.6025 13.7594L11.602 13.7599ZM11.6037 10.9322L16.5563 5.97949L17.9666 7.38977L13.014 12.3424L11.6037 10.9322ZM8.77698 16.5873L7.36396 18.0003L1 11.6363L2.41421 10.2221L3.82723 11.6352L3.82604 11.6363L8.77698 16.5873Z">
                                        </path>
                                    </svg>
                                    API/Formulas Support*
                                </p>
                                <p class="flex items-center gap-2 mt-0 text-muted dark:text-darkmuted">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 text-purple">
                                        <path fill="currentColor"
                                            d="M11.602 13.7599L13.014 15.1719L21.4795 6.7063L22.8938 8.12051L13.014 18.0003L6.65 11.6363L8.06421 10.2221L10.189 12.3469L11.6025 13.7594L11.602 13.7599ZM11.6037 10.9322L16.5563 5.97949L17.9666 7.38977L13.014 12.3424L11.6037 10.9322ZM8.77698 16.5873L7.36396 18.0003L1 11.6363L2.41421 10.2221L3.82723 11.6352L3.82604 11.6363L8.77698 16.5873Z">
                                        </path>
                                    </svg>
                                    <span class="font-semibold text-black dark:text-white">99.99%</span> Uptime Guarantee
                                </p>
                                <p class="flex items-center gap-2 mt-0 text-muted dark:text-darkmuted">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 text-purple">
                                        <path fill="currentColor"
                                            d="M11.602 13.7599L13.014 15.1719L21.4795 6.7063L22.8938 8.12051L13.014 18.0003L6.65 11.6363L8.06421 10.2221L10.189 12.3469L11.6025 13.7594L11.602 13.7599ZM11.6037 10.9322L16.5563 5.97949L17.9666 7.38977L13.014 12.3424L11.6037 10.9322ZM8.77698 16.5873L7.36396 18.0003L1 11.6363L2.41421 10.2221L3.82723 11.6352L3.82604 11.6363L8.77698 16.5873Z">
                                        </path>
                                    </svg>
                                    <span class="font-semibold text-black dark:text-white">6 Months</span> Support
                                </p>
                                <p class="flex items-center gap-2 mt-0 text-muted dark:text-darkmuted">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 text-purple">
                                        <path fill="currentColor"
                                            d="M11.602 13.7599L13.014 15.1719L21.4795 6.7063L22.8938 8.12051L13.014 18.0003L6.65 11.6363L8.06421 10.2221L10.189 12.3469L11.6025 13.7594L11.602 13.7599ZM11.6037 10.9322L16.5563 5.97949L17.9666 7.38977L13.014 12.3424L11.6037 10.9322ZM8.77698 16.5873L7.36396 18.0003L1 11.6363L2.41421 10.2221L3.82723 11.6352L3.82604 11.6363L8.77698 16.5873Z">
                                        </path>
                                    </svg>
                                    Enterprise SLA
                                </p>
                            </div>
                        </div>
                        <div class="py-10 border rounded-md border-black/10 dark:border-darkborder px-7">
                            <h2 class="text-6xl font-semibold dark:text-white"><span class="text-lg">$</span>89<span
                                    class="text-lg text-muted dark:text-darkmuted">/ Month</span></h2>
                            <div class="py-7">
                                <h4 class="text-2xl font-semibold dark:text-white">Business</h4>
                                <p class="mt-2 text-muted dark:text-darkmuted">Best Choice For Priority Support</p>
                            </div>
                            <div class="py-4">
                                <a href="javaScript:;"
                                    class="block w-full py-4 text-lg text-center transition-all duration-300 border rounded btn text-purple border-purple hover:bg-purple hover:text-white">Buy
                                    Now</a>
                            </div>
                            <div class="mt-8 space-y-4">
                                <p class="flex items-center gap-2 mt-0 text-muted dark:text-darkmuted">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 text-purple">
                                        <path fill="currentColor"
                                            d="M11.602 13.7599L13.014 15.1719L21.4795 6.7063L22.8938 8.12051L13.014 18.0003L6.65 11.6363L8.06421 10.2221L10.189 12.3469L11.6025 13.7594L11.602 13.7599ZM11.6037 10.9322L16.5563 5.97949L17.9666 7.38977L13.014 12.3424L11.6037 10.9322ZM8.77698 16.5873L7.36396 18.0003L1 11.6363L2.41421 10.2221L3.82723 11.6352L3.82604 11.6363L8.77698 16.5873Z">
                                        </path>
                                    </svg>
                                    <span class="font-semibold text-black dark:text-white">100TB</span> CDN Bandwidth
                                </p>
                                <p class="flex items-center gap-2 mt-0 text-muted dark:text-darkmuted">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 text-purple">
                                        <path fill="currentColor"
                                            d="M11.602 13.7599L13.014 15.1719L21.4795 6.7063L22.8938 8.12051L13.014 18.0003L6.65 11.6363L8.06421 10.2221L10.189 12.3469L11.6025 13.7594L11.602 13.7599ZM11.6037 10.9322L16.5563 5.97949L17.9666 7.38977L13.014 12.3424L11.6037 10.9322ZM8.77698 16.5873L7.36396 18.0003L1 11.6363L2.41421 10.2221L3.82723 11.6352L3.82604 11.6363L8.77698 16.5873Z">
                                        </path>
                                    </svg>
                                    API/Formulas Support*
                                </p>
                                <p class="flex items-center gap-2 mt-0 text-muted dark:text-darkmuted">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 text-purple">
                                        <path fill="currentColor"
                                            d="M11.602 13.7599L13.014 15.1719L21.4795 6.7063L22.8938 8.12051L13.014 18.0003L6.65 11.6363L8.06421 10.2221L10.189 12.3469L11.6025 13.7594L11.602 13.7599ZM11.6037 10.9322L16.5563 5.97949L17.9666 7.38977L13.014 12.3424L11.6037 10.9322ZM8.77698 16.5873L7.36396 18.0003L1 11.6363L2.41421 10.2221L3.82723 11.6352L3.82604 11.6363L8.77698 16.5873Z">
                                        </path>
                                    </svg>
                                    <span class="font-semibold text-black dark:text-white">99.99%</span> Uptime Guarantee
                                </p>
                                <p class="flex items-center gap-2 mt-0 text-muted dark:text-darkmuted">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 text-purple">
                                        <path fill="currentColor"
                                            d="M11.602 13.7599L13.014 15.1719L21.4795 6.7063L22.8938 8.12051L13.014 18.0003L6.65 11.6363L8.06421 10.2221L10.189 12.3469L11.6025 13.7594L11.602 13.7599ZM11.6037 10.9322L16.5563 5.97949L17.9666 7.38977L13.014 12.3424L11.6037 10.9322ZM8.77698 16.5873L7.36396 18.0003L1 11.6363L2.41421 10.2221L3.82723 11.6352L3.82604 11.6363L8.77698 16.5873Z">
                                        </path>
                                    </svg>
                                    <span class="font-semibold text-black dark:text-white">1 Year</span> Support
                                </p>
                                <p class="flex items-center gap-2 mt-0 text-muted dark:text-darkmuted">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 text-purple">
                                        <path fill="currentColor"
                                            d="M11.602 13.7599L13.014 15.1719L21.4795 6.7063L22.8938 8.12051L13.014 18.0003L6.65 11.6363L8.06421 10.2221L10.189 12.3469L11.6025 13.7594L11.602 13.7599ZM11.6037 10.9322L16.5563 5.97949L17.9666 7.38977L13.014 12.3424L11.6037 10.9322ZM8.77698 16.5873L7.36396 18.0003L1 11.6363L2.41421 10.2221L3.82723 11.6352L3.82604 11.6363L8.77698 16.5873Z">
                                        </path>
                                    </svg>
                                    Enterprise SLA
                                </p>
                            </div>
                        </div>
                        <div class="relative py-10 border rounded-md border-black/10 dark:border-darkborder px-7">
                            <div
                                class="absolute top-0 inline-block gap-2 px-3 py-2 rounded-b-lg ltr:-translate-x-1/2 rtl:translate-x-1/2 bg-purple/20 text-purple ltr:left-1/2 rtl:right-1/2">
                                <p class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                        <path fill="currentColor"
                                            d="M5 4.60434V13.7889C5 15.1263 5.6684 16.3752 6.7812 17.1171L12 20.5963L17.2188 17.1171C18.3316 16.3752 19 15.1263 19 13.7889V4.60434L12 3.04879L5 4.60434ZM3.78307 2.82598L12 1L20.2169 2.82598C20.6745 2.92766 21 3.33347 21 3.80217V13.7889C21 15.795 19.9974 17.6684 18.3282 18.7812L12 23L5.6718 18.7812C4.00261 17.6684 3 15.795 3 13.7889V3.80217C3 3.33347 3.32553 2.92766 3.78307 2.82598ZM12 13.5L9.06107 15.0451L9.62236 11.7725L7.24472 9.45492L10.5305 8.97746L12 6L13.4695 8.97746L16.7553 9.45492L14.3776 11.7725L14.9389 15.0451L12 13.5Z">
                                        </path>
                                    </svg>
                                    Most Popular
                                </p>
                            </div>
                            <h2 class="text-6xl font-semibold dark:text-white"><span class="text-lg">$</span>99<span
                                    class="text-lg text-muted dark:text-darkmuted">/ Month</span></h2>
                            <div class="py-7">
                                <h4 class="text-2xl font-semibold dark:text-white">Enterprise</h4>
                                <p class="mt-2 text-muted dark:text-darkmuted">Explore select, our premuium solution for
                                    businesses.</p>
                            </div>
                            <div class="py-4">
                                <a href="javaScript:;"
                                    class="btn bg-purple py-4 text-lg w-full block text-center border border-purple rounded text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]">Buy
                                    Now</a>
                            </div>
                            <div class="mt-8 space-y-4">
                                <p class="flex items-center gap-2 mt-0 text-muted dark:text-darkmuted">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="w-5 h-5 text-purple">
                                        <path fill="currentColor"
                                            d="M11.602 13.7599L13.014 15.1719L21.4795 6.7063L22.8938 8.12051L13.014 18.0003L6.65 11.6363L8.06421 10.2221L10.189 12.3469L11.6025 13.7594L11.602 13.7599ZM11.6037 10.9322L16.5563 5.97949L17.9666 7.38977L13.014 12.3424L11.6037 10.9322ZM8.77698 16.5873L7.36396 18.0003L1 11.6363L2.41421 10.2221L3.82723 11.6352L3.82604 11.6363L8.77698 16.5873Z">
                                        </path>
                                    </svg>
                                    <span class="font-semibold text-black dark:text-white">100TB</span> CDN Bandwidth
                                </p>
                                <p class="flex items-center gap-2 mt-0 text-muted dark:text-darkmuted">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="w-5 h-5 text-purple">
                                        <path fill="currentColor"
                                            d="M11.602 13.7599L13.014 15.1719L21.4795 6.7063L22.8938 8.12051L13.014 18.0003L6.65 11.6363L8.06421 10.2221L10.189 12.3469L11.6025 13.7594L11.602 13.7599ZM11.6037 10.9322L16.5563 5.97949L17.9666 7.38977L13.014 12.3424L11.6037 10.9322ZM8.77698 16.5873L7.36396 18.0003L1 11.6363L2.41421 10.2221L3.82723 11.6352L3.82604 11.6363L8.77698 16.5873Z">
                                        </path>
                                    </svg>
                                    API/Formulas Support*
                                </p>
                                <p class="flex items-center gap-2 mt-0 text-muted dark:text-darkmuted">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="w-5 h-5 text-purple">
                                        <path fill="currentColor"
                                            d="M11.602 13.7599L13.014 15.1719L21.4795 6.7063L22.8938 8.12051L13.014 18.0003L6.65 11.6363L8.06421 10.2221L10.189 12.3469L11.6025 13.7594L11.602 13.7599ZM11.6037 10.9322L16.5563 5.97949L17.9666 7.38977L13.014 12.3424L11.6037 10.9322ZM8.77698 16.5873L7.36396 18.0003L1 11.6363L2.41421 10.2221L3.82723 11.6352L3.82604 11.6363L8.77698 16.5873Z">
                                        </path>
                                    </svg>
                                    <span class="font-semibold text-black dark:text-white">99.99%</span> Uptime Guarantee
                                </p>
                                <p class="flex items-center gap-2 mt-0 text-muted dark:text-darkmuted">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="w-5 h-5 text-purple">
                                        <path fill="currentColor"
                                            d="M11.602 13.7599L13.014 15.1719L21.4795 6.7063L22.8938 8.12051L13.014 18.0003L6.65 11.6363L8.06421 10.2221L10.189 12.3469L11.6025 13.7594L11.602 13.7599ZM11.6037 10.9322L16.5563 5.97949L17.9666 7.38977L13.014 12.3424L11.6037 10.9322ZM8.77698 16.5873L7.36396 18.0003L1 11.6363L2.41421 10.2221L3.82723 11.6352L3.82604 11.6363L8.77698 16.5873Z">
                                        </path>
                                    </svg>
                                    <span class="font-semibold text-black dark:text-white">Unlimited</span> Support
                                </p>
                                <p class="flex items-center gap-2 mt-0 text-muted dark:text-darkmuted">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="w-5 h-5 text-purple">
                                        <path fill="currentColor"
                                            d="M11.602 13.7599L13.014 15.1719L21.4795 6.7063L22.8938 8.12051L13.014 18.0003L6.65 11.6363L8.06421 10.2221L10.189 12.3469L11.6025 13.7594L11.602 13.7599ZM11.6037 10.9322L16.5563 5.97949L17.9666 7.38977L13.014 12.3424L11.6037 10.9322ZM8.77698 16.5873L7.36396 18.0003L1 11.6363L2.41421 10.2221L3.82723 11.6352L3.82604 11.6363L8.77698 16.5873Z">
                                        </path>
                                    </svg>
                                    Enterprise SLA
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Card -->
@endsection
