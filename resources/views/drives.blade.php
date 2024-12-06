@extends('mainLayout')


@section('title')
    Drives
@endsection

@section('main-content-section')

    <style>
        .store-price {
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }

        .store-name {
            font-weight: 500;
            color: #333;
        }

        .price {
            font-size: 1.1rem;
            color: #28a745;
        }

        .btn-outline-primary {
            border: 1px solid #28a745;
            color: #28a745;
            padding: 5px 10px;
            font-size: 0.9rem;
            text-transform: uppercase;
        }

        .btn-outline-primary:hover {
            background-color: #28a745;
            color: #fff;
        }

        .search-header {
            color: #666;
            font-size: 14px;
        }

        .search-term {
            color: #2874f0;
        }

        .filter-section {
            border-right: 1px solid #ddd;
        }

        .filter-title {
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 15px;
        }

        .filter-option {
            font-size: 14px;
            color: #212121;
            margin-bottom: 8px;
        }

        .product-card {
            border: 1px solid #eee;
            padding: 15px;
            margin-bottom: 20px;
            position: relative;
        }

        .top-75-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #ff3f6c;
            color: white;
            padding: 2px 8px;
            border-radius: 3px;
            font-size: 12px;
        }

        .rating-badge {
            background: #ffc107;
            color: white;
            padding: 2px 6px;
            border-radius: 3px;
            font-size: 12px;
            display: inline-block;
        }

        .spec-badge {
            border: 1px solid #e0e0e0;
            padding: 2px 8px;
            border-radius: 3px;
            font-size: 12px;
            margin-right: 5px;
        }

        .price-section {
            border-top: 1px solid #eee;
            padding-top: 10px;
            margin-top: 10px;
        }

        .store-price {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
        }

        .store-logo {
            width: 80px;
            margin-right: 10px;
        }

        .price {
            font-size: 16px;
            font-weight: 500;
        }

        .discount {
            color: #388e3c;
            font-size: 14px;
            margin-left: 8px;
        }

        .comparison-link {
            color: #2874f0;
            font-size: 14px;
            text-decoration: none;
        }

        .savings-text {
            color: #388e3c;
            font-size: 14px;
        }
    </style>
    </head>

    <body>
        <div class="container-fluid py-4">
            <div class="row">
                <!-- Filters Sidebar -->
                <div class="col-md-3 filter-section">
                    <div class="mb-4">
                        <h3 class="filter-title">Sort</h3>
                        <div class="form-check filter-option">
                            <input class="form-check-input" type="checkbox" id="compareTop75">
                            <label class="form-check-label" for="compareTop75">Compare Top 75</label>
                        </div>
                        <div class="form-check filter-option">
                            <input class="form-check-input" type="checkbox" id="top75" checked>
                            <label class="form-check-label" for="top75">Top 75</label>
                        </div>
                        <!-- More sort options -->
                    </div>

                    <div class="mb-4">
                        <h3 class="filter-title">Category</h3>
                        <div class="form-check filter-option">
                            <input class="form-check-input" type="checkbox" id="mobilesTablets" checked>
                            <label class="form-check-label" for="mobilesTablets">Mobiles And Tablets</label>
                        </div>
                    </div>

                    <div class="mb-4">
                        <h3 class="filter-title">Sub-Category</h3>
                        <div class="form-check filter-option">
                            <input class="form-check-input" type="checkbox" id="mobiles" checked>
                            <label class="form-check-label" for="mobiles">Mobiles</label>
                        </div>
                        <!-- More sub-categories -->
                    </div>
                </div>

                <!-- Main Content -->
                <div class="col-md-9">
                    <!-- Search Header -->
                    <div class="title text-center">
                        <h1>Drives</h1>

                    </div>
                    <div>
                        @if ($products->isNotEmpty())
                            <h4 class="mt-4">Drives</h4>
                            <div class="row">
                                @foreach ($products as $product)
                                    <div class="col-md-4">
                                        <div class="product-card">
                                            <!-- Placeholder image or use an actual product image if available -->
                                            <img src="/placeholder.svg?height=200&width=200"
                                                alt="{{ $product['product_name'] }}" class="img-fluid mb-3">
                                            <h5>{{ $product['product_name'] }}</h5>
                                            <div class="mb-2">
                                                <span class="spec-badge">{{ $product['brand'] }}</span>
                                                <!-- Add more specs if needed -->
                                            </div>
                                            <div class="price-section">
                                                @if (!empty($product['links']))
                                                    @foreach ($product['links'] as $link)
                                                        <div class="store-price mb-3">
                                                            <!-- Extract store name from the URL directly in the Blade template -->
                                                            @php
                                                                $parsedUrl = parse_url($link['url'], PHP_URL_HOST);
                                                                $domainParts = explode('.', $parsedUrl);
                                                                $storeName = isset($domainParts[1])
                                                                    ? ucfirst($domainParts[1])
                                                                    : 'Unknown';
                                                            @endphp

                                                            <!-- Display store name and price -->
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <span class="store-name">{{ $storeName }}</span>
                                                                <span class="price">Rs{{ $link['price'] }}</span>
                                                            </div>

                                                            <!-- Buy button -->
                                                            <a href="{{ $link['url'] }}" target="_blank"
                                                                class="btn btn-outline-primary btn-sm mt-2">Buy Now</a>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <p class="text-muted">Price: Not available</p>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p>No products available in this category.</p>
                        @endif
                    </div>



                    
                </div>
            </div>
        </div>


    @endsection
