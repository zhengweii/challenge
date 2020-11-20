<!DOCTYPE html>
  <head>
    <title>Dropping pins</title>
    <script
      src="https://maps.googleapis.com/maps/api/js?callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <style type="text/css">
      #map {
        height: 800px;
        width: 100%;
      }
    </style>
    <script>
      // Initialize and add the map
      function initMap() {
        points = [
          { lat: 31.224671, lng: 121.480206, title: 'Linckia - Huai Hai Community' },
          { lat: 31.226267, lng: 121.449214, title: 'Linckia - Dong Hai 7th' },
          { lat: 31.30823, lng: 121.50768, title: 'Chuangzhi Community' },
          { lat: 31.332154, lng: 121.524731, title: 'COWORK - Chuanzhi World Business Center' },
          { lat: 31.2315534, lng: 121.492723, title: 'SOHO 3Q - Bund 3Q l' },
          { lat: 31.2315534, lng: 121.492723, title: 'SOHO3Q - Bund 3Q II' },
          { lat: 31.2208583, lng: 121.35243, title: 'SOHO3Q - Sky 3Q' },
          { lat: 31.278778, lng: 31.278778, title: 'Linckia - Tongji Community' },
          { lat: 31.1812077, lng: 121.605051, title: 'XNode - Zhang Jiang' },
          { lat: 31.204984, lng: 121.402548, title: 'XNode - Hong Qiao' },
          { lat: 31.24338, lng: 121.439496, title: 'Naked Hub - Xikang' },
          { lat: 31.230828, lng: 121.465445, title: 'MIXPACE Townhide' },
          { lat: 31.212578, lng: 121.458184, title: 'Naked Hub - Fu Xing Lu' },
          { lat: 31.09247645, lng: 121.327414, title: 'We Geek' },
          { lat: 41.7074429, lng: 44.7655064, title: 'Terminal' },
          { lat: 41.7229554, lng: 44.7797785, title: 'UG Startup Factory' },
          { lat: 41.7062892, lng: 44.783586, title: 'Vere Loft' },
          { lat: 41.6997859, lng: 44.8020677, title: 'Generator 9.8' },
          { lat: 41.69745123, lng: 44.7999328, title: 'Publica' },
          { lat: 23.0290001, lng: 72.53016890000001, title: 'Dev X' },
          { lat: 23.0432348, lng: 72.549655, title: 'Uncubate' },
          { lat: 23.032447, lng: 72.510955, title: 'DoubleO' },
          { lat: 22.9946966, lng: 72.4991682, title: 'Pravel CoWorking Space' },
          { lat: 23.0418232, lng: 72.51680639999999, title: '14 The Hub' },
          { lat: 23.0282646, lng: 72.542312, title: 'Daftar - The coworking space' },
          { lat: 23.03156937, lng: 72.559113, title: '5B Colab' },
          { lat: 23.0119548, lng: 72.5148738, title: 'Pravel Solutions' },
          { lat: 23.0326554, lng: 72.50821209999999, title: 'Next57 Coworking' },
          { lat: 23.1586396, lng: 72.6831136, title: 'InstaOffice' },
          { lat: 23.0263387, lng: 72.52439440000001, title: 'Spaces' }
        ];

        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 10
        });

        let bounds = new google.maps.LatLngBounds();

        for (let i = 0; i < points.length; i++) {
          new google.maps.Marker({
            title: points[i].title,
            position: {
              lat: points[i].lat,
              lng: points[i].lng
            },
            map: map,
          });

          bounds.extend(points[i]);
        };

        map.fitBounds(bounds);
      }
    </script>
  </head>

  <body>
    <h3>My Google Maps</h3>
    <div id="map"></div>
  </body>
</html>
