<h2 class="page-header">Updating an account</h2>
{!! Form::model($loanposting,["id"=>"frm","class"=>"form-horizontal"]) !!}
@include("loanposting._form")
{!! Form::close() !!}