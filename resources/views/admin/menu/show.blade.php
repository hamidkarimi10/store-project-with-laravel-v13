@extends('admin.layouts.master')

@section('content')
    <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <h1 class="text-2xl sm:text-3xl font-black tracking-tight">جزئیات منو</h1>
            <p class="mt-1 text-slate-400">مشاهده اطلاعات منوی انتخاب‌شده.</p>
        </div>
        <div class="flex flex-wrap items-center gap-2">
            <a href="{{ route('admin.menus.edit', $menu->id) }}"
                class="inline-flex items-center justify-center gap-2 rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm font-medium text-slate-300 hover:bg-white/10 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2v-5M18.5 2.5a2.12 2.12 0 013 3L12 15l-4 1 1-4 9.5-9.5z" />
                </svg>
                ویرایش منو
            </a>
            <a href="{{ route('admin.menus.index') }}"
                class="inline-flex items-center justify-center gap-2 rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm font-medium text-slate-300 hover:bg-white/10 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
                بازگشت به لیست
            </a>
        </div>
    </div>

    <section class="mt-6 glass rounded-2xl p-5 sm:p-6">
        <div class="mb-6 border-b border-white/10 pb-4">
            <h2 class="font-bold text-slate-100">اطلاعات منو</h2>
            <p class="mt-1 text-sm text-slate-400">جزئیات منوی ثبت‌شده.</p>
        </div>

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
            <div class="space-y-2">
                <span class="block text-sm font-medium text-slate-400">عنوان</span>
                <p class="rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200">{{ $menu->title }}</p>
            </div>
            <div class="space-y-2">
                <span class="block text-sm font-medium text-slate-400">لینک</span>
                <p class="rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm font-mono text-blue-200">{{ $menu->url }}</p>
            </div>
            <div class="space-y-2">
                <span class="block text-sm font-medium text-slate-400">منوی والد</span>
                <p class="rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200">{{ $menu->parent?->title ?? '—' }}</p>
            </div>
            <div class="space-y-2">
                <span class="block text-sm font-medium text-slate-400">موقعیت</span>
                <p class="rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200">{{ $menu->locationLabel() }}</p>
            </div>
            <div class="space-y-2">
                <span class="block text-sm font-medium text-slate-400">ترتیب نمایش</span>
                <p class="rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200">{{ $menu->sort_order }}</p>
            </div>
            <div class="space-y-2">
                <span class="block text-sm font-medium text-slate-400">نحوه باز شدن</span>
                <p class="rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200">
                    {{ $menu->target === '_blank' ? 'صفحه جدید' : 'همان صفحه' }}
                </p>
            </div>
            <div class="space-y-2">
                <span class="block text-sm font-medium text-slate-400">وضعیت</span>
                <p class="rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200">
                    @if ($menu->status)
                        <span class="rounded-lg bg-green-500/10 px-2 py-1 text-xs text-green-300">فعال</span>
                    @else
                        <span class="rounded-lg bg-rose-500/10 px-2 py-1 text-xs text-rose-300">غیرفعال</span>
                    @endif
                </p>
            </div>
            <div class="space-y-2">
                <span class="block text-sm font-medium text-slate-400">آیکون</span>
                <p class="rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm font-mono text-slate-200">{{ $menu->icon ?? '—' }}</p>
            </div>
            <div class="space-y-2">
                <span class="block text-sm font-medium text-slate-400">تاریخ ثبت</span>
                <p class="rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200">{{ jdate($menu->created_at) }}</p>
            </div>
            <div class="space-y-2">
                <span class="block text-sm font-medium text-slate-400">آخرین بروزرسانی</span>
                <p class="rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-slate-200">{{ jdate($menu->updated_at) }}</p>
            </div>
        </div>
    </section>

    <section class="mt-6 glass rounded-2xl p-5">
        <div class="mb-4 border-b border-white/10 pb-4">
            <h2 class="font-bold text-slate-100">زیرمنوها</h2>
            <p class="mt-1 text-sm text-slate-400">منوهای فرزند این آیتم</p>
        </div>
        <div class="overflow-x-auto rounded-xl border border-white/5">
            <table class="min-w-full text-sm">
                <thead class="bg-white/5 text-slate-300">
                    <tr class="text-right">
                        <th class="px-4 py-3 font-medium">عنوان</th>
                        <th class="px-4 py-3 font-medium">لینک</th>
                        <th class="px-4 py-3 font-medium">ترتیب</th>
                        <th class="px-4 py-3 font-medium">وضعیت</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/10">
                    @forelse ($menu->children as $child)
                        <tr class="hover:bg-white/5 transition-colors">
                            <td class="px-4 py-3 font-medium text-slate-100">{{ $child->title }}</td>
                            <td class="px-4 py-3 font-mono text-xs text-slate-400">{{ $child->url }}</td>
                            <td class="px-4 py-3 text-slate-400">{{ $child->sort_order }}</td>
                            <td class="px-4 py-3">
                                @if ($child->status)
                                    <span class="rounded-lg bg-green-500/10 px-2 py-1 text-xs text-green-300">فعال</span>
                                @else
                                    <span class="rounded-lg bg-rose-500/10 px-2 py-1 text-xs text-rose-300">غیرفعال</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-4 py-3 text-center text-slate-400">زیرمنویی ثبت نشده است</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
@endsection
