import {data} from "autoprefixer";

export const state = {
    results: {
        products: [],
        itemsPerPage: 12,
        currentPage: 1,
        itemsTotal: 0,
    },

    slider: [],
    sliderGoTo:{
        sliderLength: 0,
        currentSlide: 0,
        itemsPerSlider: 3,
    },
    pagination: {
    }
}

export const modelSlider =  function (data) {
    data.forEach( function (item) {
        const product = {
            id: item.dataset.id,
            link: item.dataset.link,
            name: item.dataset.name,
            imageUrl: item.dataset.image,
            price: item.dataset.price,
            brand: item.dataset.brand,
            brandLink: item.dataset.brandLink,
        }
        state.slider.push(product);
        state.sliderGoTo.sliderLength = data.length;
    })
}

export const modelProductList =  function (data) {
    data.forEach( function (item) {
        const product = {
            id: item.dataset.id,
            link: item.dataset.link,
            name: item.dataset.name,
            imageUrl: item.dataset.image,
            price: item.dataset.price,
            brand: item.dataset.brand,
            brandLink: item.dataset.brandLink,
        }
        state.results.products.push(product);
    })

    this.state.results.itemsTotal = data.length;
}

export const modelSliderChange = function (goTo) {

    state.sliderGoTo.currentSlide += goTo;
    if (state.sliderGoTo.currentSlide > 0 )
        state.sliderGoTo.currentSlide = state.sliderGoTo.sliderLength * -1 + state.sliderGoTo.itemsPerSlider;

    if ( state.sliderGoTo.currentSlide < (state.sliderGoTo.sliderLength * -1 + state.sliderGoTo.itemsPerSlider))
        state.sliderGoTo.currentSlide = 0;
}

export const modelItemsPerSlider = function (windowSize) {
    if (windowSize <= 600){
        state.sliderGoTo.itemsPerSlider = 1;
    }else {
        state.sliderGoTo.itemsPerSlider = 3;
    }
}

export const modelItemsLoadMore = function () {

}

export const getResults = function ( page = 1) {
    state.results.currentPage = page;
    const start = (state.results.currentPage - 1) * state.results.itemsPerPage;
    const end = start + state.results.itemsPerPage;

    return state.results.products.slice(start,end);
}