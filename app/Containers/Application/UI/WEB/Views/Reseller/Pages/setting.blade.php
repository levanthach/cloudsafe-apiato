@extends("application::Layouts.layout")
@section('content')
<div class="container">
	<div class="row">
		<div class="col-12">
		<!--begin::Card-->
<div class="card card-custom">
	<!--begin::Header-->
	<div class="card-header card-header-tabs-line">
		<ul class="nav nav-dark nav-bold nav-tabs nav-tabs-line" data-remember-tab="tab_id" role="tablist">
			<li class="nav-item">
				<a class="nav-link  active" data-toggle="tab" href="#kt_builder_page" role="tab">
					Overview
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link " data-toggle="tab" href="#kt_builder_header" role="tab">
					IP Controll
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link " data-toggle="tab" href="#kt_builder_subheader" role="tab">
					Country
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link " data-toggle="tab" href="#kt_builder_content" role="tab">
					Excluded URL
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link " data-toggle="tab" href="#kt_builder_footer" role="tab">
					DDoS
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link " data-toggle="tab" href="#kt_builder_footer" role="tab">
					SSL / Redirect
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link " data-toggle="tab" href="#kt_builder_footer" role="tab">
					Delete
				</a>
			</li>

			
		</ul>
	</div>
	<!--end::Header-->

	<!--begin::Form-->
	<form class="form" action="" method="POST">
		<!--begin::Body-->
		<div class="card-body">

			<div class="tab-content pt-3">
				<div class="tab-pane  active" id="kt_builder_page">
					<div class="form-group row">
						<label class="col-lg-3 col-form-label text-lg-right">Origin Web Server :</label>
						<div class="col-lg-5">
							<select class="form-control form-control-solid" name="builder[layout][page-loader][type]">
								<option value="IP Address" selected >IP Address (es)</option>
								<option value="CNAME">CNAME</option>
							</select>
							<div class="form-text text-muted">Select Origin Web Server</div>
						</div>
						<div class="col-lg-4">
							<input type="text" class="form-control" placeholder="210.211.117.99" />
							<div class="card-footer" style="float: right; padding: 2rem 0">
								<button type="reset" class="btn btn-primary mr-2">Add IP</button>
								<button type="reset" class="btn btn-secondary">Save</button>
							</div>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-lg-3 col-form-label text-lg-right">Web Server Port :</label>
						<div class="col-lg-1 col-form-label text-right">
							HTTP
						</div>
						<div class="col-lg-1">
							<input type="text" class="form-control" value="80" />
						</div>

						<div class="col-lg-1 col-form-label text-right">
							HTTPS
						</div>
						<div class="col-lg-1">
							<input type="text" class="form-control" value="443" />
						</div>

						<div class="col-lg-5">
							<div class="card-footer" style="float: right; padding: 0; border: none ">
								<button type="reset" class="btn btn-primary">Save</button>
							</div>
						</div>
					</div>

                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label text-lg-right">Bypass Mode:</label>
                        <div class="col-lg-9 col-xl-4">
                            <input type="hidden" name="builder[layout][toolbar][display]" value="false"/>
                            <span class="switch switch-icon">
								<label>
							        <input type="checkbox" name="builder[layout][toolbar][display]" value="true"  />
							        <span></span>
							    </label>
							</span>
                            <div class="form-text text-muted">When you turn on bypass mode, traffic will be bypassed without any detection. However, your traffic total will still be accumulated.</div>
                        </div>
                    </div>

                     <div class="form-group row">
                        <label class="col-lg-3 col-form-label text-lg-right">DNS Settings for Cloudsafe:</label>
                        <div class="col-lg-9 col-xl-4">
                            <table class="table table-bordered">
                            	<tbody class="text-center">
                            		<tr>
	                            		<td><strong>@</strong></td>
	                            		<td>A</td>
	                            		<td>103.216.124.30</td>
	                            	</tr>

	                            	<tr>
	                            		<td><strong>www</strong></td>
	                            		<td>CNAME</td>
	                            		<td>cloud.5eccc3ab.cloudsafe.info</td>
	                            	</tr>
                            	</tbody>
                            </table>
                            <div class="form-text text-muted">Registration method: Changed DNS Records</div>
                        </div>
                    </div>
				</div>

				<div class="tab-pane " id="kt_builder_header">
					<div class="form-group row">
						<div class="settings_content_main_wrap">
			                <div class="settings_content_main_title">IP Blacklist</div>
			                <div class="sub_text">Always block traffic from the following IP addresses.</div>
			                <div class="settings_content_main_value">
			                 
			                    <div class="settings_content_form_wrap">
			                        <div class="form-group inline_clear">
			                            <input type="text" name="black" class="form-control inline_left add_input" data-target-button="addBlackList" placeholder="e.g. 127.0.0.1, 127.0.0.1/32">
			                            <button id="addBlackList" class="btn btn-gray btn-sm add_button" data-control-type="black" type="button">Add Record</button>
			                            <p class="settiing_tip">IPv4 IP address or IPv4 IP address range (CIDR)</p>
			                        </div>
			                        <div class="tagit_wrapper">
			                           <textarea class="form-control" id="exampleTextarea" rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 200px;"></textarea>
			                        </div>
			                    </div>
			                </div>
			            </div>	
			            <br><br>
			            <div class="settings_content_main_wrap">
			                <div class="settings_content_main_title">IP Whitelist</div>
			                <div class="sub_text">Always allow traffic from the following IP addresses.</div>
			                <div class="settings_content_main_value">
			                 
			                    <div class="settings_content_form_wrap">
			                        <div class="form-group inline_clear">
			                            <input type="text" name="black" class="form-control inline_left add_input" data-target-button="addBlackList" placeholder="e.g. 127.0.0.1, 127.0.0.1/32">
			                            <button id="addBlackList" class="btn btn-gray btn-sm add_button" data-control-type="black" type="button">Add Record</button>
			                            <p class="settiing_tip">IPv4 IP address or IPv4 IP address range (CIDR)</p>
			                        </div>
			                        <div class="tagit_wrapper">
			                           <textarea class="form-control" id="exampleTextarea" rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 200px;"></textarea>
			                        </div>
			                    </div>
			                </div>
			            </div>	
					</div>
				</div>


				<div class="tab-pane " id="kt_builder_subheader">
					<div class="form-group row">
						<div class="settings_content_main_wrap">
			                <div class="settings_content_main_title">Country Access Control</div>
			                <span class="switch switch-icon" style="float: right">
								<label>
									<input type="checkbox" checked="checked" name="select">
									<span></span>
								</label>
							</span>
			              <br>
			              	<div class="form-group">
                        <div class="checkbox-list">
                          
                            <label class="radio">
                                <input type="radio" checked="checked" name="ip-country"> Country Blacklist - Allow access of all countries except for countries added in the list.
                                <span></span>
                            </label>

                             <label class="radio">
                                <input type="radio" name="ip-country"> Country Whitelist - Restrict access of all countries except for countries added in the list.
                                <span></span>
                            </label>
                        </div>
                    </div>

			                <div class="settings_content_main_value">
			                    <div class="settings_content_form_wrap">
			                        <div class="form-group inline_clear">
			                            <select class="form-control" id="exampleSelect-country">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
			                            <button id="addBlackList" class="btn btn-gray btn-sm add_button" data-control-type="black" type="button">Add Record</button>
			                  
			                        </div>
			                        <div class="tagit_wrapper">
			                           <textarea class="form-control" id="exampleTextarea" rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 200px;"></textarea>
			                        </div>
			                    </div>
			                </div>
			            </div>	
					</div>
				</div>

				<div class="tab-pane " id="kt_builder_content">
					<div class="form-group row">
						<div class="settings_content_main_wrap">
			                <div class="sub_text">Access to the list of URLs below will be allowed without any detection or blockade.</div>
			                <div class="settings_content_main_value">
			                 
			                    <div class="settings_content_form_wrap">
			                        <div class="form-group inline_clear">
			                            <input type="text" name="black" class="form-control inline_left add_input" data-target-button="addBlackList" placeholder="e.g. /wp-admin">
			                            <label class="checkbox">
											<input type="checkbox" checked="checked">include all subpaths 
											<span></span>
										</label>
			                            <button id="addBlackList" class="btn btn-gray btn-sm add_button" data-control-type="black" type="button">Add URL</button>
			                         
			                        </div>
			                        <div class="tagit_wrapper">
			                           <textarea class="form-control" id="exampleTextarea" rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 200px;"></textarea>
			                        </div>
			                    </div>
			                </div>
			            </div>	
			     
					</div>
				</div>

				</div>


			</div>
		</div>
		<!--end::Body-->
	</form>
	<!--end::Form-->
</div>
<!--end::Card-->
	</div>
</div>
</div>

@endsection