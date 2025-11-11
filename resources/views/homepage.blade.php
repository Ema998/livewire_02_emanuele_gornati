<x-layout>
    <x-header>
        <h1 class="display-5 fw-bold mb-3">Benvenuto nel nostro hub editoriale</h1>
        <p class="lead mx-auto" style="max-width: 720px;">
            Esplora storie, approfondimenti e guide tech curate dalla community. Resta aggiornato, ispira gli altri e condividi le tue idee con un click.
        </p>
        <div class="d-flex justify-content-center gap-3 mt-4 flex-wrap">
            <a href="{{ route('articles.index') }}" class="btn btn-light text-primary fw-semibold">
                <i class="bi bi-collection me-1"></i> Scopri gli articoli
            </a>
            <a href="{{ route('articles.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle me-1"></i> Scrivi un nuovo articolo
            </a>
        </div>
    </x-header>

    <section class="container my-5">
        <div class="row g-4 align-items-center">
            <div class="col-12 col-lg-6">
                <div class="glass-card p-4 h-100">
                    <h2 class="h4 fw-bold mb-3">Un'esperienza di scrittura moderna</h2>
                    <p class="text-secondary mb-4">
                        Il nostro pannello offre un flusso intuitivo per creare, modificare e pubblicare contenuti. Ogni articolo può includere immagini di copertina e testo formattato per migliorare la leggibilità.
                    </p>
                    <ul class="list-unstyled text-secondary">
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Gestisci gli articoli con Livewire in tempo reale</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Interfaccia responsiva ottimizzata per ogni dispositivo</li>
                        <li class="mb-0"><i class="bi bi-check-circle-fill text-success me-2"></i> Libreria Bootstrap &amp; icone integrate per un design rapido</li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="glass-card p-4 h-100 text-center">
                    <h2 class="h4 fw-bold mb-3">Inizia subito</h2>
                    <p class="text-secondary mb-4">Consulta la lista degli articoli già pubblicati oppure contribuisci con il tuo punto di vista.</p>
                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <a href="{{ route('articles.index') }}" class="btn btn-secondary">Vai alla lista</a>
                        <a href="{{ route('articles.create') }}" class="btn btn-primary">Pubblica ora</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layout>