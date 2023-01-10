import { ethers } from "ethers";
import React, { useEffect, useState } from "react";
import "./App.css";
import Faucet from "./components/Faucet/Faucet";
import NavbarMain from "./components/Navbar/NavbarMain";
import faucetContract from "./contracts/Faucet";

const App = () => {
  const [walletAddress, setWalletAddress] = useState("");
  const [signer, setSigner] = useState();
  const [fcContract, setFcContract] = useState();
  const [txData, setTxData] = useState();

  useEffect(() => {
    getCurrentWalletConnected();
    addWalletListener();
  }, []);

  const connectWallet = async () => {
    if (typeof window != "undefined" && typeof window.ethereum != "undefined") {
      try {
        /* get provider */
        const provider = new ethers.providers.Web3Provider(window.ethereum);

        /* get account */
        const accounts = await provider.send("eth_requestAccounts", []);

        /* get signer */
        setSigner(provider.getSigner());
        console.log("This is signer" + signer);
        // alert(JSON.stringify(signer));

        /* creating contract instance */
        setFcContract(faucetContract(provider));
        console.log("This is contract", fcContract);

        /* setting active wallet address */
        setWalletAddress(accounts[0]);
        console.log("This is address" + walletAddress);
      } catch (e) {
        console.log("Error in connecting MetaMask" + e);
      }
    } else {
      console.log("Please install MetaMask");
    }
  };

  /* getCurrentWalletConnected will conect to the metamask wallet automatically
  when the page refreshs */

  const getCurrentWalletConnected = async () => {
    if (typeof window != "undefined" && typeof window.ethereum != "undefined") {
      try {
        const provider = new ethers.providers.Web3Provider(window.ethereum);
        const accounts = await provider.send("eth_accounts", []);

        if (accounts.length > 0) {
          setSigner(provider.getSigner());

          setFcContract(faucetContract(provider));

          setWalletAddress(accounts[0]);
        } else {
          console.log("Connect to MetaMask using Connect Wallet button");
        }
      } catch (e) {
        console.log("Error in getCurrentWalletConnected", e);
      }
    } else {
      console.log("Please install MetaMask");
    }
  };

  /* addWalletListener listens to change in address of metamask if changes
 takes place than automatically connects to the latest (current) address */

  const addWalletListener = async () => {
    if (typeof window != "undefined" && typeof window.ethereum != "undefined") {
      window.ethereum.on("accountsChanged", (accounts) => {
        console.log(accounts[0]);
        setWalletAddress(accounts[0]);
      });
    } else {
      setWalletAddress("");
      console.log("Please install MetaMask");
    }
  };

  const getOCTHandler = async () => {
    try {
      const fcContractWithSigner = fcContract.connect(signer);
      const res = await fcContractWithSigner.requestTokens();
      console.log("Token has been sent");
      setTxData(res.hash);
      console.log("Tx Hash is ", res.hash);
    } catch (e) {
      console.log("Error in getOCTHandler", e);
    }
  };

  return (
    <div className="app">
      <NavbarMain connectWallet={connectWallet} walletAddress={walletAddress} />
      <Faucet
        getOCTHandler={getOCTHandler}
        txData={txData}
        walletAddress={walletAddress}
      />
    </div>
  );
};

export default App;
