@extends('layouts.admin')

@section('contents')

<section class="wrapper">
    <!-- //market-->
    <div class="market-updates">
        <div class="col-md-3 market-update-gd">
            <div class="market-update-block clr-block-2">
                <div class="col-md-4 market-update-right">
                    <i class="fa fa-eye"> </i>
                </div>
                 <div class="col-md-8 market-update-left">
                 <h4>Regular Users</h4>
                <h3>13,500</h3>
              </div>
              <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-3 market-update-gd">
            <div class="market-update-block clr-block-1">
                <div class="col-md-4 market-update-right">
                    <i class="fa fa-users" ></i>
                </div>
                <div class="col-md-8 market-update-left">
                <h4>VIPs</h4>
                    <h3>1,250</h3>
                </div>
              <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-3 market-update-gd">
            <div class="market-update-block clr-block-3">
                <div class="col-md-4 market-update-right">
                    <i class="fa fa-usd"></i>
                </div>
                <div class="col-md-8 market-update-left">
                    <h4>Sales</h4>
                    <h3>1,500</h3>
                </div>
              <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-3 market-update-gd">
            <div class="market-update-block clr-block-4">
                <div class="col-md-4 market-update-right">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </div>
                <div class="col-md-8 market-update-left">
                    <h4>Requests Made</h4>
                    <h3>1,500</h3>
                </div>
              <div class="clearfix"> </div>
            </div>
        </div>
       <div class="clearfix"> </div>
    </div>	
    <!-- //market-->

    <div class="agil-info-calendar">
    
    <div class="col-md-6 w3agile-notifications">
        <div class="notifications">
            <!--notification start-->
            
                <header class="panel-heading">
                    Notification 
                </header>
                <div class="notify-w3ls">
                    <div class="alert alert-info clearfix">
                        <span class="alert-icon"><i class="fa fa-envelope-o"></i></span>
                        <div class="notification-info">
                            <ul class="clearfix notification-meta">
                                <li class="pull-left notification-sender"><span><a href="#">Jonathan Smith</a></span> Registered </li>
                                <li class="pull-right notification-time">1 min ago</li>
                            </ul>
                            <p>
                                Urgent meeting for next proposal
                            </p>
                        </div>
                    </div>

                    
                </div>
            
            <!--notification end-->
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>

    <div class="agileits-w3layouts-stats">
                
                <div class="col-md-8 stats-info stats-last widget-shadow">
                    <div class="stats-last-agile">
                        <table class="table stats-table ">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>SERVICE</th>
                                    <th>STATUS</th>
                                    <th>REQUESTS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Lorem ipsum</td>
                                    <td><span class="label label-success">In progress</span></td>
                                    <td><h5>100</i></h5></td>
                                </tr>
                        
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
</section>

@endsection