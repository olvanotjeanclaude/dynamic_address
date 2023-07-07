export function generateDistrictsHTML(districts) {
    if (Array.isArray(districts)) {
        return `
        <div class="container border border-success m-1">
          <h4>Second Category</h4>
          ${districts.map(generateDistrictHTML).join("")}
        </div>
      `;
    }

    return "";
}

export function generateNeighborhoodsHTML(neighborhoods) {
    if (Array.isArray(neighborhoods)) {
        return `
        <div class="container border border-info m-1">
          <h4>Third Category</h4>
          ${neighborhoods.map(generateNeighborhoodHTML).join("")}
        </div>
      `;
    }

    return "";
}

function generateDistrictHTML(district) {
    return `
      <div class="form-check">
        <input class="form-check-input district" value="${district.id}" type="radio" name="district">
        <label class="form-check-label">
          ${district.name}
        </label>
      </div>
      ${generateNeighborhoodsHTML(district.neighborhoods)}
    `;
}

function generateNeighborhoodHTML(neighborhood) {
    return `
      <div class="form-check">
        <input class="form-check-input neighborhood" value="${neighborhood.id}" type="radio" name="neighborhood">
        <label class="form-check-label">
          ${neighborhood.name}
        </label>
      </div>
    `;
}
