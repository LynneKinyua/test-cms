@extends('admin.layouts.app')

@section('content')

<div class="row">
          <div class="col-md-2">
                @component('admin.layouts.menus.sidebar')
               
               @endcomponent
              <div class="col-md-10">
                    <!--Leaderboard and |-->
                    <div class="row">
         
                         <div class="col-sm-3">
                              <div class="card">
                                   <div class="card-header">Active FA</div>
                                   <div class="card-body">
                                        <h4 class="text-center">172</h4>
                                   </div>
                              </div>
                         </div>
                         <div class="col-sm-3">
                              <div class="card">
                                   <div class="card-header">Top FA</div>
                                   <div class="card-body">
                                        <h4 class="text-center">Isabella Thumo</h4>
                                   </div>
                               </div>
                         </div>
              
                         <div class="col-sm-3">
                              <div class="card">
                                 <div class="card-header"> Total Sales</div>
                                  <div class="card-body">
                                        <h4 class="text-center">1098</h4>
                                  </div>
                             </div>
                        </div>

                         <div class="col-sm-3">
                              <div class="card">
                                   <div class="card-header"> Total Sales AUM</div>
                                   <div class="card-body">
                                        <h4 class="text-center">345,678.28</h4>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <!--Assigned area -->
                    <div class="row at-4">
                         <div class="col-sm-6">
                              <div class="card">
                                   <div class="card-header"> Unassigned Leads</div>
                                   <ul class="list-group list-group-flush">
                                        @for( $i = 0;$i < 6; $i++)
                                        <li class="list-group-item">
                                             Prospect <span class="float-right btn btn-sm btn-success">Assign</span>
                                        </li>
                                        @endfor
                                        <li class="list-group-item">
                                             <a href="#" class="btn btn-block btn-md btn-primary">View All Unassigned Leads</a>
                                        </li> 
                                   </ul>
                              </div>
                         </div>
                         <div class="col-row-6">
                              <div class="card">
                                   <div class="card-header">Recent Estimates</div>
                                   <ul class="list-group list-group-flush">
                                        @for( $i = 0;$i < 6; $i++)
                                        <li class="list-group-item">
                                             <div class="row">
                                                  <div class="col-sm-4">
                                                       Prospect
                                                  </div>
                                                  <div class="col-sm-4">
                                                       7th Feb 2020
                                                  </div>
                                                  <div class="col-sm-4">
                                                       Value: £8,900.89 
                                                       <span class="float-right btn btn-sm btn-success">Details</span>
                                                  </div>
                                             </div>
                                        </li>
                                        @endfor
                                        <li class="list-group-item">
                                             <a href="#" class="btn btn-block btn-md btn-primary">View All Recent Estimates</a>
                                        </li>
                                   </ul>
                              </div>
                          
                         </div> 
                    </div>
               </div>
          </div>  
</div>



      