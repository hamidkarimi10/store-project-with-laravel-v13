@extends('admin.layouts.master')

@section('content')
    <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <h1 class="text-2xl sm:text-3xl font-black tracking-tight">شهرها</h1>
            <p class="mt-1 text-slate-400">لیست شهرها و مدیریت آن‌ها.</p>
        </div>

    </div>

    <section class="mt-6 glass rounded-2xl p-5">
        <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <h2 class="font-bold text-slate-100">همه شهرها</h2>
            <div class="relative w-full sm:max-w-xs">
                <span class="pointer-events-none absolute inset-y-0 right-3 flex items-center text-slate-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-4.35-4.35M11 18a7 7 0 100-14 7 7 0 000 14z" />
                    </svg>
                </span>
                <input type="search" placeholder="جستجو در شهرها…"
                    class="w-full rounded-xl border border-white/10 bg-white/5 py-2 pr-10 pl-3 text-sm text-slate-200 placeholder:text-slate-500 focus:border-blue-500/50 focus:outline-none focus:ring-2 focus:ring-blue-500/20" />
            </div>
        </div>

        <div class="mt-4 overflow-x-auto rounded-xl border border-white/5">
            <table class="min-w-full text-sm">
                <thead class="bg-white/5 text-slate-300">
                    <tr class="text-right">
                        <th class="px-4 py-3 font-medium whitespace-nowrap">شناسه</th>
                        <th class="px-4 py-3 font-medium whitespace-nowrap">نام شهر</th>
                        <th class="px-4 py-3 font-medium whitespace-nowrap">وضعیت</th>
                        <th class="px-4 py-3 font-medium text-center whitespace-nowrap">عملیات</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/10">
                    @forelse ($cities as $city)
                        <tr class="hover:bg-white/5 transition-colors">
                            <td class="px-4 py-3 text-slate-400">{{ $loop->iteration }}</td>
                            <td class="px-4 py-3 font-medium text-slate-100">{{ $city->name }}</td>
                            <td class="px-4 py-3 text-slate-400">
                                @if ($city->status == 1)
                                    <span class="rounded-lg bg-green-500/10 px-2 py-1 text-xs text-green-300">فعال</span>
                                @else
                                    <span class="rounded-lg bg-red-500/10 px-2 py-1 text-xs text-red-300">غیرفعال</span>
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('admin.cities.changeStatus', $city->id) }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <button type="submit"
                                        class="inline-flex size-9 items-center justify-center rounded-lg text-slate-400 hover:bg-emerald-500/15 hover:text-emerald-300 transition-colors">
                                        @if ($city->status == 1)
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="1.6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                            </svg>
                                        @else
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="1.6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        @endif
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-4 py-3 text-center text-slate-400">هیچ شهری وجود ندارد</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>

        <div class="mt-4 flex items-center justify-between text-sm text-slate-400">
            <span>نمایش ۱ تا ۳ از ۳۱ شهر</span>
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
