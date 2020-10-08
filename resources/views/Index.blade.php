<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS CMU Teaching Schedule</title>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu" />
    <style>
    html,body {
        margin:0;
        padding:0;
    }
    font,h1,h2,h3 {
        font-family: Ubuntu;
        font-style:normal;
        font-variant: normal; 
    }
    #logo {
        
    }
    #header{
        display: flex;
        flex-direction: row;
        background-color: black;
    }
    #header > font {
        color: white;
        margin: 0.4% 0%;
        font-size:x-large;
    }
    #content{
        display:flex;
        flex-direction: column;
        align-items: center;
        margin-top: calc(100% - 97%);
    }
    .subject_search{
        display:flex;
        flex-direction:row;
        align-items: center;
        justify-content: space-around;
        width: calc(100% - 60%);

    }
    .subject_search>input{
        width: 100vw;
        height: 30px;
        border-color: black;
    }

    .button{
        background-color: #FFC452;
        width: calc(100% - 86%);
        
        margin-right: calc(80% - 70%);
        border-radius: 13px;
    }
    .button_2{
        background-color: #FFC452;
        width: calc(45%);
        /*margin-right: calc(80% - 70%);*/
        border-radius: 13px;
    }
    .button_3{
        background-color: #FFC452;
        width: 100%;
        border-radius: 13px;
    }
    .button_4{
        background-color: #FFC452;
        width: 100%;
        border-radius: 13px;
    }

    </style>
</head>
<body>
    <div id='header'>
        <a href = 'main'>
            <img id='logo' src='Logo.png' style = "height: 51.2px;">
        </a>    
            <font>Teaching Schedule</font>
        
        <a href = 'login'>
        <img src = "Login Icon.png" 
        style ="position: absolute ;right:260px; width: 51px;" ></a>
    </div>
    <div id='content'>
        <h2> จัดการกระบวนวิชา</h2>
        <div class = subject_search>
            <input> <button class = 'button'><h2>ค้นหา</h2></button>  
            <button class = 'button_2'><h2> เพิ่ม </h2></button>
        </div>
    </div>

    <table border = '2' bordercorlor = 'black' width = '60%' hight = '50%' align = 'center' >
    
    <tr>  <th> รหัสวิชา </th> <th> ชื่อวิชา </th> </tr>

    <tr>   <td> 0001 </td>  <td>  SE  </td>  
    <td> <button class = 'button_3'> แก้ไข </button> </td> 
    <td> <button class = 'button_4'>  ลบ </button> </td> 
    </tr>

    <tr>    <td> 0002 </td> <td>  SA  </td> 
    <td> <button class = 'button_3'> แก้ไข </button> </td> 
    <td> <button class = 'button_4'>  ลบ </button> </td> 
    </tr>
    
    <table>
    

</body>
</html>