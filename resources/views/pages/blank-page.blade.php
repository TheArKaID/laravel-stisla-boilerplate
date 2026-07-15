@extends('layouts.app')

@section('title', 'Blank Page')

@push('styles')
    <!-- CSS -->
@endpush

@section('main')
    <div class="page p-6 space-y-6">
        <header class="page__header flex items-center justify-between border-b border-neutral-100 dark:border-neutral-800 pb-4">
            <div class="page__headline">
                <h1 class="page__title text-2xl font-bold text-neutral-900 dark:text-neutral-100">Blank Page</h1>
                <p class="page__description text-xs text-neutral-500 mt-1">This is a blank page layout in Stisla v3 built on Tailwind CSS.</p>
            </div>
            <div class="page__action">
                <button type="button" class="button button--primary button--sm flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-primary text-white font-medium text-xs hover:opacity-90 transition-opacity">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus size-3.5"><path d="M5 12h14"></path><path d="M12 5v14"></path></svg>
                    <span>New Action</span>
                </button>
            </div>
        </header>

        <div class="page__body">
            <section class="page__section bg-white dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 rounded-xl p-6 shadow-sm min-h-64 flex flex-col items-center justify-center text-center">
                <div class="max-w-sm">
                    <div class="w-12 h-12 rounded-full bg-neutral-100 dark:bg-neutral-800 text-neutral-400 dark:text-neutral-500 flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file size-6"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path></svg>
                    </div>
                    <h3 class="text-sm font-semibold text-neutral-900 dark:text-neutral-100 mb-1">Empty Page Content</h3>
                    <p class="text-xs text-neutral-500">You can start placing your dynamic sections, cards, widgets, and charts in this area.</p>
                </div>
            </section>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- JS -->
@endpush
