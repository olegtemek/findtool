<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminPanel</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    
        <li class="nav-item">
          
          <a href="{{route('admin.category.index')}}" class="nav-link {{(request()->is('admin/category*')) ? 'active' : ''}}">
            <i class="nav-icon fas fa-file"></i>
            <p>Category</p>
          </a>
        </li>
        <li class="nav-item">
          
          <a href="{{route('admin.company.index')}}" class="nav-link {{(request()->is('admin/company*')) ? 'active' : ''}}">
            <i class="nav-icon fas fa-file"></i>
            <p>Companies</p>
          </a>
        </li>
        <li class="nav-item">
          
          <a href="{{route('admin.moderation.index')}}" class="nav-link {{(request()->is('admin/moderation*')) ? 'active' : ''}}">
            <i class="nav-icon fas fa-file"></i>
            <p>Moderation</p>
          </a>
        </li>
        
       
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>