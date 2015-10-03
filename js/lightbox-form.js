

function gradient(id, level)
{
	var box = document.getElementById(id);
	box.style.opacity = level;
	box.style.MozOpacity = level;
	box.style.KhtmlOpacity = level;
	box.style.filter = "alpha(opacity=" + level * 100 + ")";
	box.style.display="block";
	return;
}


function fadein(id) 
{
	var level = 0;
	while(level <= 1)
	{
		setTimeout( "gradient('" + id + "'," + level + ")", (level* 1000) + 10);
		level += 0.01;
	}
}


// Open the lightbox connexion

function openbox_connexion(formtitle, fadin)
{
  var box = document.getElementById('box_connexion'); 
  document.getElementById('shadowing_connexion').style.display='block';

  var btitle = document.getElementById('boxtitle_connexion');
  btitle.innerHTML = formtitle;
  
  if(fadin)
  {
	 gradient("box_connexion", 0);
	 fadein("box_connexion");
  }
  else
  { 	
    box.style.display='block';
  }  	
}

// Open the lightbox inscription

function openbox_inscription(formtitle, fadin)
{
  var box = document.getElementById('box_inscription'); 
  document.getElementById('shadowing_inscription').style.display='block';

  var btitle = document.getElementById('boxtitle_inscription');
  btitle.innerHTML = formtitle;
  
  if(fadin)
  {
	 gradient("box_inscription", 0);
	 fadein("box_inscription");
  }
  else
  { 	
    box.style.display='block';
  }  	
}


// Close the lightbox inscription

function closebox_inscription()
{
   document.getElementById('box_inscription').style.display='none';
   document.getElementById('shadowing_inscription').style.display='none';
}

// Close the lightbox connexion

function closebox_connexion()
{
   document.getElementById('box_connexion').style.display='none';
   document.getElementById('shadowing_connexion').style.display='none';
}



