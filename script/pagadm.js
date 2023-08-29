const productForm = document.getElementById('product-form');
const productList = document.getElementById('product-list');

productForm.addEventListener('submit', function (e) {
    e.preventDefault();

    const productName = document.getElementById('product-name').value;
    const productPrice = document.getElementById('product-price').value;

    if (productName && productPrice) {
        const productItem = document.createElement('div');
        productItem.classList.add('product-item');
        productItem.innerHTML = `
            <p><strong>Nome/ID:</strong> ${productName}</p>
            <p><strong>Preço:</strong> $${productPrice}</p>
            <button class="edit-button">Editar</button>
        `;
        productList.appendChild(productItem);

        document.getElementById('product-name').value = '';
        document.getElementById('product-price').value = '';

        productItem.querySelector('.edit-button').addEventListener('click', function () {
            const newProductName = prompt('Novo nome/id do produto:', productName);
            const newProductPrice = prompt('Novo preço do produto:', productPrice);

            if (newProductName && newProductPrice) {
                productItem.innerHTML = `
                    <p><strong>Nome/ID:</strong> ${newProductName}</p>
                    <p><strong>Preço:</strong> $${newProductPrice}</p>
                    <button class="edit-button">Editar</button>
                `;
            }
        });
    }
});
