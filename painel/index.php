<?php
include __DIR__ . '/../funcoes/sessao.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    
    <title>Dashboard Sidebar Menu</title> 
</head>
<body>
    <?php include '../includes/sidebar.php'?>

    <div class="container">
   <ul class="timeline">
      <li>
         <!-- begin timeline-time -->
         <div class="timeline-time">
            <span class="date">today</span>
            <span class="time">04:20</span>
         </div>
         <!-- end timeline-time -->
         <!-- begin timeline-icon -->
         <div class="timeline-icon">
            <a href="javascript:;">&nbsp;</a>
         </div>
         <!-- end timeline-icon -->
         <!-- begin timeline-body -->
         <div class="timeline-body">
            <div class="timeline-header">
               <span class="userimage"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""></span>
               <span class="username"><a href="javascript:;">John Smith</a> <small></small></span>
               <span class="pull-right text-muted">18 Views</span>
            </div>
            <div class="timeline-content">
               <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc faucibus turpis quis tincidunt luctus.
                  Nam sagittis dui in nunc consequat, in imperdiet nunc sagittis.
               </p>
            </div>
            <div class="timeline-likes">
               <div class="stats-right">
                  <span class="stats-text">259 Shares</span>
                  <span class="stats-text">21 Comments</span>
               </div>
               <div class="stats">
                  <span class="fa-stack fa-fw stats-icon">
                  <i class="fa fa-circle fa-stack-2x text-danger"></i>
                  <i class="fa fa-heart fa-stack-1x fa-inverse t-plus-1"></i>
                  </span>
                  <span class="fa-stack fa-fw stats-icon">
                  <i class="fa fa-circle fa-stack-2x text-primary"></i>
                  <i class="fa fa-thumbs-up fa-stack-1x fa-inverse"></i>
                  </span>
                  <span class="stats-total">4.3k</span>
               </div>
            </div>
            <div class="timeline-footer">
               <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
               <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a> 
               <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
            </div>
            <div class="timeline-comment-box">
               <div class="user"><img src="https://bootdey.com/img/Content/avatar/avatar6.png"></div>
               <div class="input">
                  <form action="">
                     <div class="input-group">
                        <input type="text" class="form-control rounded-corner" placeholder="Write a comment...">
                        <span class="input-group-btn p-l-10">
                        <button class="btn btn-primary f-s-12 rounded-corner" type="button">Comment</button>
                        </span>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <!-- end timeline-body -->
      </li>
      
    
      <li>
         <!-- begin timeline-icon -->
         <div class="timeline-icon">
            <a href="javascript:;">&nbsp;</a>
         </div>
         <!-- end timeline-icon -->
         <!-- begin timeline-body -->
         <div class="timeline-body">
            Loading...
         </div>
         <!-- begin timeline-body -->
      </li>


   </ul>
</div>




    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>

</body>
</html>