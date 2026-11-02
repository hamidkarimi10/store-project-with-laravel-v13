@extends('admin.layouts.master')

@section('content')
    <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <h1 class="text-2xl sm:text-3xl font-black tracking-tight">ویرایش روش ارسال</h1>
            <p class="mt-1 text-slate-400">اطلاعات روش ارسال را ویرایش کنید.</p>
        </div>
        <a href="{{ route('admin.shipping-methods.index') }}"
            class="inline-flex items-center justify-center gap-2 rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm font-medium text-slate-300 hover:bg-white/10 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="1.6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
            بازگشت به لیست
        </a>
    </div>

    <section class="mt-6 glass rounded-2xl p-5 sm:p-6">
        <div class="mb-6 border-b border-white/10 pb-4">
            <h2 class="font-bold text-slate-100">اطلاعات روش ارسال</h2>
            <p class="mt-1 text-sm text-slate-400">فیلدهای ستاره‌دار الزامی هستند.</p>
        </div>

        <form action="{{ route('admin.shipping-methods.update', $shippingMethod->id) }}" method="post"
            class="space-y-6">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <div class="space-y-2">
                    <label for="name" class="block text-sm font-medium text-slate-300">
                        نام روش ارسال
                        <span class="text-rose-400">*</span>
                    </label>
                    <input type="text" id="name" value="{{ old('name', $shippingMethod->name) }}" name="name"
                        placeholder="مثلاً: پست پیشتاز"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200 placeholder:text-slate-500 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20" />
                </div>

                <div class="space-y-2">
                    <label for="price" class="block text-sm font-medium text-slate-300">
                        قیمت (تومان)
                        <span class="text-rose-400">*</span>
                    </label>
                    <input type="number" id="price" value="{{ old('price', $shippingMethod->price) }}" name="price"
                        min="0" placeholder="مثلاً: 45000"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200 placeholder:text-slate-500 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20" />
                </div>
            </div>

            <div
                class="flex flex-col-reverse gap-3 border-t border-white/10 pt-6 sm:flex-row sm:items-center sm:justify-end">
                <a href="{{ route('admin.shipping-methods.index') }}" type="button"
                    class="inline-flex items-center justify-center rounded-xl border border-white/10 bg-white/5 px-5 py-2.5 text-sm font-medium text-slate-300 hover:bg-white/10 transition-colors">
                    انصراف
                </a>
                <button type="submit"
                    class="inline-flex items-center justify-center gap-2 rounded-xl bg-gradient-to-l from-blue-600 to-indigo-700 px-5 py-2.5 text-sm font-medium text-white hover:opacity-95 transition-opacity">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                    ویرایش روش ارسال
                </button>
            </div>
        </form>
    </section>
@endsection
