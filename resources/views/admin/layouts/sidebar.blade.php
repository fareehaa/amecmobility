<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{asset('admin/dist/img/avatar5.png')}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Amec Admin</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      
      <li>
        <a href="/AmecAdmin">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
        
      </li>
    <li><a href="{{route('profile.index')}}"><i class="fa fa-circle-o"></i> Profile</a></li>
          <li><a href="{{route('category.index')}}"><i class="fa fa-circle-o"></i> Product Category</a></li>
          <li><a href="{{route('products.index')}}"><i class="fa fa-circle-o"></i> Product</a></li>
          <li><a href="{{route('order.index')}}"><i class="fa fa-circle-o"></i> Order </a></li>
          <li><a href="{{route('achievement.index')}}"><i class="fa fa-circle-o"></i> Achiements </a></li>
          <li><a href="{{route('review.index')}}"><i class="fa fa-circle-o"></i> Review </a></li>
          <li><a href="{{route('post.index')}}"><i class="fa fa-circle-o"></i> post </a></li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
