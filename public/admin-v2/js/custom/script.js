"use strict"
$.ajaxSetup({
    headers:{
        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
    }
});

function showData(id) {
    var a=document.getElementById("singlePro-body");
    $.ajax({
        url:"/admin/product/viewProduct/"+id,
        type:"GET",
        dataType:"JSON",
        beforeSend:function () {
            a.innerHTML=`<div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <img class="img-responsive" src="/images/loaders/untitled-5.gif" alt="Loading">
                            </div>
                        </div>`
        },
        success: function (data) {
            $("#myModalLabel77").text(data["product-name"])
            a.innerHTML=
                `
                <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" >
                                            <img src="/images/product/${data["product-image"]}" class="img-thumbnail" alt="Cinque Terre" id="pro-img">
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                            <div class="table-responsive text-center">
                                                <table class="table table-hover table-bordered table-striped">
                                                    <tr>
                                                        <th>Product Code </th>
                                                        <th>${data["product-code"]}</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Product Color </th>
                                                        <th>${data["color"]}</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Product Price </th>
                                                        <th>Rs: ${data["product-price"]}</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Remaing Qunatity </th>
                                                        <th>${data["product-quantity"]}</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Product Sale Price </th>
                                                        <th>
                                                            Rs: ${data["sale-price"]}
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th>Product Catagory </th>
                                                        <th>
                                                           <button type="button" class="btn btn-sm btn-outline-success round">${data.catagories["catagory_name"]}</button>
                                                           <button type="button" class="btn btn-sm btn-outline-success round">${data.subcatagory["subcatagory-name"]}</button>
                                                           <button type="button" class="btn btn-sm btn-outline-success round">${data.series["series_name"]}</button>
                                                           <button type="button" class="btn btn-sm btn-outline-success round">${data.varieties["variety"]}</button>
                                                        </th>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-bordered table-striped">
                                                    <tr>
                                                        <th><h4>Product Short Description</h4></th>
                                                    </tr>
                                                    <tr>
                                                        <td>${data['small-desc']}</td>
                                                    </tr>
                                                    <tr>
                                                        <th><h4>Product Long Description</h4></th>
                                                    </tr>
                                                    <tr>
                                                       <td>${data['full-desc']}</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                    
                `
        }

    })
}