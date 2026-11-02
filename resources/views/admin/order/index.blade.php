@extends('admin.layouts.master')

@section('content')
    <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <h1 class="text-2xl sm:text-3xl font-black tracking-tight">سفارش‌ها</h1>
            <p class="mt-1 text-slate-400">لیست سفارش‌های فروشگاه و مدیریت آن‌ها.</p>
        </div>
        <a href="{{ route('admin.orders.create') }}"
            class="inline-flex items-center justify-center gap-2 rounded-xl bg-gradient-to-l from-blue-600 to-indigo-700 px-4 py-2.5 font-medium text-white hover:opacity-95 transition-opacity">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="1.6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
            </svg>
            افزودن سفارش
        </a>
    </div>

    @if (session('success'))
        <div class="bg-green-500/10 border border-green-500/20 rounded-xl p-4">
            <p class="text-sm text-slate-400">{{ session('success') }}</p>
        </div>
    @endif

    <section class="mt-6 glass rounded-2xl p-5">
        <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <h2 class="font-bold text-slate-100">همه سفارش‌ها</h2>
            <div class="relative w-full sm:max-w-xs">
                <span class="pointer-events-none absolute inset-y-0 right-3 flex items-center text-slate-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-4.35-4.35M11 18a7 7 0 100-14 7 7 0 000 14z" />
                    </svg>
                </span>
                <input type="search" placeholder="جستجو در سفارش‌ها…"
                    class="w-full rounded-xl border border-white/10 bg-white/5 py-2 pr-10 pl-3 text-sm text-slate-200 placeholder:text-slate-500 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20" />
            </div>
        </div>

        <div class="mt-4 overflow-x-auto rounded-xl border border-white/5">
            <table class="min-w-full text-sm">
                <thead class="bg-white/5 text-slate-300">
                    <tr class="text-right">
                        <th class="px-4 py-3 font-medium whitespace-nowrap">شناسه</th>
                        <th class="px-4 py-3 font-medium whitespace-nowrap">کاربر</th>
                        <th class="px-4 py-3 font-medium whitespace-nowrap">مبلغ کل</th>
                        <th class="px-4 py-3 font-medium whitespace-nowrap">تخفیف</th>
                        <th class="px-4 py-3 font-medium whitespace-nowrap">وضعیت سفارش</th>
                        <th class="px-4 py-3 font-medium whitespace-nowrap">وضعیت پرداخت</th>
                        <th class="px-4 py-3 font-medium whitespace-nowrap">روش پرداخت</th>
                        <th class="px-4 py-3 font-medium whitespace-nowrap">تاریخ ایجاد</th>
                        <th class="px-4 py-3 font-medium text-center whitespace-nowrap">عملیات</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/10">
                    @forelse ($orders as $order)
                        <tr class="hover:bg-white/5 transition-colors">
                            <td class="px-4 py-3 text-slate-400">{{ $loop->iteration }}</td>
                            <td class="px-4 py-3 font-medium text-slate-100">
                                @if (isset($order->user) && $order->user)
                                    {{ $order->user->name ?? $order->user->email }}
                                @else
                                    <span class="text-slate-400">کاربر #{{ $order->user_id }}</span>
                                @endif
                            </td>
                            <td class="px-4 py-3 text-slate-100">{{ number_format($order->totalPrice) }} تومان</td>
                            <td class="px-4 py-3 text-slate-400">{{ number_format($order->totalDiscount) }} تومان</td>
                            <td class="px-4 py-3">
                                {{ $order->status }}

                            </td>
                            <td class="px-4 py-3">
                                {{ $order->paymentStatus }}

                            </td>
                            <td class="px-4 py-3 text-slate-400">
                                {{ $order->paymentMethod }}

                            </td>
                            <td class="px-4 py-3 text-slate-400 whitespace-nowrap">
                                @if (isset($order->created_at))
                                    {{ jdate($order->created_at) }}
                                @else
                                    —
                                @endif
                            </td>
                            <td class="px-4 py-3">
                                <div class="flex items-center justify-center gap-1">
                                    <a href="{{ route('admin.orders.edit', $order->id) }}" type="button"
                                        class="inline-flex size-9 items-center justify-center rounded-lg text-slate-400 hover:bg-blue-500/15 hover:text-blue-300 transition-colors"
                                        title="ویرایش">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="1.6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M11 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2v-5M18.5 2.5a2.12 2.12 0 013 3L12 15l-4 1 1-4 9.5-9.5z" />
                                        </svg>
                                    </a>
                                    <form onclick="return confirm('آیا می‌خواهید این سفارش را حذف کنید؟')" action="#"
                                        method="post"
                                        class="inline-flex size-9 items-center justify-center rounded-lg text-slate-400 hover:bg-rose-500/15 hover:text-rose-300 transition-colors"
                                        title="حذف">
                                        <button type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="1.6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9" class="px-4 py-3 text-center text-slate-400">هیچ سفارشی وجود ندارد</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if (method_exists($orders, 'links'))
            {{ $orders->links() }}
        @endif
    </section>
@endsection
