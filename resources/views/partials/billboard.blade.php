<!-- BILLBOARD / HERO SECTION -->
<section id="billboard">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Left arrow -->
                <button class="prev slick-arrow">
                    <i class="icon icon-arrow-left"></i>
                </button>
                
                <!-- Main slider -->
                <div class="main-slider pattern-overlay">
                    <!-- Slide 1 -->
                    <div class="slider-item">
                        <div class="banner-content">
                            <h2 class="banner-title">Unrequited Love</h2>
                            <p>
                                Unrequited Love: Duterte's China Embrace is the story of former president Rodrigo Duterte's pivot to China—the factors that influenced him, the results of the policy shift on the West Philippine Sea, the rule of law, Chinese loans, grants, and pledges for infrastructure and other projects.
                            </p>
                            <div class="btn-wrap">
                                <a href="{{ route('register') }}" class="btn btn-outline-accent btn-accent-arrow">
                                    READ MORE <i class="icon icon-ns-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <img src="{{ asset('images/unrequited.png') }}" alt="banner" class="banner-image">
                    </div>
                    
                    <!-- Slide 2 -->
                    <div class="slider-item">
                        <div class="banner-content">
                            <h2 class="banner-title">Allegories of Resistance</h2>
                            <p>
                                A key piece exploring Filipino identity, diaspora (especially Overseas Contract Workers), and cultural resistance against neocolonialism using a Marxist/Gramscian lens, focusing on the ongoing struggle for national liberation. 
                            </p>
                            <div class="btn-wrap">
                                <a href="{{ route('register') }}" class="btn btn-outline-accent btn-accent-arrow">
                                    READ MORE <i class="icon icon-ns-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <img src="{{ asset('images/allegories.png') }}" alt="banner" class="banner-image">
                    </div>
                    
                    <!-- Slide 3 -->
                    <div class="slider-item">
                        <div class="banner-content">
                            <h2 class="banner-title">Power from the Forest</h2>
                            <p>
                                Power from the Forest is the story of logging in the Philippines, the story of the exercise of power—who wields it, who benefits from it, and how. 
                            </p>
                            <div class="btn-wrap">
                                <a href="{{ route('register') }}" class="btn btn-outline-accent btn-accent-arrow">
                                    READ MORE <i class="icon icon-ns-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <img src="{{ asset('images/power.png') }}" alt="banner" class="banner-image">
                    </div>
                </div>
                
                <!-- Right arrow -->
                <button class="next slick-arrow">
                    <i class="icon icon-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>
</section>