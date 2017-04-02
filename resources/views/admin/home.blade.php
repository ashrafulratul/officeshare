@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body" ng-controller="TestController">
                    You  @{{ name }} are logged in!
                    <input type="text" ng-model="my" />
                    <p>@{{ my }}</p>

                </div>

            </div>
        </div>
    </div>
</div>
 -->


<div class="Leftpanel">
<div class="row">
        <div class="panel-heading">Dashboard</div>

       <!--  <div class="panel-body" ng-controller="TestController">
            You  @{{ name }} are logged in!
            <input type="text" ng-model="my" />
            <p>@{{ my }}</p>

        </div> -->

         <div ng-view></div>

</div>
</div>

<div id="LeftpanelBG"></div>
@endsection
