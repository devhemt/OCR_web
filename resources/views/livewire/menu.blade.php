<div class="navbar-nav ms-auto">
    <a href="index.html" class="nav-item nav-link active">Home</a>
    {{--                    <div class="nav-item dropdown">--}}
    {{--                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>--}}
    {{--                        <div class="dropdown-menu bg-light mt-2">--}}
    {{--                            <a href="feature.html" class="dropdown-item">Features</a>--}}
    {{--                            <a href="team.html" class="dropdown-item">Our Team</a>--}}
    {{--                            <a href="faq.html" class="dropdown-item">FAQs</a>--}}
    {{--                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>--}}
    {{--                            <a href="404.html" class="dropdown-item">404 Page</a>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    @if($check)
        <a href="{{url('/signout')}}" class="nav-item nav-link">Signout</a>
    @else
        <a href="{{url('/registration')}}" class="nav-item nav-link">Create Account</a>
        <a href="{{url('/login')}}" class="nav-item nav-link">Login</a>
    @endif
</div>
