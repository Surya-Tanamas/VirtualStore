<form method="post" action="pesan">
	@csrf
	<div class="border-0 row m-2">
		<div class="border-0 col-6 form-group my-auto p-1">
			<input type="hidden" name="pesanan" value="{{json_encode($value)}}"/>
			<input class="border-0 bg-default" value="{{count($value) ?? 0}} Pasangan"/>
		</div>
		<div class="border-0 col-3 form-group my-auto p-1">
			<input type="submit" class="btn btn-sm btn-primary form-control" name="submit" value="Pesan"/>
		</div>
		<div class="border-0 col-3 form-group my-auto p-1">
			<input type="submit" class="btn btn-sm btn-outline-danger form-control" name="submit" value="Hapus"/>
		</div>
	</div>
</form>