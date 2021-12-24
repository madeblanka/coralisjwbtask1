<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>body{padding-top:30px;}

.glyphicon {  margin-bottom: 10px;margin-right: 10px;}

small {
display: block;
line-height: 1.428571429;
color: #999;
}</style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="<?php echo base_url('profile/'.$this->session->userdata('profile'))?>" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>
                            <b><?= $this->session->userdata('nama')?></b></h4>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i><?= $this->session->userdata('email')?>
                            <br />
                            <i class="glyphicon glyphicon-lock"></i><?= $this->session->userdata('password')?>
                            <br />
                        <!-- Split button -->
                        <div class="btn-group">
                        <a href="<?= site_url('user/logout')?>"class="btn btn-primary">Logout</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>