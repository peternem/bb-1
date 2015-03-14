// JavaScript Document

/* ------------------------------- */
/*  Begin -- Email script - contact.php */
/* ------------------------------- */  

function emailContactBen(){

	var email = "ben";
	var emailHost = "benberden.com"
	var errorMsg = "here here here is the error error error error";
	var subject = "BenBerden.com - Contact Ben";
	var body_message = " ";
	
	var mailto_link = 'mailto:'+email+'@'+emailHost+'?subject='+subject+'&body='+body_message;
	
	var win = (parent.location= mailto_link);
}	

function emailContactBen1(){

	var email = "sneller";
	var emailHost = "benberden.com"
	var errorMsg = "here here here is the error error error error";
	var subject = "BenBerden.com - Training Inquiries";
	var body_message = " ";
	
	var mailto_link = 'mailto:'+email+'@'+emailHost+'?subject='+subject+'&body='+body_message;
	
	var win = (parent.location= mailto_link);
}	


 $(document).ready(function() {
	/* Agalite Logo Rollover - Index.php */
	$(".btnRollover img").hover(function(){
			this.src = this.src.replace("_over","_on");
		},function(){
			this.src = this.src.replace("_on","_over");
		}
	);
	
	/**************************************************************************************/		   
	/**** BEGIN _ MAIN NAVIGATION MENU ROLLOVER IMAGE/LINK Function - SITE WIDE ***********/
	/**************************************************************************************/
		var imgsrc= null;
		// Preload all rollovers #mainContentLH img,
		$(".btnRollover img").each(function() {
			// Set the original src
			rollsrc = $(this).attr("src");
			rollON = rollsrc.replace(/.png$/ig,"_over.png");
			$("<img>").attr("src", rollON);
		});
		
		// Navigation rollovers #mainContentLH a, #hdrRightSectA a, #hdrRightSectB1 a, #hdrRightSectB2 a, #moreInfoLink a
		$(".btnRollover").mouseover(function(){
			imgsrc = $(this).children("img").attr("src");
			matches = imgsrc.match(/_over/);
			
			// don't do the rollover if state is already ON
			if(!matches) {
				imgsrcON = imgsrc.replace(/.png$/ig,"_over.png"); // strip off extension
				$(this).children("img").attr("src", imgsrcON);
			}		
		});	
		
		$(".btnRollover").mouseout(function(){
			$(this).children("img").attr("src", imgsrc);
		});
		$(".btnRollover").click(function(){
			$(this).children("img").attr("src", imgsrc);
		});	
		
	  
});