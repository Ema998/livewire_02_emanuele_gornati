<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="glass-card table-card">
                <div class="card-header d-flex flex-wrap align-items-center justify-content-between px-4 py-3">
                    <div>
                        <h2 class="h5 mb-1 text-uppercase text-muted">Archivio articoli</h2>
                        <p class="mb-0 text-secondary">{{ $articles->count() }} articoli pubblicati</p>
                    </div>
                    <a href="{{ route('articles.create') }}" class="btn btn-primary btn-sm mt-3 mt-sm-0">
                        <i class="bi bi-plus-circle me-1"></i> Nuovo articolo
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover align-middle w-100">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Titolo</th>
                                <th scope="col" class="w-50">Descrizione</th>
                                <th scope="col">Anteprima</th>
                                <th scope="col" class="text-center">Azioni</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                                <tr>
                                    <th scope="row">{{ $article->id }}</th>
                                    <td class="fw-semibold text-capitalize">{{ $article->title }}</td>
                                    <td class="text-secondary">{{ \Illuminate\Support\Str::limit($article->body, 120) }}</td>
                                    <td>
                                        <img src="{{ Storage::url($article->img) }}?v={{ time() }}" alt="{{ $article->title }}" class="img-fluid rounded shadow-sm" style="max-width: 90px;">
                                    </td>
                                    <td class="text-end">
                                        <div class="btn-group" role="group" aria-label="Actions">
                                            <a href="{{ route('articles.show', $article) }}" class="btn btn-primary btn-sm">Dettagli</a>
                                            <a href="{{ route('articles.edit', $article) }}" class="btn btn-secondary btn-sm">Modifica</a>
                                            <button wire:click="destroy({{ $article->id }})" class="btn btn-danger btn-sm">Elimina</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
