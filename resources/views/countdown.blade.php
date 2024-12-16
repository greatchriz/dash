@extends('layouts.master')
@section('title')
    Countdown
@endsection
@section('content')
    <x-breadcrumb title="Countdown" pagetitle="Components" />

    <!-- Start All Card -->
    <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
        <div class="grid grid-cols-1 gap-4">
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Countdown</h2>
                <div>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-4" x-data="timer(new Date().setDate(new Date().getDate() + 1))"
                        x-init="init();">
                        <div class="text-center">
                            <div class="bg-[#f9fbfd] dark:bg-white/5 h-16 w-16 mx-auto flex items-center rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    class="w-8 h-8 mx-auto text-black dark:text-white">
                                    <path fill="currentColor"
                                        d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 11H4V19H20V11ZM7 5H4V9H20V5H17V7H15V5H9V7H7V5Z">
                                    </path>
                                </svg>
                            </div>
                            <div class="mt-5">
                                <span x-text="time().days"
                                    class="text-5xl font-semibold text-dark dark:text-white">00</span>
                                <p class="mt-1 text-muted dark:text-darkmuted">Days</p>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="bg-[#f9fbfd] dark:bg-white/5 h-16 w-16 mx-auto flex items-center rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    class="w-8 h-8 mx-auto text-black dark:text-white">
                                    <path fill="currentColor"
                                        d="M17.6177 5.9681L19.0711 4.51472L20.4853 5.92893L19.0319 7.38231C20.2635 8.92199 21 10.875 21 13C21 17.9706 16.9706 22 12 22C7.02944 22 3 17.9706 3 13C3 8.02944 7.02944 4 12 4C14.125 4 16.078 4.73647 17.6177 5.9681ZM12 20C15.866 20 19 16.866 19 13C19 9.13401 15.866 6 12 6C8.13401 6 5 9.13401 5 13C5 16.866 8.13401 20 12 20ZM11 8H13V14H11V8ZM8 1H16V3H8V1Z">
                                    </path>
                                </svg>
                            </div>
                            <div class="mt-5">
                                <span x-text="time().hours"
                                    class="text-5xl font-semibold text-dark dark:text-white">00</span>
                                <p class="mt-1 text-muted dark:text-darkmuted">Hours</p>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="bg-[#f9fbfd] dark:bg-white/5 h-16 w-16 mx-auto flex items-center rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    class="w-8 h-8 mx-auto text-black dark:text-white">
                                    <path fill="currentColor"
                                        d="M12 2C17.52 2 22 6.48 22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2ZM12 20C16.42 20 20 16.42 20 12C20 7.58 16.42 4 12 4C7.58 4 4 7.58 4 12C4 16.42 7.58 20 12 20ZM15.5355 7.05025L16.9497 8.46447L12 13.4142L10.5858 12L15.5355 7.05025Z">
                                    </path>
                                </svg>
                            </div>
                            <div class="mt-5">
                                <span x-text="time().minutes"
                                    class="text-5xl font-semibold text-dark dark:text-white">00</span>
                                <p class="mt-1 text-muted dark:text-darkmuted">Minutes</p>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="bg-[#f9fbfd] dark:bg-white/5 h-16 w-16 mx-auto flex items-center rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    class="w-8 h-8 mx-auto text-black dark:text-white">
                                    <path fill="currentColor"
                                        d="M6.38231 5.9681C7.92199 4.73647 9.87499 4 12 4C14.125 4 16.078 4.73647 17.6177 5.9681L19.0711 4.51472L20.4853 5.92893L19.0319 7.38231C20.2635 8.92199 21 10.875 21 13C21 17.9706 16.9706 22 12 22C7.02944 22 3 17.9706 3 13C3 10.875 3.73647 8.92199 4.9681 7.38231L3.51472 5.92893L4.92893 4.51472L6.38231 5.9681ZM12 20C15.866 20 19 16.866 19 13C19 9.13401 15.866 6 12 6C8.13401 6 5 9.13401 5 13C5 16.866 8.13401 20 12 20ZM13 12H16L11 18.5V14H8L13 7.4952V12ZM8 1H16V3H8V1Z">
                                    </path>
                                </svg>
                            </div>
                            <div class="mt-5">
                                <span x-text="time().seconds"
                                    class="text-5xl font-semibold text-dark dark:text-white">00</span>
                                <p class="mt-1 text-muted dark:text-darkmuted">Seconds</p>
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
    <script>
        function timer(expiry) {
            return {
                expiry: expiry,
                remaining: null,
                init() {
                    this.setRemaining()
                    setInterval(() => {
                        this.setRemaining();
                    }, 1000);
                },
                setRemaining() {
                    const diff = this.expiry - new Date().getTime();
                    this.remaining = parseInt(diff / 1000);
                },
                days() {
                    return {
                        value: this.remaining / 86400,
                        remaining: this.remaining % 86400
                    };
                },
                hours() {
                    return {
                        value: this.days().remaining / 3600,
                        remaining: this.days().remaining % 3600
                    };
                },
                minutes() {
                    return {
                        value: this.hours().remaining / 60,
                        remaining: this.hours().remaining % 60
                    };
                },
                seconds() {
                    return {
                        value: this.minutes().remaining,
                    };
                },
                format(value) {
                    return ("1" + parseInt(value)).slice(-2)
                },
                time() {
                    return {
                        days: this.format(this.days().value),
                        hours: this.format(this.hours().value),
                        minutes: this.format(this.minutes().value),
                        seconds: this.format(this.seconds().value),
                    }
                },
            }
        }
    </script>
@endsection
