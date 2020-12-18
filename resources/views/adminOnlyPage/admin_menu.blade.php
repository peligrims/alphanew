<ul class="navbar-nav mr-auto">
	@include('admin.admin_menu_items', ['items' => Menu::get('main_menu')->roots()])
</ul>