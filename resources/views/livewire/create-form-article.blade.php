<div>
    <x-message />
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-7">
                <div class="glass-card form-card">
                    <h2 class="h4 mb-4 fw-bold">Pubblica un nuovo articolo</h2>
                    <form wire:submit="store" enctype="multipart/form-data" class="needs-validation" novalidate>
                        <div class="form-group mb-3">
                            <label for="titoloArticolo" class="form-label">Titolo articolo</label>
                            <input wire:model="title" type="text" class="form-control" id="titoloArticolo" placeholder="Inserisci un titolo d'impatto" required>
                            <div class="text-danger small mt-1"> @error('title') {{ $message }} @enderror </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="bodyArticolo" class="form-label">Contenuto</label>
                            <textarea wire:model="body" class="form-control" id="bodyArticolo" rows="5" placeholder="Scrivi qui l'articolo" required></textarea>
                            <div class="text-danger small mt-1"> @error('body') {{ $message }} @enderror </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="imgArticolo" class="form-label">Inserisci un'immagine</label>
                            <input wire:model="img" type="file" class="form-control" id="imgArticolo" required>
                            <div class="text-danger small mt-1"> @error('img') {{ $message }} @enderror </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Pubblica articolo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
