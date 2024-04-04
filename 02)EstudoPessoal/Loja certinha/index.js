import './src/toggleSidebar.js';
import './src/cart/toggleCart.js';
import './src/cart/setupCart.js';
//import expecifico

import fetchProducts from './src/fetchProducts.js';
import {setupStore , store} from './src/store.js';
import display from './src/displayProducts.js';
import {getElement} from './src/utils.js';

const init = async () => {
    const product = await fetchProducts();
    if (products) {
        //add
        setupStore(products);
        const featured = store.filter((product) => product.featured === true);
        display(featured,getElement('featured-center'));
    }
};

window.addEventListener('DOMContentLoaded', init);