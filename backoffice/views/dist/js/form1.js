function test(argument) 
{
	// body...
	var eid=document.getElementById("eid").value;
	var eidvalid=;
	var ename=document.getElementById("ename").value;
    var ename=;
	var date_d=document.getElementById("dated").value;
	var date_f=document.getElementsByTagName("datedf").value;
	var des=document.getElementById("edes").value;
	if(eid.length==0 || ename.length==0 || date_d.length==0 || date_f.length==0 || des.length==0  )
	{
		alert('champs vide');
	}
	else 
	{
	
			window.location.replace("D:/2annee/2eme semestre/projet_web/sondage.html");
	}
}
function testpromo(argument) 
{
	// body...
	var eid=document.getElementById("pid").value;
	var ename=document.getElementById("pname").value;
	var date_d=document.getElementById("dated").value;
	var date_f=document.getElementsByTagName("datedf").value;
	if(pid.length==0 || pname.length==0 || date_d.length==0 || date_f.length==0)
	{
		alert('champs vide');
	}
	else 
	{
	
			window.location.replace("D:/2annee/2eme semestre/projet_web/sondage.html");
	}
}