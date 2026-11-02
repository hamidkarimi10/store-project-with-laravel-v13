@extends('admin.layouts.master')

@section('content')
    <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <h1 class="text-2xl sm:text-3xl font-black tracking-tight">افزودن کاربر</h1>
            <p class="mt-1 text-slate-400">اطلاعات کاربر جدید را وارد کنید.</p>
        </div>
        <a href="#"
            class="inline-flex items-center justify-center gap-2 rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm font-medium text-slate-300 hover:bg-white/10 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="1.6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
            بازگشت به لیست کاربران
        </a>
    </div>

    <section class="mt-6 glass rounded-2xl p-5 sm:p-6">
        <div class="mb-6">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="bg-red-500/10 border border-red-500/20 rounded-xl p-4">
                        <p class="text-sm text-slate-400">{{ $error }}</p>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="mb-6 border-b border-white/10 pb-4">
            <h2 class="font-bold text-slate-100">اطلاعات کاربر</h2>
            <p class="mt-1 text-sm text-slate-400">فیلدهای ستاره‌دار الزامی هستند.</p>
        </div>

        <form action="{{ route('admin.users.store') }}" method="post" class="space-y-6">
            @csrf
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <div class="space-y-2 sm:col-span-2">
                    <label for="name" class="block text-sm font-medium text-slate-300">
                        نام و نام خانوادگی
                        <span class="text-rose-400">*</span>
                    </label>
                    <input name="name" value="{{ old('name') }}" type="text" id="name"
                        placeholder="مثلاً: علی رضایی"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200 placeholder:text-slate-500 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20" />
                </div>

                <div class="space-y-2">
                    <label for="email" class="block text-sm font-medium text-slate-300">
                        ایمیل
                        <span class="text-rose-400">*</span>
                    </label>
                    <input name="email" value="{{ old('email') }}" type="email" id="email"
                        placeholder="مثلاً: ali@example.com"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200 placeholder:text-slate-500 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20" />
                </div>

                <div class="space-y-2">
                    <label for="mobile" class="block text-sm font-medium text-slate-300">
                        موبایل
                        <span class="text-rose-400">*</span>
                    </label>
                    <input name="mobile" value="{{ old('mobile') }}" type="text" id="mobile"
                        placeholder="مثلاً: ۰۹۱۲۱۲۳۴۵۶۷"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200 placeholder:text-slate-500 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20" />
                </div>

                <div class="space-y-2">
                    <label for="password" class="block text-sm font-medium text-slate-300">
                        رمز عبور
                        <span class="text-rose-400">*</span>
                    </label>
                    <input name="password" value="{{ old('password') }}" type="password" id="password"
                        placeholder="حداقل ۸ کاراکتر"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200 placeholder:text-slate-500 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20" />
                </div>

                <div class="space-y-2">
                    <label for="password_confirmation" class="block text-sm font-medium text-slate-300">
                        تکرار رمز عبور
                        <span class="text-rose-400">*</span>
                    </label>
                    <input name="password_confirmation" value="{{ old('password_confirmation') }}" type="password"
                        id="password_confirmation" placeholder="رمز عبور را دوباره وارد کنید"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200 placeholder:text-slate-500 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20" />
                </div>
            </div>

            <div
                class="flex flex-col-reverse gap-3 border-t border-white/10 pt-6 sm:flex-row sm:items-center sm:justify-end">
                <a href="{{ route('admin.users.index') }}"
                    class="inline-flex items-center justify-center rounded-xl border border-white/10 bg-white/5 px-5 py-2.5 text-sm font-medium text-slate-300 hover:bg-white/10 transition-colors">
                    انصراف
                </a>
                <button type="submit"
                    class="inline-flex items-center justify-center gap-2 rounded-xl bg-gradient-to-l from-blue-600 to-indigo-700 px-5 py-2.5 text-sm font-medium text-white hover:opacity-95 transition-opacity">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                    ذخیره کاربر
                </button>
            </div>
        </form>
    </section>
@endsection
