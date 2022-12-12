<div class="category-nav show-on-click">
    <span class="category-header">Categories <i class="fa fa-list"></i></span>
    <ul class="category-list">
        
        @foreach ($categories as $category)
            <li class="category-item">
                <a href="{{route('product.category',['category_slug'=>$category->slug])}}" class="cate-link">{{$category->name}}</a>
            </li>
            @endforeach
        <!--<li><a href="#">Men’s Clothing</a></li>
        <li class="dropdown side-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Phones & Accessories <i class="fa fa-angle-right"></i></a>
            <div class="custom-menu">
                <div class="row">
                    <div class="col-md-4">
                        <ul class="list-links">
                            <li>
                                <h3 class="list-links-title">Categories</h3></li>
                            <li><a href="#">Women’s Clothing</a></li>
                            <li><a href="#">Men’s Clothing</a></li>
                            <li><a href="#">Phones & Accessories</a></li>
                            <li><a href="#">Jewelry & Watches</a></li>
                            <li><a href="#">Bags & Shoes</a></li>
                        </ul>
                        <hr>
                        <ul class="list-links">
                            <li>
                                <h3 class="list-links-title">Categories</h3></li>
                            <li><a href="#">Women’s Clothing</a></li>
                            <li><a href="#">Men’s Clothing</a></li>
                            <li><a href="#">Phones & Accessories</a></li>
                            <li><a href="#">Jewelry & Watches</a></li>
                            <li><a href="#">Bags & Shoes</a></li>
                        </ul>
                        <hr class="hidden-md hidden-lg">
                    </div>
                    <div class="col-md-4">
                        <ul class="list-links">
                            <li>
                                <h3 class="list-links-title">Categories</h3></li>
                            <li><a href="#">Women’s Clothing</a></li>
                            <li><a href="#">Men’s Clothing</a></li>
                            <li><a href="#">Phones & Accessories</a></li>
                            <li><a href="#">Jewelry & Watches</a></li>
                            <li><a href="#">Bags & Shoes</a></li>
                        </ul>
                        <hr>
                        <ul class="list-links">
                            <li>
                                <h3 class="list-links-title">Categories</h3></li>
                            <li><a href="#">Women’s Clothing</a></li>
                            <li><a href="#">Men’s Clothing</a></li>
                            <li><a href="#">Phones & Accessories</a></li>
                            <li><a href="#">Jewelry & Watches</a></li>
                            <li><a href="#">Bags & Shoes</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 hidden-sm hidden-xs">
                        <a class="banner banner-2" href="#">
                            <img src="./img/banner04.jpg" alt="">
                            <div class="banner-caption">
                                <h3 class="white-color">NEW<br>COLLECTION</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </li>
        <li><a href="#">Computer & Office</a></li>
        <li><a href="#">Consumer Electronics</a></li>
        <li class="dropdown side-dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Jewelry & Watches <i class="fa fa-angle-right"></i></a>
            <div class="custom-menu">
                <div class="row">
                    <div class="col-md-4">
                        <ul class="list-links">
                            <li>
                                <h3 class="list-links-title">Categories</h3></li>
                            <li><a href="#">Women’s Clothing</a></li>
                            <li><a href="#">Men’s Clothing</a></li>
                            <li><a href="#">Phones & Accessories</a></li>
                            <li><a href="#">Jewelry & Watches</a></li>
                            <li><a href="#">Bags & Shoes</a></li>
                        </ul>
                        <hr>
                        <ul class="list-links">
                            <li>
                                <h3 class="list-links-title">Categories</h3></li>
                            <li><a href="#">Women’s Clothing</a></li>
                            <li><a href="#">Men’s Clothing</a></li>
                            <li><a href="#">Phones & Accessories</a></li>
                            <li><a href="#">Jewelry & Watches</a></li>
                            <li><a href="#">Bags & Shoes</a></li>
                        </ul>
                        <hr class="hidden-md hidden-lg">
                    </div>
                    <div class="col-md-4">
                        <ul class="list-links">
                            <li>
                                <h3 class="list-links-title">Categories</h3></li>
                            <li><a href="#">Women’s Clothing</a></li>
                            <li><a href="#">Men’s Clothing</a></li>
                            <li><a href="#">Phones & Accessories</a></li>
                            <li><a href="#">Jewelry & Watches</a></li>
                            <li><a href="#">Bags & Shoes</a></li>
                        </ul>
                        <hr>
                        <ul class="list-links">
                            <li>
                                <h3 class="list-links-title">Categories</h3></li>
                            <li><a href="#">Women’s Clothing</a></li>
                            <li><a href="#">Men’s Clothing</a></li>
                            <li><a href="#">Phones & Accessories</a></li>
                            <li><a href="#">Jewelry & Watches</a></li>
                            <li><a href="#">Bags & Shoes</a></li>
                        </ul>
                        <hr class="hidden-md hidden-lg">
                    </div>
                    <div class="col-md-4">
                        <ul class="list-links">
                            <li>
                                <h3 class="list-links-title">Categories</h3></li>
                            <li><a href="#">Women’s Clothing</a></li>
                            <li><a href="#">Men’s Clothing</a></li>
                            <li><a href="#">Phones & Accessories</a></li>
                            <li><a href="#">Jewelry & Watches</a></li>
                            <li><a href="#">Bags & Shoes</a></li>
                        </ul>
                        <hr>
                        <ul class="list-links">
                            <li>
                                <h3 class="list-links-title">Categories</h3></li>
                            <li><a href="#">Women’s Clothing</a></li>
                            <li><a href="#">Men’s Clothing</a></li>
                            <li><a href="#">Phones & Accessories</a></li>
                            <li><a href="#">Jewelry & Watches</a></li>
                            <li><a href="#">Bags & Shoes</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </li>
        <li><a href="#">Bags & Shoes</a></li>
        <li><a href="#">View All</a></li>-->
    </ul>
</div>