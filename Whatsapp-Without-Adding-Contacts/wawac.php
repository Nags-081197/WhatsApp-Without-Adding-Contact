<?php 

$status = "";

if(isset($_POST['chat'])){

	$phone = $_POST['phone'];
	$text = $_POST['text1'];


      if(empty($phone)) {
	    $status = "Phone Number is Compulsory";  
      }
      else if(strlen($phone) >13||strlen($phone) <11 || !preg_match("/^[0-9]{10,13}+$/", $phone)) {
        $status = "Please enter a valid Phone Number with Country Code & without '+' Symbol";
        } 
      else{
        $url = "https://api.whatsapp.com/send?phone=".$phone."&text=".$text;
        // echo "<script>
				// 	setTimeout(\"location.href = '$url';'_blank'\",0);
        // 	</script>";
        
        echo "<script>
        window.open( '$url', '_blank');
        </script>";
      }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script type="text/javascript" src="bootstrap/jquery-3.3.1.slim.min.js"></script>
	<script type="text/javascript" src="bootstrap/bootstrap.min.js" ></script>
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css" >
	
	<script type="text/javascript" src="bootstrap/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="bootstrap/jquery.dataTables.min.js" ></script>
	<script type="text/javascript" src="bootstrap/dataTables.bootstrap4.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" >
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" >
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="./images/whatsapp-logo.png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <script type="text/javascript" defer src="./js/index.js"></script>
    
    
    <title>Whatsapp without Adding Conatcs</title>
</head>
<body>
    <div class="main-index">
    <nav class="navbar navbar-dark custom-bg">
        <span class="navbar-brand"><img src="./images/whatsapp-logo.png" class="navimg" > Without Adding Contact</span>
    </nav>
    <div class="main-body">
        <div class="main-body-inner">
            <div class="bg-modal-chat">
            <form class="form-phone" id="formphone" method="POST" enctype="multipart/form-data"> 
            <h6 class="h5 mb-4 font-weight-large text-center custom-font">Send WhatsApp Message</h6>

                <!-- <div class="form-group row text-center"> -->
                  <p><small class="col-sm-12 col-form-label text-danger custom-font2 align-center"><?php echo $status ?></small></p>
                <!-- </div> -->

                <div class="form-group">
                <label  for="phone">Phone</label>
                  <input type="text" id="phone" name="phone" class="form-control" pattern="[0-9]{11,13}" title="Enter Valid Phone Number with Country Code and Without '+' symbol "  required>
                  
                </div>
                <div class="form-group">
                <label  for="text1">Text (Optional)</label>
                  <textarea rows="3" type="text" id="text1" name="text1" class="form-control" title="Your Message"></textarea> 
              </div>

                <button class="btn btn-lg custom-button btn-block" type="submit" name="chat">CHAT</button>

              </form>
            </div>
        </div>
    </div>
    </div>
    <footer class="page-footer font-small custom-footer">
        <div class="footer-copyright text-center py-3">Designed & Developed By Nagashekar Ananda
        </div>
        <div class="row">
			    <div class="col-md-12 text-center" style ="padding-bottom:12px;" >
            <a href="https://www.hitwebcounter.com" target="_blank">
            <img src="https://hitwebcounter.com/counter/counter.php?page=7693075&style=0006&nbdigits=6&type=page&initCount=0" class = "justify-content-center" title="Total Website Hits" Alt="Web Hits"   border="0" /></a>  
        </div>
        </div>
      </footer>
</body>

</html>