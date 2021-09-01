<x-layout>
    <x-dashboard-navbar />
    <div class="container ">
        <h1 class="text-center my-5">Edit Product</h1>
        <form class="col bg-dark rounded mx-2 text-white p-3" action="/admin/{{ $product->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
            <div class="form-group">
                <label for="name">Product Name: </label>
                <input type="text" name="name" class="form-control border border-light bg-dark text-white mb-2" id="name" aria-describedby="nameHelp" value="{{$product->name}}" required>
                @error('name')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Description :</label>
                <textarea name="description" class="form-control border border-light bg-dark text-white mb-2" id="description" aria-describedby="emailHelp" required>{{$product->description}}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Price :</label>
                <input type="number" name="price" class="form-control border border-light bg-dark text-white mb-2" id="price" value="{{$product->price}}" required>
                @error('price')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="amount">Amount Available :</label>
                <input type="number" name="amount" class="form-control border border-light bg-dark text-white mb-2" id="amount" value="{{$product->amount}}" required>
                @error('amount')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="src">Image :</label>
                <input type="file" name="src" class="form-control border border-light bg-dark text-white mb-2" id="src" placeholder="Upload an Image">
            </div>
            <div class="form-group">
                <label for="category_id">Category :</label>
                <select name="category_id" id="category_id">
                    @php
                        $categories = \App\Models\Category::all();
                    @endphp
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-dark btn-outline-light mt-2">Update Product</button>
        </form>
    </div>   
</x-layout>