function carrito(num){
 
    var producto = document.getElementById("producto").value;
    var precio = $.trim($("#precio").val());

    let carrito= {
        id:num,
        prod:producto,
        total: precio
    }

    console.log(carrito);
}

/*
$('#agregar').onclick( carrito())*/