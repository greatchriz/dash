@extends('layouts.master')
@section('title')
    Drag & Drop
@endsection
@section('content')
    <x-breadcrumb title="Drag & Drop" pagetitle="Sliced" />

    <!-- Start All Card -->
    <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
        <div class="grid grid-cols-1 gap-4">
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Sortable</h2>
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
                    <div id="sortableone" class="space-y-4">
                        <div class="p-5 border rounded border-black/10 dark:border-darkborder">
                            <div class="flex gap-4 mb-4">
                                <div class="flex-1">
                                    <p class="mb-1 text-sm font-semibold dark:text-white">Poster illustation design</p>
                                    <p class="text-xs text-muted dark:text-darkmuted">Due Date: Nov 10, 2024</p>
                                </div>
                                <img class="w-[42px] h-[42px] flex-none rounded-full overflow-hidden object-cover"
                                    src="{{ URL::asset('build/images/dropbox.png') }}" alt="" />
                            </div>
                            <div class="flex items-center justify-between gap-2 mb-3 text-xs">
                                <img class="flex-none object-cover w-6 h-6 overflow-hidden rounded-full"
                                    src="{{ URL::asset('build/images/avatar-16.png') }}" alt="" />
                                <div class="text-xs text-purple">
                                    <span
                                        class="h-1.5 w-1.5 rounded-full inline-block relative -top-px bg-current ltr:mr-0.5 rtl:ml-0.5"></span>
                                    <span>Pending</span>
                                </div>
                            </div>
                            <div class="relative w-full h-1 mt-1 mb-2 overflow-hidden rounded-full">
                                <div class="absolute w-full h-full bg-light"></div>
                                <div class="absolute h-full bg-purple" style="width: 71%;"></div>
                            </div>
                            <div class="flex items-center justify-between gap-4 text-xs">
                                <p>13 <span class="text-muted dark:text-darkmuted">/</span> 39 <span
                                        class="text-muted dark:text-white/80">Total Tasks</span></p>
                                <p>71%</p>
                            </div>
                        </div>
                        <div class="p-5 border rounded border-black/10 dark:border-darkborder">
                            <div class="flex gap-4 mb-4">
                                <div class="flex-1">
                                    <p class="mb-1 text-sm font-semibold dark:text-white">Coffee detail page - Main Page</p>
                                    <p class="text-xs text-muted dark:text-darkmuted">Due Date: Jun 20, 2022</p>
                                </div>
                                <img class="w-[42px] h-[42px] flex-none rounded-full overflow-hidden object-cover"
                                    src="{{ URL::asset('build/images/badoo.png') }}" alt="" />
                            </div>
                            <div class="flex items-center justify-between gap-2 mb-3 text-xs">
                                <img class="flex-none object-cover w-6 h-6 overflow-hidden rounded-full"
                                    src="{{ URL::asset('build/images/avatar-20.png') }}" alt="" />
                                <div class="text-xs text-success">
                                    <span
                                        class="h-1.5 w-1.5 rounded-full inline-block relative -top-px bg-current ltr:mr-0.5 rtl:ml-0.5"></span>
                                    <span>Compated</span>
                                </div>
                            </div>
                            <div class="relative w-full h-1 mt-1 mb-2 overflow-hidden rounded-full">
                                <div class="absolute w-full h-full bg-light"></div>
                                <div class="absolute h-full bg-success" style="width: 100%;"></div>
                            </div>
                            <div class="flex items-center justify-between gap-4 text-xs">
                                <p>74 <span class="text-muted dark:text-darkmuted">/</span> 74 <span
                                        class="text-muted dark:text-white/80">Total Tasks</span></p>
                                <p>100%</p>
                            </div>
                        </div>
                        <div class="p-5 border rounded border-black/10 dark:border-darkborder">
                            <div class="flex gap-4 mb-4">
                                <div class="flex-1">
                                    <p class="mb-1 text-sm font-semibold dark:text-white">Drinking bottle graphics</p>
                                    <p class="text-xs text-muted dark:text-darkmuted">Due Date: Jan 10, 2020</p>
                                </div>
                                <img class="w-[42px] h-[42px] flex-none rounded-full overflow-hidden object-cover"
                                    src="{{ URL::asset('build/images/invision.png') }}" alt="" />
                            </div>
                            <div class="flex items-center justify-between gap-2 mb-3 text-xs">
                                <div class="flex items-center justify-start -space-x-1.5">
                                    <img class="object-cover w-6 h-6 overflow-hidden rounded-full ring-2 ring-white dark:ring-darkborder"
                                        src="{{ URL::asset('build/images/avatar-5.png') }}" alt="" />
                                    <img class="object-cover w-6 h-6 overflow-hidden rounded-full ring-2 ring-white dark:ring-darkborder"
                                        src="{{ URL::asset('build/images/avatar-7.png') }}" alt="" />
                                    <span
                                        class="flex items-center justify-center object-cover w-6 h-6 text-xs text-center rounded-full bg-light ring-2 ring-white dark:ring-darkborder">+2</span>
                                </div>
                                <div class="text-xs text-danger">
                                    <span
                                        class="h-1.5 w-1.5 rounded-full inline-block relative -top-px bg-current ltr:mr-0.5 rtl:ml-0.5"></span>
                                    <span>Rejected</span>
                                </div>
                            </div>
                            <div class="relative w-full h-1 mt-1 mb-2 overflow-hidden rounded-full">
                                <div class="absolute w-full h-full bg-light"></div>
                                <div class="absolute h-full bg-danger" style="width: 40%;"></div>
                            </div>
                            <div class="flex items-center justify-between gap-4 text-xs">
                                <p>19 <span class="text-muted dark:text-darkmuted">/</span> 49 <span
                                        class="text-muted dark:text-white/80">Total Tasks</span></p>
                                <p>40%</p>
                            </div>
                        </div>
                    </div>
                    <div id="sortabletwo" class="space-y-4">
                        <div class="p-5 border rounded border-black/10 dark:border-darkborder">
                            <div class="flex gap-4 mb-4">
                                <div class="flex-1">
                                    <p class="mb-1 text-sm font-semibold dark:text-white">Company logo design</p>
                                    <p class="text-xs text-muted dark:text-darkmuted">Due Date: Feb 28, 2023</p>
                                </div>
                                <img class="w-[42px] h-[42px] flex-none rounded-full overflow-hidden object-cover"
                                    src="{{ URL::asset('build/images/bitbucket.png') }}" alt="" />
                            </div>
                            <div class="flex items-center justify-between gap-2 mb-3 text-xs">
                                <img class="flex-none object-cover w-6 h-6 overflow-hidden rounded-full"
                                    src="{{ URL::asset('build/images/avatar-17.png') }}" alt="" />
                                <div class="text-xs text-success">
                                    <span
                                        class="h-1.5 w-1.5 rounded-full inline-block relative -top-px bg-current ltr:mr-0.5 rtl:ml-0.5"></span>
                                    <span>Complated</span>
                                </div>
                            </div>
                            <div class="relative w-full h-1 mt-1 mb-2 overflow-hidden rounded-full">
                                <div class="absolute w-full h-full bg-light"></div>
                                <div class="absolute h-full bg-success" style="width: 100%;"></div>
                            </div>
                            <div class="flex items-center justify-between gap-4 text-xs">
                                <p>18 <span class="text-muted dark:text-darkmuted">/</span> 18 <span
                                        class="text-muted dark:text-white/80">Total Tasks</span></p>
                                <p>100%</p>
                            </div>
                        </div>
                        <div class="p-5 border rounded border-black/10 dark:border-darkborder">
                            <div class="flex gap-4 mb-4">
                                <div class="flex-1">
                                    <p class="mb-1 text-sm font-semibold dark:text-white">Poster illustation design</p>
                                    <p class="text-xs text-muted dark:text-darkmuted">Due Date: Nov 10, 2024</p>
                                </div>
                                <img class="w-[42px] h-[42px] flex-none rounded-full overflow-hidden object-cover"
                                    src="{{ URL::asset('build/images/dailymotion.png') }}" alt="" />
                            </div>
                            <div class="flex items-center justify-between gap-2 mb-3 text-xs">
                                <img class="flex-none object-cover w-6 h-6 overflow-hidden rounded-full"
                                    src="{{ URL::asset('build/images/avatar-16.png') }}" alt="" />
                                <div class="text-xs text-warning">
                                    <span
                                        class="h-1.5 w-1.5 rounded-full inline-block relative -top-px bg-current ltr:mr-0.5 rtl:ml-0.5"></span>
                                    <span>Review</span>
                                </div>
                            </div>
                            <div class="relative w-full h-1 mt-1 mb-2 overflow-hidden rounded-full">
                                <div class="absolute w-full h-full bg-light"></div>
                                <div class="absolute h-full bg-warning" style="width: 15%;"></div>
                            </div>
                            <div class="flex items-center justify-between gap-4 text-xs">
                                <p>1 <span class="text-muted dark:text-darkmuted">/</span> 10 <span
                                        class="text-muted dark:text-white/80">Total Tasks</span></p>
                                <p>15%</p>
                            </div>
                        </div>
                    </div>
                    <div id="sortablethree" class="space-y-4">
                        <div class="p-5 border rounded border-black/10 dark:border-darkborder">
                            <div class="flex gap-4 mb-4">
                                <div class="flex-1">
                                    <p class="mb-1 text-sm font-semibold dark:text-white">Drinking bottle graphics</p>
                                    <p class="text-xs text-muted dark:text-darkmuted">Due Date: Jun 11, 2023</p>
                                </div>
                                <img class="w-[42px] h-[42px] flex-none rounded-full overflow-hidden object-cover"
                                    src="{{ URL::asset('build/images/blogger.png') }}" alt="" />
                            </div>
                            <div class="flex items-center justify-between gap-2 mb-3 text-xs">
                                <div class="flex items-center justify-start -space-x-1.5">
                                    <img class="object-cover w-6 h-6 overflow-hidden rounded-full ring-2 ring-white dark:ring-darkborder"
                                        src="{{ URL::asset('build/images/avatar-13.png') }}" alt="" />
                                    <img class="object-cover w-6 h-6 overflow-hidden rounded-full ring-2 ring-white dark:ring-darkborder"
                                        src="{{ URL::asset('build/images/avatar-10.png') }}" alt="" />
                                    <span
                                        class="flex items-center justify-center object-cover w-6 h-6 text-xs text-center rounded-full bg-light ring-2 ring-white dark:ring-darkborder">+3</span>
                                </div>
                                <div class="text-xs text-info">
                                    <span
                                        class="h-1.5 w-1.5 rounded-full inline-block relative -top-px bg-current ltr:mr-0.5 rtl:ml-0.5"></span>
                                    <span>In Progress</span>
                                </div>
                            </div>
                            <div class="relative w-full h-1 mt-1 mb-2 overflow-hidden rounded-full">
                                <div class="absolute w-full h-full bg-light"></div>
                                <div class="absolute h-full bg-info" style="width: 64%;"></div>
                            </div>
                            <div class="flex items-center justify-between gap-4 text-xs">
                                <p>19 <span class="text-muted dark:text-darkmuted">/</span> 29 <span
                                        class="text-muted dark:text-white/80">Total Tasks</span></p>
                                <p>64%</p>
                            </div>
                        </div>
                        <div class="p-5 border rounded border-black/10 dark:border-darkborder">
                            <div class="flex gap-4 mb-4">
                                <div class="flex-1">
                                    <p class="mb-1 text-sm font-semibold dark:text-white">Poster illustation design</p>
                                    <p class="text-xs text-muted dark:text-darkmuted">Due Date: Nov 10, 2024</p>
                                </div>
                                <img class="w-[42px] h-[42px] flex-none rounded-full overflow-hidden object-cover"
                                    src="{{ URL::asset('build/images/digg.png') }}" alt="" />
                            </div>
                            <div class="flex items-center justify-between gap-2 mb-3 text-xs">
                                <img class="flex-none object-cover w-6 h-6 overflow-hidden rounded-full"
                                    src="{{ URL::asset('build/images/avatar-16.png') }}" alt="" />
                                <div class="text-xs text-purple">
                                    <span
                                        class="h-1.5 w-1.5 rounded-full inline-block relative -top-px bg-current ltr:mr-0.5 rtl:ml-0.5"></span>
                                    <span>Pending</span>
                                </div>
                            </div>
                            <div class="relative w-full h-1 mt-1 mb-2 overflow-hidden rounded-full">
                                <div class="absolute w-full h-full bg-light"></div>
                                <div class="absolute h-full bg-purple" style="width: 71%;"></div>
                            </div>
                            <div class="flex items-center justify-between gap-4 text-xs">
                                <p>13 <span class="text-muted dark:text-darkmuted">/</span> 39 <span
                                        class="text-muted dark:text-white/80">Total Tasks</span></p>
                                <p>71%</p>
                            </div>
                        </div>
                        <div class="p-5 border rounded border-black/10 dark:border-darkborder">
                            <div class="flex gap-4 mb-4">
                                <div class="flex-1">
                                    <p class="mb-1 text-sm font-semibold dark:text-white">Coffee detail page - Main Page
                                    </p>
                                    <p class="text-xs text-muted dark:text-darkmuted">Due Date: Jun 20, 2022</p>
                                </div>
                                <img class="w-[42px] h-[42px] flex-none rounded-full overflow-hidden object-cover"
                                    src="{{ URL::asset('build/images/kickstarter.png') }}" alt="" />
                            </div>
                            <div class="flex items-center justify-between gap-2 mb-3 text-xs">
                                <img class="flex-none object-cover w-6 h-6 overflow-hidden rounded-full"
                                    src="{{ URL::asset('build/images/avatar-20.png') }}" alt="" />
                                <div class="text-xs text-success">
                                    <span
                                        class="h-1.5 w-1.5 rounded-full inline-block relative -top-px bg-current ltr:mr-0.5 rtl:ml-0.5"></span>
                                    <span>Compated</span>
                                </div>
                            </div>
                            <div class="relative w-full h-1 mt-1 mb-2 overflow-hidden rounded-full">
                                <div class="absolute w-full h-full bg-light"></div>
                                <div class="absolute h-full bg-success" style="width: 100%;"></div>
                            </div>
                            <div class="flex items-center justify-between gap-4 text-xs">
                                <p>74 <span class="text-muted dark:text-darkmuted">/</span> 74 <span
                                        class="text-muted dark:text-white/80">Total Tasks</span></p>
                                <p>100%</p>
                            </div>
                        </div>
                        <div class="p-5 border rounded border-black/10 dark:border-darkborder">
                            <div class="flex gap-4 mb-4">
                                <div class="flex-1">
                                    <p class="mb-1 text-sm font-semibold dark:text-white">Drinking bottle graphics</p>
                                    <p class="text-xs text-muted dark:text-darkmuted">Due Date: Jan 10, 2020</p>
                                </div>
                                <img class="w-[42px] h-[42px] flex-none rounded-full overflow-hidden object-cover"
                                    src="{{ URL::asset('build/images/patreon.png') }}" alt="" />
                            </div>
                            <div class="flex items-center justify-between gap-2 mb-3 text-xs">
                                <div class="flex items-center justify-start -space-x-1.5">
                                    <img class="object-cover w-6 h-6 overflow-hidden rounded-full ring-2 ring-white dark:ring-darkborder"
                                        src="{{ URL::asset('build/images/avatar-5.png') }}" alt="" />
                                    <img class="object-cover w-6 h-6 overflow-hidden rounded-full ring-2 ring-white dark:ring-darkborder"
                                        src="{{ URL::asset('build/images/avatar-7.png') }}" alt="" />
                                    <span
                                        class="flex items-center justify-center object-cover w-6 h-6 text-xs text-center rounded-full bg-light ring-2 ring-white dark:ring-darkborder">+2</span>
                                </div>
                                <div class="text-xs text-danger">
                                    <span
                                        class="h-1.5 w-1.5 rounded-full inline-block relative -top-px bg-current ltr:mr-0.5 rtl:ml-0.5"></span>
                                    <span>Rejected</span>
                                </div>
                            </div>
                            <div class="relative w-full h-1 mt-1 mb-2 overflow-hidden rounded-full">
                                <div class="absolute w-full h-full bg-light"></div>
                                <div class="absolute h-full bg-danger" style="width: 40%;"></div>
                            </div>
                            <div class="flex items-center justify-between gap-4 text-xs">
                                <p>19 <span class="text-muted dark:text-darkmuted">/</span> 49 <span
                                        class="text-muted dark:text-white/80">Total Tasks</span></p>
                                <p>40%</p>
                            </div>
                        </div>
                    </div>
                    <div id="sortablefour" class="space-y-4">
                        <div class="p-5 border rounded border-black/10 dark:border-darkborder">
                            <div class="flex gap-4 mb-4">
                                <div class="flex-1">
                                    <p class="mb-1 text-sm font-semibold dark:text-white">Company logo design</p>
                                    <p class="text-xs text-muted dark:text-darkmuted">Due Date: Feb 28, 2023</p>
                                </div>
                                <img class="w-[42px] h-[42px] flex-none rounded-full overflow-hidden object-cover"
                                    src="{{ URL::asset('build/images/zendesk.png') }}" alt="" />
                            </div>
                            <div class="flex items-center justify-between gap-2 mb-3 text-xs">
                                <img class="flex-none object-cover w-6 h-6 overflow-hidden rounded-full"
                                    src="{{ URL::asset('build/images/avatar-17.png') }}" alt="" />
                                <div class="text-xs text-success">
                                    <span
                                        class="h-1.5 w-1.5 rounded-full inline-block relative -top-px bg-current ltr:mr-0.5 rtl:ml-0.5"></span>
                                    <span>Complated</span>
                                </div>
                            </div>
                            <div class="relative w-full h-1 mt-1 mb-2 overflow-hidden rounded-full">
                                <div class="absolute w-full h-full bg-light"></div>
                                <div class="absolute h-full bg-success" style="width: 100%;"></div>
                            </div>
                            <div class="flex items-center justify-between gap-4 text-xs">
                                <p>18 <span class="text-muted dark:text-darkmuted">/</span> 18 <span
                                        class="text-muted dark:text-white/80">Total Tasks</span></p>
                                <p>100%</p>
                            </div>
                        </div>
                        <div class="p-5 border rounded border-black/10 dark:border-darkborder">
                            <div class="flex gap-4 mb-4">
                                <div class="flex-1">
                                    <p class="mb-1 text-sm font-semibold dark:text-white">Drinking bottle graphics</p>
                                    <p class="text-xs text-muted dark:text-darkmuted">Due Date: Jun 11, 2023</p>
                                </div>
                                <img class="w-[42px] h-[42px] flex-none rounded-full overflow-hidden object-cover"
                                    src="{{ URL::asset('build/images/marvel.png') }}" alt="" />
                            </div>
                            <div class="flex items-center justify-between gap-2 mb-3 text-xs">
                                <div class="flex items-center justify-start -space-x-1.5">
                                    <img class="object-cover w-6 h-6 overflow-hidden rounded-full ring-2 ring-white dark:ring-darkborder"
                                        src="{{ URL::asset('build/images/avatar-13.png') }}" alt="" />
                                    <img class="object-cover w-6 h-6 overflow-hidden rounded-full ring-2 ring-white dark:ring-darkborder"
                                        src="{{ URL::asset('build/images/avatar-10.png') }}" alt="" />
                                    <span
                                        class="flex items-center justify-center object-cover w-6 h-6 text-xs text-center rounded-full bg-light ring-2 ring-white dark:ring-darkborder">+3</span>
                                </div>
                                <div class="text-xs text-info">
                                    <span
                                        class="h-1.5 w-1.5 rounded-full inline-block relative -top-px bg-current ltr:mr-0.5 rtl:ml-0.5"></span>
                                    <span>In Progress</span>
                                </div>
                            </div>
                            <div class="relative w-full h-1 mt-1 mb-2 overflow-hidden rounded-full">
                                <div class="absolute w-full h-full bg-light"></div>
                                <div class="absolute h-full bg-info" style="width: 64%;"></div>
                            </div>
                            <div class="flex items-center justify-between gap-4 text-xs">
                                <p>19 <span class="text-muted dark:text-darkmuted">/</span> 29 <span
                                        class="text-muted dark:text-white/80">Total Tasks</span></p>
                                <p>64%</p>
                            </div>
                        </div>
                        <div class="p-5 border rounded border-black/10 dark:border-darkborder">
                            <div class="flex gap-4 mb-4">
                                <div class="flex-1">
                                    <p class="mb-1 text-sm font-semibold dark:text-white">Poster illustation design</p>
                                    <p class="text-xs text-muted dark:text-darkmuted">Due Date: Nov 10, 2024</p>
                                </div>
                                <img class="w-[42px] h-[42px] flex-none rounded-full overflow-hidden object-cover"
                                    src="{{ URL::asset('build/images/ok.png') }}" alt="" />
                            </div>
                            <div class="flex items-center justify-between gap-2 mb-3 text-xs">
                                <img class="flex-none object-cover w-6 h-6 overflow-hidden rounded-full"
                                    src="{{ URL::asset('build/images/avatar-16.png') }}" alt="" />
                                <div class="text-xs text-warning">
                                    <span
                                        class="h-1.5 w-1.5 rounded-full inline-block relative -top-px bg-current ltr:mr-0.5 rtl:ml-0.5"></span>
                                    <span>Review</span>
                                </div>
                            </div>
                            <div class="relative w-full h-1 mt-1 mb-2 overflow-hidden rounded-full">
                                <div class="absolute w-full h-full bg-light"></div>
                                <div class="absolute h-full bg-warning" style="width: 15%;"></div>
                            </div>
                            <div class="flex items-center justify-between gap-4 text-xs">
                                <p>1 <span class="text-muted dark:text-darkmuted">/</span> 10 <span
                                        class="text-muted dark:text-white/80">Total Tasks</span></p>
                                <p>15%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Handler</h2>
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
                    <div id="handlerone" class="space-y-4">
                        <div
                            class="flex items-start justify-between gap-4 p-5 border rounded cursor-move handle border-black/10 dark:border-darkborder">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12">
                                    <img src="{{ URL::asset('build/images/avatar-1.png') }}" class="rounded" alt="">
                                </div>
                                <div>
                                    <p class="text-base font-semibold dark:text-white">Lori M. McGee</p>
                                    <p class="text-muted dark:text-darkmuted">LoriMMcGee@jourrapide.com</p>
                                </div>
                            </div>
                            <div>
                                <span class="cursor-pointer group">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="w-5 h-5 text-muted group-hover:hidden">
                                        <path fill="currentColor"
                                            d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26ZM12.0006 15.968L16.2473 18.3451L15.2988 13.5717L18.8719 10.2674L14.039 9.69434L12.0006 5.27502L9.96214 9.69434L5.12921 10.2674L8.70231 13.5717L7.75383 18.3451L12.0006 15.968Z">
                                        </path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="hidden w-5 h-5 text-purple group-hover:block">
                                        <path fill="currentColor"
                                            d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div
                            class="flex items-start justify-between gap-4 p-5 border rounded cursor-move handle border-black/10 dark:border-darkborder">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12">
                                    <img src="{{ URL::asset('build/images/avatar-2.png') }}" class="rounded" alt="">
                                </div>
                                <div>
                                    <p class="text-base font-semibold dark:text-white">Sally R. Roberts</p>
                                    <p class="text-muted dark:text-darkmuted">SallyRRoberts@teleworm.us</p>
                                </div>
                            </div>
                            <div>
                                <span class="cursor-pointer group">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="w-5 h-5 text-muted group-hover:hidden">
                                        <path fill="currentColor"
                                            d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26ZM12.0006 15.968L16.2473 18.3451L15.2988 13.5717L18.8719 10.2674L14.039 9.69434L12.0006 5.27502L9.96214 9.69434L5.12921 10.2674L8.70231 13.5717L7.75383 18.3451L12.0006 15.968Z">
                                        </path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="hidden w-5 h-5 text-purple group-hover:block">
                                        <path fill="currentColor"
                                            d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div
                            class="flex items-start justify-between gap-4 p-5 border rounded cursor-move handle border-black/10 dark:border-darkborder">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12">
                                    <img src="{{ URL::asset('build/images/avatar-3.png') }}" class="rounded" alt="">
                                </div>
                                <div>
                                    <p class="text-base font-semibold dark:text-white">Shona G. Ayala</p>
                                    <p class="text-muted dark:text-darkmuted">ShonaGAyala@dayrep.com</p>
                                </div>
                            </div>
                            <div>
                                <span class="cursor-pointer group">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="w-5 h-5 text-muted group-hover:hidden">
                                        <path fill="currentColor"
                                            d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26ZM12.0006 15.968L16.2473 18.3451L15.2988 13.5717L18.8719 10.2674L14.039 9.69434L12.0006 5.27502L9.96214 9.69434L5.12921 10.2674L8.70231 13.5717L7.75383 18.3451L12.0006 15.968Z">
                                        </path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="hidden w-5 h-5 text-purple group-hover:block">
                                        <path fill="currentColor"
                                            d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div id="handlertwo" class="space-y-4">
                        <div
                            class="flex items-start justify-between gap-4 p-5 border rounded cursor-move handle border-black/10 dark:border-darkborder">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12">
                                    <img src="{{ URL::asset('build/images/avatar-4.png') }}" class="rounded" alt="">
                                </div>
                                <div>
                                    <p class="text-base font-semibold dark:text-white">Dianne M. Moore</p>
                                    <p class="text-muted dark:text-darkmuted">DianneMMoore@armyspy.com</p>
                                </div>
                            </div>
                            <div>
                                <span class="cursor-pointer group">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="w-5 h-5 text-muted group-hover:hidden">
                                        <path fill="currentColor"
                                            d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26ZM12.0006 15.968L16.2473 18.3451L15.2988 13.5717L18.8719 10.2674L14.039 9.69434L12.0006 5.27502L9.96214 9.69434L5.12921 10.2674L8.70231 13.5717L7.75383 18.3451L12.0006 15.968Z">
                                        </path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="hidden w-5 h-5 text-purple group-hover:block">
                                        <path fill="currentColor"
                                            d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div
                            class="flex items-start justify-between gap-4 p-5 border rounded cursor-move handle border-black/10 dark:border-darkborder">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12">
                                    <img src="{{ URL::asset('build/images/avatar-5.png') }}" class="rounded" alt="">
                                </div>
                                <div>
                                    <p class="text-base font-semibold dark:text-white">Judy M. Beier</p>
                                    <p class="text-muted dark:text-darkmuted">JudyMBeier@rhyta.com</p>
                                </div>
                            </div>
                            <div>
                                <span class="cursor-pointer group">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="w-5 h-5 text-muted group-hover:hidden">
                                        <path fill="currentColor"
                                            d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26ZM12.0006 15.968L16.2473 18.3451L15.2988 13.5717L18.8719 10.2674L14.039 9.69434L12.0006 5.27502L9.96214 9.69434L5.12921 10.2674L8.70231 13.5717L7.75383 18.3451L12.0006 15.968Z">
                                        </path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="hidden w-5 h-5 text-purple group-hover:block">
                                        <path fill="currentColor"
                                            d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div
                            class="flex items-start justify-between gap-4 p-5 border rounded cursor-move handle border-black/10 dark:border-darkborder">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12">
                                    <img src="{{ URL::asset('build/images/avatar-6.png') }}" class="rounded" alt="">
                                </div>
                                <div>
                                    <p class="text-base font-semibold dark:text-white">Donna R. Leon</p>
                                    <p class="text-muted dark:text-darkmuted">DonnaRLeon@dayrep.com</p>
                                </div>
                            </div>
                            <div>
                                <span class="cursor-pointer group">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="w-5 h-5 text-muted group-hover:hidden">
                                        <path fill="currentColor"
                                            d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26ZM12.0006 15.968L16.2473 18.3451L15.2988 13.5717L18.8719 10.2674L14.039 9.69434L12.0006 5.27502L9.96214 9.69434L5.12921 10.2674L8.70231 13.5717L7.75383 18.3451L12.0006 15.968Z">
                                        </path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="hidden w-5 h-5 text-purple group-hover:block">
                                        <path fill="currentColor"
                                            d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div
                            class="flex items-start justify-between gap-4 p-5 border rounded cursor-move handle border-black/10 dark:border-darkborder">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12">
                                    <img src="{{ URL::asset('build/images/avatar-8.png') }}" class="rounded" alt="">
                                </div>
                                <div>
                                    <p class="text-base font-semibold dark:text-white">Kevin D. Smith</p>
                                    <p class="text-muted dark:text-darkmuted">KevinDSmith@jourrapide.com</p>
                                </div>
                            </div>
                            <div>
                                <span class="cursor-pointer group">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="w-5 h-5 text-muted group-hover:hidden">
                                        <path fill="currentColor"
                                            d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26ZM12.0006 15.968L16.2473 18.3451L15.2988 13.5717L18.8719 10.2674L14.039 9.69434L12.0006 5.27502L9.96214 9.69434L5.12921 10.2674L8.70231 13.5717L7.75383 18.3451L12.0006 15.968Z">
                                        </path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="hidden w-5 h-5 text-purple group-hover:block">
                                        <path fill="currentColor"
                                            d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div id="handlerthree" class="space-y-4">
                        <div
                            class="flex items-start justify-between gap-4 p-5 border rounded cursor-move handle border-black/10 dark:border-darkborder">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12">
                                    <img src="{{ URL::asset('build/images/avatar-7.png') }}" class="rounded" alt="">
                                </div>
                                <div>
                                    <p class="text-base font-semibold dark:text-white">Donald C. Ritch</p>
                                    <p class="text-muted dark:text-darkmuted">DonaldCRitch@jourrapide.com</p>
                                </div>
                            </div>
                            <div>
                                <span class="cursor-pointer group">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="w-5 h-5 text-muted group-hover:hidden">
                                        <path fill="currentColor"
                                            d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26ZM12.0006 15.968L16.2473 18.3451L15.2988 13.5717L18.8719 10.2674L14.039 9.69434L12.0006 5.27502L9.96214 9.69434L5.12921 10.2674L8.70231 13.5717L7.75383 18.3451L12.0006 15.968Z">
                                        </path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="hidden w-5 h-5 text-purple group-hover:block">
                                        <path fill="currentColor"
                                            d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div
                            class="flex items-start justify-between gap-4 p-5 border rounded cursor-move handle border-black/10 dark:border-darkborder">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12">
                                    <img src="{{ URL::asset('build/images/avatar-9.png') }}" class="rounded" alt="">
                                </div>
                                <div>
                                    <p class="text-base font-semibold dark:text-white">Anthony M. Jones</p>
                                    <p class="text-muted dark:text-darkmuted">AnthonyMJones@rhyta.com</p>
                                </div>
                            </div>
                            <div>
                                <span class="cursor-pointer group">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="w-5 h-5 text-muted group-hover:hidden">
                                        <path fill="currentColor"
                                            d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26ZM12.0006 15.968L16.2473 18.3451L15.2988 13.5717L18.8719 10.2674L14.039 9.69434L12.0006 5.27502L9.96214 9.69434L5.12921 10.2674L8.70231 13.5717L7.75383 18.3451L12.0006 15.968Z">
                                        </path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="hidden w-5 h-5 text-purple group-hover:block">
                                        <path fill="currentColor"
                                            d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div id="handlerfour" class="space-y-4">
                        <div
                            class="flex items-start justify-between gap-4 p-5 border rounded cursor-move handle border-black/10 dark:border-darkborder">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12">
                                    <img src="{{ URL::asset('build/images/avatar-10.png') }}" class="rounded" alt="">
                                </div>
                                <div>
                                    <p class="text-base font-semibold dark:text-white">Ronald H. Bullock</p>
                                    <p class="text-muted dark:text-darkmuted">RonaldHBullock@armyspy.com</p>
                                </div>
                            </div>
                            <div>
                                <span class="cursor-pointer group">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="w-5 h-5 text-muted group-hover:hidden">
                                        <path fill="currentColor"
                                            d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26ZM12.0006 15.968L16.2473 18.3451L15.2988 13.5717L18.8719 10.2674L14.039 9.69434L12.0006 5.27502L9.96214 9.69434L5.12921 10.2674L8.70231 13.5717L7.75383 18.3451L12.0006 15.968Z">
                                        </path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="hidden w-5 h-5 text-purple group-hover:block">
                                        <path fill="currentColor"
                                            d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div
                            class="flex items-start justify-between gap-4 p-5 border rounded cursor-move handle border-black/10 dark:border-darkborder">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12">
                                    <img src="{{ URL::asset('build/images/avatar-11.png') }}" class="rounded" alt="">
                                </div>
                                <div>
                                    <p class="text-base font-semibold dark:text-white">Valerie E. Cook</p>
                                    <p class="text-muted dark:text-darkmuted">ValerieECook@jourrapide.com</p>
                                </div>
                            </div>
                            <div>
                                <span class="cursor-pointer group">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="w-5 h-5 text-muted group-hover:hidden">
                                        <path fill="currentColor"
                                            d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26ZM12.0006 15.968L16.2473 18.3451L15.2988 13.5717L18.8719 10.2674L14.039 9.69434L12.0006 5.27502L9.96214 9.69434L5.12921 10.2674L8.70231 13.5717L7.75383 18.3451L12.0006 15.968Z">
                                        </path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="hidden w-5 h-5 text-purple group-hover:block">
                                        <path fill="currentColor"
                                            d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div
                            class="flex items-start justify-between gap-4 p-5 border rounded cursor-move handle border-black/10 dark:border-darkborder">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12">
                                    <img src="{{ URL::asset('build/images/avatar-12.png') }}" class="rounded" alt="">
                                </div>
                                <div>
                                    <p class="text-base font-semibold dark:text-white">Christine J. Muller</p>
                                    <p class="text-muted dark:text-darkmuted">ChristineJMuller@dayrep.com</p>
                                </div>
                            </div>
                            <div>
                                <span class="cursor-pointer group">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="w-5 h-5 text-muted group-hover:hidden">
                                        <path fill="currentColor"
                                            d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26ZM12.0006 15.968L16.2473 18.3451L15.2988 13.5717L18.8719 10.2674L14.039 9.69434L12.0006 5.27502L9.96214 9.69434L5.12921 10.2674L8.70231 13.5717L7.75383 18.3451L12.0006 15.968Z">
                                        </path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="hidden w-5 h-5 text-purple group-hover:block">
                                        <path fill="currentColor"
                                            d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Card -->
@endsection
@section('scripts')
    <!-- Sortable Js -->
    <script src="{{ URL::asset('build/js/sortable.min.js') }}"></script>

    <script>
        new Sortable(sortableone, {
            group: 'shared',
            animation: 150,
        });
        new Sortable(sortabletwo, {
            group: 'shared',
            animation: 150
        });
        new Sortable(sortablethree, {
            group: 'shared',
            animation: 150
        });
        new Sortable(sortablefour, {
            group: 'shared',
            animation: 150
        });
        new Sortable(handlerone, {
            group: 'shared',
            handle: '.handle', // handle's class
            animation: 150
        });
        new Sortable(handlertwo, {
            group: 'shared',
            handle: '.handle', // handle's class
            animation: 150
        });
        new Sortable(handlerthree, {
            group: 'shared',
            handle: '.handle', // handle's class
            animation: 150
        });
        new Sortable(handlerfour, {
            group: 'shared',
            handle: '.handle', // handle's class
            animation: 150
        });
    </script>
@endsection
