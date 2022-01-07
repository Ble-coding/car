<!--header-->
<div class="hor-header header top-header">
					<div class="container">
						<div class="d-flex">
							<a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a>
							<a class="header-brand" href="{{url('/dashboard')}}"> 
								<x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
							</a>
							<div class="d-flex order-lg-2 ml-auto">
								<div class="dropdown   header-fullscreen" >
									<a  class="nav-link icon full-screen-link p-0"  id="fullscreen-button">
										<svg xmlns="http://www.w3.org/2000/svg" class="header-icon" width="24" height="24" viewBox="0 0 24 24"><path d="M10 4L8 4 8 8 4 8 4 10 10 10zM8 20L10 20 10 14 4 14 4 16 8 16zM20 14L14 14 14 20 16 20 16 16 20 16zM20 8L16 8 16 4 14 4 14 10 20 10z"/></svg>
									</a>
								</div>
								<div class="dropdown profile-dropdown">
									<a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
										<span>
											<img src="{{URL::asset('assets/images/users/1.jpg')}}" alt="img" class="avatar avatar-md brround">
										</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow animated">
									 {{-- @guest --}}
	 @auth

										<div class="text-center">
											<a href="#" class="dropdown-item text-center user pb-0 font-weight-bold">{{ Auth::user()->name }}</a>
											<span class="text-center user-semi-title">{{ Auth::user()->email }}</span>
											<div class="dropdown-divider"></div>
										</div>
										<a class="dropdown-item d-flex" href="#">
											<svg class="header-icon mr-3" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/></g><g><path d="M11,7L9.6,8.4l2.6,2.6H2v2h10.2l-2.6,2.6L11,17l5-5L11,7z M20,19h-8v2h8c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2h-8v2h8V19z"/></g></svg>
											<div class="" href="{{ route('logout') }}"
												onclick="event.preventDefault();
																document.getElementById('logout-form').submit();">
													{{ __('Logout') }}
											</div>
										 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                       			 @csrf
                                   		 </form>
										</a>
									</div>

                               
                        @elseif(Route::has('login'))

<li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li> 
						
							


            @endif


			
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/header-->