<?=
'<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL .
'<?xml-stylesheet type="text/xsl" href="' . env('APP_URL') . 'sitemap.xsl"?>' . PHP_EOL
?>

<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

            <url>
            <loc>{{ env('APP_URL') }}</loc>
            <lastmod>{{ date('c',time()) }}</lastmod>
            <priority>1.00</priority>
            </url>
            @foreach($pages as $page)
            <url>
            <loc>{{ env('APP_URL') . $page->slug }}</loc>
            <lastmod>{{ $page->updated_at->format(DateTime::ATOM) }}</lastmod>
            <priority>0.80</priority>
            </url>
            @endforeach

</urlset>
