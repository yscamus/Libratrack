<!-- FEATURED BOOKS SECTION -->
<section id="featured-books" class="py-5 my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center mb-5">
                    <div class="title">
                        <span>Some quality items</span>
                    </div>
                    <h2 class="section-title">Featured Books</h2>
                </div>
                <div class="product-list" data-aos="fade-up">
                    <div class="row g-4 justify-content-center">
                        <!-- Book 1 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-item">
                                <div class="product-style">
                                    <img src="{{ asset('images/tab-item1.jpg') }}" alt="Book 1" class="img-fluid">
                                    <div class="add-to-cart-overlay">
                                        <a href="{{ route('register') }}" class="add-to-cart-btn">Add to List</a>
                                    </div>
                                </div>
                                <div class="product-info text-center">
                                    <h3>Ang Babaing Iyon</h3>
                                    <span class="author">Efren R. Abueg</span>
                                    <div class="item-price">Most Listed</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Book 2 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-item">
                                <div class="product-style">
                                    <img src="{{ asset('images/tab-item2.jpg') }}" alt="Book 2" class="img-fluid">
                                    <div class="add-to-cart-overlay">
                                        <a href="{{ route('register') }}" class="add-to-cart-btn">Add to List</a>
                                    </div>
                                </div>
                                <div class="product-info text-center">
                                    <h3>What Recipes Don't Tell</h3>
                                    <span class="author">Felice Prudente Sta. Maria</span>
                                    <div class="item-price">Most Reviewed</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Book 3 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-item">
                                <div class="product-style">
                                    <img src="{{ asset('images/tab-item3.jpg') }}" alt="Book 3" class="img-fluid">
                                    <div class="add-to-cart-overlay">
                                        <a href="{{ route('register') }}" class="add-to-cart-btn">Add to List</a>
                                    </div>
                                </div>
                                <div class="product-info text-center">
                                    <h3>Memoirs of an Art Forger</h3>
                                    <span class="author">Julian Tongson Jr.</span>
                                    <div class="item-price">Most Reads</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Book 4 -->
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="product-item">
                                <div class="product-style">
                                    <img src="{{ asset('images/tab-item4.jpg') }}" alt="Book 4" class="img-fluid">
                                    <div class="add-to-cart-overlay">
                                        <a href="{{ route('register') }}" class="add-to-cart-btn">Add to List</a>
                                    </div>
                                </div>
                                <div class="product-info text-center">
                                    <h3>Canal de la Reina</h3>
                                    <span class="author">Liwayway Arceo</span>
                                    <div class="item-price">Recommended</div>
                                </div>
                            </div>
                        </div>
                    </div><!-- row -->
                </div><!-- product-list -->
            </div><!-- col-md-12 -->
        </div><!-- row -->
    </div>
</section>
<style>
    /* Featured Books Styles - Matching Popular Books */
    #featured-books .product-item {
        margin-bottom: 2rem;
    }
    
    #featured-books .product-style {
        position: relative;
        overflow: hidden;
        border-radius: 12px;
        margin-bottom: 1rem;
        margin-left: 1rem;
        margin-right: 1rem;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
    }
    
    #featured-books .product-style:hover {
        box-shadow: 0 8px 24px rgba(0,0,0,0.15);
        transform: translateY(-5px);
    }
    
    #featured-books .product-style img {
        width: 100%;
        height: 394px;
        object-fit: cover;
        display: block;
    }
    
    /* Add to Cart Overlay - Rectangle at Bottom */
    #featured-books .add-to-cart-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.7) 50%, transparent 100%);
        padding: 2rem 1rem 1rem 1rem;
        transform: translateY(100%);
        transition: transform 0.3s ease;
    }
    
    #featured-books .product-style:hover .add-to-cart-overlay {
        transform: translateY(0);
    }
    
    #featured-books .add-to-cart-btn {
        width: 100%;
        background: #fff;
        color: #111;
        border: none;
        padding: 12px 20px;
        border-radius: 8px;
        font-size: 0.9rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        text-decoration: none;
        display: block;
        text-align: center;
    }
    
    #featured-books .add-to-cart-btn:hover {
        background: #111;
        color: #fff;
        transform: scale(1.05);
    }
    
    /* Product Info */
    #featured-books .product-info {
        padding: 0.5rem 0;
    }
    
    #featured-books .product-info h3 {
        font-size: 1rem;
        margin-bottom: 0.5rem;
        font-weight: 600;
        color: #111;
        line-height: 1.3;
    }
    
    #featured-books .product-info .author {
        color: #6c757d;
        font-size: 0.875rem;
        display: block;
        margin-bottom: 0.5rem;
    }
    
    #featured-books .item-price {
        font-weight: 600;
        color: #111;
        font-size: 0.75rem;
        background: #f8f9fa;
        display: inline-block;
        padding: 0.2rem 0.6rem;
        border-radius: 999px;
        margin-top: 0.5rem;
    }
    
    /* Section Header */
    #featured-books .section-header .title span {
        color: #6c757d;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    #featured-books .section-title {
        font-size: 2.5rem;
        font-weight: 600;
        margin-top: 0.5rem;
    }
    
    /* Better spacing */
    #featured-books .row.justify-content-center {
        margin-left: -0.75rem;
        margin-right: -0.75rem;
    }
    
    #featured-books .row.justify-content-center > [class*='col-'] {
        padding-left: 0.75rem;
        padding-right: 0.75rem;
    }
</style>