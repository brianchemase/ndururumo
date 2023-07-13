<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="{{route('dash')}}">
                    <!-- <img src="{{asset('logo/sisdologo.png')}}" alt="Ndururumo" width="50" height="60"> -->
                    <span class="align-middle">Ndururumo Water Project </span>
                </a>
				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Service Tabs
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="{{route('dash')}}">
                            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                        </a>
					</li>

					<li class="sidebar-header">
						Clients Management
					</li>

	
					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('RegisterClientspage')}}">
                            <i class="align-middle"data-feather="user"></i> <span class="align-middle">Register Clients</span>
                        </a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('ClientsListpage')}}">
                            <i class="align-middle" data-feather="airplay"></i> <span class="align-middle">View clients</span>
                        </a>
					</li>

					<li class="sidebar-header">
						Bill Management
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('billingListpage')}}">
                            <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Billing</span>
                        </a>
					</li>

					<li class="sidebar-header">
						payment Management
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('paymentregistrationpage')}}">
                            <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Payment Registration</span>
                        </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="#">
                            <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Generate Statement</span>
                        </a>
					</li>

                  

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('BlankPage')}}">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Blank PAge</span>
                        </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('FormPage')}}">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Form PAge</span>
                        </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{route('TablePage')}}">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Table PAge</span>
                        </a>
					</li>


					<li class="sidebar-header">
						Plugins & Addons
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="charts-chartjs.html">
                             <i class="align-middle" data-feather="aperture"></i> <span class="align-middle">Support</span>
                        </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{ route('logout') }}"
										onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
										<i class="align-middle" data-feather="power"></i>	{{ __('Signout') }}
										</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
											@csrf
										</form>
						</li>

					
				</ul>

				
			</div>
		</nav>