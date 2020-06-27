@extends("application::Layouts.layout")
@section('content')

    <!--begin::Content-->
    <div class="d-flex flex-column-fluid">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <br>
           <!--begin::Card-->
                    <div class="card card-custom gutter-b">
                      <div class="card-header">
                        <div class="card-title">
                          <h3 class="card-label">Danh sách Website</h3>
                        </div>
                      </div>
                      <div class="card-body">
                        <!--begin::Accordion-->
                        <div class="accordion accordion-solid accordion-toggle-plus" id="accordionExample6">
                          <div class="card">
                            <div class="card-header" id="headingOne6">
                              <div class="card-title" data-toggle="collapse" data-target="#collapseOne6">
                              <i class="flaticon-pie-chart-1"></i>cloudrender.vn</div>
                            </div>
                            <div id="collapseOne6" class="collapse show" data-parent="#accordionExample6">
                              <div class="card-body">
                                  <div class="card-detail">
                                    <div class="row">
                                      <div class="col-xs-12 col-md-4 card-detail__name">
                                        <i class="flaticon-attachment"></i> &nbsp; cloudrender.vn
                                      </div>
                                       <div class="col-xs-12 col-md-2 card-detail__protected">
                                        <i class="flaticon2-shield" style="color:#8950FC"></i>&nbsp; Protected
                                      </div>
                                       <div class="col-xs-12 col-md-5 card-detail__input">
                                       <input type="text" style="width: 400px" value="0GB / 1000GB">
                                      </div>

                                       <div class="col-xs-12 col-md-1 card-detail__setting">
                                        <a href="./setting"><i class="flaticon2-settings"></i></a> &nbsp; &nbsp; <a href="#"><i class="flaticon2-medical-records"></i></a>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingTwo6">
                              <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo6">
                               <i class="flaticon-pie-chart-1"></i>truecloud.vn</div>
                            </div>
                            <div id="collapseTwo6" class="collapse show" data-parent="#accordionExample6">
                              <div class="card-body">
                                
                                  <div class="card-detail">
                                    <div class="row">
                                      <div class="col-xs-12 col-md-4 card-detail__name">
                                        <i class="flaticon-attachment"></i> &nbsp; truecloud.vn
                                      </div>
                                       <div class="col-xs-12 col-md-2 card-detail__protected">
                                        <i class="flaticon2-shield" style="color:#8950FC"></i>&nbsp; Protected
                                      </div>
                                       <div class="col-xs-12 col-md-5 card-detail__input">
                                       <input type="text" style="width: 400px" value="0GB / 1000GB">
                                      </div>

                                       <div class="col-xs-12 col-md-1 card-detail__setting">
                                        <a href="./setting"><i class="flaticon2-settings"></i></a> &nbsp; &nbsp; <a href="#"><i class="flaticon2-medical-records"></i></a>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingThree6">
                              <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree6">
                               <i class="flaticon-pie-chart-1"></i>exa.vn</div>
                            </div>
                            <div id="collapseThree6" class="collapse show" data-parent="#accordionExample6">
                              <div class="card-body">
                                  <div class="card-detail">
                                    <div class="row">
                                      <div class="col-xs-12 col-md-4 card-detail__name">
                                        <i class="flaticon-attachment"></i> &nbsp; exa.vn
                                      </div>
                                       <div class="col-xs-12 col-md-2 card-detail__protected">
                                        <i class="flaticon2-shield" style="color:#8950FC"></i>&nbsp; Protected
                                      </div>
                                       <div class="col-xs-12 col-md-5 card-detail__input">
                                       <input type="text" style="width: 400px" value="0GB / 1000GB">
                                      </div>

                                       <div class="col-xs-12 col-md-1 card-detail__setting">
                                        <a href="./setting"><i class="flaticon2-settings"></i></a> &nbsp; &nbsp; <a href="#"><i class="flaticon2-medical-records"></i></a>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--end::Accordion-->
                      </div>
                    </div>
                    <!--end::Card-->
            </div>
           
          </div>
        </div>

    </div>
    
    <!--end::Content-->
  
@endsection