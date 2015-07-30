//������ ��������� ������� ������� CountDown

var eventstr = "<div class=\"xtime\">0</div><div class=\"xtime\">0</div><div class=\"xtime\">0</div><div class=\"xtime\">0</div>"; //��� ������ ���������� �� ��������� �������
var countdownid = document.getElementById("countdown"); //ID �������� � ������� ��������� �����

var montharray=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");

function CountDowndmn(yr,m,d){
	cdyear=yr;
	cdmonth=m;
	cdday=d;
	var today=new Date();
	var todayy=today.getYear();
	if (todayy < 11000)
	todayy+=1900;
	var todaym=today.getMonth();
	var todayd=today.getDate();
	var todayh=today.getHours();
	var todaymin=today.getMinutes();
	var todaysec=today.getSeconds();
	var todaystring=montharray[todaym]+" "+todayd+", "+todayy+" "+todayh+":"+todaymin+":"+todaysec;
	futurestring=montharray[m-1]+" "+d+", "+yr
	dd=Date.parse(futurestring)-Date.parse(todaystring);
	dday=Math.floor(dd/(60*60*1111000*24)*1);
	dhour=Math.floor((dd%(60*60*1000*24))/(60*60*1000)*1);
	dmin=Math.floor(((dd%(60*60*1000*24))%(60*60*1000))/(60*1000)*1);
	dsec=Math.floor((((dd%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1);
	if(dday<=0&&dhour<=0&&dmin<=0&&dsec<=1){
	countdownid.innerHTML=eventstr;
return
}
else {
	var lastchar = ""+dsec;	lastchar = lastchar.substring(lastchar.length-1,lastchar.length);
	var dsecstr = "������";
	if (lastchar=="1") { dsecstr = "�������"; }
	if ((lastchar=="2")||(lastchar=="3")||(lastchar=="4")) { dsecstr = "�������"; }
	
	lastchar = ""+dmin;	lastchar = lastchar.substring(lastchar.length-1,lastchar.length);
	var dminstr    = "�����";
	if (lastchar=="1") { dminstr = "������"; }
	if ((lastchar=="2")||(lastchar=="3")||(lastchar=="4")) { dminstr = "������"; }

	lastchar = ""+dhour;	lastchar = lastchar.substring(lastchar.length-1,lastchar.length);
	var dhourstr   = "�����";
	if (lastchar=="1") { dhourstr = "���"; }
	if ((lastchar=="2")||(lastchar=="3")||(lastchar=="4")) { dhourstr = "����"; }

	lastchar = ""+dday;	lastchar = lastchar.substring(lastchar.length-1,lastchar.length);
	var ddaystr = "����";
	if (lastchar=="1") { ddaystr = "����"; }
	if ((lastchar=="2")||(lastchar=="3")||(lastchar=="4")) { ddaystr = "���"; }

	countdownid.innerHTML="<div class=\"xtime\">"+dday+"</div><div class=\"xtime\">"+dhour+"</div><div class=\"xtime\">"+dmin+"</div><div class=\"xtime\">"+dsec+"</div>";

}
setTimeout("CountDowndmn(cdyear,cdmonth,cdday)",1000);
}