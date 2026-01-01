@extends('layouts.dashboard')
@section('dashboard-content')
<!-- Three Cards Section -->
<div class="row g-4 mb-5">
    <!-- Make a List -->
    <div class="col-md-4">
        <a href="{{ route('list.create') }}" class="text-decoration-none">
            <div class="card shadow-sm hover-card card-create">
                <div class="card-body text-center py-4">
                    <div class="card-icon mb-3">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="8" x2="12" y2="16"></line>
                            <line x1="8" y1="12" x2="16" y2="12"></line>
                        </svg>
                    </div>
                    <h5>Make a List</h5>
                    <p class="card-description">Create a new reading list</p>
                </div>
            </div>
        </a>
    </div>
    <!-- View Resources -->
    <div class="col-md-4">
        <a href="{{ route('resource.index') }}" class="text-decoration-none">
            <div class="card shadow-sm hover-card card-resources">
                <div class="card-body text-center py-4">
                    <div class="card-icon mb-3">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                        </svg>
                    </div>
                    <h5>View Resources</h5>
                    <p class="card-description">Browse your collection</p>
                </div>
            </div>
        </a>
    </div>
    <!-- View My Lists -->
    <div class="col-md-4">
        <a href="{{ route('list.index') }}" class="text-decoration-none">
            <div class="card shadow-sm hover-card card-lists">
                <div class="card-body text-center py-4">
                    <div class="card-icon mb-3">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="8" y1="6" x2="21" y2="6"></line>
                            <line x1="8" y1="12" x2="21" y2="12"></line>
                            <line x1="8" y1="18" x2="21" y2="18"></line>
                            <line x1="3" y1="6" x2="3.01" y2="6"></line>
                            <line x1="3" y1="12" x2="3.01" y2="12"></line>
                            <line x1="3" y1="18" x2="3.01" y2="18"></line>
                        </svg>
                    </div>
                    <h5>View My Lists</h5>
                    <p class="card-description">Manage your lists</p>
                </div>
            </div>
        </a>
    </div>
</div>

