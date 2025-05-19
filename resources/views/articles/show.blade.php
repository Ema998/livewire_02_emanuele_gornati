<x-layout>
    <x-header>
        <h1 class="text-center">{{ $article->name }}</h1>
    </x-header>
    <livewire:show-article :article="$article" />
</x-layout>