<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Counter Page</h1>
        </div>

        <div class="card card-body" style="display: inherit; text-align: center">
            <h1>{{ $count }}</h1>
         
            <button class="btn btn-sm btn-success" wire:click="increment">+</button>
         
            <button class="btn btn-sm btn-danger" wire:click="decrement">-</button>
        </div>
    </section>
</div>