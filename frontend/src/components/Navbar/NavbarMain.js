import React from "react";
import "./Navbar.css";

import Container from "react-bootstrap/Container";
import Nav from "react-bootstrap/Nav";
import Navbar from "react-bootstrap/Navbar";

function NavbarMain({ connectWallet, walletAddress }) {
  return (
    <Navbar expand="sm" className="navbar_bg">
      <Container fluid>
        <Nav>
          <div className="navbar">
            <p className="oceantoken_heading">OCEAN TOKEN</p>
            <span className="nav_button">
              <button className="connect_button" onClick={connectWallet}>
                {walletAddress
                  ? "Connected: " +
                    walletAddress.substring(0, 5) +
                    "..." +
                    walletAddress.substring(38)
                  : "Connect"}
              </button>
            </span>
          </div>
        </Nav>
      </Container>
    </Navbar>
  );
}

export default NavbarMain;
