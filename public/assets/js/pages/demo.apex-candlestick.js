(()=>{var e=["#0acf97","#fa5c7c"];(r=$("#simple-candlestick").data("colors"))&&(e=r.split(","));var a={chart:{height:400,type:"candlestick"},plotOptions:{candlestick:{colors:{upward:e[0],downward:e[1]}}},series:[{data:seriesData}],stroke:{show:!0,colors:"#f1f3fa",width:[1,4]},xaxis:{type:"datetime"},grid:{borderColor:"#f1f3fa"}};new ApexCharts(document.querySelector("#simple-candlestick"),a).render();e=["#0acf97","#fa5c7c"];(r=$("#combo-candlestick").data("colors"))&&(e=r.split(","));var o={chart:{height:240,type:"candlestick",toolbar:{show:!1},zoom:{enabled:!1}},series:[{data:seriesData}],plotOptions:{candlestick:{colors:{upward:e[0],downward:e[1]}}},xaxis:{type:"datetime"},grid:{borderColor:"#f1f3fa"}},t=new ApexCharts(document.querySelector("#combo-candlestick"),o);t.render();var r;e=["#727cf5","#ffbc00"];(r=$("#combo-bar-candlestick").data("colors"))&&(e=r.split(","));a={chart:{height:160,type:"bar",toolbar:{show:!1,autoSelected:"selection"},selection:{xaxis:{min:new Date("20 Jan 2017").getTime(),max:new Date("10 Dec 2017").getTime()},fill:{color:"#6c757d",opacity:.4},stroke:{color:"#6c757d"}},events:{selection:function(e,a){t.updateOptions({xaxis:{min:a.xaxis.min,max:a.xaxis.max}},!1,!1)}}},dataLabels:{enabled:!1},plotOptions:{bar:{columnWidth:"80%",colors:{ranges:[{from:-1e3,to:0,color:e[0]},{from:1,to:1e4,color:e[1]}]}}},series:[{name:"volume",data:seriesDataLinear}],xaxis:{type:"datetime",axisBorder:{offsetX:13}},yaxis:{labels:{show:!1}},grid:{borderColor:"#f1f3fa"}};new ApexCharts(document.querySelector("#combo-bar-candlestick"),a).render()})();