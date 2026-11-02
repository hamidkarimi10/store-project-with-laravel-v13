@extends('admin.layouts.master')

@section('content')
    <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <h1 class="text-2xl sm:text-3xl font-black tracking-tight">جزئیات شهر</h1>
            <p class="mt-1 text-slate-400">مشاهده اطلاعات شهر ثبت‌شده.</p>
        </div>
        <div class="flex flex-wrap items-center gap-2">
            <a href="{{ route('admin.cities.edit', 1) }}"
                class="inline-flex items-center justify-center gap-2 rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm font-medium text-slate-300 hover:bg-white/10 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M11 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2v-5M18.5 2.5a2.12 2.12 0 013 3L12 15l-4 1 1-4 9.5-9.5z" /></svg>
                ویرایش شهر
            </a>
            <a href="{{ route('admin.cities.index') }}"
                class="inline-flex items-center justify-center gap-2 rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm font-medium text-slate-300 hover:bg-white/10 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>
                بازگشت به لیست
            </a>
        </div>
    </div>

    <section class="mt-6 glass rounded-2xl p-5 sm:p-6">
        <div class="mb-6 border-b border-white/10 pb-4">
            <h2 class="font-bold text-slate-100">اطلاعات شهر</h2>
            <p class="mt-1 text-sm text-slate-400">جزئیات شهر انتخاب‌شده.</p>
        </div>

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
            <div class="space-y-2">
                <span class="block text-sm font-medium text-slate-400">نام شهر</span>
                <p class="rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200">تهران</p>
            </div>
            <div class="space-y-2">
                <span class="block text-sm font-medium text-slate-400">استان</span>
                <p class="rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200">تهران</p>
            </div>
            <div class="space-y-2">
                <span class="block text-sm font-medium text-slate-400">اسلاگ</span>
                <p class="rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm font-mono text-blue-200">tehran</p>
            </div>
            <div class="space-y-2">
                <span class="block text-sm font-medium text-slate-400">وضعیت</span>
                <p class="rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200">
                    <span class="rounded-lg bg-green-500/10 px-2 py-1 text-xs text-green-300">فعال</span>
                </p>
            </div>
            <div class="space-y-2">
                <span class="block text-sm font-medium text-slate-400">عرض جغرافیایی</span>
                <p class="rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm font-mono text-slate-200">35.6892</p>
            </div>
            <div class="space-y-2">
                <span class="block text-sm font-medium text-slate-400">طول جغرافیایی</span>
                <p class="rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm font-mono text-slate-200">51.3890</p>
            </div>
            <div class="space-y-2">
                <span class="block text-sm font-medium text-slate-400">تاریخ ثبت</span>
                <p class="rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200">۱۴۰۴/۰۶/۲۹</p>
            </div>
            <div class="space-y-2">
                <span class="block text-sm font-medium text-slate-400">آخرین بروزرسانی</span>
                <p class="rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200">۱۴۰۴/۰۶/۳۰</p>
            </div>
        </div>
    </section>
@endsection
