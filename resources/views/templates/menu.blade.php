 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="index3.html" class="brand-link">
         <span class="brand-text font-weight-light">Hotel Somnath Atithigruh</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
             <div class="image">
                 <img class="img-circle elevation-2" src="{{ Auth::user()->profile_photo_url }}"
                     alt="{{ Auth::user()->name }}">
             </div>
             <div class="info">
                 <a href="#" class="d-block"> {{ Auth::user()->name }}</a>
             </div>
             @endif
         </div>
         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <li class="nav-item">
                     <a href="./index.html" class="nav-link active">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>Dashboard</p>
                     </a>
                 </li>

                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-copy"></i>
                         <p>
                             Invoice
                             <i class="fas fa-angle-left right"></i>
                             <span class="badge badge-info right">6</span>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                     <li class="nav-item">
                             <a href="{{route('invoice-create')}}" target="_blank" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Create Invoice</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{route('invoices-list')}}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>List of Invoice</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{route('invoices-set-header')}}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Set Invoice Header</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="fas fa-home"></i>
                         <p>
                             Rooms
                             <i class="fas fa-angle-left right"></i>
                             <span class="badge badge-info right">6</span>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{route('room-list')}}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>List of Rooms</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{route('create-room')}}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Add New Room Type</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Delete Room Type</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-copy"></i>
                         <p>
                             Sources
                             <i class="fas fa-angle-left right"></i>
                             <span class="badge badge-info right">6</span>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{route('booking-source')}}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>List of Sources</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{route('create-source')}}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Add New Source</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Delete Source</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-copy"></i>
                         <p>
                             Income
                             <i class="fas fa-angle-left right"></i>
                             <span class="badge badge-info right">6</span>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{route('income-source')}}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>List of Incomes</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{route('create-income')}}" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Add New Income</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Delete Existing Income</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-copy"></i>
                         <p>
                             Reports
                             <i class="fas fa-angle-left right"></i>
                             <span class="badge badge-info right">6</span>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="pages/layout/top-nav.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Daily Revenue Report</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="pages/layout/top-nav.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Revenue Statement</p>
                             </a>
                         </li>

                     </ul>
                 </li>

                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-th"></i>
                         <p>
                             Data Backup
                             <i class="fas fa-angle-left right"></i>
                             <span class="badge badge-info right">6</span>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="pages/layout/top-nav.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>GSTN Setting</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="pages/layout/top-nav.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Backup Invoices</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="pages/layout/top-nav.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Clean Invoices Data</p>
                             </a>
                         </li>


                     </ul>
                 </li>

                 <li class="nav-item">
                     <form method="POST" action="{{ route('logout') }}">
                         @csrf
                         <button class="btn btn-danger form-control">Logout</button>
                     </form>
                 </li>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>