@foreach($items as $item)
<li class="nav-item
@if($item->hasChildren()) dropdown @endif
@if($item->active) active @endif
">
	<a class="nav-link" href="{!! $item->url() !!}">{!! $item->title !!} </a>
	@if($item->hasChildren())
	<ul class="dropdown-menu">
		@include('admin.admin_menu_items', ['items' => $item->children()])
	</ul>
	@endif
</li>
@endforeach