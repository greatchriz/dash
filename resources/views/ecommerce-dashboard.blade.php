@extends('layouts.master')
@section('title')
    eCommerce Dashboard
@endsection
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('build/css/remixicon.css') }}">
@endsection
@section('content')
    <x-breadcrumb title="eCommerce Dashboard" pagetitle="Sliced" />

    <!-- Start All Card -->
    <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 xl:grid-cols-4">
            <div
                class="flex items-center justify-between gap-6 p-5 bg-white border rounded dark:bg-darklight dark:border-darkborder border-black/10">
                <div>
                    <p class="text-base dark:text-white/80">Total Income</p>
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
                    <p class="text-base dark:text-white/80">Total Revenue</p>
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
                    <p class="text-base dark:text-white/80">Product Sold</p>
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
                    <p class="text-base dark:text-white/80">Customers</p>
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
                    <h2 class="text-base font-semibold text-black dark:text-white/80">Static Overview</h2>
                    <div>
                        <div x-data="{ dropdown: false }" class="ml-auto dropdown">
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
                    <div id="chart5" class="-ml-4" dir="ltr"></div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Top Categories</h2>

                <div id="topCharts" dir="ltr"></div>
            </div>
            <div class="gap-6 p-5 bg-white border rounded dark:bg-darklight dark:border-darkborder border-black/10">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Users by Device</h2>
                <div id="chart6" dir="ltr"></div>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-4 md:grid-cols-12">
            <div
                class="col-span-12 gap-6 p-5 bg-white border rounded 2xl:col-span-9 dark:bg-darklight dark:border-darkborder border-black/10">
                <div class="flex items-center gap-3 mb-4">
                    <h2 class="text-base font-semibold text-black capitalize dark:text-white/80 grow">Products List</h2>
                    <a href="#"
                        class="px-3 py-1.5 rounded-md text-xs border border-black/20 dark:border-darkborder text-muted"><i
                            class="align-bottom ltr:mr-1 rtl:ml-1 ri-filter-line"></i> Filters</a>
                </div>
                <div class="overflow-auto">
                    <table class="min-w-[640px] w-full">
                        <thead>
                            <tr class="ltr:text-left rtl:text-right">
                                <th>Product Name</th>
                                <th>Categories</th>
                                <th>Total Sales</th>
                                <th>Stock</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-muted">
                                <td><a href="#!" class="capitalize">wireless cyberpunk headphones</a></td>
                                <td>Headphones</td>
                                <td>2952</td>
                                <td>258</td>
                                <td>$49.65</td>
                                <td>
                                    <div class="flex items-center gap-3">
                                        <a href="#!"
                                            class="transition duration-200 ease-linear text-muted hover:text-success"><i
                                                class="ri-eye-line"></i></a>
                                        <a href="#!"
                                            class="transition duration-200 ease-linear text-muted hover:text-purple"><i
                                                class="ri-edit-line"></i></a>
                                        <a href="#!"
                                            class="transition duration-200 ease-linear text-muted hover:text-danger"><i
                                                class="ri-delete-bin-line"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="text-muted">
                                <td><a href="#!" class="capitalize">green front sweater</a></td>
                                <td>Fashion</td>
                                <td>2341</td>
                                <td>140</td>
                                <td>$229.65</td>
                                <td>
                                    <div class="flex items-center gap-3">
                                        <a href="#!"
                                            class="transition duration-200 ease-linear text-muted hover:text-success"><i
                                                class="ri-eye-line"></i></a>
                                        <a href="#!"
                                            class="transition duration-200 ease-linear text-muted hover:text-purple"><i
                                                class="ri-edit-line"></i></a>
                                        <a href="#!"
                                            class="transition duration-200 ease-linear text-muted hover:text-danger"><i
                                                class="ri-delete-bin-line"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="text-muted">
                                <td><a href="#!" class="capitalize">Isolated white cap</a></td>
                                <td>Accessories</td>
                                <td>2792</td>
                                <td>654</td>
                                <td>$39.47</td>
                                <td>
                                    <div class="flex items-center gap-3">
                                        <a href="#!"
                                            class="transition duration-200 ease-linear text-muted hover:text-success"><i
                                                class="ri-eye-line"></i></a>
                                        <a href="#!"
                                            class="transition duration-200 ease-linear text-muted hover:text-purple"><i
                                                class="ri-edit-line"></i></a>
                                        <a href="#!"
                                            class="transition duration-200 ease-linear text-muted hover:text-danger"><i
                                                class="ri-delete-bin-line"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="text-muted">
                                <td><a href="#!" class="capitalize">white tote bag</a></td>
                                <td>Bag</td>
                                <td>1765</td>
                                <td>265</td>
                                <td>$87.99</td>
                                <td>
                                    <div class="flex items-center gap-3">
                                        <a href="#!"
                                            class="transition duration-200 ease-linear text-muted hover:text-success"><i
                                                class="ri-eye-line"></i></a>
                                        <a href="#!"
                                            class="transition duration-200 ease-linear text-muted hover:text-purple"><i
                                                class="ri-edit-line"></i></a>
                                        <a href="#!"
                                            class="transition duration-200 ease-linear text-muted hover:text-danger"><i
                                                class="ri-delete-bin-line"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="text-muted">
                                <td><a href="#!" class="capitalize">Running orange shoes</a></td>
                                <td>Shoes</td>
                                <td>2268</td>
                                <td>322</td>
                                <td>$156.41</td>
                                <td>
                                    <div class="flex items-center gap-3">
                                        <a href="#!"
                                            class="transition duration-200 ease-linear text-muted hover:text-success"><i
                                                class="ri-eye-line"></i></a>
                                        <a href="#!"
                                            class="transition duration-200 ease-linear text-muted hover:text-purple"><i
                                                class="ri-edit-line"></i></a>
                                        <a href="#!"
                                            class="transition duration-200 ease-linear text-muted hover:text-danger"><i
                                                class="ri-delete-bin-line"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="text-muted">
                                <td><a href="#!" class="capitalize">Stylish golden watch</a></td>
                                <td>Watch</td>
                                <td>3128</td>
                                <td>985</td>
                                <td>$207.00</td>
                                <td>
                                    <div class="flex items-center gap-3">
                                        <a href="#!"
                                            class="transition duration-200 ease-linear text-muted hover:text-success"><i
                                                class="ri-eye-line"></i></a>
                                        <a href="#!"
                                            class="transition duration-200 ease-linear text-muted hover:text-purple"><i
                                                class="ri-edit-line"></i></a>
                                        <a href="#!"
                                            class="transition duration-200 ease-linear text-muted hover:text-danger"><i
                                                class="ri-delete-bin-line"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="flex items-center gap-3 mt-4">
                    <p class="text-muted grow">Showing <b>05</b> of <b>07</b> Results</p>
                    <ul class="inline-flex items-center gap-1 shrink-0">
                        <li><button type="button"
                                class="flex justify-center px-2.5 py-1 rounded transition text-muted hover:text-purple border border-black/10 hover:border-purple dark:border-darkborder dark:text-darkmuted dark:hover:text-purple dark:hover:border-purple">First</button>
                        </li>
                        <li><button type="button"
                                class="flex justify-center px-2.5 py-1 rounded transition text-muted hover:text-purple border border-black/10 hover:border-purple dark:border-darkborder dark:text-darkmuted dark:hover:text-purple dark:hover:border-purple">Prev</button>
                        </li>
                        <li><button type="button"
                                class="flex justify-center px-2.5 py-1 rounded transition text-muted hover:text-purple border border-black/10 hover:border-purple dark:border-darkborder dark:text-darkmuted dark:hover:text-purple dark:hover:border-purple">1</button>
                        </li>
                        <li><button type="button"
                                class="flex justify-center px-2.5 py-1 rounded transition text-purple border border-purple">2</button>
                        </li>
                        <li><button type="button"
                                class="flex justify-center px-2.5 py-1 rounded transition text-muted hover:text-purple border border-black/10 hover:border-purple dark:border-darkborder dark:text-darkmuted dark:hover:text-purple dark:hover:border-purple">3</button>
                        </li>
                        <li><button type="button"
                                class="flex justify-center px-2.5 py-1 rounded transition text-muted hover:text-purple border border-black/10 hover:border-purple dark:border-darkborder dark:text-darkmuted dark:hover:text-purple dark:hover:border-purple">Next</button>
                        </li>
                        <li><button type="button"
                                class="flex justify-center px-2.5 py-1 rounded transition text-muted hover:text-purple border border-black/10 hover:border-purple dark:border-darkborder dark:text-darkmuted dark:hover:text-purple dark:hover:border-purple">Last</button>
                        </li>
                    </ul>
                </div>
            </div>
            <div
                class="col-span-12 gap-6 p-5 bg-white border rounded dark:bg-darklight dark:border-darkborder border-black/10 2xl:col-span-3">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Most Selling Products
                </h2>
                <div class="flex flex-col gap-3">
                    <div class="flex gap-2 p-3 bg-gray-100 rounded-md dark:bg-darkborder/50">
                        <img src="{{ URL::asset('build/images/product-1.png') }}" alt="" class="size-10 shrink-0">
                        <div class="overflow-hidden grow">
                            <h6 class="mb-1 text-black capitalize truncate dark:text-white/80"><a href="#!">Elegance
                                    color apparel clothes clothing</a></h6>
                            <ul class="flex items-center gap-3 text-xs text-muted">
                                <li>Sales: 158</li>
                                <li>Fashion</li>
                            </ul>
                        </div>
                        <h6 class="font-bold text-black rtl:float-left ltr:float-right dark:text-white/80">$49.99</h6>
                    </div>
                    <div class="flex gap-2 p-3 bg-gray-100 rounded-md dark:bg-darkborder/50">
                        <img src="{{ URL::asset('build/images/product-2.png') }}" alt="" class="size-10 shrink-0">
                        <div class="overflow-hidden grow">
                            <h6 class="mb-1 text-black capitalize truncate dark:text-white/80"><a href="#!">Graphic
                                    tshirt trendy</a></h6>
                            <ul class="flex items-center gap-3 text-xs text-muted">
                                <li>Sales: 264</li>
                                <li>Women Fashion</li>
                            </ul>
                        </div>
                        <h6 class="font-bold text-black rtl:float-left ltr:float-right dark:text-white/80">$85.77</h6>
                    </div>
                    <div class="flex gap-2 p-3 bg-gray-100 rounded-md dark:bg-darkborder/50">
                        <img src="{{ URL::asset('build/images/product-3.png') }}" alt="" class="size-10 shrink-0">
                        <div class="overflow-hidden grow">
                            <h6 class="mb-1 text-black capitalize truncate dark:text-white/80"><a href="#!">Simple
                                    Gray t-shirt</a></h6>
                            <ul class="flex items-center gap-3 text-xs text-muted">
                                <li>Sales: 365</li>
                                <li>Fashion</li>
                            </ul>
                        </div>
                        <h6 class="font-bold text-black rtl:float-left ltr:float-right dark:text-white/80">$73.22</h6>
                    </div>
                    <div class="flex gap-2 p-3 bg-gray-100 rounded-md dark:bg-darkborder/50">
                        <img src="{{ URL::asset('build/images/product-4.png') }}" alt="" class="size-10 shrink-0">
                        <div class="overflow-hidden grow">
                            <h6 class="mb-1 text-black capitalize truncate dark:text-white/80"><a href="#!">Modern
                                    minimal headphone</a></h6>
                            <ul class="flex items-center gap-3 text-xs text-muted">
                                <li>Sales: 144</li>
                                <li>Headphones</li>
                            </ul>
                        </div>
                        <h6 class="font-bold text-black rtl:float-left ltr:float-right dark:text-white/80">$164.20</h6>
                    </div>
                    <div class="flex gap-2 p-3 bg-gray-100 rounded-md dark:bg-darkborder/50">
                        <img src="{{ URL::asset('build/images/product-5.png') }}" alt="" class="size-10 shrink-0">
                        <div class="overflow-hidden grow">
                            <h6 class="mb-1 text-black capitalize truncate dark:text-white/80"><a href="#!">Top view
                                    cap</a></h6>
                            <ul class="flex items-center gap-3 text-xs text-muted">
                                <li>Sales: 648</li>
                                <li>Accessories</li>
                            </ul>
                        </div>
                        <h6 class="font-bold text-black rtl:float-left ltr:float-right dark:text-white/80">$99.49</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Card -->
@endsection
@section('scripts')
    <!-- Chart Js -->
    <script src="{{ URL::asset('build/js/apexcharts.js') }}"></script>
    <script src="{{ URL::asset('build/js/ecommerce-dashboard.js') }}"></script>
@endsection
