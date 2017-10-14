@extends('layouts.app')

@section('content')
  <!--Authenticated station manager role > 1-->
    @if (Auth::user()->role > '1')
  <!-- Select box for stations -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <p>
            <select class="form-control">
            <option value="">Select Station</option>
            <option value="CinOil Yaba">CinOil Yaba</option>
            <option value="Station B">Station B</option>
            <option value="Station C">Station C</option>
            <option value="Station D">Station D</option>
            <option value="Station E">Station E</option>
            <option value="Station F">Station F</option>
          </select>
          </p>
        </div>
        
        <div class="col-lg-4 input-group date">
          <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
          </div>
          <input type="text" class="form-control pull-right" id="datepicker">
        </div>
      </div>
    @endif
	<!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="box-body box-margin bg-white">
            <div><h4><strong>Petrol</strong></h4></div>
            <div class="text-center">
              <input type="text" class="knob" value="60" data-width="120" data-height="120" data-fgColor="#cc0066" data-readonly="true">
              <div class="inner">
                <p class="pdt-text">Days to Reorder   <span class="petrol">4,508</span></p>
                <hr>
                <p class="pdt-text">Days to Dead Stock  <span class="petrol">3,866</span></p>
                <hr>
                <p class="pdt-text">Volume Sold MTD  <span class="petrol">18,914.00</span></p>
                <hr>
                <p class="pdt-text">Volume Sold YTD  <span class="petrol">154,349.00</span></p>
              </div>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="box-body box-margin bg-white">
            <div><h4><strong>Diesel</strong></h4></div>
            <div class="text-center">
              <input type="text" class="knob" value="60" data-width="120" data-height="120" data-fgColor="#ff9900" data-readonly="true">
              <div class="inner">
                <p class="pdt-text">Days to Reorder   <span class="diesel">4,508</span></p>
                <hr>
                <p class="pdt-text">Days to Dead Stock  <span class="diesel">3,866</span></p>
                <hr>
                <p class="pdt-text">Volume Sold MTD  <span class="diesel">18,914.00</span></p>
                <hr>
                <p class="pdt-text">Volume Sold YTD  <span class="diesel">154,349.00</span></p>
              </div>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="box-body box-margin bg-white">
            <div><h4><strong>Kerosene</strong></h4></div>
            <div class="text-center">
              <input type="text" class="knob" value="60" data-width="120" data-height="120" data-fgColor="#00802b" data-readonly="true">
              <div class="inner">
                <p class="pdt-text">Days to Reorder   <span class="kerosene">4,508</span></p>
                <hr>
                <p class="pdt-text">Days to Dead Stock  <span class="kerosene">3,866</span></p>
                <hr>
                <p class="pdt-text">Volume Sold MTD  <span class="kerosene">18,914.00</span></p>
                <hr>
                <p class="pdt-text">Volume Sold YTD  <span class="kerosene">154,349.00</span></p>
              </div>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

      <!--toggleable content-->
      <div class="row">
        <!--masonry-->
        <div class="grid">
        <div class="col-lg-12 col-xs-12">
          <div class="box-header bg-white">
            <h3 class="box-title">OVERVIEW: Today</h3>
            <button type="button" class="btn btn-box-tool pull-right" data-toggle="collapse" data-target="#overviewToday" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
        </div>
        </div>

        <div class="collapse in" id="overviewToday">
          <div class="col-lg-4 col-xs-12">
            <!-- small box -->
            <div class=" box-body box-margin bg-white">
              <h4>Volume</h4>
              <p>Sold from Pumps (Ltrs) <span class="purple-text">30,035.97</span></p>
              <p>Taken from Tanks (Ltrs) <span>29,853.00</span></p>
            </div>

            <!-- small box -->
            <div class="box-body box-margin bg-white">
              <h4>Tolerance</h4>
              <div class="row">
                <div class="col-lg-4 col-xs-12">
                  <div>Petrol</div>
                  <h3 class="purple">20.06</h3>
                </div>
                <div class="col-lg-4 col-xs-12">
                  <div>Diesel</div>
                  <h3 class="purple">20.44</h3>
                </div>
                <div class="col-lg-4 col-xs-12">
                  <div>Kerosene</div>
                  <h3 class="purple">20.73</h3>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-xs-12">
            <!-- small box -->
            <div class="box-body box-margin bg-white">
              <p><strong>Value of Consumption from Tanks</strong></p>
              <h3 class="green"><strong>₦4,559,495.25</strong></h3>
            </div>

            <!-- small box -->
            <div class="box-body box-margin bg-white">
              <p><strong>Expected Revenue for Sales</strong></p>
              <h3 class="green"><strong>₦4,591,391.25</strong></h3>
            </div>

            <!-- small box -->
            <div class="box-body box-margin bg-white">
              <p><strong>Tolerance Related Extra</strong></p>
              <h3 class="green"><strong>₦31,896.25</strong></h3>
            </div>
          </div>

          <div class="col-lg-4 col-xs-6">
            <!-- small box -->
            <div class="box-body box-margin bg-white">
              <h5><strong>Volume Taken Vs Daily Target</strong></h5>
              <div class="text-center">
                <hr>
                <p><strong>Volume Taken</strong></p>
                <h3 class="green"><strong>30K</strong></h3>
                <p>Taken from Tanks (Ltrs) <span>29,853.00</span></p>
              </div>
            </div>

            <!-- small box -->
            <div class="box-body box-margin bg-white">
              <h4>Tolerance</h4>
              <div class="row">
                <div class="col-lg-4 col-xs-6">
                  <div>Petrol</div>
                  <h3>20.06</h3>
                </div>
                <div class="col-lg-4 col-xs-6">
                  <div>Diesel</div>
                  <h3>20.44</h3>
                </div>
                <div class="col-lg-4 col-xs-6">
                  <div>Kerosene</div>
                  <h3>20.73</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--toggleable content-->
      <div class="row">
        <!--masonry-->
        <div class="grid">
        <div class="col-lg-12 col-xs-12">
          <div class="box-margin box-header bg-white" data-target="#overviewYesterday">
            <h3 class="box-title">OVERVIEW: Yesterday</h3>
            <button type="button" class="btn btn-box-tool box-tools pull-right" data-toggle="collapse" data-target="#overviewYesterday" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
          </div>
        </div>
        </div>

        <div class="collapse in" id="overviewYesterday">
           <div class="col-lg-4 col-xs-6">
            <!-- small box -->
            <div class="box-body box-margin bg-white">
              <h4>Volume</h4>
              <p>Sold from Pumps (Ltrs) <span>30,035.97</span></p>
              <p>Taken from Tanks (Ltrs) <span>29,853.00</span></p>
            </div>

            <!-- small box -->
            <div class="box-body box-margin bg-white">
              <h4>Tolerance</h4>
              <div class="row">
                <div class="col-lg-4 col-xs-6">
                  <div>Petrol</div>
                  <h3>20.06</h3>
                </div>
                <div class="col-lg-4 col-xs-6">
                  <div>Diesel</div>
                  <h3>20.44</h3>
                </div>
                <div class="col-lg-4 col-xs-6">
                  <div>Kerosene</div>
                  <h3>20.73</h3>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-xs-6">
            <!-- small box -->
            <div class="box-body box-margin bg-white">
              <h4>Volume</h4>
              <p>Sold from Pumps (Ltrs) <span>30,035.97</span></p>
              <p>Taken from Tanks (Ltrs) <span>29,853.00</span></p>
            </div>

            <!-- small box -->
            <div class="box-body box-margin bg-white">
              <h4>Tolerance</h4>
              <div class="row">
                <div class="col-lg-4 col-xs-6">
                  <div>Petrol</div>
                  <h3>20.06</h3>
                </div>
                <div class="col-lg-4 col-xs-6">
                  <div>Diesel</div>
                  <h3>20.44</h3>
                </div>
                <div class="col-lg-4 col-xs-6">
                  <div>Kerosene</div>
                  <h3>20.73</h3>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-xs-6">
            <!-- small box -->
            <div class="box-body box-margin bg-white">
              <h4>Volume</h4>
              <p>Sold from Pumps (Ltrs) <span>30,035.97</span></p>
              <p>Taken from Tanks (Ltrs) <span>29,853.00</span></p>
            </div>

            <!-- small box -->
            <div class="box-body box-margin bg-white">
              <h4>Tolerance</h4>
              <div class="row">
                <div class="col-lg-4 col-xs-6">
                  <div>Petrol</div>
                  <h3>20.06</h3>
                </div>
                <div class="col-lg-4 col-xs-6">
                  <div>Diesel</div>
                  <h3>20.44</h3>
                </div>
                <div class="col-lg-4 col-xs-6">
                  <div>Kerosene</div>
                  <h3>20.73</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--toggleable content-->
      <div class="row">
        <!--masonry-->
        <div class="grid">
          <div class="col-lg-12 col-xs-12">
            <div class="box-margin box-header bg-white" data-target="#monthlyCompare">
              <h3 class="box-title">MONTHLY COMPARISON</h3>
              <button type="button" class="btn btn-box-tool box-tools pull-right" data-toggle="collapse" data-target="#monthlyCompare" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
            </div>
          </div>
        </div>

        <div class="collapse in" id="monthlyCompare">
          <!--masonry-->
          <div class="grid">
            <div class="col-lg-12">
              <div class="bg-white box-body">
                <h4>Volume Sold from Pumps Vs Tank Consumption</h4>
                <canvas id="monthlyChart" class="hidden-xs" width="400" height="100"></canvas>
              </div>
            </div>
          </div>
          
          <!--masonry-->
          <div class="grid">
            <div class="col-lg-4">
              <div class="bg-white box-body box-margin">
                <h4>Sales This Month Vs Last Month</h4>
                <h3 class="orange"><strong>₦106,139</strong></h3>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="bg-white box-body box-margin">
                  <h4>Sales This Month Vs Last Month</h4>
                  <h3 class="orange"><strong>₦106,139</strong></h3>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="bg-white box-body box-margin text-center">
                <input type="text" class="knob" value="60" data-width="120" data-height="120" data-fgColor="#ff9900" data-readonly="true">
                <h3 class="orange"><strong>₦106,139</strong></h3>
              </div>
            </div>

            <div class="col-lg-4">
              <!-- small box -->
              <div class="bg-white box-body">
                <h4>Revenue By Station & Location</h4>
                <canvas id="revenueChart" class="hidden-xs" width="400" height="400"></canvas>
              </div>
            </div>

            <div class="col-lg-4">
              <!-- small box -->
              <div class="box-body box-margin bg-white">
                <h4>Tolerance</h4>
                <div class="row">
                  <div class="col-lg-4 col-xs-6">
                    <div>Petrol</div>
                    <h3>20.06</h3>
                  </div>
                  <div class="col-lg-4 col-xs-6">
                    <div>Diesel</div>
                    <h3>20.44</h3>
                  </div>
                  <div class="col-lg-4 col-xs-6">
                    <div>Kerosene</div>
                    <h3>20.73</h3>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-8">
              <div class="bg-white box-body box-margin text-center">
                <div id="world-map2" style="height: 250px; width: 100%;"></div>
                <h3 class="orange"><strong>₦106,139</strong></h3>
              </div>
            </div>
          </div>
          <!--MONTHLY COMPARISON-->
        </div>
      </div>

      <!--toggleable content-->
      <div class="row">
        <div class="col-lg-12" data-toggle="collapse" data-target="#productOverview" aria-expanded="false" aria-controls="productOverview">
          PRODUCT OVERVIEW
        </div>

        <div class="collapse in" id="productOverview">
          PRODUCT OVERVIEW
        </div>
      </div>

      <!--toggleable content-->
      <div class="row">
        <div class="col-lg-12" data-toggle="collapse" data-target="#bankOverview" aria-expanded="false" aria-controls="bankOverview">
          BANK OVERVIEW
        </div>

        <div class="collapse in" id="bankOverview">
          BANK OVERVIEW
        </div>
      </div>


      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
              <li><a href="#sales-chart" data-toggle="tab">Donut</a></li>
              <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li>
            </ul>
            <div class="tab-content no-padding">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
              <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
            </div>
          </div>
          <!-- /.nav-tabs-custom -->

          <!-- Chat box -->
          <div class="box box-success">
            <div class="box-header">
              <i class="fa fa-comments-o"></i>

              <h3 class="box-title">Chat</h3>

              <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                <div class="btn-group" data-toggle="btn-toggle">
                  <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                </div>
              </div>
            </div>
            <div class="box-body chat" id="chat-box">
              <!-- chat item -->
              <div class="item">
                <img src="dist/img/user4-128x128.jpg" alt="user image" class="online">

                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>
                    Mike Doe
                  </a>
                  I would like to meet you to discuss the latest news about
                  the arrival of the new theme. They say it is going to be one the
                  best themes on the market
                </p>
                <div class="attachment">
                  <h4>Attachments:</h4>

                  <p class="filename">
                    Theme-thumbnail-image.jpg
                  </p>

                  <div class="pull-right">
                    <button type="button" class="btn btn-primary btn-sm btn-flat">Open</button>
                  </div>
                </div>
                <!-- /.attachment -->
              </div>
              <!-- /.item -->
              <!-- chat item -->
              <div class="item">
                <img src="dist/img/user3-128x128.jpg" alt="user image" class="offline">

                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>
                    Alexander Pierce
                  </a>
                  I would like to meet you to discuss the latest news about
                  the arrival of the new theme. They say it is going to be one the
                  best themes on the market
                </p>
              </div>
              <!-- /.item -->
              <!-- chat item -->
              <div class="item">
                <img src="dist/img/user2-160x160.jpg" alt="user image" class="offline">

                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:30</small>
                    Susan Doe
                  </a>
                  I would like to meet you to discuss the latest news about
                  the arrival of the new theme. They say it is going to be one the
                  best themes on the market
                </p>
              </div>
              <!-- /.item -->
            </div>
            <!-- /.chat -->
            <div class="box-footer">
              <div class="input-group">
                <input class="form-control" placeholder="Type message...">

                <div class="input-group-btn">
                  <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box (chat box) -->

          <!-- TO DO List -->
          <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">To Do List</h3>

              <div class="box-tools pull-right">
                <ul class="pagination pagination-sm inline">
                  <li><a href="#">&laquo;</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="todo-list">
                <li>
                  <!-- drag handle -->
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <!-- checkbox -->
                  <input type="checkbox" value="">
                  <!-- todo text -->
                  <span class="text">Design a nice theme</span>
                  <!-- Emphasis label -->
                  <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                  <!-- General tools such as edit or delete-->
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text">Make the theme responsive</span>
                  <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text">Let theme shine like a star</span>
                  <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text">Let theme shine like a star</span>
                  <small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text">Check your messages and notifications</span>
                  <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <input type="checkbox" value="">
                  <span class="text">Let theme shine like a star</span>
                  <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix no-border">
              <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
            </div>
          </div>
          <!-- /.box -->

          <!-- quick email widget -->
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Quick Email</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
              <form action="#" method="post">
                <div class="form-group">
                  <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="Subject">
                </div>
                <div>
                  <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
              </form>
            </div>
            <div class="box-footer clearfix">
              <button type="button" class="pull-right btn btn-default" id="sendEmail">Send
                <i class="fa fa-arrow-circle-right"></i></button>
            </div>
          </div>

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

          <!-- Map box -->
          <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip" title="Date range">
                  <i class="fa fa-calendar"></i></button>
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->

              <i class="fa fa-map-marker"></i>

              <h3 class="box-title">
                Visitors
              </h3>
            </div>
            <div class="box-body">
              <div id="world-map" style="height: 250px; width: 100%;"></div>
            </div>
            <!-- /.box-body-->
            <div class="box-footer no-border">
              <div class="row">
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  <div id="sparkline-1"></div>
                  <div class="knob-label">Visitors</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  <div id="sparkline-2"></div>
                  <div class="knob-label">Online</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-4 text-center">
                  <div id="sparkline-3"></div>
                  <div class="knob-label">Exists</div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.box -->

          <!-- solid sales graph -->
          <div class="box box-solid bg-teal-gradient">
            <div class="box-header">
              <i class="fa fa-th"></i>

              <h3 class="box-title">Sales Graph</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
            </div>
            <div class="box-body border-radius-none">
              <div class="chart" id="line-chart" style="height: 250px;"></div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-border">
              <div class="row">
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgColor="#39CCCC">

                  <div class="knob-label">Mail-Orders</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgColor="#39CCCC">

                  <div class="knob-label">Online</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-4 text-center">
                  <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgColor="#39CCCC">

                  <div class="knob-label">In-Store</div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->

          <!-- Calendar -->
          <div class="box box-solid bg-green-gradient">
            <div class="box-header">
              <i class="fa fa-calendar"></i>

              <h3 class="box-title">Calendar</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="#">Add new event</a></li>
                    <li><a href="#">Clear events</a></li>
                    <li class="divider"></li>
                    <li><a href="#">View calendar</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-black">
              <div class="row">
                <div class="col-sm-6">
                  <!-- Progress bars -->
                  <div class="clearfix">
                    <span class="pull-left">Task #1</span>
                    <small class="pull-right">90%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                  </div>

                  <div class="clearfix">
                    <span class="pull-left">Task #2</span>
                    <small class="pull-right">70%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                  <div class="clearfix">
                    <span class="pull-left">Task #3</span>
                    <small class="pull-right">60%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
                  </div>

                  <div class="clearfix">
                    <span class="pull-left">Task #4</span>
                    <small class="pull-right">40%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.box -->

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->
@endsection