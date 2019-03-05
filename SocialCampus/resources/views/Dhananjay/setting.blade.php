@extends('layouts.app')
@section('title', 'Account Settings | ')

@section('content')
    <div class="container">
        <h2 class="text-center">Manage your settings</h2>
        <div id="triangleup" class="centre-block"></div>
        <div class="panel-group wrap">
        <div class="panel">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse"  href="#collapseOne">
                        General Settings
                        <span class="glyphicon glyphicon-plus more-less pull-right"></span>
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse ">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5   ht">Username</div>
                        <div class="col-lg-7 col-md-7 col-sm-7   ht"><p class="inblocker" id="uname">Deekay3552</p></div>
                        <div class="col-lg-5 col-md-5 col-sm-5   ht">Email</div>
                        <div class="col-lg-7 col-md-7 col-sm-7   ht"><p class="inblocker" id="umail">vyserver@gmail.com</p></div>
                        <div class="col-lg-5 col-md-5 col-sm-5   ht">Full Name</div>
                        <div class="col-lg-4 col-md-4 col-sm-4   ht"><p class="inblocker" id="fname">Dhananjay Kumar</p></div>
                        <div class="col-lg-3 col-md-3 col-sm-3   ht"><button id="editname" class="btn  btn-sm btn-primary pull-right " data-toggle="modal" data-target="#namechange" >Edit</button></div>
                        <div class="col-lg-5 col-md-5 col-sm-5  ht">Password</div>
                        <div class="col-lg-4 col-md-4 col-sm-4  ht"></div>
                        <div class="col-lg-3 col-md-3 col-sm-3  ht"><button id="editpwd" class="btn  btn-sm btn-primary pull-right " data-toggle="modal" data-target="#pwdchange">Edit</button></div>

                    </div>
                </div>
            </div>
        </div>


            <div class="panel">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle" data-toggle="collapse"  href="#collapseTwo">
                            Privacy Settings
                            <span class="glyphicon glyphicon-plus pull-right more-less"></span>
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse ">
                    <div class="panel-body ">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-5  ht">Profile Visibility</div>
                            <div class="col-lg-4 col-md-4 col-sm-4  "><label class="radio-inline">
                                    <input type="radio" name="prradio">Public</label></div>
                            <div class="col-lg-3 col-md-3 col-sm-3  pull-right"><label class="radio-inline pull-right">
                                    <input type="radio" name="prradio">Private</label></div>
                            <div class="col-lg-5 col-md-5 col-sm-5  ht">Post Visibility</div>
                            <div class="col-lg-4 col-md-4 col-sm-4  ht"><label class="radio-inline">
                                    <input type="radio" name="poradio">Public</label></div>
                            <div class="col-lg-3 col-md-3 col-sm-3  pull-right"><label class="radio-inline pull-right">
                                    <input type="radio" name="poradio">Private</label></div>


                        </div>
                    </div>
                </div>
            </div>


            <div class="panel">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle" data-toggle="collapse"  href="#collapseThree">
                            Blocked Users
                            <span class="glyphicon glyphicon-minus pull-right"></span>
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse ">
                    <div class="panel-body">

                        <div class="row">
                            @for($i=0;$i<5;$i++)
                            <!--div class="col-lg-5 col-md-5 "><p class="inblocker" id="uname">Dhananjay Kumar </p></div>
                            <div class="col-lg-offset-4 col-md-offset-4 col-lg-3 col-md-3"><button class="btn btn-standard btn-sm pull-right ">Edit</button></div-->

                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8   ht"><p class="inblocker" id="buname">Dhananjay Kumar</p></div>
                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4   ht"><button class="btn btn-primary btn-sm pull-right "  >Unblock</button></div>

                                @endfor
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- END PANEL GROUP-->
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 "><button  id="delbtn" class=" btn btn-primary btn-sm" data-toggle="modal" data-target="#delaccount">Delete Account</button> </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><button id="savebtn" class=" btn btn-primary btn-sm pull-right">Save Changes</button> </div>
        </div>

        <!-- Modal Edit Name -->
        <div class="modal fade col-lg-12 col-md-12 col-sm-12" id="namechange" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="vertical-alignment-helper">
                <div class="modal-dialog vertical-align-center">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                            </button>
                            <h4 class="modal-title text-primary text-center" id="myModalLabel">Change your name</h4>

                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" action="">
                                <div class="form-group">
                                    <div class="center-block">
                                        <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="">
                                        <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="  btn btn-default " data-dismiss="modal">Close</button>
                            <button type="button" class="  btn btn-primary">Save changes</button>
                        </div>
                    </div> <!--end modal content-->
                </div>
            </div>
        </div> <!---end edit name --->
        <!-- Modal Edit Password -->
        <div class="modal fade col-lg-12 col-md-12 col-sm-12" id="pwdchange" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="vertical-alignment-helper">
                <div class="modal-dialog vertical-align-center">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                            </button>
                            <h4 class="modal-title text-primary text-center" id="myModalLabel">Change your password</h4>

                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" action="">
                                <div class="form-group">
                                    <div class="center-block">
                                        <input type="email" class="form-control" id="email" placeholder="Enter Current Password" name="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="center-block">
                                        <input type="password" class="form-control" id="pwd" placeholder="Enter New Password" name="pwd">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="center-block">
                                        <input type="password" class="form-control" id="pwd" placeholder="Confirm Password" name="pwd">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="  btn btn-default " data-dismiss="modal">Close</button>
                            <button type="button" class="  btn btn-primary">Save changes</button>
                        </div>
                    </div> <!--end modal content-->
                </div>
            </div>
        </div> <!---end edit pwd--->
        <!-- Modal delete account -->
        <div class="modal fade" id="delaccount" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="vertical-alignment-helper">
                <div class="modal-dialog vertical-align-center">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>

                            </button>
                            <h4 class="modal-title text-center" id="myModalLabel">Delete Account</h4>

                        </div>
                        <div class="modal-body">...</div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!---end delete --->

                </div> <!-- END CONTAINER-->
@endsection