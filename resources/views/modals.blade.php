@extends('layouts.master')
@section('title')
Modals
@endsection
@section('content')
    <x-breadcrumb title="Modals" pagetitle="Components" />

    <!-- Start All Card -->
    <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Basic Modal</h2>
                <div x-data="modals">
                    <div class="flex items-center justify-center">
                        <button type="button"
                            class="btn bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]"
                            @click="toggle">Launch modal</button>
                    </div>
                    <div class="fixed inset-0 bg-black/80 z-[99999] hidden overflow-y-auto dark:bg-dark/90"
                        :class="open && '!block'">
                        <div class="flex items-start justify-center min-h-screen px-4" @click.self="open = false">
                            <div x-show="open" x-transition x-transition.duration.300
                                class="relative w-full max-w-lg p-0 my-8 overflow-hidden bg-white border rounded-lg border-black/10 dark:bg-darklight dark:border-darkborder">
                                <div
                                    class="flex items-center justify-between px-5 py-3 bg-white border-b border-black/10 dark:bg-darklight dark:border-darkborder">
                                    <h5 class="text-lg font-semibold dark:text-white">Basic Modal</h5>
                                    <button type="button" class="text-muted hover:text-black dark:hover:text-white"
                                        @click="toggle">
                                        <svg class="w-5 h-5" width="32" height="32" viewBox="0 0 32 32"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M24.2929 6.29289L6.29289 24.2929C6.10536 24.4804 6 24.7348 6 25C6 25.2652 6.10536 25.5196 6.29289 25.7071C6.48043 25.8946 6.73478 26 7 26C7.26522 26 7.51957 25.8946 7.70711 25.7071L25.7071 7.70711C25.8946 7.51957 26 7.26522 26 7C26 6.73478 25.8946 6.48043 25.7071 6.29289C25.5196 6.10536 25.2652 6 25 6C24.7348 6 24.4804 6.10536 24.2929 6.29289Z"
                                                fill="currentcolor" />
                                            <path
                                                d="M7.70711 6.29289C7.51957 6.10536 7.26522 6 7 6C6.73478 6 6.48043 6.10536 6.29289 6.29289C6.10536 6.48043 6 6.73478 6 7C6 7.26522 6.10536 7.51957 6.29289 7.70711L24.2929 25.7071C24.4804 25.8946 24.7348 26 25 26C25.2652 26 25.5196 25.8946 25.7071 25.7071C25.8946 25.5196 26 25.2652 26 25C26 24.7348 25.8946 24.4804 25.7071 24.2929L7.70711 6.29289Z"
                                                fill="currentcolor" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="p-5 space-y-4">
                                    <div class="text-black dark:text-muted">
                                        <p>Lorem Ipsum is simply and typesetting industry. Lorem Ipsum has been the
                                            industry's standard dummy text ever since the 1500s, when an unknown printer
                                            took a galley of type and scrambled it to make a type specimen book. It has
                                            survived not only five centuries, but also the leap into electronic typesetting,
                                            remaining essentially unchanged.</p>
                                    </div>
                                    <div class="flex items-center justify-end gap-4">
                                        <button type="button"
                                            class="transition-all duration-300 border rounded-md btn text-danger border-danger hover:bg-danger hover:text-white"
                                            @click="toggle">Discard</button>
                                        <button type="button"
                                            class="transition-all duration-300 border rounded-md btn text-purple border-purple hover:bg-purple hover:text-white">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Vertically Centered</h2>
                <div x-data="modals">
                    <div class="flex items-center justify-center">
                        <button type="button"
                            class="text-black transition-all duration-300 border rounded-md btn border-light hover:bg-light hover:text-black dark:text-white dark:hover:text-black"
                            @click="toggle">Launch modal</button>
                    </div>
                    <div class="fixed inset-0 bg-black/80 z-[99999] hidden overflow-y-auto dark:bg-dark/90"
                        :class="open && '!block'">
                        <div class="flex items-center justify-center min-h-screen px-4" @click.self="open = false">
                            <div x-show="open" x-transition x-transition.duration.300
                                class="relative w-full max-w-lg p-0 my-8 overflow-hidden bg-white border rounded-lg border-black/10 dark:bg-darklight dark:border-darkborder">
                                <div
                                    class="flex items-center justify-between px-5 py-3 bg-white border-b border-black/10 dark:bg-darklight dark:border-darkborder">
                                    <h5 class="text-lg font-semibold dark:text-white">Vertically Centered</h5>
                                    <button type="button" class="text-muted hover:text-black dark:hover:text-white"
                                        @click="toggle">
                                        <svg class="w-5 h-5" width="32" height="32" viewBox="0 0 32 32"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M24.2929 6.29289L6.29289 24.2929C6.10536 24.4804 6 24.7348 6 25C6 25.2652 6.10536 25.5196 6.29289 25.7071C6.48043 25.8946 6.73478 26 7 26C7.26522 26 7.51957 25.8946 7.70711 25.7071L25.7071 7.70711C25.8946 7.51957 26 7.26522 26 7C26 6.73478 25.8946 6.48043 25.7071 6.29289C25.5196 6.10536 25.2652 6 25 6C24.7348 6 24.4804 6.10536 24.2929 6.29289Z"
                                                fill="currentcolor" />
                                            <path
                                                d="M7.70711 6.29289C7.51957 6.10536 7.26522 6 7 6C6.73478 6 6.48043 6.10536 6.29289 6.29289C6.10536 6.48043 6 6.73478 6 7C6 7.26522 6.10536 7.51957 6.29289 7.70711L24.2929 25.7071C24.4804 25.8946 24.7348 26 25 26C25.2652 26 25.5196 25.8946 25.7071 25.7071C25.8946 25.5196 26 25.2652 26 25C26 24.7348 25.8946 24.4804 25.7071 24.2929L7.70711 6.29289Z"
                                                fill="currentcolor" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="p-5 space-y-4">
                                    <div class="text-black dark:text-muted">
                                        <p>Lorem Ipsum is simply typesetting industry. Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s, when an unknown printer took a galley
                                            of type and scrambled it to make a type specimen book. It has survived not only
                                            five centuries, but also the leap into electronic typesetting, remaining
                                            essentially unchanged.</p>
                                    </div>
                                    <div class="flex items-center justify-end gap-4">
                                        <button type="button"
                                            class="transition-all duration-300 border rounded-md btn text-danger border-danger hover:bg-danger hover:text-white"
                                            @click="toggle">Discard</button>
                                        <button type="button"
                                            class="transition-all duration-300 border rounded-md btn text-purple border-purple hover:bg-purple hover:text-white">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Vertically Bottom</h2>
                <div x-data="modals">
                    <div class="flex items-center justify-center">
                        <button type="button"
                            class="text-black transition-all duration-300 border rounded-md btn border-light hover:bg-light hover:text-black dark:text-white dark:hover:text-black"
                            @click="toggle">Launch modal</button>
                    </div>
                    <div class="fixed inset-0 bg-black/80 z-[99999] hidden overflow-y-auto dark:bg-dark/90"
                        :class="open && '!block'">
                        <div class="flex items-end justify-center min-h-screen px-4" @click.self="open = false">
                            <div x-show="open" x-transition x-transition.duration.300
                                class="relative w-full max-w-lg p-0 my-8 overflow-hidden bg-white border rounded-lg border-black/10 dark:bg-darklight dark:border-darkborder">
                                <div
                                    class="flex items-center justify-between px-5 py-3 bg-white border-b border-black/10 dark:bg-darklight dark:border-darkborder">
                                    <h5 class="text-lg font-semibold dark:text-white">Vertically Centered</h5>
                                    <button type="button" class="text-muted hover:text-black dark:hover:text-white"
                                        @click="toggle">
                                        <svg class="w-5 h-5" width="32" height="32" viewBox="0 0 32 32"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M24.2929 6.29289L6.29289 24.2929C6.10536 24.4804 6 24.7348 6 25C6 25.2652 6.10536 25.5196 6.29289 25.7071C6.48043 25.8946 6.73478 26 7 26C7.26522 26 7.51957 25.8946 7.70711 25.7071L25.7071 7.70711C25.8946 7.51957 26 7.26522 26 7C26 6.73478 25.8946 6.48043 25.7071 6.29289C25.5196 6.10536 25.2652 6 25 6C24.7348 6 24.4804 6.10536 24.2929 6.29289Z"
                                                fill="currentcolor" />
                                            <path
                                                d="M7.70711 6.29289C7.51957 6.10536 7.26522 6 7 6C6.73478 6 6.48043 6.10536 6.29289 6.29289C6.10536 6.48043 6 6.73478 6 7C6 7.26522 6.10536 7.51957 6.29289 7.70711L24.2929 25.7071C24.4804 25.8946 24.7348 26 25 26C25.2652 26 25.5196 25.8946 25.7071 25.7071C25.8946 25.5196 26 25.2652 26 25C26 24.7348 25.8946 24.4804 25.7071 24.2929L7.70711 6.29289Z"
                                                fill="currentcolor" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="p-5 space-y-4">
                                    <div class="text-black dark:text-muted">
                                        <p>Lorem Ipsum is simply typesetting industry. Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s, when an unknown printer took a galley
                                            of type and scrambled it to make a type specimen book. It has survived not only
                                            five centuries, but also the leap into electronic typesetting, remaining
                                            essentially unchanged.</p>
                                    </div>
                                    <div class="flex items-center justify-end gap-4">
                                        <button type="button"
                                            class="transition-all duration-300 border rounded-md btn text-danger border-danger hover:bg-danger hover:text-white"
                                            @click="toggle">Discard</button>
                                        <button type="button"
                                            class="transition-all duration-300 border rounded-md btn text-purple border-purple hover:bg-purple hover:text-white">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Static Modal</h2>
                <div x-data="modals">
                    <div class="flex items-center justify-center">
                        <button type="button"
                            class="btn bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]"
                            @click="toggle">Launch modal</button>
                    </div>
                    <div class="fixed inset-0 bg-black/80 z-[99999] hidden overflow-y-auto dark:bg-dark/90"
                        :class="open && '!block'">
                        <div class="flex items-start justify-center min-h-screen px-4">
                            <div x-show="open" x-transition x-transition.duration.300
                                class="relative w-full max-w-lg p-0 my-8 overflow-hidden bg-white border rounded-lg shadow-3xl border-black/10 dark:bg-darklight dark:border-darkborder">
                                <div
                                    class="flex items-center justify-between px-5 py-3 bg-white border-b border-black/10 dark:bg-darklight dark:border-darkborder">
                                    <h5 class="text-lg font-semibold dark:text-white">Static Modal</h5>
                                    <button type="button" class="text-muted hover:text-black dark:hover:text-white"
                                        @click="toggle">
                                        <svg class="w-5 h-5" width="32" height="32" viewBox="0 0 32 32"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M24.2929 6.29289L6.29289 24.2929C6.10536 24.4804 6 24.7348 6 25C6 25.2652 6.10536 25.5196 6.29289 25.7071C6.48043 25.8946 6.73478 26 7 26C7.26522 26 7.51957 25.8946 7.70711 25.7071L25.7071 7.70711C25.8946 7.51957 26 7.26522 26 7C26 6.73478 25.8946 6.48043 25.7071 6.29289C25.5196 6.10536 25.2652 6 25 6C24.7348 6 24.4804 6.10536 24.2929 6.29289Z"
                                                fill="currentcolor" />
                                            <path
                                                d="M7.70711 6.29289C7.51957 6.10536 7.26522 6 7 6C6.73478 6 6.48043 6.10536 6.29289 6.29289C6.10536 6.48043 6 6.73478 6 7C6 7.26522 6.10536 7.51957 6.29289 7.70711L24.2929 25.7071C24.4804 25.8946 24.7348 26 25 26C25.2652 26 25.5196 25.8946 25.7071 25.7071C25.8946 25.5196 26 25.2652 26 25C26 24.7348 25.8946 24.4804 25.7071 24.2929L7.70711 6.29289Z"
                                                fill="currentcolor" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="p-5 space-y-4">
                                    <div class="text-black dark:text-muted">
                                        <p>Lorem Ipsum is simply dummy text of the industry. Lorem Ipsum has been the
                                            industry's standard dummy text ever since the 1500s, when an unknown printer
                                            took a galley of type and scrambled it to make a type specimen book. It has
                                            survived not only five centuries, but also the leap into electronic typesetting,
                                            remaining essentially unchanged.</p>
                                    </div>
                                    <div class="flex items-center justify-end gap-4">
                                        <button type="button"
                                            class="transition-all duration-300 border rounded-md btn text-danger border-danger hover:bg-danger hover:text-white"
                                            @click="toggle">Discard</button>
                                        <button type="button"
                                            class="transition-all duration-300 border rounded-md btn text-purple border-purple hover:bg-purple hover:text-white">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Removed Animation</h2>
                <div x-data="modals">
                    <div class="flex items-center justify-center">
                        <button type="button"
                            class="btn bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]"
                            @click="toggle">Launch modal</button>
                    </div>
                    <div class="fixed inset-0 bg-black/80 z-[99999] hidden overflow-y-auto dark:bg-dark/90"
                        :class="open && '!block'">
                        <div class="flex items-start justify-center min-h-screen px-4" @click.self="open = false">
                            <div x-show="open"
                                class="relative w-full max-w-lg p-0 my-8 overflow-hidden bg-white border rounded-lg border-black/10 dark:bg-darklight dark:border-darkborder">
                                <div
                                    class="flex items-center justify-between px-5 py-3 bg-white border-b border-black/10 dark:bg-darklight dark:border-darkborder">
                                    <h5 class="text-lg font-semibold dark:text-white">Vertically Centered</h5>
                                    <button type="button" class="text-muted hover:text-black dark:hover:text-white"
                                        @click="toggle">
                                        <svg class="w-5 h-5" width="32" height="32" viewBox="0 0 32 32"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M24.2929 6.29289L6.29289 24.2929C6.10536 24.4804 6 24.7348 6 25C6 25.2652 6.10536 25.5196 6.29289 25.7071C6.48043 25.8946 6.73478 26 7 26C7.26522 26 7.51957 25.8946 7.70711 25.7071L25.7071 7.70711C25.8946 7.51957 26 7.26522 26 7C26 6.73478 25.8946 6.48043 25.7071 6.29289C25.5196 6.10536 25.2652 6 25 6C24.7348 6 24.4804 6.10536 24.2929 6.29289Z"
                                                fill="currentcolor" />
                                            <path
                                                d="M7.70711 6.29289C7.51957 6.10536 7.26522 6 7 6C6.73478 6 6.48043 6.10536 6.29289 6.29289C6.10536 6.48043 6 6.73478 6 7C6 7.26522 6.10536 7.51957 6.29289 7.70711L24.2929 25.7071C24.4804 25.8946 24.7348 26 25 26C25.2652 26 25.5196 25.8946 25.7071 25.7071C25.8946 25.5196 26 25.2652 26 25C26 24.7348 25.8946 24.4804 25.7071 24.2929L7.70711 6.29289Z"
                                                fill="currentcolor" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="p-5 space-y-4">
                                    <div class="text-black dark:text-muted">
                                        <p>Lorem Ipsum is simply typesetting industry. Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s, when an unknown printer took a galley
                                            of type and scrambled it to make a type specimen book. It has survived not only
                                            five centuries, but also the leap into electronic typesetting, remaining
                                            essentially unchanged.</p>
                                    </div>
                                    <div class="flex items-center justify-end gap-4">
                                        <button type="button"
                                            class="transition-all duration-300 border rounded-md btn text-danger border-danger hover:bg-danger hover:text-white"
                                            @click="toggle">Discard</button>
                                        <button type="button"
                                            class="transition-all duration-300 border rounded-md btn text-purple border-purple hover:bg-purple hover:text-white">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Scorllable Modal</h2>
                <div x-data="modals">
                    <div class="flex items-center justify-center">
                        <button type="button"
                            class="text-black transition-all duration-300 border rounded-md btn border-light hover:bg-light hover:text-black dark:text-white dark:hover:text-black"
                            @click="toggle">Launch modal</button>
                    </div>
                    <div class="fixed inset-0 bg-black/80 z-[99999] hidden overflow-y-auto dark:bg-dark/90"
                        :class="open && '!block'">
                        <div class="flex items-start justify-center min-h-screen px-4" @click.self="open = false">
                            <div x-show="open" x-transition x-transition.duration.300
                                class="relative w-full max-w-lg p-0 my-8 overflow-hidden bg-white border rounded-lg shadow-3xl border-black/10 dark:bg-darklight dark:border-darkborder">
                                <div
                                    class="flex items-center justify-between px-5 py-3 bg-white border-b border-black/10 dark:bg-darklight dark:border-darkborder">
                                    <h5 class="text-lg font-semibold dark:text-white">Scorllable Modal</h5>
                                    <button type="button" class="text-muted hover:text-black dark:hover:text-white"
                                        @click="toggle">
                                        <svg class="w-5 h-5" width="32" height="32" viewBox="0 0 32 32"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M24.2929 6.29289L6.29289 24.2929C6.10536 24.4804 6 24.7348 6 25C6 25.2652 6.10536 25.5196 6.29289 25.7071C6.48043 25.8946 6.73478 26 7 26C7.26522 26 7.51957 25.8946 7.70711 25.7071L25.7071 7.70711C25.8946 7.51957 26 7.26522 26 7C26 6.73478 25.8946 6.48043 25.7071 6.29289C25.5196 6.10536 25.2652 6 25 6C24.7348 6 24.4804 6.10536 24.2929 6.29289Z"
                                                fill="currentcolor" />
                                            <path
                                                d="M7.70711 6.29289C7.51957 6.10536 7.26522 6 7 6C6.73478 6 6.48043 6.10536 6.29289 6.29289C6.10536 6.48043 6 6.73478 6 7C6 7.26522 6.10536 7.51957 6.29289 7.70711L24.2929 25.7071C24.4804 25.8946 24.7348 26 25 26C25.2652 26 25.5196 25.8946 25.7071 25.7071C25.8946 25.5196 26 25.2652 26 25C26 24.7348 25.8946 24.4804 25.7071 24.2929L7.70711 6.29289Z"
                                                fill="currentcolor" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="p-5 space-y-4">
                                    <div class="h-48 min-h-full overflow-y-auto text-black dark:text-muted">
                                        <p>Lorem Ipsum is simply dummy text of the industry.</p>
                                        </br>
                                        </br>
                                        </br>
                                        </br>
                                        </br>
                                        </br>
                                        </br>
                                        </br>
                                        <p>Lorem Ipsum is simply dummy text of the industry.</p>
                                        </br>
                                        </br>
                                        </br>
                                        </br>
                                        </br>
                                        </br>
                                        </br>
                                        </br>
                                        <p>Lorem Ipsum is simply dummy text of the industry.</p>
                                    </div>
                                    <div class="flex items-center justify-end gap-4">
                                        <button type="button"
                                            class="transition-all duration-300 border rounded-md btn text-danger border-danger hover:bg-danger hover:text-white"
                                            @click="toggle">Discard</button>
                                        <button type="button"
                                            class="transition-all duration-300 border rounded-md btn text-purple border-purple hover:bg-purple hover:text-white">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Modal Sizes</h2>
                <div class="flex flex-wrap justify-center gap-4">
                    <div x-data="modals">
                        <div class="flex items-center justify-center">
                            <button type="button"
                                class="text-black transition-all duration-300 border rounded-md btn border-light hover:bg-light hover:text-black dark:text-white dark:hover:text-black"
                                @click="toggle">Small modal</button>
                        </div>
                        <div class="fixed inset-0 bg-black/80 z-[99999] hidden overflow-y-auto dark:bg-dark/90"
                            :class="open && '!block'">
                            <div class="flex items-start justify-center min-h-screen px-4" @click.self="open = false">
                                <div x-show="open" x-transition x-transition.duration.300
                                    class="relative w-full max-w-sm p-0 my-8 overflow-hidden bg-white border rounded-lg shadow-3xl border-black/10 dark:bg-darklight dark:border-darkborder">
                                    <div
                                        class="flex items-center justify-between px-5 py-3 bg-white border-b border-black/10 dark:bg-darklight dark:border-darkborder">
                                        <h5 class="text-lg font-semibold dark:text-white">Small Modal</h5>
                                        <button type="button" class="text-muted hover:text-black dark:hover:text-white"
                                            @click="toggle">
                                            <svg class="w-5 h-5" width="32" height="32" viewBox="0 0 32 32"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M24.2929 6.29289L6.29289 24.2929C6.10536 24.4804 6 24.7348 6 25C6 25.2652 6.10536 25.5196 6.29289 25.7071C6.48043 25.8946 6.73478 26 7 26C7.26522 26 7.51957 25.8946 7.70711 25.7071L25.7071 7.70711C25.8946 7.51957 26 7.26522 26 7C26 6.73478 25.8946 6.48043 25.7071 6.29289C25.5196 6.10536 25.2652 6 25 6C24.7348 6 24.4804 6.10536 24.2929 6.29289Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M7.70711 6.29289C7.51957 6.10536 7.26522 6 7 6C6.73478 6 6.48043 6.10536 6.29289 6.29289C6.10536 6.48043 6 6.73478 6 7C6 7.26522 6.10536 7.51957 6.29289 7.70711L24.2929 25.7071C24.4804 25.8946 24.7348 26 25 26C25.2652 26 25.5196 25.8946 25.7071 25.7071C25.8946 25.5196 26 25.2652 26 25C26 24.7348 25.8946 24.4804 25.7071 24.2929L7.70711 6.29289Z"
                                                    fill="currentcolor" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="p-5 space-y-4">
                                        <div class="text-black dark:text-muted">
                                            <p>Lorem Ipsum is simply typesetting industry. Lorem Ipsum has been the
                                                industry's standard dummy text ever since the 1500s, when an unknown printer
                                                took a galley of type and scrambled it to make a type specimen book. It has
                                                survived not only five centuries, but also the leap into electronic
                                                typesetting, remaining essentially unchanged.</p>
                                        </div>
                                        <div class="flex items-center justify-end gap-4">
                                            <button type="button"
                                                class="transition-all duration-300 border rounded-md btn text-danger border-danger hover:bg-danger hover:text-white"
                                                @click="toggle">Discard</button>
                                            <button type="button"
                                                class="transition-all duration-300 border rounded-md btn text-purple border-purple hover:bg-purple hover:text-white">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div x-data="modals">
                        <div class="flex items-center justify-center">
                            <button type="button"
                                class="text-black transition-all duration-300 border rounded-md btn border-light hover:bg-light hover:text-black dark:text-white dark:hover:text-black"
                                @click="toggle">Large modal</button>
                        </div>
                        <div class="fixed inset-0 bg-black/80 z-[99999] hidden overflow-y-auto dark:bg-dark/90"
                            :class="open && '!block'">
                            <div class="flex items-start justify-center min-h-screen px-4" @click.self="open = false">
                                <div x-show="open" x-transition x-transition.duration.300
                                    class="relative w-full max-w-xl p-0 my-8 overflow-hidden bg-white border rounded-lg shadow-3xl border-black/10 dark:bg-darklight dark:border-darkborder">
                                    <div
                                        class="flex items-center justify-between px-5 py-3 bg-white border-b border-black/10 dark:bg-darklight dark:border-darkborder">
                                        <h5 class="text-lg font-semibold dark:text-white">Large Modal</h5>
                                        <button type="button" class="text-muted hover:text-black dark:hover:text-white"
                                            @click="toggle">
                                            <svg class="w-5 h-5" width="32" height="32" viewBox="0 0 32 32"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M24.2929 6.29289L6.29289 24.2929C6.10536 24.4804 6 24.7348 6 25C6 25.2652 6.10536 25.5196 6.29289 25.7071C6.48043 25.8946 6.73478 26 7 26C7.26522 26 7.51957 25.8946 7.70711 25.7071L25.7071 7.70711C25.8946 7.51957 26 7.26522 26 7C26 6.73478 25.8946 6.48043 25.7071 6.29289C25.5196 6.10536 25.2652 6 25 6C24.7348 6 24.4804 6.10536 24.2929 6.29289Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M7.70711 6.29289C7.51957 6.10536 7.26522 6 7 6C6.73478 6 6.48043 6.10536 6.29289 6.29289C6.10536 6.48043 6 6.73478 6 7C6 7.26522 6.10536 7.51957 6.29289 7.70711L24.2929 25.7071C24.4804 25.8946 24.7348 26 25 26C25.2652 26 25.5196 25.8946 25.7071 25.7071C25.8946 25.5196 26 25.2652 26 25C26 24.7348 25.8946 24.4804 25.7071 24.2929L7.70711 6.29289Z"
                                                    fill="currentcolor" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="p-5 space-y-4">
                                        <div class="text-black dark:text-muted">
                                            <p>Lorem Ipsum is simply typesetting industry. Lorem Ipsum has been the
                                                industry's standard dummy text ever since the 1500s, when an unknown printer
                                                took a galley of type and scrambled it to make a type specimen book. It has
                                                survived not only five centuries, but also the leap into electronic
                                                typesetting, remaining essentially unchanged.</p>
                                        </div>
                                        <div class="flex items-center justify-end gap-4">
                                            <button type="button"
                                                class="transition-all duration-300 border rounded-md btn text-danger border-danger hover:bg-danger hover:text-white"
                                                @click="toggle">Discard</button>
                                            <button type="button"
                                                class="transition-all duration-300 border rounded-md btn text-purple border-purple hover:bg-purple hover:text-white">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div x-data="modals">
                        <div class="flex items-center justify-center">
                            <button type="button"
                                class="text-black transition-all duration-300 border rounded-md btn border-light hover:bg-light hover:text-black dark:text-white dark:hover:text-black"
                                @click="toggle">Extra Large modal</button>
                        </div>
                        <div class="fixed inset-0 bg-black/80 z-[99999] hidden overflow-y-auto dark:bg-dark/90"
                            :class="open && '!block'">
                            <div class="flex items-start justify-center min-h-screen px-4" @click.self="open = false">
                                <div x-show="open" x-transition x-transition.duration.300
                                    class="relative w-full max-w-5xl p-0 my-8 overflow-hidden bg-white border rounded-lg shadow-3xl border-black/10 dark:bg-darklight dark:border-darkborder">
                                    <div
                                        class="flex items-center justify-between px-5 py-3 bg-white border-b border-black/10 dark:bg-darklight dark:border-darkborder">
                                        <h5 class="text-lg font-semibold dark:text-white">Extra Large Modal</h5>
                                        <button type="button" class="text-muted hover:text-black dark:hover:text-white"
                                            @click="toggle">
                                            <svg class="w-5 h-5" width="32" height="32" viewBox="0 0 32 32"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M24.2929 6.29289L6.29289 24.2929C6.10536 24.4804 6 24.7348 6 25C6 25.2652 6.10536 25.5196 6.29289 25.7071C6.48043 25.8946 6.73478 26 7 26C7.26522 26 7.51957 25.8946 7.70711 25.7071L25.7071 7.70711C25.8946 7.51957 26 7.26522 26 7C26 6.73478 25.8946 6.48043 25.7071 6.29289C25.5196 6.10536 25.2652 6 25 6C24.7348 6 24.4804 6.10536 24.2929 6.29289Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M7.70711 6.29289C7.51957 6.10536 7.26522 6 7 6C6.73478 6 6.48043 6.10536 6.29289 6.29289C6.10536 6.48043 6 6.73478 6 7C6 7.26522 6.10536 7.51957 6.29289 7.70711L24.2929 25.7071C24.4804 25.8946 24.7348 26 25 26C25.2652 26 25.5196 25.8946 25.7071 25.7071C25.8946 25.5196 26 25.2652 26 25C26 24.7348 25.8946 24.4804 25.7071 24.2929L7.70711 6.29289Z"
                                                    fill="currentcolor" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="p-5 space-y-4">
                                        <div class="text-black dark:text-muted">
                                            <p>Lorem Ipsum is simply typesetting industry. Lorem Ipsum has been the
                                                industry's standard dummy text ever since the 1500s, when an unknown printer
                                                took a galley of type and scrambled it to make a type specimen book. It has
                                                survived not only five centuries, but also the leap into electronic
                                                typesetting, remaining essentially unchanged.</p>
                                        </div>
                                        <div class="flex items-center justify-end gap-4">
                                            <button type="button"
                                                class="transition-all duration-300 border rounded-md btn text-danger border-danger hover:bg-danger hover:text-white"
                                                @click="toggle">Discard</button>
                                            <button type="button"
                                                class="transition-all duration-300 border rounded-md btn text-purple border-purple hover:bg-purple hover:text-white">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Modal Fullscreen</h2>
                <div class="flex flex-wrap justify-center gap-4">
                    <div x-data="modals">
                        <div class="flex items-center justify-center">
                            <button type="button"
                                class="btn bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]"
                                @click="toggle">Full Screen modal</button>
                        </div>
                        <div class="fixed inset-0 bg-black/80 z-[99999] hidden overflow-y-auto dark:bg-dark/90"
                            :class="open && '!block'">
                            <div class="flex items-stretch justify-center min-h-screen" @click.self="open = false">
                                <div x-show="open" x-transition x-transition.duration.300
                                    class="relative w-full p-0 overflow-hidden bg-white border rounded-lg shadow-3xl border-black/10 dark:bg-darklight dark:border-darkborder">
                                    <div
                                        class="flex items-center justify-between px-5 py-3 bg-white border-b border-black/10 dark:bg-darklight dark:border-darkborder">
                                        <h5 class="text-lg font-semibold dark:text-white">Fullscreen Modal</h5>
                                        <button type="button" class="text-muted hover:text-black dark:hover:text-white"
                                            @click="toggle">
                                            <svg class="w-5 h-5" width="32" height="32" viewBox="0 0 32 32"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M24.2929 6.29289L6.29289 24.2929C6.10536 24.4804 6 24.7348 6 25C6 25.2652 6.10536 25.5196 6.29289 25.7071C6.48043 25.8946 6.73478 26 7 26C7.26522 26 7.51957 25.8946 7.70711 25.7071L25.7071 7.70711C25.8946 7.51957 26 7.26522 26 7C26 6.73478 25.8946 6.48043 25.7071 6.29289C25.5196 6.10536 25.2652 6 25 6C24.7348 6 24.4804 6.10536 24.2929 6.29289Z"
                                                    fill="currentcolor" />
                                                <path
                                                    d="M7.70711 6.29289C7.51957 6.10536 7.26522 6 7 6C6.73478 6 6.48043 6.10536 6.29289 6.29289C6.10536 6.48043 6 6.73478 6 7C6 7.26522 6.10536 7.51957 6.29289 7.70711L24.2929 25.7071C24.4804 25.8946 24.7348 26 25 26C25.2652 26 25.5196 25.8946 25.7071 25.7071C25.8946 25.5196 26 25.2652 26 25C26 24.7348 25.8946 24.4804 25.7071 24.2929L7.70711 6.29289Z"
                                                    fill="currentcolor" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="p-5 space-y-4 min-h-[calc(100vh-53px)] flex flex-col justify-between">
                                        <div class="text-black dark:text-muted">
                                            <p>Lorem Ipsum is simply typesetting industry. Lorem Ipsum has been the
                                                industry's standard dummy text ever since the 1500s, when an unknown printer
                                                took a galley of type and scrambled it to make a type specimen book. It has
                                                survived not only five centuries, but also the leap into electronic
                                                typesetting, remaining essentially unchanged.</p>
                                        </div>
                                        <div class="flex items-center justify-end gap-4">
                                            <button type="button"
                                                class="transition-all duration-300 border rounded-md btn text-danger border-danger hover:bg-danger hover:text-white"
                                                @click="toggle">Discard</button>
                                            <button type="button"
                                                class="transition-all duration-300 border rounded-md btn text-purple border-purple hover:bg-purple hover:text-white">Save</button>
                                        </div>
                                    </div>
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