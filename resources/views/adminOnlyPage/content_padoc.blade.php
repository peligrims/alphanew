@extends('layouts.admin')
 <script type="text/javascript">


	 

 </script>
<div class="container">

	<div id="lc" class="row">
		<ol>
		@if ($term_sheet['lc_01']=='1')
		<li>	
				<body>
					<div class="container">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<h3 class="jumbotron">Signed Loan Application File Upload</h3>
						<form method="post" enctype="multipart/form-data">
							{{csrf_field()}}

							<div class="input-group control-group increment" >
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button">
										<i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>
							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button">
											<i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

						</form>
					</div>
				</body>
		</li>
		@else
		@endif
		@if ($term_sheet['lc_02']=='1')	
		<li>
			<body>
					<div class="container">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<h3 class="jumbotron">Articles of organization and operating agreement for the holding entity File Upload </h3>
						<form method="post"  enctype="multipart/form-data">
							{{csrf_field()}}

							<div class="input-group control-group increment" >
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button">
										<i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>
							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button">
											<i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

						</form>
					</div>
				</body>
		</li>		
		@else
		@endif
		@if ($term_sheet['lc_03']=='1')
		<li>
			
			<body>
				<div class="container">
					@if (count($errors) > 0)
					<div class="alert alert-danger">
						<strong>Whoops!</strong> There were some problems with your input.<br><br>
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif

					@if(session('success'))
					<div class="alert alert-success">
						{{ session('success') }}
					</div>
					@endif

						<h3 class="jumbotron">Credit-report authorization form for each guarantor/principal File Upload</h3>
					<form method="post"  enctype="multipart/form-data">
						{{csrf_field()}}

						<div class="input-group control-group increment" >
							<input type="file" name="filename[]" class="form-control">
							<div class="input-group-btn">
								<button class="btn btn-success" type="button">
									<i class="glyphicon glyphicon-plus"></i>Add</button>
							</div>
						</div>
						<div class="clone hide">
							<div class="control-group input-group" style="margin-top:10px">
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-danger" type="button">
										<i class="glyphicon glyphicon-remove"></i> Remove</button>
								</div>
							</div>
						</div>

						<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

					</form>
				</div>
			</body>
		</li>
		@else
		@endif
		@if ($term_sheet['lc_04']=='1')
		<li>
			<body>
				<div class="container">
					@if (count($errors) > 0)
					<div class="alert alert-danger">
						<strong>Whoops!</strong> There were some problems with your input.<br><br>
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif

					@if(session('success'))
					<div class="alert alert-success">
						{{ session('success') }}
					</div>
					@endif

					<h3 class="jumbotron">Personal financial statement for each guarantor/principal (PFS) File Upload</h3>
					<form method="post"  enctype="multipart/form-data">
						{{csrf_field()}}

						<div class="input-group control-group increment" >
							<input type="file" name="filename[]" class="form-control">
							<div class="input-group-btn">
								<button class="btn btn-success" type="button">
									<i class="glyphicon glyphicon-plus"></i>Add</button>
							</div>
						</div>
						<div class="clone hide">
							<div class="control-group input-group" style="margin-top:10px">
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-danger" type="button">
										<i class="glyphicon glyphicon-remove"></i> Remove</button>
								</div>
							</div>
						</div>

						<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

					</form>
				</div>
			</body>
		</li>
		@else
		@endif
				
		@if ($term_sheet['lc_05']=='1')
		<li>
				<body>
					<div class="container">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<h3 class="jumbotron">REO File Upload</h3>
						<form method="post"  enctype="multipart/form-data">
							{{csrf_field()}}

							<div class="input-group control-group increment" >
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button">
										<i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>
							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button">
											<i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

						</form>
					</div>
				</body>
			</li>
			
		@else
		@endif

		@if ($term_sheet['lc_06']=='1')
		
		<li>
				<body>
					<div class="container">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<h3 class="jumbotron">Guarantor/principal’s resume File Upload</h3>
						<form method="post"  enctype="multipart/form-data">
							{{csrf_field()}}

							<div class="input-group control-group increment" >
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button">
										<i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>
							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button">
											<i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

						</form>
					</div>
				</body>
			</li>
		@else
		@endif

		@if ($term_sheet['lc_07']=='1')
		
		<li>
				<body>
					<div class="container">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<h3 class="jumbotron">Sponsor(s) global cash flow File Upload</h3>
						<form method="post"  enctype="multipart/form-data">
							{{csrf_field()}}

							<div class="input-group control-group increment" >
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button">
										<i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>
							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button">
											<i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

						</form>
					</div>
				</body>
			</li>
						
		@else
		@endif
		
		@if ($term_sheet['lc_08']=='1')
		
		<li>
				<body>
					<div class="container">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<h3 class="jumbotron">BIO & history File Upload</h3>
						<form method="post"  enctype="multipart/form-data">
							{{csrf_field()}}

							<div class="input-group control-group increment" >
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button">
										<i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>
							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button">
											<i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

						</form>
					</div>
				</body>
			</li>
		@else
		@endif
		@if ($term_sheet['lc_09']=='1')
		<li>
				<body>
					<div class="container">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<h3 class="jumbotron">Copy of guarantying principal’s driver’s license  File Upload</h3>
						<form method="post"  enctype="multipart/form-data">
							{{csrf_field()}}

							<div class="input-group control-group increment" >
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button">
										<i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>
							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button">
											<i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

						</form>
					</div>
				</body>
			</li>
		@else
		@endif

		@if ($term_sheet['lc_10']=='1')
		
		<li>
				<body>
					<div class="container">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<h3 class="jumbotron">“__” Months of bank statements File Upload</h3>
						<form method="post"  enctype="multipart/form-data">
							{{csrf_field()}}

							<div class="input-group control-group increment" >
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button">
										<i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>
							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button">
											<i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

						</form>
					</div>
				</body>
			</li>
		@else
		@endif

		@if ($term_sheet['lc_11']=='1')
		
		<li>
				<body>
					<div class="container">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<h3 class="jumbotron">Most recent Audited Financial Statements of the Subject Property File Upload</h3>
						<form method="post"  enctype="multipart/form-data">
							{{csrf_field()}}

							<div class="input-group control-group increment" >
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button">
										<i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>
							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button">
											<i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

						</form>
					</div>
				</body>
			</li>
		@else
		@endif

		@if ($term_sheet['lc_12']=='1')
		
			<li>
				<body>
					<div class="container">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<h3 class="jumbotron">Most recent Audited Financial Statements of entity(ies) File Upload</h3>
						<form method="post"  enctype="multipart/form-data">
							{{csrf_field()}}

							<div class="input-group control-group increment" >
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button">
										<i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>
							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button">
											<i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

						</form>
					</div>
				</body>
			</li>
		@else
		@endif
		

		@if ($term_sheet['lc_13']=='1')
			<li>
				<body>
					<div class="container">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<h3 class="jumbotron">YTD financial statements of the subject property File Upload</h3>
						<form method="post"  enctype="multipart/form-data">
							{{csrf_field()}}

							<div class="input-group control-group increment" >
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button">
										<i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>
							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button">
											<i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

						</form>
					</div>
				</body>
			</li>
		@else
		@endif
		
		@if ($term_sheet['lc_14']=='1')
			
			<li>
				<body>
					<div class="container">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<h3 class="jumbotron">YTD financial statements of entity File Upload</h3>
						<form method="post"  enctype="multipart/form-data">
							{{csrf_field()}}

							<div class="input-group control-group increment" >
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button">
										<i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>
							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button">
											<i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

						</form>
					</div>
				</body>
			</li>
		@else
		@endif

		@if ($term_sheet['lc_15']=='1')
			<li>
				<body>
					<div class="container">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<h3 class="jumbotron">Most recent two years signed, complete personal federal tax returns, including all sched- ules,
							statements and K-1s (along with those of any related business entities) File Upload</h3>
						<form method="post"  enctype="multipart/form-data">
							{{csrf_field()}}

							<div class="input-group control-group increment" >
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button">
										<i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>
							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button">
											<i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

						</form>
					</div>
				</body>
			</li>
		@else
		@endif

		@if ($term_sheet['lc_16']=='1')
		<li>
				<body>
					<div class="container">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<h3 class="jumbotron">Old appraisal(s), if any File Upload</h3>
						<form method="post"  enctype="multipart/form-data">
							{{csrf_field()}}

							<div class="input-group control-group increment" >
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button">
										<i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>
							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button">
											<i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

						</form>
					</div>
				</body>
			</li>
		@else
		@endif

		@if ($term_sheet['lc_17']=='1')
			<li>
				<body>
					<div class="container">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<h3 class="jumbotron">New appraisal report(s) (to be ordered by lender, unless requirement is waived at lender's
							sole discretion after review and acceptance of current existing appraisal; must be updated
							and reassigned to lender; to be paid for by borrower directly)) File Upload</h3>
						<form method="post"  enctype="multipart/form-data">
							{{csrf_field()}}

							<div class="input-group control-group increment" >
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button">
										<i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>
							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button">
											<i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

						</form>
					</div>
				</body>
			</li>
		@else
		@endif

		@if ($term_sheet['lc_18']=='1')
			<li>
				<body>
					<div class="container">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<h3 class="jumbotron">Old Phase 1 environmental report(s), if any. File Upload</h3>
						<form method="post"  enctype="multipart/form-data">
							{{csrf_field()}}

							<div class="input-group control-group increment" >
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button">
										<i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>
							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button">
											<i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

						</form>
					</div>
				</body>
			</li>
		@else
		@endif
		@if ($term_sheet['lc_19']=='1')
			<li>
				<body>
					<div class="container">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<h3 class="jumbotron">Phase I environmental report(s) (to be ordered by Lender, unless requirement is waived at
							Lender’s sole discretion after review and acceptance of any current existing reports). File Upload</h3>
						<form method="post"  enctype="multipart/form-data">
							{{csrf_field()}}

							<div class="input-group control-group increment" >
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button">
										<i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>
							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button">
											<i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

						</form>
					</div>
				</body>
			</li>
		@else
		@endif

		@if ($term_sheet['lc_20']=='1')
			<li>
				<body>
					<div class="container">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<h3 class="jumbotron">Detailed property expenses File Upload</h3>
						<form method="post"  enctype="multipart/form-data">
							{{csrf_field()}}

							<div class="input-group control-group increment" >
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button">
										<i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>
							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button">
											<i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

						</form>
					</div>
				</body>
			</li>
		@else
		@endif

		@if ($term_sheet['lc_21']=='1')
			<li>
				<body>
					<div class="container">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<h3 class="jumbotron">PSA File Upload</h3>
						<form method="post"  enctype="multipart/form-data">
							{{csrf_field()}}

							<div class="input-group control-group increment" >
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button">
										<i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>
							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button">
											<i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

						</form>
					</div>
				</body>
			</li>
		@else
		@endif
		
		@if ($term_sheet['lc_22']=='1')
			<li>
				<body>
					<div class="container">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<h3 class="jumbotron">Rent-Roll File Upload</h3>
						<form method="post"  enctype="multipart/form-data">
							{{csrf_field()}}

							<div class="input-group control-group increment" >
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button">
										<i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>
							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button">
											<i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

						</form>
					</div>
				</body>
			</li>
		@else
		@endif
		@if ($term_sheet['lc_23']=='1')
			<li>
				<body>
					<div class="container">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<h3 class="jumbotron">Copies of any signed lease agreements File Upload</h3>
						<form method="post"  enctype="multipart/form-data">
							{{csrf_field()}}

							<div class="input-group control-group increment" >
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button">
										<i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>
							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button">
											<i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

						</form>
					</div>
				</body>
			</li>
		@else
		@endif

		@if ($term_sheet['lc_24']=='1')
			<li>
				<body>
					<div class="container">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<h3 class="jumbotron">Tenant's most recent two years financials File Upload</h3>
						<form method="post"  enctype="multipart/form-data">
							{{csrf_field()}}

							<div class="input-group control-group increment" >
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button">
										<i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>
							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button">
											<i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

						</form>
					</div>
				</body>
			</li>
		@else
		@endif

		@if ($term_sheet['lc_25']=='1')
			<li>
				<body>
					<div class="container">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<h3 class="jumbotron">New potential tenants' information, LOI File Upload</h3>
						<form method="post"  enctype="multipart/form-data">
							{{csrf_field()}}

							<div class="input-group control-group increment" >
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button">
										<i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>
							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button">
											<i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

						</form>
					</div>
				</body>
			</li>
		@else
		@endif

		@if ($term_sheet['lc_26']=='1')
			<li>
				<body>
					<div class="container">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<h3 class="jumbotron">Proforma rent-roll File Upload</h3>
						<form method="post"  enctype="multipart/form-data">
							{{csrf_field()}}

							<div class="input-group control-group increment" >
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button">
										<i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>
							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button">
											<i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

						</form>
					</div>
				</body>
			</li>
		@else
		@endif
		@if ($term_sheet['lc_27']=='1')
			<li>
				<body>
					<div class="container">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<h3 class="jumbotron">Proforma File Upload</h3>
						<form method="post"  enctype="multipart/form-data">
							{{csrf_field()}}

							<div class="input-group control-group increment" >
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button">
										<i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>
							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button">
											<i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

						</form>
					</div>
				</body>
			</li>
		@else
		@endif

		@if ($term_sheet['lc_28']=='1')
			<li>
				<body>
					<div class="container">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<h3 class="jumbotron">Executive summary File Upload</h3>
						<form method="post"  enctype="multipart/form-data">
							{{csrf_field()}}

							<div class="input-group control-group increment" >
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button">
										<i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>
							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button">
											<i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

						</form>
					</div>
				</body>
			</li>
		@else
		@endif

		@if ($term_sheet['lc_29']=='1')
			<li>
				<body>
					<div class="container">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<h3 class="jumbotron">Business plan overview File Upload</h3>
						<form method="post"  enctype="multipart/form-data">
							{{csrf_field()}}

							<div class="input-group control-group increment" >
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button">
										<i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>
							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button">
											<i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

						</form>
					</div>
				</body>
			</li>
		@else
		@endif
		
		@if ($term_sheet['lc_30']=='1')
			<li>
				<body>
					<div class="container">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<h3 class="jumbotron">Clearly defined and documented exit strategy File Upload</h3>
						<form method="post"  enctype="multipart/form-data">
							{{csrf_field()}}

							<div class="input-group control-group increment" >
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button">
										<i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>
							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button">
											<i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

						</form>
					</div>
				</body>
			</li>
		@else
		@endif
		@if ($term_sheet['lc_31']=='1')
			<li>
				<body>
					<div class="container">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<h3 class="jumbotron">Detail CapEx/construction budget, plans and approvals File Upload</h3>
						<form method="post"  enctype="multipart/form-data">
							{{csrf_field()}}

							<div class="input-group control-group increment" >
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button">
										<i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>
							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button">
											<i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

						</form>
					</div>
				</body>
			</li>
		@else
		@endif

		@if ($term_sheet['lc_32']=='1')
			<li>
				<body>
					<div class="container">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<h3 class="jumbotron">Construction baseline report File Upload</h3>
						<form method="post"  enctype="multipart/form-data">
							{{csrf_field()}}

							<div class="input-group control-group increment" >
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button">
										<i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>
							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button">
											<i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

						</form>
					</div>
				</body>
			</li>
		@else
		@endif
		
		@if ($term_sheet['lc_33']=='1')
			<li>
				<body>
					<div class="container">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<h3 class="jumbotron">Construction baseline report (to be ordered by lender) File Upload</h3>
						<form method="post"  enctype="multipart/form-data">
							{{csrf_field()}}

							<div class="input-group control-group increment" >
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button">
										<i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>
							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button">
											<i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

						</form>
					</div>
				</body>
			</li>
		@else
		@endif
		@if ($term_sheet['lc_34']=='1')
			<li>
				<body>
					<div class="container">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<h3 class="jumbotron">Information on general contractor (descriptive and financial) File Upload</h3>
						<form method="post"  enctype="multipart/form-data">
							{{csrf_field()}}

							<div class="input-group control-group increment" >
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button">
										<i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>
							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button">
											<i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

						</form>
					</div>
				</body>
			</li>
		@else
		@endif

		@if ($term_sheet['lc_35']=='1')
			<li>
				<body>
					<div class="container">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<h3 class="jumbotron">General contractor. Bonding information File Upload</h3>
						<form method="post"  enctype="multipart/form-data">
							{{csrf_field()}}

							<div class="input-group control-group increment" >
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button">
										<i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>
							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button">
											<i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

						</form>
					</div>
				</body>
			</li>
		@else
		@endif

		@if ($term_sheet['lc_36']=='1')
			<li>
				<body>
					<div class="container">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<h3 class="jumbotron">General contractor. Licensing Information File Upload</h3>
						<form method="post"  enctype="multipart/form-data">
							{{csrf_field()}}

							<div class="input-group control-group increment" >
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button">
										<i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>
							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button">
											<i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

						</form>
					</div>
				</body>
			</li>
		@else
		@endif

		@if ($term_sheet['lc_37']=='1')
			<li>
				<body>
					<div class="container">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<h3 class="jumbotron">Current state of the construction File Upload</h3>
						<form method="post"  enctype="multipart/form-data">
							{{csrf_field()}}

							<div class="input-group control-group increment" >
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button">
										<i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>
							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button">
											<i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

						</form>
					</div>
				</body>
			</li>
		@else
		@endif
		@if ($term_sheet['lc_38']=='1')
			<li>
				<body>
					<div class="container">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<h3 class="jumbotron">Prelim title File Upload</h3>
						<form method="post"  enctype="multipart/form-data">
							{{csrf_field()}}

							<div class="input-group control-group increment" >
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button">
										<i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>
							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button">
											<i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

						</form>
					</div>
				</body>
			</li>
		@else
		@endif

		@if ($term_sheet['lc_39']=='1')
			<li>
				<body>
					<div class="container">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<h3 class="jumbotron">Complete title reports and insurance (to be ordered by Lender) File Upload</h3>
						<form method="post"  enctype="multipart/form-data">
							{{csrf_field()}}

							<div class="input-group control-group increment" >
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button">
										<i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>
							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button">
											<i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

						</form>
					</div>
				</body>
			</li>
		@else
		@endif

		@if ($term_sheet['lc_40']=='1')
			<li>
				<body>
					<div class="container">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
						@endif

						<h3 class="jumbotron">All Info related to existing loan: promissory note, payment history File Upload</h3>
						<form method="post"  enctype="multipart/form-data">
							{{csrf_field()}}

							<div class="input-group control-group increment" >
								<input type="file" name="filename[]" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-success" type="button">
										<i class="glyphicon glyphicon-plus"></i>Add</button>
								</div>
							</div>
							<div class="clone hide">
								<div class="control-group input-group" style="margin-top:10px">
									<input type="file" name="filename[]" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-danger" type="button">
											<i class="glyphicon glyphicon-remove"></i> Remove</button>
									</div>
								</div>
							</div>

							<button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

						</form>
					</div>
				</body>
			</li>
		@else
		@endif
		</ol>
	</div>
</div>