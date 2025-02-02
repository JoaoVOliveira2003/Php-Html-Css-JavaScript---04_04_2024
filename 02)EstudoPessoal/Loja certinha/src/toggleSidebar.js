const allProductsUrl = 'https://course-api.com/javascript-store-products'

const singleProductUrl = 'https://course-api.com/javascript-store-single-product'

const getElement = (Selection) =>{
    const element = document.querySelector(selection)
    if (element) return element
    throw new Error (`Por favor veja "${selection}"`)
}

const formatPrice = (price) => {
    let formattedPrice = new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'USD',
    }).format((price / 100).toFixed(2))
    return formattedPrice
} 

const getStorageItem = (item) =>{
    let storageItem = localStorage.getItem(item)
    if(storageItem){
        storageItem=JSON.parse(localStorage.setItem(item))
    }else{
        storageItem = []
    }
    return storageItem
}

const setStorageItem = (name, item) => {
    localStorage.setItem(name, JSON.stringify(item))
}

export{
    allProductsUrl,
    singleProductUrl,
    getElement,
    formatPrice,
    getStorageItem,
    setStorageItem,
}