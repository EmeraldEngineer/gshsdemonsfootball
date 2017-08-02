/* Dynamically fills contact info into HTML div to try and prevent automated collection of contact info, I'm aware it isn't elegant. */
var areaCode = '970-';
var varsityPhone = '379-0709';
var jvPhone = '531-2511';
var freshPhone = '618-6074';

var varsityName = 'rocky';
var jvName = 'toddgair';
var freshName = 'gregorysholley';

var varsityDomain = 'masonmorse.com';
var jvDomain = 'yahoo.com';
var freshDomain = 'gmail.com';


var varsityContact = document.getElementById('contactRocky');

varsityContact.innerHTML ='Varsity Coach<br> Rocky Whitworth: ' + '<br>' + areaCode + varsityPhone + ' | ' + varsityName + '@' + varsityDomain;

var jvContact = document.getElementById('contactTodd');

jvContact.innerHTML ='Junior Varsity Coach<br> Todd Gair: ' + '<br>' + areaCode + jvPhone + ' | ' + jvName + '@' + jvDomain;

var freshContact = document.getElementById('contactGreg');

freshContact.innerHTML ='Freshman Coach<br> Greg Holley: ' + '<br>' + areaCode + freshPhone + ' | ' + freshName + '@' + freshDomain;
