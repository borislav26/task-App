<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Laravel-Task App</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="/css/style.css"
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700&display=swap" rel="stylesheet">
        <style>
                  body{
                font-family: 'Josefin Sans',sans-serif;
                    background-image: url('https://docs.microsoft.com/learn/achievements/run-web-app-background-task-with-webjobs-social.png');
                background-repeat: no-repeat;
                background-attachment: fixed; 
                background-size: 100% 100%;
                color: white;
                
            }
          
            #footer{

                margin-top: 30px;
                padding: 10px;
                color: white;
                background: #0c84e4;
                position: fixed;
                bottom: 0;
                width: 100%;
            }

            #footer p{
                margin-bottom: 0px;
            }
        </style>
    </head>
    <body>
       
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary" >
            <a class="navbar-brand" href="/">Laravel Task App</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/create">Create</a>
                    </li>

                </ul>

            </div>
        </nav>
    <legend class="text text-center display-1">The best Task App</legend>
        <div class="row">
            <div class="col-md-12 col-lg-12 text-center">
                <?php if (session('info')) { ?>
                    <div class="alert alert-success">
                        <?php echo session('info'); ?>
                    </div>

                <?php } ?>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-primary">

                            <?php if (count($articles) > 0) { ?>
                                <?php foreach ($articles->all() as $article) { ?>



                            <td><b><?php echo $article->id; ?></b></td>
                                    <td><?php echo $article->title; ?></td>
                                    <td><?php echo $article->description; ?></td>
                                    <td>
                                        <a href="/read/<?php echo $article->id; ?>" class="badge badge-success text-decoration-none">Read </a> 
                                        <a href="/update/<?php echo $article->id;?>" class="badge badge-primary text-decoration-none">Update </a>
                                        <a href="/delete/<?php echo $article->id; ?>" class="badge badge-danger text-decoration-none">Delete </a>
                                    </td>
                              </tr>
                            <?php } ?>
                        <?php } ?>

                                      


                    </tbody>
                </table> 
            </div>
        </div>
        <footer id="footer" class="text text-center">
            <p>Copyright &copy;2020</p>
            <p>This is Task App maden by Boirslav,Milica and Danilo </p>
        </footer>
    
    </body>
</html>
