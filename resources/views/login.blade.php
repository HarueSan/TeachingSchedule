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
        width: calc(100% - 96%);
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
    .username{
        display:flex;
        flex-direction:row;
        align-items: center;
        justify-content: space-around;
        width: calc(100% - 62%);
    }
    .username > input {
        height: 30px;
        border-color: black;
    }
    .password{
        display:flex;
        flex-direction:row;
        width: calc(100% - 65%);
        align-items:center;
    }  
    .password > input {
        height: 30px;
        border-color: black;
        margin-left: calc(100% - 88.5%);
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
    <img id='logo' src='Logo.png'>

    <font>Teaching Schedule</font>
    </div>
    <div id='content'>
        <h2>CS CMU Teaching Schedule</h2>
        <div class='username'>
        <h3>Username</h3><input>
        <h3>@cmu.ac.th</h3>
    </div>
    <div class='password'>
        <h3>Password</h3>
        <input>
        </div>
        <button><h2>Sign in</h2></button>
    </div>
</body>
</html>