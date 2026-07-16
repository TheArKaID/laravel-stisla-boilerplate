<?php

use Livewire\Component;

new class extends Component
{
    public $notes = [];
    public $newNoteText = '';

    public function mount()
    {
        $this->notes = session()->get('demo_notes', []);
    }

    public function addNote()
    {
        if (empty(trim($this->newNoteText))) {
            $this->dispatch('notify', message: 'Note text cannot be empty! ❌');
            return;
        }

        $this->notes[] = [
            'text' => $this->newNoteText,
            'time' => now()->format('H:i:s'),
        ];

        session()->put('demo_notes', $this->notes);
        $this->newNoteText = '';

        $this->dispatch('notify', message: 'Note added to session memory! 📝');
    }

    public function deleteNote($index)
    {
        if (isset($this->notes[$index])) {
            unset($this->notes[$index]);
            $this->notes = array_values($this->notes); // Re-index array
            session()->put('demo_notes', $this->notes);
            $this->dispatch('notify', message: 'Note deleted successfully! 🗑️');
        }
    }

    public function triggerLivewireToast()
    {
        $this->dispatch('notify', message: 'Livewire 4 event intercepted by Alpine! ⚡');
    }
};
?>

<div class="space-y-6">
    <!-- Alpine.js Toast Container (Floating Top-Right Toast) -->
    <div 
        x-data="{ show: false, message: '' }"
        @notify.window="message = $event.detail.message; show = true; setTimeout(() => show = false, 4000)"
        class="fixed top-6 right-6 z-[2000] flex flex-col gap-2 w-80 pointer-events-none"
    >
        <div 
            x-show="show"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-x-10 scale-95"
            x-transition:enter-end="opacity-100 translate-x-0 scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 translate-x-10 scale-95"
            class="pointer-events-auto px-4 py-3 rounded-xl shadow-2xl flex items-center justify-between border border-slate-700"
            style="background-color: #1e293b !important; color: #f8fafc !important; opacity: 1 !important;"
        >
            <div class="flex items-center gap-3">
                <span class="flex-shrink-0 text-sm">🔔</span>
                <span x-text="message" class="text-xs font-semibold" style="color: #f8fafc !important;"></span>
            </div>
            <button @click="show = false" class="text-slate-400 hover:text-white transition-colors ml-4 text-xs font-bold" style="color: #94a3b8 !important;">&times;</button>
        </div>
    </div>

    <!-- Demonstration Description -->
    <div class="card p-6 bg-white dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 rounded-xl shadow-sm">
        <div class="card__body">
            <h2 class="text-base font-bold text-neutral-800 dark:text-neutral-200 mb-2">Framework Interaction</h2>
            <p class="text-xs text-neutral-500 leading-relaxed mb-4">
                This page demonstrates the seamless combination of **Livewire 4 Single-File Components (SFCs)** and **Alpine.js**. 
                You can write logic and views in a single Blade file while utilizing Alpine.js for instantaneous client-side interactions and event handling.
            </p>
        </div>
    </div>

    <div class="grid grid-cols-12 gap-4">
        <!-- Toast triggers Card -->
        <div class="col-span-12 md:col-span-5">
            <div class="card bg-white dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 rounded-xl shadow-sm p-6 h-full">
                <div class="card__header mb-4">
                    <span class="card__title text-sm font-bold text-neutral-800 dark:text-neutral-200">Alpine & Livewire Toast Triggers</span>
                </div>
                <div class="card__body space-y-4">
                    <div>
                        <p class="text-[10px] text-neutral-400 font-semibold uppercase tracking-wider mb-2">1. Client-Side Only (Alpine.js)</p>
                        <button 
                            @click="$dispatch('notify', { message: 'Alpine.js client-side alert! 🚀' })"
                            class="button button--neutral button--outline w-full justify-center text-xs font-semibold py-2 rounded-lg"
                        >
                            Trigger Alpine Toast
                        </button>
                        <span class="block text-[10px] text-neutral-400 mt-1">Runs immediately in the browser via Alpine's `$dispatch`.</span>
                    </div>

                    <div class="pt-4 border-t border-neutral-100 dark:border-neutral-800">
                        <p class="text-[10px] text-neutral-400 font-semibold uppercase tracking-wider mb-2">2. Server-to-Client Roundtrip (Livewire)</p>
                        <button 
                            wire:click="triggerLivewireToast"
                            class="button button--primary w-full justify-center text-xs font-semibold py-2 rounded-lg"
                        >
                            Trigger Livewire Event Toast
                        </button>
                        <span class="block text-[10px] text-neutral-400 mt-1">Sends a request to the server, which dispatches a browser event back.</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Note memory Card -->
        <div class="col-span-12 md:col-span-7">
            <div class="card bg-white dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-800 rounded-xl shadow-sm p-6">
                <div class="card__header mb-4">
                    <span class="card__title text-sm font-bold text-neutral-800 dark:text-neutral-200">In-Memory Session Notes</span>
                </div>
                <div class="card__body">
                    <!-- Note input form -->
                    <form wire:submit.prevent="addNote" class="flex gap-2 mb-4">
                        <input 
                            type="text" 
                            wire:model="newNoteText" 
                            placeholder="Type a new note here..."
                            class="input flex-1 bg-neutral-50 dark:bg-neutral-800 text-xs px-3 py-2 rounded-lg border border-neutral-200 dark:border-neutral-700"
                        />
                        <button 
                            type="submit" 
                            class="button button--neutral bg-neutral-900 text-white dark:bg-white dark:text-neutral-900 px-4 py-2 rounded-lg text-xs font-semibold hover:opacity-90 transition-opacity"
                        >
                            Add Note
                        </button>
                    </form>

                    <!-- Notes List -->
                    <div class="space-y-2 max-h-60 overflow-y-auto pr-1">
                        @forelse($notes as $index => $note)
                            <div class="flex items-center justify-between p-3 bg-neutral-50 dark:bg-neutral-800/40 rounded-xl border border-neutral-100 dark:border-neutral-800">
                                <div class="flex flex-col gap-1 pr-4">
                                    <span class="text-xs text-neutral-800 dark:text-neutral-200">{{ $note['text'] }}</span>
                                    <span class="text-[9px] text-neutral-400">Added at {{ $note['time'] }}</span>
                                </div>
                                <button 
                                    wire:click="deleteNote({{ $index }})" 
                                    class="text-neutral-400 hover:text-red-500 transition-colors p-1 text-xs"
                                    title="Delete note"
                                >
                                    🗑️
                                </button>
                            </div>
                        @empty
                            <div class="text-center py-6 border-2 border-dashed border-neutral-100 dark:border-neutral-800/60 rounded-xl">
                                <p class="text-xs text-neutral-400">No notes found in session memory. Add one above!</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>