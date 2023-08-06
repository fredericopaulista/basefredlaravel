
    < !-- Review de Localbusiness -- >
<script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "LocalBusiness",
      "name": "Meu Negócio",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Rua Principal, 123",
        "addressLocality": "Cidade",
        "addressRegion": "Estado",
        "postalCode": "01234-567",
        "addressCountry": "Brasil"
      },
      "telephone": "(11) 9999-9999",
      "openingHours": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": "Monday",
          "opens": "09:00",
          "closes": "18:00"
        },
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": "Tuesday",
          "opens": "09:00",
          "closes": "18:00"
        },
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": "Wednesday",
          "opens": "09:00",
          "closes": "18:00"
        },
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": "Thursday",
          "opens": "09:00",
          "closes": "18:00"
        },
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": "Friday",
          "opens": "09:00",
          "closes": "18:00"
        },
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": "Saturday",
          "opens": "10:00",
          "closes": "16:00"
        }
      ],
      "website": "https://meunegocio.com.br",
      "image": {
        "@type": "ImageObject",
        "url": "https://meunegocio.com.br/logo.png",
        "height": 100,
        "width": 100
      },
      "review": [
        {
          "@type": "Review",
          "rating": 5,
          "author": "Fulano de Tal",
          "text": "Ótimo atendimento e serviço. Recomendo!"
        },
        {
          "@type": "Review",
          "rating": 4,
          "author": "Beltrano da Silva",
          "text": "O produto é bom, mas o preço é um pouco alto."
        }
      ]
    }
    </script>
    /**
    * Review de Produto
    */

    <script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "Product",
          "name": "Meu Produto",
          "description": "Este é um produto muito legal.",
          "image": {
            "@type": "ImageObject",
            "url": "https://example.com/product.png",
            "height": 100,
            "width": 100
          },
          "price": "100.00",
          "sku": "1234567890",
          "brand": "Minha Marca",
          "availability": "InStock",
          "reviews": [
            {
              "@type": "Review",
              "rating": 5,
              "author": "Fulano de Tal",
              "text": "Ótimo produto! Recomendo!"
            },
            {
              "@type": "Review",
              "rating": 4,
              "author": "Beltrano da Silva",
              "text": "O produto é bom, mas o preço é um pouco alto."
            }
          ]
        }
        </script>
        /**
        * Review de Offer
        */

        <script type="application/ld+json">
            {
              "@context": "http://schema.org",
              "@type": "Offer",
              "price": "100.00",
              "priceCurrency": "USD",
              "priceValidUntil": "2023-03-08T00:00:00Z",
              "itemOffered": {
                "@type": "Product",
                "name": "Meu Produto"
              }
            }
            </script>
            /**
            * Schema de Review
            */

            <script type="application/ld+json">
                {
                  "@context": "http://schema.org",
                  "@type": "Review",
                  "rating": 5,
                  "author": "Fulano de Tal",
                  "text": "Ótimo produto! Recomendo!"
                }
                </script>
