@if ($paginator->hasPages())
    <nav role="navigation" aria-label="ناوبری صفحه‌بندی" class="mt-4">

        <div class="flex items-center justify-between gap-2 sm:hidden">
            @if ($paginator->onFirstPage())
                <span
                    class="inline-flex flex-1 items-center justify-center rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm font-medium text-slate-500 cursor-not-allowed">
                    قبلی
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                    class="inline-flex flex-1 items-center justify-center rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm font-medium text-slate-200 transition-colors hover:bg-white/10 hover:text-slate-100 focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                    قبلی
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                    class="inline-flex flex-1 items-center justify-center rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm font-medium text-slate-200 transition-colors hover:bg-white/10 hover:text-slate-100 focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                    بعدی
                </a>
            @else
                <span
                    class="inline-flex flex-1 items-center justify-center rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm font-medium text-slate-500 cursor-not-allowed">
                    بعدی
                </span>
            @endif
        </div>

        <div class="hidden flex-col gap-3 sm:flex sm:flex-row sm:items-center sm:justify-between">
            <p class="text-sm text-slate-400">
                نمایش
                @if ($paginator->firstItem())
                    <span class="font-medium text-slate-200">{{ $paginator->firstItem() }}</span>
                    تا
                    <span class="font-medium text-slate-200">{{ $paginator->lastItem() }}</span>
                @else
                    <span class="font-medium text-slate-200">{{ $paginator->count() }}</span>
                @endif
                از
                <span class="font-medium text-slate-200">{{ $paginator->total() }}</span>
                نتیجه
            </p>

            <div class="inline-flex items-center gap-1">
                @if ($paginator->onFirstPage())
                    <span aria-disabled="true" aria-label="صفحه قبلی">
                        <span
                            class="inline-flex size-9 items-center justify-center rounded-lg border border-white/10 bg-white/5 text-slate-500 cursor-not-allowed"
                            aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 18l6-6-6-6" />
                            </svg>
                        </span>
                    </span>
                @else
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                        class="inline-flex size-9 items-center justify-center rounded-lg border border-white/10 bg-white/5 text-slate-400 transition-colors hover:bg-blue-500/15 hover:text-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-500/20"
                        aria-label="صفحه قبلی">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 18l6-6-6-6" />
                        </svg>
                    </a>
                @endif

                @foreach ($elements as $element)
                    @if (is_string($element))
                        <span aria-disabled="true">
                            <span
                                class="inline-flex min-w-9 items-center justify-center px-2 py-2 text-sm font-medium text-slate-500">{{ $element }}</span>
                        </span>
                    @endif

                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <span aria-current="page">
                                    <span
                                        class="inline-flex min-w-9 items-center justify-center rounded-lg bg-gradient-to-l from-blue-600 to-indigo-700 px-3 py-2 text-sm font-medium text-white shadow-sm">
                                        {{ $page }}
                                    </span>
                                </span>
                            @else
                                <a href="{{ $url }}"
                                    class="inline-flex min-w-9 items-center justify-center rounded-lg border border-white/10 bg-white/5 px-3 py-2 text-sm font-medium text-slate-300 transition-colors hover:bg-white/10 hover:text-slate-100 focus:outline-none focus:ring-2 focus:ring-blue-500/20"
                                    aria-label="رفتن به صفحه {{ $page }}">
                                    {{ $page }}
                                </a>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                        class="inline-flex size-9 items-center justify-center rounded-lg border border-white/10 bg-white/5 text-slate-400 transition-colors hover:bg-blue-500/15 hover:text-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-500/20"
                        aria-label="صفحه بعدی">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 18l-6-6 6-6" />
                        </svg>
                    </a>
                @else
                    <span aria-disabled="true" aria-label="صفحه بعدی">
                        <span
                            class="inline-flex size-9 items-center justify-center rounded-lg border border-white/10 bg-white/5 text-slate-500 cursor-not-allowed"
                            aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 18l-6-6 6-6" />
                            </svg>
                        </span>
                    </span>
                @endif
            </div>
        </div>
    </nav>
@endif
