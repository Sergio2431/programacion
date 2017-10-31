//Control de errores
function msjError(texto){

console.log("-----ERROR-----");
console.log(texto);
console.log("---------------");
}

//Analizamos el beneficio de un producto
function beneficio (compra,venta){
  let compraNum=0;
  let ventaNum=0;
  //Parseado
  compraNum=parseFloat(compra);
  if(isNaN(compraNum)){

  }
  return ventaNum-compraNum;
}
