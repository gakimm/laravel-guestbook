@extends('layouts.layout')

@section('title','DASHBOARD')

@section('content')
<script type="text/javascript" id="sisi">
        $(document).ready(function(){

            demo.initChartist();

            $.notify({
                icon: 'pe-7s-gift',
                message: "Welcome to <b>Humas Wikrama</b> - be a good person for the people in the world."

            },{
                type: 'info',
                timer: 1000
            });

        });
    </script>

		<div class="row">
			<div class="co-sm-12">
				<div class="card">
                            <div class="header">
                                <h4 class="title">Data Tamu</h4>
                                <p class="category">Semua data aplikasi humas</p>
                            </div>
                           
                </div>
                			<div class="col-sm-6">
								<div class="card btn btn-info btn-lg btn-block" style="border-radius:100% 50% 20%;">
									<div class="box text-center">
										<h1 class="font-light text-white">{{ $all }}</h1>
										<h6 class="text-white">Semua Tamu</h6>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="card btn btn-lg btn-warning btn-block" style="border-radius:50% 100% 50% 20%;">
									<div class="box text-center">
										<h1 class="font-light text-white">{{ $today }}</h1>
										<h6 class="text-white">Tamu Hari ini</h6>
									</div>
								</div>
							</div>
                	</div>
             </div>
             <div class="row">
                    <div class="col-md-4">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">Guest Statistics</h4>
                                <p class="category">Last Campaign Performance</p>
                            </div>
                            <div class="content">
                                <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i>Every
                                        <i class="fa fa-circle text-danger"></i>day 
                                        <i class="fa fa-circle text-warning"></i> @Wikrama
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> The activity run well
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Users Behavior</h4>
                                <p class="category">24 Hours performance</p>
                            </div>
                            <div class="content">
                                <div id="chartHours" class="ct-chart"></div>
                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Open
                                        <i class="fa fa-circle text-danger"></i> Click
                                        <i class="fa fa-circle text-warning"></i> Click Second Time
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Out Of Dangerous
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
	
@endsection
