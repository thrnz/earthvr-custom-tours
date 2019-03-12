# Google Earth VR Custom Tour Generator
A basic custom tour generator for Google Earth VR

https://earthvr-custom-tours.appspot.com

### Self Hosting

A pre-made Docker image is available for easy self hosting, however a valid Google Maps API key is needed to retireve elevation data. See [here](https://developers.google.com/maps/documentation/elevation/start) for more info.

```
docker run -p 80:80 \
    -e MAPS_API_KEY=xxxxxx \
    thrnz/earthvr-custom-tours    
```
