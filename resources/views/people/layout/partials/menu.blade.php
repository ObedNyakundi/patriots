<!-- use this section to display the patriots' menu section -->
			<div class="col-lg-12 menu-div">
				  <nav class="navbar navbar-expand-lg navbar-light">
				    <div class="container-fluid">
				      
				      <div class="collapse navbar-collapse text-center" id="navbarNav">
				        <ul class="navbar-nav text-center">
				          <li class="nav-item">
				            <a class="nav-link" aria-current="page" href="#"> 
				            	<i class="fa fa-home"></i>	Public Board
				        	</a>
				          </li>
				          <li class="nav-item">
				            <a class="nav-link" href="#">
				            	<i class="fa fa-tree"></i> Flowers</a>
				          </li>
				          <li class="nav-item dropdown">
				            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				              <i class="fa fa-id-badge"></i> Lists
				            </a>
				            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
				              <li><a class="dropdown-item" href="#">List of Fame</a></li>
				              <li><a class="dropdown-item" href="#">List of Shame</a></li>
				            </ul>
				          </li>
				          @if(!Auth::check())
				          <li class="nav-item dropdown">
				            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				              <i class="fa fa-user"></i> Participate
				            </a>
				            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
				              <li><a class="dropdown-item" href="#">Add a patriot</a></li>
				              <li><a class="dropdown-item" href="#">Give a flower</a></li>
				              <li><a class="dropdown-item" href="{{ route('login') }}">Sign in</a></li>
				              <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
				            </ul>
				          </li>
				          @else
				          <li class="nav-item dropdown">
				            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				              <i class="fa fa-user"></i> {{ Auth::user()->name }}
				            </a>
				            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
				              <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
				        <li>
				              	<!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            @method('POST')

				              	<a class="dropdown-item" href="{{ route('logout') }}" 
				              	onclick="event.preventDefault();
                                                this.closest('form').submit();"
				              	>Sign out</a>

				        </form>
				    	</li>
				            </ul>
				          </li>
				          @endif
				          
				        </ul>
				      </div>
				    </div>
				  </nav>
			</div>