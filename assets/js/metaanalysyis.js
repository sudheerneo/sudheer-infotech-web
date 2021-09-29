var name = "#floatMenu";
var menuYloc = null;

$(document).ready(function() {

    console.log('seo analysing started');

    //float seo initilisation btn creation
    $('body').append(' <p id="seotoolsBtn" title="seo initialyzing" ><i class="fa fa-search my-float">SEO</i></p> ');
    $('#seotoolsBtn').css({
        'position': 'fixed',
        'width': '60px',
        'height': '60px',
        'top': '10px',
        'left': '20px',
        'background-color': '#0C9',
        'color': '#FFF',
        'border-radius': '60px',
        'text-align': 'center',
        'box-shadow': '2px 2px 3px #999',
        'cursor': 'pointer'
    });


    $('body').append(' <div id="seoModal"><div id="seomodal-content"><span id="seoclose">&times;</span><div style="display:flex"><div style="flex:1;border:5px solid #000;padding:40px;margin-right:10px;border-radius:40px"><h3 style="text-align:center">Meta data on this page</h3><pre><code id="metainfo">Not yet parsed</code></pre></div><div style="flex:1;border:5px solid #000;padding:40px;border-radius:40px;font-family:Arial,sans-serif;-webkit-font-smoothing:subpixel-antialiased"><h3 style="text-align:center">Result on search engine like this</h3><br><h4 style="color:#545454;text-align:center;border-bottom:2px solid #000;line-height:.1em;margin:10px 0 20px;background:#fff;padding:0 10px"><span style="background:#fff;padding:0 10px"><span>Google</span></span></h4><div style="width:600px;box-shadow:none;margin:0;padding:0"><span id="metaTitle" style="font-size:18px;line-height:1.2;display:block;letter-spacing:normal;color:#1a0dab;cursor:pointer;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;font-family:Arial,sans-serif;-webkit-font-smoothing:subpixel-antialiased">Meta Tags —&nbsp;Preview, Edit and Generate</span><div style="border:none;padding:0;margin:0;display:block;height:17px"><span id="metaUrl" style="position:relative;top:-2px;font-size:14px;line-height:16px;letter-spacing:normal;color:#006621"></span><span style="display:inline-block;margin-top:-4px;margin-left:3px;border-width:5px 4px 0 4px;border-style:solid;border-color:#006621 transparent"></span></div><span id="metadescription" maxlength="20" style="color:#545454;font-size:13px;line-height:1.4;box-sizing:border-box;font-family:Arial,sans-serif">With Meta Tags you can edit and experiment with your content then preview how your webpage will look on Google, Facebook, Twitter and more!</span></div></div></div></div></div> ');
    $('#seoModal').css({
        'display': 'none',
        'border-radius': '10px',
        'position': 'fixed',
        'z-index': '110',
        'padding-top': '20px',
        'left': '0',
        'top': '0',
        'width': '100%',
        'height': '100%',
        'overflow': 'auto',
        'background-color': 'rgb(0,0,0)',
        'background-color': 'rgba(0,0,0,0.4)'
    });
    $('#seomodal-content').css({
        'background-color': '#fefefe',
        'margin': 'auto',
        'padding': '20px',
        'border': '1px solid #888',
        'width': '95%'
    });
    $('#seoclose').css({
        'color': '#aaaaaa',
        'float': 'right',
        'font-size': '28px',
        'font-weight': 'bold',
        'cursor': 'pointer'
    });
    $('#seoclose:hover,#seoclose:focus').css({
        'color': ' #000',
        'text-decoration': 'none',
        'cursor': 'pointer'
    });

    //modal seo hide on X click
    $("#seoclose").on('click', function() {
        $("#seoModal").hide();

    });

    //modal seo show on btn click
    $('#seotoolsBtn').on('click', function() {
        $('#seoModal').show();

        //display seo actions
        var googlemetaleTitle = $('meta[name=title]').attr("content");
        var googlemetaDescription = $('meta[name=description]').attr("content");
        var googlemetaUrl = window.location.href;

        $('#metaTitle').text(googlemetaleTitle);
        $('#metaUrl').text(googlemetaUrl);
        $('#metadescription').text(googlemetaDescription);
        var txt = $('#metadescription').text();
        if (txt.length > 155)
            $('#metadescription').text(txt.substring(0, 190) + '.....');
    });



});