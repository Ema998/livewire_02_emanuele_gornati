<div class="container">
    <div class="glass-card p-4 p-md-5">
        <div class="row g-4 align-items-center">
            <div class="col-12 col-lg-5">
                <div class="detail-card">
                    <img src="{{ Storage::url ($article->img) }}" class="img-fluid" alt="{{ $article->title }}">
                </div>
            </div>
            <div class="col-12 col-lg-7 detail-copy">
                <h3 class="mb-3">{{ $article->title }}</h3>
                <p class="mb-4">{{ $article->body }}</p>
                <div class="d-flex flex-wrap gap-2">
                    <a href="{{ route('articles.edit', $article) }}" class="btn btn-primary">
                        <i class="bi bi-pencil-square me-1"></i> Modifica articolo
                    </a>
                    <a href="{{ route('articles.index') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left-circle me-1"></i> Torna alla lista
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
