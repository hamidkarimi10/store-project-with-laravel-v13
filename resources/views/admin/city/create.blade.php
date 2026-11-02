@extends('admin.layouts.master')

@section('content')
    <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <h1 class="text-2xl sm:text-3xl font-black tracking-tight">افزودن شهر</h1>
            <p class="mt-1 text-slate-400">اطلاعات شهر جدید را وارد کنید.</p>
        </div>
        <a href="{{ route('admin.cities.index') }}"
            class="inline-flex items-center justify-center gap-2 rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm font-medium text-slate-300 hover:bg-white/10 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>
            بازگشت به لیست شهرها
        </a>
    </div>

    <section class="mt-6 glass rounded-2xl p-5 sm:p-6">
        <div class="mb-6 border-b border-white/10 pb-4">
            <h2 class="font-bold text-slate-100">اطلاعات شهر</h2>
            <p class="mt-1 text-sm text-slate-400">فیلدهای ستاره‌دار الزامی هستند.</p>
        </div>

        <form action="#" method="post" class="space-y-6">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <div class="space-y-2">
                    <label for="name" class="block text-sm font-medium text-slate-300">نام شهر <span class="text-rose-400">*</span></label>
                    <input type="text" id="name" name="name" placeholder="مثلاً: تهران" class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200 placeholder:text-slate-500 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20" />
                </div>
                <div class="space-y-2">
                    <label for="state" class="block text-sm font-medium text-slate-300">استان <span class="text-rose-400">*</span></label>
                    <input type="text" id="state" name="state" placeholder="مثلاً: تهران" class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200 placeholder:text-slate-500 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20" />
                </div>
                <div class="space-y-2">
                    <label for="slug" class="block text-sm font-medium text-slate-300">اسلاگ</label>
                    <input type="text" id="slug" name="slug" placeholder="مثلاً: tehran" class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200 placeholder:text-slate-500 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20" />
                </div>
                <div class="space-y-2">
                    <label for="status" class="block text-sm font-medium text-slate-300">وضعیت <span class="text-rose-400">*</span></label>
                    <select id="status" name="status" class="w-full rounded-xl border border-white/10 bg-white/5 ps-4 pe-10 py-2.5 text-sm text-slate-200 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                        <option value="1" class="bg-slate-900">فعال</option>
                        <option value="0" class="bg-slate-900">غیرفعال</option>
                    </select>
                </div>
                <div class="space-y-2">
                    <label for="latitude" class="block text-sm font-medium text-slate-300">عرض جغرافیایی</label>
                    <input type="text" id="latitude" name="latitude" placeholder="مثلاً: 35.6892" class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200 placeholder:text-slate-500 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20" />
                </div>
                <div class="space-y-2">
                    <label for="longitude" class="block text-sm font-medium text-slate-300">طول جغرافیایی</label>
                    <input type="text" id="longitude" name="longitude" placeholder="مثلاً: 51.3890" class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200 placeholder:text-slate-500 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20" />
                </div>
            </div>
            <div class="flex flex-col-reverse gap-3 border-t border-white/10 pt-6 sm:flex-row sm:items-center sm:justify-end">
                <a href="{{ route('admin.cities.index') }}" class="inline-flex items-center justify-center rounded-xl border border-white/10 bg-white/5 px-5 py-2.5 text-sm font-medium text-slate-300 hover:bg-white/10 transition-colors">انصراف</a>
                <button type="submit" class="inline-flex items-center justify-center gap-2 rounded-xl bg-gradient-to-l from-blue-600 to-indigo-700 px-5 py-2.5 text-sm font-medium text-white hover:opacity-95 transition-opacity">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                    ذخیره شهر
                </button>
            </div>
        </form>
    </section>
@endsection
