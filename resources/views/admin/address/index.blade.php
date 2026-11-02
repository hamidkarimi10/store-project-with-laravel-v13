@extends('admin.layouts.master')

@section('content')
    <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <h1 class="text-2xl sm:text-3xl font-black tracking-tight">آدرس‌ها</h1>
            <p class="mt-1 text-slate-400">لیست آدرس‌های کاربران و مدیریت آن‌ها.</p>
        </div>

    </div>

    <section class="mt-6 glass rounded-2xl p-5">
        <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <h2 class="font-bold text-slate-100">همه آدرس‌ها</h2>
            <div class="relative w-full sm:max-w-xs">
                <span class="pointer-events-none absolute inset-y-0 right-3 flex items-center text-slate-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-4.35-4.35M11 18a7 7 0 100-14 7 7 0 000 14z" />
                    </svg>
                </span>
                <input type="search" placeholder="جستجو در آدرس‌ها…"
                    class="w-full rounded-xl border border-white/10 bg-white/5 py-2 pr-10 pl-3 text-sm text-slate-200 placeholder:text-slate-500 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20" />
            </div>
        </div>

        <div class="mt-4 overflow-x-auto rounded-xl border border-white/5">
            <table class="min-w-full text-sm">
                <thead class="bg-white/5 text-slate-300">
                    <tr class="text-right">
                        <th class="px-4 py-3 font-medium whitespace-nowrap">شناسه</th>
                        <th class="px-4 py-3 font-medium whitespace-nowrap">کاربر</th>
                        <th class="px-4 py-3 font-medium whitespace-nowrap">عنوان</th>
                        <th class="px-4 py-3 font-medium whitespace-nowrap">آدرس</th>
                        <th class="px-4 py-3 font-medium whitespace-nowrap">تاریخ ثبت</th>
                        <th class="px-4 py-3 font-medium text-center whitespace-nowrap">عملیات</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/10">

                    @forelse ($addresses as $address)
                        <tr class="hover:bg-white/5 transition-colors">
                            <td class="px-4 py-3 text-slate-400">{{ $loop->iteration }}</td>
                            <td class="px-4 py-3 font-medium text-slate-100">{{ $address->user->name }}</td>
                            <td class="px-4 py-3 text-slate-400">{{ $address->title }}</td>
                            <td class="px-4 py-3 text-slate-400">{{ $address->address }}</td>
                            <td class="px-4 py-3 text-slate-400 whitespace-nowrap">
                                {{ jdate($address->created_at) }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-4 py-3 text-center text-slate-400">هیچ آدرسی وجود ندارد</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>

        <div class="mt-4 flex items-center justify-between text-sm text-slate-400">
            <span>نمایش ۱ تا ۳ از ۱۵ آدرس</span>
            <div class="flex items-center gap-1">
                <button type="button"
                    class="rounded-lg border border-white/10 bg-white/5 px-3 py-1.5 hover:bg-white/10 transition-colors">قبلی</button>
                <button type="button"
                    class="rounded-lg border border-blue-500/30 bg-blue-500/10 px-3 py-1.5 text-blue-300">۱</button>
                <button type="button"
                    class="rounded-lg border border-white/10 bg-white/5 px-3 py-1.5 hover:bg-white/10 transition-colors">۲</button>
                <button type="button"
                    class="rounded-lg border border-white/10 bg-white/5 px-3 py-1.5 hover:bg-white/10 transition-colors">بعدی</button>
            </div>
        </div>
    </section>
@endsection
