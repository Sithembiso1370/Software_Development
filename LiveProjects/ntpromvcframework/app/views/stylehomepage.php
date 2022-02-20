<?php



echo 
"
@import url('https://fonts.googleapis.com/css2?family=Diplomata&family=Modak&family=Poller+One&family=Saira+Stencil+One&display=swap');

/* Mains First */


/* font-family: 'Diplomata', cursive;
font-family: 'Modak', cursive;
font-family: 'Poller One', cursive;
font-family: 'Saira Stencil One', cursive; */


* {
    padding: 0;
    margin: 0;
    transition: all 0,25s ease-in-out;
}
a {
    text-decoration: none;
}
a:hover {
    text-decoration: underline;
    text-decoration: blue;
}

.sidebar nav {
    height: 100%;
    width: 100%;
    display: grid;
    padding: 1px;
    grid-template-columns: repeat(1fr,2);
}

.sidebar nav a {
    display: block;
    color: #ccd6f4;
    text-align: center;
    font-size: 1.5rem;
    font-weight: bold;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    border-top: 1px solid rgba(225, 225, 225, 0.05);
    transition: color 2s;
    text-decoration: none;
    border: 0.5px solid #ccd6f4;
    transition: all 0,25s ease-in-out;
}

.sidebar nav a:hover {
    border: 1px solid red;
    background-color: red;
    color: #fff;
    opacity: 0.75;
    box-shadow: 6px 6px 17px #9e0000,
    6px 6px 17px#ff0000; 
    text-decoration: underline;     
    animation-name: example;
    animation-duration: 2.5s;
}



/* on element animated */
/*   animation-name: example;
  animation-duration: 4s; */

/* animation */
@keyframes example {
    0%   {
        border-radius: 5% 5% 12.5% 12.5%;
        font-size: 1.1rem;
    }
    25%  {
        border-radius: 5% 5% 25% 25%;
        font-size: 1.11rem;
    }
    50%  {
        border-radius: 5% 5% 37.5% 37.5%;
        font-size: 1.12rem;
    }
    100% {
        border-radius: 5% 5% 50% 50%;
        font-size: 1.13rem;
    }
  }


i:hover {
    cursor:pointer;
}

.sidebar nav a span {
    transition: display 1s;
}



.sidebar nav a i {
    width: 30px;
    transition: all 0.5s;
}

/* #check:checked ~ .sidebar {
    left: -180px;
} */

#check:checked ~ .sidebar nav span {
    display: none;
}

#check:checked ~ .sidebar nav a {
    margin-left: 172px;
    /*font-size: 23px;*/
}

#check:checked ~ .sidebar center > h4 {
    visibility: hidden;
}

#check:checked ~ .content {
    margin-left: 70px;
}

.sidebar {
    justify-content: center;
    align-items: center;
    position: fixed;
    top: 10%;
    left: -11.5%;
    width: 12%;
    height: 20%;
    border-radius: 3px solid #7e0411;
    background-color: #2f323a;
    transition: left 0.5s;
    box-shadow: 3px 0 10px #2f323a;
    z-index: 1;
    opacity: 0.7;
    transition: all 2.5s;
}

.sidebar.active {
    left: 1%;
    transition: all 1s;
}
.menuIcon{
    position: fixed;
    top: 0%;
    left: 2%;
    width: 2.5%;
    height: 3.5%;
    display: initial;
    z-index: 1000;
    background: url('img/meu_icon_open.png');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    cursor: pointer;
    border-bottom-left-radius: 30%;
    border-bottom-right-radius: 30%;
    background-color: #a10017;
    color: #a10017;
    opacity: 0.3;
    transition: all 0.5s;
    z-index: 2;
}

.menuIcon.active {
    background: url('img/MENUCLOSEDBLACK.png');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    cursor: pointer;
    background-color: red;
    color: red;
    opacity: .4;
    border-bottom-left-radius: 5%;
    border-bottom-right-radius: 5%;
    transition: all 0,5s ease-in;
}

