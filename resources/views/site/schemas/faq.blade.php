@foreach($faqs as $faq)
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"{{ $faq->title }}","acceptedAnswer":{"@type":"Answer","text":"{!! $faq->description !!}"}}]}</script><!--FAQPage Code Generated
@endforeach
