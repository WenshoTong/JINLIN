<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<link rel="Shortcut Icon" href="<?php $f_chr = file_get_contents("data/icon.jin"); echo $f_chr; ?>" type="image/x-icon" />

    <title>网站设置 - <?php $f_chr = file_get_contents("data/title.jin"); echo $f_chr; ?></title>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <style>
        .title-field {
            border: 1px solid #e0e0e0;
            display: inline-block;
            width: 400px;
            height: 44px;
            display: flex;
            align-items: center;
            border-radius: 4px;
        }
        .title-field label {
            margin:  0 20px;
            font-size: 16px;
        }

        .title-field input {
            outline: none;
            border: none;
            flex: 1;
            font-size: 16px;
        }

        .radio-field {


        }

        .radio-field input[type=radio]{
            display: none;
        }

        .radio-field input:checked + label{
            border: 1px solid dodgerblue;
            color: dodgerblue;
        }

        .radio-field label {
            border: 1px solid #ddd;
            display: inline-block;
            padding: 3px 20px;
            border-radius: 4px;
        }



        .checkbox-field input[type=checkbox] {
            display: none;
        }

        .checkbox-field label {
            border: 1px solid #ddd;
            display: inline-block;
            padding: 3px 20px;
            border-radius: 4px;
        }

        .checkbox-field input:checked + label {
            border: 1px solid dodgerblue;
            color: dodgerblue;
        }

        .checkbox-field input:checked + label:after {
            content: '1';
            display: inline-block;
            color: dodgerblue;
            padding-left: 5px;
        }

        .common-button {
            height: 40px;
            width: 80px;
            border: 1px solid #e0e0e0;
            outline: none;
            cursor: pointer;
            border-radius: 4px;
            font-size: 14px;
        }

        .common-button:hover {
            border: 1px solid dodgerblue;
            color: dodgerblue;
            font-size: 15px;
        }

        .submit-button {
            height: 40px;
            width: 80px;
            border: 1px solid #e0e0e0;
            outline: none;
            cursor: pointer;
            border-radius: 4px;
            font-size: 14px;
        }

        .submit-button:hover {
            border: 1px solid dodgerblue;
            color: dodgerblue;
            font-size: 15px;
        }

        .reset-button {
            height: 40px;
            width: 80px;
            border: 1px solid #e0e0e0;
            outline: none;
            cursor: pointer;
            border-radius: 4px;
            font-size: 14px;
        }

        .reset-button:hover {
            border: 1px solid dodgerblue;
            color: dodgerblue;
            font-size: 15px;
        }


        .fille-field input[type=file]{

            display: none;
        }

        .fille-field label {
            display: block;
            width: 80px;
            height: 80px;
            border: 1px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 4px;
        }

        .fille-field label:hover {
            border: 1px solid dodgerblue;
            color: dodgerblue;
            font-size: 15px;
        }


        .textarea-field textarea {

            outline: none;
            border: 1px solid #e0e0e0;
            width: 300px;
            height: 140px;
            padding: 10px;
            font-size: 14px;
        }

        .select-field select {

            background:#fafdfe;
            height:28px;
            width:180px;
            line-height:28px;
            border:1px solid #9bc0dd;
            -moz-border-radius:2px;
            -webkit-border-radius:2px;
            border-radius:2px;
        }
        .select-field option {
            width: 300px;
            height: 36px;
            font-size: 16px;width: 300px;
            height: 36px;
            font-size: 16px;
        }
        input::-webkit-input-placeholder{
    color: #000;
    font-size:20px;
}
input::-moz-placeholder{   /* Mozilla Firefox 19+ */
    color: #000;
    font-size:20px;
}
input:-moz-placeholder{    /* Mozilla Firefox 4 to 18 */
    color: #000;
    font-size:20px;
}
input:-ms-input-placeholder{  /* Internet Explorer 10-11 */
    color: #000;
    font-size:20px;
}

    </style>
</head>
<body>

<div id="app" >
   <form method="post" action="ok.php" enctype="multipart/form-data">
       <div >
           <p>网站标题</p>
           <div class="title-field">
               <label for="title">网站标题:</label> <input id="title" type="text" name="title" value="<?php $f_chr = file_get_contents("data/title.jin"); echo $f_chr; ?>"/>
           </div>

       </div>
       <div>
           <p>节日/日期名称（例如：新年、恋爱纪念日等）</p>
           <div class="title-field">
               <label for="festival">名称:</label> <input  id="festival" type="festival" name="festival" value="<?php $f_chr = file_get_contents("data/festival.jin"); echo $f_chr; ?>"/>
           </div>

       </div>
       <div class="form-group">
				<label for="datetime-local">日期时间：</label>
				<input style="width:200px;height:40px;border: 1px solid #e0e0e0;
            display: inline-block;

            display: flex;
            align-items: center;
            border-radius: 4px;            margin:  0 20px;
            font-size: 16px;"class="select-field" type="datetime-local" name="date" id="datetime-local" value="<?php $f_chr = file_get_contents("data/date.jin"); echo $f_chr; ?>" />
			</div>

        <div>
           <p>倒计时标语</p>
           <div class="textarea-field">
               <textarea placeholder="提交标语....." name="said-1" value=""></textarea>
           </div>
       </div>
       <div>
           <p>你想说的话</p>
           <div class="textarea-field">
               <textarea placeholder="提交留言....." name="said-2" value=""></textarea>
           </div>
       </div>

       <div>
           <p>网站背景图：</p>
           <div class="title-field">
               <label for="bg-url">URL:</label> <input  id="bg-url" type="bg-url" name="bg-url" value="images/banner.jpg"/>
           </div>

       </div>
       
        <div>
           <p>网站logo：</p>
           <div class="title-field">
               <label for="logo">URL:</label> <input  id="logo" type="logo" name="logo" value="images/logo.png"/>
           </div>

       </div>

           <input class="submit-button" type="submit" value="确认" />



           <input class="reset-button" type="reset" value="重置">


<!--       <div>
           <p>文件作用域(选择文件)</p>
           <div class="fille-field">
               <input id="file"  type="file" name="img"><label for="file">新增文件</label>
           </div>

       </div>-->

       <div style="margin-bottom: 50px">
       </div>
   </form>
</div>
</body>
