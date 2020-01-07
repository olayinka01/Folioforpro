/*
	Alluringcrps javascript file written by Aberefa James Babatunde. 
	             All rights reserved, 2015.
*/
var crpwork = 
{
	//this method will display a native loading dialog
	dialog:{
		show:function(){
				var galss_layer = $("<div></div>").attr('id','load-glass3');
				var close_icon = $("<aside title='close'></aside>").addClass('close-icon3');
				var progress_gif = $("<div><br><br><br><br><br><br><br>Please wait</div>").addClass('progress-gif3');
				var glass_article = $("<div></div>").addClass('load-article3');
				//adds an event listener to the close icon
				close_icon.click(crpwork.dialog.dispose);
				glass_article.append(close_icon,progress_gif);
				galss_layer.append(glass_article);
				glass_article.fadeIn("fast");
				$('body').prepend(galss_layer);
		},
		//this method will close the native loading dialog
		dispose:function(){
			$('#load-glass3').remove();
	       }
		,
		//what happens when a load operation is complete
		callback:function(e)
		{
			//show the close icon by default
			$("#load-glass3").find('.close-icon3').css('display','block');
			//remove the loading gif 
			$("#load-glass3").find('.progress-gif3').remove();
			if(e!=null)
			e();
		}
		},
	show:function(node,field){
		  //crp elements and coupling
		  var ctn = $("<div></div>").addClass("ctn3");
		  var image_box = $("<div></div>").addClass("imageBox3");
		  var thumb_box = $("<div></div>").addClass("thumbBox3");
		  var spinner =  $("<div></div>").addClass("spinner3");
		  var action = $("<div></div>").addClass("action3");
		  var file = $("<input/>").addClass("left3").attr({'type':"file"});
		  var btn_plus = $("<button title='zoom in'>+</button>").addClass("button3");
		  var btn_minus = $("<button title='zoom out'>-</button>").addClass("button3");
		  var btn_crop = $("<button title='use picture'>use</button>").addClass("button3");
		  var clr = $("<p></p>").addClass("remove-space3 clr3");
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
               crop = $('.imageBox3').cropbox(ops);
            }
            reader.readAsDataURL(this.files[0]);
            this.files = [];
        })
        $(btn_crop).on('click', function(){
		try{
            var img = crop.getDataURL();
			
            $(node).parent().find('img').attr('src',img);
			$("#"+field).val(img);
			crpwork.dialog.dispose();
		}catch(e){}
			
        });
        $(btn_plus).on('click', function(){
           crop.zoomIn();
        });
        $(btn_minus).on('click', function(){
           crop.zoomOut();
        });
		//end ofcrp setup
		 crpwork.dialog.show();
			crpwork.dialog.callback(function(){
				 var content_node = $("#load-glass3").find('.load-article3');
				  content_node.append(ctn);
			  });
		}
	
}