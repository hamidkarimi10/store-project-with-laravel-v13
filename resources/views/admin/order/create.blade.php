@extends('admin.layouts.master')

@section('content')
    <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <h1 class="text-2xl sm:text-3xl font-black tracking-tight">افزودن سفارش</h1>
            <p class="mt-1 text-slate-400">اطلاعات سفارش جدید را وارد کنید.</p>
        </div>
        <a href="{{ route('admin.orders.index') }}"
            class="inline-flex items-center justify-center gap-2 rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm font-medium text-slate-300 hover:bg-white/10 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="1.6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
            بازگشت به لیست
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
            <h2 class="font-bold text-slate-100">اطلاعات سفارش</h2>
            <p class="mt-1 text-sm text-slate-400">فیلدهای ستاره‌دار الزامی هستند.</p>
        </div>

        <form action="#" method="post" class="space-y-6">
            @csrf

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <div class="space-y-2">
                    <label for="user_id" class="block text-sm font-medium text-slate-300">
                        شناسه کاربر
                        <span class="text-rose-400">*</span>
                    </label>
                    <input type="number" id="user_id" value="{{ old('user_id') }}" name="user_id" min="1"
                        placeholder="مثلاً: ۱"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200 placeholder:text-slate-500 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20" />
                </div>

                <div class="space-y-2">
                    <label for="cart_id" class="block text-sm font-medium text-slate-300">
                        شناسه سبد خرید
                        <span class="text-rose-400">*</span>
                    </label>
                    <input type="number" id="cart_id" value="{{ old('cart_id') }}" name="cart_id" min="1"
                        placeholder="مثلاً: ۱"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200 placeholder:text-slate-500 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20" />
                </div>

                <div class="space-y-2">
                    <label for="discount_id" class="block text-sm font-medium text-slate-300">شناسه تخفیف</label>
                    <input type="number" id="discount_id" value="{{ old('discount_id') }}" name="discount_id" min="1"
                        placeholder="اختیاری"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200 placeholder:text-slate-500 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20" />
                </div>

                <div class="space-y-2">
                    <label for="delivery_id" class="block text-sm font-medium text-slate-300">شناسه روش ارسال</label>
                    <input type="number" id="delivery_id" value="{{ old('delivery_id') }}" name="delivery_id" min="1"
                        placeholder="اختیاری"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200 placeholder:text-slate-500 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20" />
                </div>

                <div class="space-y-2">
                    <label for="address_id" class="block text-sm font-medium text-slate-300">شناسه آدرس</label>
                    <input type="number" id="address_id" value="{{ old('address_id') }}" name="address_id" min="1"
                        placeholder="اختیاری"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200 placeholder:text-slate-500 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20" />
                </div>

                <div class="space-y-2">
                    <label for="totalPrice" class="block text-sm font-medium text-slate-300">
                        مبلغ کل (تومان)
                        <span class="text-rose-400">*</span>
                    </label>
                    <input type="number" id="totalPrice" value="{{ old('totalPrice') }}" name="totalPrice" min="0"
                        placeholder="مثلاً: ۱۲۰۰۰۰۰"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200 placeholder:text-slate-500 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20" />
                </div>

                <div class="space-y-2">
                    <label for="totalDiscount" class="block text-sm font-medium text-slate-300">
                        مبلغ تخفیف (تومان)
                        <span class="text-rose-400">*</span>
                    </label>
                    <input type="number" id="totalDiscount" value="{{ old('totalDiscount', 0) }}" name="totalDiscount"
                        min="0" placeholder="مثلاً: ۰"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200 placeholder:text-slate-500 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20" />
                </div>

                <div class="space-y-2">
                    <label for="status" class="block text-sm font-medium text-slate-300">
                        وضعیت سفارش
                        <span class="text-rose-400">*</span>
                    </label>
                    <select id="status" name="status"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                        <option value="pending" @selected(old('status', 'pending') === 'pending')>در انتظار</option>
                        <option value="processing" @selected(old('status') === 'processing')>در حال پردازش</option>
                        <option value="completed" @selected(old('status') === 'completed')>تکمیل شده</option>
                        <option value="cancelled" @selected(old('status') === 'cancelled')>لغو شده</option>
                        <option value="failed" @selected(old('status') === 'failed')>ناموفق</option>
                    </select>
                </div>

                <div class="space-y-2">
                    <label for="paymentStatus" class="block text-sm font-medium text-slate-300">
                        وضعیت پرداخت
                        <span class="text-rose-400">*</span>
                    </label>
                    <select id="paymentStatus" name="paymentStatus"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                        <option value="pending" @selected(old('paymentStatus', 'pending') === 'pending')>در انتظار پرداخت</option>
                        <option value="paid" @selected(old('paymentStatus') === 'paid')>پرداخت شده</option>
                        <option value="failed" @selected(old('paymentStatus') === 'failed')>ناموفق</option>
                    </select>
                </div>

                <div class="space-y-2 sm:col-span-2">
                    <label for="paymentMethod" class="block text-sm font-medium text-slate-300">
                        روش پرداخت
                        <span class="text-rose-400">*</span>
                    </label>
                    <select id="paymentMethod" name="paymentMethod"
                        class="w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                        <option value="cash" @selected(old('paymentMethod', 'cash') === 'cash')>نقدی</option>
                        <option value="bank_transfer" @selected(old('paymentMethod') === 'bank_transfer')>انتقال بانکی</option>
                        <option value="credit_card" @selected(old('paymentMethod') === 'credit_card')>کارت اعتباری</option>
                        <option value="debit_card" @selected(old('paymentMethod') === 'debit_card')>کارت بدهی</option>
                        <option value="mobile_money" @selected(old('paymentMethod') === 'mobile_money')>کیف پول</option>
                    </select>
                </div>
            </div>

            <div
                class="flex flex-col-reverse gap-3 border-t border-white/10 pt-6 sm:flex-row sm:items-center sm:justify-end">
                <a href="{{ route('admin.orders.index') }}" type="button"
                    class="inline-flex items-center justify-center rounded-xl border border-white/10 bg-white/5 px-5 py-2.5 text-sm font-medium text-slate-300 hover:bg-white/10 transition-colors">
                    انصراف
                </a>
                <button type="submit"
                    class="inline-flex items-center justify-center gap-2 rounded-xl bg-gradient-to-l from-blue-600 to-indigo-700 px-5 py-2.5 text-sm font-medium text-white hover:opacity-95 transition-opacity">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                    ذخیره سفارش
                </button>
            </div>
        </form>
    </section>
@endsection
