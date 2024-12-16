    @extends('layouts.master')
    @section('title')
        Email
    @endsection
    @section('css')
        <!-- Icon Css -->
        <link rel="stylesheet" href="{{ URL::asset('build/css/remixicon.css') }}" />
    @endsection
    @section('content')
        <x-breadcrumb title="Email" pagetitle="Apps" />

        <!-- Start All Card -->
        <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
            <div class="min-h-[calc(100vh-212px)]">
                <div x-data="{ activeTab: 'inbox' }" class="flex flex-col items-start gap-4 tabs md:flex-row">
                    <div
                        class="flex-none w-full md:w-20 xl:w-[200px] dark:bg-darklight dark:border-darkborder overflow-y-auto rounded border border-black/10 p-4 bg-white md:h-[calc(100vh-210px)]">
                        <div class="flex flex-wrap gap-2 tabs-list md:flex-col">
                            <button @click="activeTab = 'compose'" :class="activeTab === 'compose' ? '' : ''"
                                class="bg-purple text-white px-3 py-2.5 flex items-center gap-3 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                    <path fill="currentColor"
                                        d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z">
                                    </path>
                                </svg>
                                <span class="hidden xl:block">Compose</span>
                            </button>
                            <button @click="activeTab = 'inbox'"
                                :class="activeTab === 'inbox' ? 'text-black dark:text-white bg-light/50 dark:bg-white/5' :
                                    'text-muted dark:text-darkmuted dark:hover:text-white hover:text-black'"
                                class="flex items-center gap-3 px-3 py-2 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                    <path fill="currentColor"
                                        d="M16.1 3C16.0344 3.32311 16 3.65753 16 4C16 4.34247 16.0344 4.67689 16.1 5H4.51146L12.0619 11.662L17.1098 7.14141C17.5363 7.66888 18.0679 8.10787 18.6728 8.42652L12.0718 14.338L4 7.21594V19H20V8.89998C20.3231 8.96557 20.6575 9 21 9C21.3425 9 21.6769 8.96557 22 8.89998V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H16.1ZM21 1C22.6569 1 24 2.34315 24 4C24 5.65685 22.6569 7 21 7C19.3431 7 18 5.65685 18 4C18 2.34315 19.3431 1 21 1Z">
                                    </path>
                                </svg>
                                <span class="hidden xl:block">Inbox</span>
                            </button>
                            <button @click="activeTab = 'sent'"
                                :class="activeTab === 'sent' ? 'text-black dark:text-white bg-light/50 dark:bg-white/5' :
                                    'text-muted dark:text-darkmuted dark:hover:text-white hover:text-black'"
                                class="flex items-center gap-3 px-3 py-2 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                    <path fill="currentColor"
                                        d="M21.7264 2.95706L16.2732 22.0433C16.1222 22.5718 15.7976 22.5958 15.5561 22.1127L10.9998 13.0002L1.92266 9.36931C1.41298 9.16544 1.41929 8.86034 1.9567 8.6812L21.0429 2.31913C21.5714 2.14297 21.8745 2.43878 21.7264 2.95706ZM19.0351 5.0966L6.81197 9.17097L12.4486 11.4256L15.4893 17.507L19.0351 5.0966Z">
                                    </path>
                                </svg>
                                <span class="hidden xl:block">Sent</span>
                            </button>
                            <button @click="activeTab = 'draft'"
                                :class="activeTab === 'draft' ? 'text-black dark:text-white bg-light/50 dark:bg-white/5' :
                                    'text-muted dark:text-darkmuted dark:hover:text-white hover:text-black'"
                                class="flex items-center gap-3 px-3 py-2 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                    <path fill="currentColor"
                                        d="M20 2C20.5523 2 21 2.44772 21 3V6.757L19 8.757V4H5V20H19V17.242L21 15.242V21C21 21.5523 20.5523 22 20 22H4C3.44772 22 3 21.5523 3 21V3C3 2.44772 3.44772 2 4 2H20ZM21.7782 8.80761L23.1924 10.2218L15.4142 18L13.9979 17.9979L14 16.5858L21.7782 8.80761ZM13 12V14H8V12H13ZM16 8V10H8V8H16Z">
                                    </path>
                                </svg>
                                <span class="hidden xl:block">Draft</span>
                            </button>
                            <button @click="activeTab = 'spam'"
                                :class="activeTab === 'spam' ? 'text-black dark:text-white bg-light/50 dark:bg-white/5' :
                                    'text-muted dark:text-darkmuted dark:hover:text-white hover:text-black'"
                                class="flex items-center gap-3 px-3 py-2 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                    <path fill="currentColor"
                                        d="M17.5 2.5L23 12L17.5 21.5H6.5L1 12L6.5 2.5H17.5ZM16.3469 4.5H7.65311L3.311 12L7.65311 19.5H16.3469L20.689 12L16.3469 4.5ZM11 15H13V17H11V15ZM11 7H13V13H11V7Z">
                                    </path>
                                </svg>
                                <span class="hidden xl:block">Spam</span>
                            </button>
                            <button @click="activeTab = 'trash'"
                                :class="activeTab === 'trash' ? 'text-black dark:text-white bg-light/50 dark:bg-white/5' :
                                    'text-muted dark:text-darkmuted dark:hover:text-white hover:text-black'"
                                class="flex items-center gap-3 px-3 py-2 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                    <path fill="currentColor"
                                        d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z">
                                    </path>
                                </svg>
                                <span class="hidden xl:block">Trash</span>
                            </button>
                            <button @click="activeTab = 'archive'"
                                :class="activeTab === 'archive' ? 'text-black dark:text-white bg-light/50 dark:bg-white/5' :
                                    'text-muted dark:text-darkmuted dark:hover:text-white hover:text-black'"
                                class="flex items-center gap-3 px-3 py-2 rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                    <path fill="currentColor"
                                        d="M20 3L22 7V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V7.00353L4 3H20ZM20 9H4V19H20V9ZM13 10V14H16L12 18L8 14H11V10H13ZM18.7639 5H5.23656L4.23744 7H19.7639L18.7639 5Z">
                                    </path>
                                </svg>
                                <span class="hidden xl:block">Archive</span>
                            </button>
                        </div>
                    </div>
                    <div class="flex-1 w-full tab-content md:w-auto">
                        <div x-show="activeTab === 'compose'" class="flex flex-col items-start lg:flex-row gap-7">
                            <div class="flex-1 md:h-[calc(100vh-210px)] w-full overflow-y-auto space-y-4">
                                <div
                                    class="bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                                    <div
                                        class="py-2.5 px-4 border-b border-black/10 dark:border-darkborder flex flex-wrap items-center gap-y-3 gap-x-12">
                                        <p class="text-muted dark:text-white">TO</p>
                                        <div class="flex flex-wrap gap-2">
                                            <div class="flex gap-2 p-1 rounded cursor-pointer bg-light/20 dark:bg-white/5">
                                                <img class="flex-none object-cover w-6 h-6 overflow-hidden rounded"
                                                    src="{{ URL::asset('build/images/user.png') }}" alt="" />
                                                <div class="flex items-center justify-between flex-1 gap-2">
                                                    <p>Stevens</p>
                                                    <a href="javaScript:;" class="text-muted hover:text-black">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            class="w-4 h-4">
                                                            <path fill="currentColor"
                                                                d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="flex gap-2 p-1 rounded bg-light/20 dark:bg-white/5">
                                                <img class="flex-none object-cover w-6 h-6 overflow-hidden rounded-full"
                                                    src="{{ URL::asset('build/images/slack.png') }}" alt="" />
                                                <div class="flex items-center justify-between flex-1 gap-2">
                                                    <p>Slack</p>
                                                    <a href="javaScript:;" class="text-muted hover:text-black">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            class="w-4 h-4">
                                                            <path fill="currentColor"
                                                                d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="flex gap-2 p-1 rounded-lg bg-light/20 dark:bg-white/5">
                                                <div class="flex items-center justify-between flex-1 gap-2">
                                                    <p>support@mail.com</p>
                                                    <a href="javaScript:;" class="text-muted hover:text-black">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            class="w-4 h-4">
                                                            <path fill="currentColor"
                                                                d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex gap-4 p-4">
                                        <p class="text-muted dark:text-white">Subject</p>
                                        <p>Introducing the Snow Dashboard UI Kit</p>
                                    </div>
                                </div>
                                <div class="relative">
                                    <div class="text-black" x-data="app()" x-init="init($refs.sliced)">
                                        <div
                                            class="overflow-hidden bg-white border rounded-md border-black/10 dark:bg-darklight dark:border-darkborder">
                                            <div
                                                class="flex flex-wrap w-full border-b border-black/10 dark:border-darkborder">
                                                <button
                                                    class="w-10 h-10 text-black outline-none focus:outline-none dark:text-white dark:hover:text-purple hover:text-purple active:bg-light/50"
                                                    @click="format('bold')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        class="w-5 h-5 mx-auto">
                                                        <path
                                                            d="M8 11H12.5C13.8807 11 15 9.88071 15 8.5C15 7.11929 13.8807 6 12.5 6H8V11ZM18 15.5C18 17.9853 15.9853 20 13.5 20H6V4H12.5C14.9853 4 17 6.01472 17 8.5C17 9.70431 16.5269 10.7981 15.7564 11.6058C17.0979 12.3847 18 13.837 18 15.5ZM8 13V18H13.5C14.8807 18 16 16.8807 16 15.5C16 14.1193 14.8807 13 13.5 13H8Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </button>
                                                <button
                                                    class="w-10 h-10 text-black outline-none focus:outline-none dark:text-white dark:hover:text-purple hover:text-purple active:bg-light/50"
                                                    @click="format('italic')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        class="w-5 h-5 mx-auto">
                                                        <path
                                                            d="M15 20H7V18H9.92661L12.0425 6H9V4H17V6H14.0734L11.9575 18H15V20Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </button>
                                                <button
                                                    class="w-10 h-10 mr-1 text-black outline-none focus:outline-none dark:text-white dark:hover:text-purple hover:text-purple active:bg-light/50"
                                                    @click="format('underline')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        class="w-5 h-5 mx-auto">
                                                        <path
                                                            d="M8 3V12C8 14.2091 9.79086 16 12 16C14.2091 16 16 14.2091 16 12V3H18V12C18 15.3137 15.3137 18 12 18C8.68629 18 6 15.3137 6 12V3H8ZM4 20H20V22H4V20Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </button>
                                                <button
                                                    class="w-10 h-10 text-black outline-none focus:outline-none dark:text-white dark:hover:text-purple hover:text-purple active:bg-light/50"
                                                    @click="format('formatBlock','P')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        class="w-5 h-5 mx-auto">
                                                        <path
                                                            d="M12 6V21H10V16C6.68629 16 4 13.3137 4 10C4 6.68629 6.68629 4 10 4H20V6H17V21H15V6H12ZM10 6C7.79086 6 6 7.79086 6 10C6 12.2091 7.79086 14 10 14V6Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </button>
                                                <button
                                                    class="w-10 h-10 text-black outline-none focus:outline-none dark:text-white dark:hover:text-purple hover:text-purple active:bg-light/50"
                                                    @click="format('formatBlock','H1')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        class="w-5 h-5 mx-auto">
                                                        <path
                                                            d="M13 20H11V13H4V20H2V4H4V11H11V4H13V20ZM21.0005 8V20H19.0005L19 10.204L17 10.74V8.67L19.5005 8H21.0005Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </button>
                                                <button
                                                    class="w-10 h-10 text-black outline-none focus:outline-none dark:text-white dark:hover:text-purple hover:text-purple active:bg-light/50"
                                                    @click="format('formatBlock','H2')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        class="w-5 h-5 mx-auto">
                                                        <path
                                                            d="M4 4V11H11V4H13V20H11V13H4V20H2V4H4ZM18.5 8C20.5711 8 22.25 9.67893 22.25 11.75C22.25 12.6074 21.9623 13.3976 21.4781 14.0292L21.3302 14.2102L18.0343 18H22V20H15L14.9993 18.444L19.8207 12.8981C20.0881 12.5908 20.25 12.1893 20.25 11.75C20.25 10.7835 19.4665 10 18.5 10C17.5818 10 16.8288 10.7071 16.7558 11.6065L16.75 11.75H14.75C14.75 9.67893 16.4289 8 18.5 8Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </button>
                                                <button
                                                    class="w-10 h-10 mr-1 text-black outline-none focus:outline-none dark:text-white dark:hover:text-purple hover:text-purple active:bg-light/50"
                                                    @click="format('formatBlock','H3')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        class="w-5 h-5 mx-auto">
                                                        <path
                                                            d="M22 8L21.9984 10L19.4934 12.883C21.0823 13.3184 22.25 14.7728 22.25 16.5C22.25 18.5711 20.5711 20.25 18.5 20.25C16.674 20.25 15.1528 18.9449 14.8184 17.2166L16.7821 16.8352C16.9384 17.6413 17.6481 18.25 18.5 18.25C19.4665 18.25 20.25 17.4665 20.25 16.5C20.25 15.5335 19.4665 14.75 18.5 14.75C18.214 14.75 17.944 14.8186 17.7056 14.9403L16.3992 13.3932L19.3484 10H15V8H22ZM4 4V11H11V4H13V20H11V13H4V20H2V4H4Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </button>
                                                <button
                                                    class="w-10 h-10 text-black outline-none focus:outline-none dark:text-white dark:hover:text-purple hover:text-purple active:bg-light/50"
                                                    @click="format('insertUnorderedList')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        class="w-5 h-5 mx-auto">
                                                        <path
                                                            d="M11 4H21V6H11V4ZM11 8H17V10H11V8ZM11 14H21V16H11V14ZM11 18H17V20H11V18ZM3 4H9V10H3V4ZM5 6V8H7V6H5ZM3 14H9V20H3V14ZM5 16V18H7V16H5Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </button>
                                                <button
                                                    class="w-10 h-10 mr-1 text-black outline-none focus:outline-none dark:text-white dark:hover:text-purple hover:text-purple active:bg-light/50"
                                                    @click="format('insertOrderedList')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        class="w-5 h-5 mx-auto">
                                                        <path
                                                            d="M5.75024 3.5H4.71733L3.25 3.89317V5.44582L4.25002 5.17782L4.25018 8.5H3V10H7V8.5H5.75024V3.5ZM10 4H21V6H10V4ZM10 11H21V13H10V11ZM10 18H21V20H10V18ZM2.875 15.625C2.875 14.4514 3.82639 13.5 5 13.5C6.17361 13.5 7.125 14.4514 7.125 15.625C7.125 16.1106 6.96183 16.5587 6.68747 16.9167L6.68271 16.9229L5.31587 18.5H7V20H3.00012L2.99959 18.8786L5.4717 16.035C5.5673 15.9252 5.625 15.7821 5.625 15.625C5.625 15.2798 5.34518 15 5 15C4.67378 15 4.40573 15.2501 4.37747 15.5688L4.3651 15.875H2.875V15.625Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </button>
                                                <button
                                                    class="w-10 h-10 text-black outline-none focus:outline-none dark:text-white dark:hover:text-purple hover:text-purple active:bg-light/50"
                                                    @click="format('justifyLeft')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        class="w-5 h-5 mx-auto">
                                                        <path
                                                            d="M3 4H21V6H3V4ZM3 19H17V21H3V19ZM3 14H21V16H3V14ZM3 9H17V11H3V9Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </button>
                                                <button
                                                    class="w-10 h-10 text-black outline-none focus:outline-none dark:text-white dark:hover:text-purple hover:text-purple active:bg-light/50"
                                                    @click="format('justifyCenter')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        class="w-5 h-5 mx-auto">
                                                        <path
                                                            d="M3 4H21V6H3V4ZM3 19H21V21H3V19ZM3 14H21V16H3V14ZM3 9H21V11H3V9Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </button>
                                                <button
                                                    class="w-10 h-10 text-black outline-none focus:outline-none dark:text-white dark:hover:text-purple hover:text-purple active:bg-light/50"
                                                    @click="format('justifyRight')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        class="w-5 h-5 mx-auto">
                                                        <path
                                                            d="M3 4H21V6H3V4ZM7 19H21V21H7V19ZM3 14H21V16H3V14ZM7 9H21V11H7V9Z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="w-full">
                                                <iframe x-ref="sliced"
                                                    class="w-full min-h-[calc(100vh-542px)] md:min-h-[calc(100vh-452px)] overflow-y-auto text-editor"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="p-4 py-2 bg-white border rounded-md border-black/10 dark:bg-darklight dark:border-darkborder">
                                    <div class="flex items-center justify-between gap-2">
                                        <div class="flex items-center gap-2">
                                            <div
                                                class="flex items-center justify-center w-6 h-6 text-black transition-all duration-300 rounded cursor-pointer sm:w-9 sm:h-9 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5 hover:bg-light/50">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="w-5 h-5">
                                                    <path fill="currentColor"
                                                        d="M4 8H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V8ZM6 10V20H18V10H6ZM9 12H11V18H9V12ZM13 12H15V18H13V12ZM7 5V3C7 2.44772 7.44772 2 8 2H16C16.5523 2 17 2.44772 17 3V5H22V7H2V5H7ZM9 4V5H15V4H9Z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div
                                                class="flex items-center justify-center w-6 h-6 text-black transition-all duration-300 rounded cursor-pointer sm:w-9 sm:h-9 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5 hover:bg-light/50">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="w-5 h-5">
                                                    <path fill="currentColor"
                                                        d="M2.9918 21C2.44405 21 2 20.5551 2 20.0066V3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918ZM20 15V5H4V19L14 9L20 15ZM20 17.8284L14 11.8284L6.82843 19H20V17.8284ZM8 11C6.89543 11 6 10.1046 6 9C6 7.89543 6.89543 7 8 7C9.10457 7 10 7.89543 10 9C10 10.1046 9.10457 11 8 11Z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div
                                                class="flex items-center justify-center w-6 h-6 text-black transition-all duration-300 rounded cursor-pointer sm:w-9 sm:h-9 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5 hover:bg-light/50">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="w-5 h-5">
                                                    <path fill="currentColor"
                                                        d="M14.8287 7.7574L9.1718 13.4143C8.78127 13.8048 8.78127 14.4379 9.1718 14.8285C9.56232 15.219 10.1955 15.219 10.586 14.8285L16.2429 9.17161C17.4144 8.00004 17.4144 6.10055 16.2429 4.92897C15.0713 3.7574 13.1718 3.7574 12.0002 4.92897L6.34337 10.5858C4.39075 12.5384 4.39075 15.7043 6.34337 17.6569C8.29599 19.6095 11.4618 19.6095 13.4144 17.6569L19.0713 12L20.4855 13.4143L14.8287 19.0711C12.095 21.8048 7.66283 21.8048 4.92916 19.0711C2.19549 16.3374 2.19549 11.9053 4.92916 9.17161L10.586 3.51476C12.5386 1.56214 15.7045 1.56214 17.6571 3.51476C19.6097 5.46738 19.6097 8.63321 17.6571 10.5858L12.0002 16.2427C10.8287 17.4143 8.92916 17.4143 7.75759 16.2427C6.58601 15.0711 6.58601 13.1716 7.75759 12L13.4144 6.34319L14.8287 7.7574Z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-2">
                                            <button type="button"
                                                class="btn bg-light border border-light rounded-md text-black transition-all duration-300 hover:bg-light/[0.85] hover:border-light/[0.85]">Save
                                                draft</button>
                                            <button type="button"
                                                class="btn py-2.5 px-3 bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="w-5 h-5">
                                                    <path fill="currentColor"
                                                        d="M3.5 1.3457C3.58425 1.3457 3.66714 1.36699 3.74096 1.4076L22.2034 11.562C22.4454 11.695 22.5337 11.9991 22.4006 12.241C22.3549 12.3241 22.2865 12.3925 22.2034 12.4382L3.74096 22.5925C3.499 22.7256 3.19497 22.6374 3.06189 22.3954C3.02129 22.3216 3 22.2387 3 22.1544V1.8457C3 1.56956 3.22386 1.3457 3.5 1.3457ZM5 4.38261V11.0001H10V13.0001H5V19.6175L18.8499 12.0001L5 4.38261Z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-show="activeTab === 'inbox'" x-data="{ selectedMail: false }"
                            class="relative flex flex-row items-start gap-4">
                            <div
                                class="lg:max-w-[300px] xl:max-w-[426px] w-full flex-1 flex flex-col gap-2 rounded border border-black/10 dark:bg-darklight dark:border-darkborder bg-white min-h-[calc(100vh-340px)] md:min-h-[calc(100vh-212px)]">
                                <div class="flex items-center justify-between gap-2 px-4 py-2 bg-light/20 dark:bg-white/5">
                                    <div class="flex items-center gap-2">
                                        <div>
                                            <input type="checkbox" class="form-checkbox outborder-purple">
                                        </div>
                                        <div class="relative w-full max-w-[160px]">
                                            <input type="text"
                                                class="h-10 form-input dark:text-white/80 dark:placeholder:text-white/30 dark:border-darkborder dark:bg-dark dark:focus:border-white/30"
                                                placeholder="Search..." required="">
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <button type="button"
                                            class="flex items-center justify-center w-6 h-6 text-black transition-all duration-300 rounded sm:w-9 sm:h-9 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5 hover:bg-light/50">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                                <path fill="currentColor"
                                                    d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26ZM12.0006 15.968L16.2473 18.3451L15.2988 13.5717L18.8719 10.2674L14.039 9.69434L12.0006 5.27502L9.96214 9.69434L5.12921 10.2674L8.70231 13.5717L7.75383 18.3451L12.0006 15.968Z">
                                                </path>
                                            </svg>
                                        </button>
                                        <button type="button"
                                            class="flex items-center justify-center w-6 h-6 text-black transition-all duration-300 rounded sm:w-9 sm:h-9 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5 hover:bg-light/50">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                                <path fill="currentColor"
                                                    d="M5.46257 4.43262C7.21556 2.91688 9.5007 2 12 2C17.5228 2 22 6.47715 22 12C22 14.1361 21.3302 16.1158 20.1892 17.7406L17 12H20C20 7.58172 16.4183 4 12 4C9.84982 4 7.89777 4.84827 6.46023 6.22842L5.46257 4.43262ZM18.5374 19.5674C16.7844 21.0831 14.4993 22 12 22C6.47715 22 2 17.5228 2 12C2 9.86386 2.66979 7.88416 3.8108 6.25944L7 12H4C4 16.4183 7.58172 20 12 20C14.1502 20 16.1022 19.1517 17.5398 17.7716L18.5374 19.5674Z">
                                                </path>
                                            </svg>
                                        </button>
                                        <button type="button"
                                            class="flex items-center justify-center w-6 h-6 text-black transition-all duration-300 rounded sm:w-9 sm:h-9 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5 hover:bg-light/50">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                                <path fill="currentColor"
                                                    d="M4 8H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V8ZM6 10V20H18V10H6ZM9 12H11V18H9V12ZM13 12H15V18H13V12ZM7 5V3C7 2.44772 7.44772 2 8 2H16C16.5523 2 17 2.44772 17 3V5H22V7H2V5H7ZM9 4V5H15V4H9Z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="space-y-2 py-1.5 px-4 overflow-y-auto">
                                    <button @click="selectedMail = true"
                                        class="flex items-start w-full gap-2 p-2 transition-all duration-300 rounded bg-light/50 dark:bg-white/10 hover:border-transparent hover:bg-light/50">
                                        <div class="flex items-center flex-1 gap-2 p-1">
                                            <div>
                                                <input type="checkbox" class="form-checkbox outborder-purple">
                                            </div>
                                            <img class="flex-none object-cover overflow-hidden rounded-full w-9 h-9"
                                                src="{{ URL::asset('build/images/avatar-6.png') }}" alt="" />
                                            <div class="flex-1 ltr:text-left rtl:text-right">
                                                <p class="line-clamp-1 dark:text-white">Natali Craig</p>
                                                <p class="text-xs text-muted line-clamp-1">Are you free tonight?</p>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="flex-none text-xs text-black/40 mb-1.5 dark:text-white">19:28</p>
                                            <div class="text-muted hover:text-purple">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="w-4 h-4 mx-auto">
                                                    <path fill="currentColor"
                                                        d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </button>
                                    <button @click="selectedMail = true"
                                        class="flex items-start w-full gap-2 p-2 transition-all duration-300 rounded bg-light/20 dark:bg-white/5 dark:hover:bg-white/10 hover:border-transparent hover:bg-light/50">
                                        <div class="flex items-center flex-1 gap-2 p-1">
                                            <div>
                                                <input type="checkbox" class="form-checkbox outborder-purple">
                                            </div>
                                            <img class="flex-none object-cover overflow-hidden rounded-full w-9 h-9"
                                                src="{{ URL::asset('build/images/slack.png') }}" alt="" />
                                            <div class="flex-1 ltr:text-left rtl:text-right">
                                                <p class="line-clamp-1 dark:text-white">Slack</p>
                                                <p class="text-xs text-muted line-clamp-1">Invite your team to Slack</p>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="flex-none text-xs text-black/40 mb-1.5 dark:text-darkmuted">18:30</p>
                                            <div class="text-purple hover:text-purple">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="w-4 h-4 mx-auto">
                                                    <path fill="currentColor"
                                                        d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </button>
                                    <button @click="selectedMail = true"
                                        class="flex items-start w-full gap-2 p-2 transition-all duration-300 rounded bg-light/20 dark:bg-white/5 dark:hover:bg-white/10 hover:border-transparent hover:bg-light/50">
                                        <div class="flex items-center flex-1 gap-2 p-1">
                                            <div>
                                                <input type="checkbox" class="form-checkbox outborder-purple">
                                            </div>
                                            <img class="flex-none object-cover overflow-hidden rounded-full w-9 h-9"
                                                src="{{ URL::asset('build/images/avatar-7.png') }}" alt="" />
                                            <div class="flex-1 ltr:text-left rtl:text-right">
                                                <p class="line-clamp-1 dark:text-white">Drew Cano</p>
                                                <p class="text-xs text-muted line-clamp-1">Let's go fishing! - Hey, You
                                                    wanna join me and Fred at the lake tomorrow? It'll be awesome.</p>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="flex-none text-xs text-black/40 mb-1.5 dark:text-darkmuted">17:30</p>
                                            <div class="text-muted hover:text-purple">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="w-4 h-4 mx-auto">
                                                    <path fill="currentColor"
                                                        d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </button>
                                    <button @click="selectedMail = true"
                                        class="flex items-start w-full gap-2 p-2 transition-all duration-300 rounded bg-light/20 dark:bg-white/5 dark:hover:bg-white/10 hover:border-transparent hover:bg-light/50">
                                        <div class="flex items-center flex-1 gap-2 p-1">
                                            <div>
                                                <input type="checkbox" class="form-checkbox outborder-purple">
                                            </div>
                                            <img class="flex-none object-cover overflow-hidden rounded-full w-9 h-9"
                                                src="{{ URL::asset('build/images/avatar-8.png') }}" alt="" />
                                            <div class="flex-1 ltr:text-left rtl:text-right">
                                                <p class="line-clamp-1 dark:text-white">Orlando Diggs</p>
                                                <p class="text-xs text-muted line-clamp-1">Hey man – Nah man sorry i don't.
                                                    Should i get it?</p>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="flex-none text-xs text-black/40 mb-1.5 dark:text-darkmuted">15:30</p>
                                            <div class="text-muted hover:text-purple">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="w-4 h-4 mx-auto">
                                                    <path fill="currentColor"
                                                        d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </button>
                                    <button @click="selectedMail = true"
                                        class="flex items-start w-full gap-2 p-2 transition-all duration-300 rounded bg-light/20 dark:bg-white/5 dark:hover:bg-white/10 hover:border-transparent hover:bg-light/50">
                                        <div class="flex items-center flex-1 gap-2 p-1">
                                            <div>
                                                <input type="checkbox" class="form-checkbox outborder-purple">
                                            </div>
                                            <img class="flex-none object-cover overflow-hidden rounded-full w-9 h-9"
                                                src="{{ URL::asset('build/images/behance.png') }}" alt="" />
                                            <div class="flex-1 ltr:text-left rtl:text-right">
                                                <p class="line-clamp-1 dark:text-white">Behance</p>
                                                <p class="text-xs text-muted line-clamp-1">You have a new follower</p>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="flex-none text-xs text-black/40 mb-1.5 dark:text-darkmuted">15:25</p>
                                            <div class="text-purple hover:text-purple">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="w-4 h-4 mx-auto">
                                                    <path fill="currentColor"
                                                        d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </button>
                                    <button @click="selectedMail = true"
                                        class="flex items-start w-full gap-2 p-2 transition-all duration-300 rounded bg-light/20 dark:bg-white/5 dark:hover:bg-white/10 hover:border-transparent hover:bg-light/50">
                                        <div class="flex items-center flex-1 gap-2 p-1">
                                            <div>
                                                <input type="checkbox" class="form-checkbox outborder-purple">
                                            </div>
                                            <img class="flex-none object-cover overflow-hidden rounded-full w-9 h-9"
                                                src="{{ URL::asset('build/images/chatgpt.png') }}" alt="" />
                                            <div class="flex-1 ltr:text-left rtl:text-right">
                                                <p class="line-clamp-1 dark:text-white">ChatGPT</p>
                                                <p class="text-xs text-muted line-clamp-1">Welcome to ChatGPT</p>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="flex-none text-xs text-black/40 mb-1.5 dark:text-darkmuted">April 12
                                            </p>
                                            <div class="text-muted hover:text-purple">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="w-4 h-4 mx-auto">
                                                    <path fill="currentColor"
                                                        d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </button>
                                </div>
                            </div>
                            <div class="flex-1 overflow-y-auto md:h-[calc(100vh-212px)] border border-black/10 rounded absolute top-0 left-0 bg-white dark:bg-darklight dark:border-darkborder md:static h-full"
                                :class="!selectedMail ? 'hidden md:block' : ''">
                                <div
                                    class="flex items-center gap-3 px-4 py-2 border-b bg-light/20 border-black/10 dark:border-darkborder dark:bg-white/5">
                                    <button type="button" class="md:hidden" @click="selectedMail = false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 256 256">
                                            <path
                                                d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z">
                                            </path>
                                        </svg>
                                    </button>
                                    <p class="font-semibold dark:text-white/80">Invite your team to Slack</p>
                                </div>
                                <div
                                    class="flex flex-wrap items-start justify-between gap-3 px-4 py-2 border-b bg-light/20 border-black/10 dark:border-darkborder dark:bg-white/5">
                                    <div class="flex items-start flex-1 gap-2 p-1">
                                        <img class="flex-none object-cover overflow-hidden rounded-full w-9 h-9"
                                            src="{{ URL::asset('build/images/slack.svg') }}" alt="" />
                                        <div class="flex-1 ltr:text-left rtl:text-right">
                                            <p class="dark:text-white">Slack <span class="text-muted">|</span>
                                                no-reply@email.slackhq.com</p>
                                            <p class="text-xs text-muted dark:text-darkmuted">Today, 18:30</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center flex-none gap-1">
                                        <button
                                            class="p-1 text-black rounded hover:bg-black/5 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.69171 4.81718C6.80892 4.69997 6.875 4.54076 6.875 4.375C6.875 4.20924 6.80915 4.05027 6.69194 3.93306L6.68655 3.92773C6.56983 3.814 6.41296 3.75 6.25 3.75C6.23125 3.75 6.21251 3.75084 6.19384 3.75253C6.04808 3.76568 5.91155 3.82957 5.80806 3.93306L2.05806 7.68306C1.94085 7.80027 1.875 7.95924 1.875 8.125C1.875 8.29076 1.94085 8.44973 2.05806 8.56694L5.80806 12.3169C5.92527 12.4342 6.08424 12.5 6.25 12.5C6.41576 12.5 6.57473 12.4342 6.69194 12.3169C6.80915 12.1997 6.875 12.0408 6.875 11.875C6.875 11.7092 6.80915 11.5503 6.69194 11.4331L3.38388 8.125L6.69171 4.81718Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M10 7.5H2.5C2.15482 7.5 1.875 7.77982 1.875 8.125C1.875 8.47018 2.15482 8.75 2.5 8.75H10C11.3675 8.75 12.6309 9.27333 12.6309 9.27333C13.8944 9.79665 14.8614 10.7636 14.8614 10.7636C15.8283 11.7306 16.3517 12.9941 16.3517 12.9941C16.875 14.2575 16.875 15.625 16.875 15.625C16.875 15.9702 17.1548 16.25 17.5 16.25C17.8452 16.25 18.125 15.9702 18.125 15.625C18.125 14.0088 17.5065 12.5157 17.5065 12.5157C16.888 11.0226 15.7452 9.87976 15.7452 9.87976C14.6024 8.73696 13.1093 8.11848 13.1093 8.11848C11.6162 7.5 10 7.5 10 7.5Z"
                                                    fill="currentcolor" />
                                            </svg>
                                        </button>
                                        <button
                                            class="p-1 text-black rounded hover:bg-black/5 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.69171 4.81718C6.80892 4.69997 6.875 4.54076 6.875 4.375C6.875 4.20924 6.80915 4.05027 6.69194 3.93306L6.68655 3.92773C6.56983 3.814 6.41296 3.75 6.25 3.75C6.23125 3.75 6.21251 3.75084 6.19384 3.75253C6.04808 3.76568 5.91155 3.82957 5.80806 3.93306L2.05806 7.68306C1.94085 7.80027 1.875 7.95924 1.875 8.125C1.875 8.29076 1.94085 8.44973 2.05806 8.56694L5.80806 12.3169C5.92527 12.4342 6.08424 12.5 6.25 12.5C6.41576 12.5 6.57473 12.4342 6.69194 12.3169C6.80915 12.1997 6.875 12.0408 6.875 11.875C6.875 11.7092 6.80915 11.5503 6.69194 11.4331L3.38388 8.125L6.69171 4.81718Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M10.4417 4.81718C10.5589 4.69997 10.625 4.54076 10.625 4.375C10.625 4.20924 10.5592 4.05027 10.4419 3.93306L10.4365 3.92773C10.3198 3.814 10.163 3.75 10 3.75C9.98125 3.75 9.96251 3.75084 9.94384 3.75253C9.79808 3.76568 9.66155 3.82957 9.55806 3.93306L5.80806 7.68306C5.69085 7.80027 5.625 7.95924 5.625 8.125C5.625 8.29076 5.69085 8.44973 5.80806 8.56694L9.55806 12.3169C9.67527 12.4342 9.83424 12.5 10 12.5C10.1658 12.5 10.3247 12.4342 10.4419 12.3169C10.5592 12.1997 10.625 12.0408 10.625 11.875C10.625 11.7092 10.5592 11.5503 10.4419 11.4331L7.13388 8.125L10.4417 4.81718Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M10 7.5H6.25C5.90482 7.5 5.625 7.77982 5.625 8.125C5.625 8.47018 5.90482 8.75 6.25 8.75H10C11.3675 8.75 12.6309 9.27333 12.6309 9.27333C13.8944 9.79666 14.8614 10.7636 14.8614 10.7636C15.8283 11.7306 16.3517 12.9941 16.3517 12.9941C16.875 14.2575 16.875 15.625 16.875 15.625C16.875 15.9702 17.1548 16.25 17.5 16.25C17.8452 16.25 18.125 15.9702 18.125 15.625C18.125 14.0088 17.5065 12.5157 17.5065 12.5157C16.888 11.0226 15.7452 9.87976 15.7452 9.87976C14.6024 8.73696 13.1093 8.11848 13.1093 8.11848C11.6162 7.5 10 7.5 10 7.5Z"
                                                    fill="currentcolor" />
                                            </svg>
                                        </button>
                                        <button
                                            class="p-1 text-black rounded hover:bg-black/5 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M14.1919 3.93306C14.0747 3.81585 13.9158 3.75 13.75 3.75C13.5842 3.75 13.4253 3.81585 13.3081 3.93306C13.1908 4.05027 13.125 4.20924 13.125 4.375C13.125 4.54076 13.1908 4.69973 13.3081 4.81694L16.6161 8.125L13.3083 11.4328C13.1911 11.55 13.125 11.7092 13.125 11.875C13.125 11.885 13.1252 11.895 13.1257 11.905C13.1332 12.0602 13.1982 12.2071 13.3081 12.3169C13.4253 12.4342 13.5842 12.5 13.75 12.5C13.9158 12.5 14.0747 12.4342 14.1919 12.3169L17.9419 8.56694C18.0592 8.44973 18.125 8.29076 18.125 8.125C18.125 7.95924 18.0592 7.80027 17.9419 7.68306L14.1919 3.93306Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M10 8.75H17.5C17.8452 8.75 18.125 8.47018 18.125 8.125C18.125 7.77982 17.8452 7.5 17.5 7.5H10C8.38384 7.5 6.8907 8.11848 6.8907 8.11848C5.39756 8.73696 4.25476 9.87976 4.25476 9.87976C3.11196 11.0226 2.49348 12.5157 2.49348 12.5157C1.87509 14.0086 1.875 15.6246 1.875 15.6246C1.875 15.7903 1.94085 15.9497 2.05806 16.0669C2.17527 16.1842 2.33424 16.25 2.5 16.25C2.84518 16.25 3.125 15.9702 3.125 15.625C3.125 14.2575 3.64833 12.9941 3.64833 12.9941C4.17166 11.7306 5.13864 10.7636 5.13864 10.7636C6.10563 9.79666 7.36905 9.27333 7.36905 9.27333C8.63248 8.75 10 8.75 10 8.75Z"
                                                    fill="currentcolor" />
                                            </svg>
                                        </button>
                                        <button
                                            class="p-1 text-black rounded hover:bg-black/5 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5 8.75C5.69036 8.75 6.25 9.30964 6.25 10C6.25 10.6904 5.69036 11.25 5 11.25C4.30964 11.25 3.75 10.6904 3.75 10C3.75 9.30964 4.30964 8.75 5 8.75Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M10 8.75C10.6904 8.75 11.25 9.30964 11.25 10C11.25 10.6904 10.6904 11.25 10 11.25C9.30964 11.25 8.75 10.6904 8.75 10C8.75 9.30964 9.30964 8.75 10 8.75Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M16.25 10C16.25 9.30964 15.6904 8.75 15 8.75C14.3096 8.75 13.75 9.30964 13.75 10C13.75 10.6904 14.3096 11.25 15 11.25C15.6904 11.25 16.25 10.6904 16.25 10Z"
                                                    fill="currentcolor" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="rounded pt-10 md:h-[calc(100vh-312px)] overflow-y-auto">
                                    <div class="px-10 pb-10">
                                        <img src="{{ URL::asset('build/images/slack-logo.svg') }}" alt="slack logo" class="mb-7" />
                                        <h3 class="text-2xl font-semibold text-black dark:text-white mb-7">Invite your team
                                        </h3>
                                        <p class="mb-7 dark:text-darkmuted">Slack is most useful when your whole team can
                                            join the conversation. Try adding people to Sliced Admin Community to start
                                            being more productive together!</p>
                                        <a href="javaScript:;"
                                            class="btn bg-black dark:bg-white dark:text-black dark:border-white dark:hover:bg-white/85 dark:hover:border-white/85 border border-black rounded-md text-white transition-all duration-300 hover:bg-black/[0.85] hover:border-black/[0.85] inline-block mb-7">Invite
                                            People</a>
                                        <img src="{{ URL::asset('build/images/mail-banner.png') }}" alt="banner" class="w-full mb-7" />
                                        <div class="flex flex-col items-center justify-between gap-6 lg:flex-row mb-7">
                                            <div class="flex items-start flex-1 gap-2 p-1">
                                                <img class="flex-none object-cover w-10 h-10 overflow-hidden rounded-full"
                                                    src="{{ URL::asset('build/images/logo-icon.svg') }}" alt="" />
                                                <div class="flex-1 text-left dark:text-darkmuted">
                                                    <p class="font-semibold">Sliced Admin Community</p>
                                                    <p>Workspace URL: Sliced-community</p>
                                                    <p>Email: Stevens@live.com</p>
                                                </div>
                                            </div>
                                            <a href="javaScript:;"
                                                class="inline-block text-black transition-all duration-300 border rounded-md btn border-light dark:text-white dark:hover:text-black hover:bg-light hover:text-black">Sign
                                                In</a>
                                        </div>
                                        <p class="text-center text-muted dark:text-white">&copy;2023 Slack Technologies,
                                            LLC, a Salesforce company.</p>
                                    </div>
                                    <div
                                        class="flex justify-end gap-4 px-4 py-2 border-t bg-light/20 border-black/10 dark:border-darkborder dark:bg-white/5">
                                        <a href="javaScript:;"
                                            class="btn bg-light border border-light rounded-md text-black transition-all duration-300 hover:bg-light/[0.85] hover:border-light/[0.85] flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                                <path fill="currentColor"
                                                    d="M5.82843 6.99955L8.36396 9.53509L6.94975 10.9493L2 5.99955L6.94975 1.0498L8.36396 2.46402L5.82843 4.99955H13C17.4183 4.99955 21 8.58127 21 12.9996C21 17.4178 17.4183 20.9996 13 20.9996H4V18.9996H13C16.3137 18.9996 19 16.3133 19 12.9996C19 9.68584 16.3137 6.99955 13 6.99955H5.82843Z">
                                                </path>
                                            </svg>
                                            <span>Reply</span>
                                        </a>
                                        <a href="javaScript:;"
                                            class="btn bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85] flex items-center gap-2">
                                            <span>Forward</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                                <path fill="currentColor"
                                                    d="M18.1716 6.99955H11C7.68629 6.99955 5 9.68584 5 12.9996C5 16.3133 7.68629 18.9996 11 18.9996H20V20.9996H11C6.58172 20.9996 3 17.4178 3 12.9996C3 8.58127 6.58172 4.99955 11 4.99955H18.1716L15.636 2.46402L17.0503 1.0498L22 5.99955L17.0503 10.9493L15.636 9.53509L18.1716 6.99955Z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-show="activeTab === 'sent'" x-data="{ selectedMail: false }"
                            class="relative flex flex-row items-start gap-4">
                            <div
                                class="lg:max-w-[300px] xl:max-w-[426px] w-full flex-1 flex flex-col gap-2 rounded border border-black/10 dark:bg-darklight dark:border-darkborder bg-white min-h-[calc(100vh-340px)] md:min-h-[calc(100vh-212px)]">
                                <div class="flex items-center justify-between gap-2 px-4 py-2 bg-light/20 dark:bg-white/5">
                                    <div class="flex items-center gap-2">
                                        <div>
                                            <input type="checkbox" class="form-checkbox outborder-purple">
                                        </div>
                                        <div class="relative w-full max-w-[160px]">
                                            <input type="text"
                                                class="h-10 form-input dark:text-white/80 dark:placeholder:text-white/30 dark:border-darkborder dark:bg-dark dark:focus:border-white/30"
                                                placeholder="Search..." required="">
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <button type="button"
                                            class="flex items-center justify-center w-6 h-6 text-black transition-all duration-300 rounded sm:w-9 sm:h-9 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5 hover:bg-light/50">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                                <path fill="currentColor"
                                                    d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26ZM12.0006 15.968L16.2473 18.3451L15.2988 13.5717L18.8719 10.2674L14.039 9.69434L12.0006 5.27502L9.96214 9.69434L5.12921 10.2674L8.70231 13.5717L7.75383 18.3451L12.0006 15.968Z">
                                                </path>
                                            </svg>
                                        </button>
                                        <button type="button"
                                            class="flex items-center justify-center w-6 h-6 text-black transition-all duration-300 rounded sm:w-9 sm:h-9 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5 hover:bg-light/50">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                                <path fill="currentColor"
                                                    d="M5.46257 4.43262C7.21556 2.91688 9.5007 2 12 2C17.5228 2 22 6.47715 22 12C22 14.1361 21.3302 16.1158 20.1892 17.7406L17 12H20C20 7.58172 16.4183 4 12 4C9.84982 4 7.89777 4.84827 6.46023 6.22842L5.46257 4.43262ZM18.5374 19.5674C16.7844 21.0831 14.4993 22 12 22C6.47715 22 2 17.5228 2 12C2 9.86386 2.66979 7.88416 3.8108 6.25944L7 12H4C4 16.4183 7.58172 20 12 20C14.1502 20 16.1022 19.1517 17.5398 17.7716L18.5374 19.5674Z">
                                                </path>
                                            </svg>
                                        </button>
                                        <button type="button"
                                            class="flex items-center justify-center w-6 h-6 text-black transition-all duration-300 rounded sm:w-9 sm:h-9 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5 hover:bg-light/50">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                                <path fill="currentColor"
                                                    d="M4 8H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V8ZM6 10V20H18V10H6ZM9 12H11V18H9V12ZM13 12H15V18H13V12ZM7 5V3C7 2.44772 7.44772 2 8 2H16C16.5523 2 17 2.44772 17 3V5H22V7H2V5H7ZM9 4V5H15V4H9Z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="space-y-2 py-1.5 px-4 overflow-y-auto">
                                    <button @click="selectedMail = true"
                                        class="flex items-start w-full gap-2 p-2 transition-all duration-300 rounded bg-light/20 dark:bg-white/5 dark:hover:bg-white/10 hover:border-transparent hover:bg-light/50">
                                        <div class="flex items-center flex-1 gap-2 p-1">
                                            <div>
                                                <input type="checkbox" class="form-checkbox outborder-purple">
                                            </div>
                                            <img class="flex-none object-cover overflow-hidden rounded-full w-9 h-9"
                                                src="{{ URL::asset('build/images/chatgpt.png') }}" alt="" />
                                            <div class="flex-1 ltr:text-left rtl:text-right">
                                                <p class="line-clamp-1 dark:text-white">ChatGPT</p>
                                                <p class="text-xs text-muted line-clamp-1">Welcome to ChatGPT</p>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="flex-none text-xs text-black/40 mb-1.5 dark:text-darkmuted">April 12
                                            </p>
                                            <div class="text-muted hover:text-purple">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="w-4 h-4 mx-auto">
                                                    <path fill="currentColor"
                                                        d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </button>
                                </div>
                            </div>
                            <div class="flex-1 overflow-y-auto md:h-[calc(100vh-212px)] border border-black/10 rounded absolute top-0 left-0 bg-white dark:bg-darklight dark:border-darkborder md:static h-full"
                                :class="!selectedMail ? 'hidden md:block' : ''">
                                <div
                                    class="flex items-center gap-3 px-4 py-2 border-b bg-light/20 border-black/10 dark:border-darkborder dark:bg-white/5">
                                    <button type="button" class="md:hidden" @click="selectedMail = false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 256 256">
                                            <path
                                                d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z">
                                            </path>
                                        </svg>
                                    </button>
                                    <p class="font-semibold dark:text-white/80">Invite your team to Slack</p>
                                </div>
                                <div
                                    class="flex flex-wrap items-start justify-between gap-3 px-4 py-2 border-b bg-light/20 border-black/10 dark:border-darkborder dark:bg-white/5">
                                    <div class="flex items-start flex-1 gap-2 p-1">
                                        <img class="flex-none object-cover overflow-hidden rounded-full w-9 h-9"
                                            src="{{ URL::asset('build/images/slack.svg') }}" alt="" />
                                        <div class="flex-1 ltr:text-left rtl:text-right">
                                            <p class="dark:text-white">Slack <span class="text-muted">|</span>
                                                no-reply@email.slackhq.com</p>
                                            <p class="text-xs text-muted dark:text-darkmuted">Today, 18:30</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center flex-none gap-1">
                                        <button
                                            class="p-1 text-black rounded hover:bg-black/5 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.69171 4.81718C6.80892 4.69997 6.875 4.54076 6.875 4.375C6.875 4.20924 6.80915 4.05027 6.69194 3.93306L6.68655 3.92773C6.56983 3.814 6.41296 3.75 6.25 3.75C6.23125 3.75 6.21251 3.75084 6.19384 3.75253C6.04808 3.76568 5.91155 3.82957 5.80806 3.93306L2.05806 7.68306C1.94085 7.80027 1.875 7.95924 1.875 8.125C1.875 8.29076 1.94085 8.44973 2.05806 8.56694L5.80806 12.3169C5.92527 12.4342 6.08424 12.5 6.25 12.5C6.41576 12.5 6.57473 12.4342 6.69194 12.3169C6.80915 12.1997 6.875 12.0408 6.875 11.875C6.875 11.7092 6.80915 11.5503 6.69194 11.4331L3.38388 8.125L6.69171 4.81718Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M10 7.5H2.5C2.15482 7.5 1.875 7.77982 1.875 8.125C1.875 8.47018 2.15482 8.75 2.5 8.75H10C11.3675 8.75 12.6309 9.27333 12.6309 9.27333C13.8944 9.79665 14.8614 10.7636 14.8614 10.7636C15.8283 11.7306 16.3517 12.9941 16.3517 12.9941C16.875 14.2575 16.875 15.625 16.875 15.625C16.875 15.9702 17.1548 16.25 17.5 16.25C17.8452 16.25 18.125 15.9702 18.125 15.625C18.125 14.0088 17.5065 12.5157 17.5065 12.5157C16.888 11.0226 15.7452 9.87976 15.7452 9.87976C14.6024 8.73696 13.1093 8.11848 13.1093 8.11848C11.6162 7.5 10 7.5 10 7.5Z"
                                                    fill="currentcolor" />
                                            </svg>
                                        </button>
                                        <button
                                            class="p-1 text-black rounded hover:bg-black/5 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.69171 4.81718C6.80892 4.69997 6.875 4.54076 6.875 4.375C6.875 4.20924 6.80915 4.05027 6.69194 3.93306L6.68655 3.92773C6.56983 3.814 6.41296 3.75 6.25 3.75C6.23125 3.75 6.21251 3.75084 6.19384 3.75253C6.04808 3.76568 5.91155 3.82957 5.80806 3.93306L2.05806 7.68306C1.94085 7.80027 1.875 7.95924 1.875 8.125C1.875 8.29076 1.94085 8.44973 2.05806 8.56694L5.80806 12.3169C5.92527 12.4342 6.08424 12.5 6.25 12.5C6.41576 12.5 6.57473 12.4342 6.69194 12.3169C6.80915 12.1997 6.875 12.0408 6.875 11.875C6.875 11.7092 6.80915 11.5503 6.69194 11.4331L3.38388 8.125L6.69171 4.81718Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M10.4417 4.81718C10.5589 4.69997 10.625 4.54076 10.625 4.375C10.625 4.20924 10.5592 4.05027 10.4419 3.93306L10.4365 3.92773C10.3198 3.814 10.163 3.75 10 3.75C9.98125 3.75 9.96251 3.75084 9.94384 3.75253C9.79808 3.76568 9.66155 3.82957 9.55806 3.93306L5.80806 7.68306C5.69085 7.80027 5.625 7.95924 5.625 8.125C5.625 8.29076 5.69085 8.44973 5.80806 8.56694L9.55806 12.3169C9.67527 12.4342 9.83424 12.5 10 12.5C10.1658 12.5 10.3247 12.4342 10.4419 12.3169C10.5592 12.1997 10.625 12.0408 10.625 11.875C10.625 11.7092 10.5592 11.5503 10.4419 11.4331L7.13388 8.125L10.4417 4.81718Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M10 7.5H6.25C5.90482 7.5 5.625 7.77982 5.625 8.125C5.625 8.47018 5.90482 8.75 6.25 8.75H10C11.3675 8.75 12.6309 9.27333 12.6309 9.27333C13.8944 9.79666 14.8614 10.7636 14.8614 10.7636C15.8283 11.7306 16.3517 12.9941 16.3517 12.9941C16.875 14.2575 16.875 15.625 16.875 15.625C16.875 15.9702 17.1548 16.25 17.5 16.25C17.8452 16.25 18.125 15.9702 18.125 15.625C18.125 14.0088 17.5065 12.5157 17.5065 12.5157C16.888 11.0226 15.7452 9.87976 15.7452 9.87976C14.6024 8.73696 13.1093 8.11848 13.1093 8.11848C11.6162 7.5 10 7.5 10 7.5Z"
                                                    fill="currentcolor" />
                                            </svg>
                                        </button>
                                        <button
                                            class="p-1 text-black rounded hover:bg-black/5 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M14.1919 3.93306C14.0747 3.81585 13.9158 3.75 13.75 3.75C13.5842 3.75 13.4253 3.81585 13.3081 3.93306C13.1908 4.05027 13.125 4.20924 13.125 4.375C13.125 4.54076 13.1908 4.69973 13.3081 4.81694L16.6161 8.125L13.3083 11.4328C13.1911 11.55 13.125 11.7092 13.125 11.875C13.125 11.885 13.1252 11.895 13.1257 11.905C13.1332 12.0602 13.1982 12.2071 13.3081 12.3169C13.4253 12.4342 13.5842 12.5 13.75 12.5C13.9158 12.5 14.0747 12.4342 14.1919 12.3169L17.9419 8.56694C18.0592 8.44973 18.125 8.29076 18.125 8.125C18.125 7.95924 18.0592 7.80027 17.9419 7.68306L14.1919 3.93306Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M10 8.75H17.5C17.8452 8.75 18.125 8.47018 18.125 8.125C18.125 7.77982 17.8452 7.5 17.5 7.5H10C8.38384 7.5 6.8907 8.11848 6.8907 8.11848C5.39756 8.73696 4.25476 9.87976 4.25476 9.87976C3.11196 11.0226 2.49348 12.5157 2.49348 12.5157C1.87509 14.0086 1.875 15.6246 1.875 15.6246C1.875 15.7903 1.94085 15.9497 2.05806 16.0669C2.17527 16.1842 2.33424 16.25 2.5 16.25C2.84518 16.25 3.125 15.9702 3.125 15.625C3.125 14.2575 3.64833 12.9941 3.64833 12.9941C4.17166 11.7306 5.13864 10.7636 5.13864 10.7636C6.10563 9.79666 7.36905 9.27333 7.36905 9.27333C8.63248 8.75 10 8.75 10 8.75Z"
                                                    fill="currentcolor" />
                                            </svg>
                                        </button>
                                        <button
                                            class="p-1 text-black rounded hover:bg-black/5 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5 8.75C5.69036 8.75 6.25 9.30964 6.25 10C6.25 10.6904 5.69036 11.25 5 11.25C4.30964 11.25 3.75 10.6904 3.75 10C3.75 9.30964 4.30964 8.75 5 8.75Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M10 8.75C10.6904 8.75 11.25 9.30964 11.25 10C11.25 10.6904 10.6904 11.25 10 11.25C9.30964 11.25 8.75 10.6904 8.75 10C8.75 9.30964 9.30964 8.75 10 8.75Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M16.25 10C16.25 9.30964 15.6904 8.75 15 8.75C14.3096 8.75 13.75 9.30964 13.75 10C13.75 10.6904 14.3096 11.25 15 11.25C15.6904 11.25 16.25 10.6904 16.25 10Z"
                                                    fill="currentcolor" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="rounded pt-10 md:h-[calc(100vh-312px)] overflow-y-auto">
                                    <div class="px-10 pb-10">
                                        <img src="{{ URL::asset('build/images/slack-logo.svg') }}" alt="slack logo" class="mb-7" />
                                        <h3 class="text-2xl font-semibold text-black dark:text-white mb-7">Invite your team
                                        </h3>
                                        <p class="mb-7 dark:text-darkmuted">Slack is most useful when your whole team can
                                            join the conversation. Try adding people to Sliced Admin Community to start
                                            being more productive together!</p>
                                        <a href="javaScript:;"
                                            class="btn bg-black dark:bg-white dark:text-black dark:border-white dark:hover:bg-white/[0.85] dark:hover:border-white/[0.85] border border-black rounded-md text-white transition-all duration-300 hover:bg-black/[0.85] hover:border-black/[0.85] inline-block mb-7">Invite
                                            People</a>
                                        <img src="{{ URL::asset('build/images/mail-banner.png') }}" alt="banner" class="w-full mb-7" />
                                        <div class="flex flex-col items-center justify-between gap-6 lg:flex-row mb-7">
                                            <div class="flex items-start flex-1 gap-2 p-1">
                                                <img class="flex-none object-cover w-10 h-10 overflow-hidden rounded-full"
                                                    src="{{ URL::asset('build/images/logo-icon.svg') }}" alt="" />
                                                <div class="flex-1 ltr:text-left rtl:text-right dark:text-darkmuted">
                                                    <p class="font-semibold">Sliced Admin Community</p>
                                                    <p>Workspace URL: Sliced-community</p>
                                                    <p>Email: Stevens@live.com</p>
                                                </div>
                                            </div>
                                            <a href="javaScript:;"
                                                class="inline-block text-black transition-all duration-300 border rounded-md btn border-light dark:text-white dark:hover:text-black hover:bg-light hover:text-black">Sign
                                                In</a>
                                        </div>
                                        <p class="text-center text-muted dark:text-white">&copy;2023 Slack Technologies,
                                            LLC, a Salesforce company.</p>
                                    </div>
                                    <div
                                        class="flex gap-4 px-4 py-2 border-t ltr:justify-end rtl:justify-start bg-light/20 border-black/10 dark:border-darkborder dark:bg-white/5">
                                        <a href="javaScript:;"
                                            class="btn bg-light border border-light rounded-md text-black transition-all duration-300 hover:bg-light/[0.85] hover:border-light/[0.85] flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                                <path fill="currentColor"
                                                    d="M5.82843 6.99955L8.36396 9.53509L6.94975 10.9493L2 5.99955L6.94975 1.0498L8.36396 2.46402L5.82843 4.99955H13C17.4183 4.99955 21 8.58127 21 12.9996C21 17.4178 17.4183 20.9996 13 20.9996H4V18.9996H13C16.3137 18.9996 19 16.3133 19 12.9996C19 9.68584 16.3137 6.99955 13 6.99955H5.82843Z">
                                                </path>
                                            </svg>
                                            <span>Reply</span>
                                        </a>
                                        <a href="javaScript:;"
                                            class="btn bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85] flex items-center gap-2">
                                            <span>Forward</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                                <path fill="currentColor"
                                                    d="M18.1716 6.99955H11C7.68629 6.99955 5 9.68584 5 12.9996C5 16.3133 7.68629 18.9996 11 18.9996H20V20.9996H11C6.58172 20.9996 3 17.4178 3 12.9996C3 8.58127 6.58172 4.99955 11 4.99955H18.1716L15.636 2.46402L17.0503 1.0498L22 5.99955L17.0503 10.9493L15.636 9.53509L18.1716 6.99955Z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-show="activeTab === 'draft'" x-data="{ selectedMail: false }"
                            class="relative flex flex-row items-start gap-4">
                            <div
                                class="lg:max-w-[300px] xl:max-w-[426px] w-full flex-1 flex flex-col gap-2 rounded border border-black/10 dark:bg-darklight dark:border-darkborder bg-white min-h-[calc(100vh-340px)] md:min-h-[calc(100vh-212px)]">
                                <div class="flex items-center justify-between gap-2 px-4 py-2 bg-light/20 dark:bg-white/5">
                                    <div class="flex items-center gap-2">
                                        <div>
                                            <input type="checkbox" class="form-checkbox outborder-purple">
                                        </div>
                                        <div class="relative w-full max-w-[160px]">
                                            <input type="text"
                                                class="h-10 form-input dark:text-white/80 dark:placeholder:text-white/30 dark:border-darkborder dark:bg-dark dark:focus:border-white/30"
                                                placeholder="Search..." required="">
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <button type="button"
                                            class="flex items-center justify-center w-6 h-6 text-black transition-all duration-300 rounded sm:w-9 sm:h-9 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5 hover:bg-light/50">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                                <path fill="currentColor"
                                                    d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26ZM12.0006 15.968L16.2473 18.3451L15.2988 13.5717L18.8719 10.2674L14.039 9.69434L12.0006 5.27502L9.96214 9.69434L5.12921 10.2674L8.70231 13.5717L7.75383 18.3451L12.0006 15.968Z">
                                                </path>
                                            </svg>
                                        </button>
                                        <button type="button"
                                            class="flex items-center justify-center w-6 h-6 text-black transition-all duration-300 rounded sm:w-9 sm:h-9 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5 hover:bg-light/50">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                                <path fill="currentColor"
                                                    d="M5.46257 4.43262C7.21556 2.91688 9.5007 2 12 2C17.5228 2 22 6.47715 22 12C22 14.1361 21.3302 16.1158 20.1892 17.7406L17 12H20C20 7.58172 16.4183 4 12 4C9.84982 4 7.89777 4.84827 6.46023 6.22842L5.46257 4.43262ZM18.5374 19.5674C16.7844 21.0831 14.4993 22 12 22C6.47715 22 2 17.5228 2 12C2 9.86386 2.66979 7.88416 3.8108 6.25944L7 12H4C4 16.4183 7.58172 20 12 20C14.1502 20 16.1022 19.1517 17.5398 17.7716L18.5374 19.5674Z">
                                                </path>
                                            </svg>
                                        </button>
                                        <button type="button"
                                            class="flex items-center justify-center w-6 h-6 text-black transition-all duration-300 rounded sm:w-9 sm:h-9 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5 hover:bg-light/50">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                                <path fill="currentColor"
                                                    d="M4 8H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V8ZM6 10V20H18V10H6ZM9 12H11V18H9V12ZM13 12H15V18H13V12ZM7 5V3C7 2.44772 7.44772 2 8 2H16C16.5523 2 17 2.44772 17 3V5H22V7H2V5H7ZM9 4V5H15V4H9Z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="space-y-2 py-1.5 px-4 overflow-y-auto">
                                    <button @click="selectedMail = true"
                                        class="flex items-start w-full gap-2 p-2 transition-all duration-300 rounded bg-light/20 dark:bg-white/5 dark:hover:bg-white/10 hover:border-transparent hover:bg-light/50">
                                        <div class="flex items-center flex-1 gap-2 p-1">
                                            <div>
                                                <input type="checkbox" class="form-checkbox outborder-purple">
                                            </div>
                                            <img class="flex-none object-cover overflow-hidden rounded-full w-9 h-9"
                                                src="{{ URL::asset('build/images/slack.png') }}" alt="" />
                                            <div class="flex-1 ltr:text-left rtl:text-right">
                                                <p class="line-clamp-1 dark:text-white">Slack</p>
                                                <p class="text-xs text-muted line-clamp-1">Invite your team to Slack</p>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="flex-none text-xs text-black/40 mb-1.5 dark:text-darkmuted">18:30</p>
                                            <div class="text-purple hover:text-purple">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="w-4 h-4 mx-auto">
                                                    <path fill="currentColor"
                                                        d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </button>
                                    <button @click="selectedMail = true"
                                        class="flex items-start w-full gap-2 p-2 transition-all duration-300 rounded bg-light/20 dark:bg-white/5 dark:hover:bg-white/10 hover:border-transparent hover:bg-light/50">
                                        <div class="flex items-center flex-1 gap-2 p-1">
                                            <div>
                                                <input type="checkbox" class="form-checkbox outborder-purple">
                                            </div>
                                            <img class="flex-none object-cover overflow-hidden rounded-full w-9 h-9"
                                                src="{{ URL::asset('build/images/chatgpt.png') }}" alt="" />
                                            <div class="flex-1 ltr:text-left rtl:text-right">
                                                <p class="line-clamp-1 dark:text-white">ChatGPT</p>
                                                <p class="text-xs text-muted line-clamp-1">Welcome to ChatGPT</p>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="flex-none text-xs text-black/40 mb-1.5 dark:text-darkmuted">April 12
                                            </p>
                                            <div class="text-muted hover:text-purple">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="w-4 h-4 mx-auto">
                                                    <path fill="currentColor"
                                                        d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </button>
                                </div>
                            </div>
                            <div class="flex-1 overflow-y-auto md:h-[calc(100vh-212px)] border border-black/10 rounded absolute top-0 left-0 bg-white dark:bg-darklight dark:border-darkborder md:static h-full"
                                :class="!selectedMail ? 'hidden md:block' : ''">
                                <div
                                    class="flex items-center gap-3 px-4 py-2 border-b bg-light/20 border-black/10 dark:border-darkborder dark:bg-white/5">
                                    <button type="button" class="md:hidden" @click="selectedMail = false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 256 256">
                                            <path
                                                d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z">
                                            </path>
                                        </svg>
                                    </button>
                                    <p class="font-semibold dark:text-white/80">Invite your team to Slack</p>
                                </div>
                                <div
                                    class="flex flex-wrap items-start justify-between gap-3 px-4 py-2 border-b bg-light/20 border-black/10 dark:border-darkborder dark:bg-white/5">
                                    <div class="flex items-start flex-1 gap-2 p-1">
                                        <img class="flex-none object-cover overflow-hidden rounded-full w-9 h-9"
                                            src="{{ URL::asset('build/images/slack.svg') }}" alt="" />
                                        <div class="flex-1 ltr:text-left rtl:text-right">
                                            <p class="dark:text-white">Slack <span class="text-muted">|</span>
                                                no-reply@email.slackhq.com</p>
                                            <p class="text-xs text-muted dark:text-darkmuted">Today, 18:30</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center flex-none gap-1">
                                        <button
                                            class="p-1 text-black rounded hover:bg-black/5 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.69171 4.81718C6.80892 4.69997 6.875 4.54076 6.875 4.375C6.875 4.20924 6.80915 4.05027 6.69194 3.93306L6.68655 3.92773C6.56983 3.814 6.41296 3.75 6.25 3.75C6.23125 3.75 6.21251 3.75084 6.19384 3.75253C6.04808 3.76568 5.91155 3.82957 5.80806 3.93306L2.05806 7.68306C1.94085 7.80027 1.875 7.95924 1.875 8.125C1.875 8.29076 1.94085 8.44973 2.05806 8.56694L5.80806 12.3169C5.92527 12.4342 6.08424 12.5 6.25 12.5C6.41576 12.5 6.57473 12.4342 6.69194 12.3169C6.80915 12.1997 6.875 12.0408 6.875 11.875C6.875 11.7092 6.80915 11.5503 6.69194 11.4331L3.38388 8.125L6.69171 4.81718Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M10 7.5H2.5C2.15482 7.5 1.875 7.77982 1.875 8.125C1.875 8.47018 2.15482 8.75 2.5 8.75H10C11.3675 8.75 12.6309 9.27333 12.6309 9.27333C13.8944 9.79665 14.8614 10.7636 14.8614 10.7636C15.8283 11.7306 16.3517 12.9941 16.3517 12.9941C16.875 14.2575 16.875 15.625 16.875 15.625C16.875 15.9702 17.1548 16.25 17.5 16.25C17.8452 16.25 18.125 15.9702 18.125 15.625C18.125 14.0088 17.5065 12.5157 17.5065 12.5157C16.888 11.0226 15.7452 9.87976 15.7452 9.87976C14.6024 8.73696 13.1093 8.11848 13.1093 8.11848C11.6162 7.5 10 7.5 10 7.5Z"
                                                    fill="currentcolor" />
                                            </svg>
                                        </button>
                                        <button
                                            class="p-1 text-black rounded hover:bg-black/5 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.69171 4.81718C6.80892 4.69997 6.875 4.54076 6.875 4.375C6.875 4.20924 6.80915 4.05027 6.69194 3.93306L6.68655 3.92773C6.56983 3.814 6.41296 3.75 6.25 3.75C6.23125 3.75 6.21251 3.75084 6.19384 3.75253C6.04808 3.76568 5.91155 3.82957 5.80806 3.93306L2.05806 7.68306C1.94085 7.80027 1.875 7.95924 1.875 8.125C1.875 8.29076 1.94085 8.44973 2.05806 8.56694L5.80806 12.3169C5.92527 12.4342 6.08424 12.5 6.25 12.5C6.41576 12.5 6.57473 12.4342 6.69194 12.3169C6.80915 12.1997 6.875 12.0408 6.875 11.875C6.875 11.7092 6.80915 11.5503 6.69194 11.4331L3.38388 8.125L6.69171 4.81718Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M10.4417 4.81718C10.5589 4.69997 10.625 4.54076 10.625 4.375C10.625 4.20924 10.5592 4.05027 10.4419 3.93306L10.4365 3.92773C10.3198 3.814 10.163 3.75 10 3.75C9.98125 3.75 9.96251 3.75084 9.94384 3.75253C9.79808 3.76568 9.66155 3.82957 9.55806 3.93306L5.80806 7.68306C5.69085 7.80027 5.625 7.95924 5.625 8.125C5.625 8.29076 5.69085 8.44973 5.80806 8.56694L9.55806 12.3169C9.67527 12.4342 9.83424 12.5 10 12.5C10.1658 12.5 10.3247 12.4342 10.4419 12.3169C10.5592 12.1997 10.625 12.0408 10.625 11.875C10.625 11.7092 10.5592 11.5503 10.4419 11.4331L7.13388 8.125L10.4417 4.81718Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M10 7.5H6.25C5.90482 7.5 5.625 7.77982 5.625 8.125C5.625 8.47018 5.90482 8.75 6.25 8.75H10C11.3675 8.75 12.6309 9.27333 12.6309 9.27333C13.8944 9.79666 14.8614 10.7636 14.8614 10.7636C15.8283 11.7306 16.3517 12.9941 16.3517 12.9941C16.875 14.2575 16.875 15.625 16.875 15.625C16.875 15.9702 17.1548 16.25 17.5 16.25C17.8452 16.25 18.125 15.9702 18.125 15.625C18.125 14.0088 17.5065 12.5157 17.5065 12.5157C16.888 11.0226 15.7452 9.87976 15.7452 9.87976C14.6024 8.73696 13.1093 8.11848 13.1093 8.11848C11.6162 7.5 10 7.5 10 7.5Z"
                                                    fill="currentcolor" />
                                            </svg>
                                        </button>
                                        <button
                                            class="p-1 text-black rounded hover:bg-black/5 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M14.1919 3.93306C14.0747 3.81585 13.9158 3.75 13.75 3.75C13.5842 3.75 13.4253 3.81585 13.3081 3.93306C13.1908 4.05027 13.125 4.20924 13.125 4.375C13.125 4.54076 13.1908 4.69973 13.3081 4.81694L16.6161 8.125L13.3083 11.4328C13.1911 11.55 13.125 11.7092 13.125 11.875C13.125 11.885 13.1252 11.895 13.1257 11.905C13.1332 12.0602 13.1982 12.2071 13.3081 12.3169C13.4253 12.4342 13.5842 12.5 13.75 12.5C13.9158 12.5 14.0747 12.4342 14.1919 12.3169L17.9419 8.56694C18.0592 8.44973 18.125 8.29076 18.125 8.125C18.125 7.95924 18.0592 7.80027 17.9419 7.68306L14.1919 3.93306Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M10 8.75H17.5C17.8452 8.75 18.125 8.47018 18.125 8.125C18.125 7.77982 17.8452 7.5 17.5 7.5H10C8.38384 7.5 6.8907 8.11848 6.8907 8.11848C5.39756 8.73696 4.25476 9.87976 4.25476 9.87976C3.11196 11.0226 2.49348 12.5157 2.49348 12.5157C1.87509 14.0086 1.875 15.6246 1.875 15.6246C1.875 15.7903 1.94085 15.9497 2.05806 16.0669C2.17527 16.1842 2.33424 16.25 2.5 16.25C2.84518 16.25 3.125 15.9702 3.125 15.625C3.125 14.2575 3.64833 12.9941 3.64833 12.9941C4.17166 11.7306 5.13864 10.7636 5.13864 10.7636C6.10563 9.79666 7.36905 9.27333 7.36905 9.27333C8.63248 8.75 10 8.75 10 8.75Z"
                                                    fill="currentcolor" />
                                            </svg>
                                        </button>
                                        <button
                                            class="p-1 text-black rounded hover:bg-black/5 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5 8.75C5.69036 8.75 6.25 9.30964 6.25 10C6.25 10.6904 5.69036 11.25 5 11.25C4.30964 11.25 3.75 10.6904 3.75 10C3.75 9.30964 4.30964 8.75 5 8.75Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M10 8.75C10.6904 8.75 11.25 9.30964 11.25 10C11.25 10.6904 10.6904 11.25 10 11.25C9.30964 11.25 8.75 10.6904 8.75 10C8.75 9.30964 9.30964 8.75 10 8.75Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M16.25 10C16.25 9.30964 15.6904 8.75 15 8.75C14.3096 8.75 13.75 9.30964 13.75 10C13.75 10.6904 14.3096 11.25 15 11.25C15.6904 11.25 16.25 10.6904 16.25 10Z"
                                                    fill="currentcolor" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="rounded pt-10 md:h-[calc(100vh-312px)] overflow-y-auto">
                                    <div class="px-10 pb-10">
                                        <img src="{{ URL::asset('build/images/slack-logo.svg') }}" alt="slack logo" class="mb-7" />
                                        <h3 class="text-2xl font-semibold text-black dark:text-white mb-7">Invite your team
                                        </h3>
                                        <p class="mb-7 dark:text-darkmuted">Slack is most useful when your whole team can
                                            join the conversation. Try adding people to Sliced Admin Community to start
                                            being more productive together!</p>
                                        <a href="javaScript:;"
                                            class="btn bg-black dark:bg-white dark:text-black dark:border-white dark:hover:bg-white/[0.85] dark:hover:border-white/[0.85] border border-black rounded-md text-white transition-all duration-300 hover:bg-black/[0.85] hover:border-black/[0.85] inline-block mb-7">Invite
                                            People</a>
                                        <img src="{{ URL::asset('build/images/mail-banner.png') }}" alt="banner" class="w-full mb-7" />
                                        <div class="flex flex-col items-center justify-between gap-6 lg:flex-row mb-7">
                                            <div class="flex items-start flex-1 gap-2 p-1">
                                                <img class="flex-none object-cover w-10 h-10 overflow-hidden rounded-full"
                                                    src="{{ URL::asset('build/images/logo-icon.svg') }}" alt="" />
                                                <div class="flex-1 ltr:text-left rtl:text-right dark:text-darkmuted">
                                                    <p class="font-semibold">Sliced Admin Community</p>
                                                    <p>Workspace URL: Sliced-community</p>
                                                    <p>Email: Stevens@live.com</p>
                                                </div>
                                            </div>
                                            <a href="javaScript:;"
                                                class="inline-block text-black transition-all duration-300 border rounded-md btn border-light dark:text-white dark:hover:text-black hover:bg-light hover:text-black">Sign
                                                In</a>
                                        </div>
                                        <p class="text-center text-muted dark:text-white">&copy;2023 Slack Technologies,
                                            LLC, a Salesforce company.</p>
                                    </div>
                                    <div
                                        class="flex gap-4 px-4 py-2 border-t ltr:justify-end rtl:justify-start bg-light/20 border-black/10 dark:border-darkborder dark:bg-white/5">
                                        <a href="javaScript:;"
                                            class="btn bg-light border border-light rounded-md text-black transition-all duration-300 hover:bg-light/[0.85] hover:border-light/[0.85] flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                                <path fill="currentColor"
                                                    d="M5.82843 6.99955L8.36396 9.53509L6.94975 10.9493L2 5.99955L6.94975 1.0498L8.36396 2.46402L5.82843 4.99955H13C17.4183 4.99955 21 8.58127 21 12.9996C21 17.4178 17.4183 20.9996 13 20.9996H4V18.9996H13C16.3137 18.9996 19 16.3133 19 12.9996C19 9.68584 16.3137 6.99955 13 6.99955H5.82843Z">
                                                </path>
                                            </svg>
                                            <span>Reply</span>
                                        </a>
                                        <a href="javaScript:;"
                                            class="btn bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85] flex items-center gap-2">
                                            <span>Forward</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                                <path fill="currentColor"
                                                    d="M18.1716 6.99955H11C7.68629 6.99955 5 9.68584 5 12.9996C5 16.3133 7.68629 18.9996 11 18.9996H20V20.9996H11C6.58172 20.9996 3 17.4178 3 12.9996C3 8.58127 6.58172 4.99955 11 4.99955H18.1716L15.636 2.46402L17.0503 1.0498L22 5.99955L17.0503 10.9493L15.636 9.53509L18.1716 6.99955Z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-show="activeTab === 'spam'" x-data="{ selectedMail: false }"
                            class="relative flex flex-row items-start gap-4">
                            <div
                                class="lg:max-w-[300px] xl:max-w-[426px] w-full flex-1 flex flex-col gap-2 rounded border border-black/10 dark:bg-darklight dark:border-darkborder bg-white min-h-[calc(100vh-340px)] md:min-h-[calc(100vh-212px)]">
                                <div class="flex items-center justify-between gap-2 px-4 py-2 bg-light/20 dark:bg-white/5">
                                    <div class="flex items-center gap-2">
                                        <div>
                                            <input type="checkbox" class="form-checkbox outborder-purple">
                                        </div>
                                        <div class="relative w-full max-w-[160px]">
                                            <input type="text"
                                                class="h-10 form-input dark:text-white/80 dark:placeholder:text-white/30 dark:border-darkborder dark:bg-dark dark:focus:border-white/30"
                                                placeholder="Search..." required="">
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <button type="button"
                                            class="flex items-center justify-center w-6 h-6 text-black transition-all duration-300 rounded sm:w-9 sm:h-9 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5 hover:bg-light/50">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                                <path fill="currentColor"
                                                    d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26ZM12.0006 15.968L16.2473 18.3451L15.2988 13.5717L18.8719 10.2674L14.039 9.69434L12.0006 5.27502L9.96214 9.69434L5.12921 10.2674L8.70231 13.5717L7.75383 18.3451L12.0006 15.968Z">
                                                </path>
                                            </svg>
                                        </button>
                                        <button type="button"
                                            class="flex items-center justify-center w-6 h-6 text-black transition-all duration-300 rounded sm:w-9 sm:h-9 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5 hover:bg-light/50">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                                <path fill="currentColor"
                                                    d="M5.46257 4.43262C7.21556 2.91688 9.5007 2 12 2C17.5228 2 22 6.47715 22 12C22 14.1361 21.3302 16.1158 20.1892 17.7406L17 12H20C20 7.58172 16.4183 4 12 4C9.84982 4 7.89777 4.84827 6.46023 6.22842L5.46257 4.43262ZM18.5374 19.5674C16.7844 21.0831 14.4993 22 12 22C6.47715 22 2 17.5228 2 12C2 9.86386 2.66979 7.88416 3.8108 6.25944L7 12H4C4 16.4183 7.58172 20 12 20C14.1502 20 16.1022 19.1517 17.5398 17.7716L18.5374 19.5674Z">
                                                </path>
                                            </svg>
                                        </button>
                                        <button type="button"
                                            class="flex items-center justify-center w-6 h-6 text-black transition-all duration-300 rounded sm:w-9 sm:h-9 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5 hover:bg-light/50">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                                <path fill="currentColor"
                                                    d="M4 8H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V8ZM6 10V20H18V10H6ZM9 12H11V18H9V12ZM13 12H15V18H13V12ZM7 5V3C7 2.44772 7.44772 2 8 2H16C16.5523 2 17 2.44772 17 3V5H22V7H2V5H7ZM9 4V5H15V4H9Z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="space-y-2 py-1.5 px-4 overflow-y-auto">
                                    <button @click="selectedMail = true"
                                        class="flex items-start w-full gap-2 p-2 transition-all duration-300 rounded bg-light/50 dark:bg-white/10 hover:border-transparent hover:bg-light/50">
                                        <div class="flex items-center flex-1 gap-2 p-1">
                                            <div>
                                                <input type="checkbox" class="form-checkbox outborder-purple">
                                            </div>
                                            <img class="flex-none object-cover overflow-hidden rounded-full w-9 h-9"
                                                src="{{ URL::asset('build/images/avatar-6.png') }}" alt="" />
                                            <div class="flex-1 ltr:text-left rtl:text-right">
                                                <p class="line-clamp-1 dark:text-white">Natali Craig</p>
                                                <p class="text-xs text-muted line-clamp-1">Are you free tonight?</p>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="flex-none text-xs text-black/40 mb-1.5 dark:text-white">19:28</p>
                                            <div class="text-muted hover:text-purple">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="w-4 h-4 mx-auto">
                                                    <path fill="currentColor"
                                                        d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </button>
                                    <button @click="selectedMail = true"
                                        class="flex items-start w-full gap-2 p-2 transition-all duration-300 rounded bg-light/20 dark:bg-white/5 dark:hover:bg-white/10 hover:border-transparent hover:bg-light/50">
                                        <div class="flex items-center flex-1 gap-2 p-1">
                                            <div>
                                                <input type="checkbox" class="form-checkbox outborder-purple">
                                            </div>
                                            <img class="flex-none object-cover overflow-hidden rounded-full w-9 h-9"
                                                src="{{ URL::asset('build/images/slack.png') }}" alt="" />
                                            <div class="flex-1 ltr:text-left rtl:text-right">
                                                <p class="line-clamp-1 dark:text-white">Slack</p>
                                                <p class="text-xs text-muted line-clamp-1">Invite your team to Slack</p>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="flex-none text-xs text-black/40 mb-1.5 dark:text-darkmuted">18:30</p>
                                            <div class="text-purple hover:text-purple">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="w-4 h-4 mx-auto">
                                                    <path fill="currentColor"
                                                        d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </button>
                                    <button @click="selectedMail = true"
                                        class="flex items-start w-full gap-2 p-2 transition-all duration-300 rounded bg-light/20 dark:bg-white/5 dark:hover:bg-white/10 hover:border-transparent hover:bg-light/50">
                                        <div class="flex items-center flex-1 gap-2 p-1">
                                            <div>
                                                <input type="checkbox" class="form-checkbox outborder-purple">
                                            </div>
                                            <img class="flex-none object-cover overflow-hidden rounded-full w-9 h-9"
                                                src="{{ URL::asset('build/images/chatgpt.png') }}" alt="" />
                                            <div class="flex-1 ltr:text-left rtl:text-right">
                                                <p class="line-clamp-1 dark:text-white">ChatGPT</p>
                                                <p class="text-xs text-muted line-clamp-1">Welcome to ChatGPT</p>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="flex-none text-xs text-black/40 mb-1.5 dark:text-darkmuted">April 12
                                            </p>
                                            <div class="text-muted hover:text-purple">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="w-4 h-4 mx-auto">
                                                    <path fill="currentColor"
                                                        d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </button>
                                </div>
                            </div>
                            <div class="flex-1 overflow-y-auto md:h-[calc(100vh-212px)] border border-black/10 rounded absolute top-0 left-0 bg-white dark:bg-darklight dark:border-darkborder md:static h-full"
                                :class="!selectedMail ? 'hidden md:block' : ''">
                                <div
                                    class="flex items-center gap-3 px-4 py-2 border-b bg-light/20 border-black/10 dark:border-darkborder dark:bg-white/5">
                                    <button type="button" class="md:hidden" @click="selectedMail = false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 256 256">
                                            <path
                                                d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z">
                                            </path>
                                        </svg>
                                    </button>
                                    <p class="font-semibold dark:text-white/80">Invite your team to Slack</p>
                                </div>
                                <div
                                    class="flex flex-wrap items-start justify-between gap-3 px-4 py-2 border-b bg-light/20 border-black/10 dark:border-darkborder dark:bg-white/5">
                                    <div class="flex items-start flex-1 gap-2 p-1">
                                        <img class="flex-none object-cover overflow-hidden rounded-full w-9 h-9"
                                            src="{{ URL::asset('build/images/slack.svg') }}" alt="" />
                                        <div class="flex-1 ltr:text-left rtl:text-right">
                                            <p class="dark:text-white">Slack <span class="text-muted">|</span>
                                                no-reply@email.slackhq.com</p>
                                            <p class="text-xs text-muted dark:text-darkmuted">Today, 18:30</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center flex-none gap-1">
                                        <button
                                            class="p-1 text-black rounded hover:bg-black/5 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.69171 4.81718C6.80892 4.69997 6.875 4.54076 6.875 4.375C6.875 4.20924 6.80915 4.05027 6.69194 3.93306L6.68655 3.92773C6.56983 3.814 6.41296 3.75 6.25 3.75C6.23125 3.75 6.21251 3.75084 6.19384 3.75253C6.04808 3.76568 5.91155 3.82957 5.80806 3.93306L2.05806 7.68306C1.94085 7.80027 1.875 7.95924 1.875 8.125C1.875 8.29076 1.94085 8.44973 2.05806 8.56694L5.80806 12.3169C5.92527 12.4342 6.08424 12.5 6.25 12.5C6.41576 12.5 6.57473 12.4342 6.69194 12.3169C6.80915 12.1997 6.875 12.0408 6.875 11.875C6.875 11.7092 6.80915 11.5503 6.69194 11.4331L3.38388 8.125L6.69171 4.81718Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M10 7.5H2.5C2.15482 7.5 1.875 7.77982 1.875 8.125C1.875 8.47018 2.15482 8.75 2.5 8.75H10C11.3675 8.75 12.6309 9.27333 12.6309 9.27333C13.8944 9.79665 14.8614 10.7636 14.8614 10.7636C15.8283 11.7306 16.3517 12.9941 16.3517 12.9941C16.875 14.2575 16.875 15.625 16.875 15.625C16.875 15.9702 17.1548 16.25 17.5 16.25C17.8452 16.25 18.125 15.9702 18.125 15.625C18.125 14.0088 17.5065 12.5157 17.5065 12.5157C16.888 11.0226 15.7452 9.87976 15.7452 9.87976C14.6024 8.73696 13.1093 8.11848 13.1093 8.11848C11.6162 7.5 10 7.5 10 7.5Z"
                                                    fill="currentcolor" />
                                            </svg>
                                        </button>
                                        <button
                                            class="p-1 text-black rounded hover:bg-black/5 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.69171 4.81718C6.80892 4.69997 6.875 4.54076 6.875 4.375C6.875 4.20924 6.80915 4.05027 6.69194 3.93306L6.68655 3.92773C6.56983 3.814 6.41296 3.75 6.25 3.75C6.23125 3.75 6.21251 3.75084 6.19384 3.75253C6.04808 3.76568 5.91155 3.82957 5.80806 3.93306L2.05806 7.68306C1.94085 7.80027 1.875 7.95924 1.875 8.125C1.875 8.29076 1.94085 8.44973 2.05806 8.56694L5.80806 12.3169C5.92527 12.4342 6.08424 12.5 6.25 12.5C6.41576 12.5 6.57473 12.4342 6.69194 12.3169C6.80915 12.1997 6.875 12.0408 6.875 11.875C6.875 11.7092 6.80915 11.5503 6.69194 11.4331L3.38388 8.125L6.69171 4.81718Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M10.4417 4.81718C10.5589 4.69997 10.625 4.54076 10.625 4.375C10.625 4.20924 10.5592 4.05027 10.4419 3.93306L10.4365 3.92773C10.3198 3.814 10.163 3.75 10 3.75C9.98125 3.75 9.96251 3.75084 9.94384 3.75253C9.79808 3.76568 9.66155 3.82957 9.55806 3.93306L5.80806 7.68306C5.69085 7.80027 5.625 7.95924 5.625 8.125C5.625 8.29076 5.69085 8.44973 5.80806 8.56694L9.55806 12.3169C9.67527 12.4342 9.83424 12.5 10 12.5C10.1658 12.5 10.3247 12.4342 10.4419 12.3169C10.5592 12.1997 10.625 12.0408 10.625 11.875C10.625 11.7092 10.5592 11.5503 10.4419 11.4331L7.13388 8.125L10.4417 4.81718Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M10 7.5H6.25C5.90482 7.5 5.625 7.77982 5.625 8.125C5.625 8.47018 5.90482 8.75 6.25 8.75H10C11.3675 8.75 12.6309 9.27333 12.6309 9.27333C13.8944 9.79666 14.8614 10.7636 14.8614 10.7636C15.8283 11.7306 16.3517 12.9941 16.3517 12.9941C16.875 14.2575 16.875 15.625 16.875 15.625C16.875 15.9702 17.1548 16.25 17.5 16.25C17.8452 16.25 18.125 15.9702 18.125 15.625C18.125 14.0088 17.5065 12.5157 17.5065 12.5157C16.888 11.0226 15.7452 9.87976 15.7452 9.87976C14.6024 8.73696 13.1093 8.11848 13.1093 8.11848C11.6162 7.5 10 7.5 10 7.5Z"
                                                    fill="currentcolor" />
                                            </svg>
                                        </button>
                                        <button
                                            class="p-1 text-black rounded hover:bg-black/5 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M14.1919 3.93306C14.0747 3.81585 13.9158 3.75 13.75 3.75C13.5842 3.75 13.4253 3.81585 13.3081 3.93306C13.1908 4.05027 13.125 4.20924 13.125 4.375C13.125 4.54076 13.1908 4.69973 13.3081 4.81694L16.6161 8.125L13.3083 11.4328C13.1911 11.55 13.125 11.7092 13.125 11.875C13.125 11.885 13.1252 11.895 13.1257 11.905C13.1332 12.0602 13.1982 12.2071 13.3081 12.3169C13.4253 12.4342 13.5842 12.5 13.75 12.5C13.9158 12.5 14.0747 12.4342 14.1919 12.3169L17.9419 8.56694C18.0592 8.44973 18.125 8.29076 18.125 8.125C18.125 7.95924 18.0592 7.80027 17.9419 7.68306L14.1919 3.93306Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M10 8.75H17.5C17.8452 8.75 18.125 8.47018 18.125 8.125C18.125 7.77982 17.8452 7.5 17.5 7.5H10C8.38384 7.5 6.8907 8.11848 6.8907 8.11848C5.39756 8.73696 4.25476 9.87976 4.25476 9.87976C3.11196 11.0226 2.49348 12.5157 2.49348 12.5157C1.87509 14.0086 1.875 15.6246 1.875 15.6246C1.875 15.7903 1.94085 15.9497 2.05806 16.0669C2.17527 16.1842 2.33424 16.25 2.5 16.25C2.84518 16.25 3.125 15.9702 3.125 15.625C3.125 14.2575 3.64833 12.9941 3.64833 12.9941C4.17166 11.7306 5.13864 10.7636 5.13864 10.7636C6.10563 9.79666 7.36905 9.27333 7.36905 9.27333C8.63248 8.75 10 8.75 10 8.75Z"
                                                    fill="currentcolor" />
                                            </svg>
                                        </button>
                                        <button
                                            class="p-1 text-black rounded hover:bg-black/5 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5 8.75C5.69036 8.75 6.25 9.30964 6.25 10C6.25 10.6904 5.69036 11.25 5 11.25C4.30964 11.25 3.75 10.6904 3.75 10C3.75 9.30964 4.30964 8.75 5 8.75Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M10 8.75C10.6904 8.75 11.25 9.30964 11.25 10C11.25 10.6904 10.6904 11.25 10 11.25C9.30964 11.25 8.75 10.6904 8.75 10C8.75 9.30964 9.30964 8.75 10 8.75Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M16.25 10C16.25 9.30964 15.6904 8.75 15 8.75C14.3096 8.75 13.75 9.30964 13.75 10C13.75 10.6904 14.3096 11.25 15 11.25C15.6904 11.25 16.25 10.6904 16.25 10Z"
                                                    fill="currentcolor" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="rounded pt-10 md:h-[calc(100vh-312px)] overflow-y-auto">
                                    <div class="px-10 pb-10">
                                        <img src="{{ URL::asset('build/images/slack-logo.svg') }}" alt="slack logo" class="mb-7" />
                                        <h3 class="text-2xl font-semibold text-black dark:text-white mb-7">Invite your team
                                        </h3>
                                        <p class="mb-7 dark:text-darkmuted">Slack is most useful when your whole team can
                                            join the conversation. Try adding people to Sliced Admin Community to start
                                            being more productive together!</p>
                                        <a href="javaScript:;"
                                            class="btn bg-black dark:bg-white dark:text-black dark:border-white dark:hover:bg-white/[0.85] dark:hover:border-white/[0.85] border border-black rounded-md text-white transition-all duration-300 hover:bg-black/[0.85] hover:border-black/[0.85] inline-block mb-7">Invite
                                            People</a>
                                        <img src="{{ URL::asset('build/images/mail-banner.png') }}" alt="banner" class="w-full mb-7" />
                                        <div class="flex flex-col items-center justify-between gap-6 lg:flex-row mb-7">
                                            <div class="flex items-start flex-1 gap-2 p-1">
                                                <img class="flex-none object-cover w-10 h-10 overflow-hidden rounded-full"
                                                    src="{{ URL::asset('build/images/logo-icon.svg') }}" alt="" />
                                                <div class="flex-1 text-left dark:text-darkmuted">
                                                    <p class="font-semibold">Sliced Admin Community</p>
                                                    <p>Workspace URL: Sliced-community</p>
                                                    <p>Email: Stevens@live.com</p>
                                                </div>
                                            </div>
                                            <a href="javaScript:;"
                                                class="inline-block text-black transition-all duration-300 border rounded-md btn border-light dark:text-white dark:hover:text-black hover:bg-light hover:text-black">Sign
                                                In</a>
                                        </div>
                                        <p class="text-center text-muted dark:text-white">&copy;2023 Slack Technologies,
                                            LLC, a Salesforce company.</p>
                                    </div>
                                    <div
                                        class="flex justify-end gap-4 px-4 py-2 border-t bg-light/20 border-black/10 dark:border-darkborder dark:bg-white/5">
                                        <a href="javaScript:;"
                                            class="btn bg-light border border-light rounded-md text-black transition-all duration-300 hover:bg-light/[0.85] hover:border-light/[0.85] flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                                <path fill="currentColor"
                                                    d="M5.82843 6.99955L8.36396 9.53509L6.94975 10.9493L2 5.99955L6.94975 1.0498L8.36396 2.46402L5.82843 4.99955H13C17.4183 4.99955 21 8.58127 21 12.9996C21 17.4178 17.4183 20.9996 13 20.9996H4V18.9996H13C16.3137 18.9996 19 16.3133 19 12.9996C19 9.68584 16.3137 6.99955 13 6.99955H5.82843Z">
                                                </path>
                                            </svg>
                                            <span>Reply</span>
                                        </a>
                                        <a href="javaScript:;"
                                            class="btn bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85] flex items-center gap-2">
                                            <span>Forward</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                                <path fill="currentColor"
                                                    d="M18.1716 6.99955H11C7.68629 6.99955 5 9.68584 5 12.9996C5 16.3133 7.68629 18.9996 11 18.9996H20V20.9996H11C6.58172 20.9996 3 17.4178 3 12.9996C3 8.58127 6.58172 4.99955 11 4.99955H18.1716L15.636 2.46402L17.0503 1.0498L22 5.99955L17.0503 10.9493L15.636 9.53509L18.1716 6.99955Z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-show="activeTab === 'trash'" x-data="{ selectedMail: false }"
                            class="relative flex flex-row items-start gap-4">
                            <div
                                class="lg:max-w-[300px] xl:max-w-[426px] w-full flex-1 flex flex-col gap-2 rounded border border-black/10 dark:bg-darklight dark:border-darkborder bg-white min-h-[calc(100vh-340px)] md:min-h-[calc(100vh-212px)]">
                                <div class="flex items-center justify-between gap-2 px-4 py-2 bg-light/20 dark:bg-white/5">
                                    <div class="flex items-center gap-2">
                                        <div>
                                            <input type="checkbox" class="form-checkbox outborder-purple">
                                        </div>
                                        <div class="relative w-full max-w-[160px]">
                                            <input type="text"
                                                class="h-10 form-input dark:text-white/80 dark:placeholder:text-white/30 dark:border-darkborder dark:bg-dark dark:focus:border-white/30"
                                                placeholder="Search..." required="">
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <button type="button"
                                            class="flex items-center justify-center w-6 h-6 text-black transition-all duration-300 rounded sm:w-9 sm:h-9 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5 hover:bg-light/50">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                                <path fill="currentColor"
                                                    d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26ZM12.0006 15.968L16.2473 18.3451L15.2988 13.5717L18.8719 10.2674L14.039 9.69434L12.0006 5.27502L9.96214 9.69434L5.12921 10.2674L8.70231 13.5717L7.75383 18.3451L12.0006 15.968Z">
                                                </path>
                                            </svg>
                                        </button>
                                        <button type="button"
                                            class="flex items-center justify-center w-6 h-6 text-black transition-all duration-300 rounded sm:w-9 sm:h-9 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5 hover:bg-light/50">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                                <path fill="currentColor"
                                                    d="M5.46257 4.43262C7.21556 2.91688 9.5007 2 12 2C17.5228 2 22 6.47715 22 12C22 14.1361 21.3302 16.1158 20.1892 17.7406L17 12H20C20 7.58172 16.4183 4 12 4C9.84982 4 7.89777 4.84827 6.46023 6.22842L5.46257 4.43262ZM18.5374 19.5674C16.7844 21.0831 14.4993 22 12 22C6.47715 22 2 17.5228 2 12C2 9.86386 2.66979 7.88416 3.8108 6.25944L7 12H4C4 16.4183 7.58172 20 12 20C14.1502 20 16.1022 19.1517 17.5398 17.7716L18.5374 19.5674Z">
                                                </path>
                                            </svg>
                                        </button>
                                        <button type="button"
                                            class="flex items-center justify-center w-6 h-6 text-black transition-all duration-300 rounded sm:w-9 sm:h-9 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5 hover:bg-light/50">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                                <path fill="currentColor"
                                                    d="M4 8H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V8ZM6 10V20H18V10H6ZM9 12H11V18H9V12ZM13 12H15V18H13V12ZM7 5V3C7 2.44772 7.44772 2 8 2H16C16.5523 2 17 2.44772 17 3V5H22V7H2V5H7ZM9 4V5H15V4H9Z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="space-y-2 py-1.5 px-4 overflow-y-auto">
                                    <button @click="selectedMail = true"
                                        class="flex items-start w-full gap-2 p-2 transition-all duration-300 rounded bg-light/20 dark:bg-white/5 dark:hover:bg-white/10 hover:border-transparent hover:bg-light/50">
                                        <div class="flex items-center flex-1 gap-2 p-1">
                                            <div>
                                                <input type="checkbox" class="form-checkbox outborder-purple">
                                            </div>
                                            <img class="flex-none object-cover overflow-hidden rounded-full w-9 h-9"
                                                src="{{ URL::asset('build/images/avatar-8.png') }}" alt="" />
                                            <div class="flex-1 ltr:text-left rtl:text-right">
                                                <p class="line-clamp-1 dark:text-white">Orlando Diggs</p>
                                                <p class="text-xs text-muted line-clamp-1">Hey man – Nah man sorry i don't.
                                                    Should i get it?</p>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="flex-none text-xs text-black/40 mb-1.5 dark:text-darkmuted">15:30</p>
                                            <div class="text-muted hover:text-purple">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="w-4 h-4 mx-auto">
                                                    <path fill="currentColor"
                                                        d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </button>
                                </div>
                            </div>
                            <div class="flex-1 overflow-y-auto md:h-[calc(100vh-212px)] border border-black/10 rounded absolute top-0 left-0 bg-white dark:bg-darklight dark:border-darkborder md:static h-full"
                                :class="!selectedMail ? 'hidden md:block' : ''">
                                <div
                                    class="flex items-center gap-3 px-4 py-2 border-b bg-light/20 border-black/10 dark:border-darkborder dark:bg-white/5">
                                    <button type="button" class="md:hidden" @click="selectedMail = false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 256 256">
                                            <path
                                                d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z">
                                            </path>
                                        </svg>
                                    </button>
                                    <p class="font-semibold dark:text-white/80">Invite your team to Slack</p>
                                </div>
                                <div
                                    class="flex flex-wrap items-start justify-between gap-3 px-4 py-2 border-b bg-light/20 border-black/10 dark:border-darkborder dark:bg-white/5">
                                    <div class="flex items-start flex-1 gap-2 p-1">
                                        <img class="flex-none object-cover overflow-hidden rounded-full w-9 h-9"
                                            src="{{ URL::asset('build/images/slack.svg') }}" alt="" />
                                        <div class="flex-1 ltr:text-left rtl:text-right">
                                            <p class="dark:text-white">Slack <span class="text-muted">|</span>
                                                no-reply@email.slackhq.com</p>
                                            <p class="text-xs text-muted dark:text-darkmuted">Today, 18:30</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center flex-none gap-1">
                                        <button
                                            class="p-1 text-black rounded hover:bg-black/5 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.69171 4.81718C6.80892 4.69997 6.875 4.54076 6.875 4.375C6.875 4.20924 6.80915 4.05027 6.69194 3.93306L6.68655 3.92773C6.56983 3.814 6.41296 3.75 6.25 3.75C6.23125 3.75 6.21251 3.75084 6.19384 3.75253C6.04808 3.76568 5.91155 3.82957 5.80806 3.93306L2.05806 7.68306C1.94085 7.80027 1.875 7.95924 1.875 8.125C1.875 8.29076 1.94085 8.44973 2.05806 8.56694L5.80806 12.3169C5.92527 12.4342 6.08424 12.5 6.25 12.5C6.41576 12.5 6.57473 12.4342 6.69194 12.3169C6.80915 12.1997 6.875 12.0408 6.875 11.875C6.875 11.7092 6.80915 11.5503 6.69194 11.4331L3.38388 8.125L6.69171 4.81718Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M10 7.5H2.5C2.15482 7.5 1.875 7.77982 1.875 8.125C1.875 8.47018 2.15482 8.75 2.5 8.75H10C11.3675 8.75 12.6309 9.27333 12.6309 9.27333C13.8944 9.79665 14.8614 10.7636 14.8614 10.7636C15.8283 11.7306 16.3517 12.9941 16.3517 12.9941C16.875 14.2575 16.875 15.625 16.875 15.625C16.875 15.9702 17.1548 16.25 17.5 16.25C17.8452 16.25 18.125 15.9702 18.125 15.625C18.125 14.0088 17.5065 12.5157 17.5065 12.5157C16.888 11.0226 15.7452 9.87976 15.7452 9.87976C14.6024 8.73696 13.1093 8.11848 13.1093 8.11848C11.6162 7.5 10 7.5 10 7.5Z"
                                                    fill="currentcolor" />
                                            </svg>
                                        </button>
                                        <button
                                            class="p-1 text-black rounded hover:bg-black/5 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.69171 4.81718C6.80892 4.69997 6.875 4.54076 6.875 4.375C6.875 4.20924 6.80915 4.05027 6.69194 3.93306L6.68655 3.92773C6.56983 3.814 6.41296 3.75 6.25 3.75C6.23125 3.75 6.21251 3.75084 6.19384 3.75253C6.04808 3.76568 5.91155 3.82957 5.80806 3.93306L2.05806 7.68306C1.94085 7.80027 1.875 7.95924 1.875 8.125C1.875 8.29076 1.94085 8.44973 2.05806 8.56694L5.80806 12.3169C5.92527 12.4342 6.08424 12.5 6.25 12.5C6.41576 12.5 6.57473 12.4342 6.69194 12.3169C6.80915 12.1997 6.875 12.0408 6.875 11.875C6.875 11.7092 6.80915 11.5503 6.69194 11.4331L3.38388 8.125L6.69171 4.81718Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M10.4417 4.81718C10.5589 4.69997 10.625 4.54076 10.625 4.375C10.625 4.20924 10.5592 4.05027 10.4419 3.93306L10.4365 3.92773C10.3198 3.814 10.163 3.75 10 3.75C9.98125 3.75 9.96251 3.75084 9.94384 3.75253C9.79808 3.76568 9.66155 3.82957 9.55806 3.93306L5.80806 7.68306C5.69085 7.80027 5.625 7.95924 5.625 8.125C5.625 8.29076 5.69085 8.44973 5.80806 8.56694L9.55806 12.3169C9.67527 12.4342 9.83424 12.5 10 12.5C10.1658 12.5 10.3247 12.4342 10.4419 12.3169C10.5592 12.1997 10.625 12.0408 10.625 11.875C10.625 11.7092 10.5592 11.5503 10.4419 11.4331L7.13388 8.125L10.4417 4.81718Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M10 7.5H6.25C5.90482 7.5 5.625 7.77982 5.625 8.125C5.625 8.47018 5.90482 8.75 6.25 8.75H10C11.3675 8.75 12.6309 9.27333 12.6309 9.27333C13.8944 9.79666 14.8614 10.7636 14.8614 10.7636C15.8283 11.7306 16.3517 12.9941 16.3517 12.9941C16.875 14.2575 16.875 15.625 16.875 15.625C16.875 15.9702 17.1548 16.25 17.5 16.25C17.8452 16.25 18.125 15.9702 18.125 15.625C18.125 14.0088 17.5065 12.5157 17.5065 12.5157C16.888 11.0226 15.7452 9.87976 15.7452 9.87976C14.6024 8.73696 13.1093 8.11848 13.1093 8.11848C11.6162 7.5 10 7.5 10 7.5Z"
                                                    fill="currentcolor" />
                                            </svg>
                                        </button>
                                        <button
                                            class="p-1 text-black rounded hover:bg-black/5 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M14.1919 3.93306C14.0747 3.81585 13.9158 3.75 13.75 3.75C13.5842 3.75 13.4253 3.81585 13.3081 3.93306C13.1908 4.05027 13.125 4.20924 13.125 4.375C13.125 4.54076 13.1908 4.69973 13.3081 4.81694L16.6161 8.125L13.3083 11.4328C13.1911 11.55 13.125 11.7092 13.125 11.875C13.125 11.885 13.1252 11.895 13.1257 11.905C13.1332 12.0602 13.1982 12.2071 13.3081 12.3169C13.4253 12.4342 13.5842 12.5 13.75 12.5C13.9158 12.5 14.0747 12.4342 14.1919 12.3169L17.9419 8.56694C18.0592 8.44973 18.125 8.29076 18.125 8.125C18.125 7.95924 18.0592 7.80027 17.9419 7.68306L14.1919 3.93306Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M10 8.75H17.5C17.8452 8.75 18.125 8.47018 18.125 8.125C18.125 7.77982 17.8452 7.5 17.5 7.5H10C8.38384 7.5 6.8907 8.11848 6.8907 8.11848C5.39756 8.73696 4.25476 9.87976 4.25476 9.87976C3.11196 11.0226 2.49348 12.5157 2.49348 12.5157C1.87509 14.0086 1.875 15.6246 1.875 15.6246C1.875 15.7903 1.94085 15.9497 2.05806 16.0669C2.17527 16.1842 2.33424 16.25 2.5 16.25C2.84518 16.25 3.125 15.9702 3.125 15.625C3.125 14.2575 3.64833 12.9941 3.64833 12.9941C4.17166 11.7306 5.13864 10.7636 5.13864 10.7636C6.10563 9.79666 7.36905 9.27333 7.36905 9.27333C8.63248 8.75 10 8.75 10 8.75Z"
                                                    fill="currentcolor" />
                                            </svg>
                                        </button>
                                        <button
                                            class="p-1 text-black rounded hover:bg-black/5 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5 8.75C5.69036 8.75 6.25 9.30964 6.25 10C6.25 10.6904 5.69036 11.25 5 11.25C4.30964 11.25 3.75 10.6904 3.75 10C3.75 9.30964 4.30964 8.75 5 8.75Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M10 8.75C10.6904 8.75 11.25 9.30964 11.25 10C11.25 10.6904 10.6904 11.25 10 11.25C9.30964 11.25 8.75 10.6904 8.75 10C8.75 9.30964 9.30964 8.75 10 8.75Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M16.25 10C16.25 9.30964 15.6904 8.75 15 8.75C14.3096 8.75 13.75 9.30964 13.75 10C13.75 10.6904 14.3096 11.25 15 11.25C15.6904 11.25 16.25 10.6904 16.25 10Z"
                                                    fill="currentcolor" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="rounded pt-10 md:h-[calc(100vh-312px)] overflow-y-auto">
                                    <div class="px-10 pb-10">
                                        <img src="{{ URL::asset('build/images/slack-logo.svg') }}" alt="slack logo" class="mb-7" />
                                        <h3 class="text-2xl font-semibold text-black dark:text-white mb-7">Invite your
                                            team</h3>
                                        <p class="mb-7 dark:text-darkmuted">Slack is most useful when your whole team can
                                            join the conversation. Try adding people to Sliced Admin Community to start
                                            being more productive together!</p>
                                        <a href="javaScript:;"
                                            class="btn bg-black dark:bg-white dark:text-black dark:border-white dark:hover:bg-white/[0.85] dark:hover:border-white/[0.85] border border-black rounded-md text-white transition-all duration-300 hover:bg-black/[0.85] hover:border-black/[0.85] inline-block mb-7">Invite
                                            People</a>
                                        <img src="{{ URL::asset('build/images/mail-banner.png') }}" alt="banner" class="w-full mb-7" />
                                        <div class="flex flex-col items-center justify-between gap-6 lg:flex-row mb-7">
                                            <div class="flex items-start flex-1 gap-2 p-1">
                                                <img class="flex-none object-cover w-10 h-10 overflow-hidden rounded-full"
                                                    src="{{ URL::asset('build/images/logo-icon.svg') }}" alt="" />
                                                <div class="flex-1 ltr:text-left rtl:text-right dark:text-darkmuted">
                                                    <p class="font-semibold">Sliced Admin Community</p>
                                                    <p>Workspace URL: Sliced-community</p>
                                                    <p>Email: Stevens@live.com</p>
                                                </div>
                                            </div>
                                            <a href="javaScript:;"
                                                class="inline-block text-black transition-all duration-300 border rounded-md btn border-light dark:text-white dark:hover:text-black hover:bg-light hover:text-black">Sign
                                                In</a>
                                        </div>
                                        <p class="text-center text-muted dark:text-white">&copy;2023 Slack Technologies,
                                            LLC, a Salesforce company.</p>
                                    </div>
                                    <div
                                        class="flex justify-end gap-4 px-4 py-2 border-t bg-light/20 border-black/10 dark:border-darkborder dark:bg-white/5">
                                        <a href="javaScript:;"
                                            class="btn bg-light border border-light rounded-md text-black transition-all duration-300 hover:bg-light/[0.85] hover:border-light/[0.85] flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="w-5 h-5">
                                                <path fill="currentColor"
                                                    d="M5.82843 6.99955L8.36396 9.53509L6.94975 10.9493L2 5.99955L6.94975 1.0498L8.36396 2.46402L5.82843 4.99955H13C17.4183 4.99955 21 8.58127 21 12.9996C21 17.4178 17.4183 20.9996 13 20.9996H4V18.9996H13C16.3137 18.9996 19 16.3133 19 12.9996C19 9.68584 16.3137 6.99955 13 6.99955H5.82843Z">
                                                </path>
                                            </svg>
                                            <span>Reply</span>
                                        </a>
                                        <a href="javaScript:;"
                                            class="btn bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85] flex items-center gap-2">
                                            <span>Forward</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="w-5 h-5">
                                                <path fill="currentColor"
                                                    d="M18.1716 6.99955H11C7.68629 6.99955 5 9.68584 5 12.9996C5 16.3133 7.68629 18.9996 11 18.9996H20V20.9996H11C6.58172 20.9996 3 17.4178 3 12.9996C3 8.58127 6.58172 4.99955 11 4.99955H18.1716L15.636 2.46402L17.0503 1.0498L22 5.99955L17.0503 10.9493L15.636 9.53509L18.1716 6.99955Z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-show="activeTab === 'archive'" x-data="{ selectedMail: false }"
                            class="relative flex flex-row items-start gap-4">
                            <div
                                class="lg:max-w-[300px] xl:max-w-[426px] w-full flex-1 flex flex-col gap-2 rounded border border-black/10 dark:bg-darklight dark:border-darkborder bg-white min-h-[calc(100vh-340px)] md:min-h-[calc(100vh-212px)]">
                                <div
                                    class="flex items-center justify-between gap-2 px-4 py-2 bg-light/20 dark:bg-white/5">
                                    <div class="flex items-center gap-2">
                                        <div>
                                            <input type="checkbox" class="form-checkbox outborder-purple">
                                        </div>
                                        <div class="relative w-full max-w-[160px]">
                                            <input type="text"
                                                class="h-10 form-input dark:text-white/80 dark:placeholder:text-white/30 dark:border-darkborder dark:bg-dark dark:focus:border-white/30"
                                                placeholder="Search..." required="">
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <button type="button"
                                            class="flex items-center justify-center w-6 h-6 text-black transition-all duration-300 rounded sm:w-9 sm:h-9 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5 hover:bg-light/50">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="w-5 h-5">
                                                <path fill="currentColor"
                                                    d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26ZM12.0006 15.968L16.2473 18.3451L15.2988 13.5717L18.8719 10.2674L14.039 9.69434L12.0006 5.27502L9.96214 9.69434L5.12921 10.2674L8.70231 13.5717L7.75383 18.3451L12.0006 15.968Z">
                                                </path>
                                            </svg>
                                        </button>
                                        <button type="button"
                                            class="flex items-center justify-center w-6 h-6 text-black transition-all duration-300 rounded sm:w-9 sm:h-9 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5 hover:bg-light/50">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="w-5 h-5">
                                                <path fill="currentColor"
                                                    d="M5.46257 4.43262C7.21556 2.91688 9.5007 2 12 2C17.5228 2 22 6.47715 22 12C22 14.1361 21.3302 16.1158 20.1892 17.7406L17 12H20C20 7.58172 16.4183 4 12 4C9.84982 4 7.89777 4.84827 6.46023 6.22842L5.46257 4.43262ZM18.5374 19.5674C16.7844 21.0831 14.4993 22 12 22C6.47715 22 2 17.5228 2 12C2 9.86386 2.66979 7.88416 3.8108 6.25944L7 12H4C4 16.4183 7.58172 20 12 20C14.1502 20 16.1022 19.1517 17.5398 17.7716L18.5374 19.5674Z">
                                                </path>
                                            </svg>
                                        </button>
                                        <button type="button"
                                            class="flex items-center justify-center w-6 h-6 text-black transition-all duration-300 rounded sm:w-9 sm:h-9 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5 hover:bg-light/50">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="w-5 h-5">
                                                <path fill="currentColor"
                                                    d="M4 8H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V8ZM6 10V20H18V10H6ZM9 12H11V18H9V12ZM13 12H15V18H13V12ZM7 5V3C7 2.44772 7.44772 2 8 2H16C16.5523 2 17 2.44772 17 3V5H22V7H2V5H7ZM9 4V5H15V4H9Z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="space-y-2 py-1.5 px-4 overflow-y-auto">
                                    <button @click="selectedMail = true"
                                        class="flex items-start w-full gap-2 p-2 transition-all duration-300 rounded bg-light/20 dark:bg-white/5 dark:hover:bg-white/10 hover:border-transparent hover:bg-light/50">
                                        <div class="flex items-center flex-1 gap-2 p-1">
                                            <div>
                                                <input type="checkbox" class="form-checkbox outborder-purple">
                                            </div>
                                            <img class="flex-none object-cover overflow-hidden rounded-full w-9 h-9"
                                                src="{{ URL::asset('build/images/avatar-7.png') }}" alt="" />
                                            <div class="flex-1 ltr:text-left rtl:text-right">
                                                <p class="line-clamp-1 dark:text-white">Drew Cano</p>
                                                <p class="text-xs text-muted line-clamp-1">Let's go fishing! - Hey, You
                                                    wanna join me and Fred at the lake tomorrow? It'll be awesome.</p>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="flex-none text-xs text-black/40 mb-1.5 dark:text-darkmuted">17:30
                                            </p>
                                            <div class="text-muted hover:text-purple">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    class="w-4 h-4 mx-auto">
                                                    <path fill="currentColor"
                                                        d="M12.0006 18.26L4.94715 22.2082L6.52248 14.2799L0.587891 8.7918L8.61493 7.84006L12.0006 0.5L15.3862 7.84006L23.4132 8.7918L17.4787 14.2799L19.054 22.2082L12.0006 18.26Z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </button>
                                </div>
                            </div>
                            <div class="flex-1 overflow-y-auto md:h-[calc(100vh-212px)] border border-black/10 rounded absolute top-0 left-0 bg-white dark:bg-darklight dark:border-darkborder md:static h-full"
                                :class="!selectedMail ? 'hidden md:block' : ''">
                                <div
                                    class="flex items-center gap-3 px-4 py-2 border-b bg-light/20 border-black/10 dark:border-darkborder dark:bg-white/5">
                                    <button type="button" class="md:hidden" @click="selectedMail = false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 256 256">
                                            <path
                                                d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z">
                                            </path>
                                        </svg>
                                    </button>
                                    <p class="font-semibold dark:text-white/80">Invite your team to Slack</p>
                                </div>
                                <div
                                    class="flex flex-wrap items-start justify-between gap-3 px-4 py-2 border-b bg-light/20 border-black/10 dark:border-darkborder dark:bg-white/5">
                                    <div class="flex items-start flex-1 gap-2 p-1">
                                        <img class="flex-none object-cover overflow-hidden rounded-full w-9 h-9"
                                            src="{{ URL::asset('build/images/slack.svg') }}" alt="" />
                                        <div class="flex-1 ltr:text-left rtl:text-right">
                                            <p class="dark:text-white">Slack <span class="text-muted">|</span>
                                                no-reply@email.slackhq.com</p>
                                            <p class="text-xs text-muted dark:text-darkmuted">Today, 18:30</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center flex-none gap-1">
                                        <button
                                            class="p-1 text-black rounded hover:bg-black/5 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.69171 4.81718C6.80892 4.69997 6.875 4.54076 6.875 4.375C6.875 4.20924 6.80915 4.05027 6.69194 3.93306L6.68655 3.92773C6.56983 3.814 6.41296 3.75 6.25 3.75C6.23125 3.75 6.21251 3.75084 6.19384 3.75253C6.04808 3.76568 5.91155 3.82957 5.80806 3.93306L2.05806 7.68306C1.94085 7.80027 1.875 7.95924 1.875 8.125C1.875 8.29076 1.94085 8.44973 2.05806 8.56694L5.80806 12.3169C5.92527 12.4342 6.08424 12.5 6.25 12.5C6.41576 12.5 6.57473 12.4342 6.69194 12.3169C6.80915 12.1997 6.875 12.0408 6.875 11.875C6.875 11.7092 6.80915 11.5503 6.69194 11.4331L3.38388 8.125L6.69171 4.81718Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M10 7.5H2.5C2.15482 7.5 1.875 7.77982 1.875 8.125C1.875 8.47018 2.15482 8.75 2.5 8.75H10C11.3675 8.75 12.6309 9.27333 12.6309 9.27333C13.8944 9.79665 14.8614 10.7636 14.8614 10.7636C15.8283 11.7306 16.3517 12.9941 16.3517 12.9941C16.875 14.2575 16.875 15.625 16.875 15.625C16.875 15.9702 17.1548 16.25 17.5 16.25C17.8452 16.25 18.125 15.9702 18.125 15.625C18.125 14.0088 17.5065 12.5157 17.5065 12.5157C16.888 11.0226 15.7452 9.87976 15.7452 9.87976C14.6024 8.73696 13.1093 8.11848 13.1093 8.11848C11.6162 7.5 10 7.5 10 7.5Z"
                                                    fill="currentcolor" />
                                            </svg>
                                        </button>
                                        <button
                                            class="p-1 text-black rounded hover:bg-black/5 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.69171 4.81718C6.80892 4.69997 6.875 4.54076 6.875 4.375C6.875 4.20924 6.80915 4.05027 6.69194 3.93306L6.68655 3.92773C6.56983 3.814 6.41296 3.75 6.25 3.75C6.23125 3.75 6.21251 3.75084 6.19384 3.75253C6.04808 3.76568 5.91155 3.82957 5.80806 3.93306L2.05806 7.68306C1.94085 7.80027 1.875 7.95924 1.875 8.125C1.875 8.29076 1.94085 8.44973 2.05806 8.56694L5.80806 12.3169C5.92527 12.4342 6.08424 12.5 6.25 12.5C6.41576 12.5 6.57473 12.4342 6.69194 12.3169C6.80915 12.1997 6.875 12.0408 6.875 11.875C6.875 11.7092 6.80915 11.5503 6.69194 11.4331L3.38388 8.125L6.69171 4.81718Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M10.4417 4.81718C10.5589 4.69997 10.625 4.54076 10.625 4.375C10.625 4.20924 10.5592 4.05027 10.4419 3.93306L10.4365 3.92773C10.3198 3.814 10.163 3.75 10 3.75C9.98125 3.75 9.96251 3.75084 9.94384 3.75253C9.79808 3.76568 9.66155 3.82957 9.55806 3.93306L5.80806 7.68306C5.69085 7.80027 5.625 7.95924 5.625 8.125C5.625 8.29076 5.69085 8.44973 5.80806 8.56694L9.55806 12.3169C9.67527 12.4342 9.83424 12.5 10 12.5C10.1658 12.5 10.3247 12.4342 10.4419 12.3169C10.5592 12.1997 10.625 12.0408 10.625 11.875C10.625 11.7092 10.5592 11.5503 10.4419 11.4331L7.13388 8.125L10.4417 4.81718Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M10 7.5H6.25C5.90482 7.5 5.625 7.77982 5.625 8.125C5.625 8.47018 5.90482 8.75 6.25 8.75H10C11.3675 8.75 12.6309 9.27333 12.6309 9.27333C13.8944 9.79666 14.8614 10.7636 14.8614 10.7636C15.8283 11.7306 16.3517 12.9941 16.3517 12.9941C16.875 14.2575 16.875 15.625 16.875 15.625C16.875 15.9702 17.1548 16.25 17.5 16.25C17.8452 16.25 18.125 15.9702 18.125 15.625C18.125 14.0088 17.5065 12.5157 17.5065 12.5157C16.888 11.0226 15.7452 9.87976 15.7452 9.87976C14.6024 8.73696 13.1093 8.11848 13.1093 8.11848C11.6162 7.5 10 7.5 10 7.5Z"
                                                    fill="currentcolor" />
                                            </svg>
                                        </button>
                                        <button
                                            class="p-1 text-black rounded hover:bg-black/5 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M14.1919 3.93306C14.0747 3.81585 13.9158 3.75 13.75 3.75C13.5842 3.75 13.4253 3.81585 13.3081 3.93306C13.1908 4.05027 13.125 4.20924 13.125 4.375C13.125 4.54076 13.1908 4.69973 13.3081 4.81694L16.6161 8.125L13.3083 11.4328C13.1911 11.55 13.125 11.7092 13.125 11.875C13.125 11.885 13.1252 11.895 13.1257 11.905C13.1332 12.0602 13.1982 12.2071 13.3081 12.3169C13.4253 12.4342 13.5842 12.5 13.75 12.5C13.9158 12.5 14.0747 12.4342 14.1919 12.3169L17.9419 8.56694C18.0592 8.44973 18.125 8.29076 18.125 8.125C18.125 7.95924 18.0592 7.80027 17.9419 7.68306L14.1919 3.93306Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M10 8.75H17.5C17.8452 8.75 18.125 8.47018 18.125 8.125C18.125 7.77982 17.8452 7.5 17.5 7.5H10C8.38384 7.5 6.8907 8.11848 6.8907 8.11848C5.39756 8.73696 4.25476 9.87976 4.25476 9.87976C3.11196 11.0226 2.49348 12.5157 2.49348 12.5157C1.87509 14.0086 1.875 15.6246 1.875 15.6246C1.875 15.7903 1.94085 15.9497 2.05806 16.0669C2.17527 16.1842 2.33424 16.25 2.5 16.25C2.84518 16.25 3.125 15.9702 3.125 15.625C3.125 14.2575 3.64833 12.9941 3.64833 12.9941C4.17166 11.7306 5.13864 10.7636 5.13864 10.7636C6.10563 9.79666 7.36905 9.27333 7.36905 9.27333C8.63248 8.75 10 8.75 10 8.75Z"
                                                    fill="currentcolor" />
                                            </svg>
                                        </button>
                                        <button
                                            class="p-1 text-black rounded hover:bg-black/5 dark:text-darkmuted dark:hover:text-white dark:hover:bg-white/5">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5 8.75C5.69036 8.75 6.25 9.30964 6.25 10C6.25 10.6904 5.69036 11.25 5 11.25C4.30964 11.25 3.75 10.6904 3.75 10C3.75 9.30964 4.30964 8.75 5 8.75Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M10 8.75C10.6904 8.75 11.25 9.30964 11.25 10C11.25 10.6904 10.6904 11.25 10 11.25C9.30964 11.25 8.75 10.6904 8.75 10C8.75 9.30964 9.30964 8.75 10 8.75Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M16.25 10C16.25 9.30964 15.6904 8.75 15 8.75C14.3096 8.75 13.75 9.30964 13.75 10C13.75 10.6904 14.3096 11.25 15 11.25C15.6904 11.25 16.25 10.6904 16.25 10Z"
                                                    fill="currentcolor" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="rounded pt-10 md:h-[calc(100vh-312px)] overflow-y-auto">
                                    <div class="px-10 pb-10">
                                        <img src="{{ URL::asset('build/images/slack-logo.svg') }}" alt="slack logo" class="mb-7" />
                                        <h3 class="text-2xl font-semibold text-black dark:text-white mb-7">Invite your
                                            team</h3>
                                        <p class="mb-7 dark:text-darkmuted">Slack is most useful when your whole team can
                                            join the conversation. Try adding people to Sliced Admin Community to start
                                            being more productive together!</p>
                                        <a href="javaScript:;"
                                            class="btn bg-black dark:bg-white dark:text-black dark:border-white dark:hover:bg-white/[0.85] dark:hover:border-white/[0.85] border border-black rounded-md text-white transition-all duration-300 hover:bg-black/[0.85] hover:border-black/[0.85] inline-block mb-7">Invite
                                            People</a>
                                        <img src="{{ URL::asset('build/images/mail-banner.png') }}" alt="banner" class="w-full mb-7" />
                                        <div class="flex flex-col items-center justify-between gap-6 lg:flex-row mb-7">
                                            <div class="flex items-start flex-1 gap-2 p-1">
                                                <img class="flex-none object-cover w-10 h-10 overflow-hidden rounded-full"
                                                    src="{{ URL::asset('build/images/logo-icon.svg') }}" alt="" />
                                                <div class="flex-1 ltr:text-left rtl:text-right dark:text-darkmuted">
                                                    <p class="font-semibold">Sliced Admin Community</p>
                                                    <p>Workspace URL: Sliced-community</p>
                                                    <p>Email: Stevens@live.com</p>
                                                </div>
                                            </div>
                                            <a href="javaScript:;"
                                                class="inline-block text-black transition-all duration-300 border rounded-md btn border-light dark:text-white dark:hover:text-black hover:bg-light hover:text-black">Sign
                                                In</a>
                                        </div>
                                        <p class="text-center text-muted dark:text-white">&copy;2023 Slack Technologies,
                                            LLC, a Salesforce company.</p>
                                    </div>
                                    <div
                                        class="flex justify-end gap-4 px-4 py-2 border-t bg-light/20 border-black/10 dark:border-darkborder dark:bg-white/5">
                                        <a href="javaScript:;"
                                            class="btn bg-light border border-light rounded-md text-black transition-all duration-300 hover:bg-light/[0.85] hover:border-light/[0.85] flex items-center gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="w-5 h-5">
                                                <path fill="currentColor"
                                                    d="M5.82843 6.99955L8.36396 9.53509L6.94975 10.9493L2 5.99955L6.94975 1.0498L8.36396 2.46402L5.82843 4.99955H13C17.4183 4.99955 21 8.58127 21 12.9996C21 17.4178 17.4183 20.9996 13 20.9996H4V18.9996H13C16.3137 18.9996 19 16.3133 19 12.9996C19 9.68584 16.3137 6.99955 13 6.99955H5.82843Z">
                                                </path>
                                            </svg>
                                            <span>Reply</span>
                                        </a>
                                        <a href="javaScript:;"
                                            class="btn bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85] flex items-center gap-2">
                                            <span>Forward</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="w-5 h-5">
                                                <path fill="currentColor"
                                                    d="M18.1716 6.99955H11C7.68629 6.99955 5 9.68584 5 12.9996C5 16.3133 7.68629 18.9996 11 18.9996H20V20.9996H11C6.58172 20.9996 3 17.4178 3 12.9996C3 8.58127 6.58172 4.99955 11 4.99955H18.1716L15.636 2.46402L17.0503 1.0498L22 5.99955L17.0503 10.9493L15.636 9.53509L18.1716 6.99955Z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
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
        <!-- Form Editor Js -->
        <script src="{{ URL::asset('build/js/form-editor.js') }}"></script>
    @endsection