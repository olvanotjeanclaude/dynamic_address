import { Address } from "./Address.js";


$(document).ready(function () {

  const address = new Address();

  address.fillAddress();

  $("#submitMainInput").click(() => address.addAddress());
});

