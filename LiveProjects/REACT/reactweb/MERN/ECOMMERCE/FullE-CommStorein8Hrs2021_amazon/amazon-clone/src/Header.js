import React from "react";
import "./Header.css";


export default function Header() {
  return (
    //  TOP BLACK HEADER SECTION
    <div className="header">
      {/* LOGO ON THE HEAD */}
        <img 
            className="header__logo"
            src="http://pngimg.com/uploads/amazon/amazon_PNG11.png" />
        {/* Search Input Container of the Logo */}
        <div className="header__search">
            <input type="text" placeholder="input" className="header__searchInput"/>
        </div>
        {/* right header nav for sign In,Orders amazon Prime cart and cart count */}
        <div className="header__nav">
          {/* sign in Option */}
          <div className="header_option">
            <span className="header__optionLineOne">Hello Guest</span>
            <span className="header__optionLineTwo">Sign In</span>
          </div>
          {/* Returns and Orders Option */}
          <div className="header_option">
            <span className="header__optionLineOne">Returns</span>
            <span className="header__optionLineTwo"> & Orders</span>
          </div>
          {/* Amazon Prime Option */}
          <div className="header_option">
            <span className="header__optionLineOne">Your</span>
            <span className="header__optionLineTwo"> & Prime</span>
          </div>
          {/* Cart Option */}
          <div className="header_option">
          
          </div>
        </div>
    </div>

  )
}
