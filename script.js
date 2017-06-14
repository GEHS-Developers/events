$(document).ready(function(){


//this makes the webapge reload every minute
//setTimeout(function(){
   //window.location.reload(1);
//}, 60000);
//end of page reloading every minute

////////////////////ALL A BUNCH OF DATE STUFF//////////////////////

//get's today's date
var today = new Date();

//get the year
var thisYear = today.getFullYear();

//get's this month on a number
var thisMonth = today.getMonth();

//get's this's day into a word, ex---Monday
var thisWeekday = today.getDay();

//get the day number
var thisDay = today.getDate();


////////////////////END OF BUNCH OF DATE STUFF/////////////////////

	
	// will convert month number to text
	switch(thisMonth){

case 0:
thisMonth = "January";
break;

case 1:
thisMonth = "February";
break;

case 2:
thisMonth = "March";
break;

case 3:
thisMonth = "April";
break;

case 4:
thisMonth = "May";
break;

case 5:
thisMonth = "June";
break;

case 6:
thisMonth = "July";
break;

case 7:
thisMonth = "August";
break;

case 8:
thisMonth = "September";
break;

case 9:
thisMonth = "October";
break;

case 10:
thisMonth = "November";
break;

case 11:
thisMonth = "December";
break;



	} // end of switch(thisMonth)

//now this will set the Month Text to the actual month!

$(".month").text(thisMonth + " " + thisYear);


//another switch statement to change the number from the weekday to text!

switch(thisWeekday){

case 0:
thisWeekday = "Sunday"
break

case 1:
thisWeekday = "Monday"
break;

case 2:
thisWeekday = "Tuesday"
break;

case 3:
thisWeekday = "Wednesday"
break;

case 4:
thisWeekday = "Thursday"
break;

case 5:
thisWeekday = "Friday"
break;

case 6:
thisWeekday = "Saturday"
break;

} //end of Weekday switch statement

//this wil set the text of the weekday to the actual text
$(".day-name").text(thisWeekday);

//this wil set the text of the weekday to the actual text
$(".day-number").text(thisDay);

//////////////////To sort the list in order/////////


//to be continued


///////////END OF ORDERING BY TIME////////////




}) //end of Document.Ready function