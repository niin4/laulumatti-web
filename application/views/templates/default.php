<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <title>Laulumatti web</title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
        
     <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    
    <!-- NORMALIZE AND OWN CSS,     OWN JS -->
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/normalize.min.css">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/normalize.css">    
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/main.css">

    <script type = 'text/javascript' src = "<?php echo base_url();    ?>js/vendor/modernizr-2.8.3.min.js"></script>
    
    <!---- FONT AWESOME   -->
    <script src="https://use.fontawesome.com/0b3993a8e0.js"></script>
    

</head>
<body>
        
   <div id="wrapper">
      <div class="container">
            
           <!-- NAVIGATION -->
           <div class="row" id="navigation">
            <div class="col">      
                <a href="<?php echo base_url(); ?>"><h4>Laulumatti<sup>web</sup></h4></a>
                
                <!-- SEARCH   -->
                <?php echo form_open('song/search', "class='navbar-form form-inline navbar-right'"); ?>
                    <?php echo form_input('search',set_value('search'), "class='form-control input-field'","id='search'"); ?>
                    <?php echo form_submit('action','Haku',"class='btn btn-submit'"); ?>
                <?php echo form_close(); ?>
               </div>
          </div>
             
         <?php echo $body; ?>
             
        
         
    <div class="row" id="footer">
            <div class="col">
                Insinööri laulaa mieluummin kuin hyvin.
            </div>
        </div>
</div>
</div>


    <script type = 'text/javascript' src = "<?php echo base_url();    ?>js/plugins.js"></script>
    <script type = 'text/javascript' src = "<?php echo base_url();    ?>js/main.js"></script>
     
</body>
</html>