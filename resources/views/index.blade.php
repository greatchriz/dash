@extends('layouts.master')
@section('title')
    Dashboard
@endsection
@section('content')
    <x-breadcrumb title="Sliced" pagetitle="Dashboard" />

    <!-- Start All Card -->
    <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4">
            <div
                class="flex items-center justify-between gap-6 p-5 bg-white border rounded dark:bg-darklight dark:border-darkborder border-black/10">
                <div>
                    <p class="text-base dark:text-white/80">Total Views</p>
                    <h4 class="flex items-center gap-4 mt-3 text-2xl font-semibold text-black dark:text-white">15102
                        <span class="p-1 text-sm leading-none rounded-md bg-success/20 text-success">23%</span>
                    </h4>
                    <p class="text-muted">Current Month</p>
                </div>
                <div>
                    <div id="chart" dir="ltr"></div>
                </div>
            </div>
            <div
                class="flex items-center justify-between gap-6 p-5 bg-white border rounded dark:bg-darklight dark:border-darkborder border-black/10">
                <div>
                    <p class="text-base dark:text-white/80">Paid Visits</p>
                    <h4 class="flex items-center gap-4 mt-3 text-2xl font-semibold text-black dark:text-white">4581
                        <span class="p-1 text-sm leading-none rounded-md bg-danger/20 text-danger">24%</span>
                    </h4>
                    <p class="text-muted">Current Month</p>
                </div>
                <div>
                    <div id="chart2" dir="ltr"></div>
                </div>
            </div>
            <div
                class="flex items-center justify-between gap-6 p-5 bg-white border rounded dark:bg-darklight dark:border-darkborder border-black/10">
                <div>
                    <p class="text-base dark:text-white/80">Total Referral</p>
                    <h4 class="flex items-center gap-4 mt-3 text-2xl font-semibold text-black dark:text-white">2140
                        <span class="p-1 text-sm leading-none rounded-md bg-danger/20 text-danger">10%</span>
                    </h4>
                    <p class="text-muted">Current Month</p>
                </div>
                <div>
                    <div id="chart4" dir="ltr"></div>
                </div>
            </div>
            <div
                class="flex items-center justify-between gap-6 p-5 bg-white border rounded dark:bg-darklight dark:border-darkborder border-black/10">
                <div>
                    <p class="text-base dark:text-white/80">This Week</p>
                    <h4 class="flex items-center gap-4 mt-3 text-2xl font-semibold text-black dark:text-white">7714
                        <span class="p-1 text-sm leading-none rounded-md bg-success/20 text-success">82%</span>
                    </h4>
                    <p class="text-muted">Current Month</p>
                </div>
                <div>
                    <div id="chart3" dir="ltr"></div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 xl:grid-cols-4">
            <div
                class="gap-6 p-5 bg-white border rounded dark:bg-darklight dark:border-darkborder md:col-span-2 xl:col-span-2 border-black/10">
                <div class="flex items-center justify-between gap-4 mb-4">
                    <h2 class="text-base font-semibold text-black dark:text-white/80">Total Revenue</h2>
                    <div>
                        <div x-data="{ dropdown: false }" class="ltr:ml-auto rtl:mr-auto dropdown">
                            <a href="javaScript:;" class="text-black dark:text-white" @click="dropdown = !dropdown"
                                @keydown.escape="dropdown = false">
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9 12.75C9.69036 12.75 10.25 13.3096 10.25 14C10.25 14.6904 9.69036 15.25 9 15.25C8.30964 15.25 7.75 14.6904 7.75 14C7.75 13.3096 8.30964 12.75 9 12.75Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M14 12.75C14.6904 12.75 15.25 13.3096 15.25 14C15.25 14.6904 14.6904 15.25 14 15.25C13.3096 15.25 12.75 14.6904 12.75 14C12.75 13.3096 13.3096 12.75 14 12.75Z"
                                        fill="currentColor"></path>
                                    <path
                                        d="M20.25 14C20.25 13.3096 19.6904 12.75 19 12.75C18.3096 12.75 17.75 13.3096 17.75 14C17.75 14.6904 18.3096 15.25 19 15.25C19.6904 15.25 20.25 14.6904 20.25 14Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                            <ul x-show="dropdown" @click.away="dropdown = false" x-transition=""
                                x-transition.duration.300ms="" class="ltr:right-0 rtl:left-0 whitespace-nowrap">
                                <li><a href="javascript:;">Weekly</a></li>
                                <li><a href="javascript:;">Monthly</a></li>
                                <li><a href="javascript:;">Yearly</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div>
                    <div id="chart5" dir="ltr"></div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Top Traffic by Source</h2>
                <div class="grid grid-cols-1 gap-4">
                    <div class="space-y-1">
                        <div class="flex items-center gap-4">
                            <span class="flex items-center justify-center rounded size-10 text-purple bg-purple/20">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path
                                        d="M10.3645 19.8327L12.2941 16.4905C12.1969 16.4968 12.0988 16.5 12 16.5C10.3037 16.5 8.82656 15.5614 8.0597 14.1752L4.79459 8.51986C4.28545 9.57206 4 10.7527 4 12C4 15.8578 6.73064 19.0778 10.3645 19.8327ZM12.5897 19.9786C16.7326 19.6767 20 16.2199 20 12C20 11.1269 19.8601 10.2865 19.6016 9.5H15.7422C16.2209 10.215 16.5 11.0749 16.5 12C16.5 12.8477 16.2656 13.6406 15.8581 14.3175L12.5897 19.9786ZM14.1434 13.2875L14.1651 13.25C14.3782 12.8824 14.5 12.4554 14.5 12C14.5 10.6193 13.3807 9.5 12 9.5C10.6193 9.5 9.5 10.6193 9.5 12C9.5 12.4383 9.6128 12.8503 9.81094 13.2084L9.83494 13.25C10.2669 13.9973 11.0747 14.5 12 14.5C12.9098 14.5 13.7061 14.014 14.1434 13.2875ZM6.03522 6.66871L7.9635 10.0086C8.69821 8.52222 10.2297 7.5 12 7.5H18.6153C17.1753 5.38723 14.7497 4 12 4C9.62968 4 7.50014 5.03086 6.03522 6.66871ZM12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                            <div>
                                <p class="dark:text-white">Chrome</p>
                                <p class="text-muted">Top Browser</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between gap-4">
                            <div class="relative w-full h-1 bg-black/10 dark:bg-darkborder rounded-2xl">
                                <div class="bg-purple h-full w-[56%] rounded-2xl"></div>
                            </div>
                            <p class="text-purple text-[15px] leading-[22px] font-medium flex-none">
                                56%
                            </p>
                        </div>
                    </div>
                    <div class="space-y-1">
                        <div class="flex items-center gap-4">
                            <span
                                class="flex items-center justify-center text-black rounded size-10 dark:text-white bg-black/20 dark:bg-white/10">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path
                                        d="M17.8133 6.50295L13.4152 13.4142L6.50392 17.8123C7.70928 18.9527 9.26918 19.7222 11.001 19.9381V18H13.001V19.9381C14.4617 19.756 15.8001 19.18 16.9066 18.3199L15.5365 16.9497L16.9507 15.5355L18.3208 16.9056C19.181 15.7991 19.7569 14.4607 19.9391 13H18.001V11H19.9391C19.7231 9.2682 18.9536 7.70831 17.8133 6.50295ZM17.498 6.18771C16.2927 5.04733 14.7328 4.27785 13.001 4.06189V6H11.001V4.06189C9.54027 4.24404 8.20186 4.81999 7.09533 5.68014L8.46544 7.05025L7.05123 8.46447L5.68112 7.09436C4.82097 8.20088 4.24502 9.53929 4.06287 11H6.00098V13H4.06287C4.27882 14.7318 5.04831 16.2917 6.18868 17.4971L10.5868 10.5858L17.498 6.18771ZM12.001 22C6.47813 22 2.00098 17.5228 2.00098 12C2.00098 6.47715 6.47813 2 12.001 2C17.5238 2 22.001 6.47715 22.001 12C22.001 17.5228 17.5238 22 12.001 22Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                            <div>
                                <p class="dark:text-white">Safari</p>
                                <p class="text-muted">Top Browser</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between gap-4">
                            <div class="relative w-full h-1 bg-black/10 dark:bg-darkborder rounded-2xl">
                                <div class="bg-black dark:bg-white h-full w-[86%] rounded-2xl"></div>
                            </div>
                            <p class="text-black dark:text-white text-[15px] leading-[22px] font-medium flex-none">
                                86%
                            </p>
                        </div>
                    </div>
                    <div class="space-y-1">
                        <div class="flex items-center gap-4">
                            <span class="flex items-center justify-center rounded size-10 text-danger bg-danger/20">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path
                                        d="M12.001 2C17.5238 2 22.001 6.47715 22.001 12C22.001 17.5228 17.5238 22 12.001 22C6.47813 22 2.00098 17.5228 2.00098 12C2.00098 10.5365 2.31538 9.14635 2.88033 7.89353C3.34744 6.95503 4.11409 6.01955 4.73082 5.7004C4.07759 6.98266 3.75823 8.24073 3.69049 9.08266C4.14533 7.58266 5.00622 6.32621 6.21106 5.43911C8.27719 3.92016 11.059 3.85202 12.1671 4.81976C10.1107 5.52581 7.87073 8.36653 8.36428 11.6952C8.44419 12.2447 8.60906 12.7785 8.85299 13.2774C8.46912 12.2661 8.43525 10.8435 9.05461 9.91935C9.74654 8.88911 10.7332 8.67137 11.2607 8.78266C11.0526 8.73911 10.5929 9.61936 10.5252 9.77419C10.3523 10.1679 10.2664 10.5943 10.2736 11.0242C10.2888 11.9223 10.6594 12.7778 11.3042 13.4032C13.2256 15.2754 16.3268 14.5387 17.7155 12.4016C18.6687 10.9306 18.7848 8.43427 17.5607 6.4504C17.2554 5.96696 16.8913 5.52325 16.4768 5.12944C14.6262 3.36387 11.9979 2.56054 9.49503 2.92549C8.38907 3.10214 7.44765 3.42052 6.67077 3.88065C7.75554 2.79776 9.9123 2 12.001 2ZM6.87552 7.7048C4.62257 8.48634 3.37469 10.8751 4.29738 14.165C5.22008 17.4549 8.19356 19.8873 11.7518 19.9962L12.001 20C16.2525 20 19.7295 16.6835 19.9858 12.4965L19.995 12.284C19.8654 12.6327 19.7118 12.958 19.5321 13.2648L19.3925 13.4914C17.2881 16.7299 12.7109 17.5664 9.91169 14.8388C9.52745 14.4661 9.20448 14.042 8.94958 13.5821L8.84398 13.381C7.10788 12.994 6.26027 12.0549 6.30116 10.5637C6.32833 9.5728 6.53175 8.6049 6.87552 7.7048Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                            <div>
                                <p class="dark:text-white">Forefox</p>
                                <p class="text-muted">Top Browser</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between gap-4">
                            <div class="relative w-full h-1 bg-black/10 dark:bg-darkborder rounded-2xl">
                                <div class="bg-danger h-full w-[65%] rounded-2xl"></div>
                            </div>
                            <p class="text-danger text-[15px] leading-[22px] font-medium flex-none">
                                65%
                            </p>
                        </div>
                    </div>
                    <div class="space-y-1">
                        <div class="flex items-center gap-4">
                            <span class="flex items-center justify-center rounded size-10 text-info bg-info/20">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                    height="24">
                                    <path
                                        d="M6.94904 18.2042C6.30026 16.775 6 15.201 6 14C6 12.5038 6.58998 10.907 7.60307 9.67679C8.24373 8.89885 9.0774 8.24143 10.0679 7.85877C9.58717 7.78813 9.06479 7.75 8.5 7.75C5.99051 7.75 4 9.6121 4 12C4 14.5028 5.14935 16.7372 6.94904 18.2042ZM12 20C12.9283 20 13.8197 19.8421 14.6488 19.5514C11.2851 18.9939 9.00087 16.9378 8.02881 14.5882C8.1242 15.6137 8.45824 16.8842 9.05806 17.9454C9.7767 19.2169 10.7531 20 12 20ZM16.5 12C16.5 12.474 16.4359 12.9117 16.3121 13.315C16.5177 13.3369 16.7475 13.35 17 13.35C18.7765 13.35 20 12.1161 20 10.5C20 7.37014 16.704 4 12 4C9.98053 4 8.13583 4.74827 6.72803 5.98269C7.29501 5.83052 7.89017 5.75 8.5 5.75C10.907 5.75 12.8964 6.35136 14.3071 7.46512C15.7378 8.59457 16.5 10.1977 16.5 12ZM12 9.5C10.6193 9.5 9.5 10.6193 9.5 12C9.5 14.5 11.8 17.7 16.5 17.7C16.9419 17.7 17.3394 17.6686 17.6957 17.6179C18.0046 17.574 18.2824 17.5155 18.531 17.4504C18.7234 17.4 18.8983 17.3456 19.0566 17.2909C19.194 17.2434 19.3189 17.1956 19.4319 17.15C19.5635 17.0969 19.679 17.0466 19.7794 17.0029C19.9878 16.9122 20.1306 16.85 20.2161 16.85C20.4 16.85 20.5 16.95 20.5 17.15C20.5 17.306 20.4291 17.4257 20.2161 17.7129C20.1745 17.7691 20.1274 17.8317 20.0743 17.9022L20.0007 18C19.8289 18.2288 19.6475 18.4499 19.4571 18.6629C19.1995 18.951 18.9254 19.2241 18.6364 19.4807C16.8708 21.0481 14.5466 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6 22 10.5C22 13.3 19.8 15.35 17 15.35C15 15.35 13.6 14.7 13.6 14C13.6 13.8607 13.7092 13.7456 13.8515 13.5956C14.1178 13.3151 14.5 12.9123 14.5 12C14.5 10.6193 13.3807 9.5 12 9.5Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                            <div>
                                <p class="dark:text-white">Edge</p>
                                <p class="text-muted">Top Browser</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between gap-4">
                            <div class="relative w-full h-1 bg-black/10 dark:bg-darkborder rounded-2xl">
                                <div class="bg-info h-full w-[40%] rounded-2xl"></div>
                            </div>
                            <p class="text-info text-[15px] leading-[22px] font-medium flex-none">
                                40%
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap-6 p-5 bg-white border rounded dark:bg-darklight dark:border-darkborder border-black/10">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Users by Device</h2>
                <div id="chart6" dir="ltr"></div>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="gap-6 p-5 bg-white border rounded dark:bg-darklight dark:border-darkborder border-black/10">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Top Performing Pages</h2>
                <div class="overflow-auto">
                    <table class="min-w-[640px] w-full">
                        <thead>
                            <tr class="ltr:text-left rtl:text-right">
                                <th>Page Name</th>
                                <th>Clicks</th>
                                <th>Sessions</th>
                                <th>% Change</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-muted">
                                <td>http://sliced.com/Index.html</td>
                                <td>55</td>
                                <td>2952</td>
                                <td>27% <span class="px-1 text-xs font-bold rounded bg-success/10 text-success">3.8%</span>
                                </td>
                            </tr>
                            <tr class="text-muted">
                                <td>http://google.com</td>
                                <td>229</td>
                                <td>2392</td>
                                <td>65% <span class="px-1 text-xs font-bold rounded bg-success/10 text-success">7.9%</span>
                                </td>
                            </tr>
                            <tr class="text-muted">
                                <td>http://facebook.com/Index.html</td>
                                <td>12</td>
                                <td>2792</td>
                                <td>37% <span class="px-1 text-xs font-bold rounded bg-danger/10 text-danger">19.8%</span>
                                </td>
                            </tr>
                            <tr class="text-muted">
                                <td>http://twitter.com</td>
                                <td>239</td>
                                <td>6534</td>
                                <td>74% <span class="px-1 text-xs font-bold rounded bg-danger/10 text-danger">23.3%</span>
                                </td>
                            </tr>
                            <tr class="text-muted">
                                <td>http://github.com/Index.html</td>
                                <td>53</td>
                                <td>3434</td>
                                <td>71% <span
                                        class="px-1 text-xs font-bold rounded bg-success/10 text-success">46.2%</span></td>
                            </tr>
                            <tr class="text-muted">
                                <td>http://instagram.com</td>
                                <td>65</td>
                                <td>123</td>
                                <td>69% <span class="px-1 text-xs font-bold rounded bg-danger/10 text-danger">6.89%</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="gap-6 p-5 bg-white border rounded dark:bg-darklight dark:border-darkborder border-black/10">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Users by Countries</h2>
                <div class="overflow-auto">
                    <table class="min-w-[640px] w-full">
                        <thead>
                            <tr class="ltr:text-left rtl:text-right">
                                <th>Countries Name</th>
                                <th>Device</th>
                                <th>Age</th>
                                <th>Sessions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-muted">
                                <td>Ireland</td>
                                <td>Desktop</td>
                                <td>18</td>
                                <td>2.3K <span
                                        class="px-1 text-xs font-bold rounded bg-success/10 text-success">3.8%</span></td>
                            </tr>
                            <tr class="text-muted">
                                <td>United States</td>
                                <td>Mobile</td>
                                <td>24 - 36</td>
                                <td>879 <span class="px-1 text-xs font-bold rounded bg-success/10 text-success">7.9%</span>
                                </td>
                            </tr>
                            <tr class="text-muted">
                                <td>Germany</td>
                                <td>Tablet</td>
                                <td>50</td>
                                <td>340 <span class="px-1 text-xs font-bold rounded bg-danger/10 text-danger">19.8%</span>
                                </td>
                            </tr>
                            <tr class="text-muted">
                                <td>United Kingdom</td>
                                <td>Desktop</td>
                                <td>24 - 36</td>
                                <td>5.4K <span class="px-1 text-xs font-bold rounded bg-danger/10 text-danger">23.3%</span>
                                </td>
                            </tr>
                            <tr class="text-muted">
                                <td>India</td>
                                <td>Tablet</td>
                                <td>18</td>
                                <td>1.3K <span
                                        class="px-1 text-xs font-bold rounded bg-success/10 text-success">46.2%</span></td>
                            </tr>
                            <tr class="text-muted">
                                <td>Singapore</td>
                                <td>Mobile</td>
                                <td>18 - 24</td>
                                <td>699 <span class="px-1 text-xs font-bold rounded bg-danger/10 text-danger">6.89%</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Card -->
@endsection
@section('scripts')
    <!-- Chart Js -->
    <script src="{{ URL::asset('build/js/apexcharts.js') }}"></script>
    <script src="{{ URL::asset('build/js/appexchart-app.js') }}"></script>
@endsection
