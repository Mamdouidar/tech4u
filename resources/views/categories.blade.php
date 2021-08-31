<x-layout>
    <x-navbar />
    <div class="container">
        <div class="row vh-100 align-items-center justify-content-center">
            @foreach ($categories as $category)
                <x-category-card :category="$category" />
            @endforeach
        </div>
    </div>
</x-layout>