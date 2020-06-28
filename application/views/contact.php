<!DOCTYPE html>
<html>
    <head>
        <title >Enicoder || Home</title>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/style_user.css">
    </head>
    <body>
    <?php include("common/header.php"); ?>
        <div class="contact-head">
            <div class="container">
                <h1>get in <span style="color: #f8981d;">touch</span></h1>

            </div>    



        </div>   


        <div class="contact-main">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" placeholder="enter name">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="enter email">
                            <label for="msg">Message</label>
                            <textarea name="message"></textarea>
                            
                            <button>Submit</button>
                        </div>
                    </div>    
                </div>    

            </div>    
        </div>    
        <div class="contact-foot">
            <div class="container">
                <div class="row justify-content-center" >
                    <div class="col-md-6">
                        <h5>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut laoreet</h5>
                    </div>
                </div>    
            </div>    


        </div>    
        <?php include("common/footer.php"); ?>


        <div class="last">
          <div class="container text-center">
            <a href="http://www.eniacoder.com">Eniacoder.com</a>
          </div>  
        </div>  
        
    </body>    
</html>