@push('javascript')
	$('.alert').slideDown(600);
@endpush

<div class="alert {{ $type or 'alert-info' }}" style="display: none;" role="alert">
	@yield($id.'Content')
</div>

@push('css')
	.alert {
	    padding: 15px;
	    margin-bottom: 20px;
	    border: 1px solid transparent;
	    border-radius: 4px;
	}
	.alert-success {
	    color: #3c763d;
	    background-color: #dff0d8;
	    border-color: #d6e9c6;
	}
	.alert-info {
	    color: #31708f;
	    background-color: #d9edf7;
	    border-color: #bce8f1;
	}
	.alert-warning {
	    color: #8a6d3b;
	    background-color: #fcf8e3;
	    border-color: #faebcc;
	}
	.alert-danger {
	    color: #a94442;
	    background-color: #f2dede;
	    border-color: #ebccd1;
	}
@endpush