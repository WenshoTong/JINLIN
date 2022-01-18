<!DOCTYPE html><html>
    <head>
            <title>网站设置成功 - <?php $f_chr = file_get_contents("data/title.jin"); echo $f_chr; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<link rel="Shortcut Icon" href="<?php $f_chr = file_get_contents("data/icon.jin"); echo $f_chr; ?>" type="image/x-icon" />

    </head>
    <body>
        网站标题已被设置为：
<?php
   $data = $_POST["title"];

   $numbytes = file_put_contents('data/title.jin', $data); //如果文件不存在创建文件,并写入内容
   if($numbytes){

       echo file_get_contents('data/title.jin');

   }else{
       echo '写入失败或者没有权限,注意检查';
   }
?><br>
节日名称已被设置为： 
<?php
   $data = $_POST["festival"];

   $numbytes = file_put_contents('data/festival.jin', $data); //如果文件不存在创建文件,并写入内容

   if($numbytes){

       

       echo file_get_contents('data/festival.jin');

   }else{
       echo '写入失败或者没有权限,注意检查';
   }
?><br>

时间已被设置为：
<?php
   $data = $_POST["date"];

   $numbytes = file_put_contents('data/date.jin', $data); //如果文件不存在创建文件,并写入内容

   if($numbytes){

       

       echo file_get_contents('data/date.jin');

   }else{
       echo '写入失败或者没有权限,注意检查';
   }
?><br>
宣传语一： <?php
   $data = $_POST["said-1"];

   $numbytes = file_put_contents('data/said-1.jin', $data); //如果文件不存在创建文件,并写入内容

   if($numbytes){

       

       echo file_get_contents('data/said-1.jin');

   }else{
       echo '写入失败或者没有权限,注意检查';
   }
?><br>
宣传语二：
<?php
   $data = $_POST["said-2"];

   $numbytes = file_put_contents('data/said-2.jin', $data); //如果文件不存在创建文件,并写入内容

   if($numbytes){

       echo file_get_contents('data/said-2.jin');

   }else{
       echo '写入失败或者没有权限,注意检查';
   }
?><br>
背景图：
<?php
   $data = $_POST["bg-url"];

   $numbytes = file_put_contents('data/bg-url.jin', $data); //如果文件不存在创建文件,并写入内容

   if($numbytes){

       echo file_get_contents('data/bg-url.jin');

   }else{
       echo '写入失败或者没有权限,注意检查';
   }
?><br>
网站logo：
<?php
   $data = $_POST["logo"];

   $numbytes = file_put_contents('data/icon.jin', $data); //如果文件不存在创建文件,并写入内容

   if($numbytes){

       echo file_get_contents('data/icon.jin');

   }else{
       echo '写入失败或者没有权限,注意检查';
   }
?><br>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <style>
        

        .button {
            height: 40px;
            width: 300px;
            border: 1px solid #e0e0e0;
            outline: none;
            cursor: pointer;
            border-radius: 4px;
            font-size: 14px;
        }

        .button:hover {
            border: 1px solid dodgerblue;
            color: dodgerblue;
            font-size: 15px;
        }

 

    </style>
   <a onclick='window.open("/index.php","_blank"' href="/index.php"> <input class="button" type="submit" value="回到首页" /></a>

<br>

           <input class="button" type="reset" value="重新设置" onclick="window.history.go(-1);">

    </body>
</html>
