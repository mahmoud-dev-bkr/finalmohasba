<div id="navbar-wrapper"lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" >
    <nav class="navbar navbar-expand-lg bg-body-tertiary " >
       <div class="container-fluid nav-content">
          <a href="#" class="navbar-brand" id="sidebar-toggle"><i class="fa fa-bars"></i></a> <a class="navbar-brand" href="#">  {{ __('basic.welcome') }}  <span class="heading"> {{ __('basic.username') }}</span>  {{ __('basic.in') }} <span class="heading"> {{ __('basic.company_name') }} </span></a>
          <div>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                       <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-list-ul"></i></a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="#"><i class="fa-regular fa-comment-dots"></i></a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="#"><i class="fa-solid fa-circle-dot"></i></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('change.lang', app()->getLocale() == 'ar' ? 'en' : 'ar') }}" role="button"  aria-expanded="false">
                           <span>
                              {{  app()->getLocale() }}
                          </span>
                          <i class="fa-solid fa-globe"></i>
                        </a> 
                    </li>
                    <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           <i class="fa-solid fa-house-chimney"></i>
                       </a>
                       <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">logout</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                          <li>
                             <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                       </ul>
                    </li>
                 </ul>
              </div>
          </div>
       </div>
    </nav>
 </div>
