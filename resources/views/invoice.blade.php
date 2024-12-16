@extends('layouts.master')
@section('title')
    Invoice
@endsection
@section('css')
    <!-- Icon Css -->
    <link rel="stylesheet" href="{{ URL::asset('build/css/remixicon.css') }}" />
@endsection
@section('content')
    <x-breadcrumb title="Invoice" pagetitle="Apps" />

    <!-- Start All Card -->
    <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
        <div class="grid grid-cols-1 gap-4">
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Invoice</h2>
                <div class="space-y-12">
                    <div class="flex flex-wrap justify-between gap-4">
                        <div class="flex items-center gap-2">
                            <img src="{{ URL::asset('build/images/logo-icon.svg') }}" class="w-12 h-12" alt="">
                            <div>
                                <h3 class="text-xl font-bold dark:text-white">Sliced Admin</h3>
                                <p class="text-base text-muted dark:text-darkmuted">Hello@mail.com</p>
                            </div>
                        </div>
                        <div>
                            <p class="text-base max-w-[200px] text-muted dark:text-darkmuted">4379 Sycamore Road Cascade
                                Locks, OR 97014</p>
                        </div>
                    </div>
                    <div class="flex flex-wrap justify-between gap-4 p-5 bg-light/50 dark:bg-dark rounded-2xl">
                        <div class="">
                            <h3 class="mb-4 text-xl font-semibold dark:text-white">Invoice Number</h3>
                            <div class="dark:text-darkmuted">
                                <p>INV-2023-05</p>
                                <p>11 May 2023</p>
                                <p>INV-2023-05</p>
                            </div>
                        </div>
                        <div class="max-w-[200px]">
                            <h3 class="mb-4 text-xl font-semibold dark:text-white">Billed To</h3>
                            <div class="dark:text-darkmuted">
                                <p>Irving Armstrong</p>
                                <p>I3760 Norman Street Los Angeles, CA 900635</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold dark:text-white">Item Detail</h3>
                        <p class="text-muted dark:text-darkmuted">Type item for Hours item</p>
                    </div>
                    <div class="overflow-auto">
                        <table class="min-w-[640px] w-full">
                            <thead>
                                <tr class="ltr:text-left rtl:text-right">
                                    <th>#</th>
                                    <th>Item name</th>
                                    <th>Hours</th>
                                    <th>rate/hr</th>
                                    <th>Tax</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Payment Sliced Admin Design</td>
                                    <td>209</td>
                                    <td>$40.00</td>
                                    <td>$0.00</td>
                                    <td>$8,360.00</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Payment Google Logo Design</td>
                                    <td>100</td>
                                    <td>$40.00</td>
                                    <td>$0.00</td>
                                    <td>$4,000.00</td>
                                </tr>
                                <tr class="border-b-0">
                                    <td class="border-b-0"></td>
                                    <td class="border-b-0"></td>
                                    <td class="border-b-0"></td>
                                    <td class="border-b-0"></td>
                                    <td class="font-bold">Sub Total</td>
                                    <td>$12,360.00</td>
                                </tr>
                                <tr class="border-b-0">
                                    <td class="border-b-0"></td>
                                    <td class="border-b-0"></td>
                                    <td class="border-b-0"></td>
                                    <td class="border-b-0"></td>
                                    <td class="font-bold">Discount</td>
                                    <td>$0.00</td>
                                </tr>
                                <tr class="border-b-0">
                                    <td class="border-b-0"></td>
                                    <td class="border-b-0"></td>
                                    <td class="border-b-0"></td>
                                    <td class="border-b-0"></td>
                                    <td class="font-bold">Total Tax</td>
                                    <td>$0.00</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="font-bold">Total Amount</td>
                                    <td class="font-bold">$12,360.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="flex flex-wrap items-start justify-between gap-4">
                        <div class="shrink-0">
                            <img src="{{ URL::asset('build/images/logo-dark.svg') }}" class="dark:hidden" alt="">
                            <img src="{{ URL::asset('build/images/logo-light.svg') }}" class="hidden dark:block" alt="">
                        </div>
                        <div class="flex flex-wrap gap-3 text-muted dark:text-darkmuted">
                            <p class="max-w-[200px]">(408) 996–1010 support@gmail.com website.com</>
                            <p class="max-w-[200px]">One Apple Park Way Cupertino, CA 95014</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-end gap-4">
                        <a href="javaScript:;"
                            class="transition-all duration-300 rounded-md btn bg-purple/20 text-purple hover:bg-purple hover:text-white">
                            <span>Print</span>
                        </a>
                        <a href="javaScript:;"
                            class="transition-all duration-300 rounded-md btn bg-danger/20 text-danger hover:bg-danger hover:text-white">
                            <span>Cancel</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Card -->
@endsection
