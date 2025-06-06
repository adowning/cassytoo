@extends('backend.layouts.app')

@section('page-title', trans('app.edit_rule'))
@section('page-heading', $rule->title)

@section('content')

<section class="content-header">
	@include('backend.partials.messages')
</section>

<section class="content">
	<div class="box box-default">
		<form action="{{ route('backend.rule.update', $rule->id) }}" method="POST" id="user-form" enctype="multipart/form-data">
			@csrf
			<div class="box-header with-border">
				<h3 class="box-title">@lang('app.edit_rule')</h3>
			</div>

			<div class="box-body">
				<div class="row">
					@include('backend.rules.partials.base', ['edit' => true])
				</div>
			</div>

			<div class="box-footer">
				<button type="submit" class="btn btn-primary">
					@lang('app.edit_rule')
				</button>

			</div>
		</form>
	</div>
</section>

@stop

@section('scripts')
<script>
	initSample();
</script>
@stop