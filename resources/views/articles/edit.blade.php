<x-layout>
    <x-header>
        <h1 class="display-6 fw-bold mb-3">Modifica articolo</h1>
        <p class="lead mx-auto" style="max-width: 680px;">
            Aggiorna i contenuti del tuo articolo, sostituisci l'immagine o perfeziona i dettagli prima di tornare online.
        </p>
    </x-header>
    <section class="py-4">
        <livewire:edit-article :articleId="$article->id" />
    </section>
</x-layout>