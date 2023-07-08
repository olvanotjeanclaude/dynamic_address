import { Address } from "./Address.js";


$(document).ready(function () {
  const address = new Address();

  address.fillAddress();

  $("form").submit(async (e) => {
    e.preventDefault();
    await  address.submitAddress();
  });
});

