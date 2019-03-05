@extends('layouts.app')
@section('title', 'Message | ')
    @section('content')
        <div class="container">

            <div class="row">
                <div id="sidemenu" class="col-lg-3">
                    <div id="sidehead">
                    <img src="{{ asset('images/dummyUser.jpg') }}" alt="PP" width="35px" height="35px">
                    <p id="myname"> Dhananjay Kumar</p>
                        <input id="search" type="text" placeholder="Search">
                    </div>
                    <div id="sidebody">
                        @for ($i=0;$i<8;$i++)
                        <div class="fhead">
                        <img style="vertical-align:middle" src="{{ asset('images/dummyUser.jpg') }}" alt="PP" width="35px" height="35px">
                        <div style="display:inline-flex"><span id="friendname" style="">Asif Raza</span><span class="fstatus">online</span></div>
                        </div>
                        <div class="fhead">
                            <img style="vertical-align:middle" src="{{ asset('images/dummyUser.jpg') }}" alt="PP" width="35px" height="35px">
                            <div style="display:inline-flex"><span id="friendname" style="">Fielder</span><span class="fstatus">online</span></div>
                        </div>
                        @endfor
                    </div>
                    </div>


                <div id="wwind" class="col-lg-9">
                <h2 id="empty">Select friend to start Chat</h2>
                </div>
                <div id="mwind" class="col-lg-9">
                    <div id="mhead" >
                        <img  src="{{ asset('images/dummyUser.jpg') }}" alt="PP" width="35px" height="35px" >
                        <p>Varad Srivastava</p><span style="font-style: italic;margin-left: 5px">online</span>
                        <span class=" btn btn-default glyphicon glyphicon-cog pull-right"></span>

                    </div>
                    <div id="mbody">
                    </div>
                    <div id="mfoot">
                        <form>
                            <div class="input-group">
                                <input id="message" type="text" class="form-control" name="message" placeholder="Type your message">
                                <div class="input-group-btn"><button class="btn btn-default" class="tooltip" title="Send"><i class="glyphicon glyphicon-menu-right"></i></button></div>
                            </div>
                        </form>
                    </div>
                </div>

        </div> <!--ROW-->
        </div> <!--container --->
    @endsection