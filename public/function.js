const format = (num) => {

    return String(num).replace(/(?<!\..*)(\d)(?=(?:\d{3})+(?:\.|$))/g, '$1.')
}

function load() {
    $(".modal").show();
    $.ajax({
        type: "POST",
        url: "./admin-load-all-user.php",
        dataType: "JSON",
        success: function(response) {
            $(".listUser").html("");
            response.forEach(element => {
                if (element['status'] == 1) {
                    addElement(element);
                }
            });
        }
    });


}

function addElement(element) {
    let tr = `
        <tr>
        <td> ${element['id_user']}</td>
        <td> ${element['username_user']}</td>
        <td> ${element['password_user']}</td>
        <td> Rp ${format(element['saldo_user'])}</td>
        <td><button value='${element['id_user']}' class='delete-user button ui red'> Delete </button></td>
        </tr>
        `;

    $(".listUser").append(tr);
}

function printItem(response) {
    $(".listItem").html("");
    response.forEach(element => {
        let tr = `<tr> 
            <td> ${element['id_item']} </td>
            <td> <img src='../assets/items/${element['image']}.jpg'/> </td>
            <td> ${element['name_item']} </td>
            <td> ${element['category']} </td>
            <td> Rp ${format(element['price_item'])} </td>
            <td> <button class='delete-item button red ui' value='${element['id_item']}'> Delete </button> </td>
        </tr>`;

        $(".listItem").append(tr);
    });
}

function loadItem() {
    $.ajax({
        type: "POST",
        url: "./admin-load-item.php",
        dataType: "JSON",
        success: function(response) {
            printItem(response);
        }
    });
}

function loadCategoryFilter() {
    $.ajax({
        type: "POST",
        url: "./admin-load-all-category.php",
        dataType: "JSON",
        success: function(response) {
            $(".cont").html("");
            printCategory(response);
        }
    });
}

function printCategory(response) {
    response.forEach(element => {
        let input = `<input type='checkbox' value='${element['id_category']}' class='my-item' checked='checked'> <label> ${element['name_category']} </label>`;
        let div = `<div class='checkbox ui'>${input}</div>`;
        let item = `<div class='item'> ${div} </div>`;
        $(".cont").append(item);
    });
}

function printFilteredItem(response, data) {
    $(".listItem").html("");
    if (data.length > 0) {
        response.forEach(element => {
            if (data.includes(element['category_id_item'])) {
                let tr = `<tr> 
            <td> ${element['id_item']} </td>
            <td> <img src='../assets/items/${element['image']}.jpg'/> </td>
            <td> ${element['name_item']} </td>
            <td> ${element['category']} </td>
            <td> Rp ${format(element['price_item'])} </td>
            <td> <button class='delete-item button red ui' value='${element['id_item']}' > Delete </button> </td>
        </tr>`;

                $(".listItem").append(tr);
            }
        });
    }

}