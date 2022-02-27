@extends('layout')
@auth
@section('content')

        <header id="header">
            <h1><a href="welcome">Website</a>
                <div id="burger" onclick="myFunction()">
                    <div class="burgerline"></div>
                    <div class="burgerline"></div>
                    <div class="burgerline"></div>
                </div>
                <div id="burgernav">
                    <ul>
                        <li><a href="welcome">Intro</a></li>
                        <li><a href="welcome/#one">What I Do</a></li>
                        <li><a href="welcome/#two">Who I Am</a></li>
                        <li><a href="welcome/#work">Photos</a></li>
                        <li><a href="welcome/#videos">Videos</a></li>
                        <li><a href="welcome/#contact">Contact</a></li>
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @else
                            <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                    </ul>
                </div>
            </h1>
            <nav>
                <ul>
                    <li><a href="welcome">Intro</a></li>
                    <li><a href="welcome/#one">What I Do</a></li>
                    <li><a href="welcome/#two">Who I Am</a></li>
                    <li><a href="welcome/#work">Photos</a></li>
                    <li><a href="welcome/#videos">Videos</a></li>
                    <li><a href="welcome/#contact">Contact</a></li>
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @else
                            <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                </ul>
            </nav>
        </header>
        <section id="contact" class="main style3 secondary">
            <div class="content">
                <header>
                    <h2>Say Hello.</h2>
                    <p>Lorem ipsum dolor sit amet et sapien sed elementum egestas dolore condimentum.</p>
                </header>
                <div class="box">
                    <form method="post" action="#">
                        <div class="fields">
                            <div class="field half"><input type="text" name="name" placeholder="Name" /></div>
                            <div class="field half"><input type="email" name="email" placeholder="Email" /></div>
                            <div class="field"><textarea name="message" placeholder="Message" rows="6"></textarea></div>
                        </div>
                        <ul class="actions special">
                            <li><input type="submit" value="Send Message" /></li>
                        </ul>
                    </form>
                </div>
            </div>
        </section>
        		<!-- Footer -->
		<footer id="footer">

			<!-- Icons -->
				<ul class="icons">
					<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
					<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
					<li><a href="#" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a></li>
				</ul>

			<!-- Menu -->
				<ul class="menu">
					<li>&copy; Thibault De Jaeck</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
				</ul>

		</footer>

        	<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.poptrox.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>

@endsection
@endauth

