import React from "react";
import "./faucet.css";

const Faucet = ({ getOCTHandler, txData, walletAddress }) => {
  return (
    <>
      <div className="faucet_header">
        <h1 className="faucet_heading">Faucet</h1>
        <p className="faucet_quote">Fast and Reliable: 50 OCT/min</p>
      </div>
      <div className="faucet">
        <div className="getOCT_div">
          <input
            type="text"
            className="address_input"
            placeholder="Enter your wallet address (0x...)"
            defaultValue={walletAddress}
          />
          <button className="getOCT_button" onClick={getOCTHandler}>
            Get OCT
          </button>
        </div>
        <div className="tx_data">
          <div className="tx_data--heading">
            <p>Transaction Data</p>
          </div>
          <p className="tx_hash">{txData ? txData : "--"}</p>
        </div>
      </div>
    </>
  );
};

export default Faucet;
