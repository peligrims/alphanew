<div style="margin:0px 50px 0px 50px;">   


	
	<div class="portfolio">

		<div id="filters" class="sixteen columns">
			<ul style="padding:0px 0px 0px 0px">
				
				
				
				<li>
					<a href="{{route('pats')}}">
						<h5>My Term Sheet</h5>
					</a>
				</li>
				<li>
					<a href="{{route('palaadd')}}">
						<h5>Add my Loan Application</h5>
					</a>
				</li>
				<li>
					<a href="{{route('palaView')}}">
						<h5>View my Loan Application</h5>
					</a>
				</li>
				
				
				<li>
					<a href="{{route('create')}}">
						<h5>My Documents for Uploads</h5>
					</a>
				</li>
				<li>
					<a href="{{ url('/logout') }}"
   onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">
						<h5>Logout</h5>
					</a>
				</li>
				
			</ul>
		</div>

	</div>

	
   
</div>