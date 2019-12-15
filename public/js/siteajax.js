function getProduct(routeProduct) {
    $.ajax({
        type: "GET",
        url: routeProduct,
        dataType: 'json',
        success: function (response) {
            $('#productDetail .modal-body').html(`
            <h1>${response.product_name}</h1>
            <p>${response.product_price}</p>
            <p>${response.product_description}</p>            
            `);
            $('#productDetail').modal('toggle');
        }
    });
    
}