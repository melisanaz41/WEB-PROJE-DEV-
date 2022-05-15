<html>
<head>




	<meta charset="utf-8">
	
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">
	
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Mbk</title>
  <nav class="navbar  sticky-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.html">Title</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="egitim.html">CV</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="nigde.html">My City</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="miras.html">Our History</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="iletisim.php">Contact</a>
        </li>
        
        
      </ul>
      
    </div>
  </nav>
  <script> 
 function validateForm() {
  var x = document.forms["form"]["ad"].value;
  if (x == "") {
    alert("Adınız kısmı dolu olmalı!.");
    return false;
  }
  var y = document.forms["form"]["soyad"].value;
  if (y == "") {
    alert("Soyadınız kısmı dolu olmalı!.");
    return false;
  }
  var z = document.forms["form"]["telno"].value;
  if (z == "") {
    alert("Telefon Numarası kısmı dolu olmalı!.");
    return false;
  }
   var a = document.forms["form"]["email"].value;
  if (a == "") {
    alert("E-mail kısmı dolu olmalı!.");
    return false;
  }
   var b = document.forms["form"]["istekler"].value;
  if (b == "") {
    alert("Dilek & Önerileriniz bölümü dolu olmalı.");
    return false;
  }
}
   
</script>
</head>
<body>
<div class="container">
    <br>
  <div class="row">
    <div class="col-9">
<form name="form" method="POST" onsubmit="return validateForm()" action="gondermeSayfasi.php">
  <div class="form-group">
  
     <div class="form-row">
    <div class="col">
        <label>Name</label>
      <input type="text" name="ad" class="form-control" placeholder="Name...">
    </div>
    <div class="col">
      <label>Surname</label>
      <input type="text" name="soyad" class="form-control" placeholder="Surname...">
    </div>
  </div>
    <label>Phone</label>
    <input name="telno"  type="number" class="form-control" id="telefon"  placeholder="Phone number..">
  </div>
  <label for="exampleInputEmail1">E-Mail</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-Mail adresinizi giriniz.">
    <small id="emailHelp" class="form-text text-muted">Doğru bilgi aktarabilmemiz için lütfen kendinize ait olan bir e-mail giriniz.</small>
     <div class="form-group">
    <label for="exampleFormControlTextarea1">Dilek & Önerileriniz</label>
    <textarea name="istekler" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
     <label for="exampleFormControlTextarea1">Sitemizi Derecelendirin desek?</label>
     <select name="derecelendirme">
  <option value="Harika">5(Excellent)</option>
  <option value="Çok İyi">4(Çok iyi)</option>
  <option value="Fena Değiş">3(Fena değil)</option>
  <option value="Gelişmesi gerek">2(Gelişmesi gerek)</option>
    <option value="Berbat">1(Bad.)</option>
      
</select>
<br>
 <label for="exampleFormControlTextarea1">Gender</label>
 <br>
 <input type="radio" name="cinsiyet" value="erkek"> Male<br>
  <input type="radio" name="cinsiyet" value="Kadın"> Female<br>
    <input type="radio" name="cinsiyet" value="Kadın"> Other<br>
  </div>
 
  
  <button name="gonder" class="btn btn-success" value="gonder" type="submit" class="btn btn-primary">Submit</button>
  <button type="reset" class="btn btn-danger" value="Temizle">Clear</button>
</form>
    </div>
    <div class="col-3">
     
    </div>
  </div>
  </div>
</body>
</html>