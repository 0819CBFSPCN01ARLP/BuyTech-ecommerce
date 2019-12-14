window.onload = async () => {
  async function listarProvincias(){
    const response = await fetch('https://apis.datos.gob.ar/georef/api/provincias?campos=id,nombre', { method: "GET"});
    let data = await response.json();
    return data
  }

  let provincias = await listarProvincias();
  // console.log(provincias);
  let select = document.getElementById("selectProvincias");
  for (prov of provincias.provincias) {
    // console.log(prov);
    select.innerHTML += `<option value="${prov.id}">${prov.nombre}</option>`;
  }




}
