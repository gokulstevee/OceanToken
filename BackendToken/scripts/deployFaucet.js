const hre = require("hardhat");

async function main() {
  const Faucet = await hre.ethers.getContractFactory("Faucet");
  const faucet = await Faucet.deploy(
    "0xa3F7e7D54c7613C762De27E1898B5B459B03B6f3"
  );

  await faucet.deployed();

  console.log("Faucet Token deployed", faucet.address);
}

main().catch((error) => {
  console.error(error);
  process.exitCode = 1;
});
