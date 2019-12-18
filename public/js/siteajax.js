function getProduct(routeProduct,image) {
    $.ajax({
        type: "GET",
        url: routeProduct,
        dataType: 'json',
        success: function (response) {
            $('#productDetail .modal-body').html(`
            <h5>${response.product_name}</h5>
            <img class="card-img-top" src="${image}/${response.product_image}" alt="${image}/${response.product_image}"></img>
            <h6>Giá Cũ ${response.product_price} VNĐ</h6>
            <h6>Giá Mới ${response.product_promotion_pricre} VNĐ</h6>
            <p>${response.product_description}</p>            
            `);
            $('#productDetail').modal('toggle');
        }
    });
    
}