<!-- POPULAR BOOKS SECTION -->
<div class="bookshelf-wrapper">
    <div class="container-fluid px-5">
        <div class="section-header text-center mb-5">
            <div class="title">
                <span>What's on your reading list?</span>
            </div>
            <h2 class="section-title">Track your Reads</h2>
        </div>
        
        <!-- Tabs Navigation -->
        <ul class="nav nav-tabs justify-content-center mb-5" id="genreTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="all-genre-tab" data-bs-toggle="tab" data-bs-target="#all-genre" type="button" role="tab">All Genre</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="business-tab" data-bs-toggle="tab" data-bs-target="#business" type="button" role="tab">Business</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="technology-tab" data-bs-toggle="tab" data-bs-target="#technology" type="button" role="tab">Technology</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="romantic-tab" data-bs-toggle="tab" data-bs-target="#romantic" type="button" role="tab">Romantic</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="adventure-tab" data-bs-toggle="tab" data-bs-target="#adventure" type="button" role="tab">Politics</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="fictional-tab" data-bs-toggle="tab" data-bs-target="#fictional" type="button" role="tab">Literature</button>
            </li>
        </ul>
        
        <!-- Tabs Content -->
        <div class="tab-content" id="genreTabsContent">
            <!-- All Genre -->
            <div class="tab-pane fade show active" id="all-genre" role="tabpanel">
                <div class="row g-4 justify-content-center">
                    <!-- Literature Books -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-style">
                                <img src="{{ asset('images/tab-item1.jpg') }}" alt="Ang Babaing Iyon" class="img-fluid">
                                <div class="add-to-cart-overlay">
                                    <a href="{{ route('resource.show', 12) }}" class="add-to-cart-btn">VIEW</a>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h3>Ang Babaing Iyon</h3>
                                <span class="author">Efren R. Abueg</span>
                                <div class="item-price">UP Diliman CAL</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-style">
                                <img src="{{ asset('images/tab-item2.jpg') }}" alt="What Recipes Don't Tell" class="img-fluid">
                                <div class="add-to-cart-overlay">
                                    <a href="{{ route('resource.show', 13) }}" class="add-to-cart-btn">VIEW</a>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h3>What Recipes Don't Tell</h3>
                                <span class="author">Felice Prudente Sta. Maria</span>
                                <div class="item-price">Home Economics</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-style">
                                <img src="{{ asset('images/tab-item3.jpg') }}" alt="Memoirs of an Art Forger" class="img-fluid">
                                <div class="add-to-cart-overlay">
                                    <a href="{{ route('resource.show', 14) }}" class="add-to-cart-btn">VIEW</a>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h3>Memoirs of an Art Forger</h3>
                                <span class="author">Julian Tongson Jr.</span>
                                <div class="item-price">UP Diliman CAL</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-style">
                                <img src="{{ asset('images/tab-item4.jpg') }}" alt="Canal de la Reina" class="img-fluid">
                                <div class="add-to-cart-overlay">
                                    <a href="{{ route('resource.show', 15) }}" class="add-to-cart-btn">VIEW</a>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h3>Canal de la Reina</h3>
                                <span class="author">Liwayway Arceo</span>
                                <div class="item-price">UP Diliman CSSP</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Business Books -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-style">
                                <img src="{{ asset('images/corruption.jpg') }}" alt="Corruption" class="img-fluid">
                                <div class="add-to-cart-overlay">
                                    <a href="{{ route('resource.show', 16) }}" class="add-to-cart-btn">VIEW</a>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h3>Corruption: Corruption</h3>
                                <span class="author">J. Edgardo Campos</span>
                                <div class="item-price">Virata</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-style">
                                <img src="{{ asset('images/businessasia.jpg') }}" alt="Business in Asia" class="img-fluid">
                                <div class="add-to-cart-overlay">
                                    <a href="{{ route('resource.show', 17) }}" class="add-to-cart-btn">VIEW</a>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h3>Business Ethics in Asia</h3>
                                <span class="author">Various Authors</span>
                                <div class="item-price">Economics</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-style">
                                <img src="{{ asset('images/forthepeople.jpg') }}" alt="For the People" class="img-fluid">
                                <div class="add-to-cart-overlay">
                                    <a href="{{ route('resource.show', 18) }}" class="add-to-cart-btn">VIEW</a>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h3>For the People, With the People</h3>
                                <span class="author">Ma. Regina M. Hechanova-Alampay</span>
                                <div class="item-price">Home Economics</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Technology Books -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-style">
                                <img src="{{ asset('images/stellar.jpg') }}" alt="Stellar" class="img-fluid">
                                <div class="add-to-cart-overlay">
                                    <a href="{{ route('resource.show', 19) }}" class="add-to-cart-btn">VIEW</a>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h3>Stellar Origins</h3>
                                <span class="author">Ma. Assunta C. Cuyegkeng</span>
                                <div class="item-price">UP Diliman NIP</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-style">
                                <img src="{{ asset('images/biotech.jpg') }}" alt="Biotech" class="img-fluid">
                                <div class="add-to-cart-overlay">
                                    <a href="{{ route('resource.show', 20) }}" class="add-to-cart-btn">VIEW</a>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h3>Straight Talk on Biotechnology</h3>
                                <span class="author">Benigno D. Peczon</span>
                                <div class="item-price">UP Diliman CAS</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-style">
                                <img src="{{ asset('images/cogito.jpg') }}" alt="Cogito" class="img-fluid">
                                <div class="add-to-cart-overlay">
                                    <a href="{{ route('resource.show', 21) }}" class="add-to-cart-btn">VIEW</a>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h3>Cogito Ergo Sum</h3>
                                <span class="author">Queena Lee-Chua</span>
                                <div class="item-price">UP Diliman CAS</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-style">
                                <img src="{{ asset('images/agenda.jpg') }}" alt="Agenda" class="img-fluid">
                                <div class="add-to-cart-overlay">
                                    <a href="{{ route('resource.show', 22) }}" class="add-to-cart-btn">VIEW</a>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h3>Agenda for Hope</h3>
                                <span class="author">Agustin Martin G. Rodriguez</span>
                                <div class="item-price">Ateneo CAS</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Romantic Books -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-style">
                                <img src="{{ asset('images/love.jpg') }}" alt="Love Stories" class="img-fluid">
                                <div class="add-to-cart-overlay">
                                    <a href="{{ route('resource.show', 23) }}" class="add-to-cart-btn">VIEW</a>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h3>Love without a Heart</h3>
                                <span class="author">Iñigo Ed. Regalado</span>
                                <div class="item-price">CAL</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-style">
                                <img src="{{ asset('images/lola.jpg') }}" alt="Lola" class="img-fluid">
                                <div class="add-to-cart-overlay">
                                    <a href="{{ route('resource.show', 24) }}" class="add-to-cart-btn">VIEW</a>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h3>My Lola's Love Letters</h3>
                                <span class="author">Ines Bautista-Yao</span>
                                <div class="item-price">CAL</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-style">
                                <img src="{{ asset('images/lpotion.jpg') }}" alt="Love Potion" class="img-fluid">
                                <div class="add-to-cart-overlay">
                                    <a href="{{ route('resource.show', 25) }}" class="add-to-cart-btn">VIEW</a>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h3>The Love Potion</h3>
                                <span class="author">Alvin Yapan, Randy M.</span>
                                <div class="item-price">CAL</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Politics Books -->
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-style">
                                <img src="{{ asset('images/tab-item5.jpg') }}" alt="False Nostalgia" class="img-fluid">
                                <div class="add-to-cart-overlay">
                                    <a href="{{ route('resource.show', 26) }}" class="add-to-cart-btn">VIEW</a>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h3>False Nostalgia</h3>
                                <span class="author">JC Punongbayan</span>
                                <div class="item-price">CAL</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-style">
                                <img src="{{ asset('images/tab-item7.jpg') }}" alt="The Philippines" class="img-fluid">
                                <div class="add-to-cart-overlay">
                                    <a href="{{ route('resource.show', 27) }}" class="add-to-cart-btn">VIEW</a>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h3>The Philippines is not a Small Country</h3>
                                <span class="author">Gideon Lasco</span>
                                <div class="item-price">CAL</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Business -->
            <div class="tab-pane fade" id="business" role="tabpanel">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-style">
                                <img src="{{ asset('images/corruption.jpg') }}" alt="Corruption" class="img-fluid">
                                <div class="add-to-cart-overlay">
                                    <a href="{{ route('resource.show', 16) }}" class="add-to-cart-btn">VIEW</a>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h3>Corruption: Corruption</h3>
                                <span class="author">J. Edgardo Campos</span>
                                <div class="item-price">Virata</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-style">
                                <img src="{{ asset('images/businessasia.jpg') }}" alt="Business in Asia" class="img-fluid">
                                <div class="add-to-cart-overlay">
                                    <a href="{{ route('resource.show', 17) }}" class="add-to-cart-btn">VIEW</a>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h3>Business Ethics in Asia</h3>
                                <span class="author">Various Authors</span>
                                <div class="item-price">Economics</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-style">
                                <img src="{{ asset('images/forthepeople.jpg') }}" alt="For the People" class="img-fluid">
                                <div class="add-to-cart-overlay">
                                    <a href="{{ route('resource.show', 18) }}" class="add-to-cart-btn">VIEW</a>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h3>For the People, With the People</h3>
                                <span class="author">Ma. Regina M. Hechanova-Alampay</span>
                                <div class="item-price">Home Economics</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Technology -->
            <div class="tab-pane fade" id="technology" role="tabpanel">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-style">
                                <img src="{{ asset('images/stellar.jpg') }}" alt="Stellar" class="img-fluid">
                                <div class="add-to-cart-overlay">
                                    <a href="{{ route('resource.show', 19) }}" class="add-to-cart-btn">VIEW</a>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h3>Stellar Origins</h3>
                                <span class="author">Ma. Assunta C. Cuyegkeng</span>
                                <div class="item-price">UP Diliman NIP</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-style">
                                <img src="{{ asset('images/biotech.jpg') }}" alt="Biotech" class="img-fluid">
                                <div class="add-to-cart-overlay">
                                    <a href="{{ route('resource.show', 20) }}" class="add-to-cart-btn">VIEW</a>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h3>Straight Talk on Biotechnology</h3>
                                <span class="author">Benigno D. Peczon</span>
                                <div class="item-price">UP Diliman CAS</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-style">
                                <img src="{{ asset('images/cogito.jpg') }}" alt="Cogito" class="img-fluid">
                                <div class="add-to-cart-overlay">
                                    <a href="{{ route('resource.show', 21) }}" class="add-to-cart-btn">VIEW</a>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h3>Cogito Ergo Sum</h3>
                                <span class="author">Queena Lee-Chua</span>
                                <div class="item-price">UP Diliman CAS</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-style">
                                <img src="{{ asset('images/agenda.jpg') }}" alt="Agenda" class="img-fluid">
                                <div class="add-to-cart-overlay">
                                    <a href="{{ route('resource.show', 22) }}" class="add-to-cart-btn">VIEW</a>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h3>Agenda for Hope</h3>
                                <span class="author">Agustin Martin G. Rodriguez</span>
                                <div class="item-price">Ateneo CAS</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Romantic -->
            <div class="tab-pane fade" id="romantic" role="tabpanel">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-style">
                                <img src="{{ asset('images/love.jpg') }}" alt="Love Stories" class="img-fluid">
                                <div class="add-to-cart-overlay">
                                    <a href="{{ route('resource.show', 23) }}" class="add-to-cart-btn">VIEW</a>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h3>Love without a Heart</h3>
                                <span class="author">Iñigo Ed. Regalado</span>
                                <div class="item-price">CAL</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-style">
                                <img src="{{ asset('images/lola.jpg') }}" alt="Lola" class="img-fluid">
                                <div class="add-to-cart-overlay">
                                    <a href="{{ route('resource.show', 24) }}" class="add-to-cart-btn">VIEW</a>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h3>My Lola's Love Letters</h3>
                                <span class="author">Ines Bautista-Yao</span>
                                <div class="item-price">CAL</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-style">
                                <img src="{{ asset('images/lpotion.jpg') }}" alt="Love Potion" class="img-fluid">
                                <div class="add-to-cart-overlay">
                                    <a href="{{ route('resource.show', 25) }}" class="add-to-cart-btn">VIEW</a>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h3>The Love Potion</h3>
                                <span class="author">Alvin Yapan, Randy M.</span>
                                <div class="item-price">CAL</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Adventure/Politics -->
            <div class="tab-pane fade" id="adventure" role="tabpanel">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-style">
                                <img src="{{ asset('images/tab-item5.jpg') }}" alt="Adventure Book 1" class="img-fluid">
                                <div class="add-to-cart-overlay">
                                    <a href="{{ route('resource.show', 26) }}" class="add-to-cart-btn">VIEW</a>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h3>False Nostalgia</h3>
                                <span class="author">JC Punongbayan</span>
                                <div class="item-price">CAL</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item">
                            <div class="product-style">
                                <img src="{{ asset('images/tab-item7.jpg') }}" alt="Adventure Book 2" class="img-fluid">
                                <div class="add-to-cart-overlay">
                                    <a href="{{ route('resource.show', 27) }}" class="add-to-cart-btn">VIEW</a>
                                </div>
                            </div>
                            <div class="product-info text-center">
                                <h3>The Philippines is not a Small Country</h3>
                                <span class="author">Gideon Lasco</span>
                <div class="item-price">CAL</div>
                </div>
                </div>
                </div>
                </div>
                </div>


                <!-- Fictional -->
        <div class="tab-pane fade" id="fictional" role="tabpanel">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product-item">
                        <div class="product-style">
                            <img src="{{ asset('images/tab-item1.jpg') }}" alt="Fiction Book 1" class="img-fluid">
                            <div class="add-to-cart-overlay">
                                <a href="{{ route('resource.show', 12) }}" class="add-to-cart-btn">VIEW</a>
                            </div>
                        </div>
                        <div class="product-info text-center">
                            <h3>Ang Babaing Iyon</h3>
                            <span class="author">Efren R. Abueg</span>
                            <div class="item-price">UP Diliman CAL</div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product-item">
                        <div class="product-style">
                            <img src="{{ asset('images/tab-item4.jpg') }}" alt="Fiction Book 2" class="img-fluid">
                            <div class="add-to-cart-overlay">
                                <a href="{{ route('resource.show', 15) }}" class="add-to-cart-btn">VIEW</a>
                            </div>
                        </div>
                        <div class="product-info text-center">
                            <h3>Canal de la Reina</h3>
                            <span class="author">Liwayway Arceo</span>
                            <div class="item-price">UP Diliman CSSP</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<!-- Call to Action Section -->
