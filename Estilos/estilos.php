<?php
header("Content-Type: text/css; charset: UTF-8"); 
?>

* {
    box-sizing: border-box;
}
body{
    margin:0;
}
img {
    display:block;
    width:100%;
}
.cabeza{
    text-align: center;
    padding: 20px;
    background-color: red;

}
.ayuda{
    text-align: center;
}
.llama_al{
    text-align: center;
}
.main-header{
    padding: 0 20px;
    background-color: red;
}
.main-header__title{
    text-align: center;
    font-size: 50px;
    background-color: red;
}
.main-nav{
    display:none;	
}
.main-header__container{
    display: flex;
    justify-content: space-around;
    align-items: center;
}
.main-header__btn{
    display: block;
    padding: 10px 25px;
    color: #454546;
    border: 1px solid #454546;
    text-decoration: none;
}

.container-slider{
    position: relative;
    overflow: hidden;
}

.slider{
    display: flex;
    width: 400%;
    height: 400px; 
    margin-left: -100%;
    position: relative;
}
.slider:before{
    content: "";
    position: absolute;
    z-index: 5;
    top: 0;
    left: 0;
    width: 100px;
    background: rgba(0, 0, 0, 0.5);
    height: 100%;
}
.slider__section{
    width: 100%;
    position: relative;
}
.slider__img{
    display: block;
    width: 100%;
    height:100%;
    object-fit:cover;
}
.slider__btn{
    position: absolute;
    width: 40px;
    height: 40px;
    background: rgba(255,255,255,0.7);
    top: 50%;
    transform:translateY(-50%);
    font-size: 30px;
    font-weight: bold;
    font-family: monospace;
    text-align: center;
    border-radius: 50%;
    cursor:pointer;
    z-index: 999;
}
.slider__btn:hover{
    background: #fff;
}
.slider__btn--left{
    left:10px;
}
.slider__btn--right{
    right: 10px;
}
.slider__content{
    position:absolute;
    top:40%;
    left:20%;
    color: white;
    transform: translateX(-50%, -50%);
    width: 60%;
    text-align: center;
    z-index: 999;
}
.slider__title{
    font: size 2.2em;
    margin: 0;
}
.slider__txt{
    margin: 5px 0;
}
.slider__link{
    display:block;
    border: 1px solid #FF4E00;
    color:white;
    padding:10px;
    text-align:center;
    text-decoration:none;
    width: 150px;
    margin: 20px auto;

}
.boton1{
    color: rgb(0, 0, 0);
    padding: 15px 25px;
    text-decoration: none;
}
.boton2{
    color: rgb(0, 0, 0);
    padding: 15px 25px;
    text-decoration: none;
}
.boton3{
    color: rgb(0, 0, 0);
    padding: 15px 25px;
    text-decoration: none;
}
.boton1:hover{
    background-color: rgb(205, 184, 157);
}
.boton2:hover{
    background-color:rgb(199, 198, 198);
}
.boton3:hover{
    background-color:rgb(204, 199, 138);
}
@import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
}
/*Cards*/
.container-card{
	width: 100%;
	display: flex;
	max-width: 1100px;
	margin: auto;
}
.title-cards{
	width: 100%;
	max-width: 1080px;
	margin: auto;
	padding: 20px;
	margin-top: 20px;
	text-align: center;
	color: #7a7a7a;
}
.card{
	width: 100%;
	margin: 20px;
	border-radius: 6px;
	overflow: hidden;
	background:#fff;
	box-shadow: 0px 1px 10px rgba(0,0,0,0.2);
	transition: all 400ms ease-out;
	cursor: default;
}
.card:hover{
	box-shadow: 5px 5px 20px rgba(0,0,0,0.4);
	transform: translateY(-3%);
}
.card img{
	object-fit: cover;
}
.card .contenido-card{
	padding: 15px;
	text-align: center;
}
.card .contenido-card h3{
	margin-bottom: 15px;
	color: #7a7a7a;
}
.card .contenido-card p{
	line-height: 1.8;
	color: #6a6a6a;
	font-size: 14px;
	margin-bottom: 5px;
}
.card .contenido-card a{
	display: inline-block;
	padding: 10px;
	margin-top: 10px;
	text-decoration: none;
	color: #2fb4cc;
	border: 1px solid #2fb4cc;
	border-radius: 4px;
	transition: all 400ms ease;
	margin-bottom: 5px;
}
.card .contenido-card a:hover{
	background: #2fb4cc;
	color: #fff;
}
@media only screen and (min-width:320px) and (max-width:768px){
	.container-card{
		flex-wrap: wrap;
	}
	.card{
		margin: 15px;
	}
}

.pie-pagina{
    width: 100%;
    background-color: #0a141d;
}
.pie-pagina .grupo-1{
    width: 100%;
    max-width: 1200px;
    margin: auto;
    display:grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap:50px;
    padding: 45px 0px;
}
.pie-pagina .grupo-1 .box figure{
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.pie-pagina .grupo-1 .box figure img{
    width: 250px;
}
.pie-pagina .grupo-1 .box h2{
    color: #fff;
    margin-bottom: 25px;
    font-size: 20px;
}
.pie-pagina .grupo-1 .box p{
    color: #efefef;
    margin-bottom: 10px;
}
.pie-pagina .grupo-1 .red-social a{
    display: inline-block;
    text-decoration: none;
    width: 45px;
    height: 45px;
    line-height: 45px;
    color: #fff;
    margin-right: 10px;
    background-color: #0d2033;
    text-align: center;
    transition: all 300ms ease;
}
.pie-pagina .grupo-1 .red-social a:hover{
    color: aqua;
}
.pie-pagina .grupo-2{
    background-color: #0a1a2a;
    padding: 15px 10px;
    text-align: center;
    color: #fff;
}
.pie-pagina .grupo-2 small{
    font-size: 15px;
}
@media screen and (max-width:800px){
    .pie-pagina .grupo-1{
        width: 90%;
        grid-template-columns: repeat(1, 1fr);
        grid-gap:30px;
        padding: 35px 0px;
    }
}