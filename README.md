# earthvr-custom-tours
Basic custom tour generator for Google Earth VR

More info at:

https://earthvr-custom-tours.appspot.com/

https://www.reddit.com/r/Vive/comments/5rzig6/google_earth_vr_custom_tour_generator/


Self host using Docker: 

```
docker run -p 80:80 \
    -e MAPS_API_KEY=xxxxxx \
    thrnz/earthvr-custom-tours    
```

Or Docker-compose:
```
version: '3'
services:
    web:
        image: thrnz/earthvr-custom-tours
        environment:
            MAPS_API_KEY: xxxxxx
        ports:
            - 80:80

```
