<div wire:key="edit-article-{{ $articleId }}">
    <x-message />
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-7">
                <div class="glass-card form-card">
                    <h2 class="h4 mb-4 fw-bold">Aggiorna articolo</h2>
                    <form wire:submit.prevent="updateArticle" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label for="titoloArticolo" class="form-label">Titolo articolo</label>
                            <input wire:model="title" type="text" class="form-control" id="titoloArticolo" required>
                            <div class="text-danger small mt-1"> @error('title') {{ $message }} @enderror </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="bodyArticolo" class="form-label">Contenuto</label>
                            <textarea wire:model="body" class="form-control" id="bodyArticolo" rows="5" required></textarea>
                            <div class="text-danger small mt-1"> @error('body') {{ $message }} @enderror </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="imgArticolo" class="form-label">Inserisci un'immagine</label>
                            <input wire:model="img" type="file" class="form-control" id="imgArticolo">
                            <div class="text-danger small mt-1"> @error('img') {{ $message }} @enderror </div>
                            <div class="d-flex gap-3 flex-wrap mt-3">
                                @if ($img)
                                    <div>
                                        <span class="d-block text-secondary small mb-2">Nuova anteprima</span>
                                        <img src="{{ $img->temporaryUrl() }}" alt="Immagine articolo" class="img-fluid rounded shadow-sm" style="max-width: 160px;">
                                    </div>
                                @endif
                                @if ($existImgPath)
                                    <div>
                                        <span class="d-block text-secondary small mb-2">Immagine corrente</span>
                                        <img src="{{ Storage::url($existImgPath) }}" alt="Anteprima immagine" class="img-fluid rounded shadow-sm" style="max-width: 160px;">
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="d-flex justify-content-between flex-wrap gap-2">
                            <a href="{{ route('articles.index') }}" class="btn btn-secondary">Annulla</a>
                            <button type="submit" class="btn btn-primary">Salva modifiche</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
