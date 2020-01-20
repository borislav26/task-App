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
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
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
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form method="POST" action="/edit/<?php echo $articles->id;?>"><?php csrf_field(); ?>
                        
                        <fieldset>
                            <legend class="display-3">Update your task</legend>
                            <?php  if(count($errors)>0){ ?>
                            <?php foreach ($errors->all() as $error){ ?>
                            <div class="alert alert-danger">
                                <?php echo $error; ?>
                            </div>
                            
                            <?php } ?>
                            <?php } ?>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" value="<?php echo $articles->title; ?>" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter the title">
                                
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea   name="description" class="form-control" id="description" placeholder="Description"><?php echo $articles->description; ?></textarea>
                            </div>




                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="/" class="btn btn-primary">Back</a>





                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <footer id="footer" class="text text-center">
            <p>Copyright &copy;2020</p>
            <p>This is Task App maden by Boirslav,Milica and Danilo </p>

        </footer>
    </body>
</html>


