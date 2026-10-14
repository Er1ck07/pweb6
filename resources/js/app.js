document.addEventListener('DOMContentLoaded', () => {
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    const toastContainer = document.getElementById('toast-container');

    addToCartButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            const itemName = e.target.getAttribute('data-item');
            showToast(`Added "${itemName}" to your cart! 🍙`);
        });
    });

    function showToast(message) {
        const toast = document.createElement('div');
        toast.className = 'onibite-toast';
        toast.textContent = message;
        
        toastContainer.appendChild(toast);

        setTimeout(() => {
            toast.remove();
        }, 3000);
    }
});