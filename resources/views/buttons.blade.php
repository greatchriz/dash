@extends('layouts.master')
@section('title')
    Buttons
@endsection
@section('content')
    <x-breadcrumb title="Buttons" pagetitle="Elements" />

    <!-- Start All Card -->
    <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Buttons</h2>
                <div class="flex flex-wrap gap-4">
                    <button type="button"
                        class="btn bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]">Primary</button>
                    <button type="button"
                        class="btn bg-info border border-info rounded-md text-white transition-all duration-300 hover:bg-info/[0.85] hover:border-info/[0.85]">Info</button>
                    <button type="button"
                        class="btn bg-success border border-success rounded-md text-white transition-all duration-300 hover:bg-success/[0.85] hover:border-success/[0.85]">Success</button>
                    <button type="button"
                        class="btn bg-warning border border-warning rounded-md text-white transition-all duration-300 hover:bg-warning/[0.85] hover:border-warning/[0.85]">Warning</button>
                    <button type="button"
                        class="btn bg-danger border border-danger rounded-md text-white transition-all duration-300 hover:bg-danger/[0.85] hover:border-danger/[0.85]">Danger</button>
                    <button type="button"
                        class="btn bg-black border border-black rounded-md text-white transition-all duration-300 hover:bg-black/[0.85] hover:border-black/[0.85]">black</button>
                    <button type="button"
                        class="btn bg-muted border border-muted rounded-md text-white transition-all duration-300 hover:bg-muted/[0.85] hover:border-muted/[0.85] dark:text-white dark:border-darkmuted dark:hover:text-white">Secondary</button>
                    <button type="button"
                        class="btn bg-light border border-light rounded-md text-black transition-all duration-300 hover:bg-light/[0.85] hover:border-light/[0.85]">Light</button>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Rounded Buttons</h2>
                <div class="flex flex-wrap gap-4">
                    <button type="button"
                        class="btn bg-purple border border-purple rounded-full text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]">Primary</button>
                    <button type="button"
                        class="btn bg-info border border-info rounded-full text-white transition-all duration-300 hover:bg-info/[0.85] hover:border-info/[0.85]">Info</button>
                    <button type="button"
                        class="btn bg-success border border-success rounded-full text-white transition-all duration-300 hover:bg-success/[0.85] hover:border-success/[0.85]">Success</button>
                    <button type="button"
                        class="btn bg-warning border border-warning rounded-full text-white transition-all duration-300 hover:bg-warning/[0.85] hover:border-warning/[0.85]">Warning</button>
                    <button type="button"
                        class="btn bg-danger border border-danger rounded-full text-white transition-all duration-300 hover:bg-danger/[0.85] hover:border-danger/[0.85]">Danger</button>
                    <button type="button"
                        class="btn bg-black border border-black rounded-full text-white transition-all duration-300 hover:bg-black/[0.85] hover:border-black/[0.85]">black</button>
                    <button type="button"
                        class="btn bg-muted border border-muted rounded-full text-white transition-all duration-300 hover:bg-muted/[0.85] hover:border-muted/[0.85] dark:text-white dark:border-darkmuted dark:hover:text-white">Secondary</button>
                    <button type="button"
                        class="btn bg-light border border-light rounded-full text-black transition-all duration-300 hover:bg-light/[0.85] hover:border-light/[0.85]">Light</button>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Outlined Buttons</h2>
                <div class="flex flex-wrap gap-4">
                    <button type="button"
                        class="transition-all duration-300 border rounded-md btn text-purple border-purple hover:bg-purple hover:text-white">Primary</button>
                    <button type="button"
                        class="transition-all duration-300 border rounded-md btn text-info border-info hover:bg-info hover:text-white">Info</button>
                    <button type="button"
                        class="transition-all duration-300 border rounded-md btn text-success border-success hover:bg-success hover:text-white">Success</button>
                    <button type="button"
                        class="transition-all duration-300 border rounded-md btn text-warning border-warning hover:bg-warning hover:text-white">Warning</button>
                    <button type="button"
                        class="transition-all duration-300 border rounded-md btn text-danger border-danger hover:bg-danger hover:text-white">Danger</button>
                    <button type="button"
                        class="text-black transition-all duration-300 border border-black rounded-md btn hover:bg-black hover:text-white dark:text-white dark:hover:text-white dark:border-darkborder dark:hover:border-black">black</button>
                    <button type="button"
                        class="transition-all duration-300 border rounded-md btn text-muted border-muted hover:bg-muted hover:text-white dark:text-darkmuted dark:border-darkmuted dark:hover:text-white">Secondary</button>
                    <button type="button"
                        class="text-black transition-all duration-300 border rounded-md btn border-light hover:bg-light hover:text-black dark:text-white dark:hover:text-black">Light</button>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Outlined with Rounded
                    Buttons</h2>
                <div class="flex flex-wrap gap-4">
                    <button type="button"
                        class="transition-all duration-300 border rounded-full btn text-purple border-purple hover:bg-purple hover:text-white">Primary</button>
                    <button type="button"
                        class="transition-all duration-300 border rounded-full btn text-info border-info hover:bg-info hover:text-white">Info</button>
                    <button type="button"
                        class="transition-all duration-300 border rounded-full btn text-success border-success hover:bg-success hover:text-white">Success</button>
                    <button type="button"
                        class="transition-all duration-300 border rounded-full btn text-warning border-warning hover:bg-warning hover:text-white">Warning</button>
                    <button type="button"
                        class="transition-all duration-300 border rounded-full btn text-danger border-danger hover:bg-danger hover:text-white">Danger</button>
                    <button type="button"
                        class="text-black transition-all duration-300 border border-black rounded-full btn hover:bg-black hover:text-white dark:text-white dark:hover:text-white dark:border-darkborder dark:hover:border-black">black</button>
                    <button type="button"
                        class="transition-all duration-300 border rounded-full btn text-muted border-muted hover:bg-muted hover:text-white dark:text-darkmuted dark:border-darkmuted dark:hover:text-white">Secondary</button>
                    <button type="button"
                        class="text-black transition-all duration-300 border rounded-full btn border-light hover:bg-light hover:text-black dark:text-white dark:hover:text-black">Light</button>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Disabled Buttons</h2>
                <div class="flex flex-wrap gap-4">
                    <button type="button"
                        class="btn bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85] opacity-60 pointer-events-none">Primary</button>
                    <button type="button"
                        class="btn bg-info border border-info rounded-md text-white transition-all duration-300 hover:bg-info/[0.85] hover:border-info/[0.85] opacity-60 pointer-events-none">Info</button>
                    <button type="button"
                        class="btn bg-success border border-success rounded-md text-white transition-all duration-300 hover:bg-success/[0.85] hover:border-success/[0.85] opacity-60 pointer-events-none">Success</button>
                    <button type="button"
                        class="btn bg-warning border border-warning rounded-md text-white transition-all duration-300 hover:bg-warning/[0.85] hover:border-warning/[0.85] opacity-60 pointer-events-none">Warning</button>
                    <button type="button"
                        class="btn bg-danger border border-danger rounded-md text-white transition-all duration-300 hover:bg-danger/[0.85] hover:border-danger/[0.85] opacity-60 pointer-events-none">Danger</button>
                    <button type="button"
                        class="btn bg-black border border-black rounded-md text-white transition-all duration-300 hover:bg-black/[0.85] hover:border-black/[0.85] opacity-60 pointer-events-none">black</button>
                    <button type="button"
                        class="btn bg-muted border border-muted rounded-md text-white transition-all duration-300 hover:bg-muted/[0.85] hover:border-muted/[0.85] opacity-60 pointer-events-none dark:text-white dark:border-darkmuted">Secondary</button>
                    <button type="button"
                        class="btn bg-light border border-light rounded-md text-black transition-all duration-300 hover:bg-light/[0.85] hover:border-light/[0.85] opacity-60 pointer-events-none">Light</button>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Buttons with Label</h2>
                <div class="flex flex-wrap gap-4">
                    <button type="button"
                        class="inline-flex align-middle bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]">
                        <p class="w-10 h-10 py-3 align-middle bg-white ltr:rounded-l rtl:rounded-r bg-opacity-20">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 mx-auto">
                                <path
                                    d="M4.00098 20V14C4.00098 9.58172 7.5827 6 12.001 6C16.4193 6 20.001 9.58172 20.001 14V20H21.001V22H3.00098V20H4.00098ZM6.00098 20H18.001V14C18.001 10.6863 15.3147 8 12.001 8C8.68727 8 6.00098 10.6863 6.00098 14V20ZM11.001 2H13.001V5H11.001V2ZM19.7792 4.80761L21.1934 6.22183L19.0721 8.34315L17.6578 6.92893L19.7792 4.80761ZM2.80859 6.22183L4.22281 4.80761L6.34413 6.92893L4.92991 8.34315L2.80859 6.22183ZM7.00098 14C7.00098 11.2386 9.23956 9 12.001 9V11C10.3441 11 9.00098 12.3431 9.00098 14H7.00098Z"
                                    fill="currentColor"></path>
                            </svg>
                        </p>
                        <span class="px-2.5 leading-[2.8]">Primary</span>
                    </button>
                    <button type="button"
                        class="inline-flex align-middle bg-success border border-success rounded-md text-white transition-all duration-300 hover:bg-success/[0.85] hover:border-success/[0.85]">
                        <p class="w-10 h-10 py-3 align-middle bg-white ltr:rounded-l rtl:rounded-r bg-opacity-20">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 mx-auto">
                                <path
                                    d="M11.602 13.7599L13.014 15.1719L21.4795 6.7063L22.8938 8.12051L13.014 18.0003L6.65 11.6363L8.06421 10.2221L10.189 12.3469L11.6025 13.7594L11.602 13.7599ZM11.6037 10.9322L16.5563 5.97949L17.9666 7.38977L13.014 12.3424L11.6037 10.9322ZM8.77698 16.5873L7.36396 18.0003L1 11.6363L2.41421 10.2221L3.82723 11.6352L3.82604 11.6363L8.77698 16.5873Z"
                                    fill="currentColor"></path>
                            </svg>
                        </p>
                        <span class="px-2.5 leading-[2.8]">Success</span>
                    </button>
                    <button type="button"
                        class="inline-flex align-middle bg-warning border border-warning rounded-md text-white transition-all duration-300 hover:bg-warning/[0.85] hover:border-warning/[0.85]">
                        <p class="w-10 h-10 py-3 align-middle bg-white ltr:rounded-l rtl:rounded-r bg-opacity-20">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 mx-auto">
                                <path
                                    d="M12.865 3.00017L22.3912 19.5002C22.6674 19.9785 22.5035 20.5901 22.0252 20.8662C21.8732 20.954 21.7008 21.0002 21.5252 21.0002H2.47266C1.92037 21.0002 1.47266 20.5525 1.47266 20.0002C1.47266 19.8246 1.51886 19.6522 1.60663 19.5002L11.1329 3.00017C11.4091 2.52187 12.0206 2.358 12.4989 2.63414C12.651 2.72191 12.7772 2.84815 12.865 3.00017ZM4.20471 19.0002H19.7932L11.9989 5.50017L4.20471 19.0002ZM10.9989 16.0002H12.9989V18.0002H10.9989V16.0002ZM10.9989 9.00017H12.9989V14.0002H10.9989V9.00017Z"
                                    fill="currentColor"></path>
                            </svg>
                        </p>
                        <span class="px-2.5 leading-[2.8]">Warning</span>
                    </button>
                    <button type="button"
                        class="inline-flex align-middle bg-danger border border-danger rounded-md text-white transition-all duration-300 hover:bg-danger/[0.85] hover:border-danger/[0.85]">
                        <p class="w-10 h-10 py-3 align-middle bg-white ltr:rounded-l rtl:rounded-r bg-opacity-20">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 mx-auto">
                                <path
                                    d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM11 7H13V9H11V7ZM11 11H13V17H11V11Z"
                                    fill="currentColor"></path>
                            </svg>
                        </p>
                        <span class="px-2.5 leading-[2.8]">Danger</span>
                    </button>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Buttons with leading icon
                </h2>
                <div class="flex flex-wrap gap-4">
                    <button type="button"
                        class="btn flex items-center gap-1.5 bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 mx-auto">
                            <path
                                d="M22 20H2V18H3V11.0314C3 6.04348 7.02944 2 12 2C16.9706 2 21 6.04348 21 11.0314V18H22V20ZM5 18H19V11.0314C19 7.14806 15.866 4 12 4C8.13401 4 5 7.14806 5 11.0314V18ZM9.5 21H14.5C14.5 22.3807 13.3807 23.5 12 23.5C10.6193 23.5 9.5 22.3807 9.5 21Z"
                                fill="currentColor"></path>
                        </svg>
                        Primary
                    </button>
                    <button type="button"
                        class="btn flex items-center gap-1.5 bg-success border border-success rounded-md text-white transition-all duration-300 hover:bg-success/[0.85] hover:border-success/[0.85]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 mx-auto">
                            <path
                                d="M11.602 13.7599L13.014 15.1719L21.4795 6.7063L22.8938 8.12051L13.014 18.0003L6.65 11.6363L8.06421 10.2221L10.189 12.3469L11.6025 13.7594L11.602 13.7599ZM11.6037 10.9322L16.5563 5.97949L17.9666 7.38977L13.014 12.3424L11.6037 10.9322ZM8.77698 16.5873L7.36396 18.0003L1 11.6363L2.41421 10.2221L3.82723 11.6352L3.82604 11.6363L8.77698 16.5873Z"
                                fill="currentColor"></path>
                        </svg>
                        Success
                    </button>
                    <button type="button"
                        class="btn flex items-center gap-1.5 bg-warning border border-warning rounded-md text-white transition-all duration-300 hover:bg-warning/[0.85] hover:border-warning/[0.85]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 mx-auto">
                            <path
                                d="M12.865 3.00017L22.3912 19.5002C22.6674 19.9785 22.5035 20.5901 22.0252 20.8662C21.8732 20.954 21.7008 21.0002 21.5252 21.0002H2.47266C1.92037 21.0002 1.47266 20.5525 1.47266 20.0002C1.47266 19.8246 1.51886 19.6522 1.60663 19.5002L11.1329 3.00017C11.4091 2.52187 12.0206 2.358 12.4989 2.63414C12.651 2.72191 12.7772 2.84815 12.865 3.00017ZM4.20471 19.0002H19.7932L11.9989 5.50017L4.20471 19.0002ZM10.9989 16.0002H12.9989V18.0002H10.9989V16.0002ZM10.9989 9.00017H12.9989V14.0002H10.9989V9.00017Z"
                                fill="currentColor"></path>
                        </svg>
                        Warning
                    </button>
                    <button type="button"
                        class="btn flex items-center gap-1.5 bg-danger border border-danger rounded-md text-white transition-all duration-300 hover:bg-danger/[0.85] hover:border-danger/[0.85]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 mx-auto">
                            <path
                                d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM11 7H13V9H11V7ZM11 11H13V17H11V11Z"
                                fill="currentColor"></path>
                        </svg>
                        Danger
                    </button>
                    <button type="button"
                        class="btn flex items-center gap-1.5 bg-black border border-black rounded-md text-white transition-all duration-300 hover:bg-black/[0.85] hover:border-black/[0.85]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 mx-auto">
                            <path
                                d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM7 13H9C9 14.6569 10.3431 16 12 16C13.6569 16 15 14.6569 15 13H17C17 15.7614 14.7614 18 12 18C9.23858 18 7 15.7614 7 13ZM8 11C7.17157 11 6.5 10.3284 6.5 9.5C6.5 8.67157 7.17157 8 8 8C8.82843 8 9.5 8.67157 9.5 9.5C9.5 10.3284 8.82843 11 8 11ZM16 11C15.1716 11 14.5 10.3284 14.5 9.5C14.5 8.67157 15.1716 8 16 8C16.8284 8 17.5 8.67157 17.5 9.5C17.5 10.3284 16.8284 11 16 11Z"
                                fill="currentColor"></path>
                        </svg>
                        black
                    </button>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Buttons icon</h2>
                <div class="flex flex-wrap gap-4">
                    <button type="button"
                        class="p-3 bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 mx-auto">
                            <path
                                d="M22 20H2V18H3V11.0314C3 6.04348 7.02944 2 12 2C16.9706 2 21 6.04348 21 11.0314V18H22V20ZM5 18H19V11.0314C19 7.14806 15.866 4 12 4C8.13401 4 5 7.14806 5 11.0314V18ZM9.5 21H14.5C14.5 22.3807 13.3807 23.5 12 23.5C10.6193 23.5 9.5 22.3807 9.5 21Z"
                                fill="currentColor"></path>
                        </svg>
                    </button>
                    <button type="button"
                        class="p-3 bg-success border border-success rounded-md text-white transition-all duration-300 hover:bg-success/[0.85] hover:border-success/[0.85]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 mx-auto">
                            <path
                                d="M11.602 13.7599L13.014 15.1719L21.4795 6.7063L22.8938 8.12051L13.014 18.0003L6.65 11.6363L8.06421 10.2221L10.189 12.3469L11.6025 13.7594L11.602 13.7599ZM11.6037 10.9322L16.5563 5.97949L17.9666 7.38977L13.014 12.3424L11.6037 10.9322ZM8.77698 16.5873L7.36396 18.0003L1 11.6363L2.41421 10.2221L3.82723 11.6352L3.82604 11.6363L8.77698 16.5873Z"
                                fill="currentColor"></path>
                        </svg>
                    </button>
                    <button type="button"
                        class="p-3 bg-warning border border-warning rounded-md text-white transition-all duration-300 hover:bg-warning/[0.85] hover:border-warning/[0.85]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 mx-auto">
                            <path
                                d="M12.865 3.00017L22.3912 19.5002C22.6674 19.9785 22.5035 20.5901 22.0252 20.8662C21.8732 20.954 21.7008 21.0002 21.5252 21.0002H2.47266C1.92037 21.0002 1.47266 20.5525 1.47266 20.0002C1.47266 19.8246 1.51886 19.6522 1.60663 19.5002L11.1329 3.00017C11.4091 2.52187 12.0206 2.358 12.4989 2.63414C12.651 2.72191 12.7772 2.84815 12.865 3.00017ZM4.20471 19.0002H19.7932L11.9989 5.50017L4.20471 19.0002ZM10.9989 16.0002H12.9989V18.0002H10.9989V16.0002ZM10.9989 9.00017H12.9989V14.0002H10.9989V9.00017Z"
                                fill="currentColor"></path>
                        </svg>
                    </button>
                    <button type="button"
                        class="p-3 bg-danger border border-danger rounded-md text-white transition-all duration-300 hover:bg-danger/[0.85] hover:border-danger/[0.85]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 mx-auto">
                            <path
                                d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM11 7H13V9H11V7ZM11 11H13V17H11V11Z"
                                fill="currentColor"></path>
                        </svg>
                    </button>
                    <button type="button"
                        class="p-3 bg-black border border-black rounded-md text-white transition-all duration-300 hover:bg-black/[0.85] hover:border-black/[0.85]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 mx-auto">
                            <path
                                d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM7 13H9C9 14.6569 10.3431 16 12 16C13.6569 16 15 14.6569 15 13H17C17 15.7614 14.7614 18 12 18C9.23858 18 7 15.7614 7 13ZM8 11C7.17157 11 6.5 10.3284 6.5 9.5C6.5 8.67157 7.17157 8 8 8C8.82843 8 9.5 8.67157 9.5 9.5C9.5 10.3284 8.82843 11 8 11ZM16 11C15.1716 11 14.5 10.3284 14.5 9.5C14.5 8.67157 15.1716 8 16 8C16.8284 8 17.5 8.67157 17.5 9.5C17.5 10.3284 16.8284 11 16 11Z"
                                fill="currentColor"></path>
                        </svg>
                    </button>
                    <button type="button"
                        class="p-3 bg-light border border-light rounded-md text-black transition-all duration-300 hover:bg-light/[0.85] hover:border-light/[0.85]">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4 mx-auto">
                            <path
                                d="M19 21.0001H5C4.44772 21.0001 4 20.5524 4 20.0001V11.0001L1 11.0001L11.3273 1.61162C11.7087 1.26488 12.2913 1.26488 12.6727 1.61162L23 11.0001L20 11.0001V20.0001C20 20.5524 19.5523 21.0001 19 21.0001ZM6 19.0001H18V9.15757L12 3.70302L6 9.15757V19.0001ZM8 15.0001H16V17.0001H8V15.0001Z"
                                fill="currentColor"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Button loader</h2>
                <div class="flex flex-wrap gap-4">
                    <button type="button"
                        class="btn flex items-center gap-1.5 bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="1.5"
                            fill="none" stroke-linecap="round" stroke-linejoin="round"
                            class="inline-block h-5 w-5 animate-[spin_2s_linear_infinite] align-middle">
                            <line x1="12" y1="2" x2="12" y2="6"></line>
                            <line x1="12" y1="18" x2="12" y2="22"></line>
                            <line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line>
                            <line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line>
                            <line x1="2" y1="12" x2="6" y2="12"></line>
                            <line x1="18" y1="12" x2="22" y2="12"></line>
                            <line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line>
                            <line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line>
                        </svg>
                        Primary
                    </button>
                    <button type="button"
                        class="btn flex items-center gap-1.5 bg-success border border-success rounded-md text-white transition-all duration-300 hover:bg-success/[0.85] hover:border-success/[0.85]">
                        <span
                            class="inline-block w-5 h-5 align-middle border-2 border-white rounded-full animate-spin border-l-transparent"></span>
                        Success
                    </button>
                    <button type="button"
                        class="btn flex items-center gap-2 bg-danger border border-danger rounded-md text-white transition-all duration-300 hover:bg-danger/[0.85] hover:border-danger/[0.85]">
                        <span
                            class="inline-block w-3 h-3 rounded-full animate-ping bg-white/30 group-hover:bg-white "></span>
                        Danger
                    </button>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Button loader with
                    Disabled</h2>
                <div class="flex flex-wrap gap-4">
                    <button type="button"
                        class="btn opacity-60 pointer-events-none flex items-center gap-1.5 bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="1.5"
                            fill="none" stroke-linecap="round" stroke-linejoin="round"
                            class="inline-block h-5 w-5 animate-[spin_2s_linear_infinite] align-middle">
                            <line x1="12" y1="2" x2="12" y2="6"></line>
                            <line x1="12" y1="18" x2="12" y2="22"></line>
                            <line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line>
                            <line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line>
                            <line x1="2" y1="12" x2="6" y2="12"></line>
                            <line x1="18" y1="12" x2="22" y2="12"></line>
                            <line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line>
                            <line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line>
                        </svg>
                        Primary
                    </button>
                    <button type="button"
                        class="btn opacity-60 pointer-events-none flex items-center gap-1.5 bg-success border border-success rounded-md text-white transition-all duration-300 hover:bg-success/[0.85] hover:border-success/[0.85]">
                        <span
                            class="inline-block w-5 h-5 align-middle border-2 border-white rounded-full animate-spin border-l-transparent"></span>
                        Success
                    </button>
                    <button type="button"
                        class="btn opacity-60 pointer-events-none flex items-center gap-2 bg-danger border border-danger rounded-md text-white transition-all duration-300 hover:bg-danger/[0.85] hover:border-danger/[0.85]">
                        <span
                            class="inline-block w-3 h-3 rounded-full animate-ping bg-white/30 group-hover:bg-white "></span>
                        Danger
                    </button>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Buttons soft Sizes</h2>
                <div class="flex flex-wrap items-center gap-4">
                    <button type="button"
                        class="btn bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]">Primary</button>
                    <button type="button"
                        class="py-2 px-5 text-[15px] bg-info border border-info rounded-md text-white transition-all duration-300 hover:bg-info/[0.85] hover:border-info/[0.85]">Info</button>
                    <button type="button"
                        class="btn py-1.5 px-4 text-sm bg-success border border-success rounded-md text-white transition-all duration-300 hover:bg-success/[0.85] hover:border-success/[0.85]">Success</button>
                    <button type="button"
                        class="btn py-1 px-3.5 text-[13px] bg-warning border border-warning rounded-md text-white transition-all duration-300 hover:bg-warning/[0.85] hover:border-warning/[0.85]">Warning</button>
                    <button type="button"
                        class="btn py-1 px-3.5 text-xs bg-danger border border-danger rounded-md text-white transition-all duration-300 hover:bg-danger/[0.85] hover:border-danger/[0.85]">Danger</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Card -->
@endsection
