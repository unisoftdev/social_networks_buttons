document.addEventListener("DOMContentLoaded", function(event) { 
var urli = window.location.href;
var TitleUniS = document.title;
var nfi ='<div class="nfi"><a id="';
var hi = 'target="_blank" rel="nofollow" href="https://';
var FBUniS = nfi+'fb"'+hi+'www.facebook.com/sharer/sharer.php?u='+urli+'">facebook</a></div>';
var TWUniS = nfi+'tw"'+hi+'twitter.com/intent/tweet?url='+urli+'&text='+TitleUniS+'">twitter</a></div>';
var GPUniS = nfi+'gp"'+hi+'plus.google.com/share?url='+urli+'">google+</a></div>';
var social =FBUniS+TWUniS+GPUniS;
document.getElementById("socialnetworks").innerHTML = social;
});