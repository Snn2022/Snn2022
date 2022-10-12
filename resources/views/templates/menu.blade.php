 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4 text-white">
   <!-- Brand Logo -->
   <a href="https://www.facebook.com/md.nasirul.5/" target="_blank" class="brand-link text-center">
     <span class="brand-text font-weight-bold">JK-Inspiration</span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
     <!-- Sidebar user panel (optional) -->
     <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
       <div class="image">
         <img class="img-circle bg-light" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
       </div>
       <div class="info">
         <a href="#" class="d-block"> {{ Auth::user()->name }}</a>
       </div>
       @endif
     </div>
     <!-- Sidebar Menu -->
     <nav class="mt-2">
       @if(Auth::user()->id == 1)
       <!--  Admin side-menu start-->
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item">
           <a href="{{route('dashboard')}}" class="nav-link active">
             <i class="nav-icon fas fa-tachometer-alt"></i>
             <p>ড্যাশর্বোড</p>

           </a>
         </li>

         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="fas fa-user"></i>
             <p>
               সদস্যগণ
               <i class="fas fa-angle-left right"></i>
               <span class="badge badge-info right">6</span>
             </p>
           </a>
           <ul style="border:1px solid #fff;" class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{route('members')}}" class="nav-link">
                 <i class="fa fa-list nav-icon"></i>
                 <p>সদস্য তালিকা</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{route('createMember')}}" class="nav-link">
                 <i class="fa fa-user-plus nav-icon"></i>
                 <p>সদস্য যুক্ত করুন</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-item">
           <a href="{{route('loanList')}}" class="nav-link">
             <i class="fa fa-list nav-icon"></i>
             <p>লোন</p>
           </a>
         </li>
         <li class="nav-item">       
         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="fas fa-book"></i> &nbsp;
             <p>
               হিসাব বহি
               <i class="fas fa-angle-left right"></i>
             </p>
           </a>
           <ul style="border:1px solid #fff;" class="nav nav-treeview">
             <li class="nav-item">
               <a href="#" class="nav-link">
                 <i class="fa fa-list"></i> &nbsp;
                 <p>
                   আয় সমুহ
                   <i class="fas fa-angle-left right"></i>
                 </p>
               </a>
               <ul style="border:1px solid #fff;" class="nav nav-treeview">
                 <li class="nav-item">
                   <a href="{{route('collection')}}" class="nav-link">
                     <i class="fa fa-list nav-icon"></i>
                     <p>দৈনিক কালেকশন</p>
                   </a>
                 </li>
                 <li class="nav-item">
                   <a href="{{route('collection')}}" class="nav-link">
                     <i class="fa fa-list nav-icon"></i>
                     <p>বিবিধ আয়</p>
                   </a>
                 </li>
               </ul>
             </li>
             <li class="nav-item">
               <a href="#" class="nav-link">
                 <i class="fa fa-list"></i> &nbsp;
                 <p>
                   ব্যয় সমুহ
                   <i class="fas fa-angle-left right"></i>
                 </p>
               </a>
               <ul style="border:1px solid #fff;" class="nav nav-treeview">
                 <li class="nav-item">
                   <a href="{{route('collection')}}" class="nav-link">
                     <i class="fa fa-list nav-icon"></i>
                     <p>বেতন</p>
                   </a>
                 </li>
                 <li class="nav-item">
                   <a href="{{route('collection')}}" class="nav-link">
                     <i class="fa fa-list nav-icon"></i>
                     <p>বিবিধ খরচ</p>
                   </a>
                 </li>
               </ul>
             </li>
           </ul>
         </li>

         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="fas fa-clipboard-list"></i> &nbsp;
             <p>
               রিপোর্ট
               <i class="fas fa-angle-left right"></i>
             </p>
           </a>
           <ul style="border:1px solid #fff;" class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{route('members')}}" class="nav-link">
                 <i class="fa fa-list nav-icon"></i>
                 <p>আয়</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{route('members')}}" class="nav-link">
                 <i class="fa fa-list nav-icon"></i>
                 <p>ব্যয়</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{route('members')}}" class="nav-link">
                 <i class="fa fa-list nav-icon"></i>
                 <p>উদ্বর্ত-পত্র</p>
               </a>
             </li>

           </ul>
         </li>
         <li class="nav-item">
           <a href="{{route('profile.show')}}" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>Settings</p>
           </a>
         </li>

         <li class="nav-item mt-4">
           <form method="POST" action="{{ route('logout') }}">
             @csrf
             <button class="btn btn-danger form-control">লগ-আউট</button>
           </form>
         </li>
       </ul>
       @else
       <!--  member side-menu start-->
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item">
           <a href="{{route('dashboard')}}" class="nav-link active">
             <i class="nav-icon fas fa-tachometer-alt"></i>
             <p>ড্যাশর্বোড</p>

           </a>
         </li>

         <li class="nav-item">
           <a href="{{route('collection')}}" class="nav-link">
             <i class="fa fa-list nav-icon"></i>
             <p>দৈনিক কালেকশন</p>
           </a>
         </li>
         <li class="nav-item">
           <a href="{{route('profile.show')}}" class="nav-link">
             <i class="fas fa-cogs"></i>
             <p>
               Settings
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="{{route('profile.show')}}" class="nav-link">
             <i class="ion ion-bag"></i>
             <p>
               Package
               <i class="fas fa-angle-left right"></i>
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="{{route('profile.show')}}" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
             <p>Payments</p>
           </a>
         </li>

         <li class="nav-item mt-4">
           <form method="POST" action="{{ route('logout') }}">
             @csrf
             <button class="btn btn-danger form-control">লগ-আউট</button>
           </form>
         </li>
       </ul>
       @endif
     </nav>
     <!-- /.sidebar-menu -->
   </div>

   <!-- /.sidebar -->
 </aside>