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
    .subjectID{
        display:flex;
        flex-direction:row;
        justify-content: center;
        width: calc(100% - 65%);
        align-items:center;
    }

    .subjectID > select{
        height: 30px;
        border-color: black;
        margin-left : calc(100%-62%);
    }
    .section{
        display:flex;
        flex-direction:row;
        width: calc(100% - 65%);
        align-items:center;
        justify-content: center;
    }
    .section>select{
        height: 30px;
        border-color: black;
    }
    .year{
        display:flex;
        flex-direction:row;
        width: calc(100% - 65%);
        align-items:center;
        justify-content: center;
    }
    
    .year>select{
        height: 30px;
        border-color: black;
    }
    button{
        background-color: #FFC452;
        width: calc(100% - 86%);
        margin-right: calc(100% - 98.5%);
        border-radius: 13px;
    }
    

    </style>
</head>
<body>

    <div id='header'>
        
        <img id='logo' src='Logo.png' style = 'height: 51.2px;'>
        <font>Teaching Schedule</font>
        <a href = 'login'>
        <img src = "Login Icon.png" 
        style ="position: absolute ;right:260px; width: 51px;" ></a>
        
        <font style = 'padding-left:590px;'> Officer </font>
    </div>
    
    <div id = 'content'>
        <h2> เพิ่มกระบวนวิชา</h2>

        <div class = 'subjectID'>
            <h3> รหัสวิชา   </h3><select> 
            <option>  subject1 </option>
            </select>
        </div>
    
        <div class = 'section'>
            <h3> จำนวนตอน </h3></h3><select> 
            <option>  subject1 </option>
            </select>
        </div>
        <div class = year>
            <h3> ปีการศึกษา </h3><select> 
            <option>  subject1 </option>
            </select>
            </div>
            <button> <h2>ยืนยัน</h2> </button> 
    </div>

    
    
</body>
</html>