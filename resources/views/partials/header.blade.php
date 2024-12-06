<style>
    /* Navbar Styles */
    .navbar {
        background: linear-gradient(to right, #2874f0, #0056b3);
        padding: 10px 0;
    }
    .navbar-brand {
        color: white;
        font-weight: bold;
        font-size: 26px;
    }
    .navbar .search-box .form-control {
        border: none;
        border-radius: 0;
        box-shadow: none;
    }
    .search-box {
      max-width: 500px;
      margin: 20px auto;
    }

    .form-control {
      border: none;
      border-radius: 20px 0 0 20px;
      box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    .btn-primary {
      border-radius: 0 20px 20px 0;
      padding: 0 20px;
      box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
      background: linear-gradient(90deg, #007bff, #0056b3);
      border: none;
    }

    .btn-primary:hover {
      background: linear-gradient(90deg, #0056b3, #003f80);
    }

    .search-box .input-group {
      overflow: hidden;
      border-radius: 20px;
    }

    .form-control:focus {
      box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }
    .navbar .btn-primary {
        background-color: white;
        color: #2874f0;
        border: none;
    }
    .navbar .btn-primary:hover {
        background-color: #f7f7f7;
    }
    .navbar .btn-link {
        color: white;
    }
    .navbar .btn-link:hover {
        color: #ffcc00;
    }

    /* Category Navigation */
    .category-nav {
        background: #f9f9f9;
        border-bottom: 2px solid #e0e0e0;
        padding: 20px 0;
    }
    .category-item {
        text-align: center;
        text-decoration: none;
        color: #555;
        transition: color 0.3s ease-in-out;
    }
    .category-item:hover {
        color: #2874f0;
    }
    .category-item img {
        width: 60px;
        height: 60px;
        margin-bottom: 8px;
        transition: transform 0.3s ease;
    }
    .category-item img:hover {
        transform: scale(1.1);
    }

    /* Hero Section */
    .hero-section {
        background: linear-gradient(to bottom, #2874f0, #0056b3);
        padding: 60px 0;
        color: white;
        text-align: center;
    }
    .hero-section h1 {
        font-size: 36px;
        font-weight: bold;
    }
    .hero-section p {
        font-size: 18px;
    }

    /* Product Image */
    .product-image {
        max-width: 300px;
        border-radius: 8px;
    }
</style>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{route('homepage')}}">Price Pilot</a>
        
        <!-- Search Bar -->
        <div class="search-box">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for Products, Brands and More">
              <button class="btn btn-primary">
                <i class="bi bi-search"></i>
              </button>
            </div>
          </div>
        
        <!-- Right Navigation Items -->
        <div class="d-flex align-items-center">
            <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</a>
`            <a href="{{route('signup')}}"  class="btn btn-outline-light me-2">Sign Up</a>
            {{-- <a href="{{route('signup')}}" class="btn btn-outline-light me-2">Sign Up</a> --}}
            <a href=#  class="btn btn-link">
                <i class="bi bi-heart-fill">Favourites</i>
            </a>
            
        </div>
    </div>
</nav>

<!-- Category Navigation -->
<div class="category-nav">
    <div class="container">
        <div class="d-flex justify-content-between">
            <a href="{{route('graphic-card')}}" class="category-item">
                <img src="https://picsum.photos/300/300" alt="Picsum">

                <div>Graphic Cards</div>
            </a>
            <a href="{{route('headphone')}}" class="category-item">
                <img src="https://picsum.photos/200/300?random&keyword=phone
" alt="Mobiles">
                <div>Headphones</div>
            </a>
            <a href="{{route('drives')}}" class="category-item">
                <img src="https://picsum.photos/300/300" alt="Picsum">

                <div>Drives</div>
            </a>
            <a href="{{route('gamingchair')}}" class="category-item">
                <img src="https://picsum.photos/300/300" alt="Picsum">

                <div>Gaming Chair</div>
            </a>
            <a href="{{route('phone')}}" class="category-item">
                <img src="https://picsum.photos/300/300" alt="Picsum">

                <div>Phones</div>
            </a>
        
        </div>
    </div>
</div>
