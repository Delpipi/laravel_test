<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <h2>Product Informations</h2>
            </div>
            <div class="col-12">
                <form>
                    <div class="mb-3">
                        <label for="productName" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="productName">
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity in stock</label>
                        <input type="number" class="form-control" id="quantity">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price per item</label>
                        <input type="number" class="form-control" id="price">
                    </div>
                    <button type="submit" id="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <h2>Product List</h2>
            </div>
            <div class="col">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Quantity in Stock</th>
                            <th scope="col">Price per item</th>
                            <th scope="col">Datetime Submitted</th>
                            <th scope="col">Total value number</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>Computer</td>
                            <td>10</td>
                            <td>$500</td>
                            <td>05/11/2025</td>
                            <td>$5000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js"></script>

    <script>
        const btnSubmit = document.querySelector('#submit');
        const productName = document.querySelector('#productName');
        const quantityInStock = document.querySelector('#quantity');
        const pricePerItem = document.querySelector('#price');

        btnSubmit.addEventListener('click', (event) => {
            event.preventDefault();

            if (productName.value.trim() === '' || quantityInStock.value.trim() === '' || quantityInStock.value.trim() === '') {
                alert("Some Value are empty");
                return;
            }

            fetch()
        })
    </script>

</body>

</html>