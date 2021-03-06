@extends('index')
@section('body')
<aside>
    <ul id="slide-out" class="side-nav fixed indigo darken-2 sidehover" style="width: 220px !important; ">
    <li class="grey darken-4 white-text center">Logged-In as</li>
      <li class="user-details grey darken-4">
          <div class="row">
              <div class="col s12">
                  <img src="{!! asset('img/jerald.jpg') !!}" alt="" class="circle center" width="60%" height="60%" align="center"
                  style="margin-left: 30px; margin-top:0px;">
              </div>
              <div class="col s12"> 
                  <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn col s12" href="#" data-activates="profile-dropdown">Jerald John<i class="mdi-navigation-arrow-drop-down right"></i></a>
                  <ul style="width: 128px; position: absolute; top: 57px; left: 101.25px; opacity: 1; display: none; margin-top:10px;" id="profile-dropdown" class="dropdown-content">
                      <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                      </li>
                      <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                      </li>
                      <li><a href="#"><i class="mdi-communication-live-help"></i> Help</a>
                      </li>
                  </ul>
              </div>
          </div>
      </li>
       <li class="no-padding">
            <ul class="collapsible collapsible-accordion indigo darken-2">
                <li class="bold {!! strpos(Request::url(), 'employee') !== false || strpos(Request::url(), 'fee') !== false || strpos(Request::url(), 'equipment') !== false || 
                strpos(Request::url(), 'room') !== false || strpos(Request::url(), 'supplier') !== false || strpos(Request::url(), 'drug') !== false || strpos(Request::url(), 'discount')
                 !== false ? 'indigo' : '' !!}"><a class="collapsible-header waves-effect waves-cyan white-text sidehover"><img src="{!! asset('img/settings-icon.png') !!}" width="15%" height="15%" align="center" style="margin-bottom: 5px;"> Maintenance</a>
                    <div style="" class="collapsible-body">
                        <ul class="indigo darken-2"> 
                             <li class="{!! strpos(Request::url(), 'building') !== false ? 'indigo lighten-1' : '' !!}"  style=":hover{background-color:yellow}"><a href="{!! url('building') !!}" class="white-text">Building</a>
                            </li>
                            <li class="{!! strpos(Request::url(), 'nurse-station') !== false ? 'indigo lighten-1' : '' !!}"><a href="{!! url('nurse-station') !!}" class="white-text">Nurse Station</a>
                            </li>
                             <li class="{!! strpos(Request::url(), 'room') !== false ? 'indigo lighten-1' : '' !!}"><a href="{!! url('room') !!}"class="white-text" >Room</a>
                            </li>
                            <li class="{!! strpos(Request::url(), 'bed') !== false ? 'indigo lighten-1' : '' !!}"><a href="{!! url('bed') !!}" class="white-text">Bed</a>
                            </li>
                             <li class="{!! strpos(Request::url(), 'supplier') !== false ? 'indigo lighten-1' : '' !!}"><a href="{!! url('supplier') !!}" class="white-text">Supplier</a>
                            </li>
                            <li class="{!! strpos(Request::url(), 'equipment') !== false ? 'indigo lighten-1' : '' !!}"><a href="{!! url('equipment') !!}" class="white-text">Equipment</a>
                            </li>
                            <li class="{!! strpos(Request::url(), 'fee') !== false ? 'indigo lighten-1' : '' !!}"><a href="{!! url('measurement') !!}" class="white-text">Measurement</a>
                            </li>
                             <li class="{!! strpos(Request::url(), 'item') !== false ? 'indigo lighten-1' : '' !!}"><a href="{!! url('item') !!}" class="white-text">Items</a>
                            </li>
                            <li class="{!! strpos(Request::url(), 'fee') !== false ? 'indigo lighten-1' : '' !!}"><a href="{!! url('fee') !!}" class="white-text">Fee</a>
                            </li>
                             <li class="{!! strpos(Request::url(), 'requirement') !== false ? 'indigo lighten-1' : '' !!}"><a href="{!! url('requirement') !!}" class="white-text">Requirements</a>
                            </li>
                            <li class="{!! strpos(Request::url(), 'discount') !== false ? 'indigo lighten-1' : '' !!}"><a href="{!! url('discount') !!}" class="white-text">Discount</a>
                            </li>
                            <li class="{!! strpos(Request::url(), 'employee') !== false ? 'indigo lighten-1' : '' !!}"><a href="{!! url('employee') !!}" class="white-text">Employee</a>
                            </li>
                             <li class="{!! strpos(Request::url(), 'service') !== false ? 'indigo lighten-1' : '' !!}"><a href="{!! url('service') !!}" class="white-text">Services</a>
                            </li>
                            
                        </ul>
                    </div>
                </li>
            </ul>
        </li>

        <li class="no-padding">
              <ul class="collapsible collapsible-accordion indigo darken-2">
                  <li class="bold"><a class="collapsible-header waves-effect waves-cyan white-text"><img src="{!! asset('img/transaction-icon.png') !!}" width="15%" height="15%" align="center" style="margin-bottom: 5px;"> Transactions</a>
                      <div style="" class="collapsible-body">
                          <ul class="indigo darken-2">
                              <li><a href="{!! url('patient') !!}" class="white-text">Patient</a>
                              </li>
                              <li><a href="{!! url('admission') !!}" class="white-text">Admission</a>
                              </li>
                              <li><a href="{!! url('cashier') !!}" class="white-text">Cashier</a>
                              </li>
                              <li><a href="{!! url('laboratory') !!}" class="white-text">Laboratory</a>
                              </li>
                              <li><a href="{!! url('pos') !!}" class="white-text">Pharmacy</a>
                              </li>
                              <li><a href="{!! url('inventory') !!}" class="white-text">Inventory</a>
                              </li>
                          </ul>
                      </div>
                  </li>
              </ul>
          </li>
  
           <li class="no-padding">
                <ul class="collapsible collapsible-accordion indigo darken-2">
                    <li class="bold"><a class="collapsible-header waves-effect waves-cyan white-text"><img src="{!! asset('img/report.png') !!}" width="15%" height="15%" align="center" style="margin-bottom: 5px;"> Reports</a>
                        <div style="" class="collapsible-body">
                            <ul class="indigo darken-2">
                                <li><a href="{!! url('patient') !!}" class="white-text">Monthly</a>
                                </li>
                                <li><a href="{!! url('admission') !!}" class="white-text">Weekly</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>

    </ul>
</aside>
<aside class="aside aside-1"></aside> 
    <div>
      @yield('article')
    </div>
<style type="text/css">
 .sidehover a:hover, li:hover{
    background-color: #5c6bc0 !important;
  }

 a.sidehover: active{
   color: #5c6bc0 !important;
  }
</style>
@endsection