<?php 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FORM</title>
        <style>
            *{
    box-sizing: border-box;
}
body{
    margin: 0;
    background-color: orange;
}
.div00{
    display: flex;
}
.div1{
    width: 30%;
    height: 800px;
    align-items:center;
    padding: 10px;
    background-color:aqua;
    margin-top: 30px;
    margin-left: 800px;
    border-radius: 10px;
    box-shadow: 4px 4px 3px black;
    text-align:center;
}
h1{
    text-align:center;
}
.div2{
    width:100%;
    background-color: aqua;
    text-align:center;
}
.div2:hover{
    background-color: indigo;
    border-radius: 5px;
}
input[type="text"],
input[type="password"],
input[type="email"]{
    width: 70%;
    height: 40px;
    padding: 5px;
    margin: 5px 0 10px 0;
    background-color: rgb(33, 107, 95);
    box-shadow: 1px 3px 2px rgb(51, 193, 26);
    border-radius: 5px;
    margin-top: 10px;
    
}
input[type="submit"]{
    
    width: 20%;
    height: 40px;
    text-align: center;
    padding: 5px;
    box-shadow: 1px 4px 2px black;
    border-radius: 7px;
    background-color: green;
    color:white;
    margin-top: 70px;
    cursor:pointer;
}
select{
    width: 50%;
    height: 40px;
    padding: 5px;
    margin: 5px 0 10px 0;
    margin-left: 70px;
    background-color: rgb(33, 107, 95);
    box-shadow: 1px 3px 2px rgb(51, 193, 26);
    border-radius: 5px;
    margin-top: 10px;
}
table{
    margin-left: 700px;
    float: center;
    padding: 20px 30px;
    text-align:center;
}
td, th{
    align-items: center;
    padding: 30px;
}
        </style>
    </head>