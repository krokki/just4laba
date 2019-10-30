<!DOCTYPE html>
<html>
<head>
	<title>КиноЛента</title>

<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="css_main.css">

</head>
<body>


<div class="container-fluid" id="Header">
   <div class="row" id="find_str">
        <div class="col logo_div "> <a href="index.php" class="logo_text"> <b>КиноЛента</b> </a> </div>
   </div>

</div>

<?php
require_once('db_connect.php');
require_once ('handler-request.php');
require_once ('handler-output.php');
?>

<div class="cont_up">

        <div class="container col-7" id="cont">

                   <div class="row justify-content-center align-items-center" style="width: inherit; margin: 0">
                              <div class="col-6">
                                   <form class="valid-form" action="index.php" method="post">

                                       <input type="text" id="film" name="name" class="form-control valid-input" placeholder="NameFilm">
                                       <input type="text" id="year" name="year" class="form-control valid-input num-input" placeholder="Year">
                                       <input type="text" id="genre" name="genre" class="form-control valid-input" placeholder="Genre">
                                       <input type="text" id="age" name="age" class="form-control valid-input" placeholder="Age">
                                       <input type="text" id="country" name="country" class="form-control valid-input" placeholder="Country">
                                       <input type="submit" id="btn-submit" class="valid-btn btn" name="ready" value="Add film">
                                   </form>
                               </div>
                   </div>



                   <div class="row justify-content-center" style="width: inherit; margin-top: 5%; margin-left: 0">
                       <div class="col topic-table" style="border-left: 0.5px solid #2d3436" >Название</div>
                       <div class="col topic-table">Год</div>
                       <div class="col topic-table">Жанр</div>
                       <div class="col topic-table">Возраст</div>
                       <div class="col topic-table">Страна</div>

                   </div>


            <?php
                foreach($data as $row)
                {
                    ?>

                     <div class="row justify-content-center" id="table">

                           <div class="col item-table font-style">
                             <div class="row align-items-center justify-content-center family">
                                 <div class="col"><?php echo $row['namefilm']?></div>
                             </div>
                           </div>
                             <div class="col item-table font-style" style="height: inherit;">
                                 <div class="row align-items-center justify-content-center family" style="height: inherit;">
                                     <div class="col"><?php echo $row['year']?></div>
                                 </div>
                             </div>
                             <div class="col item-table font-style" style="height: inherit;">
                                 <div class="row align-items-center justify-content-center family">
                                     <div class="col"><?php echo $row['genre']?></div>
                                 </div>
                             </div>
                             <div class="col item-table font-style" style="height: inherit;">
                                 <div class="row align-items-center justify-content-center family">
                                     <div class="col"><?php echo $row['age']?></div>
                                 </div>
                             </div>
                             <div class="col item-table font-style" style="height: inherit;">
                                 <div class="row align-items-center justify-content-center family">
                                     <div class="col"><?php echo $row['country']?></div>
                                 </div>
                             </div>

                   </div>
          <?php } ?>

        </div>

</div>

<script type="text/javascript" src="validate.js" ></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>