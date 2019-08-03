function prev(){
            document.getElementById('MagicCarousel').style.display='block';
			document.getElementById('vis').style.display='block';
            document.getElementById('prev').style.display='none';
			document.getElementById('cont1').style.display='none';
			document.getElementById('cont2').style.display='none';
			document.getElementById('cont3').style.display='none';
			document.getElementById('cont4').style.display='none';
			document.getElementById('cont5').style.display='none';
			document.getElementById('cont6').style.display='none';
			document.getElementById('cont7').style.display='none';
			document.getElementById('cont8').style.display='none';
			document.getElementById('cont9').style.display='none';
			document.getElementById('cont10').style.display='none';          
}

function vday1(){
			document.getElementById('MagicCarousel').style.display='none';
			document.getElementById('cont1').style.display='block';
			document.getElementById('vis').style.display='none';
			document.getElementById('prev').style.display='block';		    
}

function vday2(){
			document.getElementById('MagicCarousel').style.display='none';
			document.getElementById('cont2').style.display='block';
			document.getElementById('vis').style.display='none';
			document.getElementById('prev').style.display='block';
}

function vday3(){
			document.getElementById('MagicCarousel').style.display='none';
			document.getElementById('cont3').style.display='block';
			document.getElementById('vis').style.display='none';
			document.getElementById('prev').style.display='block';
}

function flash(){
			document.getElementById('MagicCarousel').style.display='none';
			document.getElementById('cont4').style.display='block';
			document.getElementById('vis').style.display='none';
			document.getElementById('prev').style.display='block';		    
}

function after19(){
			document.getElementById('MagicCarousel').style.display='none';
			document.getElementById('cont5').style.display='block';
			document.getElementById('vis').style.display='none';
			document.getElementById('prev').style.display='block';		    
}

function after18(){
			document.getElementById('MagicCarousel').style.display='none';
			document.getElementById('cont6').style.display='block';
			document.getElementById('vis').style.display='none';
			document.getElementById('prev').style.display='block';		    
}

function khanan(){
			document.getElementById('MagicCarousel').style.display='none';
			document.getElementById('cont7').style.display='block';
			document.getElementById('vis').style.display='none';
			document.getElementById('prev').style.display='block';		    
}

function concetto(){
			document.getElementById('MagicCarousel').style.display='none';
			document.getElementById('cont8').style.display='block';
			document.getElementById('vis').style.display='none';
			document.getElementById('prev').style.display='block';		    
}

function basant(){
			document.getElementById('MagicCarousel').style.display='none';
			document.getElementById('cont9').style.display='block';
			document.getElementById('vis').style.display='none';
			document.getElementById('prev').style.display='block';		    
}

function pratibimb(){
			document.getElementById('MagicCarousel').style.display='none';
			document.getElementById('cont10').style.display='block';
			document.getElementById('vis').style.display='none';
			document.getElementById('prev').style.display='block';		    
}

function searchfilter(){
   var x= document.getElementById("search").value;
   x=x.toLowerCase();
   var y=document.getElementsByTagName("li");
   var a=document.getElementsByTagName("ul");
   if(x!=""){
    a[0].style.zIndex="2";
    }else
    {
    	a[0].style.zIndex="-1";
    }
   for(var i=0;i<10;i++){
   	  var z=y[i].innerText.toLowerCase();
   	  if (z.indexOf(x)>-1) {
   	  	y[i].style.display="";
   	  }
   	  else{
   	  	y[i].style.display="none";
   	  }
      
   } 
}