   <!-- Sidebar -->
   <div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="dark">
        <a href="index.html" class="logo">
          <img
            src="assets/img/kaiadmin/logo_light.svg"
            alt="navbar brand"
            class="navbar-brand"
            height="20"
          />
        </a>
        <div class="nav-toggle">
          <button class="btn btn-toggle toggle-sidebar">
            <i class="gg-menu-right"></i>
          </button>
          <button class="btn btn-toggle sidenav-toggler">
            <i class="gg-menu-left"></i>
          </button>
        </div>
        <button class="topbar-toggler more">
          <i class="gg-more-vertical-alt"></i>
        </button>
      </div>
      <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
      <div class="sidebar-content">
        <ul class="nav nav-secondary">
          <li class="nav-item active">
            <a
              data-bs-toggle="collapse"
              href="#dashboard"
              class="collapsed"
              aria-expanded="false"
            >
              <i class="fas fa-home"></i>
              <p>Brand</p>
              <span class="caret"></span>
            </a>
            <div class="collapse" id="dashboard">
              <ul class="nav nav-collapse">
                <li>
                  <a href="{{ route('admin.brand.index') }}">
                    <span class="sub-item">List</span>
                  </a>
                </li>

                <li>
                  <a href="{{ route('admin.brand.create') }}">
                    <span class="sub-item">Create</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item active">
            <a
              data-bs-toggle="collapse"
              href="#category"
              class="collapsed"
              aria-expanded="false"
            >
              <i class="fas fa-home"></i>
              <p>Category</p>
              <span class="caret"></span>
            </a>
            <div class="collapse" id="category">
              <ul class="nav nav-collapse">
                <li>
                  <a href="{{ route('admin.category.index') }}">
                    <span class="sub-item">List</span>
                  </a>
                </li>

                <li>
                  <a href="{{ route('admin.category.create') }}">
                    <span class="sub-item">Create</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item active">
            <a
              data-bs-toggle="collapse"
              href="#order"
              class="collapsed"
              aria-expanded="false"
            >
              <i class="fas fa-home"></i>
              <p>Order</p>
              <span class="caret"></span>
            </a>
            <div class="collapse" id="order">
              <ul class="nav nav-collapse">
                <li>
                  <a href="{{ route('admin.orders.index') }}">
                    <span class="sub-item">List</span>
                  </a>
                </li>

                
              </ul>
            </div>
          </li>




          <li class="nav-item active">
            <a
              data-bs-toggle="collapse"
              href="#product"
              class="collapsed"
              aria-expanded="false"
            >
              <i class="fas fa-home"></i>
              <p>product</p>
              <span class="caret"></span>
            </a>
            <div class="collapse" id="product">
              <ul class="nav nav-collapse">
                <li>
                  <a href="{{ route('admin.product.index') }}">
                    <span class="sub-item">List</span>
                  </a>
                </li>

                <li>
                  <a href="{{ route('admin.product.create') }}">
                    <span class="sub-item">Create</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item active">
            <a
              data-bs-toggle="collapse"
              href="#blog"
              class="collapsed"
              aria-expanded="false"
            >
              <i class="fas fa-home"></i>
              <p>Blog</p>
              <span class="caret"></span>
            </a>
            <div class="collapse" id="blog">
              <ul class="nav nav-collapse">
                <li>
                  <a href="{{ route('admin.blogs.index') }}">
                    <span class="sub-item">List</span>
                  </a>
                </li>

                <li>
                  <a href="{{ route('admin.blogs.create') }}">
                    <span class="sub-item">Create</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item active">
            <a
              data-bs-toggle="collapse"
              href="#user"
              class="collapsed"
              aria-expanded="false"
            >
              <i class="fas fa-home"></i>
              <p>User </p>
              <span class="caret"></span>
            </a>
            <div class="collapse" id="user">
              <ul class="nav nav-collapse">
                <li>
                  <a href="{{ route('admin.users.index') }}">
                    <span class="sub-item">List</span>
                  </a>
                </li>

                <li>
                  <a href="{{ route('admin.users.create') }}">
                    <span class="sub-item">Create</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          
   
        </ul>
      </div>
    </div>
  </div>
  <!-- End Sidebar -->