@extends("application::Layouts.layout")
@section('content')
<div class="container">
	<div class="row">
		<div class="col-12">
			<br>
			<!--begin::Card-->
			<!--begin::Card-->
			<div class="card card-custom gutter-b" style="padding: 30px 0">
				<div class="container">
					<div class="row">

						<div class="col-6 input_checkday">
							<select class="form-control form-control-solid" style="width: 300px">
								<option>May 2020</option>
								<option>June 2020</option>

							</select>
						</div>

						<div class="col-6 back-dashboard">
							<a href="./dashboard" style="float: right;"><button type="button" class="btn btn-secondary mr-2">Back to Dashboard</button></a>
						</div>

						<div class="col-12">
							<br><br>
							<h2 style="color: #0075FF">Web Security Report</h2>
							<p>Below is the comprehensive web security report for 'vinacis.com' from May 1st to May 31st .</p>
							<div class="card card-custom gutter-b">
								<div id="kt_amcharts_7" style="height: 500px;"></div>

							</div>
							<h3>SUMMARY</h3>
							<p>Cloudsafe has detected and protected your website from 280 malicious visits; each of these attacks have the potential to cause critical damage to your website. With Cloudsafe, not only is your application being protected from exterior threats but you’re also saving resources by blocking unnecessary traffic from taking up bandwidth. <br>
							Here is an overview of the top 3 attacks that were monitored and filtered by our Web Application Firewall (WAF) based on the Types of Attack, Attack IPs, and Countries.</p>
						</div>
						<div class="col-4">
							<table class="table table-hover text-center">
								<thead>
									<tr>
										<th scope="col"><strong>Rank</strong></th>
										<th scope="col">Types of Attack</th>
										
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row" style="color:#0075FF">1</th>
										<td>SQL Injection</td>
									

									</tr>
									<tr>
										<th scope="row" style="color:#0075FF">2</th>
										<td>Request Header Filtering</td>
										

									</tr>
									<tr>
										<th scope="row" style="color:#0075FF">3</th>
										<td>Stealth Commanding</td>
									

									</tr>
								</tbody>
							</table>
						</div>

						<div class="col-4">
							<table class="table table-hover text-center">
								<thead>
									<tr>
										<th scope="col"><strong>Rank</strong></th>
										<th scope="col">Attack IPs</th>
										
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row"  style="color:#0075FF">1</th>
										<td>188.92.79.124</td>
									

									</tr>
									<tr>
										<th scope="row" style="color:#0075FF">2</th>
										<td>103.114.107.133</td>

									</tr>
									<tr>
										<th scope="row" style="color:#0075FF">3</th>
										<td>148.72.71.29</td>
									

									</tr>
								</tbody>
							</table>
						</div>

						<div class="col-4">
							<table class="table table-hover text-center">
								<thead>
									<tr>
										<th scope="col"><strong>Rank</strong></th>
										<th scope="col">Countries</th>
										
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row" style="color:#0075FF">1</th>
										<td>Latvia</td>
									

									</tr>
									<tr>
										<th scope="row" style="color:#0075FF">2</th>
										<td>United States</td>
										

									</tr>
									<tr>
										<th scope="row" style="color:#0075FF">3</th>
										<td>Germany</td>
									

									</tr>
								</tbody>
							</table>
						</div>
						

						<div class="col-12">
							<br><br>
							<h3>Summary of Blocked Attacks</h3>
							<p>Below is a visual breakdown of the web attacks along with a brief description of the most common type of listed time period.</p>
						</div>
						
						<div class="col-6">
							 <div id="kt_flotcharts_10" style="height: 300px;"></div>
						</div>

						<div class="col-6">
							<h4>The most common web attack during the listed time period was the 「SQL Injection」 attack.</h4>
							<p>An SQL Injection attack inserts a SQL phrase within the web application to exploit/change data or bypass administrator verification. The attacker would first find the parameter sent from the web application to the database. Then the attacker inserts a malicious SQL command within those parameters, which in turn would send a malicious query to the database.</p>
						</div>

						<div class="col-12">
							<br><br>
							<h3>Top Attack IP Addresses</h3>
							<p>Here is an overview of the top IP addresses that launched malicious attacks at your web server. If there are any IP addresses that you suspect to be malicious visitors, please blacklist them.</p>
						</div>
					      
						           
						        <!--end::Card-->
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

@endsection