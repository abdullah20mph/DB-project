
{{-- home page --}}


@extends('mainlayout')

@section('title')
    Price Pilot
@endsection


@section('main-content-section')


<div class="hero-section">
    <div class="container">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="hero-content">
                                <h1>Blankets</h1>
                                <h2>From ₹199</h2>
                                <p class="lead">Dohars, Comforters & more</p>
                                <p>Deals Like Never Before!</p>
                                <div class="badge bg-warning text-dark p-2">
                                    Big Bachat Days | 1st - 5th Dec
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="https://picsum.photos/300/300" alt="Picsum"> <class="product-image">
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
</div>
<div class="container my-4">
    <!-- Fashion Best Sellers Section -->
    <div class="product-section mb-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="section-title">Fashion Best Sellers</h2>
            <button class="btn btn-link text-primary">
                <i class="bi bi-arrow-right-circle-fill fs-4"></i>
            </button>
        </div>
        
        <div class="row flex-nowrap overflow-auto product-scroll">
            <!-- Product Card 1 -->
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0">
                    <img src="https://picsum.photos/300/300" alt="Picsum">
                    <div class="card-body px-0">
                        <p class="product-brand mb-1">U.S. Polo Assn., Highlander</p>
                        <p class="product-price">Min. 40% Off</p>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0">
                    <img src="https://picsum.photos/300/300" alt="Picsum">
                    <div class="card-body px-0">
                        <p class="product-brand mb-1">Sweatshirts, Hoodies, Jackets</p>
                        <p class="product-price">From ₹249</p>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0">
                    <img src="https://picsum.photos/300/300" alt="Picsum">
                    <div class="card-body px-0">
                        <p class="product-brand mb-1">Denims, T-Shirts</p>
                        <p class="product-price">From ₹99</p>
                    </div>
                </div>
            </div>

            <!-- Additional Product Cards... -->
        </div>
    </div>

    <!-- Best Deals on Smartphones Section -->
    <div class="product-section">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="section-title">Best Deals on Smartphones</h2>
            <button class="btn btn-link text-primary">
                <i class="bi bi-arrow-right-circle-fill fs-4"></i>
            </button>
        </div>
        
        <div class="row flex-nowrap overflow-auto product-scroll">
            <!-- Phone Card 1 -->
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0">
                    <img src="/placeholder.svg?height=200&width=200" class="card-img-top" alt="Motorola Phone">
                    <div class="card-body px-0">
                        <p class="product-brand mb-1">Motorola Edge 40</p>
                        <p class="product-price">From ₹24,999</p>
                    </div>
                </div>
            </div>

            <!-- Phone Card 2 -->
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0">
                    <img src="/placeholder.svg?height=200&width=200" class="card-img-top" alt="Vivo Phone">
                    <div class="card-body px-0">
                        <p class="product-brand mb-1">Vivo T3 Ultra</p>
                        <p class="product-price">Best Seller</p>
                    </div>
                </div>
            </div>

            <!-- Additional Phone Cards... -->
        </div>
    </div>

     <!-- Best Deals on Smartphones Section -->
     <div class="product-section">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="section-title">Best Deals on Smartphones</h2>
            <button class="btn btn-link text-primary">
                <i class="bi bi-arrow-right-circle-fill fs-4"></i>
            </button>
        </div>
        
        <div class="row flex-nowrap overflow-auto product-scroll">
            <!-- Phone Card 1 -->
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0">
                    <img src="https://picsum.photos/300/300" alt="Picsum">
                    <div class="card-body px-0">
                        <p class="product-brand mb-1">Motorola Edge 40</p>
                        <p class="product-price">From ₹24,999</p>
                    </div>
                </div>
            </div>

            <!-- Phone Card 2 -->
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0">
                    <img src="https://picsum.photos/300/300" alt="Picsum">
                    <div class="card-body px-0">
                        <p class="product-brand mb-1">Vivo T3 Ultra</p>
                        <p class="product-price">Best Seller</p>
                    </div>
                </div>
            </div>

            <!-- Additional Phone Cards... -->
        </div>
    </div>
</div>

<style>
    .section-title {
        font-size: 20px;
        font-weight: 500;
        color: #212121;
    }

    .product-scroll {
        scrollbar-width: none;
        -ms-overflow-style: none;
        padding-bottom: 10px;
    }

    .product-scroll::-webkit-scrollbar {
        display: none;
    }

    .product-brand {
        font-size: 14px;
        color: #212121;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .product-price {
        font-size: 16px;
        color: #388e3c;
        margin-bottom: 0;
    }

    .card {
        transition: transform 0.2s;
    }

    .card:hover {
        transform: translateY(-2px);
    }

    .card img {
        object-fit: contain;
        height: 200px;
        padding: 10px;
    }

    .btn-link {
        text-decoration: none;
    }

    .btn-link:hover {
        color: #2874f0 !important;
    }

    @media (max-width: 768px) {
        .section-title {
            font-size: 18px;
        }
        
        .product-brand {
            font-size: 12px;
        }
        
        .product-price {
            font-size: 14px;
        }
    }
</style>


@endsection