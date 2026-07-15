<aside id="site-sidebar" class="site-sidebar border-r border-neutral-200 dark:border-neutral-800 bg-white dark:bg-neutral-900" data-stisla-sidebar>
    <nav class="sidebar sidebar--sm flex flex-col h-full" aria-label="Sidebar">
        <div class="sidebar__content flex flex-col h-full py-4 px-2">
            <!-- Sidebar Brand (Matches navbar style when expanded, hides when collapsed) -->
            <div class="sidebar__header px-4 mb-6">
                <a class="sidebar__brand flex items-center font-bold text-lg text-neutral-900 dark:text-neutral-100" href="/">
                    <svg class="site-navbar__brand-mark mr-2 shrink-0" viewBox="0 0 512 512" aria-hidden="true" focusable="false" width="28" height="28">
                        <rect class="site-navbar__brand-tile" width="512" height="512" rx="112" fill="#6777ef"></rect>
                        <path class="site-navbar__brand-s" d="M 392 144 H 200 A 56 56 0 0 0 200 256 H 312 A 56 56 0 0 1 312 368 H 120" fill="none" stroke="#fafafa" stroke-width="76" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span class="sidebar__brand-text transition-opacity duration-200">Stisla</span>
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="sidebar__menu flex-1 overflow-y-auto space-y-4">
                <div class="sidebar__group">
                    <span class="sidebar__group-title px-4 text-[10px] font-bold text-neutral-400 dark:text-neutral-500 uppercase tracking-wider block mb-2">Main</span>
                    <ul class="sidebar__list space-y-1">
                        <li class="sidebar__item">
                            <a class="sidebar__button flex items-center px-4 py-2 rounded-lg text-xs font-semibold hover:bg-neutral-100 dark:hover:bg-neutral-800 text-neutral-700 dark:text-neutral-300 transition-colors" href="/" aria-current="page">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layout-dashboard mr-3 shrink-0"><rect width="7" height="9" x="3" y="3" rx="1"></rect><rect width="7" height="5" x="14" y="3" rx="1"></rect><rect width="7" height="9" x="14" y="12" rx="1"></rect><rect width="7" height="5" x="3" y="16" rx="1"></rect></svg>
                                <span class="sidebar__label-text">Dashboard</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Sidebar Footer / Collapse Trigger -->
            <div class="sidebar__footer mt-auto pt-4 border-t border-neutral-100 dark:border-neutral-800">
                <button type="button" class="sidebar__button flex items-center justify-center w-full px-4 py-2.5 rounded-lg text-xs font-semibold bg-neutral-50 dark:bg-neutral-800 hover:bg-neutral-100 dark:hover:bg-neutral-700 text-neutral-700 dark:text-neutral-300 transition-colors border border-neutral-200 dark:border-neutral-800" data-stisla-sidebar-toggle="collapse" aria-controls="site-sidebar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevrons-left shrink-0 mr-2"><path d="m11 17-5-5 5-5"></path><path d="m18 17-5-5 5-5"></path></svg>
                    <span class="sidebar__label-text">Collapse</span>
                </button>
            </div>
        </div>
    </nav>
</aside>
