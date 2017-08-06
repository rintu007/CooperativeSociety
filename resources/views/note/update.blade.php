<h2 class="page-header">Update Note</h2>
{!! Form::model($note,["id"=>"frm","class"=>"form-horizontal"]) !!}
@include("note._form")
{!! Form::close() !!}