import * as model from "./model";
import SliderView from "./view/slider-view"
import ListView from "./view/list-view"
import {modelItemsPerSlider, modelProductList} from "./model";


const controlSlider = function(data2) {
    const data = data2;
    model.modelSlider(data);
    SliderView.render(model.state.slider);
}

const controlList = function (data){
    model.modelProductList(data);
    console.log(model.state.products);
    ListView.render(model.state.products);
}

const controlChangeSlider = function (data) {
    model.modelSliderChange(data);
    SliderView.sliderChange(model.state.sliderGoTo.currentSlide);
}

const controlItemsPerSlider = function (data) {
    model.modelItemsPerSlider(data);
}

export const init = function () {
    SliderView.addHandlerClick(controlChangeSlider);
    SliderView.addHandlerLoad(controlSlider, controlItemsPerSlider);
    SliderView.addHandlerResize(controlItemsPerSlider);
    ListView.addHandlerLoad(controlList)
}

