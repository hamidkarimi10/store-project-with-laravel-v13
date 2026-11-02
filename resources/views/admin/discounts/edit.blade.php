@extends('admin.layouts.master')

@section('content')
    <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <h1 class="text-2xl sm:text-3xl font-black tracking-tight">ویرایش کد تخفیف</h1>
            <p class="mt-1 text-slate-400">اطلاعات کد تخفیف را ویرایش کنید.</p>
        </div>
        <a href="{{ route('admin.discounts.index') }}"
            class="inline-flex items-center justify-center gap-2 rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm font-medium text-slate-300 hover:bg-white/10 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="1.6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
            بازگشت به لیست کدهای تخفیف
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
            <h2 class="font-bold text-slate-100">اطلاعات کد تخفیف</h2>
            <p class="mt-1 text-sm text-slate-400">فیلدهای ستاره‌دار الزامی هستند.</p>
        </div>

        <form action="{{ route('admin.discounts.update', $discount->id) }}" method="post" class="space-y-6">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <div class="space-y-2">
                    <label for="code" class="block text-sm font-medium text-slate-300">
                        کد تخفیف
                        <span class="text-rose-400">*</span>
                    </label>
                    <input type="text" id="code" value="{{ old('code', $discount->code) }}" name="code"
                        placeholder="مثلاً: WELCOME10"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200 placeholder:text-slate-500 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20" />
                </div>

                <div class="space-y-2">
                    <label for="type" class="block text-sm font-medium text-slate-300">
                        نوع تخفیف
                        <span class="text-rose-400">*</span>
                    </label>
                    <select id="type" name="type"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                        <option value="percentage" class="bg-slate-900" @selected(old('type', $discount->type) === 'percentage')>درصدی</option>
                        <option value="fixed" class="bg-slate-900" @selected(old('type', $discount->type) === 'fixed')>مبلغ ثابت</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <div class="space-y-2">
                    <label for="value" class="block text-sm font-medium text-slate-300">
                        مقدار تخفیف
                        <span class="text-rose-400">*</span>
                    </label>
                    <input type="number" id="value" value="{{ old('value', $discount->value) }}" name="value" min="1"
                        placeholder="مثلاً: 10 یا 50000"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200 placeholder:text-slate-500 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20" />
                </div>

                <div class="space-y-2">
                    <label for="is_active" class="block text-sm font-medium text-slate-300">
                        وضعیت
                        <span class="text-rose-400">*</span>
                    </label>
                    <select id="is_active" name="is_active"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                        <option value="1" class="bg-slate-900" @selected((int) old('is_active', $discount->is_active) === 1)>فعال</option>
                        <option value="0" class="bg-slate-900" @selected((int) old('is_active', $discount->is_active) === 0)>غیرفعال</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <div class="space-y-2">
                    <label for="start_date" class="block text-sm font-medium text-slate-300">
                        تاریخ شروع
                        <span class="text-rose-400">*</span>
                    </label>
                    <input type="date" id="start_date"
                        value="{{ old('start_date', $discount->start_date?->format('Y-m-d')) }}" name="start_date"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20" />
                </div>

                <div class="space-y-2">
                    <label for="end_date" class="block text-sm font-medium text-slate-300">
                        تاریخ پایان
                        <span class="text-rose-400">*</span>
                    </label>
                    <input type="date" id="end_date"
                        value="{{ old('end_date', $discount->end_date?->format('Y-m-d')) }}" name="end_date"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20" />
                </div>
            </div>

            <div
                class="flex flex-col-reverse gap-3 border-t border-white/10 pt-6 sm:flex-row sm:items-center sm:justify-end">
                <a href="{{ route('admin.discounts.index') }}" type="button"
                    class="inline-flex items-center justify-center rounded-xl border border-white/10 bg-white/5 px-5 py-2.5 text-sm font-medium text-slate-300 hover:bg-white/10 transition-colors">
                    انصراف
                </a>
                <button type="submit"
                    class="inline-flex items-center justify-center gap-2 rounded-xl bg-gradient-to-l from-blue-600 to-indigo-700 px-5 py-2.5 text-sm font-medium text-white hover:opacity-95 transition-opacity">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                    ویرایش کد تخفیف
                </button>
            </div>
        </form>
    </section>
@endsection
