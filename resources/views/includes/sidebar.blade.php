
<div class="sidebar" id="sidebar">
	<div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">
			
			<ul>
				<li class="menu-title"> 
					<span>Main</span>
				</li>
				<li class="{{ Request::routeIs('dashboard') ? 'active' : '' }}"> 
					<a href="{{route('dashboard')}}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
				</li>
				
				<li class="{{ Request::routeIs('categories') ? 'active' : '' }}"> 
					<a href="{{route('categories')}}"><i class="fe fe-layout"></i> <span>Categories</span></a>
				</li>
				
				
				
				<li class="submenu">
					<a href="#"><i class="fe fe-star-o"></i> <span> Product</span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a class="{{ Request::routeIs('purchases') ? 'active' : '' }}" href="{{route('purchases')}}">Product</a></li>
						<li><a class="{{ Request::routeIs('add-purchase') ? 'active' : '' }}" href="{{route('add-purchase')}}">Add Product</a></li>
					</ul>
				</li>
				
				
				<li class="submenu">
					<a href="#"><i class="fa fa-truck"></i> <span> Supplier</span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a class="{{ Request::routeIs('suppliers') ? 'active' : '' }}" href="{{route('suppliers')}}">Supplier</a></li>
						<li><a class="{{ Request::routeIs('add-supplier') ? 'active' : '' }}" href="{{route('add-supplier')}}">Add Supplier</a></li>
					</ul>
				</li>

				<li class="submenu">
					<a href="#"><i class="fa fa-users"></i> <span> Employee</span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a class="{{ Request::routeIs('employees') ? 'active' : '' }}" href="{{route('employees')}}">Employee</a></li>
						<li><a class="{{ Request::routeIs('add-employee') ? 'active' : '' }}" href="{{route('add-employee')}}">Add Employee</a></li>
					</ul>
				</li>

				

			
				
				<li class="{{ Request::routeIs('profile') ? 'active' : '' }}"> 
					<a href="{{route('profile')}}"><i class="fa fa-user-circle"></i> <span>Profile</span></a>
				</li>
				
			</ul>
		</div>
	</div>
</div>

