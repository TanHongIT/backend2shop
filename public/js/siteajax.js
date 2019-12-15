function getProduct(routeProduct,image) {
    $.ajax({
        type: "GET",
        url: routeProduct,
        dataType: 'json',
        success: function (response) {
            $('#productDetail .modal-body').html(`
            <h1>${response.product_name}</h1>
            <img class="card-img-top" src="${image}/${response.product_image}" alt="${image}/${response.product_image}"></img>
            <p>${response.product_price}</p>
            <p>${response.product_description}</p>            
            `);
            $('#productDetail').modal('toggle');
        }
    });
    
}