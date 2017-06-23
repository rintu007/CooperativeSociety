<h2 class="page-header">Add Withdraws</h2>

{!! Form::model($withdraw,["id"=>"frm","class"=>"form-horizontal"]) !!}
@include("withdraw._form")
{!! Form::close() !!}
