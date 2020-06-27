@extends("application::Layouts.layout")
@section('content')
<div class="container">
	<div class="row">
		<div class="col-12">
			<br>
			<!--begin::Card-->
			<!--begin::Card-->
			<div class="card card-custom gutter-b">
				<div class="card-header flex-wrap border-0 pt-6 pb-0">
					<div class="row">
						

					<div class="col-3 input_checkday">
							<select class="form-control form-control-solid" style="width: 170px;">
								<option>Attach</option>
								<option>SQL Ịnection</option>

							</select>
						</div>
						<div class="col-3 input_checkday">
							<select class="form-control form-control-solid" style="width: 170px;">
								<option>IP Adress</option>
								<option>192.168.1.1</option>

							</select>
						</div>
						<div class="col-3 input_checkday">
							<select class="form-control form-control-solid" style="width: 170px;">
								<option>Country</option>
								<option>VietNam</option>

							</select>
						</div>
						<div class="col-3 input_checkday">
							<select class="form-control form-control-solid" style="width: 170px;">
								<option>URL</option>
								<option>/wp-content/themes</option>

							</select>
						</div>
			





										</div>
					<div class="card-toolbar" style="margin:0">
						
						<!--begin::Dropdown-->
						<div class="dropdown dropdown-inline mr-2">
						
						

						<!--begin::Button-->
						<a href="#" class="btn btn-primary font-weight-bolder">
							<span class="svg-icon svg-icon-md"><!--begin::Svg Icon | path:/metronic/themes/metronic/theme/html/demo4/dist/assets/media/svg/icons/Design/Flatten.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect x="0" y="0" width="24" height="24"/>
									<circle fill="#000000" cx="9" cy="15" r="6"/>
									<path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"/>
								</g>
							</svg><!--end::Svg Icon--></span>	Download Excel
						</a>
						<!--end::Button-->
					</div>
				</div>


				<div class="card-body">
					<!--begin: Datatable-->
					<table class="table table-separate table-head-custom table-checkable" id="kt_datatable1">
						<thead>
							<tr>
								<th>Time</th>
								<th>Attach</th>
								<th>IP Address</th>
								<th>Country</th>
								<th>URL</th>
								<th>Response</th>
								<th>User Action</th>
							
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>1</td>
								<td>64616-103</td>
								<td>Brazil</td>
								<td>São Félix do Xingu</td>
								<td>698 Oriole Pass</td>
								<td>Hayes Boule</td>
								<td>Casper-Kerluke</td>
								
							
							</tr>
							<tr>
								<td>2</td>
								<td>54868-3377</td>
								<td>Vietnam</td>
								<td>Bình Minh</td>
								<td>8998 Delaware Court</td>
								<td>Humbert Bresnen</td>
								<td>Hodkiewicz and Sons</td>
								
							
							</tr>
							<tr>
								<td>3</td>
								<td>0998-0355</td>
								<td>Philippines</td>
								<td>Palagao Norte</td>
								<td>91796 Sutteridge Road</td>
								<td>Jareb Labro</td>
								<td>Kuhlman Inc</td>
								
							</tr>
							<tr>
								<td>4</td>
								<td>55154-6876</td>
								<td>China</td>
								<td>Jiannan</td>
								<td>8 Muir Drive</td>
								<td>Krishnah Tosspell</td>
								<td>Prosacco-Kessler</td>
								
							</tr>
							<tr>
								<td>5</td>
								<td>49349-069</td>
								<td>United States</td>
								<td>Shawnee Mission</td>
								<td>782 Mallory Lane</td>
								<td>Dale Kernan</td>
								<td>Bernier and Sons</td>
								
								
							</tr>
							<tr>
								<td>6</td>
								<td>53499-0393</td>
								<td>Ukraine</td>
								<td>Kozel’shchyna</td>
								<td>02 Briar Crest Parkway</td>
								<td>Halley Bentham</td>
								<td>Schoen-Metz</td>
								
							</tr>
							<tr>
								<td>7</td>
								<td>43074-105</td>
								<td>Philippines</td>
								<td>De la Paz</td>
								<td>643 Mayer Road</td>
								<td>Burgess Penddreth</td>
								<td>DuBuque, Stanton and Stanton</td>
								
							</tr>
							<tr>
								<td>8</td>
								<td>76328-333</td>
								<td>Portugal</td>
								<td>Sobreira</td>
								<td>6715 Dakota Parkway</td>
								<td>Cob Sedwick</td>
								<td>Homenick-Nolan</td>
								
							</tr>
							<tr>
								<td>9</td>
								<td>21130-054</td>
								<td>France</td>
								<td>Roissy Charles-de-Gaulle</td>
								<td>4942 Darwin Hill</td>
								<td>Tabby Callaghan</td>
								<td>Daugherty-Considine</td>
								
							</tr>
							<tr>
								<td>10</td>
								<td>68788-9890</td>
								<td>Dominican Republic</td>
								<td>Cristóbal</td>
								<td>854 Dapin Terrace</td>
								<td>Broddy Jarry</td>
								<td>Walter Group</td>
								
							</tr>

						</tbody>

					</table>
					<!--end: Datatable-->
				</div>
			</div>
			<!--end::Card-->
			<br><br><br><br>
			<!--end::Card-->
		</div>
	</div>
</div>

@endsection