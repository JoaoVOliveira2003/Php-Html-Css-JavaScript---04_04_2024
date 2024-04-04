import { getStorageItem, setStorageItem } from './utils';
let store = getStorageItem('store');
const setupStore = (product) => {
    store = product.map((product) => {
        const {
            id,
            fields: {featured, name, price, company, colors, image:img },
        } = product;
        const image = img[0].thumbnails.large.url;
        return {id, featured, name, price, company, colors, image};
    });
    setStorageItem('store',store);
};

const findProduct = (id) => {
    let product = store.find((product) => product.id === id);
    return product;
};

export {store, setupStore, findProduct};
