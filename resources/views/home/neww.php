<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .p{

        }
        .design{
            color: #0c5460;
        }

        .div_design
        width: 200px;
        height: 15px;
        padding-top: 20px;
        padding-bottom: 20px;

        }


        .devdesign{
            width: 210px;
            height: 90px;
            padding-top: 20px;
            padding-bottom: 20px;
        }

    </style>
</head>
<body>

<div class="design">
    <p>This is our first</p>
</div>

<form method="post" action="http://localhost:8080" enctype="multipart/form-data">
    <div class="div_design">
        <label>Project Title</label>
        <input class="text_color" type="text" name="title" placeholder="Write a text" required="">
    </div>



    <div class="devdesign">
        <label>Project Descripti<p>This is our first</p>on</label>
        <textarea class="text1_color" type="text" name="description"  placeholder="Write the description" required=""></textarea>
    </div>


    <div class="div_design">
        <label>Required Tools</label>
        <input class="text_color" type="text" name="tools" placeholder="Write a description" required="">
    </div>



    <div class="div_design">
        <label>Choose Image</label>
        <input type="file" name="image" >
    </div>




    <div class="div_design">
        <input type="submit" value="Post" class="btn btn-primary">
    </div>
</form>

</body>
</html>
