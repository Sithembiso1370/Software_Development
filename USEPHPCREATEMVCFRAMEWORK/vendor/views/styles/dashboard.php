<?php


echo '
<style>




.dashboard {
    position: relative;
    height: 100%;
    width: 1700px;
    display: grid;
    grid-template-columns: 15% 85%;
}


.active {
    transition: all 0.5s ease-out;
}


.left_nav {
    position: relative;
    height: 100%;
    width: 100%;
    display: grid;
    grid-template-rows: 7.5% 92.5%;
    background-color: #a10017;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    color: #fff;
}

.left_nav>.left_header{
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
}

.left_header>h2 {
    position: relative;
    background-color: #fff;
    color: goldenrod;
    width: 100%;
    height: 100%;
    border-radius: 10px 0 0 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    word-wrap: normal;
}

.left_header>h2:hover{
    background-color: #a10017;
    transition: all 0.3s ease-out;
}

.left_nav_list {
    position: relative;
    height: 100%;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    box-shadow:  2px 4px 8px 0 rgba(0,0,0,0.2) ;
}

.left_nav_list>li {
    position: relative;
    height: 100%;
    width: 100%;
    margin: 0;
    padding: 0;
    font-weight: bold;
    font-size: 2rem;
    display: flex;
    align-items: center;
    justify-content: center;
    word-wrap: break-word;
}

.left_nav_list>li:hover{
    box-shadow:  4px 8px 4px 8px rgba(0,0,0,0.2) ;
    background-color: #fff;
    color: goldenrod;
    cursor: pointer;
    transition: all 0.5s ease-in-out;
    border-radius: 15px 0 0px 15px;
}

.center_main{
    position: relative;
    height: 100%;
    width: 100%;
    display: grid;
    grid-template-rows: 7.5% 22.5% 70%;
}

.topnav {
    position: relative;
    height: 100%;
    width: 100%;
    background-color: #a10017;
    color: #fff;
    box-shadow: 0 4px 8px 0 goldenrod;
    display: grid;
    grid-template-columns: 4% 76% 20%;
    gap: 0.25%;
    text-align: center;
    font-size: 1.5rem;
    align-items: center;
    justify-content: center;
}

.topnav:hover {
    box-shadow: 4px 8px 4px 8px rgba(218, 165, 32, 0.411);
    background-color: whitesmoke;
    transition: all 0.3s ease-out;
}

.topnav_items {
    position: relative;
    width: 100%;
    height: 100%;
    color: #fff;
    background-color: #a10017;
    border-radius: 0 0 5px 5px;
    box-shadow: 8px 8px 8px 8px rgba(0,0,0,0.2);

}


.topnav_left {
    position: relative;
    height: 100%;
    width: 100%;
}

.topnav_center {
    position: relative;
    height: 100%;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.topnav_left>img{
    position: relative;
    height: 100%;
    width: 100%; 
    cursor: pointer; 
}

.search {
    position: relative;
    height: 90%;
    width: 50%;
    background-color: whitesmoke;
    border-radius: 55px;
    display: grid;
    grid-template-columns: 10% 90%;

}

.search_txt {
    border-radius: 55px;
    text-align: center;
    font-size: 2rem;
    font-style: italic;
}

.cards_nav {
    position: relative;
    height: 100%;
    width: 100%;
    overflow-x: scroll;
    
}

.cards_slide {
    width: 150%;
    height: 100%;
    position: relative;
    display: grid;
    grid-template-columns: repeat(8,1fr);
    background-color: #a10017;
}


::-webkit-scrollbar {
    width: 100px;
    height: 10px;
  }


  ::-webkit-scrollbar-track {
    background: rgba(145, 124, 74, 0.979);
  }



::-webkit-scrollbar-thumb {
    background-color: #a10018a4;
  }


::-webkit-scrollbar-thumb:hover {
    background: #a10017;
    transition: background 0.5s ease-out;
  }


.cards {
    position: relative;
    height: 90%;
    width: 90%;
    margin: 3% 0 3% 0;
    background-color: #fff;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    display: grid;
    grid-template-rows: 20% 80%;
    border-radius: 5px;
}

.cards:hover {
    height: 92.5%;
    width: 95%;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    border-radius: 0;
    transition: 0.3s;
}

.card_header {
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-style: italic;
    font-size: 1.5rem;
    color: #a10017;
    border: 2px solid goldenrod;
}
.no_of_docs {
    background-color: rgba(145, 124, 74, 0.979);
    color: #a10017;
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 5px;
    font-weight: bold;
    font-style: italic;
    font-size: 3rem;
}

.no_of_docs:hover {
    border-radius: 0;
    font-size: 4rem;
}



.main_nav {
    position: relative;
    width: 100%;
    height: 100%;
    display: grid;
    grid-template-columns: 65% 35%;
}

.charts_nav {
    position: relative;

    border-right: 2px solid black;
}
<style>
';