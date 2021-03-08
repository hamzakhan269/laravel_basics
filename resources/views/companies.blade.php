<div>
	@foreach($data as $item)
	<li> {{$item->name}}</li>
	@endforeach
</div>

<div>
	{{$data->links()}}
</div>

<style>
	.page-link{
		display: inline-block;
		padding: 10px;
	}


</style>