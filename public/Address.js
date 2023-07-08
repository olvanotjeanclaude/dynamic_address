import { generateDistrictsHTML } from "./template.js";

export class Address {
    constructor() {
        this.addresses = [];
    }

    async fillAddress() {
        await this.loadProvinces();
        const html = this.addresses.map(this.generateProvinceHTML).join("");
        $("#address").html(html);
    }

    async loadProvinces() {
        this.addresses = await $.get("/api/provinces");
    }

    async submitAddress() {
        const input = $("#mainInput").val();

        try {
            if (input) {
                if (this.isChecked("province")) {
                    await this.addDistrict();
                } else if (this.isChecked("district")) {
                    await this.addNeighborhood();
                } else {
                    await this.addProvince();
                }

                await this.fillAddress();
            }
        } catch (error) {
            alert("An unexpected error occurred");
            console.log(error);
        }

        $("#mainInput").val("");
    }

    async addProvince() {
        await $.post("/api/provinces", { province: $("#mainInput").val() });
    }

    async addDistrict() {
        await $.post("/api/districts", {
            district: $("#mainInput").val(),
            province_id: this.getValueOfSelectedRadio("province"),
        });
    }

    async addNeighborhood() {
        await $.post("/api/neighborhoods", {
            neighborhood: $("#mainInput").val(),
            district_id: this.getValueOfSelectedRadio("district"),
        });
    }

    isChecked(inputName) {
        return $(`input[name="${inputName}"]:checked`).length > 0;
    }

    getValueOfSelectedRadio(inputName) {
        return $(`input[name="${inputName}"]:checked`).first().val();
    }

    generateProvinceHTML(province) {
        const districtsHTML = generateDistrictsHTML(province.districts);
        return `
            <div class="container border border-danger m-1">
                <div class="form-check">
                <input class="form-check-input province" value="${province.id}" type="radio" name="province">
                <label class="form-check-label">
                    ${province.name}
                </label>
                </div>
                ${districtsHTML}
            </div> `;
    }
}
