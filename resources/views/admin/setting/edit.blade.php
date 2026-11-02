@extends('admin.layouts.master')

@section('content')
    <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <h1 class="text-2xl sm:text-3xl font-black tracking-tight">ویرایش تنظیم</h1>
            <p class="mt-1 text-slate-400">مقدار تنظیم «{{ $setting['title'] }}» را ویرایش کنید.</p>
        </div>
        <a href="#"
            class="inline-flex items-center justify-center gap-2 rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm font-medium text-slate-300 hover:bg-white/10 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="1.6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
            بازگشت به لیست تنظیمات
        </a>
    </div>

    <section class="mt-6 glass rounded-2xl p-5 sm:p-6">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('admin.setting.update', $setting->id) }}" method="post" class="space-y-6"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-1">
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-slate-300">عنوان
                        <span class="text-rose-400">*</span>
                    </label>
                    <input type="text" name="title" id="title" value="{{ old('title', $setting->title) }}"
                        class="w-full rounded-xl border border-white/10 bg-white/[0.02] px-4 py-2.5 text-sm " />
                </div>

            </div>
            <div class="space-y-2">
                <label class="block text-sm font-medium text-slate-300">توضیحات
                    <span class="text-rose-400">*</span>
                </label>
                <textarea name="description" id="description" rows="3"
                    class="w-full rounded-xl border border-white/10 bg-white/[0.02] px-4 py-2.5 text-sm ">{{ old('description', $setting->description) }}</textarea>
            </div>

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-1">
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-slate-300">تصویر
                        <span class="text-rose-400">*</span>
                    </label>
                    <input type="file" name="logo" id="logo"
                        class="w-full rounded-xl border border-white/10 bg-white/[0.02] px-4 py-2.5 text-sm " />
                    @if ($setting->logo)
                        <img src="{{ asset('storage/' . $setting->logo) }}" alt="{{ $setting->title }}"
                            class="w-full rounded-xl border border-white/10 bg-white/[0.02] px-4 py-2.5 text-sm ">
                    @endif
                </div>
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-slate-300">آیکون
                        <span class="text-rose-400">*</span>
                    </label>
                    <input type="file" name="icon" id="icon"
                        class="w-full rounded-xl border border-white/10 bg-white/[0.02] px-4 py-2.5 text-sm " />
                    @if ($setting->icon)
                        <img src="{{ asset('storage/' . $setting->icon) }}" alt="{{ $setting->title }}"
                            class="w-full rounded-xl border border-white/10 bg-white/[0.02] px-4 py-2.5 text-sm ">
                    @endif
                </div>
            </div>


            <div
                class="flex flex-col-reverse gap-3 border-t border-white/10 pt-6 sm:flex-row sm:items-center sm:justify-end">
                <a href="#"
                    class="inline-flex items-center justify-center rounded-xl border border-white/10 bg-white/5 px-5 py-2.5 text-sm font-medium text-slate-300 hover:bg-white/10 transition-colors">
                    انصراف
                </a>
                <button type="submit"
                    class="inline-flex items-center justify-center gap-2 rounded-xl bg-gradient-to-l from-blue-600 to-indigo-700 px-5 py-2.5 text-sm font-medium text-white hover:opacity-95 transition-opacity">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                    ذخیره تغییرات
                </button>
            </div>
        </form>
    </section>
@endsection
