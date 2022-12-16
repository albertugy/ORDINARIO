<?php
header("Content-Type: text/css; charset: UTF-8"); 
?>

*{
	margin: 0px;
	padding: 0px;
	font-family: century gothic;
	text-align: center;
}

form {
	padding: 40px 20px;
	background-color: #ededed;
	margin: calc(25% + 100px);
	margin-top: 40px;
	padding-top: 20px;
	margin-bottom: 20px;
}

h1 {
	text-align: center;
	padding: 12px;
	color: black;
}

input {
	width: calc(100% - 20px);
	padding: 9px;
	margin: auto;
	margin-top: 12px;
	font-size: 16px
}

input[type='submit']{
	background-color: #fc0317;
	color: #fff;
	width: calc(80% - 20px);
	margin: 0 10%;
	margin-top: 22px;
	border: none;
	border-radius: 20px;
    padding: 10px;
}

a{
	color: #fc0317;
	font-size:20px;
	
}
.content {
    height: 50vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.sau {
    padding: 50px 0;
    background: #e91e1e;
}
 .sauAZ {
        padding: 50px 0;
        background: #361ee9f6;
}

.box-container {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    text-align: centers;
}

.box-container .box {
    height: 170px;
    width: 270px;
    background: #171717;
    text-align: center;
    border-radius: 20px;
    box-shadow: 0 5px 5px rgba(0, 0, 0, .3);
    margin: 20px;
}

.box-container .box i {
    height: 50px;
    width: 50px;
    line-height: 50px;
    text-align: center;
    border-radius: 50%;
    color: #fff;
    background: #e91e1e;
    font-size: 25px;
    margin: 10px 0;
}

.box-container .box h3 {
    font-size: 20px;
    color: #e91e1e;
}

.box-container .box p {
    padding: 0 15px;
    font-size: 16px;
}

.price {
    background: url(img/trtubos.jpg);
    background-size: cover;
    background-attachment: fixed;
    text-align: center;
}

.price2 {
    background: url(img/trtarde.png);
    background-size: cover;
    background-attachment: fixed;
    text-align: center;
}

.about {
    background: #e91e1e;
    padding: 50px 0;
}
.aboutAZ {
    background: #361ee9f6;
    padding: 50px 0;
}

.box-container2{
    display: flex;
    justify-content: center;
    padding-top: 50px;
    flex-wrap: wrap;
}

.box-container2 .box {
    width: 250px;
    padding-bottom: 20px;
    text-align: center;
    box-shadow: 0 5px 5px rgba(0, 0, 0, .3);
    background: #171717;
    margin: 20px 20px;
}

.box-container2 .box img {
    height: 70px;
    width: 70px;
    object-fit: cover;
    border-radius: 50%;
    margin-top: -50px;
    border: 6px solid #471ee9bc;
}

.box-container2 .box h3 {
    font-size: 20px;
    color: #2b04eb;
    padding-top: 10px;
}

.box-container2 .box p {

    font-size: 18px;
    color: #fff;
    padding: 0;
}

.box-container2 .box .stars i {
    font-size: 15px;
    color: #471ee9bc;
}

img
{
    float:right;
    width: 200px;
    height: 200px;
    margin: 0;
    padding: 70px;}

.img2{
        float:left;
        width: 200px;
        height: 200px;
        margin: 0px;
        padding: 70px;
       }
.quienes{
    text-align: center;
    color: aliceblue;
}
.body1{
    background-color: #0d2033;
}