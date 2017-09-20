<h2 class="page-header">Edit Report</h2>
{!! Form::model($report,["id"=>"frm","class"=>"form-horizontal"]) !!}
@include("report._form")
{!! Form::close() !!}