body {
    margin: 0px;
    padding: 0px;
    display: grid;
    height: 1080px;
    width: 1700px ;
    grid-template-columns: 64.5% 34.5%;
    background: #ccd6f4;
    gap: 1%;
}
/* 
height: 1080px;
width: 1920px ; */
/* LEFFT */
.main {
    font-family: 'Poller One', cursive;
    position: relative;
    margin: 0px;
    padding: 0px;
    height: 1080px;
    width: 100%;
    display: grid;
    grid-template-rows: 10% 45% 45%;
    -webkit-border-radius: 4px; 
    border-radius: 4px; 
    background: #ccd6f4;
    -webkit-box-shadow: 5px 5px 27px #666666,
    -5px -5px 27px #ffffff;
    box-shadow: 5px 5px 27px #666666,
    -5px -5px 27px #ffffff;
}

.titletext {
    position: relative;
    -webkit-border-radius: 8px; 
    border-radius: 8px; 
    background: #a10017;
    -webkit-box-shadow: 6px 6px 11px #54000c,
    -6px -6px 11px #ee0022;
    box-shadow: 6px 6px 11px #54000c,
    -6px -6px 11px #ee0022;
    color: white;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.titletext:hover {
    background: #c7051f;
    transition: all 0,5s ease-in-out;
}


.main>.top_section {
    height: 100%;
    font-family: 'Poller One', cursive;
}

.containers {
    margin: 0px;
    padding: 0px;
    width: 100%;
    height: 100%;
    position: relative;
    display: grid;
    grid-template-rows: 70px 380px ;
    -webkit-border-radius: 2px; 
    border-radius: 2px; 
    background: #f3f3f4;
    -webkit-box-shadow: 5px 5px 3px #8b8b8b,
    -5px -5px 3px #ffffff;
    box-shadow: 5px 5px 3px #8b8b8b,
    -5px -5px 3px #ffffff;
}




.headerbox {
    height: 100%;
    display: grid;
    grid-template-columns: 70% 30%;
}

.daterange {
    display: grid;
    grid-template-columns: 49% 49%;
    gap: 1%;
}

input:hover {
    border: 2px solid #79c43e;
    transition: all 0,5s ease-out;
}

.tocont {
    width:100%;
}

.tocont>input {
    width:95%;
    border-radius: 8px;
    border: 1px solid #a10017;
    color: #7e0411;
    font-size: 1.2rem;
}

.tocont>input:hover {
    width:100%;
    border-radius: 4px;
    border: 1px solid #66b111;
    transition: all 0,5s ease-in;
    color: #000;
}

.fromcont {
    width:100%;
}

.fromcont>input {
    width:95%;
    border-radius: 8px;
    border: 1px solid #a10017;
    color: #7e0411;
    font-size: 1.2rem;
}

.fromcont>input:hover {
    width:100%;
    border-radius: 4px;
    border: 1px solid #66b111;
    color:#000;
    transition: all 0,5s ease-in-out;
}

.Countmains {
    background-color: #e0e0e0;
    height: 370px;
    position: relative;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr ;
    -webkit-border-radius: 4px; 
    border-radius: 4px; 
    background: #D1D8EC;
    -webkit-box-shadow: 5px 5px 27px #54565e,
    -5px -5px 27px #ffffff;
    box-shadow: 5px 5px 27px #54565e,
    -5px -5px 27px #ffffff;
    overflow: scroll;

}





.boxz {
    height: 100%;
    display: grid;
    grid-template-rows: 70px 250px 60px ;
    gap: 5px;
    -webkit-border-radius: 2px; 
    border-radius: 2px; 
    background: #f3f3f4;
    -webkit-box-shadow: 5px 5px 3px #8b8b8b,
    -5px -5px 3px #ffffff;
    box-shadow: 5px 5px 3px #8b8b8b,
    -5px -5px 3px #ffffff;
}

/* .even {
    -webkit-border-radius: 12px; 
    border-radius: 12px; 
    background: #aac8f2;
    -webkit-box-shadow: 5px 5px 46px #4b586a,
    -5px -5px 46px #ffffff;
    box-shadow: 5px 5px 46px #4b586a,
    -5px -5px 46px #ffffff;
} */


/* .boxz--pressed {
    box-shadow: inset 6px 6px 10px 0 rgba(0, 0, 0, 0.2),
      inset -6px -6px 10px 0 rgba(255, 255, 255, 0.5);
  } */

.headerbox>h2 {
    padding-right: 100px;
    text-align: right;
    font-size: 1.5rem;
    color: #7e0411;
}

.headerbox>h2:hover{
    text-decoration: underline;
}

.lable {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    -webkit-border-radius: 15px; 
    border-radius: 15px; 
    background: #ccd6f4;
    color: #7e0411;
    -webkit-box-shadow: 5px 5px 44px #525662,
    -5px -5px 44px #ffffff;
    box-shadow: 5px 5px 44px #525662,
    -5px -5px 44px #ffffff;
    font-size: 20px;
}


.lable:hover{
    text-decoration: underline;
}

.no_of_items {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    left: 50%;
    background: #f4f4f8;
    -webkit-box-shadow: 5px 5px 14px #626263,
    -5px -5px 14px #ffffff;
    box-shadow: 5px 5px 14px #626263,
    -5px -5px 14px #ffffff;
    font-family: 'Saira Stencil One', cursive;
    font-size: 80px;
    word-wrap: normal;
    overflow: hidden;
    transition: all 0,5s ease-in-out;
}

.no_of_items:hover {
    border: 2px solid #79c43e;
    color: #7e0411;
    text-decoration: underline;
    cursor: pointer;
}

.months_sect {
    width: 100%;
    display: grid;
    grid-template-columns: 50% 50%;
    -webkit-border-radius: 4px; 
    border-radius: 4px; 
    background: #ffffff;
    -webkit-box-shadow: 5px 5px 27px #666666,
    -5px -5px 27px #ffffff;
    box-shadow: 5px 5px 27px #666666,
    -5px -5px 27px #ffffff;
}


button {
    border: 0px;
}

button:hover {
    cursor: pointer;
}

.this_m {
    background: #cf1c2a;
    -webkit-box-shadow:  2px 2px 4px  #530b11,
    2px 2px 4px  #ff2d43;
    box-shadow: 2px 2px 4px #530b11,
    2px 2px 4px  #ff2d43;
}

.this_m:hover {
    background: #cf1c2a;
    -webkit-box-shadow:  3px 3px 6px  #530b11,
    3px 3px 6px #ff2d43;
    box-shadow: 3px 3px 6px #530b11,
    3px 3px 6px  #ff2d43;
}

.last_m {
    background: #66b111;
    -webkit-box-shadow: 2px 2px 4px #294707,
    2px 2px 4px #a3ff1b;
    box-shadow: 2px 2px 4px #294707,
    2px 2px 4px #a3ff1b;
}

.last_m:hover {
    background: #66b111;
    -webkit-box-shadow: 3px 3px 6px #294707,
    3px 3px 6px #a3ff1b;
    box-shadow: 3px 3px 6px #294707,
    3px 3px 6px #a3ff1b;
}




/* -------------------------- */


.projectsmain {
    width: 100%;
    display: grid;
    grid-template-rows: 10% 90% ;
    gap: 2%;
    position: relative;
    margin: 0;
    padding: 0px;
    height: 1080px;
    -webkit-border-radius: 5px; 
    border-radius: 5px; 
    background: #eaeffb;
    -webkit-box-shadow: 12px 12px 24px #c7cbd5,
    -12px -12px 24px #ffffff;
    box-shadow: 12px 12px 24px #c7cbd5,
    -12px -12px 24px #ffffff;
}


.topright {
    height: 100%;
    width: 100%;
    font-family: 'Poller One', cursive;
    -webkit-border-radius: 8px; 
    border-radius: 8px; 
    background-color: #a10017;
    -webkit-box-shadow: 6px 6px 7px #810314,
    -6px -6px 7px #ff072a;
    box-shadow: 6px 6px 7px #810314,
    -6px -6px 7px #ff072a;
    color: white;
    display: grid;
    grid-template-rows: 30% 70%;
}

.no_of_activetrans {
    font-size: 200%;
    font-family: 'Saira Stencil One', cursive;
}

.no_of_activetrans:hover {
    font-size: 250%;
    background: #c7051f;
}


.transctionstable {
    padding: 0px;
    margin: 0px;
    height: 100% ;
    width: 100%;
    -webkit-border-radius: 2px; 
    border-radius: 2px; 
    background: #f3f3f4;
    -webkit-box-shadow: 5px 5px 3px #8b8b8b,
    -5px -5px 3px #ffffff;
    box-shadow: 5px 5px 3px #8b8b8b,
    -5px -5px 3px #ffffff;
    overflow: scroll;
}

table {
    height: 100%;
    width: 100%;
    display: grid;
    grid-template-rows: 10% 90%;
}

thead {
    height: 100%;
    -webkit-border-radius: 5px; 
    border-radius: 5px; 
    background: #ccd6f4;
    -webkit-box-shadow: 7px 7px 40px #5c6370,
    -7px -7px 40px #ffffff;
    box-shadow: 7px 7px 40px #5c6370,
    -7px -7px 40px #ffffff;
}

thead>tr {
    display: grid;
    grid-template-columns: repeat(5,1fr);
    height: 100%;
    -webkit-border-radius: 5px; 
    border-radius: 5px; 
    background: #ccd6f4;
    color: #7e0411;
    -webkit-box-shadow: 7px 7px 40px #5c6370,
    -7px -7px 40px #ffffff;
    box-shadow: 7px 7px 40px #5c6370,
    -7px -7px 40px #ffffff;
    font-size: 1.3rem;
}

thead>tr>th{
    border: 0.3px solid #7e0411;
    border-radius: 3%;
}


thead>tr>th:hover{
    text-decoration: underline;
    cursor: pointer;
    border: 1px solid #7e0411;
}

tr>th {
    display: flex;
    align-items: center;
    justify-content: center;
}


tbody>tr {
    border: 0.5px solid #b4c2dc;
    display: grid;
    grid-template-columns: repeat(5,1fr);
    -webkit-border-radius: 7px; 
    border-radius: 7px; 
    background: #d9e4fa;
    -webkit-box-shadow: 5px 5px 35px #575b64,
    -5px -5px 35px #ffffff;
    box-shadow: 5px 5px 35px #575b64,
    -5px -5px 35px #ffffff;
    font-family: 'Saira Stencil One', cursive;
}


tr>td {
    font-size: 100%;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 40px;
    word-wrap: normal;
    text-align: center;
    padding: 5px;
    overflow: hidden;
}

/* tr>td:hover {
    background-color: #fff;
    color: black;
    transition: all 0.25s;
} */



td {
    align-items: center;
    justify-content: center;
    -webkit-border-radius: 3px; 
    border-radius: 3px; 
    background-color: #fff;
    -webkit-box-shadow: 5px 5px 76px #5f6164,
    -5px -5px 76px #ffffff;
    box-shadow: 5px 5px 76px #5f6164,
    -5px -5px 76px #ffffff;
}

tr:hover {
    background-color: #eef3fb;
    border: 1px solid  #7e0411;
    color: #7e0411;
    cursor: pointer;
}
/* td:hover {
    border: 2px solid #79c43e;
} */

.pagination {
    margin-top: 5px;
    display: grid;
    grid-template-columns: 49% 49%;
    gap: 2%;
    width: 100%;
    padding: 1%;
}

.pagination>.span1 {
    -webkit-border-radius: 8px; 
    border-radius: 8px; 
    background: #e6ebf8;
    -webkit-box-shadow: 8px 8px 5px #888b92,
    -8px -8px 5px #ffffff;
    box-shadow: 8px 8px 5px #888b92,
    -8px -8px 5px #ffffff;
    text-align: center;
    word-wrap: normal;
}

.pagination>.span2 {
    -webkit-border-radius: 8px; 
    border-radius: 8px; 
    background: #e6ebf8;
    -webkit-box-shadow: 8px 8px 5px #888b92,
    -8px -8px 5px #ffffff;
    box-shadow: 8px 8px 5px #888b92,
    -8px -8px 5px #ffffff;
    text-align: center;
    word-wrap: normal;
}

";