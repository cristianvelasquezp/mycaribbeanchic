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
    },
    variationColor: {
        color:[],
        colorSelected: null,
    },
    variation: {
        values: [],
        selected: null,
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

export const modelVariationColor = function (data) {
    data.forEach(item => {
        const color = {
            name: item.dataset.colorName,
            hex: item.dataset.colorHex,
        }
        state.variationColor.color.push(color);
    });
}

export const modelVariation = function (data) {
    data.forEach(item => {
        const value = {
            name: item.dataset.name,
        }
        state.variation.values.push(value);
    });
}

export const modelVariationColorSelected = function(color) {
    state.variationColor.colorSelected = color;
}

export const modelVariationSelected = function(item) {
    state.variation.Selected = item;
}

export const getResults = function ( page = 1) {
    state.results.currentPage = page;
    const start = (state.results.currentPage - 1) * state.results.itemsPerPage;
    const end = start + state.results.itemsPerPage;

    return state.results.products.slice(start,end);
}