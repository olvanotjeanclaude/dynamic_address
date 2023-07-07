const provinceRadios = document.querySelectorAll('input[name="province"]');
const districtRadios = document.querySelectorAll('input[name="district"]');
const streetRadios = document.querySelectorAll('input[name="street"]');

for (let i = 0; i < provinceRadios.length; i++) {
  provinceRadios[i].addEventListener("change", populateDistricts);
}

for (let i = 0; i < districtRadios.length; i++) {
  districtRadios[i].addEventListener("change", populateStreets);
}

function populateDistricts() {
  for (let i = 0; i < districtRadios.length; i++) {
    districtRadios[i].disabled = true;
    districtRadios[i].checked = false;
  }

  const selectedProvince = document.querySelector('input[name="province"]:checked').value;
  const districtRadiosByProvince = document.querySelectorAll(
    'input[name="district"][value^="' + selectedProvince + '"]'
  );

  for (let i = 0; i < districtRadiosByProvince.length; i++) {
    districtRadiosByProvince[i].disabled = false;
  }

  for (let i = 0; i < streetRadios.length; i++) {
    streetRadios[i].disabled = true;
    streetRadios[i].checked = false;
  }
}

function populateStreets() {
  for (let i = 0; i < streetRadios.length; i++) {
    streetRadios[i].disabled = true;
    streetRadios[i].checked = false;
  }

  const selectedDistrict = document.querySelector('input[name="district"]:checked').value;
  const streetRadiosByDistrict = document.querySelectorAll(
    'input[name="street"][value^="' + selectedDistrict + '"]'
  );

  for (let i = 0; i < streetRadiosByDistrict.length; i++) {
    streetRadiosByDistrict[i].disabled = false;
  }
}