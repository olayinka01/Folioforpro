/*
	Alluringcrps javascript file written by Aberefa James Babatunde. 
	             All rights reserved, 2015.
*/
var crpphoto = 
{
	//this method will display a native loading dialog
	dialog:{
		show:function(){
				var galss_layer = $("<div></div>").attr('id','load-glass2');
				var close_icon = $("<aside title='close'></aside>").addClass('close-icon2');
				var progress_gif = $("<div><br><br><br><br><br><br><br>Please wait</div>").addClass('progress-gif2');
				var glass_article = $("<div></div>").addClass('load-article2');
				//adds an event listener to the close icon
				close_icon.click(crpphoto.dialog.dispose);
				glass_article.append(close_icon,progress_gif);
				galss_layer.append(glass_article);
				glass_article.fadeIn("fast");
				$('body').prepend(galss_layer);
		},
		//this method will close the native loading dialog
		dispose:function(){
			$('#load-glass2').remove();
	       }
		,
		//what happens when a load operation is complete
		callback:function(e)
		{
			//show the close icon by default
			$("#load-glass2").find('.close-icon2').css('display','block');
			//remove the loading gif 
			$("#load-glass2").find('.progress-gif2').remove();
			if(e!=null)
			e();
		}
		},
	show:function(node,field){
		  //crpphoto elements and coupling
		  var ctn = $("<div></div>").addClass("ctn2");
		  var image_box = $("<div></div>").addClass("imageBox2");
		  var thumb_box = $("<div></div>").addClass("thumbBox2");
		  var spinner =  $("<div></div>").addClass("spinner2");
		  var action = $("<div></div>").addClass("action2");
		  var file = $("<input/>").addClass("left2").attr({'type':"file"});
		  var btn_plus = $("<button title='zoom in'>+</button>").addClass("button2");
		  var btn_minus = $("<button title='zoom out'>-</button>").addClass("button2");
		  var btn_crop = $("<button title='use picture'>use</button>").addClass("button2");
		  var clr = $("<p></p>").addClass("remove-space2 clr2");
		  image_box.append(thumb_box,spinner);
		  action.append(file,btn_crop,btn_plus,btn_minus);
		  ctn.append(image_box,action,clr);
		  //end ofcrp elements
		  //setup the imagecrp
		 var ops =
        {
            thumbBox: thumb_box,
            spinner: spinner,
            imgSrc: 'avatar.png'
        }
        var crop;
        $(file).on('change', function(){
            var reader = new FileReader();
            reader.onload = function(e) {
                ops.imgSrc = e.target.result;
               crop = $('.imageBox2').cropbox(ops);
            }
            reader.readAsDataURL(this.files[0]);
            this.files = [];
        })
        $(btn_crop).on('click', function(){
		try{
            var img = crop.getDataURL();
			
            $(node).parent().find('img').attr('src',img);
			$("#"+field).val(img);
			crpphoto.dialog.dispose();
		}catch(e){}
			
        });
        $(btn_plus).on('click', function(){
           crop.zoomIn();
        });
        $(btn_minus).on('click', function(){
           crop.zoomOut();
        });
		//end ofcrp setup
		 crpphoto.dialog.show();
			crpphoto.dialog.callback(function(){
				 var content_node = $("#load-glass2").find('.load-article2');
				  content_node.append(ctn);
			  });
		}
	
}