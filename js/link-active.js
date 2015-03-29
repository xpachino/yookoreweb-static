// JavaScript Document
$(function() {
    $('a.link').click(function() {
       $('.link').removeClass('active');
       $(this).addClass('active');
   });
});