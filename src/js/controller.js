import * as model from "./model";
import SliderView from "./view/slider-view"
import ListView from "./view/list-view"
import PaginationView from "./view/pagination-view"
import VariationColorView from "./view/variation-color-view"
import VariationView from "./view/variation-view"
import {getResults, modelItemsPerSlider, modelProductList, modelVariationColor} from "./model";


const controlSlider = function(data2) {
    const data = data2;
    model.modelSlider(data);
    SliderView.render(model.state.slider);
}

const controlList = function (data){
    ListView.renderSpinner();
    model.modelProductList(data);
    ListView.render(getResults(1));
    PaginationView.render(model.state.results);
}

const controlChangeSlider = function (data) {
    model.modelSliderChange(data);
    SliderView.sliderChange(model.state.sliderGoTo.currentSlide);
}

const controlItemsPerSlider = function (data) {
    model.modelItemsPerSlider(data);
}

const controlPagination = function (page) {
    ListView.renderSpinner();
    ListView.render(model.getResults(page));
    PaginationView.update(model.state.results);
}

const controlVariationColor = function (data) {
    model.modelVariationColor(data);
    VariationColorView.render(model.state.variationColor.color);
}
const updateVariationColor = function (color) {
    model.modelVariationColorSelected(color);
    VariationColorView.colorSelected(model.state.variationColor.colorSelected)
    if (model.state.variation.values.length)
        VariationView.updateSelected();
}
const controlVariation = function (data) {
    model.modelVariation(data);
    VariationView.render(model.state.variation.values);
}

const updateVariation = function (item) {
    model.modelVariationSelected(item);
    VariationView.selected(model.state.variation.Selected)
}

export const init = function () {
    SliderView.addHandlerClick(controlChangeSlider);
    SliderView.addHandlerLoad(controlSlider, controlItemsPerSlider);
    SliderView.addHandlerResize(controlItemsPerSlider);
    ListView.addHandlerLoad(controlList);
    PaginationView.addHandlerClick(controlPagination);
    VariationColorView.addHandlerLoad(controlVariationColor);
    VariationColorView.addHandlerClick(updateVariationColor);
    VariationView.addHandlerLoad(controlVariation);
    VariationView.addHandlerClick(updateVariation);
}

