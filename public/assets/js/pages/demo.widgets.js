(()=>{Apex.grid={padding:{right:0,left:0}},Apex.dataLabels={enabled:!1};var e=function(e){for(var t,r,a=e.slice(),s=a.length;0!==s;)r=Math.floor(Math.random()*s),t=a[s-=1],a[s]=a[r],a[r]=t;return a};$(document).ready((function(){"use strict";for(var t=[47,45,54,38,56,24,65,31,37,39,62,51,35,41,35,27,93,53,61,27,54,43,19,46],r=[],a=1;a<=24;a++)r.push("2018-09-"+a);var s=["#3688fc"];(c=$("#sales-spark").data("colors"))&&(s=c.split(","));var o={chart:{type:"area",height:172,sparkline:{enabled:!0}},stroke:{width:2,curve:"straight"},fill:{opacity:.2},series:[{name:"Hyper Sales",data:e(t)}],xaxis:{type:"datetime"},yaxis:{min:0},colors:s,labels:r,title:{text:"$424,652",offsetX:20,offsetY:20,style:{fontSize:"24px"}},subtitle:{text:"Sales",offsetX:20,offsetY:55,style:{fontSize:"14px"}}};new ApexCharts(document.querySelector("#sales-spark"),o).render();s=["#0acf97"];(c=$("#profit-spark").data("colors"))&&(s=c.split(","));var i={chart:{type:"bar",height:172,sparkline:{enabled:!0}},stroke:{width:0,curve:"straight"},fill:{opacity:.5},series:[{name:"Net Profits ",data:e(t)}],xaxis:{crosshairs:{width:1}},yaxis:{min:0},colors:s,title:{text:"$135,965",offsetX:20,offsetY:20,style:{fontSize:"24px"}},subtitle:{text:"Profits",offsetX:20,offsetY:55,style:{fontSize:"14px"}}};new ApexCharts(document.querySelector("#profit-spark"),i).render();s=["#734CEA"];(c=$("#spark1").data("colors"))&&(s=c.split(","));var l={chart:{type:"line",height:100,sparkline:{enabled:!0}},series:[{data:[25,66,41,59,25,44,12,36,9,21]}],stroke:{width:4,curve:"smooth"},markers:{size:0},colors:s};s=["#34bfa3"];(c=$("#spark2").data("colors"))&&(s=c.split(","));var n={chart:{type:"bar",height:100,sparkline:{enabled:!0}},series:[{data:[12,14,2,47,32,44,14,55,41,69]}],stroke:{width:3,curve:"smooth"},markers:{size:0},colors:s};s=["#f4516c"];(c=$("#spark3").data("colors"))&&(s=c.split(","));var c,d={chart:{type:"line",height:100,sparkline:{enabled:!0}},series:[{data:[47,45,74,32,56,31,44,33,45,19]}],stroke:{width:4,curve:"smooth"},markers:{size:0},colors:s};s=["#00c5dc"];(c=$("#spark4").data("colors"))&&(s=c.split(","));var h={chart:{type:"bar",height:100,sparkline:{enabled:!0}},plotOptions:{bar:{horizontal:!1,endingShape:"rounded",columnWidth:"55%"}},series:[{data:[15,75,47,65,14,32,19,54,44,61]}],stroke:{width:3,curve:"smooth"},markers:{size:0},colors:s};new ApexCharts(document.querySelector("#spark1"),l).render(),new ApexCharts(document.querySelector("#spark2"),n).render(),new ApexCharts(document.querySelector("#spark3"),d).render(),new ApexCharts(document.querySelector("#spark4"),h).render()}));var t=["#727cf5"];(o=$("#campaign-sent-chart").data("colors"))&&(t=o.split(","));var r={chart:{type:"bar",height:60,sparkline:{enabled:!0}},plotOptions:{bar:{columnWidth:"60%"}},colors:t,series:[{data:[25,66,41,89,63,25,44,12,36,9,54]}],labels:[1,2,3,4,5,6,7,8,9,10,11],xaxis:{crosshairs:{width:1}},tooltip:{fixed:{enabled:!1},x:{show:!1},y:{title:{formatter:function(e){return""}}},marker:{show:!1}}};new ApexCharts(document.querySelector("#campaign-sent-chart"),r).render();t=["#727cf5"];(o=$("#new-leads-chart").data("colors"))&&(t=o.split(","));var a={chart:{type:"line",height:60,sparkline:{enabled:!0}},series:[{data:[25,66,41,89,63,25,44,12,36,9,54]}],stroke:{width:2,curve:"smooth"},markers:{size:0},colors:t,tooltip:{fixed:{enabled:!1},x:{show:!1},y:{title:{formatter:function(e){return""}}},marker:{show:!1}}};new ApexCharts(document.querySelector("#new-leads-chart"),a).render();t=["#727cf5"];(o=$("#deals-chart").data("colors"))&&(t=o.split(","));var s={chart:{type:"bar",height:60,sparkline:{enabled:!0}},plotOptions:{bar:{columnWidth:"60%"}},colors:t,series:[{data:[12,14,2,47,42,15,47,75,65,19,14]}],labels:[1,2,3,4,5,6,7,8,9,10,11],xaxis:{crosshairs:{width:1}},tooltip:{fixed:{enabled:!1},x:{show:!1},y:{title:{formatter:function(e){return""}}},marker:{show:!1}}};new ApexCharts(document.querySelector("#deals-chart"),s).render();var o;t=["#727cf5"];(o=$("#booked-revenue-chart").data("colors"))&&(t=o.split(","));var i={chart:{type:"bar",height:60,sparkline:{enabled:!0}},plotOptions:{bar:{columnWidth:"60%"}},colors:t,series:[{data:[47,45,74,14,56,74,14,11,7,39,82]}],labels:[1,2,3,4,5,6,7,8,9,10,11],xaxis:{crosshairs:{width:1}},tooltip:{fixed:{enabled:!1},x:{show:!1},y:{title:{formatter:function(e){return""}}},marker:{show:!1}}};new ApexCharts(document.querySelector("#booked-revenue-chart"),i).render()})();