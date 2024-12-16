@extends('layouts.master')
@section('title')
    Font Icons
@endsection
@section('css')
    <!-- Icon Css -->
    <link rel="stylesheet" href="{{ URL::asset('build/css/remixicon.css') }}" />
@endsection
@section('content')
    <x-breadcrumb title="Font Icons" pagetitle="Sliced" />

    <!-- Start All Card -->
    <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
        <div class="grid grid-cols-1 gap-4">
            <div class="p-5 bg-white border rounded border-black/10 dark:bg-darklight dark:border-darkborder">
                <h2 class="mb-4 text-base font-semibold text-black capitalize dark:text-white/80">Remix Icons</h2>
                <div class="flex flex-wrap gap-4">
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-24-hours-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-24-hours-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-4k-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-4k-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-a-b"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-account-box-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-account-box-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-account-circle-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-account-circle-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-account-pin-box-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-account-pin-box-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-account-pin-circle-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-account-pin-circle-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-add-box-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-add-box-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-add-circle-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-add-circle-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-add-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-add-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-admin-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-admin-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-advertisement-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-advertisement-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-airplay-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-airplay-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-alarm-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-alarm-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-alarm-warning-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-alarm-warning-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-album-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-album-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-alert-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-alert-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-aliens-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-aliens-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-align-bottom"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-align-center"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-align-justify"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-align-left"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-align-right"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-align-top"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-align-vertically"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-alipay-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-alipay-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-amazon-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-amazon-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-anchor-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-anchor-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-ancient-gate-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-ancient-gate-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-ancient-pavilion-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-ancient-pavilion-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-android-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-android-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-angularjs-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-angularjs-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-anticlockwise-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-anticlockwise-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-anticlockwise-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-anticlockwise-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-app-store-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-app-store-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-apple-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-apple-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-apps-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-apps-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-apps-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-apps-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-archive-drawer-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-archive-drawer-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-archive-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-archive-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-down-circle-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-down-circle-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-down-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-down-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-down-s-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-down-s-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-drop-down-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-drop-down-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-drop-left-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-drop-left-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-drop-right-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-drop-right-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-drop-up-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-drop-up-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-go-back-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-go-back-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-go-forward-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-go-forward-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-left-circle-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-left-circle-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-left-down-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-left-down-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-left-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-left-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-left-right-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-left-right-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-left-s-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-left-s-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-left-up-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-left-up-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-right-circle-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-right-circle-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-right-down-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-right-down-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-right-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-right-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-right-s-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-right-s-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-right-up-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-right-up-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-up-circle-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-up-circle-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-up-down-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-up-down-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-up-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-up-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-up-s-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-up-s-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-artboard-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-artboard-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-artboard-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-artboard-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-article-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-article-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-aspect-ratio-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-aspect-ratio-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-asterisk"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-at-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-at-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-attachment-2"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-attachment-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-attachment-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-auction-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-auction-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-award-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-award-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-baidu-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-baidu-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-ball-pen-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-ball-pen-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bank-card-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bank-card-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bank-card-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bank-card-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bank-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bank-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bar-chart-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bar-chart-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bar-chart-box-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bar-chart-box-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bar-chart-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bar-chart-grouped-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bar-chart-grouped-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bar-chart-horizontal-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bar-chart-horizontal-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bar-chart-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-barcode-box-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-barcode-box-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-barcode-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-barcode-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-barricade-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-barricade-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-base-station-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-base-station-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-basketball-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-basketball-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-battery-2-charge-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-battery-2-charge-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-battery-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-battery-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-battery-charge-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-battery-charge-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-battery-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-battery-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-battery-low-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-battery-low-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-battery-saver-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-battery-saver-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-battery-share-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-battery-share-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bear-smile-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bear-smile-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-behance-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-behance-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bell-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bell-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bike-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bike-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bilibili-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bilibili-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bill-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bill-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-billiards-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-billiards-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bit-coin-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bit-coin-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-blaze-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-blaze-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bluetooth-connect-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bluetooth-connect-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bluetooth-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bluetooth-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-blur-off-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-blur-off-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-body-scan-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-body-scan-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bold"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-book-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-book-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-book-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-book-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-book-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-book-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-book-mark-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-book-mark-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-book-open-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-book-open-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-book-read-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-book-read-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-booklet-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-booklet-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bookmark-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bookmark-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bookmark-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bookmark-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bookmark-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bookmark-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-boxing-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-boxing-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-braces-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-braces-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-brackets-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-brackets-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-briefcase-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-briefcase-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-briefcase-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-briefcase-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-briefcase-4-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-briefcase-4-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-briefcase-5-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-briefcase-5-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-briefcase-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-briefcase-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bring-forward"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bring-to-front"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-broadcast-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-broadcast-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-brush-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-brush-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-brush-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-brush-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-brush-4-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-brush-4-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-brush-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-brush-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bubble-chart-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bubble-chart-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bug-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bug-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bug-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bug-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-building-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-building-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-building-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-building-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-building-4-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-building-4-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-building-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-building-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bus-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bus-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bus-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bus-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bus-wifi-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bus-wifi-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-cactus-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-cactus-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-cake-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-cake-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-cake-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-cake-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-cake-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-cake-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-calculator-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-calculator-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-calendar-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-calendar-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-calendar-check-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-calendar-check-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-calendar-event-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-calendar-event-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-calendar-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-calendar-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-calendar-todo-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-calendar-todo-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-camera-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-camera-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-camera-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-camera-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-camera-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-camera-lens-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-camera-lens-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-camera-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-camera-off-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-camera-off-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-camera-switch-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-camera-switch-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-capsule-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-capsule-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-car-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-car-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-car-washing-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-car-washing-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-caravan-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-caravan-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-cast-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-cast-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-cellphone-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-cellphone-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-celsius-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-celsius-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-centos-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-centos-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-character-recognition-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-character-recognition-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-charging-pile-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-charging-pile-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-charging-pile-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-charging-pile-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-1-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-1-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-4-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-4-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-check-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-check-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-delete-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-delete-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-download-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-download-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-follow-up-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-follow-up-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-forward-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-forward-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-heart-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-heart-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-history-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-history-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-new-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-new-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-off-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-off-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-poll-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-poll-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-private-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-private-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-quote-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-quote-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-settings-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-settings-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-smile-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-smile-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-smile-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-smile-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-smile-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-smile-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-upload-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-upload-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-voice-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chat-voice-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-check-double-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-check-double-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-check-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-check-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-checkbox-blank-circle-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-checkbox-blank-circle-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-checkbox-blank-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-checkbox-blank-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-checkbox-circle-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-checkbox-circle-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-checkbox-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-checkbox-indeterminate-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-checkbox-indeterminate-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-checkbox-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-checkbox-multiple-blank-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-checkbox-multiple-blank-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-checkbox-multiple-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-checkbox-multiple-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-china-railway-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-china-railway-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chrome-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-chrome-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-clapperboard-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-clapperboard-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-clipboard-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-clipboard-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-clockwise-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-clockwise-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-clockwise-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-clockwise-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-close-circle-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-close-circle-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-close-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-close-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-closed-captioning-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-closed-captioning-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-cloud-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-cloud-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-cloud-off-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-cloud-off-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-cloud-windy-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-cloud-windy-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-cloudy-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-cloudy-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-cloudy-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-cloudy-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-code-box-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-code-box-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-code-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-code-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-code-s-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-code-s-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-code-s-slash-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-code-s-slash-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-code-view"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-codepen-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-codepen-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-coin-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-coin-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-coins-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-coins-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-collage-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-collage-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-command-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-command-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-community-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-community-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-compass-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-compass-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-compass-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-compass-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-compass-4-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-compass-4-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-compass-discover-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-compass-discover-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-compass-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-compass-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-compasses-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-compasses-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-compasses-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-compasses-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-computer-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-computer-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-contacts-book-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-contacts-book-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-contacts-book-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-contacts-book-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-contacts-book-upload-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-contacts-book-upload-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-contacts-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-contacts-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-contrast-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-contrast-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-contrast-drop-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-contrast-drop-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-contrast-drop-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-contrast-drop-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-contrast-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-contrast-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-copper-coin-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-copper-coin-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-copper-diamond-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-copper-diamond-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-copyleft-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-copyleft-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-copyright-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-copyright-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-coreos-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-coreos-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-coupon-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-coupon-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-coupon-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-coupon-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-coupon-4-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-coupon-4-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-coupon-5-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-coupon-5-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-coupon-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-coupon-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-cpu-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-cpu-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-creative-commons-by-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-creative-commons-by-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-creative-commons-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-creative-commons-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-creative-commons-nc-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-creative-commons-nc-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-creative-commons-nd-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-creative-commons-nd-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-creative-commons-sa-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-creative-commons-sa-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-creative-commons-zero-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-creative-commons-zero-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-criminal-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-criminal-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-crop-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-crop-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-crop-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-crop-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-css3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-css3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-cup-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-cup-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-currency-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-currency-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-cursor-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-cursor-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-customer-service-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-customer-service-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-customer-service-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-customer-service-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-dashboard-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-dashboard-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-dashboard-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-dashboard-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-dashboard-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-dashboard-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-database-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-database-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-database-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-database-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-delete-back-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-delete-back-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-delete-back-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-delete-back-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-delete-bin-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-delete-bin-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-delete-bin-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-delete-bin-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-delete-bin-4-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-delete-bin-4-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-delete-bin-5-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-delete-bin-5-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-delete-bin-6-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-delete-bin-6-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-delete-bin-7-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-delete-bin-7-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-delete-bin-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-delete-bin-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-delete-column"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-delete-row"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-device-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-device-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-device-recover-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-device-recover-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-dingding-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-dingding-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-direction-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-direction-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-disc-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-disc-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-discord-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-discord-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-discuss-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-discuss-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-dislike-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-dislike-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-disqus-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-disqus-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-divide-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-divide-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-donut-chart-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-donut-chart-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-door-closed-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-door-closed-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-door-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-door-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-door-lock-box-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-door-lock-box-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-door-lock-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-door-lock-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-door-open-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-door-open-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-dossier-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-dossier-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-douban-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-douban-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-double-quotes-l"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-double-quotes-r"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-download-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-download-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-download-cloud-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-download-cloud-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-download-cloud-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-download-cloud-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-download-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-download-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-draft-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-draft-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-drag-drop-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-drag-drop-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-drag-move-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-drag-move-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-drag-move-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-drag-move-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-dribbble-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-dribbble-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-drive-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-drive-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-drizzle-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-drizzle-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-drop-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-drop-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-dropbox-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-dropbox-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-dual-sim-1-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-dual-sim-1-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-dual-sim-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-dual-sim-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-dv-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-dv-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-dvd-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-dvd-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-e-bike-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-e-bike-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-e-bike-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-e-bike-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-earth-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-earth-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-earthquake-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-earthquake-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-edge-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-edge-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-edit-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-edit-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-edit-box-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-edit-box-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-edit-circle-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-edit-circle-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-edit-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-edit-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-eject-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-eject-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-emotion-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-emotion-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-emotion-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-emotion-happy-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-emotion-happy-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-emotion-laugh-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-emotion-laugh-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-emotion-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-emotion-normal-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-emotion-normal-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-emotion-sad-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-emotion-sad-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-emotion-unhappy-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-emotion-unhappy-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-empathize-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-empathize-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-emphasis-cn"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-emphasis"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-english-input"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-equalizer-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-equalizer-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-eraser-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-eraser-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-error-warning-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-error-warning-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-evernote-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-evernote-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-exchange-box-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-exchange-box-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-exchange-cny-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-exchange-cny-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-exchange-dollar-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-exchange-dollar-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-exchange-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-exchange-funds-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-exchange-funds-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-exchange-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-external-link-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-external-link-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-eye-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-eye-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-eye-close-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-eye-close-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-eye-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-eye-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-eye-off-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-eye-off-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-facebook-box-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-facebook-box-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-facebook-circle-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-facebook-circle-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-facebook-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-facebook-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-fahrenheit-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-fahrenheit-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-feedback-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-feedback-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-4-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-4-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-add-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-add-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-chart-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-chart-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-chart-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-chart-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-cloud-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-cloud-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-code-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-code-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-copy-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-copy-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-copy-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-copy-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-damage-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-damage-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-download-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-download-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-edit-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-edit-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-excel-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-excel-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-excel-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-excel-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-forbid-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-forbid-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-gif-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-gif-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-history-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-history-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-hwp-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-hwp-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-info-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-info-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-list-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-list-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-list-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-list-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-list-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-list-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-lock-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-lock-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-mark-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-mark-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-music-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-music-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-paper-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-paper-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-paper-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-paper-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-pdf-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-pdf-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-ppt-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-ppt-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-ppt-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-ppt-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-reduce-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-reduce-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-search-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-search-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-settings-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-settings-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-shield-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-shield-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-shield-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-shield-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-shred-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-shred-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-text-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-text-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-transfer-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-transfer-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-unknow-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-unknow-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-upload-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-upload-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-user-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-user-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-warning-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-warning-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-word-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-word-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-word-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-word-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-zip-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-file-zip-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-film-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-film-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-filter-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-filter-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-filter-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-filter-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-filter-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-filter-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-filter-off-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-filter-off-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-find-replace-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-find-replace-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-finder-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-finder-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-fingerprint-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-fingerprint-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-fingerprint-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-fingerprint-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-fire-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-fire-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-firefox-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-firefox-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-first-aid-kit-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-first-aid-kit-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-flag-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-flag-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-flag-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-flag-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-flashlight-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-flashlight-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-flask-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-flask-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-flight-land-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-flight-land-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-flight-takeoff-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-flight-takeoff-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-flood-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-flood-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-flow-chart"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-flutter-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-flutter-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-focus-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-focus-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-focus-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-focus-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-focus-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-focus-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-foggy-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-foggy-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-4-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-4-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-5-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-5-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-add-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-add-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-chart-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-chart-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-chart-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-chart-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-download-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-download-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-forbid-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-forbid-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-history-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-history-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-info-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-info-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-keyhole-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-keyhole-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-lock-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-lock-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-music-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-music-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-open-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-open-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-received-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-received-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-reduce-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-reduce-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-settings-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-settings-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-shared-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-shared-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-shield-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-shield-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-shield-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-shield-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-transfer-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-transfer-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-unknow-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-unknow-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-upload-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-upload-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-user-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-user-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-warning-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-warning-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-zip-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folder-zip-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folders-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-folders-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-font-color"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-font-size-2"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-font-size"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-football-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-football-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-footprint-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-footprint-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-forbid-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-forbid-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-forbid-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-forbid-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-format-clear"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-fridge-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-fridge-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-fullscreen-exit-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-fullscreen-exit-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-fullscreen-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-fullscreen-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-function-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-function-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-functions"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-funds-box-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-funds-box-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-funds-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-funds-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-gallery-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-gallery-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-gallery-upload-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-gallery-upload-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-game-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-game-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-gamepad-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-gamepad-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-gas-station-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-gas-station-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-gatsby-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-gatsby-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-genderless-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-genderless-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-ghost-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-ghost-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-ghost-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-ghost-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-ghost-smile-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-ghost-smile-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-gift-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-gift-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-gift-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-gift-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-git-branch-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-git-branch-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-git-commit-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-git-commit-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-git-merge-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-git-merge-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-git-pull-request-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-git-pull-request-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-git-repository-commits-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-git-repository-commits-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-git-repository-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-git-repository-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-git-repository-private-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-git-repository-private-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-github-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-github-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-gitlab-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-gitlab-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-global-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-global-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-globe-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-globe-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-goblet-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-goblet-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-google-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-google-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-google-play-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-google-play-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-government-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-government-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-gps-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-gps-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-gradienter-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-gradienter-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-grid-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-grid-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-group-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-group-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-group-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-group-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-guide-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-guide-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-h-1"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-h-2"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-h-3"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-h-4"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-h-5"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-h-6"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-hail-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-hail-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-hammer-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-hammer-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-hand-coin-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-hand-coin-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-hand-heart-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-hand-heart-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-hand-sanitizer-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-hand-sanitizer-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-handbag-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-handbag-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-hard-drive-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-hard-drive-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-hard-drive-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-hard-drive-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-hashtag"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-haze-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-haze-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-haze-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-haze-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-hd-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-hd-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-heading"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-headphone-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-headphone-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-health-book-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-health-book-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-heart-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-heart-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-heart-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-heart-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-heart-add-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-heart-add-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-heart-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-heart-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-heart-pulse-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-heart-pulse-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-hearts-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-hearts-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-heavy-showers-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-heavy-showers-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-history-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-history-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-home-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-home-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-home-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-home-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-home-4-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-home-4-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-home-5-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-home-5-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-home-6-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-home-6-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-home-7-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-home-7-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-home-8-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-home-8-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-home-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-home-gear-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-home-gear-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-home-heart-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-home-heart-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-home-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-home-smile-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-home-smile-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-home-smile-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-home-smile-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-home-wifi-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-home-wifi-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-honor-of-kings-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-honor-of-kings-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-honour-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-honour-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-hospital-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-hospital-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-hotel-bed-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-hotel-bed-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-hotel-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-hotel-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-hotspot-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-hotspot-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-hq-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-hq-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-html5-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-html5-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-ie-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-ie-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-image-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-image-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-image-add-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-image-add-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-image-edit-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-image-edit-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-image-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-image-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-inbox-archive-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-inbox-archive-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-inbox-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-inbox-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-inbox-unarchive-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-inbox-unarchive-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-increase-decrease-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-increase-decrease-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-indent-decrease"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-indent-increase"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-indeterminate-circle-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-indeterminate-circle-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-information-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-information-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-infrared-thermometer-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-infrared-thermometer-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-ink-bottle-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-ink-bottle-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-input-cursor-move"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-input-method-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-input-method-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-insert-column-left"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-insert-column-right"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-insert-row-bottom"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-insert-row-top"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-instagram-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-instagram-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-install-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-install-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-invision-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-invision-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-italic"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-kakao-talk-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-kakao-talk-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-key-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-key-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-key-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-key-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-keyboard-box-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-keyboard-box-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-keyboard-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-keyboard-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-keynote-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-keynote-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-knife-blood-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-knife-blood-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-knife-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-knife-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-landscape-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-landscape-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-layout-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-layout-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-layout-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-layout-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-layout-4-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-layout-4-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-layout-5-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-layout-5-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-layout-6-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-layout-6-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-layout-bottom-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-layout-bottom-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-layout-bottom-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-layout-bottom-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-layout-column-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-layout-column-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-layout-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-layout-grid-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-layout-grid-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-layout-left-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-layout-left-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-layout-left-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-layout-left-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-layout-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-layout-masonry-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-layout-masonry-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-layout-right-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-layout-right-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-layout-right-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-layout-right-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-layout-row-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-layout-row-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-layout-top-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-layout-top-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-layout-top-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-layout-top-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-leaf-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-leaf-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-lifebuoy-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-lifebuoy-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-lightbulb-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-lightbulb-flash-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-lightbulb-flash-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-lightbulb-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-line-chart-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-line-chart-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-line-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-line-height"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-line-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-link-m"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-link-unlink-m"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-link-unlink"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-link"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-linkedin-box-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-linkedin-box-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-linkedin-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-linkedin-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-links-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-links-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-list-check-2"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-list-check"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-list-ordered"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-list-settings-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-list-settings-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-list-unordered"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-live-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-live-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-loader-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-loader-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-loader-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-loader-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-loader-4-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-loader-4-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-loader-5-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-loader-5-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-loader-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-loader-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-lock-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-lock-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-lock-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-lock-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-lock-password-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-lock-password-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-lock-unlock-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-lock-unlock-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-login-box-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-login-box-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-login-circle-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-login-circle-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-logout-box-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-logout-box-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-logout-box-r-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-logout-box-r-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-logout-circle-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-logout-circle-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-logout-circle-r-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-logout-circle-r-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-luggage-cart-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-luggage-cart-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-luggage-deposit-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-luggage-deposit-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-lungs-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-lungs-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mac-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mac-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-macbook-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-macbook-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-magic-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-magic-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mail-add-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mail-add-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mail-check-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mail-check-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mail-close-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mail-close-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mail-download-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mail-download-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mail-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mail-forbid-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mail-forbid-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mail-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mail-lock-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mail-lock-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mail-open-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mail-open-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mail-send-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mail-send-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mail-settings-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mail-settings-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mail-star-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mail-star-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mail-unread-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mail-unread-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mail-volume-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mail-volume-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-map-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-map-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-map-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-map-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-map-pin-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-map-pin-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-map-pin-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-map-pin-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-map-pin-4-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-map-pin-4-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-map-pin-5-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-map-pin-5-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-map-pin-add-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-map-pin-add-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-map-pin-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-map-pin-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-map-pin-range-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-map-pin-range-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-map-pin-time-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-map-pin-time-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-map-pin-user-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-map-pin-user-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mark-pen-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mark-pen-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-markdown-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-markdown-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-markup-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-markup-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mastercard-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mastercard-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mastodon-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mastodon-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-medal-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-medal-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-medal-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-medal-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-medicine-bottle-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-medicine-bottle-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-medium-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-medium-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-men-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-men-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mental-health-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mental-health-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-menu-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-menu-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-menu-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-menu-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-menu-4-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-menu-4-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-menu-5-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-menu-5-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-menu-add-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-menu-add-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-menu-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-menu-fold-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-menu-fold-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-menu-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-menu-unfold-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-menu-unfold-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-merge-cells-horizontal"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-merge-cells-vertical"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-message-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-message-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-message-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-message-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-message-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-message-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-messenger-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-messenger-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-meteor-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-meteor-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mic-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mic-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mic-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mic-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mic-off-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mic-off-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mickey-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mickey-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-microscope-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-microscope-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-microsoft-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-microsoft-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mind-map"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mini-program-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mini-program-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mist-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mist-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-money-cny-box-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-money-cny-box-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-money-cny-circle-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-money-cny-circle-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-money-dollar-box-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-money-dollar-box-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-money-dollar-circle-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-money-dollar-circle-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-money-euro-box-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-money-euro-box-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-money-euro-circle-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-money-euro-circle-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-money-pound-box-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-money-pound-box-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-money-pound-circle-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-money-pound-circle-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-moon-clear-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-moon-clear-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-moon-cloudy-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-moon-cloudy-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-moon-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-moon-foggy-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-moon-foggy-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-moon-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-more-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-more-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-more-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-more-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-motorbike-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-motorbike-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mouse-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mouse-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-movie-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-movie-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-movie-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-movie-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-music-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-music-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-music-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-music-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mv-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-mv-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-navigation-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-navigation-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-netease-cloud-music-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-netease-cloud-music-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-netflix-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-netflix-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-newspaper-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-newspaper-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-node-tree"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-notification-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-notification-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-notification-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-notification-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-notification-4-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-notification-4-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-notification-badge-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-notification-badge-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-notification-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-notification-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-notification-off-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-notification-off-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-npmjs-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-npmjs-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-number-0"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-number-1"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-number-2"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-number-3"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-number-4"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-number-5"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-number-6"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-number-7"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-number-8"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-number-9"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-numbers-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-numbers-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-nurse-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-nurse-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-oil-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-oil-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-omega"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-open-arm-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-open-arm-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-open-source-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-open-source-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-opera-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-opera-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-order-play-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-order-play-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-organization-chart"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-outlet-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-outlet-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-outlet-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-outlet-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-page-separator"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pages-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pages-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-paint-brush-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-paint-brush-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-paint-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-paint-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-palette-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-palette-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pantone-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pantone-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-paragraph"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-parent-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-parent-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-parentheses-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-parentheses-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-parking-box-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-parking-box-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-parking-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-parking-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-passport-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-passport-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-patreon-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-patreon-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pause-circle-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pause-circle-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pause-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pause-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pause-mini-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pause-mini-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-paypal-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-paypal-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pen-nib-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pen-nib-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pencil-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pencil-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pencil-ruler-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pencil-ruler-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pencil-ruler-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pencil-ruler-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-percent-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-percent-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-phone-camera-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-phone-camera-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-phone-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-phone-find-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-phone-find-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-phone-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-phone-lock-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-phone-lock-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-picture-in-picture-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-picture-in-picture-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-picture-in-picture-exit-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-picture-in-picture-exit-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-picture-in-picture-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-picture-in-picture-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pie-chart-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pie-chart-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pie-chart-box-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pie-chart-box-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pie-chart-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pie-chart-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pin-distance-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pin-distance-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-ping-pong-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-ping-pong-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pinterest-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pinterest-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pinyin-input"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pixelfed-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pixelfed-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-plane-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-plane-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-plant-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-plant-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-play-circle-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-play-circle-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-play-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-play-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-play-list-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-play-list-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-play-list-add-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-play-list-add-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-play-list-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-play-list-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-play-mini-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-play-mini-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-playstation-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-playstation-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-plug-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-plug-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-plug-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-plug-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-polaroid-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-polaroid-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-polaroid-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-polaroid-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-police-car-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-police-car-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-price-tag-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-price-tag-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-price-tag-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-price-tag-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-price-tag-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-price-tag-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-printer-cloud-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-printer-cloud-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-printer-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-printer-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-product-hunt-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-product-hunt-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-profile-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-profile-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-projector-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-projector-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-projector-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-projector-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-psychotherapy-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-psychotherapy-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pulse-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pulse-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pushpin-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pushpin-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pushpin-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pushpin-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-qq-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-qq-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-qr-code-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-qr-code-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-qr-scan-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-qr-scan-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-qr-scan-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-qr-scan-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-question-answer-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-question-answer-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-question-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-question-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-question-mark"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-questionnaire-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-questionnaire-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-quill-pen-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-quill-pen-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-radar-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-radar-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-radio-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-radio-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-radio-button-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-radio-button-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-radio-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-radio-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-rainbow-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-rainbow-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-rainy-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-rainy-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-reactjs-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-reactjs-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-record-circle-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-record-circle-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-record-mail-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-record-mail-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-recycle-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-recycle-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-red-packet-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-red-packet-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-reddit-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-reddit-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-refresh-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-refresh-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-refund-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-refund-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-refund-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-refund-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-registered-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-registered-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-remixicon-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-remixicon-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-remote-control-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-remote-control-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-remote-control-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-remote-control-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-repeat-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-repeat-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-repeat-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-repeat-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-repeat-one-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-repeat-one-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-reply-all-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-reply-all-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-reply-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-reply-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-reserved-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-reserved-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-rest-time-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-rest-time-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-restart-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-restart-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-restaurant-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-restaurant-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-restaurant-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-restaurant-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-rewind-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-rewind-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-rewind-mini-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-rewind-mini-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-rhythm-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-rhythm-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-riding-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-riding-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-road-map-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-road-map-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-roadster-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-roadster-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-robot-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-robot-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-rocket-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-rocket-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-rocket-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-rocket-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-rotate-lock-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-rotate-lock-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-rounded-corner"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-route-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-route-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-router-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-router-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-rss-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-rss-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-ruler-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-ruler-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-ruler-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-ruler-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-run-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-run-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-safari-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-safari-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-safe-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-safe-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-safe-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-safe-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-sailboat-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-sailboat-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-save-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-save-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-save-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-save-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-save-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-save-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-scales-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-scales-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-scales-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-scales-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-scales-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-scales-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-scan-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-scan-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-scan-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-scan-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-scissors-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-scissors-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-scissors-cut-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-scissors-cut-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-scissors-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-scissors-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-screenshot-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-screenshot-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-screenshot-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-screenshot-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-sd-card-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-sd-card-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-sd-card-mini-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-sd-card-mini-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-search-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-search-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-search-eye-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-search-eye-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-search-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-search-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-secure-payment-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-secure-payment-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-seedling-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-seedling-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-send-backward"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-send-plane-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-send-plane-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-send-plane-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-send-plane-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-send-to-back"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-sensor-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-sensor-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-separator"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-server-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-server-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-service-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-service-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-settings-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-settings-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-settings-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-settings-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-settings-4-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-settings-4-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-settings-5-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-settings-5-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-settings-6-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-settings-6-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-settings-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-settings-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shape-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shape-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shape-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shape-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-share-box-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-share-box-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-share-circle-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-share-circle-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-share-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-share-forward-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-share-forward-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-share-forward-box-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-share-forward-box-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-share-forward-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-share-forward-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-share-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shield-check-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shield-check-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shield-cross-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shield-cross-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shield-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shield-flash-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shield-flash-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shield-keyhole-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shield-keyhole-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shield-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shield-star-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shield-star-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shield-user-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shield-user-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-ship-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-ship-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-ship-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-ship-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shirt-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shirt-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shopping-bag-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shopping-bag-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shopping-bag-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shopping-bag-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shopping-bag-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shopping-bag-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shopping-basket-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shopping-basket-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shopping-basket-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shopping-basket-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shopping-cart-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shopping-cart-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shopping-cart-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shopping-cart-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-showers-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-showers-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shuffle-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shuffle-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shut-down-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shut-down-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-side-bar-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-side-bar-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-signal-tower-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-signal-tower-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-signal-wifi-1-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-signal-wifi-1-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-signal-wifi-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-signal-wifi-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-signal-wifi-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-signal-wifi-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-signal-wifi-error-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-signal-wifi-error-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-signal-wifi-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-signal-wifi-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-signal-wifi-off-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-signal-wifi-off-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-sim-card-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-sim-card-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-sim-card-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-sim-card-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-single-quotes-l"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-single-quotes-r"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-sip-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-sip-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-skip-back-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-skip-back-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-skip-back-mini-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-skip-back-mini-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-skip-forward-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-skip-forward-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-skip-forward-mini-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-skip-forward-mini-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-skull-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-skull-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-skull-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-skull-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-skype-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-skype-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-slack-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-slack-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-slice-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-slice-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-slideshow-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-slideshow-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-slideshow-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-slideshow-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-slideshow-4-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-slideshow-4-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-slideshow-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-slideshow-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-smartphone-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-smartphone-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-snapchat-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-snapchat-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-snowy-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-snowy-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-sort-asc"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-sort-desc"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-sound-module-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-sound-module-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-soundcloud-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-soundcloud-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-space-ship-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-space-ship-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-space"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-spam-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-spam-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-spam-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-spam-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-spam-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-spam-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-speaker-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-speaker-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-speaker-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-speaker-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-speaker-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-speaker-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-spectrum-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-spectrum-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-speed-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-speed-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-speed-mini-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-speed-mini-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-split-cells-horizontal"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-split-cells-vertical"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-spotify-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-spotify-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-spy-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-spy-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-stack-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-stack-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-stack-overflow-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-stack-overflow-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-stackshare-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-stackshare-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-star-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-star-half-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-star-half-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-star-half-s-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-star-half-s-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-star-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-star-s-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-star-s-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-star-smile-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-star-smile-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-steam-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-steam-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-steering-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-steering-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-steering-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-steering-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-stethoscope-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-stethoscope-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-sticky-note-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-sticky-note-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-sticky-note-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-sticky-note-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-stock-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-stock-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-stop-circle-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-stop-circle-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-stop-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-stop-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-stop-mini-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-stop-mini-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-store-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-store-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-store-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-store-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-store-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-store-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-strikethrough-2"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-strikethrough"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-subscript-2"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-subscript"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-subtract-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-subtract-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-subway-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-subway-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-subway-wifi-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-subway-wifi-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-suitcase-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-suitcase-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-suitcase-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-suitcase-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-suitcase-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-suitcase-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-sun-cloudy-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-sun-cloudy-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-sun-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-sun-foggy-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-sun-foggy-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-sun-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-superscript-2"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-superscript"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-surgical-mask-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-surgical-mask-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-surround-sound-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-surround-sound-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-survey-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-survey-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-swap-box-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-swap-box-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-swap-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-swap-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-switch-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-switch-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-sword-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-sword-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-syringe-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-syringe-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-t-box-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-t-box-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-t-shirt-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-t-shirt-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-t-shirt-air-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-t-shirt-air-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-t-shirt-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-t-shirt-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-table-2"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-table-alt-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-table-alt-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-table-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-table-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-tablet-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-tablet-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-takeaway-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-takeaway-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-taobao-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-taobao-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-tape-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-tape-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-task-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-task-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-taxi-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-taxi-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-taxi-wifi-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-taxi-wifi-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-team-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-team-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-telegram-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-telegram-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-temp-cold-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-temp-cold-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-temp-hot-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-temp-hot-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-terminal-box-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-terminal-box-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-terminal-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-terminal-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-terminal-window-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-terminal-window-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-test-tube-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-test-tube-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-text-direction-l"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-text-direction-r"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-text-spacing"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-text-wrap"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-text"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-thermometer-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-thermometer-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-thumb-down-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-thumb-down-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-thumb-up-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-thumb-up-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-thunderstorms-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-thunderstorms-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-ticket-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-ticket-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-ticket-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-ticket-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-time-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-time-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-timer-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-timer-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-timer-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-timer-flash-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-timer-flash-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-timer-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-todo-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-todo-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-toggle-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-toggle-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-tools-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-tools-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-tornado-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-tornado-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-trademark-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-trademark-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-traffic-light-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-traffic-light-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-train-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-train-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-train-wifi-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-train-wifi-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-translate-2"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-translate"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-travesti-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-travesti-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-treasure-map-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-treasure-map-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-trello-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-trello-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-trophy-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-trophy-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-truck-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-truck-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-tumblr-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-tumblr-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-tv-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-tv-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-tv-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-tv-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-twitch-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-twitch-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-twitter-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-twitter-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-typhoon-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-typhoon-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-u-disk-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-u-disk-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-ubuntu-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-ubuntu-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-umbrella-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-umbrella-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-underline"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-uninstall-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-uninstall-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-unsplash-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-unsplash-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-upload-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-upload-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-upload-cloud-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-upload-cloud-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-upload-cloud-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-upload-cloud-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-upload-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-upload-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-usb-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-usb-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-4-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-4-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-5-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-5-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-6-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-6-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-add-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-add-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-follow-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-follow-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-heart-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-heart-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-location-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-location-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-received-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-received-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-received-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-received-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-search-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-search-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-settings-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-settings-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-shared-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-shared-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-shared-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-shared-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-smile-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-smile-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-star-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-star-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-unfollow-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-unfollow-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-voice-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-user-voice-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-video-add-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-video-add-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-video-chat-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-video-chat-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-video-download-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-video-download-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-video-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-video-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-video-upload-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-video-upload-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-vidicon-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-vidicon-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-vidicon-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-vidicon-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-vimeo-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-vimeo-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-vip-crown-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-vip-crown-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-vip-crown-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-vip-crown-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-vip-diamond-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-vip-diamond-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-vip-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-vip-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-virus-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-virus-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-visa-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-visa-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-voice-recognition-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-voice-recognition-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-voiceprint-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-voiceprint-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-volume-down-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-volume-down-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-volume-mute-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-volume-mute-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-volume-off-vibrate-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-volume-off-vibrate-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-volume-up-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-volume-up-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-volume-vibrate-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-volume-vibrate-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-vuejs-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-vuejs-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-walk-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-walk-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-wallet-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-wallet-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-wallet-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-wallet-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-wallet-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-wallet-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-water-flash-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-water-flash-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-webcam-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-webcam-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-wechat-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-wechat-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-wechat-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-wechat-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-wechat-pay-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-wechat-pay-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-weibo-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-weibo-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-whatsapp-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-whatsapp-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-wheelchair-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-wheelchair-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-wifi-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-wifi-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-wifi-off-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-wifi-off-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-window-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-window-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-window-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-window-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-windows-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-windows-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-windy-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-windy-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-wireless-charging-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-wireless-charging-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-women-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-women-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-wubi-input"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-xbox-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-xbox-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-xing-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-xing-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-youtube-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-youtube-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-zcool-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-zcool-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-zhihu-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-zhihu-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-zoom-in-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-zoom-in-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-zoom-out-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-zoom-out-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-zzz-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-zzz-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-down-double-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-down-double-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-left-double-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-left-double-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-right-double-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-right-double-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-turn-back-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-turn-back-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-turn-forward-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-turn-forward-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-up-double-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-arrow-up-double-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bard-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bard-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bootstrap-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-bootstrap-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-box-1-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-box-1-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-box-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-box-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-box-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-box-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-brain-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-brain-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-candle-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-candle-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-cash-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-cash-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-contract-left-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-contract-left-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-contract-left-right-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-contract-left-right-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-contract-right-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-contract-right-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-contract-up-down-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-contract-up-down-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-copilot-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-copilot-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-corner-down-left-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-corner-down-left-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-corner-down-right-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-corner-down-right-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-corner-left-down-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-corner-left-down-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-corner-left-up-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-corner-left-up-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-corner-right-down-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-corner-right-down-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-corner-right-up-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-corner-right-up-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-corner-up-left-double-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-corner-up-left-double-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-corner-up-left-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-corner-up-left-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-corner-up-right-double-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-corner-up-right-double-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-corner-up-right-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-corner-up-right-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-cross-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-cross-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-edge-new-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-edge-new-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-equal-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-equal-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-expand-left-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-expand-left-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-expand-left-right-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-expand-left-right-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-expand-right-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-expand-right-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-expand-up-down-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-expand-up-down-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-flickr-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-flickr-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-forward-10-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-forward-10-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-forward-15-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-forward-15-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-forward-30-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-forward-30-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-forward-5-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-forward-5-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-graduation-cap-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-graduation-cap-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-home-office-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-home-office-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-hourglass-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-hourglass-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-hourglass-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-hourglass-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-javascript-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-javascript-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-loop-left-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-loop-left-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-loop-right-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-loop-right-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-memories-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-memories-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-meta-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-meta-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-microsoft-loop-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-microsoft-loop-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-nft-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-nft-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-notion-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-notion-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-openai-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-openai-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-overline"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-p2p-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-p2p-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-presentation-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-presentation-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-replay-10-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-replay-10-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-replay-15-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-replay-15-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-replay-30-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-replay-30-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-replay-5-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-replay-5-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-school-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-school-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shining-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shining-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shining-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-shining-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-sketching"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-skip-down-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-skip-down-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-skip-left-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-skip-left-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-skip-right-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-skip-right-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-skip-up-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-skip-up-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-slow-down-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-slow-down-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-sparkling-2-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-sparkling-2-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-sparkling-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-sparkling-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-speak-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-speak-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-speed-up-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-speed-up-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-tiktok-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-tiktok-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-token-swap-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-token-swap-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-unpin-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-unpin-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-wechat-channels-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-wechat-channels-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-wordpress-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-wordpress-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-blender-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-blender-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-emoji-sticker-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-emoji-sticker-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-git-close-pull-request-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-git-close-pull-request-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-instance-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-instance-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-megaphone-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-megaphone-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pass-expired-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pass-expired-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pass-pending-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pass-pending-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pass-valid-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-pass-valid-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-ai-generate"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-calendar-close-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-calendar-close-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-draggable"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-font-family"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-font-mono"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-font-sans-serif"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-font-sans"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-hard-drive-3-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-hard-drive-3-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-kick-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-kick-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-list-check-3"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-list-indefinite"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-list-ordered-2"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-list-radio"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-openbase-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-openbase-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-planet-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-planet-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-prohibited-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-prohibited-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-quote-text"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-seo-fill"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-seo-line"></i>
                    </div>
                    <div
                        class="flex items-center justify-center w-12 h-12 text-2xl border rounded-md border-black/10 text-black/80 dark:border-darkborder dark:text-muted">
                        <i class="ri-slash-commands"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Card -->
@endsection