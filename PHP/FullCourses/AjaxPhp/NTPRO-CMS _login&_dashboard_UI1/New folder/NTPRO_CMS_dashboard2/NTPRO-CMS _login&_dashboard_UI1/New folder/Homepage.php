<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
        />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/ind.css" />
        
        <title>Dashboard Side Nav Bar</title>
    </head>
    <body>
        <input type="checkbox" name="" id="check" />
        <header>
            <label for="check">
                <i class="fas fa-bars" id="hamburguer"></i>
            </label>
            <div class="left-area">
                <h3>NTPRO-<span>Drive</span></h3>
            </div>
            <div class="right-area">
                <a href="#" class="logout-btn"
                    >Logout <i class="fas fa-sign-out-alt"></i
                ></a>
            </div>
        </header>
        <div class="sidebar">
            <center>
                <img src="assets/rosto-mulher.jpg" class="profile-img" alt="" />
                <h4>Mary da Silva</h4>
            </center>
            <nav>
                <a href="#"
                    ><i class="fas fa-desktop"></i><span>Dashboard</span></a
                >
                <a href="#"
                    ><i class="fas fa-cogs"></i><span>Components</span></a
                >
                <a href="#"><i class="fas fa-table"></i><span>Tables</span></a>
                <a href="#"><i class="fas fa-th"></i><span>Forms</span></a>
                <a href="#"
                    ><i class="fas fa-info-circle"></i><span>About</span></a
                >
                <a href="#"
                    ><i class="fas fa-sliders-h"></i><span>Settings</span></a
                >
            </nav>
        </div>

        <div class="content">
            <div class="wrapper">
                <div class="parent">
                    <div class="left-side">
                        <div class="logo">
                                <center><p class="GeekyAnts">
                                GeekyAnts 
                            </p></center>
                        </div>
                        <div>
                            <ul class="side-list">
                                <li style="font-size:12px">
                                    MAIN
                                </li>
                                <li>
                                    <i class="fas fa-home"></i>Dashboard
                                </li>
                                <li>
                                    <i class="fas fa-calendar"></i>Calender
                                </li>
                                <li>
                                    <i class="fas fa-mail-bulk"></i>Email<i style="float:right"class="fas fa-caret-right"></i>
                                </li>
                                <li>
                                    <i class="fas fa-inbox"></i>UI Elements<i style="float:right"class="fas fa-caret-right"></i>
                                </li>
                                <li>
                                    <i class="fab fa-wpforms"></i>Forms<i style="float:right"class="fas fa-caret-right"></i>
                                </li>
                                <li>
                                    <i class="fas fa-chart-pie"></i>Charts<i style="float:right"class="fas fa-caret-right"></i>
                                </li>
                                <li>
                                    <i class="fas fa-table"></i>Tables<i style="float:right"class="fas fa-caret-right"></i>
                                </li>
                                <li>
                                    <i class="fas fa-smile"></i>Icons<i style="float:right"class="fas fa-caret-right"></i>
                                </li>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>Maps
                                </li>
                            </ul>
                        </div>
                        <div>
            
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="header">
                            <div class="header1">
                                <i class='fas fa-bars'></i>
                                <button type="buttton" style="font-size:15px;">Create<i class="fa fa-caret-down"></i></button>
                            </div>
                            <div class="header2">
            
                                <input type="text" placeholder="Search.." />
                                <img src="image/usa.png" style="width:35px;height:20px;">
                                <button type="buttton" style="font-size:15px;background-color: #EDECF1;border:0px">English<i
                                        class="fa fa-angle-down"></i></button>
                                <i class="far fa-square"></i>
                                <i class="far fa-bell"></i>
                                <img src="image/img_avatar.png" class="image-in-table">
            
                            </div>
                        </div>
                        <div class="bread-crumb">
                            <div>
                                <h3 style="padding-left:15px">Dashboard</h3>
            
                            </div>
                            <div>
                                <button type="button" class="setting-btn">Settings<i style="padding-left:5px"
                                        class="fab fa-centos fa-lg"></i></button>
                            </div>
            
                        </div>
                        <div class="cards">
                            <div class="cards-block">
                                <div class="card1">
                                    <div class="card1-1">
                                        <i class="fas fa-truck-loading fa-2x"></i>
                                    </div>
                                    <div class="card1-2">
                                        <span style="color:#9195DF;font-size:16px">ORDERS</span>
                                        <span style="color:white;font-size:26px">1,634</span>
                                    </div>
                                    <div class="card1-3">
                                            <div class="badge">
                                            <div style="display:flex;flex-direction: column">
                                                    <div class="triangle" style="border-color:transparent #46A39A transparent transparent;">
            
                                                    </div>
                                                    <div class="ctriangle" style="border-color: transparent #46A39A transparent transparent;"></div>
                                                </div>
                                                <div class="badge-text-div" style="background-color: #46A39A">+12%</div>
                                        
                                    </div>
                                        <div class="card1-3-2">
                                            <i class="fas fa-arrow-up"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card2">
                                    <div class="card2-1">
                                        <div>Since Last Month</div>
                                        <div> <i class="fas fa-arrow-right"></i></div>
                                    </div>
                                </div>
            
                            </div>
                            <div class="cards-block">
                                <div class="card1">
                                    <div class="card1-1">
                                        <i class="fas fa-clone fa-2x"></i>
                                    </div>
                                    <div class="card1-2">
                                        <span style="color:#9195DF;font-size:16px">REVENUE</span>
                                        <span style="color:white;font-size:26px">52,368</span>
                                    </div>
                                    <div class="card1-3">
                                            <div class="badge">
                                            <div style="display:flex;flex-direction: column">
                                                    <div class="triangle" style="border-color:transparent #EC4961 transparent transparent;">
            
                                                    </div>
                                                    <div class="ctriangle" style="border-color:transparent #EC4961 transparent transparent;"></div>
                                                </div>
                                                <div class="badge-text-div" style="background-color: #EC4961">-28%</div>
                                        
                                    </div>
                                        <div class="card1-3-2">
                                            <i style="color:EC4961" class="fas fa-arrow-down"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card2">
                                    <div class="card2-1">
                                        <div>Since Last Month</div>
                                        <div> <i class="fas fa-arrow-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cards-block">
                                <div class="card1">
                                    <div class="card1-1">
                                        <i class="fas fa-pencil-alt fa-2x"></i>
                                    </div>
                                    <div class="card1-2">
                                        <span style="color:#9195DF;font-size:16px">AVERAGE PRICE</span>
                                        <span style="color:white;font-size:26px">15.8</span>
                                    </div>
                                    <div class="card1-3">
                                            <div class="badge">
                                            <div style="display:flex;flex-direction: column">
                                                    <div class="triangle" style="border-color:transparent #38A5F8 transparent transparent;">
            
                                                    </div>
                                                    <div class="ctriangle" style="border-color:transparent #38A5F8 transparent transparent;"></div>
                                                </div>
                                                <div class="badge-text-div" style="background-color:#38A5F8">00%</div>
                                        
                                    </div>
                                        <div class="card1-3-2" >
                                            <i class="fas fa-arrow-up"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card2">
                                    <div class="card2-1">
                                        <div>Since Last Month</div>
                                        <div> <i class="fas fa-arrow-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="cards-block">
                                <div class="card1">
                                    <div class="card1-1">
                                        <i class="fas fa-suitcase fa-2x"></i>
                                    </div>
                                    <div class="card1-2">
                                        <span style="color:#9195DF;font-size:16px">PRODUCT SOLD</span>
                                        <span style="color:white;font-size:26px">2436</span>
                                    </div>
                                    <div class="card1-3">
            
                                        <div class="card1-3-1">
                                            <div class="badge">
                                                    <div style="display:flex;flex-direction: column">
                                                            <div class="triangle">
                    
                                                            </div>
                                                            <div class="ctriangle"></div>
                                                        </div>
                                                <div class="badge-text-div" style="background-color:#F7B432">+84%</div>
                                                
                                            </div>
            
                                        </div>
                                        <div class="card1-3-2">
                                            <i class="fas fa-arrow-up"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card2">
                                    <div class="card2-1">
                                        <div>Since Last Month</div>
                                        <div> <i class="fas fa-arrow-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-chat">
                            <div class="table">
                                <table class="table-css">
                                    <tr>
                                        <th colspan="6">
                                            Latest Transaction
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            (#)Id
                                        </th>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Date
                                        </th>
                                        <th>
                                            Amount
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                        <th>
            
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>
                                            14256
                                        </td>
                                        <td class="name-image">
                                            <div><img src="image/img_avatar.png" class="image-in-table"></div>
                                            <div>Philip Smead</div>
                                        </td>
                                        <td>
                                            15/1/2018
                                        </td>
                                        <td>
                                            94$
                                        </td>
                                        <td>
                                            <button type="button" class="status-btn"
                                                style="background-color:#4A999D">Delievered</button>
                                        </td>
                                        <td>
                                            <button type="button" class="edit-btn" style="background-color:#6471d1">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            14257
                                        </td>
                                        <td class="name-image">
                                            <div><img src="image/img_avatar.png" class="image-in-table"></div>
                                            <div>Brent Shipley</div>
                                        </td>
                                        <td>
                                            16/1/2018
                                        </td>
                                        <td>
                                            112$
                                        </td>
                                        <td>
                                            <button type="button" class="status-btn"
                                                style="background-color:#4A999D;">Delievered</button>
                                        </td>
                                        <td>
                                            <button type="button" class="edit-btn" style="background-color:#6471d1;">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            14258
                                        </td>
                                        <td class="name-image">
                                            <div><img src="image/img_avatar.png" class="image-in-table"></div>
                                            <div>Robert Shilton</div>
                                        </td>
                                        <td>
                                            17/1/2018
                                        </td>
                                        <td>
                                            116$
                                        </td>
                                        <td>
                                            <button type="button" class="status-btn"
                                                style="background-color:#4A999D;">Delievered</button>
                                        </td>
                                        <td>
                                            <button type="button" class="edit-btn" style="background-color:#6471d1;">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            14259
                                        </td>
                                        <td class="name-image">
                                            <div><img src="image/img_avatar.png" class="image-in-table"></div>
                                            <div>Alberto Jackson</div>
                                        </td>
                                        <td>
                                            18/1/2018
                                        </td>
                                        <td>
                                            109$
                                        </td>
                                        <td>
                                            <button type="button" class="status-btn"
                                                style="background-color:#4A999D;">Delievered</button>
                                        </td>
                                        <td>
                                            <button type="button" class="edit-btn " style="background-color:#6471d1">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            14260
                                        </td>
                                        <td class="name-image">
                                            <div><img src="image/img_avatar.png" class="image-in-table"></div>
                                            <div>David Sanchez</div>
                                        </td>
                                        <td>
                                            19/1/2018
                                        </td>
                                        <td>
                                            120$
                                        </td>
                                        <td>
                                            <button type="button" class="status-btn"
                                                style="background-color:#4A999D;">Delievered</button>
                                        </td>
                                        <td>
                                            <button type="button" class="edit-btn" style="background-color:#6471d1;">Edit</button>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="chat">
                                <div class="chat1">
                                    <h3>Chat</h3>
                                </div>
                                <div class="chat2">
                                    <ul>
                                        <li>
            
                                            <div class="chat-person1">
                                                <div>
                                                    <img src="image/img_avatar.png" class="image-in-table">
                                                </div>
                                                <div class="chat-box">
                                                        <div class="triangle" style="border-color:transparent #E1E4F7 transparent transparent;">
            
                                                            </div>
                                                <div class="chat-message">
                                                    <span style="color:#2838B2;font-size:14px;">John Deo</span><br>
                                                    <span style="color:rgb(104, 120, 190);font-size:14px;">Hello!</span>
                                                </div>
                                                </div>
                                            </div>
            
                                        </li>
                                        <li>
                                            <div class="chat-person2">
                                                <div>
                                                    <img src="image/img_avatar.png" class="image-in-table">
                                                </div>
                                                <div class="chat-box">
                                                <div class="chat-message" style="background-color: #EFF0f4">
                                                    <span style="color:#2838B2;font-size:14px;">Smith</span><br>
                                                    <span style="color:rgb(104, 120, 190);font-size:14px;">Hi! How are You?What
                                                        about our next meeting</span>
                                                </div>
                                                <div class="chat-triangle" style="border-color:transparent transparent transparent #EFF0f4">
            
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="chat-person1">
                                                <div>
                                                    <img src="image/img_avatar.png" class="image-in-table">
                                                </div>
                                                <div class="chat-box">
                                                        <div class="triangle" style="border-color:transparent #E1E4F7 transparent transparent;">
            
                                                            </div>
                                                <div class="chat-message">
                                                    <span style="color:#2838B2;font-size:14px;">John Deo</span><br>
                                                    <span style="color:rgb(104, 120, 190);font-size:14px;">Yeah! Everything is
                                                        fine</span>
                                                </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="chat-person2">
                                                <div>
                                                    <img src="image/img_avatar.png" class="image-in-table">
                                                </div>
                                                <div class="chat-box">
                                                <div class="chat-message" style="background-color: #EFF0f4">
                                                    <span style="color:#2838B2;font-size:14px;">Smith</span><br>
                                                    <span style="color:rgb(104, 120, 190);font-size:14px;">Wow! that's Great</span>
                                                </div>
                                                <div class="chat-triangle" style="border-color:transparent transparent transparent #EFF0f4">
            
                                                    </div>
                                               </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="chat-person1">
                                                <div>
                                                    <img src="image/img_avatar.png" class="image-in-table">
                                                </div>
                                                <div class="chat-box">
                                                        <div class="triangle" style="border-color:transparent #E1E4F7 transparent transparent;">
            
                                                            </div>
                                                        <div class="chat-message">
                                                                <span style="color:#2838B2;font-size:14px;">John Deo</span><br>
                                                                <span style="color:rgb(104, 120, 190);font-size:14px;">how Are You</span>
                                                        </div>
                                                </div> 
                                            </div>
                                        </li>
                                        <li>
                                            <div class="chat-person2">
                                                <div>
                                                    <img src="image/img_avatar.png" class="image-in-table">
                                                </div>
                                                <div class="chat-box">
                                                        
                                                        <div class="chat-message" style="background-color: #EFF0f4;margin-left:10px;">
                                                                <span style="color:#2838B2;font-size:14px;">John Deo</span><br>
                                                                <span style="color:rgb(104, 120, 190);font-size:14px;">how Are You</span>
                                                        </div>
                                                        <div class="chat-triangle" style="border-color:transparent transparent transparent #EFF0f4">
            
                                                            </div>
                                                </div> 
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <input type="text" placeholder="Enter Your Text"><input type="submit" value="Send"
                                        style="background-color:#4AAA98;color:white;padding:10px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </body>
</html>
