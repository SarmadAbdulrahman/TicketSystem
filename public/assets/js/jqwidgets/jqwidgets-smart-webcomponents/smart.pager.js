
/* Smart HTML Elements v7.4.0 (2020-Apr) 
Copyright (c) 2011-2020 jQWidgets. 
License: https://htmlelements.com/license/ */ //

!function(e){var t={};function a(n){if(t[n])return t[n].exports;var s=t[n]={i:n,l:!1,exports:{}};return e[n].call(s.exports,s,s.exports,a),s.l=!0,s.exports}a.m=e,a.c=t,a.d=function(e,t,n){a.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},a.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},a.t=function(e,t){if(1&t&&(e=a(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(a.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var s in e)a.d(n,s,function(t){return e[t]}.bind(null,s));return n},a.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return a.d(t,"a",t),t},a.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},a.p="",a(a.s=75)}({75:function(e,t){Smart("smart-pager",class extends Smart.BaseElement{static get properties(){return{autoEllipsis:{value:"none",type:"string",allowedValues:["none","before","after","both"]},messages:{value:{en:{firstButton:"First",lastButton:"Last",previousButton:"Previous",nextButton:"Next",navigateToLabel:"Go to:",pageSizeLabel:"Show:",navigateToInputPlaceholder:"",ellipsis:"...",summaryString:"of",summaryPrefix:"of",summarySuffix:""}},type:"object",extend:!0},navigationButtonsPosition:{value:"both",allowedValues:["near","far","both"],type:"string"},navigationInputPosition:{value:"far",allowedValues:["near","far"],type:"string"},pageIndex:{value:0,type:"number"},pageIndexSelectors:{value:0,type:"any"},pagesCount:{value:100,type:"number"},pageSize:{value:10,type:"number"},pageSizeSelectorPosition:{value:"far",allowedValues:["near","far"],type:"string"},pageSizeSelectorDataSource:{value:[10,25,50],type:"array"},showPrevNextNavigationButtons:{value:!1,type:"boolean"},showFirstLastNavigationButtons:{value:!1,type:"boolean"},showNavigationButtonLabels:{value:!1,type:"boolean"},showNavigationInput:{value:!1,type:"boolean"},showSummary:{value:!1,type:"boolean"},showPageSizeSelector:{value:!1,type:"boolean"},showPageIndexSelectors:{value:!1,type:"boolean"},summaryPosition:{value:"far",allowedValues:["near","far"],type:"string"}}}static get listeners(){return{click:"_navigationButtonsClickHandler","nextEllipsisButton.click":"_nextEllipsisButtonClickHandler","previousEllipsisButton.click":"_previousEllipsisButtonClickHandler",down:"_navigationButtonsDownHandler","navigateToInput.change":"_navigateToInputChangeHandler","nextButton.pointerenter":"_updateInBoundsFlag","nextButton.pointerleave":"_updateInBoundsFlag","pageIndexSelectorsContainer.click":"_pageIndexSelectorsContainerClickHandler","pageSizeSelector.change":"_pageSizeSelectorChangeHandler","previousButton.pointerenter":"_updateInBoundsFlag","previousButton.pointerleave":"_updateInBoundsFlag",keydown:"_keyDownHandler",resize:"_resizeHandler","document.up":"_stopRepeat"}}static get requires(){return{"Smart.DropDownList":"smart.dropdownlist.js"}}static get styleUrls(){return["smart.dropdown.css","smart.dropdownlist.css","smart.pager.css"]}template(){return'<div id="container" role="presentation">\n                    <div id="nearButtonsContainer" class="smart-pager-near-buttons-container" role="presentation">\n                        <div id="firstButton" class="smart-first-button smart-pager-button smart-unselectable" role="button" aria-label="First"></div>\n                        <div id="previousButton" class="smart-previous-page-button smart-pager-button smart-unselectable" role="button" aria-label="Previous"></div>\n                    </div>\n                    <div id="middleButtonsContainer" class="smart-pager-middle-buttons-container" role="presentation">\n                        <span id="previousEllipsisButton" class="smart-previous-ellipsis-button smart-pager-page-index-selector" role="button" aria-label="Previous group of pages"></span>\n                        <div id="pageIndexSelectorsContainer" tabindex="0" class="smart-pager-page-index-selectors-container" role="list"></div>\n                        <span id="nextEllipsisButton" class="smart-next-ellipsis-button smart-pager-page-index-selector" role="button" aria-label="Next group of pages"</span>\n                    </div>\n                    <div id="farButtonsContainer" class="smart-pager-far-buttons-container" role="presentation">\n                        <div id="nextButton" class="smart-next-page-button smart-pager-button smart-unselectable" role="button" aria-label="Next"></div>\n                        <div id="lastButton" class="smart-last-button smart-pager-button smart-unselectable" role="button" aria-label="Last"></div>\n                    </div>\n                    <div id="pagerInputAndLabelContainer" class="smart-pager-input-and-label-container" role="presentation">\n                        <span id="navigateToLabel" class="smart-pager-label"></span>\n                        <input type="text" id="navigateToInput" class="smart-pager-input smart-input" />\n                    </div>\n                    <div id="pagerSizeSelectorAndLabelContainer" class="smart-pager-size-selector-and-label-container">\n                        <span id="pageSizeLabel" class="smart-pager-label"></span>\n                        <smart-drop-down-list id="pageSizeSelector" class="smart-page-size-selector"\n                                data-source="[[pageSizeSelectorDataSource]]"\n                                right-to-left="[[rightToLeft]]"\n                                drop-down-height="auto"\n                                selection-mode="one"\n                                selected-indexes=[0]\n                                disabled="[[disabled]]">\n                        </smart-drop-down-list>\n                    </div>\n                    <span id="pagerSummaryContainer" class="smart-pager-summary-container smart-pager-label"></span>\n                </div>'}ready(){super.ready()}render(){const e=this;e.$.navigateToLabel.id||(e.$.navigateToLabel.id=e.id+"NavigateToLabel"),e.$.pageSizeLabel.id||(e.$.pageSizeLabel.id=e.id+"PageSizeLabel"),e.$.pagerSummaryContainer.id||(e.$.pagerSummaryContainer.id=e.id+"SummaryContainer"),e.setAttribute("role","navigation"),e.setAttribute("aria-labelledby",e.$.pagerSummaryContainer.id),e.$.navigateToInput.setAttribute("aria-labelledby",e.$.navigateToLabel.id),e.$.pageSizeSelector.setAttribute("aria-labelledby",e.$.pageSizeLabel.id),e._render(),super.render()}refresh(){this._render()}propertyChangedHandler(e,t,a){super.propertyChangedHandler(e,t,a);const n=this;switch(e){case"navigationButtonsPosition":return void n._renderButtons();case"navigationInputPosition":case"pageSizeSelectorPosition":case"summaryPosition":return void n._renderSettings()}n._render()}next(){this.navigateTo(this.pageIndex+1)}prev(){this.navigateTo(this.pageIndex-1)}beginUpdate(){this._updating=!0}endUpdate(){this._updating=!1,this._render()}_render(){const e=this;if(!e._updating&&(e.$.navigateToInput.value=(1+e.pageIndex).toString(),e._renderButtons(),e._renderPageIndexSelectors(),e._renderSettings(),e._renderVisibility(),e._localize(),e.$.pageSizeSelector&&e.showPageSizeSelector)){const t=e.pageSizeSelectorDataSource.indexOf(e.pageSize);t>=0&&(e.$.pageSizeSelector.selectedIndexes=[t])}}_resizeHandler(){this._renderVisibility()}_renderVisibility(){const e=this,t=e.offsetWidth-20;e._pageIndexSelectorsVisibleCount=e._pageIndexSelectorsCount,e.showSummary?e.$pagerSummaryContainer.removeClass("smart-hidden"):e.$pagerSummaryContainer.addClass("smart-hidden"),e.showPageIndexSelectors?e.$middleButtonsContainer.removeClass("smart-hidden"):e.$middleButtonsContainer.addClass("smart-hidden"),e.showNavigationInput?(e.$navigateToLabel.removeClass("smart-hidden"),e.$navigateToInput.removeClass("smart-hidden")):(e.$navigateToLabel.addClass("smart-hidden"),e.$navigateToInput.addClass("smart-hidden")),e.showPageSizeSelector?(e.$pageSizeLabel.removeClass("smart-hidden"),e.$pageSizeSelector.removeClass("smart-hidden")):(e.$pageSizeLabel.addClass("smart-hidden"),e.$pageSizeSelector.addClass("smart-hidden")),e.showFirstLastNavigationButtons?(e.$firstButton.removeClass("smart-hidden"),e.$lastButton.removeClass("smart-hidden")):(e.$firstButton.addClass("smart-hidden"),e.$lastButton.addClass("smart-hidden")),e.showPrevNextNavigationButtons?(e.$previousButton.removeClass("smart-hidden"),e.$nextButton.removeClass("smart-hidden")):(e.$previousButton.addClass("smart-hidden"),e.$nextButton.addClass("smart-hidden")),e.$previousEllipsisButton.addClass("smart-hidden"),e.$nextEllipsisButton.addClass("smart-hidden"),"after"!==e.autoEllipsis&&"none"!==e.autoEllipsis&&e.pageIndex>=e._pageIndexSelectorsCount&&e.$previousEllipsisButton.removeClass("smart-hidden"),"before"!==e.autoEllipsis&&"none"!==e.autoEllipsis&&e.pageIndex<e.pagesCount-e._pageIndexSelectorsCount&&e.$nextEllipsisButton.removeClass("smart-hidden");for(let t=0;t<e._pageIndexSelectorsCount&&e.$.pageIndexSelectorsContainer.children[t];t++)e.$.pageIndexSelectorsContainer.children[t].classList.remove("smart-hidden");const a=e.$.pagerSummaryContainer.offsetWidth?Math.max(100,e.$.pagerSummaryContainer.offsetWidth):0;let n=e.$.nearButtonsContainer.offsetWidth+e.$.middleButtonsContainer.offsetWidth+e.$.farButtonsContainer.offsetWidth+a+e.$.pagerInputAndLabelContainer.offsetWidth+e.$.pagerSizeSelectorAndLabelContainer.offsetWidth;if(n>0&&n>t&&(n-=e.$.pagerSummaryContainer.offsetWidth,e.$pagerSummaryContainer.addClass("smart-hidden"),n>t&&(n-=e.$.navigateToLabel.offsetWidth,n-=e.$.navigateToInput.offsetWidth,e.$navigateToLabel.addClass("smart-hidden"),e.$navigateToInput.addClass("smart-hidden"),n>t))){if(n-=e.$.pageSizeLabel.offsetWidth,n-=e.$.pageSizeSelector.offsetWidth,e.$pageSizeLabel.addClass("smart-hidden"),e.$pageSizeSelector.addClass("smart-hidden"),n>t){e.$previousEllipsisButton.addClass("smart-hidden"),e.$nextEllipsisButton.addClass("smart-hidden"),n-=e.$.previousEllipsisButton.offsetWidth,n-=e.$.nextEllipsisButton.offsetWidth;for(let a=e._pageIndexSelectorsCount-1;a>=0;a--){const s=e.$.pageIndexSelectorsContainer.children[a];if(n<t||!s)break;e._pageIndexSelectorsVisibleCount--,n-=s.offsetWidth,s.hasAttribute("selected")||s.classList.add("smart-hidden")}}n>t&&e.showFirstLastNavigationButtons&&(e.$firstButton.addClass("smart-hidden"),e.$lastButton.addClass("smart-hidden"))}}_renderSettings(){const e=this,t=e.pageIndex*e.pageSize,a=(e.pageIndex+1)*e.pageSize,n=e.pagesCount*e.pageSize;e.$pagerSummaryContainer.removeClass("near"),e.$pagerSizeSelectorAndLabelContainer.removeClass("near"),e.$pagerInputAndLabelContainer.removeClass("near"),"near"===e.summaryPosition&&e.$pagerSummaryContainer.addClass("near"),"near"===e.pageSizeSelectorPosition&&e.$pagerSizeSelectorAndLabelContainer.addClass("near"),"near"===e.navigationInputPosition&&e.$pagerInputAndLabelContainer.addClass("near"),e.$.pagerSummaryContainer.innerHTML='<span class="smart-summary-start" role="presentation">'+(1+t)+'</span> <span class="smart-summary-hyphen" role="presentation">-</span> <span class="smart-summary-end" role="presentation">'+a+'</span><span class="smart-summary-prefix" role="presentation">'+e.localize("summaryPrefix")+'</span> <span class="smart-summary-total-end" role="presentation">'+n+'</span> <span class="smart-summary-suffix" role="presentation">'+e.localize("summarySuffix")+"</span>"}get _pageIndexSelectorsCount(){const e=this;let t=parseInt(e.pageIndexSelectors);return Array.isArray(e.pageIndexSelectors)&&(t=e.pageIndexSelectors.length),t}_renderPageIndexSelectors(){const e=this;if(e.pageIndex<0||e.pageIndex>=e.pagesCount)return void(e.$.pageIndexSelectorsContainer.innerHTML="");e.$.pageIndexSelectorsContainer.innerHTML="";let t=!1;Array.isArray(e.pageIndexSelectors)&&(t=!0);let a=Math.floor(e.pageIndex/e._pageIndexSelectorsCount)*e._pageIndexSelectorsCount,n=Math.min(e.pagesCount,a+e._pageIndexSelectorsCount),s=0;for(let r=a;r<n;r++){const a=document.createElement("span");let n=r+1;if(a.className="smart-pager-page-index-selector",t){const t=e.pageIndexSelectors[s++];t&&(t.label?n=e.pageIndexSelectors[r].label:"string"==typeof t&&(n=t),t.value&&a.setAttribute("value",e.pageIndexSelectors[r].value))}a.index=r,a.innerHTML=n,a.setAttribute("role","listitem"),e.$.pageIndexSelectorsContainer.appendChild(a),r===e.pageIndex&&(a.classList.add("smart-selected"),a.setAttribute("selected",""),a.setAttribute("aria-current","page"))}}_lastButtonClickHandler(){this.last()}last(){this.navigateTo(this.pagesCount-1)}_firstButtonClickHandler(){this.first()}first(){this.navigateTo(0)}_renderButtons(){const e=this;switch(0===e.pageIndex?(e.$.firstButton.setAttribute("disabled",""),e.$.previousButton.setAttribute("disabled","")):(e.$.firstButton.removeAttribute("disabled"),e.$.previousButton.removeAttribute("disabled")),e.pageIndex===e.pagesCount-1?(e.$.nextButton.setAttribute("disabled",""),e.$.lastButton.setAttribute("disabled","")):(e.$.nextButton.removeAttribute("disabled"),e.$.lastButton.removeAttribute("disabled")),e.pagesCount<=0&&(e.$.firstButton.setAttribute("disabled",""),e.$.previousButton.setAttribute("disabled",""),e.$.nextButton.setAttribute("disabled",""),e.$.lastButton.setAttribute("disabled","")),e.$nearButtonsContainer.removeClass("far"),e.$farButtonsContainer.removeClass("far"),e.$nearButtonsContainer.removeClass("near"),e.$farButtonsContainer.removeClass("near"),e.navigationButtonsPosition){case"near":e.$nearButtonsContainer.addClass("near"),e.$farButtonsContainer.addClass("near");break;case"far":e.$nearButtonsContainer.addClass("far"),e.$farButtonsContainer.addClass("far");break;case"both":e.$nearButtonsContainer.addClass("near"),e.$farButtonsContainer.addClass("far")}}_navigateToInputChangeHandler(){const e=this;let t=parseInt(e.$.navigateToInput.value)-1;isNaN(t)&&(e.$.navigateToInput.value="1",t=parseInt(e.$.navigateToInput.value-1)),e.navigateTo(t)}_pageIndexSelectorsContainerClickHandler(e){const t=this.enableShadowDOM?e.composedPath()[0].closest(".smart-pager-page-index-selector"):e.target.closest(".smart-pager-page-index-selector");t&&!t.classList.contains("smart-selected")&&this.navigateTo(t.index)}_pageSizeSelectorChangeHandler(e){!this.showPageSizeSelector||this.disabled||this._updating||(this.pageSize=parseInt(e.detail.value),this.$.fireEvent("pageSizeChanged",{value:parseInt(e.detail.value)}))}_keyDownHandler(e){const t=this;if(!t.disabled&&(t.enableShadowDOM&&t.shadowRoot.activeElement||document.activeElement)!==t.$.navigateToInput&&null===t.$.pageSizeSelector.getAttribute("focus"))switch(e.key){case"End":t.last(),e.preventDefault();break;case"Home":t.first(),e.preventDefault();break;case"PageDown":case"ArrowDown":case"ArrowLeft":t.prev(),e.preventDefault();break;case"PageUp":case"ArrowUp":case"ArrowRight":t.next(),e.preventDefault()}}_nextButtonClickHandler(){this.next()}_previousButtonClickHandler(){this.prev()}navigateTo(e){const t=this.pageIndex;this.disabled||this.pageIndex===e||e<0||e>=this.pagesCount||(this.pageIndex=e,this._render(),this.$.fireEvent("change",{oldIndex:t,index:e}))}_localize(){const e=this,t=["firstButton","lastButton","previousButton","nextButton"];for(let a=0;a<t.length;a++){const n=e.$[t[a]];!e.showNavigationButtonLabels&&a<2?(n.innerHTML="",0===a?n.classList.add("smart-arrow-left-first"):n.classList.add("smart-arrow-right-last")):!e.showNavigationButtonLabels&&a>=2?(n.innerHTML="",2===a?n.classList.add("smart-arrow-left"):n.classList.add("smart-arrow-right")):(n.classList.remove("smart-arrow-left"),n.classList.remove("smart-arrow-right"),n.classList.remove("smart-arrow-left-first"),n.classList.remove("smart-arrow-right-last"),n.innerHTML=e.localize(t[a]))}e.$.pageSizeLabel.innerHTML=e.localize("pageSizeLabel"),e.$.navigateToLabel.innerHTML=e.localize("navigateToLabel"),e.$.previousEllipsisButton.innerHTML=e.localize("ellipsis"),e.$.nextEllipsisButton.innerHTML=e.localize("ellipsis"),e.$.navigateToInput.placeholder=e.localize("navigateToInputPlaceholder")}_nextEllipsisButtonClickHandler(){this.navigateTo(this._pageIndexSelectorsCount+this.pageIndex)}_previousEllipsisButtonClickHandler(){this.navigateTo(-this._pageIndexSelectorsCount+this.pageIndex)}_navigationButtonsClickHandler(e){const t=this;if(!t.disabled)switch(t.enableShadowDOM?e.composedPath()[0].closest(".smart-pager-button"):e.target.closest(".smart-pager-button")){case t.$.firstButton:t._firstButtonClickHandler(e);break;case t.$.lastButton:t._lastButtonClickHandler(e);break;case t.$.previousButton:t._previousButtonClickHandler(e);break;case t.$.nextButton:t._nextButtonClickHandler(e)}}_navigationButtonsDownHandler(e){const t=this,a=t.enableShadowDOM?e.originalEvent.composedPath()[0].closest(".smart-pager-button")||e.originalEvent.composedPath()[0].closest(".smart-pager-page-index-selector"):e.originalEvent.target.closest(".smart-pager-button")||e.originalEvent.target.closest(".smart-pager-page-index-selector");!t.disabled&&a&&(t.hasRippleAnimation&&Smart.Utilities.Animation.Ripple.animate(a,e.pageX,e.pageY),a!==t.$.previousButton&&a!==t.$.nextButton||t._startRepeat(e,a))}_updateInBoundsFlag(e){const t=this,a=t.enableShadowDOM?e.composedPath()[0]:e.target;a._isPointerInBounds=!0,-1!==e.type.indexOf("leave")&&(a._isPointerInBounds=!1),1!==("buttons"in e?e.buttons:e.which)&&t._stopRepeat()}_startRepeat(e,t){const a=this;a._initialTimer||(a._initialTimer=setTimeout((function(){a._repeatTimer=setInterval(()=>{t._isPointerInBounds&&(t===a.$.previousButton?a._previousButtonClickHandler(e):a._nextButtonClickHandler(e))},50)}),150))}_stopRepeat(){const e=this;e._repeatTimer&&(clearInterval(e._repeatTimer),e._repeatTimer=null),e._initialTimer&&(clearTimeout(e._initialTimer),e._initialTimer=null)}})}});