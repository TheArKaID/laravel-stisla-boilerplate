<header class="site-navbar border-b border-neutral-200 dark:border-neutral-800 bg-white dark:bg-neutral-900 text-neutral-900 dark:text-neutral-100 z-50">
    <nav class="navbar site-navbar__inner flex items-center justify-between px-6 py-2 flex-nowrap" aria-label="Primary">
        <!-- Left Side: Brand and Mobile Toggle -->
        <div class="flex items-center gap-4 lg:w-4/12">
            <!-- Brand -->
            <a href="/" class="navbar__brand site-navbar__brand flex items-center font-bold text-lg select-none">
                <svg class="site-navbar__brand-mark mr-2" viewBox="0 0 512 512" aria-hidden="true" focusable="false" width="28" height="28">
                    <rect class="site-navbar__brand-tile" width="512" height="512" rx="112" fill="#6777ef"></rect>
                    <path class="site-navbar__brand-s" d="M 392 144 H 200 A 56 56 0 0 0 200 256 H 312 A 56 56 0 0 1 312 368 H 120" fill="none" stroke="#fafafa" stroke-width="76" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <span>Stisla</span>
            </a>
        </div>

        <!-- Center: Search Input (Hidden on mobile) -->
        <div id="site-navbar-menu" class="navbar__menu hidden md:flex lg:w-4/12 justify-center">
            <div class="relative w-72">
                <input class="w-full h-9 pl-9 pr-3 rounded-lg border border-neutral-300 dark:border-neutral-700 bg-neutral-50 dark:bg-neutral-800 text-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all" type="search" placeholder="Search...">
                <span class="absolute left-3 top-2.5 text-neutral-400">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search size-4"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg>
                </span>
            </div>
        </div>

        <!-- Right Side: Action Badges and User profile -->
        <div class="site-navbar__action flex items-center justify-end gap-3 lg:w-4/12 ms-auto">
            <!-- Messages Dropdown -->
            <div class="menu relative">
                <button type="button" class="button button--neutral button--ghost button--sm button--icon-only relative rounded-lg hover:bg-neutral-100 dark:hover:bg-neutral-800 text-neutral-600 dark:text-neutral-400" id="messages-trigger" data-stisla-menu-trigger="messages-popup">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
                    <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-primary rounded-full animate-pulse"></span>
                </button>
                <div class="menu__popup w-80 p-2 bg-white dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 rounded-xl shadow-xl z-50 mt-1" id="messages-popup" role="menu" data-stisla-menu>
                    <div class="px-4 py-2 border-b border-neutral-100 dark:border-neutral-800 flex justify-between items-center">
                        <span class="font-semibold text-sm">Messages</span>
                        <a href="#" class="text-xs text-primary hover:underline">Mark all as read</a>
                    </div>
                    <div class="py-1 max-h-64 overflow-y-auto">
                        <a href="#" class="flex items-center gap-3 px-4 py-2.5 hover:bg-neutral-50 dark:hover:bg-neutral-800/50 rounded-lg transition-colors" role="menuitem">
                            <img src="{{ asset('img/avatar/avatar-1.png') }}" class="w-9 h-9 rounded-full" alt="Kusnaedi">
                            <div class="flex-1 min-w-0">
                                <div class="flex justify-between items-baseline mb-0.5">
                                    <span class="font-medium text-xs">Kusnaedi</span>
                                    <span class="text-[10px] text-neutral-400">10h ago</span>
                                </div>
                                <p class="text-xs text-neutral-500 dark:text-neutral-400 truncate">Hello, Bro!</p>
                            </div>
                        </a>
                        <a href="#" class="flex items-center gap-3 px-4 py-2.5 hover:bg-neutral-50 dark:hover:bg-neutral-800/50 rounded-lg transition-colors" role="menuitem">
                            <img src="{{ asset('img/avatar/avatar-2.png') }}" class="w-9 h-9 rounded-full" alt="Dedik">
                            <div class="flex-1 min-w-0">
                                <div class="flex justify-between items-baseline mb-0.5">
                                    <span class="font-medium text-xs">Dedik Sugiharto</span>
                                    <span class="text-[10px] text-neutral-400">12h ago</span>
                                </div>
                                <p class="text-xs text-neutral-500 dark:text-neutral-400 truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            </div>
                        </a>
                    </div>
                    <div class="px-4 py-2 border-t border-neutral-100 dark:border-neutral-800 text-center">
                        <a href="#" class="text-xs text-neutral-500 hover:text-primary transition-colors flex justify-center items-center gap-1">
                            <span>View All Messages</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right size-3"><path d="m9 18 6-6-6-6"></path></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Notifications Dropdown -->
            <div class="menu relative">
                <button type="button" class="button button--neutral button--ghost button--sm button--icon-only relative rounded-lg hover:bg-neutral-100 dark:hover:bg-neutral-800 text-neutral-600 dark:text-neutral-400" id="notifications-trigger" data-stisla-menu-trigger="notifications-popup">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bell"><path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"></path><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"></path></svg>
                    <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-primary rounded-full animate-pulse"></span>
                </button>
                <div class="menu__popup w-80 p-2 bg-white dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 rounded-xl shadow-xl z-50 mt-1" id="notifications-popup" role="menu" data-stisla-menu>
                    <div class="px-4 py-2 border-b border-neutral-100 dark:border-neutral-800 flex justify-between items-center">
                        <span class="font-semibold text-sm">Notifications</span>
                        <a href="#" class="text-xs text-primary hover:underline">Mark all as read</a>
                    </div>
                    <div class="py-1 max-h-64 overflow-y-auto">
                        <a href="#" class="flex items-start gap-3 px-4 py-2.5 hover:bg-neutral-50 dark:hover:bg-neutral-800/50 rounded-lg transition-colors" role="menuitem">
                            <div class="w-8 h-8 rounded-full bg-primary/10 dark:bg-primary/20 text-primary flex items-center justify-center shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-code size-4"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-xs text-neutral-800 dark:text-neutral-200 font-medium">Template update is available now!</p>
                                <span class="text-[10px] text-neutral-400">2 min ago</span>
                            </div>
                        </a>
                        <a href="#" class="flex items-start gap-3 px-4 py-2.5 hover:bg-neutral-50 dark:hover:bg-neutral-800/50 rounded-lg transition-colors" role="menuitem">
                            <div class="w-8 h-8 rounded-full bg-success/10 dark:bg-success/20 text-success flex items-center justify-center shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check size-4"><path d="M20 6 9 17l-5-5"></path></svg>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-xs text-neutral-800 dark:text-neutral-200"><b>Kusnaedi</b> moved task to <b>Done</b></p>
                                <span class="text-[10px] text-neutral-400">12h ago</span>
                            </div>
                        </a>
                    </div>
                    <div class="px-4 py-2 border-t border-neutral-100 dark:border-neutral-800 text-center">
                        <a href="#" class="text-xs text-neutral-500 hover:text-primary transition-colors flex justify-center items-center gap-1">
                            <span>View All Notifications</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right size-3"><path d="m9 18 6-6-6-6"></path></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- User Dropdown -->
            <div class="menu relative">
                <button type="button" class="flex items-center gap-2 px-3 py-1.5 rounded-lg hover:bg-neutral-100 dark:hover:bg-neutral-800 text-neutral-700 dark:text-neutral-300 transition-colors" id="user-trigger" data-stisla-menu-trigger="user-popup">
                    <img src="{{ asset('img/avatar/avatar-1.png') }}" class="w-7 h-7 rounded-full object-cover border border-neutral-200 dark:border-neutral-700" alt="Hi, Ujang Maman">
                    <span class="hidden sm:inline text-xs font-semibold">Ujang Maman</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down size-3.5"><path d="m6 9 6 6 6-6"></path></svg>
                </button>
                <div class="menu__popup w-56 p-2 bg-white dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 rounded-xl shadow-xl z-50 mt-1" id="user-popup" role="menu" data-stisla-menu>
                    <div class="px-4 py-2.5 border-b border-neutral-100 dark:border-neutral-800">
                        <span class="block text-[10px] text-neutral-400 font-medium uppercase tracking-wider mb-0.5">Session info</span>
                        <span class="text-xs text-neutral-500">Logged in 5 min ago</span>
                    </div>
                    <div class="py-1">
                        <a href="#" class="flex items-center gap-2 px-4 py-2 hover:bg-neutral-50 dark:hover:bg-neutral-800/50 rounded-lg text-xs font-medium transition-colors" role="menuitem">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user size-4 text-neutral-400"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            <span>Profile</span>
                        </a>
                        <a href="#" class="flex items-center gap-2 px-4 py-2 hover:bg-neutral-50 dark:hover:bg-neutral-800/50 rounded-lg text-xs font-medium transition-colors" role="menuitem">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap size-4 text-neutral-400"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                            <span>Activities</span>
                        </a>
                        <a href="#" class="flex items-center gap-2 px-4 py-2 hover:bg-neutral-50 dark:hover:bg-neutral-800/50 rounded-lg text-xs font-medium transition-colors" role="menuitem">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-settings size-4 text-neutral-400"><path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.1a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                            <span>Settings</span>
                        </a>
                    </div>
                    <hr class="menu__separator border-neutral-100 dark:border-neutral-800 my-1">
                    <div class="py-0.5">
                        <a href="#" class="flex items-center gap-2 px-4 py-2 hover:bg-red-50 dark:hover:bg-red-950/20 rounded-lg text-xs font-semibold text-red-600 dark:text-red-400 transition-colors" role="menuitem">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-out size-4"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" x2="9" y1="12" y2="12"></line></svg>
                            <span>Logout</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
