@foreach($items as $item)
<url>
<loc>{{ $item['slug'] }}</loc>
<lastmod>{{ $item['updated_at'] }}</lastmod>
<priority>0.80</priority>
</url>
@endforeach
