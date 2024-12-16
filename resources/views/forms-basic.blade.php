    @extends('layouts.master')
    @section('title')
        Forms Input
    @endsection
    @section('css')
        <!-- Icon Css -->
        <link rel="stylesheet" href="{{ URL::asset('build/css/remixicon.css') }}" />
    @endsection
    @section('content')
        <x-breadcrumb title="Forms Input" pagetitle="Forms" />

        <!-- Start All Card -->
        <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                    <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Basic Input Text</h2>
                    <form class="space-y-4">
                        <input type="text" class="form-input" placeholder="Username" required>
                        <input type="button"
                            class="btn bg-purple border border-purple rounded text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]"
                            value="Submit">
                    </form>
                </div>
                <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                    <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Email Text</h2>
                    <form class="space-y-4">
                        <input type="email" class="form-input" placeholder="Email Type" required>
                        <input type="button"
                            class="btn bg-purple border border-purple rounded text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]"
                            value="Submit">
                    </form>
                </div>
                <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                    <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Lable Text</h2>
                    <form class="space-y-4">
                        <div class="space-y-2">
                            <label>Type Username:</label>
                            <input type="text" class="form-input" placeholder="Username" required>
                        </div>
                        <input type="button"
                            class="btn bg-purple border border-purple rounded text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]"
                            value="Submit">
                    </form>
                </div>
                <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                    <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Password Input</h2>
                    <form class="space-y-4">
                        <input type="password" class="form-input" placeholder="Type Password" required>
                        <input type="button"
                            class="btn bg-purple border border-purple rounded text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]"
                            value="Submit">
                    </form>
                </div>
                <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                    <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Url Input</h2>
                    <form class="space-y-4">
                        <input type="url" class="form-input" placeholder="https://dummyurl.com" required>
                        <input type="button"
                            class="btn bg-purple border border-purple rounded text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]"
                            value="Submit">
                    </form>
                </div>
                <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                    <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Search Input</h2>
                    <form class="space-y-4">
                        <input type="search" class="form-input" placeholder="Search..." required>
                        <input type="button"
                            class="btn bg-purple border border-purple rounded text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]"
                            value="Submit">
                    </form>
                </div>
                <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                    <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Telephone Input</h2>
                    <form class="space-y-4">
                        <input type="tel" class="form-input" placeholder="0-(000)-111-1111" required>
                        <input type="button"
                            class="btn bg-purple border border-purple rounded text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]"
                            value="Submit">
                    </form>
                </div>
                <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                    <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Rounded Input</h2>
                    <form class="space-y-4">
                        <input type="text" class="rounded-full form-input" placeholder="Type Username" required>
                        <input type="button"
                            class="btn bg-purple border border-purple rounded-full text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]"
                            value="Submit">
                    </form>
                </div>
                <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                    <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Fields Size</h2>
                    <form class="space-y-4">
                        <div class="space-y-2">
                            <label>Large Input</label>
                            <input type="text" class="form-input h-14" placeholder="Username" required>
                        </div>
                        <div class="space-y-2">
                            <label>Default Input</label>
                            <input type="text" class="form-input" placeholder="Username" required>
                        </div>
                        <div class="space-y-2">
                            <label>Small Input</label>
                            <input type="text" class="h-10 form-input" placeholder="Username" required>
                        </div>
                    </form>
                </div>
                <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                    <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Fields Size</h2>
                    <form class="space-y-4">
                        <div class="items-center justify-between gap-4 space-y-2 sm:flex">
                            <label class="w-24 shrink-0">Large Input</label>
                            <input type="text" class="form-input h-14" placeholder="Username" required>
                        </div>
                        <div class="items-center justify-between gap-4 space-y-2 sm:flex">
                            <label class="w-24 shrink-0">Default Input</label>
                            <input type="text" class="form-input" placeholder="Username" required>
                        </div>
                        <div class="items-center justify-between gap-4 space-y-2 sm:flex">
                            <label class="w-24 shrink-0">Small Input</label>
                            <input type="text" class="h-10 form-input" placeholder="Username" required>
                        </div>
                    </form>
                </div>
                <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                    <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Select Menu</h2>
                    <form>
                        <select class="form-select">
                            <option>Select Option</option>
                            <option>One</option>
                            <option>Two</option>
                            <option>Three</option>
                        </select>
                    </form>
                </div>
                <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                    <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Select Menu</h2>
                    <form>
                        <select size="4" multiple="multiple" class="h-auto form-multiselect">
                            <option>Select menu</option>
                            <option>One</option>
                            <option>Two</option>
                            <option>Three</option>
                            <option>Four</option>
                            <option>Five</option>
                            <option>Six</option>
                        </select>
                    </form>
                </div>
                <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                    <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Checkbox</h2>
                    <form class="space-y-4">
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" class="form-checkbox" checked="checked">
                            <span>Checkbox</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" class="form-checkbox" checked="checked">
                            <span>Checkbox</span>
                        </label>
                    </form>
                </div>
                <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                    <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Radio</h2>
                    <form class="space-y-4">
                        <label class="flex items-center cursor-pointer">
                            <input type="radio" name="radio-one" class="rounded-full form-radio" checked="checked">
                            <span>One</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="radio" name="radio-one" class="rounded-full form-radio">
                            <span>Two</span>
                        </label>
                    </form>
                </div>
                <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                    <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">disabled Radio &
                        Checkbox</h2>
                    <form class="space-y-4">
                        <label class="flex items-center cursor-pointer">
                            <input type="radio" name="radio-one" disabled class="rounded-full form-radio"
                                checked="checked">
                            <span>One</span>
                        </label>
                        <label class="flex items-center cursor-pointer">
                            <input type="checkbox" class="form-checkbox" disabled checked="checked">
                            <span>Checkbox</span>
                        </label>
                    </form>
                </div>
                <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                    <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">disabled Input</h2>
                    <form class="space-y-4">
                        <input type="text" class="cursor-not-allowed form-input" placeholder="Username"
                            required="" disabled>
                    </form>
                </div>
            </div>
        </div>
        <!-- End All Card -->
    @endsection
