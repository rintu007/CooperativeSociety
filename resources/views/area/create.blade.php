<h2 class="page-header">New Area</h2>

{{--{!! Form::open(["url"=>"areaC2","class"=>"form-horizontal"]) !!}--}}
{{--<div class="col-sm-7 form-group">--}}
    {{--<div class="input-group">--}}
        {{--<input class="form-control" id="search1" name="searchdata" value="" placeholder="Search..." type="text">--}}

        {{--<div class="input-group-btn">--}}
            {{--<button type="button" class="btn btn-default">--}}

            {{--</button>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--{!! Form::close() !!}--}}
{{--<table class="table table-bordered table-striped">--}}
    {{--<tbody>--}}

    {{--@foreach($areas1 as $key=>$area)--}}
        {{--<tr>--}}

            {{--<td>{{$area->AreaName}}</td>--}}

        {{--</tr>--}}
    {{--@endforeach--}}
    {{--</tbody>--}}
{{--</table>--}}
{!! Form::open(["id"=>"frm","class"=>"form-horizontal"]) !!}
@include("area._form")
{!! Form::close() !!}
