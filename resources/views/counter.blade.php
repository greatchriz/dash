@extends('layouts.master')
@section('title')
    Counter
@endsection
@section('content')
    <x-breadcrumb title="Counter" pagetitle="Components" />

    <!-- Start All Card -->
    <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
        <div class="grid grid-cols-1 gap-4">
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Counter</h2>
                <div>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-4" x-data="timer(new Date().setDate(new Date().getDate() + 1))"
                        x-init="init();">
                        <div
                            class="px-5 mt-4 text-center bg-white border rounded py-9 border-black/10 dark:bg-darklight dark:border-darkborder">
                            <div
                                class="bg-[#f9fbfd] dark:bg-white/5 text-purple h-12 w-12 flex items-center rounded mx-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-8 h-8 mx-auto">
                                    <path fill="currentColor"
                                        d="M12.0006 15.968L16.2473 18.3451L15.2988 13.5717L18.8719 10.2674L14.039 9.69434L12.0006 5.27502V15.968ZM12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="mt-6 text-2xl font-semibold dark:text-white" x-data="{ current: 0, target: 4.92, time: 900 }"
                                x-init="() => {
                                    start = current;
                                    const interval = Math.max(time / (target - start), 5);
                                    const step = (target - start) / (time / interval);
                                    const handle = setInterval(() => {
                                        if (current < target)
                                            current += step
                                        else {
                                            clearInterval(handle);
                                            current = target
                                        }
                                    }, interval)
                                }">
                                <span x-text="current"></span>/5
                            </h3>
                            <p class="mt-1 text-muted dark:text-darkmuted">Average ratings</p>
                        </div>
                        <div
                            class="py-9 mt-4 px-[18px] rounded-[5px] border border-[#e7e7e7] bg-white text-center dark:bg-darklight dark:border-darkborder">
                            <div
                                class="bg-[#f9fbfd] dark:bg-white/5 text-purple h-12 w-12 flex items-center rounded mx-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-8 h-8 mx-auto">
                                    <path fill="currentColor"
                                        d="M4 19H20V12H22V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V12H4V19ZM14 9H19L12 16L5 9H10V3H14V9Z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="mt-6 text-2xl font-semibold dark:text-white" x-data="{ current: 0, target: 260, time: 900 }"
                                x-init="() => {
                                    start = current;
                                    const interval = Math.max(time / (target - start), 5);
                                    const step = (target - start) / (time / interval);
                                    const handle = setInterval(() => {
                                        if (current < target)
                                            current += step
                                        else {
                                            clearInterval(handle);
                                            current = target
                                        }
                                    }, interval)
                                }">
                                <span x-text="Math.round(current)"></span>K+
                            </h3>
                            <p class="mt-1 text-muted dark:text-darkmuted">Monthly Installs</p>
                        </div>
                        <div
                            class="py-9 mt-4 px-[18px] rounded-[5px] border border-[#e7e7e7] bg-white text-center dark:bg-darklight dark:border-darkborder">
                            <div
                                class="bg-[#f9fbfd] dark:bg-white/5 text-purple h-12 w-12 flex items-center rounded mx-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-8 h-8 mx-auto">
                                    <path fill="currentColor"
                                        d="M9 2V4H5L4.999 14H18.999L19 4H15V2H20C20.5523 2 21 2.44772 21 3V21C21 21.5523 20.5523 22 20 22H4C3.44772 22 3 21.5523 3 21V3C3 2.44772 3.44772 2 4 2H9ZM18.999 16H4.999L5 20H19L18.999 16ZM17 17V19H15V17H17ZM13 2V7H16L12 11L8 7H11V2H13Z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="mt-6 text-2xl font-semibold dark:text-white" x-data="{ current: 0, target: 40, time: 900 }"
                                x-init="() => {
                                    start = current;
                                    const interval = Math.max(time / (target - start), 5);
                                    const step = (target - start) / (time / interval);
                                    const handle = setInterval(() => {
                                        if (current < target)
                                            current += step
                                        else {
                                            clearInterval(handle);
                                            current = target
                                        }
                                    }, interval)
                                }">
                                <span x-text="Math.round(current)"></span>K+
                            </h3>
                            <p class="mt-1 text-muted dark:text-darkmuted">Weekly Downloads</p>
                        </div>
                        <div
                            class="py-9 mt-4 px-[18px] rounded-[5px] border border-[#e7e7e7] bg-white text-center dark:bg-darklight dark:border-darkborder">
                            <div
                                class="bg-[#f9fbfd] dark:bg-white/5 text-purple h-12 w-12 flex items-center rounded mx-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-8 h-8 mx-auto">
                                    <path fill="currentColor"
                                        d="M14.5998 8.00033H21C22.1046 8.00033 23 8.89576 23 10.0003V12.1047C23 12.3659 22.9488 12.6246 22.8494 12.8662L19.755 20.3811C19.6007 20.7558 19.2355 21.0003 18.8303 21.0003H2C1.44772 21.0003 1 20.5526 1 20.0003V10.0003C1 9.44804 1.44772 9.00033 2 9.00033H5.48184C5.80677 9.00033 6.11143 8.84246 6.29881 8.57701L11.7522 0.851355C11.8947 0.649486 12.1633 0.581978 12.3843 0.692483L14.1984 1.59951C15.25 2.12534 15.7931 3.31292 15.5031 4.45235L14.5998 8.00033ZM7 10.5878V19.0003H18.1606L21 12.1047V10.0003H14.5998C13.2951 10.0003 12.3398 8.77128 12.6616 7.50691L13.5649 3.95894C13.6229 3.73105 13.5143 3.49353 13.3039 3.38837L12.6428 3.0578L7.93275 9.73038C7.68285 10.0844 7.36341 10.3746 7 10.5878ZM5 11.0003H3V19.0003H5V11.0003Z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="mt-6 text-2xl font-semibold dark:text-white" x-data="{ current: 0, target: 4.9, time: 900 }"
                                x-init="() => {
                                    start = current;
                                    const interval = Math.max(time / (target - start), 5);
                                    const step = (target - start) / (time / interval);
                                    const handle = setInterval(() => {
                                        if (current < target)
                                            current += step
                                        else {
                                            clearInterval(handle);
                                            current = target
                                        }
                                    }, interval)
                                }">
                                <span x-text="current"></span>M
                            </h3>
                            <p class="mt-1 text-muted dark:text-darkmuted">Total Downloads</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Card -->
@endsection
