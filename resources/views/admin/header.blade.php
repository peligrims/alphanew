<!--
@include('admin.admin_menu')-->

<div class="container portfolio_title"> 
    
    <!-- Title -->
    <div class="section-title">
      <h2>Dashboard</h2>
    </div>
	<div>
		

		<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
			{{ csrf_field() }}
		</form>
		
	</div>
    <!--/Title --> 
    
  </div>
  <!-- Container -->
  
<div class="portfolio">

  <div id="filters" class="sixteen columns">
      <ul style="padding:0px 0px 0px 0px">
     
      
      
        <li><a  href="{{route('pages')}}">
          <h5>Pages</h5>
          </a>
		</li>
		
		<li><a  href="{{route('portfolio')}}">
          <h5>Portfolios</h5>
          </a>
		</li>
		
		<li><a href="{{route('services')}}">
          <h5>Services</h5>
          </a>
		</li>
    <li><a href="{{route('term_sheets')}}">
          <h5>Term Sheet</h5>
          </a>
    </li>
   
    <li><a href="{{route('borrowers')}}">
          <h5>Borrower</h5>
          </a>
    </li>
    <li><a href="{{route('brokers')}}">
          <h5>Broker</h5>
          </a>
    </li>
	<li>
		<a href="{{route('documents')}}">
			<h5>Document</h5>
		</a>
	</li>
	<li>
		<a href="{{route('potentials')}}">
		<h5>Potential names</h5>
		</a>
	</li>
	
	<li>
				<a href="{{route('loan_conditions')}}">
		<h5>Loan conditions</h5>
		</a>
	</li>
	
	<li>
				<a href="{{ url('/logout') }}"
   onclick="event.preventDefault();
					document.getElementById('logout-form').submit();"><h5>
					Logout
					</h5></a>
	</li>
	<li>
		<a href="{{route('personal_accounts')}}">
			<h5>Personal Account</h5>
		</a>
	</li>
			
      </ul>
    </div>
   
</div>	
