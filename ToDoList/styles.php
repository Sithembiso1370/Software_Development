<?php

echo "
<style>
html {
    width: 100%;
    margin: 0;
    padding: 0;
    width: fit-content;
    height: fit-content;
}

body {
    background-color: yellow;
    position: relative;
    width:100%;
    height: 100vh;
    display: grid;
    grid-template-rows: 10% 90%;
    align-items: center;
    justify-content:center;
}

nav {
    position: relative;
    width:100%;
    height: 100%;
    background-color: yellowgreen;
}

main {
    position: relative;
    width:100%;
    height: 100%;
    background-color: white;
    display: grid;
    grid-template-rows: 30% 70%;
}

.tools {
    position: relative;
    width:100%;
    height: 100%;
    background-color: gray;
}

.tools>.crud{
    position: relative;
    width:100%;
    height: 100%;
    display: grid;
    grid-template-rows: 80% 20%;
}


.input_tbl_body>tr {
    position: relative;
    width:100%;
    height: 100%;
    display: grid;
    grid-template-columns: 2fr 2fr 2fr;
}

input {
        position: relative;
        height: 50px;
    }




table {
    width: 100%;
}



th {
    position: relative;
    border: 2px solid white;
    margin: 2px;
}

td {
    position: relative;
    border: 2px solid white;
    margin: 2px;
}
</style>
";

