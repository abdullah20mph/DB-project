

@extends('mainlayout')

@section('title')
    Admin Page
@endsection


{{-- @section('main-content-section')


<div class="container mt-5">
    <h1 class="mb-4">ADMIN ACCESS - Add Product</h1>
    
    <div class="card">
        <div class="card-body">
            <h5 class="card-title mb-4">Add New Product</h5>
            <form action="{{ route('add-products') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="product_name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="product_name" name="product_name" required maxlength="255">
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label">Category ID</label>
                    <input type="number" class="form-control" id="category_id" name="category_id" required>
                </div>
                <div class="mb-3">
                    <label for="brand" class="form-label">Brand</label>
                    <input type="text" class="form-control" id="brand" name="brand" required maxlength="255">
                </div>
                <button type="submit" class="btn btn-primary">Add Product</button>
            </form>
        </div>
    </div>
</div>

<style>
    .container {
        max-width: 600px;
    }
    .card {
        border: none;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }
    .card-title {
        color: #333;
        font-weight: bold;
    }
    .form-label {
        font-weight: 500;
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        padding: 10px 20px;
        font-weight: 500;
    }
    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
</style>


@endsection --}}

@section('main-content-section')
<div class="container mt-5">
    <h1 class="mb-4">ADMIN ACCESS - Product Management</h1>
    
    

    <!-- Add Product Form -->
    <div class="card">
        <div class="card-body">
            <h5 class="card-title mb-4">Add New Product</h5>
            <form action="{{ route('add-products') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="product_name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="product_name" name="product_name" required maxlength="255">
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label">Category ID</label>
                    <input type="number" class="form-control" id="category_id" name="category_id" required>
                </div>
                <div class="mb-3">
                    <label for="brand" class="form-label">Brand</label>
                    <input type="text" class="form-control" id="brand" name="brand" required maxlength="255">
                </div>
                <button type="submit" class="btn btn-primary">Add Product</button>
            </form>
        </div>
    </div>
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

{{-- {{route('see-products')}} --}}
    {{-- prdouct see --}}
    
    <div class="container mt-4">
        <h4 class="text-center">Product Category</h4>
    
        <!-- Category List -->
        <div class="d-flex justify-content-center mb-4">
            <ul class="list-group w-50">
                @foreach ($products as $category => $items)
                    <li class="list-group-item category-item" data-category="{{ $category }}">
                        {{ $category }}
                    </li>
                @endforeach
            </ul>
        </div>
    
        <!-- Product List (Initially Hidden) -->
        <div id="productList" class="mt-4" style="display: none;">
            <h5 id="categoryTitle" class="mb-3 text-center"></h5>
            <ul class="list-group" id="productItems">
                <!-- Products will be dynamically added here -->
            </ul>
        </div>
    </div>



<script>

    document.addEventListener('DOMContentLoaded', () => {
        const categoryItems = document.querySelectorAll('.category-item');
        const productList = document.getElementById('productList');
        const categoryTitle = document.getElementById('categoryTitle');
        const productItems = document.getElementById('productItems');

        // Data from Blade (passed from PHP)
        const products = @json($products);

        categoryItems.forEach(item => {
            item.addEventListener('click', () => {
                const category = item.getAttribute('data-category');
                const productData = products[category];

                // Update the UI
                categoryTitle.textContent = category;
                productItems.innerHTML = '';

                productData.forEach(product => {
                    const li = document.createElement('li');
                    li.className = 'list-group-item';
                    li.innerHTML = `
                        <span><strong>${product.product_name}</strong> by ${product.brand}</span>
                        <div>
                            <button class="btn btn-danger btn-sm delete-btn" data-id="${product.id}">Delete</button>
                            <button class="btn btn-warning btn-sm update-btn" data-id="${product.id}">Update</button>
                        </div>
                    `;
                    productItems.appendChild(li);
                });

                productList.style.display = 'block';

                //  // Attach delete event handlers
                //  document.querySelectorAll('.delete-btn').forEach(button => {
                //     button.addEventListener('click', (e) => {
                //         const productId = e.target.getAttribute('data-id');
                //         deleteProduct(productId);
                //     });
                // });

                // // Attach update event handlers
                // document.querySelectorAll('.update-btn').forEach(button => {
                //     button.addEventListener('click', (e) => {
                //         const productId = e.target.getAttribute('data-id');
                //         showUpdateForm(productId);
                //     });
            });
        });
    });
</script>

<style>
    .container {
        max-width: 800px;
    }
    .card {
        border: none;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }
    .card-title {
        color: #333;
        font-weight: bold;
    }
    .form-label {
        font-weight: 500;
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        padding: 10px 20px;
        font-weight: 500;
    }
    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
    .dropdown-menu {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .list-group-item {
        border-left: none;
        border-right: none;
    }
</style>

@endsection