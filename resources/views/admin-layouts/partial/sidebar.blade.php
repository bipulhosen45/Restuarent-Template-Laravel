<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="" class="brand-link">
    <img src="{{asset('backend')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">{{Auth::user()->email}}</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('backend')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{Auth::user()->name}}</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

               <!-- Dashboard menu -->  
        <li class="nav-item menu-open">
          <a href="{{route('admin.dashboard')}}" class="nav-link {{Request::is('admin/dashboard*') ? 'active' : ''}}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </li>
          <!-- User register section menu -->  
          <li class="nav-item">
            <a href="#" class="nav-link {{Request::is('admin/usersignup*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                 Manage User
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('usersignup.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All User</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Logo menu -->  
          <li class="nav-item">
            <a href="#" class="nav-link {{Request::is('admin/logo*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                 Manage Brand Logo
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('logo.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Logo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('logo.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Logo</p>
                </a>
              </li>
            </ul>
          </li>
         
          <!-- Topbar menu -->  
          <li class="nav-item">
            <a href="#" class="nav-link {{Request::is('admin/topbar*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                 Manage Navbar
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('topbar.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('topbar.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Navbar</p>
                </a>
              </li>
            </ul>
          </li>
               <!-- Gallery menu -->  
        <li class="nav-item">
          <a href="#" class="nav-link {{Request::is('admin/gallery*') ?'active' : ''}}">
            <i class="nav-icon fas fa-image"></i>
            <p>
              Manage Gallery
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('gallery-category.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Gallery Category</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('gallery-category.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>create Category</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('gallery.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>All Gallery Item</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('gallery.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Create Gallery Item</p>
              </a>
            </li>
          </ul>
        </li>
                 
           <!-- Slider section -->  
           <li class="nav-item">
            <a href="#" class="nav-link {{Request::is('admin/slider*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                 Manage Slider
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('slider.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Slider</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('slider.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Slider</p>
                </a>
              </li>
            </ul>
          </li>
           <!-- welcome section -->  
           <li class="nav-item">
            <a href="#" class="nav-link {{Request::is('admin/welcome*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-handshake"></i>
              <p>
                 Manage Welcome
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('welcome.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Welcome</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('welcome.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Welcome</p>
                </a>
              </li>
            </ul>
          </li>
           <!-- About section -->  
           <li class="nav-item">
            <a href="#" class="nav-link {{Request::is('admin/about*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                 Manage About
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('about.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All About</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('about.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create About</p>
                </a>
              </li>
            </ul>
          </li>
               <!-- Menubar  -->  
        <li class="nav-item">
          <a href="#" class="nav-link {{Request::is('admin/menu*') ?'active' : ''}}">
            <i class="nav-icon fas fa-bars"></i>
            <p>
              Manage Menu 
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('menu.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>All Menu </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('menu.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Create Menu </p>
              </a>
            </li>
          </ul>
        </li>
               <!-- Event menu -->  
        <li class="nav-item">
          <a href="#" class="nav-link {{Request::is('admin/event*') ?'active' : ''}}">
            <i class="nav-icon fas fa-calendar-plus"></i>
            <p>
              Manage Event
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-Event">
              <a href="{{route('event.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>All Event</p>
              </a>
            </li>
            <li class="nav-Event">
              <a href="{{route('event.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Create Event</p>
              </a>
            </li>
          </ul>
        </li>
               <!-- Video menu -->  
        <li class="nav-item">
          <a href="#" class="nav-link {{Request::is('admin/video*') ?'active' : ''}}">
            <i class="nav-icon fas fa-images"></i>
            <p>
              Manage Video
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('video.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>All Video</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('video.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Create Video</p>
              </a>
            </li>
          </ul>
        </li>
               <!-- Blog menu -->  
        <li class="nav-item">
          <a href="#" class="nav-link {{Request::is('admin/blog*') ?'active' : ''}}">
            <i class="nav-icon fas fa-images"></i>
            <p>
              Manage Blog
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('blog.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>All Blog</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('blog.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Create Blog</p>
              </a>
            </li>
          </ul>
        </li>

           <!-- Reservitaion menu -->  
        <li class="nav-item">
          <a href="#" class="nav-link {{Request::is('admin/reservation*') ? 'active' : ''}}">
            <i class="nav-icon fas fa-book-open"></i>
            <p>
              Manage Reservation
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('reservation.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Reservation User List</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('image.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Reservation Banner List</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('image.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Create Reservation Banner</p>
              </a>
            </li>
          </ul>
        </li>

       <!-- Contact menu -->  
        <li class="nav-item">
          <a href="#" class="nav-link {{Request::is('admin/contact*') ? 'active' : ''}}">
            <i class="nav-icon fas fa-id-card"></i>
            <p>
              Manage Contact
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('contact.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>All Contact</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('contact.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Create Contact</p>
              </a>
            </li>
          </ul>
        </li>
             <!-- Footer section -->  
             <li class="nav-item">
              <a href="#" class="nav-link {{Request::is('admin/footer*') ? 'active' : ''}}">
                <i class="nav-icon fas fa-bars"></i>
                <p>
                  Manage Footer
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('footer.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>All Footer</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('footer.create')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Create Footer</p>
                  </a>
                </li>
              </ul>
            </li>
     
          <!-- Profile Section --> 
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Profile
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="nav-link">
                <i class="fas fa-sign-out-alt nav-icon"></i>
              <p>Logout</p>
            </a>
            <form action="{{route('logout')}}" id="logout-form" method="POST" style="display: none">
            @csrf
            </form>
            </li>
          </ul>
        </li>
        <span class="mb-5"></span>
      </ul>
    </nav>
    <br><br><br><br><br><br>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
