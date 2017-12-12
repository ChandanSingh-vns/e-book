<h1>All Banners</h1>
@foreach($banners as $banner)
<p>{{ $banner->images }} - {{ $banner->created_at }}</p>
@endforeach
