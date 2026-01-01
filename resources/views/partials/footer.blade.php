<!-- FOOTER SECTION -->
<footer id="footer" class="pt-5 pb-3 bg-light text-dark">
    <div class="container">
        <div class="row">

            <!-- Brand Column -->
            <div class="col-md-4 mb-4 mb-md-0">
                <div class="footer-item">
                    <div class="company-brand">
                        <img src="{{ asset('images/libratrack-main-logo.png') }}" alt="logo" class="footer-logo mb-3" style="max-width: 180px;">
                        <p>
                            Built to support information organization, LibraTrack is an information resource management platform that enables users to explore collections, organize materials, and track reading activities through the creation of lists.
                        </p>
                    </div>
                </div>
            </div>

            <!-- About Us -->
            <div class="col-md-2 mb-4 mb-md-0">
                <div class="footer-menu">
                    <h5>About Us</h5>
                    <ul class="menu-list list-unstyled">
                        <li><a href="#">Vision</a></li>
                        <li><a href="#">Articles</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Service Terms</a></li>
                        <li><a href="#">Donate</a></li>
                    </ul>
                </div>
            </div>

            <!-- Discover -->
            <div class="col-md-2 mb-4 mb-md-0">
                <div class="footer-menu">
                    <h5>Discover</h5>
                    <ul class="menu-list list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="{{ route('register') }}">Books</a></li>
                        <li><a href="{{ route('register') }}">Authors</a></li>
                        <li><a href="{{ route('register') }}">Subjects</a></li>
                        
                    </ul>
                </div>
            </div>

            <!-- My Account -->
            <div class="col-md-2 mb-4 mb-md-0">
                <div class="footer-menu">
                    <h5>My Account</h5>
                    <ul class="menu-list list-unstyled">
                        <li><a href="{{ route('register') }}">Sign In</a></li>
                        <li><a href="{{ route('register') }}">Reading List</a></li>
                        <li><a href="{{ route('register') }}">Track My Libraries</a></li>
                    </ul>
                </div>
            </div>

            <!-- Help -->
            <div class="col-md-2">
                <div class="footer-menu">
                    <h5>Help</h5>
                    <ul class="menu-list list-unstyled">
                        <li><a href="{{ route('register') }}">Help Center</a></li>
                        <li><a href="{{ route('register') }}">Report a Problem</a></li>
                        <li><a href="{{ route('register') }}">Suggesting Edits</a></li>
                        <li><a href="{{ route('register') }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>

        </div><!-- /row -->
    </div><!-- /container -->
</footer>

<!-- FOOTER BOTTOM -->
<div id="footer-bottom" class="bg-dark text-white py-3">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                <p class="mb-0 small">
                    © 2025 All rights reserved. Libratrack.
                    </a>
                </p>
            </div>

            <div class="col-md-6 text-center text-md-end">
                <div class="social-links">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="#"><i class="icon icon-facebook text-white"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="icon icon-twitter text-white"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="icon icon-youtube-play text-white"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="icon icon-behance-square text-white"></i></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
