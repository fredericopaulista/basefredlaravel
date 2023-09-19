<?=
'<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL .
'<?xml-stylesheet type="text/xsl" href="' . env('APP_URL') . 'sitemap.xsl"?>' . PHP_EOL
?>

<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
      @if($sitemaps)
      @foreach($sitemaps as $page)
      <sitemap>
            <loc>{{ env('APP_URL') . 'storage/' . $page }}</loc>
            <lastmod>{{ date('c',time()) }}</lastmod>
      </sitemap>
      @endforeach
      @endif
</sitemapindex>