<div class="cta-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 text-center text-lg-start mb-4 mb-lg-0">
                <h2 class="mb-3">Organize your readings!</h2>
                <p class="mb-4">Collocate all your academic and non-academic resources here in Libratrack.</p>
                <a href="{{ route('list.create') }}" class="btn btn-primary btn-lg">Make a List</a>
            </div>
            <div class="col-lg-6 text-center">
                <img src="{{ asset('images/libratrack-icon.png') }}" alt="LibraTrack" class="img-fluid" style="max-width: 300px;">
            </div>
        </div>
    </div>
</div>
<style>
    /* Card Styles */
    .card {
        border: none;
        border-radius: 12px;
        transition: transform 0.2s, box-shadow 0.2s;
    }
    .card h5 {
        font-size: 0.85rem;
        font-weight: 600;
        color: #495057;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 1rem;
    }
    .hover-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0,0,0,0.1);
    }
    .badge {
        font-size: 0.75rem;
        padding: 0.35em 0.65em;
        font-weight: 500;
    }
    
    /* Bookshelf Wrapper - NO EXTRA PADDING */
    .bookshelf-wrapper {
        padding-top: 3rem;
        padding-bottom: 0;
        margin-bottom: 0;
    }
    
    .bookshelf-wrapper .container-fluid {
        max-width: 1400px;
        padding-bottom: 0;
        margin-bottom: 0;
    }
    
    /* Section Header */
    .section-header .title span {
        color: #6c757d;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .section-title {
        font-size: 2.5rem;
        font-weight: 600;
        margin-top: 0.5rem;
    }
    
    /* Tab Styles */
    .nav-tabs {
        border-bottom: 2px solid #dee2e6;
    }
    .nav-tabs .nav-link {
        border: none;
        color: #6c757d;
        padding: 0.75rem 1.5rem;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    .nav-tabs .nav-link:hover {
        color: #111;
        border-color: transparent;
    }
    .nav-tabs .nav-link.active {
        color: #111;
        background-color: transparent;
        border-bottom: 3px solid #111;
    }
    
    /* Tab Content - NO PADDING */
    .tab-content {
        padding: 0;
        margin: 0;
    }
    
    .tab-pane {
        padding: 0;
        margin: 0;
    }
    
    /* Book Product Styles */
    .product-item {
        margin-bottom: 1.5rem;
    }
    
    .product-style {
        position: relative;
        overflow: hidden;
        border-radius: 12px;
        margin-bottom: 1rem;
        margin-left: 1rem;
        margin-right: 1rem;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
    }
    
    .product-style:hover {
        box-shadow: 0 8px 24px rgba(0,0,0,0.15);
        transform: translateY(-5px);
    }
    
    .product-style img {
        width: 100%;
        height: 320px;
        object-fit: cover;
        display: block;
    }
    
    /* Add to Cart Overlay */
    .add-to-cart-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.7) 50%, transparent 100%);
        padding: 2rem 1rem 1rem 1rem;
        transform: translateY(100%);
        transition: transform 0.3s ease;
    }
    
    .product-style:hover .add-to-cart-overlay {
        transform: translateY(0);
    }
    
    .add-to-cart-btn {
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
    
    .add-to-cart-btn:hover {
        background: #111;
        color: #fff;
        transform: scale(1.05);
        text-decoration: none;
    }
    
    /* Product Info */
    .product-info {
        padding: 0.5rem 0;
    }
    
    .product-info h3 {
        font-size: 1rem;
        margin-bottom: 0.5rem;
        font-weight: 600;
        color: #111;
        line-height: 1.3;
    }
    
    .product-info .author {
        color: #6c757d;
        font-size: 0.875rem;
        display: block;
        margin-bottom: 0.5rem;
    }
    
    .item-price {
        font-weight: 600;
        color: #111;
        font-size: 0.75rem;
        background: #f8f9fa;
        display: inline-block;
        padding: 0.2rem 0.6rem;
        border-radius: 999px;
        margin-top: 0.5rem;
    }
    
    /* Grid Spacing */
    .row.justify-content-center {
        margin-left: -0.75rem;
        margin-right: -0.75rem;
        margin-bottom: 0;
    }
    
    .row.justify-content-center > [class*='col-'] {
        padding-left: 0.75rem;
        padding-right: 0.75rem;
    }
    
    /* CTA Section - DIRECT SIBLING */
    .cta-section {
        background: white;
        border-radius: 18px;
        padding: 3rem 2rem;
        box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        margin: 3rem 1.5rem;
    }
    
    .cta-section h2 {
        font-size: 2rem;
        font-weight: 600;
    }
    
    .cta-section p {
        font-size: 1.1rem;
        color: #6c757d;
    }
</style>
@include('partials.footer')
@endsection

