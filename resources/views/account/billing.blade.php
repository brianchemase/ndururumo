@extends('account.inc.master')

@section('title','Dashboard')

@section('content')

<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Clients Billing </h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Empty card</h5>
								</div>
								<div class="card-body">
								</div>
							</div>
						</div>
					</div>

					<div class="row">
					<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Get Client To Bill</h5>
									<h6 class="card-subtitle text-muted">Select Client for billing.</h6>
								</div>
								<div class="card-body">
									<form class="row row-cols-md-auto align-items-center">
										

										<div class="col-12">
											<label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
											<div class="input-group mb-2 mr-sm-6">
												<div class="input-group-text">Get Client</div>
												<select class="form-select" id="validationDefault04" required>
													<option selected disabled value="">Choose...</option>
													<option> Area 1...</option>
													<option> Area 2...</option>
												</select>
												<!-- <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username"> -->
											</div>
										</div>

										

										<div class="col-12">
											<button type="submit" class="btn btn-primary mb-2">Search Client</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>



					<div class="row">
						<div class="col-12">
							
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Register Reading</h5>
									
								</div>
								<div class="card-body">
									<form class="row g-3">
										<div class="col-md-6">
											<label for="validationDefault01" class="form-label">Previouse Reading</label>
											<input type="number" class="form-control" id="validationDefault01" name="prev" placeholder="Last reading" required>
										</div>
										<div class="col-md-6">
											<label for="validationDefault02" class="form-label">Current Reading</label>
											<input type="number" class="form-control" id="validationDefault02" name="newreading" placeholder="Current Reading" required>
										</div>
										<div class="col-md-4">
											<label for="validationDefault02" class="form-label">ID No/Passport Number</label>
											<input type="text" class="form-control" id="validationDefault02" name="idno" placeholder="Enter ID/Passport" required>
										</div>
										<div class="col-md-4">
											<label for="validationDefaultUsername" class="form-label">Metre No</label>
											<div class="input-group">
												<span class="input-group-text" id="inputGroupPrepend2">@</span>
												<input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="MetreNo" placeholder="Entre Metre No"
													required>
											</div>
										</div>

										<div class="col-md-4">
											<label for="validationDefault02" class="form-label">Reading Date</label>
											<input type="date" class="form-control" id="validationDefault02" name="readingdate" placeholder="Enter ID/Passport" required>
										</div>
										
										
										
										
										
										<div class="col-12">
											<button class="btn btn-primary" type="submit">Register Client</button>
										</div>
									</form>
								</div>
							</div>

						
						</div>
					</div>

					

				</div>
			</main>
@endsection