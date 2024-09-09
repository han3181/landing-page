// scripts.js
document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.product button');
    buttons.forEach(button => {
        button.addEventListener('click', addToCart);
    });
});

function addToCart(event) {
    const product = event.target.closest('.product');
    const productName = product.querySelector('h3').textContent;
    alert(`${productName} has been added to your cart!`);
}
