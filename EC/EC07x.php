<html>
<head>
<title>EC01</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<SCRIPT LANGUAGE="JavaScript">	
	var pdf = new PDFObject({
//  url: "<?php  echo $hF; ?>EC/Fizika-Kozep-2015-05-Fel.pdf",
  url: "http://localhost/Fizika/EC/Fizika-Kozep-2015-05-Fel.pdf",
  id: "pdfRendered",
  pdfOpenParams: {
    view: "FitH"
  }
}).embed("pdfRenderer");	
</script>
	
	
	<script src="/js/pdfobject.js"></script>
<script>PDFObject.embed("Fizika-Kozep-2015-05-Fel.pdf", "#example1");</script>
	
	
	
</head> <?php  include "../../h.php"; $_SERVER['REQUEST_URI']; $pa = $_SERVER['REQUEST_URI']; if (isset($_GET['pap']))				$pap = $_GET['pap']; if (isset($_GET['par']))				$par = $_GET['par']; ?> <body>

<table style="width: 100%;"><tbody><tr>
<td><a href="https://drive.google.com/open?id=1ipsCJdMIgOiKGXfmxT4RIalH8QEdY4sr"><img title="vissza" src="<?php  echo $hF; ?>@/01vissza.jpg" alt="vissza" border="0" /></a></td>
<td style="text-align: right;"><a href="EC02.php"><img src="<?php  echo $hF; ?>@/02elore.jpg" alt="előre" title="előre" /> </a></td></tr></tbody></table>


<object data="Fizika-Kozep-2015-05-Fel.pdf" type="application/pdf" width="100%" height="100%">
   <p><b>Example fallback content</b>: This browser does not support PDFs. Please download the PDF to view it: <a href="Fizika-Kozep-2015-05-Fel.pdf">Download PDF</a>.</p>
</object>


<h2>	<small>	<a target="blank"  href="<?php  echo $zzzzk15m;?>	" >	 7. óra: &nbsp;&nbsp; Érettségi feladatok 2015 május </a>	<a target="blank"  href="<?php  echo $zzzk15m;?>	" >	<img src="<?php  echo $hF; ?>	@/04tud.jpeg" />	</a>	</small>	</h2>
<br><br>

<?php  include_once($pF . "@@/MEA28.php");
	
//	readfile('Fizika-Kozep-2015-05-Fel.pdf');
	?>
	
<div id="example1"></div>	
	
	
<iframe id="fred" style="border:1px solid #666CCC" title="PDF in an i-Frame" src="Fizika-Kozep-2015-05-Fel.pdf" frameborder="1" scrolling="auto" height="1100" width="850" ></iframe>	
	
	
	
	
	
	<iframe src="https://research.google.com/pubs/archive/44678.pdf"
   width="700px" height="600px" >
	
<iframe src="Fizika-Kozep-2015-05-Fel.pdf" width="800px" height="600px"></iframe>
		
<div id="pdfRenderer"></div>


	
	<iframe name="xxx" width="100%" height="100%" src="https://drive.google.com/open?id=1ipsCJdMIgOiKGXfmxT4RIalH8QEdY4sr" frameborder="0" allowfullscreen></iframe>
	
	
</td></tr></tbody></table><p><img style="width: 100%;" src="EC01.jpeg" title="1. óra: &nbsp;&nbsp; Bevezető, elvárások ismertetése "  alt="1. óra: &nbsp;&nbsp; Bevezető, elvárások ismertetése" /></p>

<table style="width: 100%;"><tbody><tr>
<td><a href="Fizika-Kozep-2015-05-Fel.pdf"><img title="vissza" src="<?php  echo $hF; ?>@/01vissza.jpg" alt="vissza" border="0" /></a></td>
<td style="text-align: right;"><a href="EC02.php"><img src="<?php  echo $hF; ?>@/02elore.jpg" alt="előre" /> </a></td>
</tr></tbody></table>

 <?php include_once($pF . "100abc.php");?>
</body>
</html>
