<!DOCTYPE HTML>
<html>
<head>
    <!-- Primary Meta Tags -->
    <title>Sudheer Infotech Solutions</title>
    <meta name="title" content="Sudheer Infotech Solutions">
    <meta name="description" content="We are serving different type of tech services like IT, Networking, Tech support for reasonable prices. We are committed to giving you the best creative and innovative ideas that help your business growth. Our technological services take your business to a successful business. We are so glad and always for your business needs by Sudheer InfoTech solutions.">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

	<script src="assets/js/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<style>
        /* The Modal (background) */
       

    </style>

</head>


<div style="display: flex;">
	<div style="flex: 1; border: 5px solid black; padding: 40px; margin-right: 10px; border-radius: 40px;">
		<h3 style="text-align:center">Meta data on this page</h3><pre ><code id="metainfo">hello</code></pre></div>
	<div style="flex: 1; border: 5px solid black; padding: 40px; border-radius:40px; font-family: Arial, sans-serif; -webkit-font-smoothing: subpixel-antialiased;">
		<h3 style="text-align:center">Result on search engine like this</h3>
		<br>
		<h4 style="color: #545454; text-align: center; border-bottom: 2px solid #000;line-height: 0.1em;margin: 10px 0 20px; background:#fff; padding:0 10px; "><span style="background:#fff;padding:0 10px;"><span>Google</span></span></h4>
		<div style="width: 600px;box-shadow: none; margin: 0; padding: 0;"><span id="metaTitle" style="font-size: 18px; line-height: 1.2; display: block; letter-spacing: normal; color: #1a0dab; cursor: pointer; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; font-family: Arial, sans-serif; -webkit-font-smoothing: subpixel-antialiased;">Meta Tags —&nbsp;Preview, Edit and Generate</span>
			<div style=" border: none; padding: 0; margin: 0; display: block; height: 17px;"><span id="metaUrl" style="position: relative; top: -2px; font-size: 14px; line-height: 16px;letter-spacing: normal; color: #006621;"></span><span style=" display: inline-block;margin-top: -4px; margin-left: 3px; border-width: 5px 4px 0 4px; border-style: solid; border-color: #006621 transparent;"></span></div><span id="metadescription" maxlength="20" style="color: #545454; font-size: 13px; line-height: 1.4;box-sizing: border-box;font-family: Arial, sans-serif;">With Meta Tags you can edit and experiment with your content then preview how your webpage will look on Google, Facebook, Twitter and more!</span></div>
	</div>
</div>


    

<script>

	$(document).ready(function(){

        var googlemetaleTitle = $('meta[name=title]').attr("content");
        var googlemetaDescription = $('meta[name=description]').attr("content");
        var googlemetaUrl = window.location.href;

        $('#metaTitle').text(googlemetaleTitle);
        $('#metaUrl').text(googlemetaUrl);
        $('#metadescription').text(googlemetaDescription);
        var txt= $('#metadescription').text();
        if(txt.length > 155)
        $('#metadescription').text(txt.substring(0,190) + '.....');
        
        // let x = $('meta').get();
        // var author = $('meta[name=title]').attr("content");
        // console.log(author);
        // for (i = 0 ; i < x.length ; i++ ){
        // console.log(x[i]);
        // var y = "-->"+x[i];
        // $('#metainfo').text();
        // }

    });

</script>






	    <!-- Scripts -->

    <script src="assets/js/jquery.min.js"></script>

   

</body>



</html>