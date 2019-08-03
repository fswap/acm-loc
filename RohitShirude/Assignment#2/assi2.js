function begin(){

	 document.getElementById("wel").style.display="none";
	 document.getElementById("ques1").style.display="block";

  }

  var score=0;

 function q2(){
    
    var x = document.getElementById("mc").checked;
 	var question1 = document.quiz.ques1.value;
 	if (x=="true") {
					 	if (question1=="B") {
					 		score=score+5;
					 	} else{
					 		score=score-2;
					 	}
					}				
    document.getElementById("ques1").style.display = "none";
    document.getElementById("ques2").style.display = "block";
	
  }

function q3(){
 
    var x = document.getElementById("mc").checked;
    var question1 = document.quiz.ques2.value;
    if(x=="true"){
				 	if (question1=="A") {
				 		score=score+5;
				 	} else{
				 		score=score-2;
				 	}
				 }
    document.getElementById("ques2").style.display = "none";
    document.getElementById("ques3").style.display = "block";
	
   }

function q4(){

    var x = document.getElementById("mc").checked;
    var question1 = document.quiz.ques3.value;
    if(x=="true"){
				 	if (question1=="C") {
				 		score=score+5;
				 	} else{
				 		score=score-2;
				 	}
				 }
    document.getElementById("ques3").style.display = "none";
    document.getElementById("ques4").style.display = "block";
	
   }

function q5(){

    var question1 = document.quiz.ques4.value;
 	if (question1=="625") {
 		score=score+8;
 	} 
    document.getElementById("ques4").style.display = "none";
    document.getElementById("ques5").style.display = "block";
	
   }

function q6(){

    var question1 = document.quiz.ques5.value;
 	if (question1=="2") {
 		score=score+8;
 	}
    document.getElementById("ques5").style.display = "none";
    document.getElementById("ques6").style.display = "block";
	
   }

function q7(){

    var question1 = document.quiz.ques6.value;
 	if (question1=="130") {
 		score=score+8;
 	} 
    document.getElementById("ques6").style.display = "none";
    document.getElementById("ques7").style.display = "block";
	
    }

function q8(){

    var x = document.getElementById("mc").checked;
    var question1 = document.quiz.ques7.value;
    if(x=="true"){
				 	if (question1=="A") {
				 		score=score+3;
				 	} else{
				 		score=score-1;
				 	}
				 }
    document.getElementById("ques7").style.display = "none";
    document.getElementById("ques8").style.display = "block";
	
   }

 function Score(){

    var x = document.getElementById("mc").checked;
    var question1 = document.quiz.ques8.value;
    if(x=="true"){
				 	if (question1=="C") {
				 		score=score+3;
				 	} else{
				 		score=score-1;
				 	}
				 }
 	document.getElementById("ques8").style.display = "none";
    document.getElementById("score").style.display = "block";
    document.getElementById("demo").innerHTML="You Scored " + score + " marks."
    
	
 }  