<!DOCTYPE html>
<html>
<head>
<title>Google Earth VR Custom Tour Generator</title></head>
<body>
<h2>Google Earth VR Custom Tour Generator</h2>

<p>This tool allows you to create your own custom tours in Google Earth VR. It's just like the included tours (Cities, Landmarks, Colours etc.), but with your own set of locations.</p>

<form action="process.php" method="post" enctype="multipart/form-data">

<h3>Preperation:</h3>
<p>First, save the destinations you want to include in Google Earth VR itself using the 'star' button on the globe controller. They will appear as .JPG files in your "%Username%/Pictues/Google Earth VR" folder.</p>

<h3>Step 1:</h3>
<p>Attach the JPG's of the destinations you want to include below. You can select multiple files using ctrl or shift.</p>
<p>When generating the tour, destinations are ordered by filename. If the order matters to you then you must rename the .JPGs before attaching.</p>
<input type="file" name="destinations[]" multiple>
  
<h3>Step 2:</h3>
<p>Next, choose how long to stay at each destination during the tour (in seconds): <input type="text" name="delay" value="25"></p>
<h3>Step 3:</h3>
<p>Now choose what (approx) local hour of the day you want each destination to begin: <input type="text" name="init_time" value="12"> and end at: <input type="text" name="end_time" value="15">
<h3>Step 4:</h3>
<p>Finally, give this tour a name: <input type="text" name="tourname" value="Custom"></p>
<p>Click below to generate the tour file. Simply place in the "SteamApps/Common/EarthVR/assets/content/tours/custom_tour_name" folder (it'll need manually creating) and you're good to go!</p>

<input type="submit" value="Generate Tour!">

<h3>Limitations and notes:</h3>
<p>If you save a destination that is too close to the ground, then you may appear underground when it appears during the tour. This is because I'm not sure how to pull the appropriate elevation data from the JPG metadata, and rely on data from the Google Maps Elevation API instead.</p>
<p>To include looping background audio, place an .ogg file named 'bgaudio1.ogg' in the same folder as earthVR.textpb. This will play throughout the entire tour.</p>
<p>To include destination specific audio, place a DESTNAME.ogg file in the same folder as earthVR.textpb, where DESTNAME is the name of the corresponding .JPG. Eg: include 'Christchurch_Central.ogg' to play audio when visiting 'Christchurch_Central.jpg'.</p>
<p>You may experience a lack of audio when using filenames with non-standard characters. This may be an issue with both .ogg files and the tour's folder name itself. You may need to manually edit the tour file's 'audio_resource' entries in order to fix this.</p>
</form>

</body>
</html>
